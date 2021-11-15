<?php

namespace App\Imports;

use App\Models\RiwayatOrangTua;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RiwayatOrangTuaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            
            RiwayatOrangTua::create([
                'id_pegawai' => $row[0],
                'nip' => $row[1],
                'nama_pegawai' => $row[2],
                'id_ibu' => $row[3],
                'nama_ibu' => $row[4],
                'id_ayah' => $row[5],
                'nama_ayah' => $row[6],
                'id_jenis_anak' => $row[7],
                'jenis_anak' => $row[8],
                'status_hidup' => $row[9],
                'user_id' => Auth::user()->id,
            ]);

        }
    }
}
