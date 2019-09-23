# The-Game-Center

**Installation**
We are assuming you have installed the LEMP stack with defaults

1. cd /etc
2. git clone https://github.com/miller989/The-Game-Center.git
3. cp /etc/The-Game-Center/config/nginx/tgc.conf /etc/nginx/tgc.conf
4. vi /etc/nginx/sites-available/default
5. on line 24 insert:
    include /etc/nginx/tgc.conf;
6. Create sql user
    mysql -u root -p -e "grant all on tgc.* to 'tgcuser'@localhost identified by 'tgcpass';"
7. *Insert db creation script*
8. nginx -t
9. service nginx restart
