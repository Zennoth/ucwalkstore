<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'id' => 1,
            'name' => 'tuku tuku',
            'slug' => 'tuku tuku',
            'parent_id' => null
        ]);
        Category::create([
            'id' => 2,
            'name' => 'gotri',
            'slug' => 'gotri',
            'parent_id' => null
        ]);
        Category::create([
            'id' => 3,
            'name' => 'madam liy',
            'slug' => 'madam liy',
            'parent_id' => null
        ]);
        Category::create([
            'id' => 4,
            'name' => 'kopte',
            'slug' => 'kopte',
            'parent_id' => null
        ]);

    }
}
