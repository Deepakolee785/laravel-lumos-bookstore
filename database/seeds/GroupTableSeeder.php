<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'S1',
            'college_id' => 1
        ]);
        Group::create([
            'name' => 'S2',
            'college_id' => 1
        ]); 
        Group::create([
            'name' => 'NS1',
            'college_id' => 1
        ]); 
        Group::create([
            'name' => 'NS2',
            'college_id' => 6
        ]);
        Group::create([
            'name' => 'S1',
            'college_id' => 6
        ]);
        Group::create([
            'name' => 'S2',
            'college_id' => 6
        ]); 
        Group::create([
            'name' => 'NS1',
            'college_id' => 6
        ]); 
        Group::create([
            'name' => 'NS1',
            'college_id' => 6
        ]);  
        Group::create([
            'name' => 'NS2',
            'college_id' => 6
        ]);
        Group::create([
            'name' => 'S1',
            'college_id' => 2
        ]);
        Group::create([
            'name' => 'S2',
            'college_id' => 2
        ]); 
        Group::create([
            'name' => 'NS1',
            'college_id' => 2
        ]); 
        Group::create([
            'name' => 'NS2',
            'college_id' => 2
        ]);
    }
}
