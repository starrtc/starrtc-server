#!/bin/bash

git config core.fileMode false #忽略文件权限变化
chmod +x *Server			#文件加权限

mkdir logs
chmod -R 777 logs

nohup ./msgServer       > logs/msgServer.log 2>&1 &
nohup ./chatDBServer    > logs/chatDBServer.log 2>&1 &
nohup ./groupServer     > logs/groupServer.log 2>&1 &
nohup ./voipServer      > logs/voipServer.log 2>&1 &
nohup ./chatRoomServer  > logs/chatRoomServer.log 2>&1 &
nohup ./liveSrcServer   > logs/liveSrcServer.log 2>&1 &
nohup ./liveVdnServer   > logs/liveVdnServer.log 2>&1 &
nohup ./liveProxyServer > logs/liveProxyServer.log 2>&1 &

ps -aux | grep Server
sleep 3
head -n 12 logs/msgServer.log