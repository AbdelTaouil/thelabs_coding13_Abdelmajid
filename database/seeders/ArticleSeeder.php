<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'titre' => 'Voyage de chiro',
                'src' => '01.jpg',
                'check' => 'oui',
                'description' => "Le film raconte l'histoire de Chihiro, une fillette de dix ans qui, alors qu'elle se rend en famille vers sa nouvelle maison, entre dans le monde des esprits. Après la transformation de ses parents en porcs par la sorcière Yubaba, Chihiro prend un emploi dans l'établissement de bains de la sorcière pour retrouver ses parents et regagner le monde des humains.
                Miyazaki écrit le scénario en s'inspirant de la fille de son producteur associé, Seiji Okuda, qui vient lui rendre visite chaque été. Il y développe plusieurs thèmes qui lui sont chers, dont l'intégration par le travail collectif, le voyage initiatique, le renouement avec les valeurs ancestrales (notamment le shinto) et le danger de la société moderne pour la nature et les traditions. La production de Chihiro débute en 2000 avec un budget de 19 millions de dollars. La composition de la bande originale du film est confiée à Joe Hisaishi.",
                'user_id' => 1,
                 'created_at' => '2021-01-11 12:23:35',

                
            ],
            [
                'titre' => 'naruto',
                'src' => '02.jpg',
                'check' => 'oui',
                'description' => "Miyazaki écrit le scénario en s'inspirant de la fille de son producteur associé, Seiji Okuda, qui vient lui rendre visite chaque été. Il y développe plusieurs thèmes qui lui sont chers, dont l'intégration par le travail collectif, le voyage initiatique, le renouement avec les valeurs ancestrales (notamment le shinto) et le danger de la société moderne pour la nature et les traditions. La production de Chihiro débute en 2000 avec un budget de 19 millions de dollars. La composition de la bande originale du film est confiée à Joe Hisaishi ",
                'user_id' => 2,
                 'created_at' => '2021-01-11 12:23:35',

                
            ],
            [
                'titre' => 'One Piece',
                'src' => 'onepiece.jpg',
                'check' => 'oui',
                'description' => "Les droits de la série sont acquis par la société Toei Animation qui adapte le manga en anime, cette version est diffusée au Japon chaque dimanche depuis 1999. La série compte plus de 950 épisodes en 2021. Dans les pays francophones, les droits de l'anime sont possédés par Kana Home Video. Il est disponible sur les plates-formes de streaming Anime Digital Network et Crunchyroll. Il est aussi diffusé sur les chaînes J-One, Game One et MCM. La licence compte 14 films, 11 épisodes spéciaux et 1 OAV, ainsi que 4 romans, 1 livre de recettes, plus de 50 jeux vidéo, plus de 5000 figurines1, un restaurant, un parc d’attraction, et une série live prévue pour 20212. ",
                'user_id' => 3,
                 'created_at' => '2021-01-11 12:23:35',

                
            ],
            [
                'titre' => 'Kingdom',
                'src' => 'king.jpg',
                'check' => 'oui',
                'description' => "En Chine, il y a des centaines et des centaines d’années, le récit suit le jeune Shin dans son chemin vers l'accomplissement de son rêve : devenir un Grand Général. Dans cette Chine ancestrale, Shin est originaire de l'État de Qin en proie à de nombreux soubresauts aussi bien à l'intérieur du royaume, mais aussi à l'extérieur. En effet, l'histoire se déroule durant la période des Royaumes combattants, quand la Chine était divisée entre sept royaumes : Qin, Zhao, Han, Wei, Chu, Yan et Qi. À travers l'histoire de Shin, on suit également l'histoire de Ei Sei, l'homme qui sera par la suite connu comme Qin Shi Huang, l'unificateur de la Chine. ",
                'user_id' => 2,
                'created_at' => '2021-01-11 12:23:35',

                
            ],
        ]);
    }
}
