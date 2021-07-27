<?php

namespace Database\Seeders;

use App\Models\ReviewGroup;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Туалеты', 'Смс',
            'Консультативные заключения', 'Взять с собой',
            'Стойка регистрации', 'Детская зона',
            'На кассе'
        ];

        foreach ($categories as $category) {

            ReviewGroup::create([
                'name' => $category,
            ]);
        }
    }
}
