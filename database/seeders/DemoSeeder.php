<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'General',
            'Groceries',
            'Fuel',
            'Utilities',
            'Education',
            'Rent',
            'Healthcare',
            'Entertainment',
            'Food',
            'Clothing',
            'Travel',
            'Insurance',
            'Home Maintenance',
            'Gifts and Donations',
            'Taxes',
            'Miscellaneous',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        for ($i = 0; $i < 100; $i++) {
            Expense::create([
                'date' => fake()->dateTimeBetween(now()->subYear()),
                'category_id' => rand(1, 16),
                'amount' => rand(500, 20000),
                'description' => fake()->text(50),
            ]);
        }
    }
}
