<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('RolesAndPermissionsSeeder');
        Model::reguard();
        $this->call(SettingsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ImageGalleryTableSeeder::class);
        $this->call(CategoryPostSeeder::class);
        $this->call(CategoryPostTableSeeder::class);
    }
}
