<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Frigoríficos
            [
                'name' => 'Frigorífico Bosch Série 6',
                'brand_id' => 4,
                'category_id' => 1,
                'short_description' => 'Frigorífico espaçoso e silencioso.',
                'description' => 'Frigorífico Bosch Série 6 com 400L, tecnologia VitaFresh, A+++, ideal para famílias.',
                'price' => 899.99,
                'discounted_price' => 0,
                'discount' => 15,
                'image_url' => 'https://media3.bosch-home.com/Product_Shots/435x515/MCSA00762595_E6357_KAD90VI20G_407510_def.png',
                'reviews_count' => 22,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],

            // Máquina de Lavar Roupa
            [
                'name' => 'Máquina de Lavar Roupa Bosch',
                'brand_id' => 4,
                'category_id' => 10,
                'short_description' => 'Alta performance e eficiência energética.',
                'description' => 'Máquina de Lavar Roupa 9kg Bosch com motor EcoSilence Drive e programas inteligentes.',
                'price' => 599.99,
                'discounted_price' => 0,
                'discount' => 10,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/25248815_WGB244A0ES_STP_def.webp',
                'reviews_count' => 15,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],

            // Máquina de Secar Roupa
            [
                'name' => 'Máquina de Secar Roupa Bosch 8kg',
                'brand_id' => 4,
                'category_id' => 11,
                'short_description' => 'Secagem eficiente com sensor de humidade.',
                'description' => 'Secadora com bomba de calor, 8kg de capacidade, classe energética A++.',
                'price' => 520.00,
                'discounted_price' => 0,
                'discount' => 5,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/25796902_WQG245D1ES_STP_def.webp',
                'reviews_count' => 9,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],

            // Máquina de Lavar e Secar
            [
                'name' => 'Máquina de Lavar e Secar Bosch',
                'brand_id' => 4,
                'category_id' => 12,
                'short_description' => '2 em 1: Lava e seca com máxima eficiência.',
                'description' => 'Capacidade de 10kg para lavagem e 6kg para secagem. Tecnologia AutoDry.',
                'price' => 720.00,
                'discounted_price' => 0,
                'discount' => 12,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/22675446_WNC254A0ES_STP_def.webp',
                'reviews_count' => 6,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],

            // Placa de Indução
            [
                'name' => 'Placa de Indução Bosch Série 4',
                'brand_id' => 4,
                'category_id' => 14,
                'short_description' => 'Cozinhe com rapidez e precisão.',
                'description' => 'Placa de Indução com 4 zonas, função PowerBoost, touch control.',
                'price' => 370.00,
                'discounted_price' => 0,
                'discount' => 7,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/22213724_PVS611B16E_STP_def.webp',
                'reviews_count' => 11,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],

            // Máquina de Lavar Loiça
            [
                'name' => 'Máquina de Lavar Loiça Bosch Independente',
                'brand_id' => 4,
                'category_id' => 17,
                'short_description' => 'Grande capacidade e silêncio absoluto.',
                'description' => 'Máquina de lavar loiça com 14 talheres, motor EcoSilence, programas automáticos.',
                'price' => 480.00,
                'discounted_price' => 0,
                'discount' => 10,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/22519889_SMS4EMC06E_STP_def.webp',
                'reviews_count' => 14,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],

            // Exaustor
            [
                'name' => 'Exaustor Telescópico Bosch',
                'brand_id' => 4,
                'category_id' => 5,
                'short_description' => 'Design moderno e potente.',
                'description' => 'Exaustor com 3 níveis de potência, LED, motor de alta eficiência.',
                'price' => 199.90,
                'discounted_price' => 0,
                'discount' => 8,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/15433310_DFS097K51_STP_def.webp',
                'reviews_count' => 8,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],

            // Forno
            [
                'name' => 'Forno Elétrico Bosch Multifuncional',
                'brand_id' => 4,
                'category_id' => 6,
                'short_description' => 'Forno com múltiplas funções de cozedura.',
                'description' => 'Forno elétrico embutido com função grill, convecção e display digital.',
                'price' => 449.90,
                'discounted_price' => 0,
                'discount' => 10,
                'image_url' => 'https://media3.bosch-home.com/Product_Shots/1600x900/MCSA040149_HBA43S460E_def.png',
                'reviews_count' => 18,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],

            // Cafeteira
            [
                'name' => 'Cafeteira Bosch Tassimo',
                'brand_id' => 4,
                'category_id' => 19,
                'short_description' => 'Café com um toque!',
                'description' => 'Máquina de café Tassimo TAS1002V com sistema de cápsulas e design compacto.',
                'price' => 59.99,
                'discounted_price' => 0,
                'discount' => 5,
                'image_url' => 'https://www.feijoo.es/wp-content/uploads/CAFETERA-BOSCH-TAS1002V-PACK.jpg',
                'reviews_count' => 25,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],

            // Televisão
            [
                'name' => 'Televisão LED Samsung 50"',
                'brand_id' => 2,
                'category_id' => 8,
                'short_description' => 'Imagem Ultra HD com HDR.',
                'description' => 'TV 4K Smart LED 50", conectividade Wi-Fi, apps integradas, som Dolby Digital.',
                'price' => 549.00,
                'discounted_price' => 0,
                'discount' => 10,
                'image_url' => 'https://mb.web.sapo.io/735e212980dabcdbf5033ab67680e50541d9d278.jpg',
                'reviews_count' => 20,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],

            // Microondas
            [
                'name' => 'Microondas Bosch Inox 25L',
                'brand_id' => 4,
                'category_id' => 9,
                'short_description' => 'Aquecimento rápido e eficiente.',
                'description' => 'Microondas 25L com grill, painel digital e design em inox escovado.',
                'price' => 169.00,
                'discounted_price' => 0,
                'discount' => 10,
                'image_url' => 'https://media3.bosch-home.com/Product_Shots/1600x900/MCSA02032233_BEL554MS0_CompactOven_Bosch_STP_def.png',
                'reviews_count' => 13,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
            // Varinha Mágica
            [
                'name' => 'Varinha Mágica Bosch',
                'brand_id' => 4,
                'category_id' => 25,
                'short_description' => 'Mistura e tritura com facilidade.',
                'description' => 'Varinha mágica com potência de 600W, lâmina de aço inox, fácil de limpar.',
                'price' => 39.99,
                'discounted_price' => 0,
                'discount' => 5,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/19850963_MSM4B620_STP_def.webp',
                'reviews_count' => 30,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],


            // Frigorífico (LG)
            [
                'name' => 'Frigorífico Frost Free LG',
                'brand_id' => 1,
                'category_id' => 1,
                'short_description' => 'Frigorífico moderno e económico.',
                'description' => 'Frigorífico Frost Free LG 375L, prata, tecnologia Inverter, eficiência energética A++',
                'price' => 3500.00,
                'discounted_price' => 0,
                'discount' => 10,
                'image_url' => 'https://images.trustinnews.pt/uploads/sites/4/2019/09/605341frigorifico',
                'reviews_count' => 12,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
            // Máquina de Lavar Roupa (Samsung)
            [
                'name' => 'Máquina de Lavar Roupa Samsung 12kg',
                'brand_id' => 2,
                'category_id' => 10,
                'short_description' => 'Máquina eficiente e silenciosa.',
                'description' => 'Máquina de Lavar Roupa Samsung 12kg, EcoBubble, 15 programas, branca, classe A+++',
                'price' => 2200.00,
                'discounted_price' => 1870.00,
                'discount' => 15,
                'image_url' => 'https://th.bing.com/th/id/R.fd843eb4560404f3ed1fa5295568921e?rik=WE9aO%2f%2fmaOJYtQ&riu=http%3a%2f%2fimages.samsung.com%2fis%2fimage%2fsamsung%2fpt_WF80F5E2W2X-EP_504_Front_gray%3f%24TM-Gallery%24&ehk=pvH7NhEqGr%2fMYAPh43ak027A5Nc5ie%2fuVQumjy5TmoE%3d&risl=&pid=ImgRaw&r=0',
                'reviews_count' => 8,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],
            // Forno Elétrico (Consul)
            [
                'name' => 'Forno Elétrico Consul',
                'brand_id' => 6,
                'category_id' => 6,
                'short_description' => 'Forno elétrico prático.',
                'description' => 'Forno Consul 56L, grill, temporizador, luz interior, tabuleiro antiaderente',
                'price' => 900.00,
                'discounted_price' => 855.00,
                'discount' => 5,
                'image_url' => 'https://th.bing.com/th/id/OIP.lODyKGCigUdK83WTGzxc3AHaFj?w=252&h=189&c=7&r=0&o=5&pid=1.7',
                'reviews_count' => 5,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],
            // Ar Condicionado (LG)
            [
                'name' => 'Ar Condicionado Split LG',
                'brand_id' => 1,
                'category_id' => 30,
                'short_description' => 'Ar condicionado silencioso.',
                'description' => 'Ar condicionado LG 9000 BTUs, frio, classe A, branco, tecnologia Inverter',
                'price' => 1800.00,
                'discounted_price' => 1620.00,
                'discount' => 10,
                'image_url' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAC0AQMDASIAAhEBAxEB/8QAGwABAAIDAQEAAAAAAAAAAAAAAAECAwQFBgf/xABEEAABBAECAgYGBQsDAwUAAAABAAIDEQQSIQVRBjFBYXGhE0KBkaKxFCIycpIHIyQ0UlNigpOywTNDY4Oj4RZkc8LR/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//EABwRAQEBAQEAAwEAAAAAAAAAAAABEhECAxMxUf/aAAwDAQACEQMRAD8AqSbO6b80PWUQN+ab80RA35pvzREDfmm/NEQN+ab80RA35pvzREDfmm/NEQN+ab80RA35pvzREDfmm/NEQN+ab80RA35pvzREDfmm/NEQN+ab80RA35pvzREDfmm/NEQN+aIiCT1lFYjcqKQQimkpBCKaSkEIppKQQimkpBCKaSkEIppKQQimkpBCKaSkFVKtSmOOSVwZCySV59WJrnn2hoKCiLrY/R/jE9F0ceO3nkPGr8Edn3kLq4/RfDbRycmaYg/ZhHome8W74gg8mS0VZAvqs1a28fhvFMrSYMOdzT1Pe30Uf4pKXucbhvDsQg4+JCx37ZAdJ+J1u81u6T2k+zb/AMoPHw9FswgOysmKIGvzeO0yyE8tT6b5FdKLo7wnHFzMfO/Y/nnktH8rKHkvRRtbd17+taUrrkd3GkHGy+BcNnaTAwY0oGxiH5sn+OO691LzeZgZeC8NnZ9VxpkjLMb+4HsPcV7nrvuVJWRzMfHKxr43ghzHgOa4d4KD5/SLt5/A3xapcPVJGLJhJuRv3CesefiuLXzIPcRtSCEU0lIIRWpEF63O3aoruVz1lKQVruUV3K6IKV3Ka7lZEFa7lFdyuiCldyV3K6IKV3Ka7lZEFK7kruWRrXPdoY1z3n1Y2lzvc3db8PB+KTUfQiJh9adwZ8It3kg5lIaG5oDvNL0kHR2HY5GRJIe1sAEbfxGz5hdTH4bg49GHFha4eu8a5PxOs+aDx8GDn5NegxpnNPrluhn4n0F04ejmU6jk5EUQ/ZiBkf73U3yK9SGcyT5fJXDQOoBByIOAcKiouhfO7rvJdbb+4Kb5LqxwsjaGRtZGwdTY2gDy28lkUhBGgdtnxN+XUrgUilBKkKFKC7fW8FzXG3O8SujdMk+6uZfWgnsHfuqnZS75AKpQVK5PFcHGkgyMoN0zxNDy5tASbhtPH+V1itPiO+DnD/i/+zUHkqUV3K6IK13Ir0iC5abPio0lZy3cppQYNJTSVn0qNKDDpTSs2lSGFx0tBcT2NBJ9wQYNJTSV0Y+GZ8u/ogxvOZwb5Cz5Lfh4JHsZp3v5thbpH4jaDz5Fde3is0OJmT16GCV4/aDaZ+J1DzXq4eHYMFGPHjDv2nj0j/e6/mtvSOZPkPJB5mHgGY+jPNFCO1rbkf8A4HmV0oeBcOjovbLOeczqZ+FlLqih1KUGOOCKEaImRxt/ZiYGhX0jlfjurKUAKQEAUhBACsikIAUhFKCQpUBSgKVCIL+pL9w/JcpdQfZk+4fkuUgs47lVUnrKqUEHtWpnb4eaOcJ+YW0Vq5v6rlDnER5hB5fSU0rPpUaUGHSiz6UQZy3r8SmlZyzcpoQYNKywYkuQaaKYDTnuGw8B2lWEZJAA3JAHiV3Io2xsYxvU1oHj3oNOLhmM2tTHSHtMjiGnwa1b0cDIxTGsYOUbQ3zWRoWUBBVsbRvV953+avQU9iIIREQSiKQglWAUBWQKRFIQFKhEEpahRaC6bKtpaC1qbCqA93UCfAE/JRYst1N1DrAIJHiBugzNIpw8P/xcp+znDkT810Wmj47LnTipX95tBBP+PkoUX1eHyUWgFa2Xvj5A/gPzWwVr5G8Mo5tQcXSo0rY0Jo7kGDSi2NCIM5ZRKaVsFm5UaEFcePVMzk23H2LqALVxmU57u4BbQ60FwsgVGhZAgdihWKpaCUVVZBKkKqlBZWBUAOJoAk9wtVlkx8casmeGBvXeRLHHt/OQgyIubJx3gcV6cp05GwGLDLLfg+gz4lpydJW2RjcOldydlzxxAn7sQefNXlS+pHfQAnYAk9wteVk43xuX7L8THbygg9I8fz5DnD4FpSyZuRf0nOzpgetrsh7Gfgh0t8lrFYvySPYT5OJii8rJx4B/zzRxn3ON+S0X8e4OP9KTIyT/AO0xpXt/qSBrPiXmo4MaI2yGJru1wY3UfF1X5rYa8nmT71rDH2us7jmU8kY/DQ0djs7Ka3/t47Xn4lhdncbl+1mY+OOWHitLh4SZLn/2rQfMyFpdNJHE0bl08jI2+95AWkeO8F1aI81mRJ1ejwI5sx98qxmuHmmZE16rrvibN+tZWdldtT5UoZ/TiLWfCtzh/wBDxXhkEMMLZCGu9ExrbJ2GojrXAbmcWnv6J0f4zKOx2W3H4fGe+8qQPr+RZW4nTWetMXA8AEdc+Rl5srXdm0LGM+JS8a8669nqWplfaa7mFEMpliikcNLnsaXtu9L+pzb7jYSb68Z5hc3ZgvZLWMO61OpBa1im3Y8dys5wALjdAEmgSdt9gN1j1NkbY1Cx1OaWuHi126DV0dqaFn0JoQYNHci2NBRBnLdymhZy3cqNKBC2g6uYWUApEK1DnSyHQxrnvexjG7ufI9rGDxc4gIJAOyuFzJeO8Agtrs+GR49TFD8h3h+ZBb5rSl6VYYsY2BmzcnTOix2e63v+FXlTsegKrRNLycvSXjEhPosfBxx2EiTIf7S8tb8K0pOK8amBEnEMij6sLmwN90IatZrO49w/TE3VM+OJvOZ7Yx73kLRl4zwSHZ2bHI4dbcZskx97Bp+JeIcGuOp9ucfWeS53vdZUkBo1O+qwes8hrfedlZ4Z+z+PTy9KMNu2Ng5Mx33nkjgb7m63fJaUnSTjMgPoosLHbzbG+Z4H3pjp+BebfxDhf14RmxOkc1zdGI900wsVbRjBzr5bLbih4pk+j+i8D4vPpBDHz47MSOiKNSZr2Hf7qvJGdeq25uKcTn1CfiWU4aA8sikMbdBNAiPHA29i1444fSSH0ZDmkXI9g+sTv9Vztz3rbh4D0tlDR9H4Rgsqh9JypsqRo6hUeIxrPjXQi6J5rqOXx6UDtZw3Cxsf2CTIMr1dSGfVYhJw70AYzHkdMYgHPrYPrcgklc2XMwcb9YysWE8pZo2u9jSb8l6RnRLo9scludmnnn52TI0n/wCONzY/hXSxeFcGwq+h8OwMcjqdBjQsd+MN1eazuRq+O/rxUWazI/U8biWZyOFgZUkf9V7Wx/EttmH0mnr0XBfQg+vxLOx4R7Y8f0r17YknrJPibVSU3SfHHlGcA6RybzcS4ZiNPq4eHNlPH/UypGt/7azt6LYzv1zivGsoesxuSzDiP8mExhr+ZeiJVXGhy8dlnVrc8yOPD0Z6LY7tbOEYT5Ov0mUw5Ut89eUXldRgZE0Mia2Ng2DYmhjQO5rAAmtpsA2f4bd8lrz5mJjgunmiiAG5nkjiA/quCy02Cfeq2uHkdKujOPevimG4j1YXPnd7oGuHmuVkdPeBR36GLPyD1D0WOyJp/myJB/ag9Wx2iaeK9n/pMfV65qQew7/zLLfXfUetfPJOnfEJ3D6FwPW5urQcjJkkrUKNsxIx1/fXo+EcZmz4m/T+HZeFk2xp/NSPx5NXrsc+nAcwR7Sg6jyA8gEHfsKWshijcd2v8QA3z3VTFILNWEBu59h+SrsS3bt2Uix18iPeKRo+uwd6C2kck0hZtKaUGHSEWfSiDMW7lRpWdzdyo0oMNad+9cPpJh42ViY88sLJHYc7XxlzdRYJfqOoHnsvRFoIIPaCFzpomTRT40zA+ORpjlYbGodosb+CJZ14WbIxMYfnpoIR/wA0scfk8ha7OJ4k7izE+kZjx6vD8XJyTfK42afiXssXgHRrD0uxuE4DXA2JHwNll37fSTan+a6wJADRs0DZo2aPADZb2xh4SPF6R5AHoOBZbQfX4hPi4YHi0ufJ8C3YujfSabebL4Pht5Qx5WbIPa8xM8l7AKbA6zSmq1iPOxdEITRy+McVn5sxjj4UZ7vzDDJX/UW9F0W6KxOD3cLx55B6+e6XMd4/pLnDyXVDtr3IHaAT8gtXI4rwnF/Wc/Dhr97kQsP4S7V5Kdq8jdgigxmhmNDDAwdTceNkTfdGAFlvfvXmZumfRaEkDPExHZjQ5E3mGBvxLnS/lA4buMXA4hOd6sQQA+9z3fCor3FpqrroeO3zXz53SvpXmADB4C5osEOlflybjn6MRNVS78p+abD4MNp/dRYsbhfJzhI/zV4PoQe03pOoj9gF39trWn4jw7FBOTlY0Ffv54Yj7pHA+S8MeinSvO34hx3IeD1tM+TIPY0lrfJbOP8Ak+4Ww3PkSyO2vS2NnnTj5oOzP0x6LQEg8RilI9XGjnnPvjZp+Jcuf8oHC22MfC4hMT9kuZDjtPte5zvhXQh6IdHIavG9IR+8fI7ysDyXSi4VwfH/ANLExmV2iOMH31fmoPHu6ZdIss6cHgrRfUZX5OQfdC1jVjOV+UrN+w1mKD1ejx8eIjwdNqeve/o7aA0Vy/8ACgzQt7QPAUqPAno50zzR+m8YyNJ62uyp3N/BHTVkh/J/ASHZOY57rt2mNoJ9ry4r2pzILrUCeVi78AnpZT9iCV2/Yx9e8gBOjzkPQngEVa2SSV+8kdR9jNK6UHR7gOPXo8LHBHaY2E+9wJ810f08k6ccjvc6No/uvyUiDiDut0DB95zj7g0fNQUbjYcTTUbGsaL2FAAdwWYMjb1NaPYAqjCyD9vJPgyOvNzj8lcYEQ+1JO/aqLw0fAB80E64x1uCqZ8YbukZ7xauMLEH+0D99zn/ANxKythiZ9iNjfutaPkEGr6XEkBADn2CDpa51j2JEzS4BrJSzTWqW7FdVlx1FblJpQYdKaVm0ppQYtKLLpRBmLdyo0rKRuVFIMelauTBJfpYmF59ZrS0ONdo1EDzW9SUg88ciZriwYsoePVeCCL8AuZxPjHGMGN8mPwWbM0AmQR5EMRZXNrmucfYvZvjjkaWSMa9p9VwBHmtGXhcD7MUkkRrqsvZ7nG/NB88b0i/KBm19F4BFjNd1fSfSueL5+kewfCrjG/Kdl/6vEocNrjuIBFHQrquKPV8S90cXKgaDo9LV/Wi3Nd7T9Za4yrLmsike4GtLIpXuHc6m0g8b/6N4pmUeI8eyZ76wXzSA/1JCPJbeP0F4BFRldkynttwYCR3MA+a9WI814tmBIL7Xtii6/vuvyWVuHxF1EiCPq65HOd8Da81RxIOjfRyEAt4fG5w7ZQ55+O10WYmLAGjHx8eIVR0sa3+0Bbw4fOd5Mr2Rxf5e4/JZG8NgH2pMh/cZNLT4iMD5qDUa4NFPc3xaKI9qj6XE0kGRhHYNg72kH/C6IwsNv8AsRnveC8+91rM2ONgpjGMH8DWt+SDljIlf/pwTO72xSEe8gBTXE3HaAtH8b4meQLiupXilIOYMXiL/tSwMHjJJ/hoVhw95+3lPPdHGxvm7UujSUg0Rw/G9YzP+9I4eTKVxhYberHiPe4aj73WtukpBjaxrRTWtaP4QG/JNKyUlIMelNKyUlIMelNKyUlIMelNKyUlIMelNKyUlIMelNKyUlIKaUWSkQXI3KUrkblKKClJSvRSigpSUrUVNFBSk35lXopRQUpKV6KiigrSUr0UooKUlK9FRRQVpKV6KUUFKSleilFBSkpWoqaKClJSvRSigpSUr0VFFBWkpXopRQUpKV6KiigrSUr0UooKUlK9FKKClIr0UQWIUUrFKQVpKVqSkFaSlakpBWkpWpKQVpKVqSkFaSlakpBWkpWpKQVpKVqSkFaSlakpBWkpWpKQVpKVqSkFaSlakpBWkpWpKQVpKVqSkFaSlakpBWkpWpKQRSK1IgIiICIiCFKIgIiIChEQSiIgKERBKIiAiIghSiICIiAoREEoiIChEQSiIgIiICIiD//Z',
                'reviews_count' => 7,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
            // Liquidificador (Philips)
            [
                'name' => 'Liquidificador Philips',
                'brand_id' => 7,
                'category_id' => 24,
                'short_description' => 'Liquidificador potente.',
                'description' => 'Liquidificador Philips 700W, jarro de vidro 1.5L, 5 velocidades, preto',
                'price' => 250.00,
                'discounted_price' => 225.00,
                'discount' => 10,
                'image_url' => 'https://d1likr6vgtxkkw.cloudfront.net/Custom/Content/Products/14/68/14680_liquidificador-diamante-800-pt-127vbritania_z1_638189763520259214.png',
                'reviews_count' => 15,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],
            // TV (Samsung)
            [
                'name' => 'TV Samsung 55" QLED 4K',
                'brand_id' => 2,
                'category_id' => 8,
                'short_description' => 'TV inteligente com cores vibrantes.',
                'description' => 'TV Samsung 55" QLED 4K UHD, Smart TV, 3 HDMI, 2 USB, HDR, Alexa integrada',
                'price' => 4200.00,
                'discounted_price' => 3780.00,
                'discount' => 10,
                'image_url' => 'https://www.electrical-deals.co.uk/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/Q/E/QE55Q85R-left.jpg',
                'reviews_count' => 24,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],
            // Cafeteira (Philips)
            [
                'name' => 'Cafeteira Philips Walita',
                'brand_id' => 7,
                'category_id' => 19,
                'short_description' => 'Cafeteira prática e eficiente.',
                'description' => 'Cafeteira Philips Walita 110V, sistema de filtro permanente, jarra térmica',
                'price' => 180.00,
                'discounted_price' => 153.00,
                'discount' => 15,
                'image_url' => 'https://carrefourbr.vtexassets.com/arquivos/ids/107384021/cafeteira-express-ep5441-philips-pt-220v-2.jpg?v=638151805720370000',
                'reviews_count' => 18,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
            // Aspirador de Pó (Electrolux)
            [
                'name' => 'Aspirador de Pó Electrolux',
                'brand_id' => 5,
                'category_id' => 31,
                'short_description' => 'Aspirador potente e silencioso.',
                'description' => 'Aspirador de Pó Electrolux 1400W, ciclônico, filtro HEPA, 2L de capacidade',
                'price' => 450.00,
                'discounted_price' => 0,
                'discount' => 10,
                'image_url' => 'https://images.colombo.com.br/produtos/4390883/4390883_Aspirador_de_Po_e_Agua_Electrolux_Flex_Azul_FLEXN_3011BCBR406_12090814_z.jpg',
                'reviews_count' => 9,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],
            [
                'name' => 'Aspirador Vertical Bosch Unlimited',
                'brand_id' => 4, // Bosch
                'category_id' => 31, // Aspiradores
                'short_description' => 'Aspirador sem fios potente e leve.',
                'description' => 'Aspirador vertical Bosch Unlimited Série 6, autonomia até 30 min, filtro HEPA, fácil de limpar.',
                'price' => 299.00,
                'discounted_price' => 269.00,
                'discount' => 10,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA03154712_BCS61113-power-image-2000x2000-02_def.webp',
                'reviews_count' => 17,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
            [
                'name' => 'Chaleira Elétrica Bosch TWK8613P',
                'brand_id' => 4,
                'category_id' => 7, // Pequenos Eletrodomésticos
                'short_description' => 'Chaleira com controlo de temperatura.',
                'description' => 'Chaleira elétrica Bosch 1.5L, 2400W, base 360º, proteção contra sobreaquecimento.',
                'price' => 69.99,
                'discounted_price' => 59.99,
                'discount' => 14,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/19850963_TWK8613P_STP_def.webp',
                'reviews_count' => 8,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
            [
                'name' => 'Batedeira Bosch MFQ36460',
                'brand_id' => 4,
                'category_id' => 7, // Pequenos Eletrodomésticos
                'short_description' => 'Batedeira potente e silenciosa.',
                'description' => 'Batedeira Bosch 450W, 5 velocidades, função turbo, acessórios em aço inox.',
                'price' => 49.90,
                'discounted_price' => 44.90,
                'discount' => 10,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/17572582_MFQ36460_STP_def.webp',
                'reviews_count' => 12,
                'is_best_seller' => true,
                'spec_sheet_url' => null,
            ],
            [
                'name' => 'Torradeira Bosch TAT6A913',
                'brand_id' => 4,
                'category_id' => 7, // Pequenos Eletrodomésticos
                'short_description' => 'Torradeira com 2 ranhuras largas.',
                'description' => 'Torradeira Bosch inox, 2 ranhuras, função descongelar, tabuleiro de migalhas.',
                'price' => 39.99,
                'discounted_price' => 34.99,
                'discount' => 13,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/19850963_TAT6A913_STP_def.webp',
                'reviews_count' => 10,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
            [
                'name' => 'Espremedor de Citrinos Bosch MCP3500N',
                'brand_id' => 4,
                'category_id' => 7, // Pequenos Eletrodomésticos
                'short_description' => 'Espremedor prático para sumos frescos.',
                'description' => 'Espremedor Bosch 25W, jarro de 800ml, peças laváveis na máquina.',
                'price' => 24.90,
                'discounted_price' => 21.90,
                'discount' => 12,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/MCSA01872531_G9365_MCP3500N_1292462_def.webp',
                'reviews_count' => 7,
                'is_best_seller' => false,
                'spec_sheet_url' => null,
            ],
        ];

        DB::table('products')->insert($products);

        // Exemplo: adicionar imagens extra ao Frigorífico Bosch Série 6
        $product = Product::where('name', 'Frigorífico Bosch Série 6')->first();
        if ($product) {
            ProductImage::create([
                'product_id' => $product->id,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/12781972_KAD93AIEP_PGA2_def.webp',
                'order' => 1
            ]);
            ProductImage::create([
                'product_id' => $product->id,
                'image_url' => 'https://media3.bsh-group.com/Product_Shots/1000x/12824369_KAD93VIFP_PGA9_def.webp',
                'order' => 2
            ]);
        }
    }
}
