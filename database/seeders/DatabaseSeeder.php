<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 9; ++$i){
            //DB::table('dashboard')->where('id', $i)->update(array("title" => "", "url" =>  "", "color" => "#000000"));
            DB::table('dashboard')->insert([
                'number' => $i,
                'title' => "",
                'url' => "",
                'color' => "#000000",
            ]);
        }
    }
}
