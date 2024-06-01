# Coffee-Shop

**Coffee-Shop** - Cайт для продажи кофе, чая, товаров для вендинга и здорового питания. Проект реализован на Laravel 11 с использованием Docker и Livewire.

## Описание

Coffee-Shop предоставляет удобную платформу для покупки различных продуктов, таких как кофе, чай, товары для вендинга и здоровое питание. Сайт использует мощные возможности Laravel 11 для построения гибкой и масштабируемой архитектуры, а также Livewire для создания динамичных и интерактивных интерфейсов без необходимости использования JavaScript.

## Технологии

- **Laravel 11**: [PHP-фреймворк](https://laravel.com/docs/11.x/releases) для разработки веб-приложений, известный своей элегантностью и простотой.
- **Docker**: [Платформа для контейнеризации приложений](https://www.docker.com/), обеспечивающая легкость развертывания и управления окружениями.
- **Livewire**: [Библиотека для Laravel](https://laravel-livewire.com/), которая позволяет создавать динамичные интерфейсы без написания JavaScript.
- **Composer**: [Менеджер зависимостей для PHP](https://getcomposer.org/).
- **npm**: [Менеджер пакетов для Node.js](https://nodejs.org/en), используемый для управления зависимостями фронтенда.

## Установка

1. **Клонируйте репозиторий:**

    ```bash
    git clone https://github.com/Rubin-11/CoffeeShop.git
    cd CoffeeShop
    ```

2. **Скопируйте файл `.env.example` в `.env` и настройте параметры:**

    ```bash
    cp .env.example .env
    ```

3. **Соберите образ и запустите контейнеры:**

    ```bash
    docker-compose up -d
    ```

4. **Установите зависимости Composer:**

    ```bash
    composer install
    ```

5. **Установите зависимости npm:**

    ```bash
    npm install
    ```

6. **Соберите ассеты фронтенда:**

    ```bash
    npm run dev
    ```

7. **Сгенерируйте ключ приложения:**

    ```bash
    php artisan key:generate
    ```

8. **Запустите миграции базы данных:**

    ```bash
    php artisan migrate
    ```

9. **Заполните базу данных тестовыми данными (по желанию):**

    ```bash
    php artisan migrate:fresh --seed
    ```

## Использование

После установки и запуска Docker контейнеров, приложение будет доступно по адресу `http://localhost:1988/`.

## Команды для разработки

- **Сборка фронтенда:**

    ```bash
    npm run dev
    ```

## Разработчики

- Сергей Мишарин - [GitHub](https://github.com/Rubin-11)

- Азаренкова Ольга - [GitHub](https://github.com/Olgaazarenkova)

- Дмитрий Щербаков - [GitHub](https://github.com/XenonCodes)
