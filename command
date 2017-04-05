#!/bin/bash

if [ "$1" == "Cron" ]
then
	if [ -z "$2" ]
	then
		php index.php Cron
	else
		php index.php Cron/$2
	fi
elif [ -n "$1" ] && [ -z "$2" ]
then
	method=$1
	method=`echo ${method:0:1} | tr  '[a-z]' '[A-Z]'`${method:1}
	php index.php Command/Command/$method
elif [ -n "$1" ] && [ -n "$2" ]
then
	method=$1
	param=$@
	param=`echo ${param//$method/}`
	param=`echo "$param" | tr -d ' '`
	method=`echo ${method:0:1} | tr  '[a-z]' '[A-Z]'`${method:1}
	php index.php Command/Command/$method/?param=$param
else
	php index.php Command/Command/Index
fi