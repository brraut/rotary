<?php

use Illuminate\Database\Seeder;

class MtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mtypes')->insert([
        	[
        		'type' => 'Central Committee Member',
        		'slug' => str_slug('Central Committee Member')
        	],
        	[
        		'type' => 'Lifetime Member',
        		'slug' => str_slug('Lifetime Member')
        	],
        	[
        		'type' => 'Other Member',
        		'slug' => str_slug('Other Member')
        	],

        ]);
    }
}
