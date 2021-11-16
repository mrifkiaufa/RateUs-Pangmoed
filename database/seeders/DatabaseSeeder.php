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

        User::create([
            'password' => 'ad32A0',
            'role' => 'pelanggan'
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
            'email' => 'satu@gmail.com',
            'rating' => 4,
            'ulasan' => 'Mantap, bagus sekali'
        ]);

        Review::create([
            'menu_id' => 1,
            'email' => 'dua@gmail.com',
            'rating' => 3,
            'ulasan' => 'Lumayan lah'
        ]);

        Review::create([
            'menu_id' => 1,
            'rating' => 5,
            'ulasan' => 'Keren banget'
        ]);
    }
}
