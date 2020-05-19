Запуск:

1. Скачать. В скачаной папке открыть терминал. Ввести команду: docker-compose build && docker-compose up -d
2. Вводим: composer dump-autoload
3. Вводим: docker-compose exec php php /var/www/html/artisan migrate
4. Вводим: docker-compose exec php php /var/www/html/artisan db:seed
5. Вводим в браузере: localhost:8088
6. phpMyAdmin: localhost:8008 (log: homestead, pas: secret)

Проверки(Postman):

1. displays stations in the specified city that are currently open(GET): http://localhost:8088/api/stations
2. Show station(GET): http://localhost:8088/api/stations/{id}
2. Create new station(POST): http://localhost:8088/api/stations/
3. Update station(PUT): http://localhost:8088/api/stations/{id}   
4. Delete station(DELETE): http://localhost:8088/api/stations/{id}

Cтраница ТЗ: https://macpaw.com/careers/back-end-intern
