# Free private deployment of server programs

The following servers are completely free (developed in C language), which is no authentication and can be used in Tencent Cloud, Alibaba Cloud or LAN deployment. Now the following servers are open :


| Server        | Feature           | Remarks  |
| ------------- |:-------------  |:-----|
| voipServer    | One-to-one video call 					  | it needs to work with msgServer |
| msgServer     | Single chat (such as text chat), private message, signaling      |    |
| chatDBServer  | Offline message storage      				  |     |
| groupServer   | group chat      					      | In the case of one-to-one chat without group chat, this server does not neet to be started.    |
| chatRoomServer| people chat      					  |     |
| liveSrcServer | people video conference and push RTMP stream       |     |
| liveVdnServer | Interactive live broadcast, vdn distribution network		      |     |
| liveProxyServer | pull RTSP  stream server     				      |     |
| videoRecServer | Recording function     				      |     |
| groupHttpProxyServer | System message function and group operation function     				      |     |


![#f03c15](https://placehold.it/15/f03c15/000000?text=+) The server program in the web-supported directory contains the program which supports the web and a self-signed certificate.

The server program in the do-not-support-web directory does not support the web side.

**Support CentOS 64bit，Ubuntu 64bit**. Please install the VM (use bridge mode) or docker test on Windows system.

![#f03c15](https://placehold.it/15/f03c15/000000?text=+) Deployment(Please switch to root user or execute with sudo)：

1:Download the server program: git clone https://github.com/starrtc/starrtc-server.git
   Then enter the corresponding directory and execute the command:chmod +x *.sh && ./start.sh,and you have finished the deployment.
   If you want to run a program alone, continue with the steps below.

2:Go to the appropriate directory to add executable permissions to all server programs: chmod +x *Server 

3:Deploy each server program as follows:

The .log suffix file is a log file. You can view related logs by using the command: tail -f xxx.log.

Deployment of Voip server 
==
```java
Start the program in the background:
nohup ./voipServer > voipServer.log 2>&1 &

In order to verify whether the startup is successful, you can start it without background by running the command : ./voipServer.
Then you can judge the startup status by seeing the output log.
If the startup is successful, you can start it in the background.
```
Note: It is also necessary to deploy msgServer for sending calls, receiving calls and other messages.


Deployment of IM server 
==
IM full service contains 3 server programs. They are:

The message server:msgServer, the offline message data server:chatDBServer, and the group management server:groupServer.
These servers can be started separately.

If you just need one-to-one chat, you do not need to start groupServer.

You can keep your original im system unchanged, and use our im system as a signaling service which serves for services such as voip.
```java
Start the program in the background:
nohup ./msgServer     > msgServer.log 2>&1 &
nohup ./chatDBServer  > chatDBServer.log 2>&1 &
nohup ./groupServer   > groupServer.log 2>&1 &
```

Deployment of chatRoom server 
==
```java
Start the program in the background:
nohup ./chatRoomServer > chatRoomServer.log 2>&1 &
```

Deployment of liveSrc server 
==
```java  
Start the program in the background:
nohup ./liveSrcServer > liveSrcServer.log 2>&1 &
```

Push RTMP stream test: open the android client app and create a new meeting room, then click RTMP button to fill in the RTMP URL, and click the push stream button. 
Then you can open the RTMP URL to watch the meeting screen by the other 3rd party player such as VLC player.


You can push the stream in the live broadcast room in the same way, then you can watch the live broadcast with vlc player.

Deployment of liveVdn server 
==
There are unlimited number of viewers in live broadcast chatroom,
```java  
Start the program in the background:
nohup ./liveVdnServer > liveVdnServer.log 2>&1 &
```

Deployment of recording server 
==
The video recording function is used for liveSrcServer and voipServer currently,which 
is a beta version now. And the output is ts slice, while there is no audio at the moment that will be added later.


The format of file directory is：./RECFOLDER/username/serviceName_NumberOfMilliseconds_SliceNumber.ts，such as:./RECFOLDER/userId/liveSrcServer_873692718_1.ts

The recording function will work if startup this server. And if you want to stop recording, you can shut down the server.

```java  
Start the program in the background:
nohup ./videoRecServer > videoRecServer.log 2>&1 &
```

System message and group operation function Server
==
the server will be worked when the user uses the AEC advanced mode. For example, sending a system message to a user( such as a notification of purchase successfully ), or sending a group system message to all users of the group((such as someone entering or leaving a group).

Please pay attention that this service is only available for other services on the intranet. Do not expose the port 19922 to the external network!


```java 
push system information:
toUsers：all users who need to send a message, which is separated by commas.
msg： Text message that needs to be sent
digest： a summary of the text message that needs to be sent for push mode when the user is offline
http://www.xxx.com:19922/pushSystemMsgToUsers?toUsers=userId1,userId2,userId3,...&msg=xxxx&digest=xxxx

Push group message (all members):   
http://www.xxx.com:19922/pushGroupMsg?groupId=xxx&msg=xxxx
```

The following five groups-related interfaces are also implemented in the client sdk.
The server can synchronize the group members or perform other operations on the group members actively.
Please select the appropriate group member synchronization strategy according to actual needs.

```java 
Do not pass the parameter groupList means clearing the members of this group when synchronizing.
Synchronization group members:	
groupId: group ID
groupList: All user ids in the group, separated by commas
ignoreList： all user ids which is set for mute message notification, which is separated by commas.
http://www.xxx.com:19922/syncGroupList?groupId=xxx&groupList=userId1,userId2,userId3,...&ignoreList=userId1,userIdx,...

Add group members: 
groupId: group ID
addedUsers: All user ids of the group to be added,which is separated by commas.
http://www.xxx.com:19922/addUsersToGroup?groupId=xxx&addedUsers=userId1,userId2,userId3,...

Delete group members:    
groupId: group ID
deledUsers: All user ids that need to be removed from the group, which is separated by commas.
http://www.xxx.com:19922/delUsersFromGroup?groupId=xxx&deledUsers=userId1,userId2,userId3,...

Set mute:	
groupId: group ID
ignoreList: All user ids that need to be set mute notification from this group,which is separated by commas.
http://www.xxx.com:19922/setPushIgnore?groupId=xxx&ignoreList=userId1,userIdx,...

Unset mute::	
groupId: group ID
ignoreList: All user ids that need to be unset mute notification from this group,which is separated by commas.
http://www.xxx.com:19922/unsetPushIgnore?groupId=xxx&ignoreList=userId1,userIdx,...
```





Deployment of pull stream server 
==
The server is used to pull a third-party rtsp stream (RTMP stream is not open yet), and convert the stream to the tream starRTC protocol, then forward the stream to liveSrcServer,
Then you can play this stream in a meeting room or an interactive live broadcast of each terminal (Android, iOS, PC and web).

```java  
Start the program in the background:
nohup ./liveProxyServer > liveProxyServer.log 2>&1 &
```

Test method: Firstly, you find a rtsp stream that can be played normally (you can also use the default test stream in the demo).
Secondly, you can open the android demo, open the settings -> "3rd party flow test ->" create a new stream, fill in the name and the stream's rstp address (you can also use the default test stream without filling in).
At the same time, you need to select whether the stream is played in a live room or in a meeting room. 
At last, you can go to the live room or meeting room to watch the video stream.


You can also call it  by using HTTP:

- 1 Create channelId and pull the stream, and the interface will return channelId:

http://www.xxx.com:19932/push?streamType=rtsp&streamUrl=rtsp://184.72.239.149/vod/mp4://BigBuckBunny_175k.mov&roomLiveType=0&roomId=xxxx&extra=xxxxx 

roomId and extra are optional parameters

- 2 Pull the stream to the specified channelId:

http://www.xxx.com:19932/push?streamType=rtsp&streamUrl=rtsp://184.72.239.149/vod/mp4://BigBuckBunny_175k.mov&channelId=xxxx

- 3 Stop pulling the stream (do not delete the channelId,which still exists in the list)：

http://www.xxx.com:19932/close?channelId=xxxx

- 4 Stop pulling the stream and deleting the channelId at the same time:

http://www.xxx.com:19932/delete?channelId=xxxx

 Port needed to be open
====
| Server       | port           | Port needed to be open on the web         | 
| ------------- |:-------------  |:-------------  |
| msgServer      | 19903(tcp)     | 29991(tcp):https trust test   | 
| voipServer     | 10086(udp)  44446(udp):P2P communication   | 10087(tcp):websocket 10088(udp):webrtc   29992(tcp):https trust test| 
| chatRoomServer | 19906(tcp)      | 29993(tcp)::https trust test  | 
| liveSrcServer  | 19931(udp)       | 19934(tcp):websocket 19935(udp):webrtc 29994(tcp)::https trust test |
| liveVdnServer  | 19928(udp)     	 | 19940(tcp):websocket 19941(udp):webrtc 29995(tcp)::https trust test	|
| liveProxyServer |19932(tcp)   	 |   |


Test method
=====
Download[client demo](https://docs.starrtc.com/en/download/)，

Open "Settings -> Server Configuration" and fill in your server ip (you should be careful not to change the port number and you do not need to add the "http://" prefix if you use the demo name instead of ip).


Development of client app
=====
if you develop your own client app based on a private deployment server，please refer to [development document](https://docs.starrtc.com/zh-cn/docs/android-3b.html)，

the demo you can refer to：https://docs.starrtc.com/en/download/

 Development of Server
=====
You can open the configuration file named starrtc.conf and modify the value of aecurl (the server does not support https address currently). Please refer to the demo in the server-api directory for development.

Contact
=====
QQ ： 2162498688

E-mail：<a href="mailto:support@starRTC.com">support@starRTC.com</a>

Phone number: 186-1294-6552

Wechat：starRTC

QQ group ID：807242783

If you encounter problems, please  refer to the page  https://github.com/starrtc/starrtc-server/wiki firstly, If you still can't solve the problem by adding the QQ group to feedback the problem.

Changelog
=====
https://github.com/starrtc/starrtc-server/wiki/Changelog

Reference
==
[Port connectivity test](https://github.com/starrtc/starrtc-server/wiki/TCP%E4%B8%8EUDP%E7%AB%AF%E5%8F%A3%E8%BF%9E%E6%8E%A5%E6%80%A7%E6%B5%8B%E8%AF%95)

[Rules of modifying Ali cloud  security group ](https://help.aliyun.com/document_detail/101471.html)

[Operation Guide of Tencent Cloud Security Group](https://cloud.tencent.com/document/product/213/18197)
