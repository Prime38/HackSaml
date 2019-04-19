# HackSaml


## 1.install simplesamlphp
###Prerequisites
- PHP version >= 5.5.0.
- Always required: date, dom, hash, libxml, openssl, pcre, SPL, zlib, json, mbstring
- When automatically checking for latest versions, and used by some modules: cURL
- When using the native PHP session handler: session
- mysql database server 
### Download and install simplesamlphp from this repository or [this link](https://simplesamlphp.org/download) 
then open terminal on the downloaded folder 
```
tar xzf simplesimplesamlphp-* /var
cd /var
mv simplesaml* simplesamlphpidp

```

## 2 .Create and configure Apache server for example.com (we will use it as an SP)  
Edit the idp.govt.com.conf file 
in   terminal 
```
sudo nano /etc/apache2/sites-available/example.com .conf
```
add below portion 
```
SetEnv SIMPLESAMLPHP_CONFIG_DIR /var/simplesamlphp/config

        Alias /simplesaml /var/simplesamlphp/www

        <Directory /var/simplesamlphp/www>
            <IfModule !mod_authz_core.c>
            # For Apache 2.2:
            Order allow,deny
            Allow from all
            </IfModule>
            <IfModule mod_authz_core.c>
            # For Apache 2.4:
            Require all granted
            </IfModule>
        </Directory>
</VirtualHost>
```
## Simplesamlphp configuration: config.php 
open config/config.php in simplesamlphp directory
find these following lines and change as your envirotnment 
```
php 'baseurlpath' => 'https://your.canonical.host.name/simplesaml/', 
php 'auth.adminpassword' => 'setnewpasswordhere',
```
generate secret salt by executing this command
```tr -c -d '0123456789abcdefghijklmnopqrstuvwxyz' </dev/urandom | dd bs=32 count=1 2>/dev/null;echo
```
change secretsalt in config.php
php 'secretsalt' => 'secretsalt you generated',
#### Please note that changing the secret salt may break access to services for your users.
set yor timezone 
```
php 'timezone' => 'Asia/Dhaka',
## Enabling and disabling modules
you can enable or disable modules by setting empty files with given names in the module's root directory. For example, in order to enable the sqlauth module:
```
cd modules/sqlauth
touch enable
```
## The SimpleSAMLphp installation web page 
open this page on your browser
``` 
http://example.org/simplesaml/
```
you will see a simplsamlephp installation page with Welcome Configuration Authentication Federation tabs.
Explore these tabs.

#### This is set up of one of our SPs .We will be using same method to create another SP 
## Create and configure IDP
create and configure another apache server named idp.govt.com using previous methods

