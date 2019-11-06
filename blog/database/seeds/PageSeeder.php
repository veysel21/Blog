<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Hakkımızda', 'Kariyer'];
        $count = 0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => str_slug($page),
                'image' => 'https://www.fiftheagle.com/wp-content/uploads/2019/05/shutterstock_705804559-850x476.jpg',
                'content' => 'Lorem ipsum dolor sit amet,
                 consectetur adipiscing elit. Nulla semper aliquet rhoncus.
                  Donec placerat sollicitudin eleifend. Aenean in imperdiet massa.
                   Etiam iaculis mauris quis elit consectetur, eu maximus enim iaculis. 
                   Aliquam erat volutpat. Maecenas eleifend sit amet mauris vitae auctor. 
                   Sed et bibendum lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                   Mauris non quam nec ipsum iaculis ullamcorper. Etiam consectetur iaculis nulla.',
                'order' => $count,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
