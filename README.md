# 服务端程序免费私有部署

以下服务端均完全免费(采用C语言开发)，无鉴权，可用于腾讯云，阿里云或局域网内部署，现已开放:


| 服务端        | 功能           | 备注  |
| ------------- |:-------------  |:-----|
| voipServer    | 一对一视频通话 					  | 需要搭配msgServer使用 |
| msgServer     | 单聊（如文字聊天），私信，信令      |    |
| chatDBServer  | 离线消息存储      				  |     |
| groupServer   | 群聊      					      | 如果只需要单聊，不需要群聊的话，不用启动    |
| chatRoomServer| 多人聊天室      					  |     |
| liveSrcServer | 多人视频会议  RTMP推流      		  |     |
| liveVdnServer | 互动连麦直播，vdn分发网络		      |     |
| liveProxyServer | RTSP 拉流服务端     				      |     |
| videoRecServer | 录制录像功能     				      |     |


![#f03c15](https://placehold.it/15/f03c15/000000?text=+) web-supported目录里面是支持web端的服务端程序与自签名证书。do-not-support-web目录里面的服务端程序不支持web端。

**支持CentOS 64bit，Ubuntu 64bit**。Windows上请自行安装虚拟机(请使用桥接)或docker测试。

![#f03c15](https://placehold.it/15/f03c15/000000?text=+) 部署步骤（请切换为root用户或者用sudo执行）：

第1步：下载服务端程序： git clone https://github.com/starrtc/starrtc-server.git
		
		然后进入相应目录，直接执行chmod +x *.sh && ./start.sh 即部署成功！如果想单独运行，请继续下面的步骤。

第2步：进入相应目录，给所有服务端程序加可执行权限: chmod +x *Server  

第3步：部署各服务端程序，具体如下：

其中.log后缀文件为日志文件，可通过命令tail -f xxx.log查看相关日志。

voip服务端部署
==
```java
后台启动：
nohup ./voipServer > voipServer.log 2>&1 &

刚开始为了验证是否启动成功，可以不后台启动，而是通过运行 ./voipServer 直接看输出日志是否成功，成功了以后就可以后台启动。
```
注：也需要部署msgServer,用于传输呼叫，接听等消息。

IM服务端部署
==
IM全套服务，分为3个服务端程序，分别是:

消息服务端msgServer、离线消息数据服务端chatDBServer，群管理服务端groupServer，分别启动即可。

只需要单聊的，不需要启动groupServer。

可以保持自己原有的im系统不变，用我们的im系统作为voip等服务的信令服务。
```java
后台启动：
nohup ./msgServer     > msgServer.log 2>&1 &
nohup ./chatDBServer  > chatDBServer.log 2>&1 &
nohup ./groupServer   > groupServer.log 2>&1 &
```

chatRoom服务端部署
==
```java
后台启动：
nohup ./chatRoomServer > chatRoomServer.log 2>&1 &
```

liveSrc服务端部署
==
```java  
后台启动：
nohup ./liveSrcServer > liveSrcServer.log 2>&1 &
```

RTMP推流测试:可打开安卓客户端，新建一个会议室，点击RTMP推流，填上RTMP URL后，点击推流即可。然后用其它第3方播放器如VLC就可以打开该RTMP URL观看会议画面了。

同理，可以在直播间推流，用vlc打开就可以观看直播了。

liveVdn服务端部署
==
互动直播，观众不限人数
```java  
后台启动：
nohup ./liveVdnServer > liveVdnServer.log 2>&1 &
```


录制服务端部署
==
目前用于liveSrcServer和voipServer的视频录像功能，视频以flv的格式保存到RECFOLDER目录，

文件名格式为：用户名_日期_时_分_秒，如userId_20190529_15_08_02.flv

开启此服务就会打开录制功能，如果想停止录制，可以关闭此服务。

```java  
后台启动：
nohup ./videoRecServer > videoRecServer.log 2>&1 &
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

