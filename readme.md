## Thai Directory

###Setting up the project
Clone this repo.

Make sure you have docker installed and run the following commands.
```
./init.sh
```

Edit `/etc/hosts` and add:
```
127.0.0.1 dev.thai-directory.com
```
Copy .env.example to .env
```
cp .env.example .env
```

Install dependencies and compile assets
```
yarn install && composer install
npm run dev
```

Run migrations and seeders
```
php artisan migrate
php artisan db:seed
```
