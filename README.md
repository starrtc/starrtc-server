# 服务端程序免费私有部署

以下服务端均完全免费，无鉴权，可用于局域网内部署，现已开放:


| 服务端        | 功能           | 备注  |
| ------------- |:-------------  |:-----|
| voipServer    | 一对一视频通话 					  | 需要搭配msgServer使用 |
| msgServer     | 单聊（如文字聊天），私信，信令      |    |
| chatDBServer  | 离线消息存储      				  |     |
| groupServer   | 群聊      					      | 如果只需要单聊，不需要群聊的话，不用启动    |
| chatRoomServer| 多人聊天室      					  |     |
| liveSrcServer | 多人视频会议，RTMP推流      		  |     |
| liveVdnServer | 互动连麦直播     				      |     |
| liveProxyServer | RTSP 拉流服务端     				      |     |



**支持CentOS 64bit，Ubuntu 64bit**。

部署步骤（请切换为root用户或者用sudo执行）：

第1步：下载服务端程序： git clone https://github.com/starrtc/starrtc-server.git

第2步：cd starrtc-server进入下载目录，给所有服务端程序加可执行权限: chmod +x *Server  

第3步：部署各服务端程序，具体如下：

其中.log后缀文件为日志文件，可通过命令tail -f xxx.log查看相关日志。

voip服务端部署
==
```java
后台启动：
nohup ./voipServer > voipServer.log 2>&1 &

```
需要开放端口：10086 udp

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
需要开放端口：

msgServer 		19903 tcp

chatRoom服务端部署
==
```java
后台启动：
nohup ./chatRoomServer > chatRoomServer.log 2>&1 &
```
需要开放端口：19906 tcp


liveSrc服务端部署
==
```java  
后台启动：
nohup ./liveSrcServer > liveSrcServer.log 2>&1 &
```
需要开放端口：19931 udp


liveVdn服务端部署
==
```java  
后台启动：
nohup ./liveVdnServer > liveVdnServer.log 2>&1 &
```
需要开放端口：19928 udp

rtsp拉流服务端部署
==
用于拉取第三方rtsp流，并转换为starRTC协议转推至liveSrcServer，然后就可以在各终端的在线会议或互动直播中播放这个流了。

```java  
后台启动：
nohup ./liveProxyServer > liveProxyServer.log 2>&1 &
```
需要开放端口：19932 tcp

使用方法：

在demo中可以在设置界面测试该功能，也可以自己使用HTTP方式调用：

创建channelId并推流（streamType暂时只支持rtsp），接口返回channelId：

http://www.xxx.com:19932/push?streamType=rtsp&streamUrl=rtsp://184.72.239.149/vod/mp4://BigBuckBunny_175k.mov&roomLiveType=0&roomId=xxxx&extra=xxxxx (roomId和extra为可选参数)

推流到指定的channelId：

http://www.xxx.com:19932/push?streamType=rtsp&streamUrl=rtsp://184.72.239.149/vod/mp4://BigBuckBunny_175k.mov&channelId=xxxx

关闭指定的推流（停止拉流，channelId在列表存在）：

http://www.xxx.com:19932/close?channelId=xxxx

删除channelId（停止拉流，同时删除channelId）：

http://www.xxx.com:19932/delete?channelId=xxxx





测试方法
=====
下载[客户端示例程序](https://docs.starrtc.com/en/download/)，

打开"设置->服务器配置"，点击"配置切换"，选择"私有部署"，然后填写你自己的服务器ip。


客户端开发
=====
基于私有部署服务端开发自己的客户端，参见[开发文档](https://docs.starrtc.com/zh-cn/docs/android-single-server-init.html)，

示例代码参见：https://docs.starrtc.com/en/download/

Contact
=====
QQ ： 2162498688

邮箱：<a href="mailto:support@starRTC.com">support@starRTC.com</a>

手机: 186-1294-6552

微信：starRTC

QQ群：807242783

遇到问题请先根据 https://github.com/starrtc/starrtc-server/wiki 自查，还不能解决请加群反馈。

参考
==
[端口连接性测试](https://github.com/starrtc/starrtc-server/wiki/TCP%E4%B8%8EUDP%E7%AB%AF%E5%8F%A3%E8%BF%9E%E6%8E%A5%E6%80%A7%E6%B5%8B%E8%AF%95)

[阿里云修改安全组规则](https://help.aliyun.com/document_detail/101471.html)

[腾讯云安全组操作指南](https://cloud.tencent.com/document/product/213/18197)

