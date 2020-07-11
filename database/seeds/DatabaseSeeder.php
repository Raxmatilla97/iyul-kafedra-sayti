<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use Database\Seeds\PermissionsTableSeeder;
use Database\Seeds\RolesTableSeeder;
use Database\Seeds\ConnectRelationshipsSeeder;
use App\Models\YangiliklarBolimlari;
use App\Models\Yangiliklar;
use App\Models\Gallereya;
use App\Models\GallereyaCategory;
use App\Models\Firstbanner;
use App\Models\YangilikOptions;
use App\Models\Sliders;
use App\Models\GridCard;
use App\Models\Elonlar;
use App\Models\VideoBanner;


use App\Models\Roles;
use App\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Raxmatilla',
            'email' => 'wi.fi.xor@gmail.com',
            'password' => Hash::make('5579187Er'),
        ]);

 
        factory(Sliders::class, 3)->create();
        factory(GridCard::class, 8)->create();

        factory(Firstbanner::class, 1)->create();
        factory(YangilikOptions::class, 1)->create();
       
        factory(YangiliklarBolimlari::class, 15)->create();
        factory(Yangiliklar::class, 10)->create();
        factory(GallereyaCategory::class, 10)->create();

        factory(Gallereya::class, 30)->create();
        factory(Elonlar::class, 20)->create();
        factory(VideoBanner::class, 1)->create();


        Model::unguard();
     
        $this->call('PermissionsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('ConnectRelationshipsSeeder');
        //$this->call('UsersTableSeeder');

        Model::reguard();

       

        
        
      
        
    }
}
