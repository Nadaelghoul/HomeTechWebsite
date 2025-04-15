<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProvidersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('providers')->insert([
            [

                'name' => 'Ahmed Khaled Tawfek',
                'email' => 'ahmedkt123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '0123456789',
                'area' =>'Al Manakh District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([
                    'Air conditioning cleaning & summer maintenance',
                    'Dismantling and installing Air conditioning'
                ]),
            ],

            [

                'name' => 'Mohamed Sami Youssef',
                'email' => 'mohamedsy123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '0987654321',
                'area' => 'Al Zohour District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Dismantling and installing Air conditioning']),

            ],

            [

                'name' => 'Khaled Omar Ibrahiem',
                'email' => 'khaledoi123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning inspection',  'Charging Freon air conditioning']),

            ],

            [

                'name' => 'Ali Mostafa Zedan',
                'email' => 'alimz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al-dowahi District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode(['Air conditioning cleaning & summer maintenance',
                 'Air conditioning inspection',
                 'Charging Freon air conditioning',
                 'Dismantling and installing Air conditioning']),

            ],

            [

                'name' => 'Youssef Soliman Fouad',
                'email' => 'youssefsf123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Charging Freon air conditioning']),

            ],

            [

                'name' => 'Hassan Waleed Kamal',
                'email' => 'hassanwk123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'East Port Said District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning inspection','Dismantling and installing Air conditioning']),

            ],

            [

                'name' => 'Marawan Saead Zaher',
                'email' => 'marwansz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'South District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning cleaning & summer maintenance',
                   'Air conditioning inspection',
                   'Charging Freon air conditioning',
                   'Dismantling and installing Air conditioning']),

            ],

            [

                'name' => 'Ibrahiem Samir Nageb',
                'email' => 'ibrahiemsn123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                 'area' =>'Al Manakh District',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning cleaning & summer maintenance']),

            ],
            [

                'name' => 'Tarek Hesham Nabil',
                'email' => 'tarekhn123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                 'area' => 'Al Zohour District',
                'service' => 'Carpentry Service',
                'skills' => json_encode([ 'Door Installation and Repair',
                    'Window Framing and Repair',
                   'Bedroom Furniture Assembly',
                   'Table Crafting and Restoration']),

            ],
            [

                'name' => 'Fares Mahmoud Zaki',
                'email' => 'faresmz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair',  'Table Crafting and Restoration']),

            ],
            [

                'name' => 'Noureldeen Sameh Gamal',
                'email' => 'noureldeensg123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair',
                    'Window Framing and Repair',
                   'Table Crafting and Restoration']),
            ],
            [

                'name' => 'Samer Ehab Fadel',
                'email' => 'sameref123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'East Port Said District',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Bedroom Furniture Assembly']),

            ],

            [

                'name' => 'Karim Alaa Mansour',
                'email' => 'karimam123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>' Al-dowahi District',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair']),

            ],

            [

                'name' => 'Zeyad Nasser Tawfik',
                'email' => 'zeyadnt123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'South District',
                'service' => 'Carpentry Service',
                'skills' => json_encode([ 'Window Framing and Repair', 'Table Crafting and Restoration']),


            ],

            [

                'name' => 'Eyad Amr AbdElHameed',
                'email' => 'eyadaad123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair',
                      'Window Framing and Repair',
                      'Table Crafting and Restoration']),
            ],
            [

                'name' => 'Sherif Tamer AbdElAzeez',
                'email' => 'sheriftab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al Manakh District',
                'service' => 'Carpentry Service',
                'skills' => json_encode([ 'Door Installation and Repair',
                   'Window Framing and Repair',
                   'Bedroom Furniture Assembly',
                   'Table Crafting and Restoration']),


            ],
            [

                'name' => 'Ramy Adham Sabri',
                'email' => 'ramyas123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al Zohour District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Wiring and Cabling Services',
                'Installing and Maintaining Electrical Panels',
                'Installing and Maintaining Lighting Systems',
                'Installing and Maintaining Alarm and Home Security Systems']),


            ],
            [

                'name' => 'Mazen Ayman Radwan',
                'email' => 'mazenar123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'East Port Said District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Installing and Maintaining Alarm and Home Security Systems']),


            ],
            [
                'name' => 'Hazem Bassam Rafek',
                'email' => 'hazembr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Wiring and Cabling Services', 'Installing and Maintaining Electrical Panels']),


            ],
            [

                'name' => 'Haithem Magdi Anwar',
                'email' => 'haithemma123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al Zohour District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Installing and Maintaining Lighting Systems']),


            ],
            [

                'name' => 'Nader Galal Mohsen',
                'email' => 'nadergm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al Manakh District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Installing and Maintaining Electrical Panels']),


            ],
            [

                'name' => 'Basel Adel Hassan ',
                'email' => 'baselah123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Wiring and Cabling Services',
                'Installing and Maintaining Electrical Panels',
                'Installing and Maintaining Lighting Systems',
                'Installing and Maintaining Alarm and Home Security Systems']),


            ],
            [

                'name' => 'Raed Tarek Yassen ',
                'email' => 'raedty123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Wiring and Cabling Services']),

            ],

            [

                'name' => 'Malek Samer Shukri',
                'email' => 'malekssh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al-dowahi District',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Installing and Maintaining Electrical Panels','Installing and Maintaining Lighting Systems']),

            ],
            [

                'name' => 'Seif Ehab Nader',
                'email' => 'seifen123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'East Port Said District',
                'service' => 'Appliance Service',
                'skills' => json_encode([ 'Washing Machine Repair',
                     'Refrigerator Repair',
                     'Water Heater Repair',
                      'Oven Repair']),
            ],
            [

                'name' => 'Gad Hussien Medhat',
                'email' => 'gadhm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Washing Machine Repair']),

            ],
            [

                'name' => 'Salman Hatem Khalil',
                'email' => 'salmanhkh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al Manakh District',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Oven Repair']),


            ],
            [

                'name' => 'Adel Fouad Masoud',
                'email' => 'adelfm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Refrigerator Repair',]),

            ],
            [

                'name' => 'Louay Hossam Ramzi',
                'email' => 'louayhr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al Zohour District',
                'service' => 'Appliance Service',
                'skills' => json_encode([ 'Refrigerator Repair',  'Water Heater Repair']),


            ],
            [

                'name' => 'Diya Khaled AbdElBaset',
                'email' => 'diyakab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Washing Machine Repair']),


            ],
            [

                'name' => 'Ameen Said Hamdi',
                'email' => 'ameensh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Appliance Service',
                'skills' => json_encode([ 'Water Heater Repair']),


            ],
            [

                'name' => 'Hamza Yasser Rakouf',
                'email' => 'hamzayr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al-dowahi District',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Refrigerator Repair','Oven Repair']),


            ],
            [

                'name' => 'Akram Marwan AbdEllatef',
                'email' => 'akrammab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al Zohour District',
                'service' => 'Painting Service',
                'skills' => json_encode([ 'Interior Wall Painting',
                'Exterior House Painting',
                'Cabinet Refinishing',
                'Decorative Painting']),


            ],
            [

                'name' => 'Eslam Tayseer Shaaban',
                'email' => 'eslamtsh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'South District',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting','Decorative Painting','Exterior House Painting']),


            ],
            [

                'name' => 'Adnan Taha Magdi',
                'email' => 'adnantm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al Zohour District',
                'service' => 'Painting Service',
                'skills' => json_encode([ 'Exterior House Painting']),


            ],
            [

                'name' => 'Mohand Rami Zakaria',
                'email' => 'mohamedrz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Painting Service',
                'skills' => json_encode([ 'Decorative Painting']),


            ],
            [

                'name' => 'Hazem Nasr Zaki',
                'email' => 'hazemnz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al-dowahi District',
                'service' => 'Painting Service',
                'skills' => json_encode([  'Exterior House Painting','Cabinet Refinishing']),


            ],
            [

                'name' => 'Zaki Fouad Hamed',
                'email' => 'zakifh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting',
                 'Exterior House Painting',
                 'Cabinet Refinishing',
                 'Decorative Painting']),


            ],
            [
                'name' => 'Eslam Ramy AbdElhameed',
                'email' => 'eslamrab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al Zohour District',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting', 'Decorative Painting']),


            ],
            [

                'name' => 'Fadel Zakria Nour',
                'email' => 'fadelzn123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting', 'Exterior House Painting']),


            ],
            [

                'name' => 'Ali Mansour Mohamed',
                'email' => 'alimm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Plumbing Service',
                'skills' => json_encode([ 'Fix Leak',
                'Unclog The Drain',
                'Install A New Sink',
                'Replace A Faucet']),


            ],
            [

                'name' => 'Ibrahiem Ali Fadel',
                'email' => 'ibrahiemaf123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al Manakh District',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak','Install A New Sink']),


            ],
            [

                'name' => 'Tarek Hassan Waleed',
                'email' => 'tarekhw123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'West District',
                'service' => 'Plumbing Service',
                'skills' => json_encode([ 'Unclog The Drain']),


            ],
            [

                'name' => 'Karim Mahmoud Gamal',
                'email' => 'karimmg123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al Manakh District',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak', 'Unclog The Drain','Install A New Sink']),


            ],
            [

                'name' => 'Sherif Mahmoud Sabri',
                'email' => 'sherifms123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al Zohour District',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Install A New Sink', 'Replace A Faucet']),


            ],
            [

                'name' => 'Mazen Mohamed Radwan',
                'email' => 'makenmr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'East Port Said District',
                'service' => 'Plumbing Service',
                'skills' => json_encode([ 'Unclog The Drain', 'Replace A Faucet']),


            ],
            [

                'name' => 'Amin Badr Fouad',
                'email' => 'aminbf123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'Al-talatini District',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak',
                'Unclog The Drain',
                'Install A New Sink',
                'Replace A Faucet']),


            ],
            [

                'name' => 'Akram Hossni Harab',
                'email' => 'akramhh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'Al Manakh District',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak']),

            ],
        ]);
    }
}
