# TPA Online Application for Practical Training and Internship

This project is a web-based application built with Laravel, designed to manage practical training and internship applications. It leverages a variety of tools and technologies, including MySQL, Laravel Excel, Tailwind CSS, Bootstrap, Livewire, and Alpine.js to provide a dynamic and efficient user experience.

## Project Features

-   **Application Management**: Submit, track, and manage applications for practical training and internships.
-   **Dynamic Forms**: Stepwise forms with real-time updates using Livewire and Alpine.js.
-   **Deadline Management**: Set and manage application deadlines.
-   **Responsive Design**: Tailored for all screen sizes using Tailwind CSS and Bootstrap.
-   **Data Export**: Export data to Excel using the Laravel Excel package.

## Requirements

-   **PHP** >= 8.2
-   **Composer** (for managing Laravel dependencies)
-   **MySQL** (for the database)
-   **Node.js** and **npm** (for managing front-end assets)
-   **Laravel Excel** (for handling Excel exports)
-   **Tailwind CSS** (for styling and responsive design)
-   **Bootstrap** (for additional styling)
-   **Livewire** (for dynamic components)
-   **Alpine.js** (for lightweight JavaScript interactions)

## Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/Kinyula/TPAOnlineFieldApplication

    ```

2. **Install PHP dependencies**:

    ```bash
    composer install
    ```

3. **Install Node.js dependencies**:

    ```bash
    npm install
    ```

4. **Environment setup**:

    - Duplicate the `.env.example` file and rename it to `.env`.
    - Update the `.env` file with your database credentials and other settings:
        ```bash
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=tpa_online_application
        DB_USERNAME=root
        DB_PASSWORD=
        ```

5. **Run database migrations**:

    ```bash
    php artisan migrate
    ```

6. **Compile assets**:

    ```bash
    npm run dev
    ```

7. **Serve the application**:
    ```bash
    php artisan serve
    ```

## Learning Laravel

To learn more about Laravel, visit the [official documentation](https://laravel.com/docs).

## Laravel Sponsors

We would like to extend our thanks to all the sponsors of Laravel. Their contributions help make the framework better. If you are interested in becoming a sponsor, visit the [Laravel Sponsors page](https://laravel.com/sponsors).

### Premium Partners

-   [Forge](https://forge.laravel.com)
-   [Vapor](https://vapor.laravel.com)

## Contributing

Contributions are welcome! If you find any bugs or want to add new features, feel free to submit a pull request.

## Code of Conduct

Please follow the [Laravel Code of Conduct](https://laravel.com/conduct) when contributing to this project.

## Security Vulnerabilities

If you discover a security vulnerability, please email us at `victorzacharia111@gmail.com`. All security vulnerabilities will be promptly addressed.

## License

This project is open-source and licensed under the [MIT license](https://opensource.org/licenses/MIT).
