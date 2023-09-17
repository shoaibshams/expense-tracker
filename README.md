# Expense Tracker
## Description
Expense Tracker is an open source project that helps you track your personal expenses using Laravel and Livewire. 
You can easily create and manage your expenses, categorize them by type, and generate reports to see your spending patterns.

## Screenshots
![Dashboard](https://github.com/shoaibshams/expense-tracker/assets/9925154/28f86e21-09d5-48c9-8bd1-783d4729a202)
![categories-table](https://github.com/shoaibshams/expense-tracker/assets/9925154/313081a2-d35a-4537-8a5a-ae53bf7fc992)
![new-category](https://github.com/shoaibshams/expense-tracker/assets/9925154/7a136707-aca5-4b45-b9d2-8db5ac3f17cc)
![edit-category](https://github.com/shoaibshams/expense-tracker/assets/9925154/7f57306d-1aa5-4a9f-9dc8-ff7ebaf76de3)
![delete-category](https://github.com/shoaibshams/expense-tracker/assets/9925154/51f25a3b-df47-4233-aa88-544acb4802ac)
![transactions-table](https://github.com/shoaibshams/expense-tracker/assets/9925154/8afa4e8e-279f-451b-bccf-c49f9cbb9779)
![new-transaction](https://github.com/shoaibshams/expense-tracker/assets/9925154/630f96f9-cb2d-4dad-a3ec-d7ec5a40cf57)
![edit-transaction](https://github.com/shoaibshams/expense-tracker/assets/9925154/ba718886-6286-4f98-bcd4-ca00ac3e6c50)



## Installation
```bash
# Clone the repository
git clone https://github.com/shoaibshams/expense-tracker.git

# Change the directory
cd expense-tracker

# Install dependencies
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

## Credentials
**Email:** admin@admin.com

**Password:** password

## Usage
To use Expense Tracker, you will need to create an account with your name, email, and password. Once you log in, you can start adding your expenses by clicking on the "Add Expense" button. You can enter the amount, date, category, and description of each expense. You can also edit or delete your expenses by clicking on the corresponding icons in the table.
You can view your expenses by month, year, or category by using the filters on the top of the page. You can also generate reports to see your total expenses, average expenses, and expense distribution by category. You can export your reports as PDF or CSV files by clicking on the "Export" button.

# Contributing

Contributions are **welcome** and will be fully **credited**.

Please read and understand the contribution guide before creating an issue or pull request.

## Etiquette

This project is open source, and as such, the maintainers give their free time to build and maintain the source code
held within. They make the code freely available in the hope that it will be of use to other developers. It would be
extremely unfair for them to suffer abuse or anger for their hard work.

Please be considerate towards maintainers when raising issues or presenting pull requests. Let's show the
world that developers are civilized and selfless people.

It's the duty of the maintainer to ensure that all submissions to the project are of sufficient
quality to benefit the project. Many developers have different skillsets, strengths, and weaknesses. Respect the maintainer's decision, and do not be upset or abusive if your submission is not used.

## Viability

When requesting or submitting new features, first consider whether it might be useful to others. Open
source projects are used by many developers, who may have entirely different needs to your own. Think about
whether or not your feature is likely to be used by other users of the project.

## Procedure

Before filing an issue:

- Attempt to replicate the problem, to ensure that it wasn't a coincidental incident.
- Check to make sure your feature suggestion isn't already present within the project.
- Check the pull requests tab to ensure that the bug doesn't have a fix in progress.
- Check the pull requests tab to ensure that the feature isn't already in progress.

Before submitting a pull request:

- Check the codebase to ensure that your feature doesn't already exist.
- Check the pull requests to ensure that another person hasn't already submitted the feature or fix.

## Security

If you discover any security-related issues, please email [shoaibshamshere@gmail.com](mailto:shoaibshamshere@gmail.com) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
