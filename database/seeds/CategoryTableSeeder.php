<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Kategori A'
            ],
            [
                'name' => 'Kategori B'
            ],
            [
                'name' => 'Kategori C'
            ],
        ];

        try {
            foreach ($data as $key => $value) {
                $category = Category::firstOrCreate($value);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
