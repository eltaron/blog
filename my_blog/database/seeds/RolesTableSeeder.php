<?php

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Factory::create();
        $adminRole  = Role::create(['name'=>'admin','display_name'=>'Administrator','description'=>'Administrator','allowed_route'=>'admin']);
        $editorRole = Role::create(['name'=>'editor','display_name'=>'Supervisor','description'=>'Supervisor','allowed_route'=>'admin']);
        $userRole   = Role::create(['name'=>'user','display_name'=>'User','description'=>'User','allowed_route'=>null]);
        $admin      = User::create(['name'=>'admin','username'=>'admin','email'=>'admin@gmail.com','mobile'=>'965003348391','email_verified_at'=>Carbon::now(),'password'=>bcrypt('123123123'),'status'=>1]);
        $admin->attachRole($adminRole);
        $editor     = User::create(['name'=>'editor','username'=>'editor','email'=>'editor@gmail.com','mobile'=>'965003348392','email_verified_at'=>Carbon::now(),'password'=>bcrypt('123123123'),'status'=>1]);
        $editor->attachRole($editorRole);
        $user1      = User::create(['name'=>'Ahmed','username'=>'ahmed','email'=>'ahmed@gmail.com','mobile'=>'965003348393','email_verified_at'=>Carbon::now(),'password'=>bcrypt('123123123'),'status'=>1]);
        $user1->attachRole($userRole);
        $user2      = User::create(['name'=>'Heba','username'=>'heba','email'=>'heba@gmail.com','mobile'=>'965003348394','email_verified_at'=>Carbon::now(),'password'=>bcrypt('123123123'),'status'=>1]);
        $user2->attachRole($userRole);
        $user3      = User::create(['name'=>'Aya','username'=>'aya','email'=>'aya@gmail.com','mobile'=>'965003348395','email_verified_at'=>Carbon::now(),'password'=>bcrypt('123123123'),'status'=>1]);
        $user3->attachRole($userRole);
        for($i=0; $i<10;$i++){
            $user  = User::create([
                'name'               =>$faker->name,
                'username'           =>$faker->userName,
                'email'              =>$faker->email,
                'mobile'             =>'965003' . random_int(1000,9999),
                'email_verified_at'  =>Carbon::now(),
                'password'           =>bcrypt('123123123'),
                'status'             =>1
            ]);
            $user->attachRole($userRole);
        }
    }
}
