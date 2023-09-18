# Expense Tracker
## Description
Expense Tracker is an open-source project designed to assist you in meticulously monitoring your personal finances. Built with Laravel and Livewire, it empowers you to effortlessly record and oversee your expenses, classify them by account type (such as cash or bank), and generate insightful reports to gain valuable insights into your financial habits and trends.

## Screenshots
![Dashboard](https://github.com/shoaibshams/expense-tracker/assets/9925154/28f86e21-09d5-48c9-8bd1-783d4729a202)
![accounts](https://github.com/shoaibshams/expense-tracker/assets/9925154/c4a5b3e5-e0d1-4942-bded-701855778523)
![categories](https://github.com/shoaibshams/expense-tracker/assets/9925154/b2418ac8-1b0b-4d03-aae0-ad7de6d28f67)
![transactions](https://github.com/shoaibshams/expense-tracker/assets/9925154/cebd550e-57ed-4283-9b32-c018814a722f)

## Features

* Dashboard
  * Monthly and weekly summary charts
  * Summary of Accounts (Opening balance, Income, Expense, Current Balance)
  * Yearly breakdown of income and expenses, organized by month
* Multiple accounts
  * Support for multiple account types, including Cash, Bank, and more
* Categories
  * Income & Expense categories
* Reporting
  * Detailed Accounts Ledger
  * Transaction Reports with Customizable Category Filters and More

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

To begin using the Expense Tracker, simply log in using the following credentials:

**Email:** admin@admin.com

**Password:** password

After logging in, you can start adding accounts, categories, income, and expenses.

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
