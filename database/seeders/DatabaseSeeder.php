<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TitreSeeder::class,
            NavbarSeeder::class,
            LogoSeeder::class,
            ButtonSeeder::class,
            ServiceSeeder::class,
            FooterSeeder::class,
            EmploieSeeder::class,
            RoleSeeder::class,
            ImageSeeder::class,
            VideoSeeder::class,
            CategorieSeeder::class,
            TagSeeder::class,
            AdresseSeeder::class,
            TeamSeeder::class,
            AviSeeder::class,
            ArticleSeeder::class,

        ]);
    }
}
