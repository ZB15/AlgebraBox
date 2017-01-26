<?php

use Illuminate\Database\Seeder;

class Sections extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		 DB::table('sections')->insert([
		 [
            'name' => 'images'
         ],
		 [
		    'name' => 'documents'
		 ],
		 
		 [
		    'name' => 'musics'
		 ],
		 
		 [
		    'name' => 'videos'
		 ]
			
        ]);
		
		
		
    }
}
