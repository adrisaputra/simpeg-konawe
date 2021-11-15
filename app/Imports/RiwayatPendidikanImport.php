<?php

namespace App\Imports;

use App\Models\RiwayatPendidikan;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RiwayatPendidikanImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            
            if($row[8]==""){
                $tanggal_lulus = "0000-00-00";
            } else {
                $tanggal_lulus = Date::excelToDateTimeObject($row[8]);
            }

            RiwayatPendidikan::create([
                'id_orang' => $row[0],
                'id_pegawai' => $row[1],
                'nip' => $row[2],
                'nama_pegawai' => $row[3],
                'id_tingkat_pendidikan' => $row[4],
                'nama_tingkat_pendidikan' => $row[5],
                'id_pendidikan' => $row[6],
                'nama_pendidikan' => $row[7],
                'tanggal_lulus' => $tanggal_lulus,
                'tahun_lulus' => $row[9],
                'no_ijazah' => $row[10],
                'nama_sekolah' => $row[11],
                'gelar_depan' => $row[12],
                'gelar_belakang' => $row[13],
                'pendidikan_pertama' => $row[14],
                'user_id' => Auth::user()->id,
            ]);

        }
    }
}
