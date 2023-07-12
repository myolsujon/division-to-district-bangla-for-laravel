<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    private $locations = [
        ['location_name'=>'ঢাকা', 'parent_id'=>0],
        ['location_name'=>'ফরিদপুর', 'parent_id'=>1],
        ['location_name'=>'গাজিপুর', 'parent_id'=>1],
        ['location_name'=>'গোপালগঞ্জ', 'parent_id'=>1],
        ['location_name'=>'কিশোরগঞ্জ', 'parent_id'=>1],
        ['location_name'=>'মাদারীপুর', 'parent_id'=>1],
        ['location_name'=>'মানিকগঞ্জ', 'parent_id'=>1],
        ['location_name'=>'মুন্সিগঞ্জ', 'parent_id'=>1],
        ['location_name'=>'নারায়ণগঞ্জ', 'parent_id'=>1],
        ['location_name'=>'নরসিংদী', 'parent_id'=>1],
        ['location_name'=>'রাজবাড়ী', 'parent_id'=>1],
        ['location_name'=>'শরীয়তপুর', 'parent_id'=>1],
        ['location_name'=>'টাঙ্গাইল', 'parent_id'=>1],
        ['location_name'=>'খুলনা', 'parent_id'=>0],
        ['location_name'=>'বাগেরহাট', 'parent_id'=>14],
        ['location_name'=>'চুয়াডাঙ্গা', 'parent_id'=>14],
        ['location_name'=>'যশোর', 'parent_id'=>14],
        ['location_name'=>'ঝিনাইদহ', 'parent_id'=>14],
        ['location_name'=>'কুষ্টিয়া', 'parent_id'=>14],
        ['location_name'=>'মাগুরা', 'parent_id'=>14],
        ['location_name'=>'মেহেরপুর', 'parent_id'=>14],
        ['location_name'=>'নড়াইল', 'parent_id'=>14],
        ['location_name'=>'সাতক্ষীরা', 'parent_id'=>14],
        ['location_name'=>'রাজশাহী', 'parent_id'=>0],
        ['location_name'=>'বগুড়া', 'parent_id'=>24],
        ['location_name'=>'চাঁপাই নবাবগঞ্জ', 'parent_id'=>24],
        ['location_name'=>'জয়পুরহাট', 'parent_id'=>24],
        ['location_name'=>'নওগাঁ', 'parent_id'=>24],
        ['location_name'=>'নাটোর', 'parent_id'=>24],
        ['location_name'=>'পাবনা', 'parent_id'=>24],
        ['location_name'=>'সিরাজগঞ্জ', 'parent_id'=>24],
        ['location_name'=>'সিলেট', 'parent_id'=>0],
        ['location_name'=>'মৌলভীবাজার', 'parent_id'=>32],
        ['location_name'=>'হবিগঞ্জ', 'parent_id'=>32],
        ['location_name'=>'সুনামগঞ্জ', 'parent_id'=>32],
        ['location_name'=>'বরিশাল', 'parent_id'=>0],
        ['location_name'=>'বরগুনা', 'parent_id'=>36],
        ['location_name'=>'ভোলা', 'parent_id'=>36],
        ['location_name'=>'ঝালকাঠি', 'parent_id'=>36],
        ['location_name'=>'পটুয়াখালী', 'parent_id'=>36],
        ['location_name'=>'পিরোজপুর', 'parent_id'=>36],
        ['location_name'=>'বান্দরবান', 'parent_id'=>36],
        ['location_name'=>'ব্রাহ্মণবাড়িয়া', 'parent_id'=>36],
        ['location_name'=>'চাঁদপুর', 'parent_id'=>36],
        ['location_name'=>'চট্টগ্রাম', 'parent_id'=>0],
        ['location_name'=>'কুমিল্লা', 'parent_id'=>45],
        ['location_name'=>'কক্সবাজার', 'parent_id'=>45],
        ['location_name'=>'ফেনী', 'parent_id'=>45],
        ['location_name'=>'খাগড়াছড়ি', 'parent_id'=>45],
        ['location_name'=>'লক্ষ্মীপুর', 'parent_id'=>45],
        ['location_name'=>'নোয়াখালী', 'parent_id'=>45],
        ['location_name'=>'রাঙামাটি', 'parent_id'=>45],
        ['location_name'=>'রংপুর', 'parent_id'=>0],
        ['location_name'=>'দিনাজপুর', 'parent_id'=>53],
        ['location_name'=>'গাইবান্ধা', 'parent_id'=>53],
        ['location_name'=>'কুড়িগ্রাম', 'parent_id'=>53],
        ['location_name'=>'লালমনিরহাট', 'parent_id'=>53],
        ['location_name'=>'নীলফামারী', 'parent_id'=>53],
        ['location_name'=>'পঞ্চগড়', 'parent_id'=>53],
        ['location_name'=>'ঠাকুরগাঁও', 'parent_id'=>53],
        ['location_name'=>'ময়মনসিংহ', 'parent_id'=>0],
        ['location_name'=>'শেরপুর', 'parent_id'=>61],
        ['location_name'=>'নেত্রকোণা', 'parent_id'=>61],
        ['location_name'=>'জামালপুর', 'parent_id'=>61],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::insert($this->locations);
    }
}
