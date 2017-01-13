<?php

use Illuminate\Database\Seeder;
use App\User; 

class UserRootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = factory(User::class,1)->create([
    		'name' => 'Root sipcop',
    		'email' => 'root@sahum.gob.ve',
    		'password' => bcrypt('root')
    	]);

        $user->syncRoles([1]);
    }
}
