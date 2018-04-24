import time
import serial
import binascii

abort_after = 15
count = 0

rfid_serial = serial.Serial(
        port='/dev/ttyS0',
        baudrate = 57600,
        parity=serial.PARITY_NONE,
        stopbits=serial.STOPBITS_ONE,
        bytesize=serial.EIGHTBITS,
        timeout=0
)

#angle = input("Angle of tag being scanned: ")
rfid_serial.flushInput()
start = time.time()
while True:
        delta_time = time.time() - start
        if (delta_time >= abort_after):
                break
        bytesToRead = rfid_serial.inWaiting()
        if (bytesToRead > 0):
                time.sleep(1)
                x = rfid_serial.read(18)
                x = binascii.hexlify(x)
                print x
                print "here"
                #print("\n")
                if (x[0:4] == '1100'):
                        count = count + 1

frequency = count / float(abort_after)
#with open("results.txt", "a") as myfile:
#        myfile.write("Number of scans at %s  degrees in %s seconds: %s scans \n" % (angle, abort_after, count))
#        myfile.write("Frequency: %s \n" % (frequency))
#with open("csvResults.txt", "a") as myfile:
#        myfile.write("%s,%s,%s,%s \n" % (angle, abort_after, count,frequency)) #creates csv of (test angle, time scanned, count, frequency)
#print("Finished!")
#print "Number of scans at",angle,"degrees in",abort_after,"seconds:",count,"scans"
#print "Number of scans per second:",frequency
