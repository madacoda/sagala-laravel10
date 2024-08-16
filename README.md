# Project Name
**Sagala Laravel Test**

## Description

This project is a showcase for the backend take-home test, demonstrating skills in Laravel 10, MySQL, and Redis.

## Installation

1. Clone the repository.
2. Run `composer install` to install the project dependencies.
3. Configure the database connection in the `.env` file.
4. Run `php artisan migrate` to migrate the database.
5. Run `php artisan redis:flush` to clear Redis cache.
6. Run `php artisan test` to execute the test suite.
7. Run `php artisan db:seed ArticleSeeder` to input dummy data.

1. Clone the Repository:
Use Git to clone the repository:
`git clone <repository-url>`

2. Install Dependencies:
Navigate to the project directory and install the necessary libraries and packages:
`composer install`

3. Configure Environment:
Copy the .env.example file to .env and update it with your database connection settings:
`cp .env.example .env`

4. Run Migrations:
Apply the database migrations to set up the schema:
php artisan migrate

5. Clear Redis Cache:
Flush the Redis cache to ensure a clean state:
`php artisan redis:flush`

6. Run Tests:
Execute the test suite to verify the application:
`php artisan test`

7. Seed the Database:
Populate the database with sample data:
`php artisan db:seed --class=ArticleSeeder`

This project requires PHP 8.1, MySQL, and Redis. To streamline the setup, the project is already deployed on my server. Details and API endpoint requirements have been shared via email. You are welcome to test the application using these endpoints.

### API Endpoints

This project exposes the following API endpoints:

- **GET /api/article**

  Retrieves a list of articles from the database. This endpoint supports searching by title, author, and body.

- **POST /api/article**

  Creates a new article in the database. Requires a JSON payload with the fields `title`, `content`, and `author`. This endpoint performs input validation and returns a success message along with the details of the created article.

### K6 Performance Benchmark

Performance benchmarks using K6 are available.

![K6 Performance Benchmark](https://raw.githubusercontent.com/madacoda/sagala-laravel10/main/k6result.png)