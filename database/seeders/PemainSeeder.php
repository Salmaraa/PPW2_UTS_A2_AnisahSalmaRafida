<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemain = Pemain::create([
            // "nama_pemain"=> "Arhan Pratama",
            // "no_punggung"=>"12",
            // "posisi"=>"Penyerang"
        ]);
        Pemain::factory(10)->create();
    }
}
