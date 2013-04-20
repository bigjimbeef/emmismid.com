#!/bin/bash
CURR=`pwd`
cd /etc/apache2/sites-enabled/

if [[ -f 13-current ]]; then
    sudo rm 13-current
fi
sudo ln -s 2-emmi-live 13-current
sudo service apache2 restart
cd $CURR
exit
