TASK 2

AFTER INSTALLING APACHE

Enable MODULES:

proxy

proxy_http

rewrite

using a2enmod command

Change the block in apache2.conf as:

<Directory /var/www/>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
