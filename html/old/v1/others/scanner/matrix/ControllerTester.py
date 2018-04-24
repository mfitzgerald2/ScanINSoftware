#Test program for MatrixController

from MatrixController import RGBColors, Message, launch_matrix
from multiprocessing import Process, Queue
import time, random	

# returns a list of messages for a random number of students (1 - max)
total_students = 0

def mimic_scan():
	global total_students
	total_students += 1
	text = "Hello Student " + str(total_students) + "!"
	color = RGBColors[random.randint(0, len(RGBColors) - 1)]
	message = Message(text, color)
	return message

if __name__ == '__main__':
	q = Queue()
	p = Process(target=launch_matrix, args=(q,))
	p.start()


while True:
	time.sleep(1.0)
	raw_input("press ENTER to mimic scan")
	scan = mimic_scan()
	print("Scanned " + scan.text)
	q.put(scan)
	#q.put(Message("Hello", RGBColors[random.randint(0, len(RGBColors) - 1)]))

