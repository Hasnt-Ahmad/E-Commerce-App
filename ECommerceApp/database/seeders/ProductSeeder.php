<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['category_id' => '1','product_name'=>'Iphone X','description'=>'Apple iPhone X smartphone. Announced Sep 2017','price'=>'400','picture'=>'iphoneX.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "1",'product_name'=>'Iphone 11','description'=>'Apple iPhone 11 smartphone. ','price'=>'600','picture'=>'iphone11.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "1",'product_name'=>'Iphone 12','description'=>'Apple iPhone 12 smartphone.','price'=>'1000','picture'=>'iphone12.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "1",'product_name'=>'Google pixel 6 Pro','description'=>'The Google Pixal 6 Pro ','price'=>'500','picture'=>'googlePixel6.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "1",'product_name'=>'Google Pixel 6a','description'=>'The Pexl 6a boasts a stunning 6.2-inch display with a resolution of 1080 x 2400 pixels. ','price'=>'1000','picture'=>'googlePixel6A.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "2",'product_name'=>'Addidas Men RunFalcon','description'=>'RUNFALCON 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'8000','picture'=>'addidasRunFalcon.jpg','created_at' => now(), 'updated_at' => now()],          
            ['category_id' => "2",'product_name'=>'ADIDAS MEN EQ21','description'=>'EQ21 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'9000','picture'=>'addidasEQ21.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "2",'product_name'=>'ADIDAS MEN EQ22','description'=>'EQ21 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'9000','picture'=>'addidasEQ22.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "2",'product_name'=>'ADIDAS MEN EQ23','description'=>'EQ21 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'9000','picture'=>'addidasEQ22.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "2",'product_name'=>'Puma Flex','description'=>'RUNFALCON 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'8000','picture'=>'pumaFlex.jpg','created_at' => now(), 'updated_at' => now()],          
            ['category_id' => "2",'product_name'=>'Puma MEN Ferrari','description'=>'EQ21 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'9000','picture'=>'pumaFerrari.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "2",'product_name'=>'Puma Sneakers','description'=>'EQ21 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'9000','picture'=>'pumaSneakers.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "2",'product_name'=>'Puma Football Shoes','description'=>'EQ21 2.0CASUAL ATHLETIC SNEAKERS FOR AN ACTIVE LIFESTYLE','price'=>'9000','picture'=>'pumafootballshoes.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "3",'product_name'=>'Arabiyat Fragrance','description'=>'Fine fragrances containing a high dose of natural ingredients can be subject to slight variations','price'=>'2000','picture'=>'arbiyatFragrance.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "3",'product_name'=>'Havoc Silver Body Spary','description'=>'Fine fragrances containing a high dose of natural.','price'=>'9000','picture'=>'havocSpray.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "3",'product_name'=>'Musk Palace Perfume','description'=>'Fine fragrances containing a high dose of natural.','price'=>'8000','picture'=>'muskPerfume.jpg','created_at' => now(), 'updated_at' => now()],          
            ['category_id' => "3",'product_name'=>'AXE Ice Spray','description'=>'Fine fragrances containing a high dose of natural ','price'=>'9000','picture'=>'axceIce.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "3",'product_name'=>'Black Car Spray','description'=>'Fine fragrances containing a high dose of natural ingredients','price'=>'9000','picture'=>'blackCarSpray.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "3",'product_name'=>'DO It Spray','description'=>'Fine fragrances containing a high dose of natural','price'=>'9000','picture'=>'doItSpray.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "4",'product_name'=>'Samsung 55" QLED 4K','description'=>'2021 Samsung AU7000 55" 4K Crystal UHD Smart TV','price'=>'9000','picture'=>'samsung55TV.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "4",'product_name'=>'Samsung 45" QLED 4K','description'=>'2021 Samsung AU7000 55" 4K Crystal UHD Smart TV','price'=>'9000','picture'=>'samsung45TV.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "4",'product_name'=>'Samsung 65" QLED 4K','description'=>'2021 Samsung AU7000 55" 4K Crystal UHD Smart TV','price'=>'9000','picture'=>'samsung65TV.jpg','created_at' => now(), 'updated_at' => now()],
            ['category_id' => "4",'product_name'=>'Samsung 75" QLED 4K','description'=>'2021 Samsung AU7000 55" 4K Crystal UHD Smart TV','price'=>'9000','picture'=>'samsung75TV.jpg','created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
