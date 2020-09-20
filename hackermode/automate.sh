#!/bin/bash

cat <<EOF> /etc/var/www/soldier.io
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName soldier.io

    ProxyPass / http://localhost:3333/complaints.php/
    ProxyPassReverse / http://localhost:3333/complaints.php/

  </VirtualHost>
EOF
