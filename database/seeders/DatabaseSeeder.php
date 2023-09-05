<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
         ]);

        $categories = [
            "Groceries",
            "Rent or Mortgage",
            "Utilities",
            "Transportation",
            "Healthcare",
            "Entertainment",
            "Dining Out",
            "Clothing",
            "Education",
            "Travel",
            "Insurance",
            "Home Maintenance",
            "Savings",
            "Debt Repayment",
            "Gifts and Donations",
            "Taxes",
            "Miscellaneous"
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
