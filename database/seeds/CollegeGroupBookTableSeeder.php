<?php

use Illuminate\Database\Seeder;
use App\Models\CollegeGroupBook;

class CollegeGroupBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 1,
            'book_id' => 3,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 1,
            'book_id' => 1,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 1,
            'book_id' => 2,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 1,
            'book_id' => 4,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 1,
            'book_id' => 5,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 1,
            'book_id' => 6,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 2,
            'book_id' => 3,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 2,
            'book_id' => 6,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 2,
            'book_id' => 4,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 2,
            'book_id' => 8,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 2,
            'book_id' => 7,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 3,
            'book_id' => 3,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 3,
            'book_id' => 6,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 3,
            'book_id' => 1,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 3,
            'book_id' => 4,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 3,
            'book_id' => 9,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 4,
            'book_id' => 9,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 4,
            'book_id' => 3,
        ]);
        CollegeGroupBook::create([
            'college_id' => 1,
            'group_id' => 4,
            'book_id' => 1,
        ]);
        CollegeGroupBook::create([
            'college_id' => 2,
            'group_id' => 1,
            'book_id' => 1,
        ]);
        CollegeGroupBook::create([
            'college_id' => 2,
            'group_id' => 1,
            'book_id' => 2,
        ]);
        CollegeGroupBook::create([
            'college_id' => 2,
            'group_id' => 2,
            'book_id' => 3,
        ]);
        CollegeGroupBook::create([
            'college_id' => 2,
            'group_id' => 1,
            'book_id' => 3,
        ]);
        CollegeGroupBook::create([
            'college_id' => 2,
            'group_id' => 1,
            'book_id' => 6,
        ]);
        CollegeGroupBook::create([
            'college_id' => 2,
            'group_id' => 1,
            'book_id' => 8,
        ]);
    }
}
