## Patchstack test task

This test was created following the instructions from this [link](https://docs.google.com/document/d/1BSxjDgOx5UCEaWod8pYJixc6YfYEn8TMMEolekRexg8/edit).

### Stack
- PHP 8.3
- Laravel 11
- Pest 3
- Sqlite

### Endpoints

- GET /api/vulnerabilities
- GET /api/vulnerabilities/{id}
- POST /api/vulnerabilities
- PUT /api/vulnerabilities/{id}
- DELETE /api/vulnerabilities/{id}

### Installation

1. Clone the repository:

```bash
https://github.com/lauroguedes/patchstack-test-task.git
```

2. Install dependencies:

```bash
composer install
```

3. Create a .env file and configure the database connection:

```bash
cp .env.example .env
```

4. Generate the application key:

```bash
php artisan key:generate
```

5. Run the database migrations and seed:

```bash
php artisan migrate --seed
```

6. Start the development server:

```bash
php artisan serve
```

7. Access the application in your browser at http://localhost.

### Testing

To run the tests, use the following command:

```bash
php artisan test
```
