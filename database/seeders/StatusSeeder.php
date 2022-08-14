<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
                'id'    => 1,
                'status' => 'Publish',
            ],
            [
                'id'    => 2,
                'status' => 'Draft',
            ],
        ];

        Status::insert($status);
    }
}
