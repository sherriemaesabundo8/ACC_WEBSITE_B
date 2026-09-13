cd Sherriemae-Sabundo-B
cp .env.example .env          # if you don't have .env yet
php artisan key:generate
php artisan migrate           # creates users table


run this on VS CODE
php artisan serve

Locate folder of your laravel 13 files 
C:\wamp64\www\Sherriemae-Sabundo-B
and type cmd and paster this

npm run dev

php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan migrate:fresh --seed
php artisan serve

composer install
npm install
npm run build   # or npm run dev
php artisan serve