<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Menu;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        Menu::create([
            'jenis' => 'Makanan',
            'nama' => 'Nasi Goreng',
            'foto' => 'nasi_goreng.jpg'
        ]);

        Menu::create([
            'jenis' => 'Makanan',
            'nama' => 'Mie Tiaw Goreng',
            'foto' => 'mie_tiaw.jpg'
        ]);

        Menu::create([
            'jenis' => 'Makanan',
            'nama' => 'Dimsum',
            'foto' => 'dimsum.jpg'
        ]);

        Menu::create([
            'jenis' => 'Minuman',
            'nama' => 'Cendol Kampoeng',
            'foto' => 'cendol_kampoeng.jpg'
        ]);

        Menu::create([
            'jenis' => 'Minuman',
            'nama' => 'Es Kopi Kekinian',
            'foto' => 'es_kopi.jpg'
        ]);

        Menu::create([
            'jenis' => 'Minuman',
            'nama' => 'Lemon Tea',
            'foto' => 'lemon_tea.jpg'
        ]);

        Review::create([
            'menu_id' => 1,
            'email' => 'hasan@gmail.com',
            'rating' => 3,
            'ulasan' => 'Lumayan lah'
        ]);

        Review::create([
            'menu_id' => 1,
            'email' => 'siti@gmail.com',
            'rating' => 4,
            'ulasan' => 'Menurutku sudah enak, cuma agak asin.'
        ]);

        Review::create([
            'menu_id' => 1,
            'rating' => 5,
            'ulasan' => 'Enak banget kak'
        ]);

        Review::create([
            'menu_id' => 1,
            'email' => 'yunus@gmail.com',
            'rating' => 5,
            'ulasan' => 'Paling top pokoknya :D'
        ]);

        Review::create([
            'menu_id' => 1,
            'email' => 'hendri@gmail.com',
            'rating' => 4,
            'ulasan' => 'Mantap, mantap'
        ]);

        Review::create([
            'menu_id' => 4,
            'email' => 'doni@gmail.com',
            'rating' => 4,
            'ulasan' => 'Mungkin perlu ditambah es'
        ]);

        Review::create([
            'menu_id' => 4,
            'email' => 'yaya@gmail.com',
            'rating' => 5,
            'ulasan' => 'Segar banget!!'
        ]);

        Review::create([
            'menu_id' => 4,
            'rating' => 3,
            'ulasan' => 'Agak manis ya'
        ]);

        Review::create([
            'menu_id' => 4,
            'rating' => 4,
            'ulasan' => 'Udah boleh lah'
        ]);

        Review::create([
            'menu_id' => 4,
            'email' => 'tono@gmail.com',
            'rating' => 5,
            'ulasan' => 'Perfecto!!!'
        ]);
    }
}
