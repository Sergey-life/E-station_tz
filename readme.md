Запуск:

1. Скачать. 
2. В скачаной папке открыть терминал. Ввести команду: docker-compose build && docker-compose up -d
3. Вводим: composer install
4. Вводим: composer dump-autoload
5. Вводим: docker-compose exec php ./artisan migrate
6. Вводим: docker-compose exec php ./artisan db:seed
7. Вводим в браузере: localhost:8088
8. phpMyAdmin: localhost:8008 (log: homestead, pas: secret)

Проверки(Postman):

1. Create new station(POST): http://localhost:8088/api/stations (при добавлении новой записии поле "state" дожно быть только "opened" или "closed")
2. Show station(GET): http://localhost:8088/api/stations/{id}
3. Update station(PUT): http://localhost:8088/api/stations/{id}   
4. Delete station(DELETE): http://localhost:8088/api/stations/{id}
5. Show station(GET): http://localhost:8088/api/stations/{id}
6. displays stations in the specified city (Kyiv, Odessa, Lviv…)(GET): http://localhost:8088/api/stations?city=Odessa (city name)
7. displays stations in the specified city that are currently open(GET): http://localhost:8088/api/stations?state=opened (state)

Cтраница ТЗ: https://macpaw.com/careers/back-end-intern
