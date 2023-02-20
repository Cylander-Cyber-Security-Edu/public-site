/bin/bash

cd /tmp/
git clone https://github.com/Cylander-Cyber-Security-Edu/public-site.git

rm -rf /tmp/public-site/.git
rm -rf /var/www/html/*
cp -r /tmp/public-site/* /var/www/html
rm -rf /tmp/public-site/.git
