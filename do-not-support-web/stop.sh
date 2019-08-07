#!/bin/bash


./supervise.sh stop msgServer
./supervise.sh stop chatDBServer
./supervise.sh stop groupServer
./supervise.sh stop chatRoomServer
./supervise.sh stop voipServer
./supervise.sh stop liveSrcServer
./supervise.sh stop liveVdnServer
./supervise.sh stop liveProxyServer
./supervise.sh stop groupPushHttpProxy

ps -aux | grep Server
ps -aux | grep groupPushHttpProxy
