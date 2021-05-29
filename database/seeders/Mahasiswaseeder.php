<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class Mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi ="1461900224";
        $mhs1->nama_mhs = "budikol";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi ="14619990224";
        $mhs2->nama_mhs = "budikxvol";
        $mhs2->save();

    }
}
