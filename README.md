Project Installation Guide
1.  Create Project: Open CMD and run laravel new Lazim.
2.  Create Database: Create a database named lazim.
3.  Update Environment Configuration: Modify the .env file with database details.
4.  Create Task Model and Migration: Use the Artisan command php artisan make:model Task -m.
5.  Update Migration Schema: Modify the generated migration file to define the task table schema.
6.  Run Migration: Execute the migration command with php artisan migrate.
7.  Update Fillable Columns: Add the required fillable columns in the Task model.
8.  Create Controller: Generate a controller using php artisan make:controller TaskController.
9.  Define Routes: Add necessary routes in web.php for task operations.
10. Create Blade Layouts: Design the Blade templates as per the task requirements.
11. Password Validation: Implement password validation using Laravel's validation rules.
12. Save Task Records: Save tasks to the database and notify users with flash messages.
13. List Task Records: Display all the saved task records.
14. UI Design: Use Bootstrap 5 for the UI design.


Project Setup Guide
1.  Clone Repository: Clone the project repository.
2.  Create Database: Create a new database and update the .env configuration with the database details.
3.  Update Composer: Run composer update (ensure PHP version 8.1 to avoid warnings or errors).  CMD: composer update
4.  Run Migrations: Execute the migration command. CMD: php artisan migrate
5.  Start Project: Serve the project.  CMD: php artisan serve