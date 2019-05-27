<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Task::class)->create([
            'nome'=>'Estudar php 7',
            'status' => '1'
        ]);

        factory(App\Models\Task::class)->create([
            'nome'=>'Javiscript',
            'status' => '1'
        ]);

        factory(App\Models\Task::class)->create([
            'nome'=>'Css',
            'status' => '1'
        ]);
    }
}
