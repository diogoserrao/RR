<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public function run()
    {
       // Marcas **********************************************MUDAR LOGO TIPOS ****************************************************
        $brands = [
            ['name' => 'LG', 'logo_url' => 'https://th.bing.com/th/id/R.c670a6788b9b3a6982c7d8f98dc01de1?rik=s4rE0%2bwrjIXADw&pid=ImgRaw&r=0'],
            ['name' => 'Samsung', 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/320px-Samsung_Logo.svg.png'],
            ['name' => 'Whirlpool', 'logo_url' => 'https://th.bing.com/th/id/R.0fbbdf9e69f6c06cdecd0963a01ec4ca?rik=wDATNAf8y1Xglw&pid=ImgRaw&r=0'],
            ['name' => 'Bosch', 'logo_url' => 'https://logohistory.net/wp-content/uploads/2022/09/Bosch-Logo-2002-2048x1152.png'],
            // Focar mais na Bosh //
            ['name' => 'Electrolux', 'logo_url' => 'https://logos-world.net/wp-content/uploads/2020/12/Electrolux-Logo-1990-2015.png'],
            ['name' => 'Siemens', 'logo_url' => 'https://permutable.ai/wp-content/uploads/2023/12/Siemens-logo.png'],
            ['name' => 'Balay', 'logo_url' => 'https://media3.bsh-group.com/Images/17718901_logo-horizontal-azul-balay.png'],
            ['name' => 'Teka', 'logo_url' => 'https://th.bing.com/th/id/R.df69acc7c9e4f714eea3d729024ad45d?rik=OnTrM98CotJX%2fg&riu=http%3a%2f%2flogonoid.com%2fimages%2fteka-logo.png&ehk=Pnmd%2bajfFAo99DR8pg1PSDnJiqq8VPcw0OzCwVI6W44%3d&risl=&pid=ImgRaw&r=0'],
            ['name' => 'Hisense', 'logo_url' => 'https://www.liblogo.com/img-logo/hi1220h4ea-hisense-logo-hisense-logo-transparent-png-stickpng.png'],
            ['name' => 'Smeg', 'logo_url' => 'https://th.bing.com/th/id/OIP.JwiOT2Rr0AH8r4NpcMarpwHaBe?rs=1&pid=ImgDetMain'],
            ['name' => 'Indesit', 'logo_url' => 'https://vectorseek.com/wp-content/uploads/2021/01/Indesit-Logo-Vector-scaled.jpg'],
            ['name' => 'Hotpoint', 'logo_url' => 'https://pluspng.com/img-png/hotpoint-logo-png-hotpoint-logo-png-600.png'],
            ['name' => 'Haier', 'logo_url' => 'https://1000logos.net/wp-content/uploads/2018/02/Haier-logo.jpg'],
            ['name' => 'Tefal', 'logo_url' => 'https://1000logos.net/wp-content/uploads/2018/08/Tefal-Logo.png'],
            ['name' => 'Candy', 'logo_url' => 'https://www.pngkit.com/png/detail/23-239844_candy-logo-png-transparent-candy-electronics-logo.png'],
            ['name' => 'Starlux', 'logo_url' => 'https://images.squarespace-cdn.com/content/v1/65b28d88038daf2895a9688f/da892d11-3c2d-452c-9172-e19706112c98/Starlux+Logo+-+PINK-+Thickened.jpg?format=1500w'],
            ['name' => 'Haeger', 'logo_url' => 'https://www.sp-tech.cz/wp-content/uploads/2021/02/logo_haeger.png'],
            ['name' => 'Flama', 'logo_url' => 'https://th.bing.com/th/id/R.d3313b45bdae49c7c039bf22cc52c32e?rik=3P%2fEHhM%2b1%2bmoMg&pid=ImgRaw&r=0'],
            ['name' => 'Taurus', 'logo_url' => 'https://th.bing.com/th/id/R.ebd49fae36eb6bdc57c16d250e6d19fc?rik=YbqEU7pYPC%2br%2fQ&pid=ImgRaw&r=0'],
            ['name' => 'Orbegozo', 'logo_url' => 'https://orbegozo.com/wp-content/uploads/2022/06/miniatura-opengraph.png'],
            ['name' => 'Philips', 'logo_url' => 'https://logos-world.net/wp-content/uploads/2020/09/Philips-Emblem.png'],
            ['name' => 'Ariston', 'logo_url' => 'https://th.bing.com/th/id/OIP.eXqXW0gPTMPcYPb-CD_ZewAAAA?rs=1&pid=ImgDetMain'],
            ['name' => 'Ufesa', 'logo_url' => 'https://logo-all.ru/uploads/posts/2018-09/0_ufesa_logo.jpg'],
            ['name' => 'Meireles', 'logo_url' => 'https://www.meireles.pt/wp-content/uploads/2020/04/logo.png'],
            ['name' => 'Rowenta', 'logo_url' => 'https://logos-world.net/wp-content/uploads/2023/01/Rowenta-Logo.png'],
            ['name' => 'AEG', 'logo_url' => 'https://th.bing.com/th/id/OIP.QOngF21eXyXXpa4sbAIFQAHaFj?rs=1&pid=ImgDetMain'],

            // Marcas para Carpintaria **************************************************
            //['name' => 'Miele', 'logo_url' => ''],
            //['name' => 'Bora', 'logo_url' => ''],
            //['name' => 'Quooker', 'logo_url' => ''],
            //['name' => 'Siemens StudioLine', 'logo_url' => ''],


        ];
        DB::table('brands')->insert($brands);
    }
}