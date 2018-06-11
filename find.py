#!/usr/bin/python
import os

def get_paths():
	dirpath = os.getcwd()
	foldername = os.path.basename(dirpath)
	paths = []
	for root, dirs, files in os.walk(dirpath):
	    for file in files:
	        if file.endswith(".html"):
	        	path = os.path.join(root, file)
	        	data = path.split(foldername)
	        	paths.append(foldername+data[1])
	paths.append(len(paths))
	return paths