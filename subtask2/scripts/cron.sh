#!/bin/bash
crontab -l > mycron
0 0 * * * /usr/local/scripts/Schedule.sh >> mycron
0 6 * * * /usr/local/scripts/attend.sh >> mycron
crontab mycron
rm mycron
