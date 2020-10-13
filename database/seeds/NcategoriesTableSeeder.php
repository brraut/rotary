<?php

use Illuminate\Database\Seeder;

class NcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('ncategories')->insert([
        	[
        		'title' => 'Notice'
        	],
        	[
        		'title' => 'Press Release'
        	],
        	

        ]);
    }
}
