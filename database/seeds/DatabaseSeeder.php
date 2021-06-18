<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

            DB::table('company')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'admin@admin.com',
            'logo' => Str::random('5'),
             'websites' => Str::random('10'),
        ]);
        
      
  DB::table('employees')->insert([
            'frist_name' => Str::random(10),
            'last_name' => Str::random(10),
             'email' => Str::random(10).'admin@admin.com',
            'company_id' =>'1',
             'phone' =>Str::random(11),
        ]);
        

        factory(App\User::class, 50)->create();
       
       
      

    }
}
