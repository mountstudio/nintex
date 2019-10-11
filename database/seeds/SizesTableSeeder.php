<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run()
    {
        $sizes = ['xs', 's', 'm', 'l', 'xl', 'xxl'];

        foreach ($sizes as $size) {
            \App\Size::create([
                'size' => $size,
            ]);
        }
    }
}
