# MyLaraBlog API

## Overview
MyLaraBlog is a backend service built with Laravel 12. It serves a JSON API for content management and uses Vite for frontend asset compilation.

## Features
- **Laravel 12**: Powers the core application logic, routing, and database interactions.
- **Eloquent ORM**: Provides an expressive and intuitive interface for database operations.
- **REST API**: Exposes application data through a clean, stateless API.
- **Vite**: Handles modern, fast frontend asset bundling and development server.

## Getting Started
### Installation
1.  **Clone the repository**
    ```sh
    git clone <repository-url>
    cd <repository-name>
    ```

2.  **Install PHP dependencies**
    ```sh
    composer install
    ```

3.  **Install NPM dependencies**
    ```sh
    npm install
    ```

4.  **Setup environment file**
    ```sh
    cp .env.example .env
    ```

5.  **Generate application key**
    ```sh
    php artisan key:generate
    ```

6.  **Create the database file** (for SQLite)
    ```sh
    touch database/database.sqlite
    ```

7.  **Run database migrations**
    ```sh
    php artisan migrate
    ```

8.  **Run the development servers**
    ```sh
    npm run dev 
    # This will concurrently start the Vite and Laravel development servers.
    ```

### Environment Variables
Create a `.env` file in the root directory and populate it with the following required variables:

| Variable          | Description                        | Example                                     |
| ----------------- | ---------------------------------- | ------------------------------------------- |
| `APP_NAME`        | Your application's name.           | `MyLaraBlog`                                |
| `APP_ENV`         | The application environment.       | `local`                                     |
| `APP_KEY`         | Encryption key (generated).        | `base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=`  |
| `APP_DEBUG`       | Toggles debug mode.                | `true`                                      |
| `APP_URL`         | The root URL of your application.  | `http://localhost:8000`                     |
| `DB_CONNECTION`   | The database driver.               | `sqlite`                                    |
| `DB_DATABASE`     | Path to the SQLite database file.  | `database/database.sqlite`                  |
| `SESSION_DRIVER`  | Driver for session storage.        | `database`                                  |
| `SESSION_LIFETIME`| Session lifetime in minutes.       | `120`                                       |
| `QUEUE_CONNECTION`| Driver for the queue system.       | `database`                                  |
| `CACHE_STORE`     | Driver for application caching.    | `database`                                  |
| `REDIS_HOST`      | Redis server host.                 | `127.0.0.1`                                 |
| `REDIS_PORT`      | Redis server port.                 | `6379`                                      |
| `MAIL_MAILER`     | Driver for sending emails.         | `log`                                       |


## API Documentation
### Base URL
```
http://localhost:8000/api
```

### Endpoints
#### GET /categories/list
Retrieves a list of all active categories.

**Request**:
No request body is required.

**Response**:
A successful response returns a JSON array of category objects.
```json
[
  {
    "id": 1,
    "name": "Technology",
    "status": "active",
    "created_at": "2024-05-21T10:30:00.000000Z",
    "updated_at": "2024-05-21T10:30:00.000000Z"
  },
  {
    "id": 2,
    "name": "Developer Tools",
    "status": "active",
    "created_at": "2024-05-21T10:35:00.000000Z",
    "updated_at": "2024-05-21T10:35:00.000000Z"
  }
]
```

**Errors**:
- **500 Internal Server Error**: The server encountered an issue, such as a database connection failure.