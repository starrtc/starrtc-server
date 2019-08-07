# Free private deployment of server programs

The following servers are completely free (developed in C language), which is no authentication, and can be used in Tencent Cloud, Alibaba Cloud or LAN deployment. The following seevers are open now:


| Server        | Feature           | Remarks  |
| ------------- |:-------------  |:-----|
| voipServer    | One-to-one video call 					  | it needs to work with msgServer |
| msgServer     | Single chat (such as text chat), private message, signaling      |    |
| chatDBServer  | Offline message storage      				  |     |
| groupServer   | group chat      					      | In the case of single chat without group chat, this server does not neet to be started.    |
| chatRoomServer| people chat      					  |     |
| liveSrcServer | people video conference and push RTMP stream       |     |
| liveVdnServer | Interactive live broadcast, vdn distribution network		      |     |
| liveProxyServer | pull RTSP  stream server     				      |     |
| videoRecServer | Recording function     				      |     |
| groupHttpProxyServer | System message function and group operation function     				      |     |


![#f03c15](https://placehold.it/15/f03c15/000000?text=+) The server program in the web-supported directory contains the program which supports the web and a self-signed certificate.

The server program in the do-not-support-web directory does not support the web side.

**Support CentOS 64bit，Ubuntu 64bit**. Please install the VM (use bridge mode) or docker test on Windows system.

![#f03c15](https://placehold.it/15/f03c15/000000?text=+) 

Deployment(Please switch to root user or execute with sudo)：

1：Download the server program: git clone https://github.com/starrtc/starrtc-server.git
  Then enter the corresponding directory and execute the command:chmod +x *.sh && ./start.sh,and you have finished the deployment.
	If you want to run a program alone, continue with the steps below.

2:Go to the appropriate directory and add executable permissions to all server programs: chmod +x *Server 

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
the servers can be started separately.

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
toUsers：all users who need to send a message, separated by commas
msg： Text message that needs to be sent
digest： a summary of the text message that needs to be sent for push mode when the user is offline
http://www.xxx.com:19922/pushSystemMsgToUsers?toUsers=userId1,userId2,userId3,...&msg=xxxx&digest=xxxx

Push group message (all members):   
http://www.xxx.com:19922/pushGroupMsg?groupId=xxx&msg=xxxx
```

下面五个和群有关的接口，在客户端sdk同样有实现，但通过这些接口，服务端可以主动给群服务器同步群成员，或对群成员进行其他操作，请您根据实际需求来选取合适的群成员同步策略。
```java 
同步时不传groupList表示清空这个群的成员
同步群成员:	
groupId: 要同步的群id
groupList: 要同步的群内部的所有用户id，用逗号隔开
ignoreList： 设置过消息免打扰的素有用户id，用逗号隔开
http://www.xxx.com:19922/syncGroupList?groupId=xxx&groupList=userId1,userId2,userId3,...&ignoreList=userId1,userIdx,...

添加群好友:   
groupId: 要操作的群id
addedUsers: 要添加进的群的所有用户id，用逗号隔开
http://www.xxx.com:19922/addUsersToGroup?groupId=xxx&addedUsers=userId1,userId2,userId3,...

删除群好友:   
groupId: 要操作的群id
deledUsers: 需要从群内删除的所有用户id，用逗号隔开
http://www.xxx.com:19922/delUsersFromGroup?groupId=xxx&deledUsers=userId1,userId2,userId3,...

设置免打扰:	
groupId: 要操作的群id
ignoreList: 需要从针对改群添加免打扰的所有用户id，用逗号隔开
http://www.xxx.com:19922/setPushIgnore?groupId=xxx&ignoreList=userId1,userIdx,...

取消免打扰:	
groupId: 要操作的群id
ignoreList: 需要从针对改群取消免打扰的所有用户id，用逗号隔开
http://www.xxx.com:19922/unsetPushIgnore?groupId=xxx&ignoreList=userId1,userIdx,...
```





拉流服务端部署
==
用于拉取第三方rtsp流(RTMP流暂未开放)，转换为starRTC协议后转发到liveSrcServer，
然后就可以在各终端(Android,iOS,PC和web)的在线会议或互动直播中播放这个流了。

```java  
后台启动：
nohup ./liveProxyServer > liveProxyServer.log 2>&1 &
```

测试方法：首先找到一个可以正常播放的rtsp流（也可以使用示例程序里面的默认测试流），
然后可以打开安卓示例程序，打开设置-》第3方流测试-》新建一个流，填一下名字，和流的rstp地址（也可以不填直接使用默认的测试流），
同时选择该流是在直播中播放，还是在会议中播放。 然后去直播间或会议室就可以看到拉的视频流画面了。


也可以自己使用HTTP方式调用：

- 1 创建channelId并拉流（streamType暂时只支持rtsp），接口返回channelId：

http://www.xxx.com:19932/push?streamType=rtsp&streamUrl=rtsp://184.72.239.149/vod/mp4://BigBuckBunny_175k.mov&roomLiveType=0&roomId=xxxx&extra=xxxxx 

其中roomId和extra为可选参数

- 2 拉流到指定的channelId：

http://www.xxx.com:19932/push?streamType=rtsp&streamUrl=rtsp://184.72.239.149/vod/mp4://BigBuckBunny_175k.mov&channelId=xxxx

- 3 停止拉流（不删除channelId，仍在列表中存在）：

http://www.xxx.com:19932/close?channelId=xxxx

- 4 停止拉流，同时删除channelId：

http://www.xxx.com:19932/delete?channelId=xxxx

需要开放端口
====
| 服务端        | 端口           | web端需开放端口            | 
| ------------- |:-------------  |:-------------  |
| msgServer      | 19903(tcp)     | 29991(tcp):https信任测试   | 
| voipServer     | 10086(udp)  44446(udp):P2P通讯     | 10087(tcp):websocket 10088(udp):webrtc   29992(tcp):https信任测试| 
| chatRoomServer | 19906(tcp)      | 29993(tcp):https信任测试  | 
| liveSrcServer  | 19931(udp)       | 19934(tcp):websocket 19935(udp):webrtc 29994(tcp):https信任测试 |
| liveVdnServer  | 19928(udp)     	 | 19940(tcp):websocket 19941(udp):webrtc 29995(tcp):https信任测试	|
| liveProxyServer |19932(tcp)   	 |   |


测试方法
=====
下载[客户端示例程序](https://docs.starrtc.com/en/download/)，

打开"设置->服务器配置"，然后填写你自己的服务器ip即可（注意不要修改端口号，如果是域名不需要添加“http://”前缀）。


客户端开发
=====
基于私有部署服务端开发自己的客户端，参见[开发文档](https://docs.starrtc.com/zh-cn/docs/android-3b.html)，

示例代码参见：https://docs.starrtc.com/en/download/

服务端开发
=====
打开配置文件starrtc.conf，修改里面的aecurl的值（目前不支持https地址），开发请参考server-api目录里面的示例代码。

Contact
=====
QQ ： 2162498688

邮箱：<a href="mailto:support@starRTC.com">support@starRTC.com</a>

手机: 186-1294-6552

微信：starRTC

QQ群：807242783

遇到问题请先根据 https://github.com/starrtc/starrtc-server/wiki 自查，还不能解决请加群反馈。

更新记录
=====
https://github.com/starrtc/starrtc-server/wiki/Changelog

参考
==
[端口连接性测试](https://github.com/starrtc/starrtc-server/wiki/TCP%E4%B8%8EUDP%E7%AB%AF%E5%8F%A3%E8%BF%9E%E6%8E%A5%E6%80%A7%E6%B5%8B%E8%AF%95)

[阿里云修改安全组规则](https://help.aliyun.com/document_detail/101471.html)

[腾讯云安全组操作指南](https://cloud.tencent.com/document/product/213/18197)

