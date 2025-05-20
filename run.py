import subprocess
import os

# Set the directory to serve (you can change this to your PHP project folder)
serve_dir = os.getcwd()  # current directory

# Set the port
port = 8080

# Build the command
command = ["php", "-S", f"localhost:{port}", "-t", serve_dir]

try:
    print(f"Starting PHP server at http://localhost:{port} serving {serve_dir}")
    subprocess.run(command)
except FileNotFoundError:
    print("Error: PHP is not installed or not found in system PATH.")
