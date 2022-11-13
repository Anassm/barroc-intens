<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                // 'id' => 0,
                'name' => "Ali-B Deluxe!",
                'description' => "Voor de lekkerste koffie! Handgemaakt!",
                'image_path' => "637167cab9e79-.jpg",
                'price' =>"123",
                'amount'=>"321",
                'product_category_id' => "2"
            ],
            [
                // 'id' => 1,
                'name' => "Bit-Deluxe",
                'description' => "The better version of the Bit collection!",
                'image_path' => "machine-bit-light.png",
                'price' =>"499",
                'amount'=>"500",
                'product_category_id' => "1"
            ],
            [
                // 'id' => 2,
                'name' => "Bit-Light",
                'description' => "The better version of the Bit collection!",
                'image_path' => "machine-bit-deluxe.png",
                'price' =>"799",
                'amount'=>"500",
                'product_category_id' => "1"
            ],
            [
                // 'id' => 3,
                'name' => "Espresso Beneficio",
                'description' => "Een toegankelijke en zachte koffie. Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.",
                'image_path' => "bonenzak1.png",
                'price' =>"21.60",
                'amount'=>"500",
                'product_category_id' => "2"
            ],
            [
                // 'id' => 4,
                'name' => "Yellow Bourbon Brasi",
                'description' => "Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.",
                'image_path' => "bonenzak2.png",
                'price' =>"23.20",
                'amount'=>"500",
                'product_category_id' => "2"
            ],
            [
                // 'id' => 5,
                'name' => "Espresso Roma",
                'description' => "Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.",
                'image_path' => "bonenzak3.png",
                'price' =>"20.80",
                'amount'=>"500",
                'product_category_id' => "2"
            ],
            [
                // 'id' => 6,
                'name' => "Red Honey Honduras",
                'description' => "De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.",
                'image_path' => "bonenzak4.png",
                'price' =>"27.80",
                'amount'=>"500",
                'product_category_id' => "2"
            ],
        ]);
    }
}
