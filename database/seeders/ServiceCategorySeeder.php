<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name" => "AC",
                "slug" => 'ac',
                "image" => "1521969345.png"
            ],
            [
                "name"=>"Beleza",
                "slug"=>"beleza",
                "image"=>"1521969358.png"
            ],
            [
                "name"=>"Encanamento",
                "slug"=>"encanamento",
                "image"=>"1521969409.png"
            ],
            [
                "name"=>"Eletrica",
                "slug"=>"eletrica",
                "image"=>"1521969419.png"
            ],
            [
                "name"=>"Chuveiros",
                "slug"=>"chuveiros",
                "image"=>"1521969430.png"
            ],
            [
                "name"=>"Limpeza de residencias",
                "slug"=>"limpeza-de-residencias",
                "image"=>"1521969446.png"
            ],
            [
                "name"=>"Carpintaria",
                "slug"=>"carpintaria",
                "image"=>"1521969454.png"
            ],
            [
                "name"=>"Controle de pestes",
                "slug"=>"controle-de-pestes",
                "image"=>"1521969464.png"
            ],
            [
                "name"=>"Chamines",
                "slug"=>"chamines",
                "image"=>"1521969490.png"
            ],
            [
                "name"=>"Purificadores de agua",
                "slug"=>"purificadores-de-agua",
                "image"=>"1521972593.png"
            ],
            [
                "name"=>"Manutenção de computadores",
                "slug"=>"manutencao-de-computadores",
                "image"=>"1521969512.png"
            ],
            [
                "name"=>"TV",
                "slug"=>"tv",
                "image"=>"1521969522.png"
            ],
            [
                "name"=>"Geladeiras",
                "slug"=>"geladeiras",
                "image"=>"1521969536.png"
            ],
            [
                "name"=>"Filtros",
                "slug"=>"filtros",
                "image"=>"1521969558.png"
            ],
            [
                "name"=>"Carros",
                "slug"=>"carros",
                "image"=>"1521969576.png"
            ],
            [
                "name"=>"Documentos",
                "slug"=>"documentos",
                "image"=>"1521974355.png"
            ],
            [
                "name"=>"Moveis e empacotadoras",
                "slug"=>"moveis-e-empacotadoras",
                "image"=>"1521969599.png"
            ],
            [
                "name"=>"Automação residencial",
                "slug"=>"automacao-residencial",
                "image"=>"1521969622.png"
            ],
            [
                "name"=>"Lavanderia",
                "slug"=>"lavanderia",
                "image"=>"1521972624.png"
            ],
            [
                "name"=>"Pintura",
                "slug"=>"pintura",
                "image"=>"1521972643.png"
            ]
        ]);
    }
}
