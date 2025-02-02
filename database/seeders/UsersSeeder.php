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
            'name' => 'Admin',
            'mobile_code' => '20',
            'mobile' => '201146263393',
            'locale_mobile' => '0553203604',
            'email' => 'admin@muc.net',
            'username' => 'admin',
            'avatar' => $this->addAvatar('0.png'),
            'password' => bcrypt(value: 'admin'),
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
