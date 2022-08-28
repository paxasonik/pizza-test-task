<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Мясной Микс',
                'description' => 'Пастрами из индейки, острая чоризо, пикантная пепперони, бекон, моцарелла, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/meat-mix.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Индейка с овощами гриль',
                'description' => 'Пастрами из индейки, овощи-гриль, кубики брынзы, моцарелла, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/turkey-grilled.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Белая пепперони',
                'description' => 'Пикантная пепперони, соус альфредо, моцарелла',
                'image' => 'http://127.0.0.1:8000/images/white-pepperoni.jpeg',
                'price' => '399',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Ветчина и сыр',
                'description' => 'Ветчина, моцарелла, соус альфредо',
                'image' => 'http://127.0.0.1:8000/images/ham-cheese.jpeg',
                'price' => '309',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Сырная',
                'description' => 'Моцарелла, сыры чеддер и пармезан, соус альфредо',
                'image' => 'http://127.0.0.1:8000/images/cheese.jpeg',
                'price' => '289',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Карбонара',
                'description' => 'Бекон, сыры чеддер и пармезан, моцарелла, томаты, красный лук, чеснок, соус альфредо, итальянские травы',
                'image' => 'http://127.0.0.1:8000/images/carbonara.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Пепперони фреш',
                'description' => 'Пикантная пепперони, увеличенная порция моцареллы, томаты, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/pepperoni-fresh.jpeg',
                'price' => '289',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Четыре сыра',
                'description' => 'Сыр блю чиз, сыры чеддер и пармезан, моцарелла, соус альфредо',
                'image' => 'http://127.0.0.1:8000/images/four-cheeses.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Пепперони',
                'description' => 'Пикантная пепперони, увеличенная порция моцареллы, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/pepperoni.jpeg',
                'price' => '399',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Песто',
                'description' => 'Цыпленок, соус песто, кубики брынзы, томаты, моцарелла, соус альфредо',
                'image' => 'http://127.0.0.1:8000/images/pesto.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Чоризо фреш',
                'description' => 'Томатный соус, моцарелла, острая чоризо, сладкий перец',
                'image' => 'http://127.0.0.1:8000/images/chorizo-fresh.jpeg',
                'price' => '289',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Домашняя',
                'description' => 'Пикантная пепперони, ветчина, маринованные огурчики, томаты, моцарелла, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/homelike.jpeg',
                'price' => '399',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Аррива!',
                'description' => 'Цыпленок, острая чоризо, соус бургер, сладкий перец, красный лук, томаты, моцарелла, соус ранч, чеснок',
                'image' => 'http://127.0.0.1:8000/images/arriva.jpeg',
                'price' => '399',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Ветчина и грибы',
                'description' => 'Ветчина, шампиньоны, увеличенная порция моцареллы, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/ham-mushrooms.jpeg',
                'price' => '349',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Цыпленок барбекю',
                'description' => 'Цыпленок, бекон, соус барбекю, красный лук, моцарелла, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/barbecue-chicken.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Маргарита',
                'description' => 'Увеличенная порция моцареллы, томаты, итальянские травы, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/margaret.jpeg',
                'price' => '349',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Мясная',
                'description' => 'Цыпленок, ветчина, пикантная пепперони, острая чоризо, моцарелла, томатный соус',
                'image' => 'http://127.0.0.1:8000/images/meat.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Сырный цыпленок',
                'description' => 'Цыпленок, моцарелла, сыры чеддер и пармезан, сырный соус, томаты, соус альфредо, чеснок',
                'image' => 'http://127.0.0.1:8000/images/cheese-chicken.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Овощи гриль',
                'description' => 'Овощи гриль, томаты, красный лук, моцарелла, соус песто, томатный соус, чеснок',
                'image' => 'http://127.0.0.1:8000/images/grilled-vegetables.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Цыпленок ранч',
                'description' => 'Цыпленок, ветчина, соус ранч, моцарелла, томаты, чеснок',
                'image' => 'http://127.0.0.1:8000/images/chicken-ranch.jpeg',
                'price' => '429',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
