<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Amaron Battery',
            'price' => 11200,
            'description' => 'Warranty: 42 Months (30 Months Full Replacement + 12 Months Pro Rata)
            Capacity: 200 AH
            Type: Tubular Battery',
            'image' => 'https://i.postimg.cc/3Jd4KM92/amaron-battery.jpg'
        ]);
        Product::create([
            'name' => 'Apollo Tyres',
            'price' => 12474,
            'description' => 'Size:	Medium
            Brand:	Apollo
            Section Width:	195 Millimetres
            Rim Width:	15 Inches
            Load Capacity:	100 Kilograms',
            'image' => 'https://i.postimg.cc/856nvkRM/apollo.jpg'
        ]);
        Product::create([
            'name' => 'MRF ZAPPER',
            'price' => 2100,
            'description' => 'Brand:	MRF
            Section Width:	120 Millimetres
            Rim Width:	17 Inches
            120/80 17 Tubeless 61 P Rear',
            'image' => 'https://i.postimg.cc/qMStqmZS/mrfTyre.jpg'
        ]);
    }
}
