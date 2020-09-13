<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;
class categorytableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
             ['title'=>'Ordinateurs portables','slug'=>'laptops','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Ordinateurs bureau','slug'=>'desktops','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Téléphones portables','slug'=>'mobile-phones','Created_at' => $now,'updated_at'=> $now],
             ['title'=>'Tabletts','slug'=>'tablests','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Télévisions','slug'=>'tvs','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Caméras digitales','slug'=>'digital camera','Created_at' => $now,'updated_at' => $now],
             ['title'=>'Accessoires','slug'=>'accessories','Created_at' => $now,'updated_at' => $now],
        ]);
    }
}
