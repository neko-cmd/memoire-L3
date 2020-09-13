<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Laptops
       for ($i=1; $i <= 9; $i++) {
        Product::create([
            'title' => 'Laptop '.$i,
            'slug' => 'laptop-'.$i,
            'subtitle' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
         ])->categories()->attach(1); 
        } 

        // $product = Product::find(1);
        // $product->categories()->attach(2);
        //Desktop
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'title' => 'Desktop ' . $i,
                'slug' => 'desktop-' . $i,
                'subtitle' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'price' => rand(249999, 449999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(2);
        }
        // Phones
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'title' => 'Phone ' . $i,
                'slug' => 'phone-' . $i,
                'subtitle' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
                'price' => rand(79999, 149999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(3);
        }    
       // Tablets
       for ($i = 1; $i <= 9; $i++) {
        Product::create([
            'title' => 'Tablet ' . $i,
            'slug' => 'tablet-' . $i,
            'subtitle' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' inch screen, 4GHz Quad Core',
            'price' => rand(49999, 149999),
            'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(4);
        }  
      // TVs
      for ($i = 1; $i <= 9; $i++) {
        Product::create([
            'title' => 'TV ' . $i,
            'slug' => 'tv-' . $i,
            'subtitle' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart TV, 4K',
            'price' => rand(79999, 149999),
            'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ])->categories()->attach(5);
      }
       // Cameras
       for ($i = 1; $i <= 9; $i++) {
        Product::create([
            'title' => 'Camera ' . $i,
            'slug' => 'camera-' . $i,
            'subtitle' => 'Full Frame DSLR, with 18-55mm kit lens.',
            'price' => rand(79999, 249999),
            'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(6);
       }
       // Appliances
       for ($i = 1; $i <= 9; $i++) {
        Product::create([
            'title' => 'Accessories ' . $i,
            'slug' => 'accessories-' . $i,
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
            'price' => rand(79999, 149999),
            'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(7);
       }
    }
}
