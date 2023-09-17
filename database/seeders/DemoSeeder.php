<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = [
            ['name' => 'Cash', 'code' => fake()->iban, 'description' => fake()->text(25), 'opening_balance' => rand(50000, 100000)],
            ['name' => 'Bank', 'code' => fake()->iban, 'description' => fake()->text(25), 'opening_balance' => rand(50000, 100000)],
        ];

        foreach ($accounts as $account) {
            Account::create($account);
        }

        $categories = [
            ['name' => 'General', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Groceries', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Fuel', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Utilities', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Education', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Rent', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Healthcare', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Entertainment', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Food', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Clothing', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Travel', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Insurance', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Home Maintenance', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Gifts and Donations', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Taxes', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Miscellaneous', 'type' => 'expense', 'icon' => 'fa fa-link'],
            ['name' => 'Salary', 'type' => 'income', 'icon' => 'fa fa-link'],
            ['name' => 'Freelance', 'type' => 'income', 'icon' => 'fa fa-link'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        for ($i = 0; $i < 1000; $i++) {
            Transaction::create([
                'date' => fake()->dateTimeBetween(now()->subYear())->format('Y-m-d'),
                'account_id' => rand(1, 2),
                'category_id' => rand(1, 18),
                'amount' => rand(500, 20000),
                'description' => fake()->text(25),
            ]);
        }
    }
}
