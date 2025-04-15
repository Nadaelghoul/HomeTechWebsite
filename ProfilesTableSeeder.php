<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProvidersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'name' => 'Ahmed Khaled Tawfek',
                'email' => 'ahmedkt123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '0123456789',
                'area' =>'حي المناخ',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([
                    'Air conditioning cleaning & summer maintenance',
                    'Dismantling and installing Air conditioning'
                ]),
                'photo' => 'public/images/profile_photos/pro1.jpg',
                
            ],

            [
                'name' => 'Mohamed Sami Youssef',
                'email' => 'mohamedsy123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '0987654321',
                'area' => 'حي الزهور',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Dismantling and installing Air conditioning']),
                'photo' => 'public/images/profile_photos/pro2.jpg',
            ],

            [
                'name' => 'Khaled Omar Ibrahiem',
                'email' => 'khaledoi123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning inspection',  'Charging Freon air conditioning']),
                'photo' => 'public/images/profile_photos/pro3.jpg',
            ],

            [
                'name' => 'Ali Mostafa Zedan',
                'email' => 'alimz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>' حي الضواحي',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode(['Air conditioning cleaning & summer maintenance',
                 'Air conditioning inspection',
                 'Charging Freon air conditioning',
                 'Dismantling and installing Air conditioning']),
                 'photo' => 'public/images/profile_photos/pro4.jpg',
            ],

            [
                'name' => 'Youssef Soliman Fouad',
                'email' => 'youssefsf123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Charging Freon air conditioning']),
                'photo' => 'public/images/profile_photos/pro5.jpg',
            ],

            [
                'name' => 'Hassan Waleed Kamal',
                'email' => 'hassanwk123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي شرق بورسعيد',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning inspection','Dismantling and installing Air conditioning']),
                 'photo' => 'public/images/profile_photos/pro6.jpg',
            ],

            [
                'name' => 'Marawan Saead Zaher',
                'email' => 'marwansz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الجنوب',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning cleaning & summer maintenance',
                   'Air conditioning inspection',
                   'Charging Freon air conditioning',
                   'Dismantling and installing Air conditioning']),
                   'photo' => 'public/images/profile_photos/pro7.jpg',
            ],

            [
                'name' => 'Ibrahiem Samir Nageb',
                'email' => 'ibrahiemsn123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                 'area' =>'حي المناخ',
                'service' => 'Air Conditioning Service',
                'skills' => json_encode([ 'Air conditioning cleaning & summer maintenance']),
                'photo' => 'public/images/profile_photos/pro8.jpg',
            ],
            [
                'name' => 'Tarek Hesham Nabil',
                'email' => 'tarekhn123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                 'area' => 'حي الزهور',
                'service' => 'Carpentry Service',
                'skills' => json_encode([ 'Door Installation and Repair',
                    'Window Framing and Repair',
                   'Bedroom Furniture Assembly',
                   'Table Crafting and Restoration']),
                   'photo' => 'public/images/profile_photos/pro9.jpg',
            ],
            [
                'name' => 'Fares Mahmoud Zaki',
                'email' => 'faresmz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair',  'Table Crafting and Restoration']),
                'photo' => 'public/images/profile_photos/pro10.jpg',
            ],
            [
                'name' => 'Noureldeen Sameh Gamal',
                'email' => 'noureldeensg123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair',
                    'Window Framing and Repair',
                   'Table Crafting and Restoration']),
                   'photo' => 'public/images/profile_photos/pro11.jpg',

            ],
            [
                'name' => 'Samer Ehab Fadel',
                'email' => 'sameref123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي شرق بورسعيد',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Bedroom Furniture Assembly']),
                'photo' => 'public/images/profile_photos/pro12.jpg',
            ],

            [
                'name' => 'Karim Alaa Mansour',
                'email' => 'karimam123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>' حي الضواحي',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair']),
                'photo' => 'public/images/profile_photos/pro13.jpg',
            ],

            [
                'name' => 'Zeyad Nasser Tawfik',
                'email' => 'zeyadnt123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الجنوب',
                'service' => 'Carpentry Service',
                'skills' => json_encode([ 'Window Framing and Repair', 'Table Crafting and Restoration']),
                'photo' => 'public/images/profile_photos/pro14.jpg',

            ],

            [
                'name' => 'Eyad Amr AbdElHameed',
                'email' => 'eyadaad123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Carpentry Service',
                'skills' => json_encode(['Door Installation and Repair',
                      'Window Framing and Repair',
                      'Table Crafting and Restoration']),
                      'photo' => 'public/images/profile_photos/pro15.jpg',
            ],
            [
                'name' => 'Sherif Tamer AbdElAzeez',
                'email' => 'sheriftab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'حي المناخ',
                'service' => 'Carpentry Service',
                'skills' => json_encode([ 'Door Installation and Repair',
                   'Window Framing and Repair',
                   'Bedroom Furniture Assembly',
                   'Table Crafting and Restoration']),
                   'photo' => 'public/images/profile_photos/pro16.jpg',

            ],
            [
                'name' => 'Ramy Adham Sabri',
                'email' => 'ramyas123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الزهور',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Wiring and Cabling Services',
                'Installing and Maintaining Electrical Panels',
                'Installing and Maintaining Lighting Systems',
                'Installing and Maintaining Alarm and Home Security Systems']),
                'photo' => 'public/images/profile_photos/pro17.jpg',

            ],
            [
                'name' => 'Mazen Ayman Radwan',
                'email' => 'mazenar123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي شرق بورسعيد',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Installing and Maintaining Alarm and Home Security Systems']),
                'photo' => 'public/images/profile_photos/pro18.jpg',

            ],
            [
                'name' => 'Hazem Bassam Rafek',
                'email' => 'hazembr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Wiring and Cabling Services', 'Installing and Maintaining Electrical Panels']),
                'photo' => 'public/images/profile_photos/pro19.jpg',

            ],
            [
                'name' => 'Haithem Magdi Anwar',
                'email' => 'haithemma123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الزهور',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Installing and Maintaining Lighting Systems']),
                'photo' => 'public/images/profile_photos/pro20.jpg',

            ],
            [
                'name' => 'Nader Galal Mohsen',
                'email' => 'nadergm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'حي المناخ',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Installing and Maintaining Electrical Panels']),
                'photo' => 'public/images/profile_photos/pro21.jpg',

            ],
            [
                'name' => 'Basel Adel Hassan ',
                'email' => 'baselah123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Wiring and Cabling Services',
                'Installing and Maintaining Electrical Panels',
                'Installing and Maintaining Lighting Systems',
                'Installing and Maintaining Alarm and Home Security Systems']),
                'photo' => 'public/images/profile_photos/pro22.jpg',

            ],
            [
                'name' => 'Raed Tarek Yassen ',
                'email' => 'raedty123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Electrical Work Service',
                'skills' => json_encode(['Wiring and Cabling Services']),
                'photo' => 'public/images/profile_photos/pro23.jpg',
            ],

            [
                'name' => 'Malek Samer Shukri',
                'email' => 'malekssh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>' حي الضواحي',
                'service' => 'Electrical Work Service',
                'skills' => json_encode([ 'Installing and Maintaining Electrical Panels','Installing and Maintaining Lighting Systems']),
                'photo' => 'public/images/profile_photos/pro24.jpg',
            ],
            [
                'name' => 'Seif Ehab Nader',
                'email' => 'seifen123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي شرق بورسعيد',
                'service' => 'Appliance Service',
                'skills' => json_encode([ 'Washing Machine Repair',
                     'Refrigerator Repair',
                     'Water Heater Repair',
                      'Oven Repair']),
                      'photo' => 'public/images/profile_photos/pro25.jpg',

            ],
            [
                'name' => 'Gad Hussien Medhat',
                'email' => 'gadhm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Washing Machine Repair']),
                'photo' => 'public/images/profile_photos/pro26.jpg',

            ],
            [
                'name' => 'Salman Hatem Khalil',
                'email' => 'salmanhkh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'حي المناخ',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Oven Repair']),
                'photo' => 'public/images/profile_photos/pro27.jpg',

            ],
            [
                'name' => 'Adel Fouad Masoud',
                'email' => 'adelfm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Refrigerator Repair',]),
                'photo' => 'public/images/profile_photos/pro28.jpg',

            ],
            [
                'name' => 'Louay Hossam Ramzi',
                'email' => 'louayhr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الزهور',
                'service' => 'Appliance Service',
                'skills' => json_encode([ 'Refrigerator Repair',  'Water Heater Repair']),
                'photo' => 'public/images/profile_photos/pro29.jpg',

            ],
            [
                'name' => 'Diya Khaled AbdElBaset',
                'email' => 'diyakab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Washing Machine Repair']),
                'photo' => 'public/images/profile_photos/pro30.jpg',

            ],
            [
                'name' => 'Ameen Said Hamdi',
                'email' => 'ameensh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Appliance Service',
                'skills' => json_encode([ 'Water Heater Repair']),
                'photo' => 'public/images/profile_photos/pro31.jpg',

            ],
            [
                'name' => 'Hamza Yasser Rakouf',
                'email' => 'hamzayr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>' حي الضواحي',
                'service' => 'Appliance Service',
                'skills' => json_encode(['Refrigerator Repair','Oven Repair']),
                'photo' => 'public/images/profile_photos/pro32.jpg',

            ],
            [
                'name' => 'Akram Marwan AbdEllatef',
                'email' => 'akrammab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الزهور',
                'service' => 'Painting Service',
                'skills' => json_encode([ 'Interior Wall Painting',
                'Exterior House Painting',
                'Cabinet Refinishing',
                'Decorative Painting']),
                'photo' => 'public/images/profile_photos/pro33.jpg',

            ],
            [
                'name' => 'Eslam Tayseer Shaaban',
                'email' => 'eslamtsh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الجنوب',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting','Decorative Painting','Exterior House Painting']),
                'photo' => 'public/images/profile_photos/pro34.jpg',

            ],
            [
                'name' => 'Adnan Taha Magdi',
                'email' => 'adnantm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الزهور',
                'service' => 'Painting Service',
                'skills' => json_encode([ 'Exterior House Painting']),
                'photo' => 'public/images/profile_photos/pro35.jpg',

            ],
            [
                'name' => 'Mohand Rami Zakaria',
                'email' => 'mohamedrz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Painting Service',
                'skills' => json_encode([ 'Decorative Painting']),
                'photo' => 'public/images/profile_photos/pro36.jpg',

            ],
            [
                'name' => 'Hazem Nasr Zaki',
                'email' => 'hazemnz123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>' حي الضواحي',
                'service' => 'Painting Service',
                'skills' => json_encode([  'Exterior House Painting','Cabinet Refinishing']),
                'photo' => 'public/images/profile_photos/pro37.jpg',

            ],
            [
                'name' => 'Zaki Fouad Hamed',
                'email' => 'zakifh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting',
                 'Exterior House Painting',
                 'Cabinet Refinishing',
                 'Decorative Painting']),
                 'photo' => 'public/images/profile_photos/pro38.jpg',

            ],
            [
                'name' => 'Eslam Ramy AbdElhameed',
                'email' => 'eslamrab123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الزهور',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting', 'Decorative Painting']),
                'photo' => 'public/images/profile_photos/pro39.jpg',

            ],
            [
                'name' => 'Fadel Zakria Nour',
                'email' => 'fadelzn123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Painting Service',
                'skills' => json_encode(['Interior Wall Painting', 'Exterior House Painting']),
                'photo' => 'public/images/profile_photos/pro40.jpg',

            ],
            [
                'name' => 'Ali Mansour Mohamed',
                'email' => 'alimm123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Plumbing Service',
                'skills' => json_encode([ 'Fix Leak',
                'Unclog The Drain',
                'Install A New Sink',
                'Replace A Faucet']),
                'photo' => 'public/images/profile_photos/pro41.jpg',

            ],
            [
                'name' => 'Ibrahiem Ali Fadel',
                'email' => 'ibrahiemaf123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'حي المناخ',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak','Install A New Sink']),
                'photo' => 'public/images/profile_photos/pro42.jpg',

            ],
            [
                'name' => 'Tarek Hassan Waleed',
                'email' => 'tarekhw123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي غرب',
                'service' => 'Plumbing Service',
                'skills' => json_encode([ 'Unclog The Drain']),
                'photo' => 'public/images/profile_photos/pro43.jpg',

            ],
            [
                'name' => 'Karim Mahmoud Gamal',
                'email' => 'karimmg123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'حي المناخ',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak', 'Unclog The Drain','Install A New Sink']),
                'photo' => 'public/images/profile_photos/pro44.jpg',

            ],
            [
                'name' => 'Sherif Mahmoud Sabri',
                'email' => 'sherifms123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي الزهور',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Install A New Sink', 'Replace A Faucet']),
                'photo' => 'public/images/profile_photos/pro45.jpg',

            ],
            [
                'name' => 'Mazen Mohamed Radwan',
                'email' => 'makenmr123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي شرق بورسعيد',
                'service' => 'Plumbing Service',
                'skills' => json_encode([ 'Unclog The Drain', 'Replace A Faucet']),
                'photo' => 'public/images/profile_photos/pro46.jpg',

            ],
            [
                'name' => 'Amin Badr Fouad',
                'email' => 'aminbf123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' => 'حي التلاتيني',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak',
                'Unclog The Drain',
                'Install A New Sink',
                'Replace A Faucet']),
                'photo' => 'public/images/profile_photos/pro47.jpg',

            ],
            [
                'name' => 'Akram Hossni Harab',
                'email' => 'akramhh123@gmail.com',
                'password' => Hash::make('22222222'),
                'phone' => '01122334455',
                'area' =>'حي المناخ',
                'service' => 'Plumbing Service',
                'skills' => json_encode(['Fix Leak']),
                'photo' => 'public/images/profile_photos/pro48.jpg',

            ],
        ]);
    }
}
