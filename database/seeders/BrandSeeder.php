<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->delete();
        // Marcas **********************************************MUDAR LOGO TIPOS ****************************************************
        $brands = [
            ['name' => 'LG', 'logo_url' => 'https://th.bing.com/th/id/R.c670a6788b9b3a6982c7d8f98dc01de1?rik=s4rE0%2bwrjIXADw&pid=ImgRaw&r=0'],
            ['name' => 'Samsung', 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/320px-Samsung_Logo.svg.png'],
            ['name' => 'Whirlpool', 'logo_url' => 'https://www.whirlpool.com/content/dam/global/logos/whirlpool/whirlpool-full-color.svg'],
            ['name' => 'Bosch', 'logo_url' => 'https://cdn.freebiesupply.com/logos/large/2x/bosch-logo-png-transparent.png'],
            // Focar mais na Bosh //
            ['name' => 'Electrolux', 'logo_url' => 'https://bc-storage.sfo2.digitaloceanspaces.com/girias/brands/electrolux/Electrolux_2015.svg.jpg'],
            ['name' => 'Siemens', 'logo_url' => 'https://www.andlil.com/wp-content/uploads/2013/06/logo-siemens1.jpg'],
            ['name' => 'Balay', 'logo_url' => 'https://media3.bsh-group.com/Images/17718901_logo-horizontal-azul-balay.png'],
            ['name' => 'Teka', 'logo_url' => 'https://th.bing.com/th/id/R.df69acc7c9e4f714eea3d729024ad45d?rik=OnTrM98CotJX%2fg&riu=http%3a%2f%2flogonoid.com%2fimages%2fteka-logo.png&ehk=Pnmd%2bajfFAo99DR8pg1PSDnJiqq8VPcw0OzCwVI6W44%3d&risl=&pid=ImgRaw&r=0'],
            ['name' => 'Hisense', 'logo_url' => 'https://logodix.com/logo/871049.png'],
            ['name' => 'Smeg', 'logo_url' => 'https://res.cloudinary.com/yuppiechef/image/upload/f_auto/v1/pagebuilder/353/YC--Brand-Page-Banners---Smeg---Logo-1467363206'],
            ['name' => 'Indesit', 'logo_url' => 'https://wallpapers.com/images/hd/indesit-company-logo-y03nf0uwbia3j3ui.jpg'],
            ['name' => 'Hotpoint', 'logo_url' => 'https://pluspng.com/img-png/hotpoint-logo-png-hotpoint-logo-png-600.png'],
            ['name' => 'Haier', 'logo_url' => 'https://th.bing.com/th/id/OIP.tElHpVnz5qK11jS3GVNzSQAAAA?rs=1&pid=ImgDetMain'],
            ['name' => 'Tefal', 'logo_url' => 'https://opcconnect.opcfoundation.org/wp-content/uploads/2019/06/Tefal_logo_logotype.png'],
            ['name' => 'Candy', 'logo_url' => 'https://www.pngitem.com/pimgs/m/109-1096178_candy-home-appliances-logo-hd-png-download.png'],
            ['name' => 'Starlux', 'logo_url' => 'https://th.bing.com/th/id/OIP.zTgzfdvZA9mebxGtiYbfrgAAAA?w=458&h=231&rs=1&pid=ImgDetMain'],
            ['name' => 'Haeger', 'logo_url' => 'https://www.sp-tech.cz/wp-content/uploads/2021/02/logo_haeger.png'],
            ['name' => 'Flama', 'logo_url' => 'https://www.kontrolsat.com/img/m/266.jpg'],
            ['name' => 'Taurus', 'logo_url' => 'https://taurus-home.com/cdn/shop/files/logo-taurus-black_5f65cb49-4b35-4100-95fc-8aaa3cadc6c7.png?v=1700837751&width=600'],
            ['name' => 'Orbegozo', 'logo_url' => 'https://th.bing.com/th/id/R.2360e8bcfa5bee5c36b77e37148ac892?rik=mBb46r0MKEQo%2bg&riu=http%3a%2f%2forbegozo.servicio-oficial-madrid.es%2fimages%2flogos%2forbegozo.jpg&ehk=YyHEcoBy7qao80DhrFlZMNywxL3WZXom7Wjr%2bNXLKBc%3d&risl=&pid=ImgRaw&r=0'],
            ['name' => 'Philips', 'logo_url' => 'https://th.bing.com/th/id/R.d5cd242b49fd24348a416c5dbf0ca337?rik=GHJAMRGHYcHibQ&riu=http%3a%2f%2flofrev.net%2fwp-content%2fphotos%2f2014%2f10%2fPhilips-logo-1024x309.png&ehk=lSg8Q%2f1GtFYFp%2bJEIAdaGEG%2bG41H5mcVIcJUVuNUH6w%3d&risl=&pid=ImgRaw&r=0'],
            ['name' => 'Ariston', 'logo_url' => 'https://th.bing.com/th/id/OIP.eXqXW0gPTMPcYPb-CD_ZewAAAA?rs=1&pid=ImgDetMain'],
            ['name' => 'Ufesa', 'logo_url' => 'https://logo-all.ru/uploads/posts/2018-09/0_ufesa_logo.jpg'],
            ['name' => 'Meireles', 'logo_url' => 'https://www.meireles.pt/wp-content/uploads/2020/04/logo.png'],
            ['name' => 'Rowenta', 'logo_url' => 'https://th.bing.com/th/id/R.0cf6fe93b730c6b62b96005ab5aadc7d?rik=rO9SazIbnznH6g&pid=ImgRaw&r=0'],
            ['name' => 'AEG', 'logo_url' => 'https://1000logos.net/wp-content/uploads/2021/05/AEG-logo.png'],

            // Marcas para Carpintaria **************************************************
            //['name' => 'Miele', 'logo_url' => ''],
            //['name' => 'Bora', 'logo_url' => ''],
            //['name' => 'Quooker', 'logo_url' => ''],
            //['name' => 'Siemens StudioLine', 'logo_url' => ''],


        ];
        DB::table('brands')->insert($brands);
    }
}
