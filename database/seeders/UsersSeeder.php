<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'gender' => 1,
            'locale' => 'en',
            'name' => 'Osama Kamel',
            'mobile_code' => '966',
            'mobile' => '966553203604',
            'locale_mobile' => '0553203604',
            'email' => 'osama@prameg.net',
            'username' => 'osama',
            'avatar' => $this->addAvatar('osama.jpg'),
            'password' => bcrypt(value: '6532100Cs'),
        ])->assignRole(
            Role::Admin,
        );

        User::create([
            'gender' => 1,
            'locale' => 'en',
            'name' => 'Said Omar',
            'mobile_code' => '966',
            'mobile' => '966551113604',
            'locale_mobile' => '0551113604',
            'email' => 'said@prameg.net',
            'username' => 'said',
            'avatar' => $this->addAvatar('0.png'),
            'password' => bcrypt(value: '653210Cs'),
        ])->assignRole(
            Role::Admin,
        );
    }

    private function addAvatar(string $avatar): string
    {
        $from = public_path(path: "app/avatars/$avatar");

        $path = "avatars/$avatar";

        if (! Storage::exists(path: $path)) {
            Storage::put(path: $path, contents: file_get_contents(filename: $from));
        }

        return $path;
    }
}
