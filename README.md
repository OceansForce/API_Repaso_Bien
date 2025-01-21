<h4>Encender Docker</h4>
<p>sudo docker compose up</p>
<h4>MySQL dar permisos</h4>
<p>CREATE USER 'root'@'10.14.0.241' IDENTIFIED BY 'root';</p>
<p>GRANT ALL PRIVILEGES ON *.* TO 'root'@'10.14.0.241';</p>
<p>FLUSH PRIVILEGES;</p>
</br>
</br>
<p>----------------------------------------</p>
<h4>Crear laravel</h4>
<p>1- laravel new "Nombre del archibo"</p>
  <p>a- No started kit</p>
  <p>b- Pest</p>
  <p>c- MariaDB</p>
  <p>d- Yes</p>
</br>
<p>2- Encender laravel-->  php artisan serve --host=0.0.0.0 --port=8080 </p>
<p>3- Cambiar archivo .env:</p>
<p>
  DB_CONNECTION=mariadb</br>
  DB_HOST=192.168.8.109</br>
  DB_PORT=3306</br>
  DB_DATABASE=mydatabase</br>
  DB_USERNAME=root</br>
  DB_PASSWORD=root</br>
</p>

<p>Instalar API--> php artisan install:api</p>
<p>Crear modelo de tabla--> php artisan make:model "nombre" -a --api</p>

<p>------------------------------------------</p>
<h4>Yaak</h4>
<p>Token</p>
<p>Accept / application/json</p>
<p>Authorization / Bearer id|token</p>
