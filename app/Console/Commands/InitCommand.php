<?php
/**
 * Description of INIT.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Console\Commands;


use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class InitCommand extends Command
{
    protected $signature = 'init:app
    {weakPassword : Provide a weak password for the user, for example: 123456}';

    public function handle(): void
    {
        $this->createUser();
        $this->makeStoragePublic();
        $this->generateSitemap();
    }

    private function createUser(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admmin@gmail.com',
            'status' => User::STATUS_ACTIVE,
            'level' => User::LEVEL_USER,
            'phone' => '380998494',
            'password' => Hash::make($this->argument('weakPassword')),
        ]);
    }

    private function makeStoragePublic(): void
    {

        $storage = __DIR__ . "/../../../storage";
        system("sudo chmod -R 777 " . $storage);
    }

    private function generateSitemap(): void
    {
        $this->call('sitemap:generate');
    }


}
