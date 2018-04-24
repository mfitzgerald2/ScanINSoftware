# Matrix.py - Wrapper for the Adafruit LED Matrix Display
#	These classes are for easy wrapping of an LED Matrix.
#	The idea is that you can create an object of this type and it will 
#	use a desktop GUI to display what the Matrix would show if attached.

from rgbmatrix import RGBMatrix
from PIL import Image, ImageTk

# The number of pixels of width in an Adafruit Matrix
#	Widths are always a multiple of 32 pixels
#	Bigger single matrices are an internally a matrix chain
#	Adafruit's library wants the chain length
px_per_chain = 32

# Note when constructing: If you have a chain of matrices,
#	just use the total width in pixels.
class AdafruitMatrix:
	# Matrix constructor
	def __init__(self, width, height):
		# Initialize a adafruit matrix object
		self.AdaMatrix = RGBMatrix(height, width/px_per_chain)

	def SetImage(self, image):
		self.AdaMatrix.SetImage(image.im.id)


import Tkinter as tk
from multiprocessing import Process, Queue

class VirtualMatrix:
	# Matrix constructor
	def __init__(self, width, height):
		self.queue = Queue()
		print("Starting matrix process")
		p = Process(target=StartMatrix, args=(self.queue,width,height))
		p.start()

	def SetImage(self, img):
		self.queue.put(img)

# A data holding object to hold relevant data about the VirtualMatrix
#	Specifically: the root tkinter object and the canvas
class VirtualMatrixData():
	def __init__(self, shared_queue, width, height):
		self.queue = shared_queue
		self.width = width
		self.height = height
	
	def SetRoot(self, root):
		self.root = root
	
	def SetCanvas(self, canvas):
		self.canvas = canvas

# Scaling factor for the matrix image
SCALE = 3

def StartMatrix(shared_queue,width,height):
	print("Starting matrix")
	virt_mat_dat = VirtualMatrixData(shared_queue,width,height)
	root = tk.Tk()
	root.title("Virtual Matrix")
	virt_mat_dat.SetRoot(root)
	canvas = tk.Canvas(root, width=width*SCALE, height=height*SCALE)
	canvas.pack()
	virt_mat_dat.SetCanvas(canvas)
	root.after(50, UpdateMatrix, virt_mat_dat)
	root.mainloop()

def UpdateMatrix(virt_mat_dat):
	# Wait for an image to appear in the queue
	#	and show it once it appears
	q = virt_mat_dat.queue
	while (not q.empty()):
		img = virt_mat_dat.queue.get()
	print("UpdateMatrix", img.height, img.width)
	tk_img = ImageTk.PhotoImage(img)
	virt_mat_dat.canvas.create_image((img.width*SCALE)/2, (img.width*SCALE)/2, image=tk_img)
	virt_mat_dat.canvas.delete()
	virt_mat_dat.root.after(500,UpdateMatrix, virt_mat_dat)
