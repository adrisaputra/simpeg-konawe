<?php

namespace App\Imports;

use App\Models\RiwayatGolongan;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RiwayatGolonganImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            
            if($row[10]==""){
                $tanggal_sk = "0000-00-00";
            } else {
                $tanggal_sk = Date::excelToDateTimeObject($row[10]);
            }

            if($row[12]==""){
                $tanggal_bkn = "0000-00-00";
            } else {
                $tanggal_bkn = Date::excelToDateTimeObject($row[12]);
            }

            RiwayatGolongan::create([
                'id_orang' => $row[0],
                'id_pegawai' => $row[1],
                'nip' => $row[2],
                'nama_pegawai' => $row[3],
                'kode_jenis_kp' => $row[4],
                'jenis_kp' => $row[5],
                'id_golongan' => $row[6],
                'golongan' => $row[7],
                'pangkat' => $row[8],
                'no_sk' => $row[9],
                'tanggal_sk' => $tanggal_sk,
                'no_bkn' => $row[11],
                'tanggal_bkn' => $tanggal_bkn,
                'tmt_golongan' => $row[13],
                'jumlah_angka_kredit_utama' => $row[14],
                'jumlah_angka_kredit_tambahan' => $row[15],
                'mk_tahun' => $row[16],
                'mk_bulan' => $row[17],
                'user_id' => Auth::user()->id,
            ]);

        }
    }
}
