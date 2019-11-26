# __Raspberry Pi Progress__
 We will update everything here so that everyone will be able to read it.
 <br />Password for boards are __firestream__  <br />
 
 
 Connecting to Pi Boards
 First need to find the board's IP - Go to the pi's terminal -- ifconfig wlan0
 Get the IP address of the pi
 
 Type it into PuTTY (type in pi as the user and then firestream for the password or terminal if you have a MAC (ssh pi@<IPaddress> and then firestream for the password)
 
 THEN YOU SHOULD BE CONNECTED
 
 Configuring the Webcam
 
 sudo apt-get update
 
 sudo apt-get install motion
 
 lsusb [Check if the webcam you're using is present]
 
 sudo nano /etc/motion/motion.conf
 
daemon --> ON
framerate --> 1500
width --> 640
height --> 480
stream_port --> 8081
stream_quality --> 50
stream_localhost --> OFF
webcontrol_localhost --> OFF
quality --> 100
brightness --> 20
post_capture --> 5

sudo nano /etc/default/motion
change start_motion_daemon --> yes

sudo service motion restart  

sudo motion  [the webcam will be turned on after this command]

open a web browser --> type http://<IP address>:<stream_port>
Now you should see whatever the camera is seeing
 
 

 
 
 
