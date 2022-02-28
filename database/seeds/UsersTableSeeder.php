<?php
use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder

{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
<<<<<<< Updated upstream
=======
       /* User::create([
            'email' => 'admin@laraspace.in',
            'name' => 'Jane Doe',
            'role' => 'admin',
            'password' => bcrypt('admin@123')
        ]);
>>>>>>> Stashed changes

        // User::create([
        //     'email' => 'admin@laraspace.in',
        //     'name' => 'Jane Doe',
        //     'role' => 'admin',
        //     'password' => bcrypt('admin@123')
        // ]);

        // User::create([
        //     'email' => 'shane@laraspace.in',
        //     'name' => 'Shane White',
        //     'role' => 'user',
        //     'password' => bcrypt('hank@123')
        // ]);

        // User::create([
        //     'email' => 'adam@laraspace.in',
        //     'name' => 'Adam David',
        //     'role' => 'user',
        //     'password' => bcrypt('jesse@123')
        // ]);

        User::create([
            'email' => 'dhivakar@cgbod.in',
            'name' => 'dhivakar',
            'role' => 'user',
<<<<<<< Updated upstream
            'password' => bcrypt('dhivakar@123')
=======
            'password' => bcrypt('jesse@123')
          ]);   */

        User::create([
            'email' => 'vaishnavi@cgbod.in',
            'name' => 'Vaishnavi',
            'role' => 'user',
            'password' => bcrypt('vaishu@123')
>>>>>>> Stashed changes
        ]);
    }
}
