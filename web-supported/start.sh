#!/bin/bash

git config core.fileMode false || echo "git not installed,continue" #忽略文件权限变化
chmod +x supervise.sh supervise


if [ ! -f supervise.msgServer ]; then
	cp -f supervise supervise.msgServer
fi

if [ ! -f supervise.chatDBServer ]; then
	cp -f supervise supervise.chatDBServer
fi

if [ ! -f supervise.groupServer ]; then
	cp -f supervise supervise.groupServer
fi

if [ ! -f supervise.chatRoomServer ]; then
	cp -f supervise supervise.chatRoomServer
fi

if [ ! -f supervise.voipServer ]; then
	cp -f supervise supervise.voipServer
fi

if [ ! -f supervise.liveSrcServer ]; then
	cp -f supervise supervise.liveSrcServer
fi

if [ ! -f supervise.liveVdnServer ]; then
	cp -f supervise supervise.liveVdnServer
fi

if [ ! -f supervise.liveProxyServer ]; then
	cp -f supervise supervise.liveProxyServer
fi

if [ ! -f supervise.groupPushHttpProxy ]; then
	cp -f supervise supervise.groupPushHttpProxy
fi


./supervise.sh start msgServer
./supervise.sh start chatDBServer
./supervise.sh start groupServer
./supervise.sh start chatRoomServer
./supervise.sh start voipServer
./supervise.sh start liveSrcServer
./supervise.sh start liveVdnServer
./supervise.sh start liveProxyServer
./supervise.sh start groupPushHttpProxy


ps -aux | grep Server
ps -aux | grep groupPushHttpProxy

echo "=================================================================================="
echo "Thanks for your support, Please use the following contact information for feedback"
echo "QQ group: 807242783"
echo "Github: https://github.com/starRTC"
echo "TEL: +86 18612946552"
echo "Enjoy Your Work!"
echo "=================================================================================="


