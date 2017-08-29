>__Facebook-OAuth Laravel__

Doc-Source [blog.damirmiladinov.com](https://blog.damirmiladinov.com/laravel/laravel-5.2-socialite-facebook-login.html#.WaQnBT4jGUm)

### INIt Project
```
  $>_ git clone https://github.com/ahmadbasir/OAuth-Laravel.git
  $>_ cd OAuth-Laravel
```
#### Install Composer
```
  $>_ composer install
  $>_ composer require laravel/socialite
```


#### Config Database

pertama buat dulu database dengan nama `oauth` kemudian ubah config `.env` pada line berikut
```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=oauth
  DB_USERNAME=root
  DB_PASSWORD=
```

jika sudah silahkan lakukan migrasi table pada database dengan perintah
```
  $>_ php arisan migrate
  $>_ php arisan key:generate
```

`$>_ php arisan key:generate` berfungsi untuk melakukan generating key pada `.env`

### Run Project

sekarang coba run-servenya dengan melakukan perintah
```
  $>_ php artisan serve
```
buka url http://localhost:8000
