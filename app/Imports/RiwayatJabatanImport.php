<?php

namespace App\Imports;

use App\Models\RiwayatJabatan;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RiwayatJabatanImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            
            if($row[11]==""){
                $tmt_jabatan = "0000-00-00";
            } else {
                $tmt_jabatan = Date::excelToDateTimeObject($row[11]);
            }

            if($row[13]==""){
                $tanggal_sk = "0000-00-00";
            } else {
                $tanggal_sk = Date::excelToDateTimeObject($row[13]);
            }

            if($row[15]==""){
                $tmt_pelantikan = "0000-00-00";
            } else {
                $tmt_pelantikan = Date::excelToDateTimeObject($row[15]);
            }

            RiwayatJabatan::create([
                'id_pegawai' => $row[0],
                'nip' => $row[1],
                'nama_pegawai' => $row[2],
                'id_unor' => $row[3],
                'unor' => $row[4],
                'id_jenis_jabatan' => $row[5],
                'jenis_jabatan' => $row[6],
                'id_jabatan' => $row[7],
                'nama_jabatan' => $row[8],
                'id_esselon' => $row[9],
                'esselon' => $row[10],
                'tmt_jabatan' => $tmt_jabatan,
                'no_sk' => $row[12],
                'tanggal_sk' => $tanggal_sk,
                'id_satuan_kerja' => $row[14],
                'tmt_pelantikan' => $tmt_pelantikan,
                'user_id' => Auth::user()->id,
            ]);

        }
    }
}
