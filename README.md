# Expense Tracker
## Description
Expense Tracker is an open source project that helps you track your personal expenses using Laravel and Livewire. 
You can easily create and manage your expenses, categorize them by type, and generate reports to see your spending patterns.

## Install dependencies
```bash
composer install

# Create a copy of .env file
cp .env.example .env

# Generate application key
php artisan key:generate

# Create a database and update .env file with database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=

# Run database migrations and seeders
php artisan migrate --seed

# Start the local development server
php artisan serve
```

You should now be able to access the project at http://localhost:8000.

## Usage
To use Expense Tracker, you will need to create an account with your name, email, and password. Once you log in, you can start adding your expenses by clicking on the "Add Expense" button. You can enter the amount, date, category, and description of each expense. You can also edit or delete your expenses by clicking on the corresponding icons in the table.
You can view your expenses by month, year, or category by using the filters on the top of the page. You can also generate reports to see your total expenses, average expenses, and expense distribution by category. You can export your reports as PDF or CSV files by clicking on the "Export" button.

## Contributing
Expense Tracker is an open source project and welcomes contributions from anyone who is interested. If you want to contribute to this project, please follow these steps:
- Fork this repository and clone it to your local machine.
- Create a new branch for your feature or bug fix.
- Write clean and well-commented code.
- Test your code and make sure it works as expected.
- Push your changes to your fork and create a pull request to the main branch.
- Wait for feedback and approval from the maintainers.

## License
Expense Tracker is licensed under the [MIT License]. See the LICENSE file for more details.
