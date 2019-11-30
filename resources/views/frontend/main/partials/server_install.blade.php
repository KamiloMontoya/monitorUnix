<p>Para instalar Nginx en ubuntu se deben ejecutar los siguientes comandos (<a href="https://www.digitalocean.com/community/tutorials/como-instalar-nginx-en-ubuntu-18-04-es" target="_blank">guía de referencia</a>)</p>
<code> $ sudo apt update</code>
<code> $ sudo apt install nginx</code>	

<br><br>
<b> Configuración del firewall </b>
<p>Es recomendable que active el perfil más restrictivo que aún permita el tráfico que haya configurado. Debido a que en esta guía todavía no configuramos SSL para nuestro servidor, únicamente vamos a tener que permitir tráfico en el puerto 80.</p>
<code>sudo ufw allow 'Nginx HTTP'</code>

<br><br>
<b> Verificar el estado del servidor </b><br>
<code>systemctl status nginx</code>
<p> Para lanzar | parar | reiniciar el servidor se pueden correr los siguintes comandos </p>
<code>
sudo systemctl start nginx
sudo systemctl stop nginx
sudo systemctl restart nginx
</code>

<br><br>
<b> Cambiar el puerto por defecto del servidor </b><br>

<p>Para ello se siguió la siguiente <a href="https://ernestogamez.wordpress.com/2013/07/24/configurar-nginx-por-un-puerto-diferente-al-80/
" target="_blank"> guía </a></p>

<ul>
	<li>Abrir el archivo default en /etc/nginx/sites-enabled</li>
	<li>Cambiar el puerto en la variable listen asi: <br> <code>listen 8088 default_server;</code> </li>
	<li>Reiniciar el servidor <br> <code>sudo systemctl restart nginx</code> </li>
</ul>
      