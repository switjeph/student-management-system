##README.md file ------ Student Management system bulit on Laravel Framework that enables a user peform seamless operations like creating student profile, modify, delete profile. In addition it makes it possible to store profile Data's in a Database called PhpMyAdmin. 

##Steps on how to clone and serve the -- Student Management system-- on Laravel:
1. Clone the Project from GitHub: git clone <repository-url> 
2. Navigate into the Project Directory: cd project-folder-name 
3. Install Dependencies: composer instal  If composer is not installed in your computer, download and install it from https://getcomposer.org
4. Copy the Environment File: cp .env.example .env
5. Generate Application Key: php artisan key:generate
6. Open the .env file and update the database credentials ( DB_DATABASE , DB_USERNAME , DB_PASSWORD ). Create the database manually in MySQL/PostgreSQL or using a command like: CREATE DATABASE your_database_name;
7. Run Migrations: php artisan migrate
8. Install Frontend Dependencies: If the project uses Vite, Inertia.js, or any frontend framework, install the dependencies: npm install .Then, compile assets: npm run dev
9. Serve the Application: Run the Laravel development server: php artisan serve . Your Laravel project should now be accessible at http://127.0.0.1:8000 .
