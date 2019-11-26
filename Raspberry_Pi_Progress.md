# __Raspberry Pi Progress__
 We will update everything here so that everyone will be able to read it.
 <br />Password for boards are __firestream__  <br />
 
 
 ## __Connecting to Pi Boards__
  <br /> 1. First need to find the board's IP  <br /> 
  <br /> 2. Go to the pi's terminal<br /> 
 <br />  3. Type ifconfig wlan0 <br /> 
  <br /> 4. Get the IP address of the pi <br /> 
 ### __ Windows __
<br /> Type IP address into PuTTY <br /> 
<br /> Type in pi for login as: and then firestream for the password: <br />
 ### __ MAC __ 
    Open terminal --> ssh pi@<IPaddress> 
    Type firestream for the password
 
<br />                __THEN YOU SHOULD BE CONNECTED!__      <br />
 
 ## __Configuring the Webcam__
 
 `sudo apt-get update`
 
 `sudo apt-get install motion`
 
 `lsusb`  *This is how you check if your peripheral is seen by the MCU*
<br />  `sudo nano /etc/motion/motion.conf`<br /> 

|Settings    |
|    ---     |
| daemon --> ON |
| framerate --> 1500|
| width --> 640|
|height --> 480|
|stream_port --> 8081|
|stream_quality --> 50|
|stream_localhost --> OFF|
|webcontrol_localhost --> OFF|
|quality --> 100|
|brightness --> 20|
|post_capture --> 5|

`sudo nano /etc/default/motion`
change start_motion_daemon --> yes

`sudo service motion restart`

`sudo motion`  [the webcam will be turned on]

open a web browser --> type `http://<IP address>:<stream_port>`

 
 

 
 
 
