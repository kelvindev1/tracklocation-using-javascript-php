import pynotify
import requests

# Install the required dependencies
pynotify.install()  # Install pynotify library

# Set your target number (mobile phone number to track)
target_number = "+123456789"

# Create a notification message
msg = f"Target number: {target_number}"

try:
    # Send the HTTP request to the tracking server
    response = requests.post("https://www.cellphonetracker.com//tracking", data={"number": target_number})

    # If the request is successful, display the notification
    pynotify.notify(msg)
except Exception as e:
    # Display the error message
    print(f"Error: {str(e)}")