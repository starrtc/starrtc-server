#!/bin/bash

killall msgServer
killall voipServer
killall chatRoomServer
killall chatDBServer
killall groupServer
killall liveSrcServer
killall liveProxyServer
killall liveVdnServer
killall groupPushHttpProxy


sleep 1


killall msgServer
killall voipServer
killall chatRoomServer
killall chatDBServer
killall groupServer
killall liveSrcServer
killall liveProxyServer
killall liveVdnServer
killall groupPushHttpProxy


ps -aux | grep Server
