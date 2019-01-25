# 服务端程序

现已开放voip服务端，可用于一对一视频的私有部署。

其它服务端(IM消息系统，直播连麦，多人会议)正在一个一个开放中，敬请期待...

支持CentOS 64bit，Ubuntu 64bit。

使用SDK部署私有服务来实现一对一音视频功能，详见[开发文档](https://docs.starrtc.com/zh-cn/docs/android-1.html)


客户端示例程序
==
Android: https://github.com/starrtc/starrtc-android-demo

iOS    : https://github.com/starrtc/starrtc-ios-demo

更多   : https://docs.starrtc.com/en/download/

voip服务器部署
==
可用于一对一视频的私有部署

需要开放端口：10086 udp

```java
chmod +x voipServer
./voipServer -appid your_appid
或者后台启动：nohup ./voipServer -appid your_appid > voipServer.log 2>&1 &
查看日志：tail -f voipServer.log
```

测试方法：下载客户端示例程序，修改“服务器配置”里面的应用ID和VOIP服务地址即可。

appid请访问[starRTC后台](https://www.starrtc.com/login.html)获取。



Contact
=====
QQ ： 2162498688

邮箱：<a href="mailto:support@starRTC.com">support@starRTC.com</a>

手机: 186-1294-6552

微信：starRTC

QQ群：807242783