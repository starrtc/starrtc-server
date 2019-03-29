# 服务端程序免费私有部署

以下服务端均完全免费，无鉴权，可用于局域网内部署，现已开放:

voip服务端：可用于一对一视频通话；

IM服务端：可用于单聊（如文字聊天），私信，群聊，信令；

chatRoom服务端：可用于多人聊天室；

liveSrc服务端：可用于多人在线会议，并支持服务器转发rtmp流到其他地址；


只剩直播连麦服务，将于近期开放，敬请期待...

支持CentOS 64bit，Ubuntu 64bit。

部署步骤：

第1步：下载服务端程序： git clone https://github.com/starrtc/starrtc-server.git

第2步：切换为root用户： sudo su

第3步：部署各服务端程序，具体如下：

voip服务端部署
==
```java
加可执行权限：chmod +x voipServer
启动：./voipServer     
或者后台启动：nohup ./voipServer > voipServer.log 2>&1 &
查看日志：tail -f voipServer.log
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
加可执行权限：chmod +x msgServer chatDBServer groupServer
启动：
./msgServer    
./chatDBServer 
./groupServer  
或者后台启动：
nohup ./msgServer     > msgServer.log 2>&1 &
nohup ./chatDBServer  > msgServer.log 2>&1 &
nohup ./groupServer   > msgServer.log 2>&1 &

```
需要开放端口：

msgServer 		19903 tcp


chatRoom服务端部署
==
```java
加可执行权限：chmod +x chatRoomServer
启动：./chatRoomServer     
或者后台启动：nohup ./chatRoomServer > chatRoomServer.log 2>&1 &
查看日志：tail -f chatRoomServer.log
```
需要开放端口：19906 tcp



liveSrc服务端部署
==
```java
加可执行权限：chmod +x liveSrcServer
启动：./liveSrcServer     
或者后台启动：nohup ./liveSrcServer > liveSrcServer.log 2>&1 &
查看日志：tail -f liveSrcServer.log
```
需要开放端口：19931 udp



测试方法
=====
下载[客户端示例程序](https://docs.starrtc.com/en/download/)，修改配置即可，具体操作步骤如下：

打开"设置->服务器配置"，点击"配置切换"，选择"私有部署"，然后填写你自己的服务器ip。

配置修改后需要杀掉app重新启动才能生效。

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

许可证
==
[996ICU License](https://github.com/starrtc/starrtc-server/raw/master/LICENSE.996icu.zh-hans)