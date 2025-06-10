# Blogging Platform API - Laravel

A robust RESTful API for creating and managing blog content, built with Laravel. This API provides full CRUD operations for blog posts, comments, and tags, with secure authentication and role-based access control.

## Features

- JWT Authentication with Laravel Sanctum
- Full CRUD operations for blog posts
- Commenting system with ownership verification
- Tag management with categorization
- Search functionality across posts
- User management with roles (User/Admin)
- Paginated responses for all collections
- Comprehensive validation and error handling
- Role-based access control with policies

## Technology Stack

- **Framework**: Laravel 11
- **Authentication**: Laravel Sanctum
- **Database**: MySQL (with Eloquent ORM)
- **Testing**: Postman (with automated test collection)

## Getting Started

### Prerequisites

- PHP 8.1+
- Composer
- MySQL 8.0+

### Installation

1. Clone the repository:
```bash
git clone https://github.com/mostafaamahmoudd/blogging-platform-api
cd blogging-platform-api
```

2. Install dependencies:
```bash
composer install
```

3. Configure environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blogging_platform
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations:
```bash
php artisan migrate
```

6. Start the development server:
```bash
php artisan serve
```

## API Endpoints

| Method | Endpoint                 | Description                     | Auth Required |
|--------|--------------------------|---------------------------------|---------------|
| POST   | `/register`              | Register a new user             | No            |
| POST   | `/login`                 | Authenticate a user             | No            |
| POST   | `/logout`                | Logout user                     | Yes           |
| GET    | `/posts`                 | Get all posts (paginated)       | No            |
| POST   | `/posts`                 | Create a new post               | Yes           |
| GET    | `/posts/{id}`            | Get a specific post             | No            |
| PUT    | `/posts/{id}`            | Update a post                   | Yes (Owner)   |
| DELETE | `/posts/{id}`            | Delete a post                   | Yes (Owner)   |
| POST   | `/posts/{post}/comments` | Add a comment to a post         | Yes           |
| PUT    | `/comments/{id}`         | Update a comment                | Yes (Owner)   |
| DELETE | `/comments/{id}`         | Delete a comment                | Yes (Owner)   |
| GET    | `/tags`                  | Get all tags                    | No            |
| POST   | `/tags`                  | Create a new tag                | Yes (Admin)   |
| GET    | `/search?q={query}`      | Search posts by keyword         | No            |

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request
