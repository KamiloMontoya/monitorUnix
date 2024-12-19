# Unix Monitor

**Unix Monitor** is an application developed in Laravel 6.0 (https://laravel.com/docs) designed to monitor the status of a server running a Linux operating system. The monitor provides the following details:  

- Operating system version  
- Linux kernel version  
- CPU usage percentage  
- RAM usage percentage  
- Disk usage percentage  
- Public IP address  
- Private IP address  

Laravel is accessible, powerful, and provides the necessary tools to build robust, large-scale applications.  

---

## Application Installation  

### Prerequisites  

Ensure the server meets the following prerequisites before installing the application:  

- **PHP Version 7.2 or higher**  
  - Install on Ubuntu:  
    ```bash
    $ apt-get install php  
    $ sudo apt-get install php-gd php-xml php7.2-mbstring php-fpm  
    ```  

- **Node.js**  
  - Follow [this guide](https://joshtronic.com/2018/05/08/how-to-install-nodejs-10-on-ubuntu-1804-lts) to install Node.js on Ubuntu.  

- **PHP Composer**  
  - Follow [this guide](https://linuxize.com/post/how-to-install-and-use-composer-on-ubuntu-18-04/) to install Composer on Ubuntu.  

---

### Installation and Configuration  

Follow these steps to install and configure the application:  

1. Clone the Git repository:  
   ```bash  
   $ git clone <repository_url>  
   ```  

2. Set permissions:  
   ```bash  
   $ chmod -R 777 /storage /bootstrap/cache  
   ```  

3. Install Node.js dependencies:  
   ```bash  
   $ npm install  
   ```  

4. Install PHP dependencies:  
   ```bash  
   $ composer install  
   ```  

5. Copy the default environment configuration:  
   ```bash  
   $ cp .env.prod .env  
   ```  

6. Configure the server to serve the `/public/index.php` file. For Nginx, update the `/etc/nginx/sites-enabled/default` file with the following configuration:  
   ```nginx  
   server {  
       listen 8088 default_server;  
       listen [::]:8088 default_server;  
       root /home/ubuntu/monitorUnix/public;  
       index index.php index.html index.htm;  

       server_name _;  

       location / {  
           try_files $uri $uri/ /index.php?$query_string;  
       }  
   }  
   ```  

7. Restart the Nginx server:  
   ```bash  
   $ sudo systemctl restart nginx  
   ```  
