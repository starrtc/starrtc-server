#!/bin/bash

killall msgServer
killall voipServer
killall chatRoomServer
killall chatDBServer
killall groupServer
killall liveSrcServer
killall liveProxyServer
killall liveVdnServer


sleep 1


killall msgServer
killall voipServer
killall chatRoomServer
killall chatDBServer
killall groupServer
killall liveSrcServer
killall liveProxyServer
killall liveVdnServer


ps -aux | grep Server
