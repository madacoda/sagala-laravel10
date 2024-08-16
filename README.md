# Project Name
Sagala Laravel Test

## Description

The Sagala Laravel Test is a web application built using Laravel 10, MySQL, and Redis. It showcases backend development with these technologies.

### API Endpoints

This project exposes the following API endpoints:

- **GET /api/article**

  Retrieves a list of articles from the database. This endpoint supports searching by title, author, and body.

- **POST /api/article**

  Creates a new article in the database. Requires a JSON payload with the fields `title`, `content`, and `author`. This endpoint performs input validation and returns a success message along with the details of the created article.

## Installation

1. Clone the repository.
2. Run `composer install` to install the project dependencies.
3. Configure the database connection in the `.env` file.
4. Run `php artisan migrate` to migrate the database.
5. Run `php artisan redis:flush` to clear Redis cache.
6. Run `php artisan test` to execute the test suite.

