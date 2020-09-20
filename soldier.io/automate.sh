#!/bin/bash
mv ../soldier.io /var/www/
mv ./soldier.io.conf /etc/apache2/sites_available/
echo "127.0.0.1    soldier.io" >> /etc/hosts
a2ensite soldier.io
systemctl reload apache2
