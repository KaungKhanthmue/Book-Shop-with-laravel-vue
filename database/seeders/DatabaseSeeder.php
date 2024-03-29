<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use App\Models\ContributorRequest;
use App\Models\FriendAdd;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
    $this->call(RoleSeeder::class);
        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '1111',
        ]);
        $admin->roles()->attach(1);
        $con= User::factory()->create([
            'name' => 'contributor',
            'email' => 'con@gmail.com',
            'password' => '1111',
        ]);
        $con->roles()->attach(2);
        $user=User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '1111',
        ]);
        $user->roles()->attach(3);
        $uall = User::factory(10)->create();
        foreach($uall as $u)
        {
            $u->roles()->attach(3);
        }
        $category = Category::factory(10)->create();
        $tag = Tag::factory(10)->create();
        // Book::factory(10)->create();
        for($i=1;$i<10;$i++){
            $user = User::inRandomOrder()->with('roles',function($q){
                $q->where('name','user');
            })->first();
            ContributorRequest::create([
                'user_id'=> $user->id,
                'description' => 'test',
                'status' =>'off',
            ]);
        }
        $uall = FriendAdd::factory(10)->create();

    }
}
