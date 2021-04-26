#!/bin/sh
host=$(hostname)
line=$(cat /etc/hosts |grep [1]27.0.0.1)
echo "$line localhost localhost.localdomain $host" >> /etc/hosts
echo "$host" >> /etc/mail/relay-domains
m4 /etc/mail/sendmail.mc > /etc/mail/sendmail.cf
sendmail -bd

