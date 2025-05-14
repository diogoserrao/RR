<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    public function run()
    {
        // Marcas
        $brands = [
            ['name' => 'LG', 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/LG_logo_%282015%29.svg/320px-LG_logo_%282015%29.svg.png'],
            ['name' => 'Samsung', 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/320px-Samsung_Logo.svg.png'],
            ['name' => 'Whirlpool', 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Whirlpool_Corporation_logo_2017.svg/320px-Whirlpool_Corporation_logo_2017.svg.png'],
            ['name' => 'Bosch', 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Bosch-logotype.svg/320px-Bosch-logotype.svg.png'],
            ['name' => 'Electrolux', 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Electrolux_Logo.svg/320px-Electrolux_Logo.svg.png'],
            ['name' => 'Consul', 'logo_url' => null],
        ];
        DB::table('brands')->insert($brands);

        // Categorias
        $categories = [
            ['name' => 'Geladeiras', 'slug' => 'refrigerators'],
            ['name' => 'Lavadoras', 'slug' => 'washing-machines'],
            ['name' => 'Fornos', 'slug' => 'ovens'],
            ['name' => 'Ar Condicionado', 'slug' => 'air-conditioners'],
            ['name' => 'Pequenos Eletrodomésticos', 'slug' => 'small-appliances'],
        ];
        DB::table('categories')->insert($categories);

        // Produtos
        $products = [
            [
                'name' => 'Geladeira Frost Free LG',
                'brand_id' => 1,
                'category_id' => 1,
                'short_description' => 'Geladeira moderna e econômica.',
                'description' => 'Geladeira Frost Free LG com tecnologia inverter.',
                'price' => 3500.00,
                'discounted_price' => 3150.00,
                'discount' => 10,
                'image_url' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80',
                'reviews_count' => 12,
            ],
            [
                'name' => 'Lavadora Samsung 12kg',
                'brand_id' => 2,
                'category_id' => 2,
                'short_description' => 'Lavadora eficiente e silenciosa.',
                'description' => 'Lavadora Samsung com EcoBubble.',
                'price' => 2200.00,
                'discounted_price' => 1870.00,
                'discount' => 15,
                'image_url' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80',
                'reviews_count' => 8,
            ],
            [
                'name' => 'Forno Elétrico Consul',
                'brand_id' => 6,
                'category_id' => 3,
                'short_description' => 'Forno elétrico prático.',
                'description' => 'Forno Consul com grill.',
                'price' => 900.00,
                'discounted_price' => 855.00,
                'discount' => 5,
                'image_url' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=600&q=80',
                'reviews_count' => 5,
            ],
        ];
        DB::table('products')->insert($products);

        // Equipa
        $team = [
            ['name' => 'Carlos Silva', 'role' => 'Diretor Comercial', 'photo_url' => 'https://randomuser.me/api/portraits/men/32.jpg'],
            ['name' => 'Ana Oliveira', 'role' => 'Gerente de Vendas', 'photo_url' => 'https://randomuser.me/api/portraits/women/44.jpg'],
            ['name' => 'Marcos Santos', 'role' => 'Gerente de Marketing', 'photo_url' => 'https://randomuser.me/api/portraits/men/65.jpg'],
            ['name' => 'Juliana Costa', 'role' => 'Gerente de Atendimento', 'photo_url' => 'https://randomuser.me/api/portraits/women/68.jpg'],
        ];
        DB::table('team_members')->insert($team);

        // Depoimentos
        $testimonials = [
            [
                'client_name' => 'Roberto Almeida',
                'city' => 'São Paulo - SP',
                'photo_url' => 'https://randomuser.me/api/portraits/men/12.jpg',
                'text' => 'Comprei uma geladeira na ElectroHome e o atendimento foi excelente. O produto chegou antes do prazo e em perfeito estado.',
                'rating' => 5,
            ],
            [
                'client_name' => 'Fernanda Lima',
                'city' => 'Rio de Janeiro - RJ',
                'photo_url' => 'https://randomuser.me/api/portraits/women/22.jpg',
                'text' => 'Ótima experiência de compra. A lavadora que comprei tem ótimo desempenho e a equipe me ajudou a escolher o melhor modelo para minhas necessidades.',
                'rating' => 5,
            ],
            [
                'client_name' => 'Pedro Henrique',
                'city' => 'Belo Horizonte - MG',
                'photo_url' => 'https://randomuser.me/api/portraits/men/34.jpg',
                'text' => 'Sempre compro meus eletrodomésticos na ElectroHome. Preços competitivos e ótimo atendimento pós-venda.',
                'rating' => 4,
            ],
        ];
        DB::table('testimonials')->insert($testimonials);
    }
}