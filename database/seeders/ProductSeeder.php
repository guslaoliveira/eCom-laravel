<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [    
            'name'=>'iPhone 11 Preto',
            'price'=>'700',
            'category'=>'mobile',
            'description'=>'iPhone 11 Preto, 64GB - MHDA3BZ/A',
            'gallery'=>'http://127.0.0.1/img/iphone-11-preto-64gb-mhda3br-a_1605027866_gg.jpg'
        ],
    
        [
            'name'=>'Smartphone LG K52',
            'price'=>'140',
            'category'=>'mobile',
            'description'=>'Smartphone LG K52, 64GB, 13MP, Tela 6.5´, Verde - LMK420BMW',
            'gallery'=>'http://127.0.0.1/img/smartphone-lg-k52-64gb-13mp-tela-6-5-verde-tcdl0998_1603200014_gg.jpg'
        ],
        
        [
            'name'=>'Smartphone Motorola Moto G9 Plus',
            'price'=>'200',
            'category'=>'mobile',
            'description'=>'Smartphone Motorola Moto G9 Plus, 128GB, 64MP, Tela 6.8',
            'gallery'=>'http://127.0.0.1/img/smartphone-motorola-moto-g9-plus-128gb-64mp-tela-6-8-ouro-rose-capa-protetora-xt2087-1_1600807915_gg.jpg'
        ],
        [
            'name'=>'Smartphone Xiaomi Redmi Note 9 Pro',
            'price'=>'999',
            'category'=>'mobile',
            'description'=>'Smartphone Xiaomi Redmi Note 9 Pro com Processador Qualcomm Snapdragon 720G, 6GB de Ram, 128GB de Armazenamento, Câmera de 64+8+5+2MP, Tela de 6.67',
            'gallery'=>'http://127.0.0.1/img/Smartphone-Xiaomi-Redmi-Note-9-Pro-com-Processador-Qualcomm-Snapdragon-720G-6GB-de-Ram-128GB-de-Armazenamento-C-mera-de-64-8-5-2MP-Tela-de-6-67-Tropical-Green-Vers-o-Global_1620410946_gg.jpg'
        ],

        // TVS 
        [
            'name'=>'Smart TV LG 43',
            'price'=>'540',
            'category'=>'TV',
            'description'=>'Smart TV LG 43´ 4K UHD, Conexão WiFi e Bluetooth, HDR, Inteligência Artificial, ThinQAI, Google Assistente e Alexa - 43UN7300PSC',
            'gallery'=>'http://127.0.0.1/img/smart-tv-lg-43-4k-uhd-wifi-bluetooth-hdr-inteligencia-artificial-thinqai-google-assistente-alexa-43un7300psc_1608661640_gg.jpg'
        ],
        
        [
            'name'=>'Smart TV LED AOC 43´',
            'price'=>'340',
            'category'=>'TV',
            'description'=>'Smart TV LED AOC 43´ Full HD, 3 HDMI, 1 USB, Wi-Fi - 43S5195/78G',
            'gallery'=>'http://127.0.0.1/img/smart-tv-led-aoc-43-full-hd-3-hdmi-1-usb-wi-fi-43s5195-78g_1594407048_gg.jpg'
        ],
        [
            'name'=>'TV LED Multilaser 32´',
            'price'=>'129',
            'category'=>'TV',
            'description'=>'TV LED Multilaser 32´, 2 HDMI, 1 USB - TL022',
            'gallery'=>'http://127.0.0.1/img/tv-led-multilaser-32-2-hdmi-1-usb-tl022-_1595881300_gg.jpg'
        ]
        ]
    
    );

    }
}
