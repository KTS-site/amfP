import os

file_path = 'C:\\path\\to\\your\\directory\\amflogo.png'  # Adjust the path accordingly
permissions = os.access(file_path, os.R_OK)
print("File is readable:", permissions)