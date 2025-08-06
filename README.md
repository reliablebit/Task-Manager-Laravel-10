# Laravel 10 Task Manager

A complete CRUD (Create, Read, Update, Delete) task management application built with Laravel 10, featuring custom authentication and Bootstrap UI.

## Features

- **User Authentication**: Custom registration and login system
- **Task Management**: Full CRUD operations for tasks
- **Task Properties**:
  - Title and description
  - Status: Pending, In Progress, Completed
  - Priority: Low, Medium, High
  - Due dates
- **User Authorization**: Users can only manage their own tasks
- **Responsive UI**: Bootstrap 5 with clean, modern design
- **Database**: MySQL with proper migrations

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   ```

3. Configure environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Set up database in `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. Run migrations:
   ```bash
   php artisan migrate
   ```

6. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

1. Register a new account or login with existing credentials
2. Create tasks with title, description, priority, and due date
3. View all your tasks in a card-based layout
4. Edit tasks to update status, priority, or other details
5. Delete tasks when completed
6. Track task progress with visual status indicators

## Technology Stack

- **Backend**: Laravel 10 (PHP 8.1+)
- **Frontend**: Blade templates with Bootstrap 5
- **Database**: MySQL
- **Authentication**: Custom Laravel authentication
- **Authorization**: Laravel Policies
- **Icons**: Bootstrap Icons

## Project Structure

- `app/Models/Task.php` - Task model with relationships
- `app/Http/Controllers/TaskController.php` - Task CRUD operations
- `app/Http/Controllers/AuthController.php` - Custom authentication
- `app/Policies/TaskPolicy.php` - Authorization policies
- `resources/views/` - Blade templates
- `database/migrations/` - Database schema

## API Routes

- `GET /` - Welcome page
- `GET /login` - Login form
- `POST /login` - Authenticate user
- `GET /register` - Registration form
- `POST /register` - Create new user
- `POST /logout` - Logout user
- `GET /tasks` - List all user tasks
- `GET /tasks/create` - Create task form
- `POST /tasks` - Store new task
- `GET /tasks/{task}` - Show task details
- `GET /tasks/{task}/edit` - Edit task form
- `PUT /tasks/{task}` - Update task
- `DELETE /tasks/{task}` - Delete task

## Development

To run the application in development mode:
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
