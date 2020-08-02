<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Computer Science',
            'edition' => '3',
            'publisher' =>'Publicher inc.',
            'price' => 2230
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Mech 2',
            'edition' => '3',
            'publisher' =>'Publicher2 inc.',
            'price' => 1230
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Mech 1',
            'edition' => '3',
            'publisher' =>'Publicher3 inc.',
            'price' => 930
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Pure Maths 2',
            'edition' => '7',
            'publisher' =>'Publicher4 inc.',
            'price' => 830
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Pure Maths 1',
            'edition' => '5',
            'price' => 730
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Stats 2',
            'edition' => '3',
            'price' => 630
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Stats 1',
            'edition' => '3',
            'price' => 530
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Biology',
            'edition' => '21',
            'publisher' =>'Publicher9 inc.',
            'price' => 430
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Chemistry',
            'edition' => '31',
            'publisher' =>'Publicher12 inc.',
            'price' => 330
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Physics',
            'edition' => '13',
            'publisher' =>'Publicher11 inc.',
            'price' => 130
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Bussness Studies',
            'edition' => '4',
            'publisher' =>'Publicher19 inc.',
            'price' => 400
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Accounting',
            'edition' => '9',
            'publisher' =>'Publicher101 inc.',
            'price' => 300
        ]);
        Book::create([
            'cover' => 'https://www.gceguide.xyz/files/2016/05/cambridge-as-a-level-computer-science.png',
            'title' => 'Economics',
            'edition' => '3',
            'price' => 200
        ]);
    }
}
