# 服务端程序免费私有部署

现已开放:

voip服务端：可用于一对一视频通话；

IM服务端：可用于单聊（如文字聊天），私信，群聊，信令，聊天室；

其它服务端(聊天室，直播连麦，多人会议)正在一个一个开放中，敬请期待...

支持CentOS 64bit，Ubuntu 64bit。

部署步骤：

第1步：登录[starRTC后台](https://www.starrtc.com/login.html)获取appid；

第2步：下载服务端程序： git clone https://github.com/starrtc/starrtc-server.git

第3步：部署各服务端程序，具体如下：

voip服务端部署
==
```java
加可执行权限：chmod +x voipServer
启动：./voipServer -appid your_appid
或者后台启动：nohup ./voipServer -appid your_appid > voipServer.log 2>&1 &
查看日志：tail -f voipServer.log
```
需要开放端口：10086 udp

IM服务端部署
==
IM全套服务，分为3个服务端程序，分别是:

消息服务端msgServer、离线消息数据服务端chatDBServer，群管理服务端groupServer，分别启动即可。

只需要单聊的，不需要启动groupServer。

可以保持自己原有的im系统不变，用我们的im系统作为voip等服务的信令服务。
```java
加可执行权限：chmod +x msgServer chatDBServer groupServer
启动：
./msgServer    -appid your_appid
./chatDBServer -appid your_appid
./groupServer  -appid your_appid
或者后台启动：
nohup ./msgServer    -appid your_appid > msgServer.log 2>&1 &
nohup ./chatDBServer -appid your_appid > msgServer.log 2>&1 &
nohup ./groupServer  -appid your_appid > msgServer.log 2>&1 &

```
需要开放端口：

msgServer 		19903 tcp(对外) 19902 tcp(本地)

chatDBServer 	19908 tcp(本地)

groupServer 	19923 tcp(本地)

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

参考
==
[阿里云修改安全组规则](https://help.aliyun.com/document_detail/101471.html)

[腾讯云安全组操作指南](https://cloud.tencent.com/document/product/213/18197)

