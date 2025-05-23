<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Categorias
        $categories = [
            // Grandes Eletrodomésticos

            // Frigoríficos
            [
                'name' => 'Frigoríficos',
                'slug' => 'refrigerators',
                'image_url' => 'https://media3.bosch-home.com/Product_Shots/435x515/MCSA00762595_E6357_KAD90VI20G_407510_def.png',
                'parent_id' => null
            ],

            // Máquinas de Roupa
            [
                'name' => 'Máquinas de Roupa',
                'slug' => 'clothes-machines',
                'image_url' => 'https://media3.bosch-home.com/Product_Shots/1200x675/16704603_WNA13400ES_STP_def.jpg',
                'parent_id' => null
            ],

            // Placas
            [
                'name' => 'Placas',
                'slug' => 'plates',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA01672687_PCR9A5B90_def.webp',
                'parent_id' => null
            ],

            //Maquinas de lavar loiça
            [
                'name' => 'Maquina de Lavar Loiça',
                'slug' => 'dishwashers',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/24775636_SMS8TCI04E_STP_def.webp',
                'parent_id' => null
            ],

            // Exaustores
            [
                'name' => 'Exaustores',
                'slug' => 'exhaust-fans',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/15433310_DFS097K51_STP_def.webp',
                'parent_id' => null
            ],

            // Forno
            [
                'name' => 'Forno',
                'slug' => 'oven',
                'image_url' => 'https://media3.bosch-home.com/Product_Shots/1600x900/MCSA040149_HBA43S460E_def.png',
                'parent_id' => null
            ],

            // Pequenos Eletrodomésticos
            [
                'name' => 'Pequenos Eletrodomésticos',
                'slug' => 'small-appliances',
                'image_url' => 'https://www.worten.pt/i/ad2a3c740d9ce23fae9bf4acf11e7699b326637e',
                'parent_id' => null
            ],

            // Televisões
            [
                'name' => 'Televisões',
                'slug' => 'televisions',
                'image_url' => 'https://mb.web.sapo.io/735e212980dabcdbf5033ab67680e50541d9d278.jpg',
                'parent_id' => null
            ],

            //Microondas
            [
                'name' => 'Microondas',
                'slug' => 'microwave',
                'image_url' => 'https://media3.bosch-home.com/Product_Shots/1600x900/MCSA02032233_BEL554MS0_CompactOven_Bosch_STP_def.png',
                'parent_id' => null
            ],


            // ************************************************Sub-Categorias*************************************************

            //Sub-Categorias- Maquinas de Roupa
            [
                'name' => 'Maquina de Lavar Roupa',
                'slug' => 'washing-machines',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/25248815_WGB244A0ES_STP_def.webp',
                'parent_id' => 2
            ],
            [
                'name' => 'Maquina de Secar Roupa',
                'slug' => 'dryer-machines',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/25796902_WQG245D1ES_STP_def.webp',
                'parent_id' => 2
            ],
            [
                'name' => 'Maquina de Lavar e Secar Roupa',
                'slug' => 'washing-drying-machine',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/22675446_WNC254A0ES_STP_def.webp',
                'parent_id' => 2
            ],


            //Sub-Categorias - Placas
            [
                'name' => 'Placas a Gás',
                'slug' => 'gas-plates',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA01672687_PCR9A5B90_def.webp',
                'parent_id' => 3
            ],
            [
                'name' => 'Placas de Indução',
                'slug' => 'induction-plates',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/22213724_PVS611B16E_STP_def.webp',
                'parent_id' => 3
            ],
            [
                'name' => 'Placas Elétricas',
                'slug' => 'electrical-plates',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA01030233_652027_PKM875DP1D_def.webp',
                'parent_id' => 3
            ],


            //Sub Categorias- Maquinas de Lavar Loiça
            [
                'name' => 'Maquina de Lavar Loiça Integrada',
                'slug' => 'dishwashers-integrated',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/25112072_SMT6ECX12E_STP_def.webp',
                'parent_id' => 4
            ],
            [
                'name' => 'Maquima de Lavar Loiça Independente',
                'slug' => 'dishwashers-independent',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/22519889_SMS4EMC06E_STP_def.webp',
                'parent_id' => 4
            ],
            [
                'name' => 'Maquina de Lavar Loiça Compacta',
                'slug' => 'dishwashers-compact',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/25074143_SKS6ITB00E_STP_def.webp',
                'parent_id' => 4
            ],




            // Sub-Categorias - Pequenos Eletrodomésticos
            [
                'name' => 'Cafeteiras',
                'slug' => 'coffee-makers',
                'image_url' => 'https://www.feijoo.es/wp-content/uploads/CAFETERA-BOSCH-TAS1002V-PACK.jpg',
                'parent_id' => 7
            ],
            [
                'name' => 'Torradeiras',
                'slug' => 'toasters',
                'image_url' => '',
                'parent_id' => 7
            ],
            [
                'name' => 'Chaleiras Elétricas',
                'slug' => 'electric-kettles',
                'image_url' => '',
                'parent_id' => 7
            ],
            [
                'name' => 'Fritadeiras',
                'slug' => 'deep-fryers',
                'image_url' => '',
                'parent_id' => 7
            ],
            [
                'name' => 'Batedeiras',
                'slug' => 'mixers',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/17572582_MFQ49300_STP_def.webp',
                'parent_id' => 7
            ],
            [
                'name' => 'Liquidificadores',
                'slug' => 'blenders',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/22487470_MMB6762M_STP_def.webp',
                'parent_id' => 7
            ],
            [
                'name' => 'Varinhas Mágicas',
                'slug' => 'hand-blenders',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/19850963_MSM4B620_STP_def.webp',
                'parent_id' => 7
            ],
            [
                'name' => 'Espremedores de Citrinos',
                'slug' => 'juicers',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA01872531_G9365_MCP72GPB_1292462_def.webp',
                'parent_id' => 7
            ],
            [
                'name' => 'Centrífugas',
                'slug' => 'centrifuges',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA00763480_E6380_MES25A0_408151_def.webp',
                'parent_id' => 7
            ],
            [
                'name' => 'Picadoras',
                'slug' => 'choppers',
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA00496021_D5075_MMR08A1_106840_def.webp',
                'parent_id' => 7
            ],
            [
                'name' => 'Grelhadores Elétricos',
                'slug' => 'grills',
                'image_url' => '',
                'parent_id' => 7
            ],

            // Categorias Adiciondas Depois

            [
                'name' => 'Ar Condicionado',
                'slug' => 'air-conditioners',
                'image_url' => 'https://www.techinn.com/f/13770/137708787/bosch-ar-condicionado-split-mural-1x1-climate-5000-3.5-kw-r-32.jpg',
                'parent_id' => null
            ],
            [
                'name' => 'Aspiradores',
                'slug' => 'vacuum-cleaners',
                'image_url' => 'https://static-data2.manualslib.com/product-images/b0f/2743821/bosch-runn-n-bgc4u2230-vacuum-cleaner.jpg',
                'parent_id' => null
            ],

        ];
        DB::table('categories')->insert($categories);
    }
}
