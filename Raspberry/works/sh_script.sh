#!/bin/sh
## This script is for  scheduling, It uses the local mysql db in the raspi

mysqlusername="root"
mysqlpassword="raspberry"

while :
do
echo  $(date +"%H-%M")
#curTime = $(date +"%H-%M")
echo "SELECT "$(date +"%H-%M")
res=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev1' AND on_time='"$(date +"%H-%M")"'";)
res1=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev2' AND on_time='"$(date +"%H-%M")"'";)
res2=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev3' AND on_time='"$(date +"%H-%M")"'";)
res3=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev4' AND on_time='"$(date +"%H-%M")"'";)
if [ "$res" == "dev1" ]; 
then
	/usr/local/bin/gpio write 5 1
	#echo "send"
fi
if [ "$res1" == "dev2" ]; 
then
        /usr/local/bin/gpio write 6 1
fi
if [ "$res2" == "dev3" ]; 
then
        /usr/local/bin/gpio write 1 1
fi
if [ "$res3" == "dev4" ]; 
then
        /usr/local/bin/gpio write 4 1
fi
res=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev1' AN' AND on_time='"$(date +"%H-%M")"'";)
res1=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev2' AND$
res2=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev3' AND$
res3=$(mysql -B --disable-column-names --user=root --password=raspberry test -e "SELECT dev_id FROM schedule WHERE  dev_id='dev4' AND$
if [ "$res" == "dev1" ]; 
then
        /usr/local/bin/gpio write 5 1
        #echo "send"
fi
if [ "$res1" == "dev2" ]; 
then
        /usr/local/bin/gpio write 6 1
fi
if [ "$res2" == "dev3" ]; 
then
        /usr/local/bin/gpio write 1 1
fi
if [ "$res3" == "dev4" ]; 
then
        /usr/local/bin/gpio write 4 1
fi

sleep 60
done


