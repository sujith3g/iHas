##ip="$(ifconfig | grep 4-A 1 'wlan0' | tail -1 | cut -d ':' -f 2 | cut -d ' ' -f 1)"

## Posting the Raspi's ip to central server wich is 192.168.43.20
wifiip=$(ip addr | grep inet | grep wlan0 | awk -F" " '{print $2}' | sed -e 's/\/.*$//')
wget  --post-data "username=dev_123&pswd=12345&ip=$wifiip" http://192.168.43.20/has_project/android_get
echo $ip
