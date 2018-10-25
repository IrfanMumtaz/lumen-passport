# lumen-passport
lumen api with dusterio/lumen-passport


1) git clone https://github.com/IrfanMumtaz/lumen-passport.git
2) cd lumen-passport
3) composer install
4) cp .env.example .env
5) php artisan key:generate
6) php artisan migrate --seed
7) php artisan route:list (if you get this error "Call to undefined method Laravel\Lumen\Application::group()" just goto "vendor\dusterio\lumen-passport\src\LumenPassport.php" and replace "preg_match('/5\.[56]\..*/', $callback->version()" to "preg_match('/5\.[71]\..*/', $callback->version()"
8) Open postman
9) First create access token 
10) call http://localhost/lumen-passport/public/oauth/token with post method. parameters = "client_id" => from db, "client_secret" => from db, "username" => your email, "password" => your password, "grant_type" => "password", "scope" => "*"
11) you will get access token in response 
12) call http://localhost/lument-passport/public/users provide token in header (Authorization: Bearer "token here")
