<?php

use Illuminate\Database\Seeder;
use App\chargestax;
class chargestaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return chargestax::create([
            'servicetax' => 0.05,
            'deliverytax' => 0.09,
        ]);
    }
}
