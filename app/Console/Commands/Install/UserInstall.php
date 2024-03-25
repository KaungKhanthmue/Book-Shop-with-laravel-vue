<?php

namespace App\Console\Commands\Install;

use App\Models\User;
use Illuminate\Console\Command;

class UserInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::inRandomOrder()->with('roles',function($q){
            $q->where('name','user');
        })->first();
        dd($user);
    }
}
