#!/bin/bash

git config core.fileMode false
chmod +x *Server

nohup ./msgServer     > msgServer.log 2>&1 &
nohup ./chatDBServer  > chatDBServer.log 2>&1 &
nohup ./groupServer   > groupServer.log 2>&1 &
nohup ./voipServer > voipServer.log 2>&1 &
nohup ./chatRoomServer > chatRoomServer.log 2>&1 &
nohup ./liveSrcServer > liveSrcServer.log 2>&1 &
nohup ./liveVdnServer > liveVdnServer.log 2>&1 &
nohup ./liveProxyServer > liveProxyServer.log 2>&1 &

ps -aux | grep Server

