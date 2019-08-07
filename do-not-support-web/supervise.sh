#!/bin/bash

#########################################################################
#  admin@elesos.com 通用进程控制shell脚本
#########################################################################


if [ "$#" -lt "1" ]  #参数个数
then
    echo "Usage: ./supervise.sh [start|stop] xxxServer"
	exit 0;
fi

BIN=$2
SUP="supervise.$BIN"


start() {
        stop
        ulimit -c unlimited       
		shift 1		
        #nohup ./$SUP ./$BIN $* & 
		if [ ! -d "logs" ]; then
			mkdir logs
			chmod -R 777 logs
		fi		
		chmod +x $BIN
		nohup ./$SUP ./$BIN > logs/${BIN}.log 2>&1 & 		
}

stop() {
        killall -9 $SUP $BIN >/dev/null 2>&1		
}

case C"$1" in		
        Cstart)
                start
                echo "$BIN start Success!"
                ;;
        Cstop)
                stop
                echo "$BIN stop Success!"
                ;;
        C*)
                echo "Usage: ./supervise.sh [start|stop] xxxServer"
                ;;
esac
