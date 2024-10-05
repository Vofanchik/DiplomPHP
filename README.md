# Локальный запуск
- `git clone https://github.com/Vofanchik/DiplomPHP.git` клонирование проекта на локальный сервер
- `composer install` установка зависимостей
- изменить .env.example на .env и настроить окружение при необходимости
- `php artisan migrate` миграция моделей в БД
- `php artisan db:seed` создать тестовые данные
- `php artisan key:generate` создать секрет для env
- `php artisan serve` запустить серевер
