<?php

namespace App\Imports;

use App\Models\Pegawai;
use App\Models\RiwayatKepangkatan;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PegawaiImport implements ToCollection
{
    public function collection(Collection $rows)
    {

        foreach ($rows as $row) 
        {
            // if($row[9]=="Golongan I/a"){
            //     $jenis_golongan = 1;
            //     $nama_pangkat = 'Juru Muda';
            // } else if($row[9]=="Golongan I/b"){
            //     $jenis_golongan = 2;
            //     $nama_pangkat = 'Juru Muda  Tingkat 1';
            // } else if($row[9]=="Golongan I/c"){
            //     $jenis_golongan = 3;
            //     $nama_pangkat = 'Juru';
            // } else if($row[9]=="Golongan I/d"){
            //     $jenis_golongan = 4;
            //     $nama_pangkat = 'Juru Tingkat 1';
            // } else if($row[9]=="Golongan II/a"){
            //     $jenis_golongan = 5;
            //     $nama_pangkat = 'Pengatur Muda';
            // } else if($row[9]=="Golongan II/b"){
            //     $jenis_golongan = 6;
            //     $nama_pangkat = 'Pengatur Muda Tingkat 1';
            // } else if($row[9]=="Golongan II/c"){
            //     $jenis_golongan = 7;
            //     $nama_pangkat = 'Pengatur';
            // } else if($row[9]=="Golongan II/d"){
            //     $jenis_golongan = 8;
            //     $nama_pangkat = 'Pengatur Tingkat 1';
            // } else if($row[9]=="Golongan III/a"){
            //     $jenis_golongan = 9;
            //     $nama_pangkat = 'Penata Muda';
            // } else if($row[9]=="Golongan III/b"){
            //     $jenis_golongan = 10;
            //     $nama_pangkat = 'Penata Muda Tingkat 1';
            // } else if($row[9]=="Golongan III/c"){
            //     $jenis_golongan = 11;
            //     $nama_pangkat = 'Penata';
            // } else if($row[9]=="Golongan III/d"){
            //     $jenis_golongan = 12;
            //     $nama_pangkat = 'Penata Tingkat 1';
            // } else if($row[9]=="Golongan IV/a"){
            //     $jenis_golongan = 13;
            //     $nama_pangkat = 'Pembina';
            // } else if($row[9]=="Golongan IV/b"){
            //     $jenis_golongan = 14;
            //     $nama_pangkat = 'Pembina Tingkat 1';
            // } else if($row[9]=="Golongan IV/c"){
            //     $jenis_golongan = 15;
            //     $nama_pangkat = 'Pembina Utama Muda';
            // } else if($row[9]=="Golongan IV/d"){
            //     $jenis_golongan = 16;
            //     $nama_pangkat = 'Pembina Utama Madya';
            // }  else if($row[9]=="Golongan IV/e"){
            //     $jenis_golongan = 17;
            //     $nama_pangkat = 'Pembina Utama';
            // }   
            
            // if($row[5]==""){
            //     $tanggal_lahir = "0000-00-00";
            // } else {
            //     $tanggal_lahir = Date::excelToDateTimeObject($row[5]);
            // }

            // if($row[17]==""){
            //     $tanggal_npwp = "0000-00-00";
            // } else {
            //     $tanggal_npwp = Date::excelToDateTimeObject($row[17]);
            // }

            // if($row[36]==""){
            //     $tanggal_meninggal = "0000-00-00";
            // } else {
            //     $tanggal_meninggal = Date::excelToDateTimeObject($row[36]);
            // }

            // if($row[37]==""){
            //     $tanggal_ket_dokter = "0000-00-00";
            // } else {
            //     $tanggal_ket_dokter = Date::excelToDateTimeObject($row[37]);
            // }

            // if($row[41]==""){
            //     $tanggal_ket_narkoba = "0000-00-00";
            // } else {
            //     $tanggal_ket_narkoba = Date::excelToDateTimeObject($row[41]);
            // }

            // if($row[43]==""){
            //     $tanggal_ket_kelakukan_baik = "0000-00-00";
            // } else {
            //     $tanggal_ket_kelakukan_baik = Date::excelToDateTimeObject($row[43]);
            // }

            Pegawai::create([
                'id_orang' => $row[0],
                'nip' => $row[1],
                'nama_pegawai' => $row[2],
                'id_tempat_lahir' => $row[3],
                'tempat_lahir' => $row[4],
                'tanggal_lahir' => date('Y-m-d', strtotime($row[5])),
                'jenis_kelamin' => $row[6],
                'nomor_dokumen' => $row[7],
                'no_hp' => $row[8],
                'email' => $row[9],
                'alamat' => $row[10],
                'no_npwp' => $row[11],
                'id_jenis_kawin' => $row[12],
                'nama_jenis_kawin' => $row[13],
                'id_pendidikan' => $row[14],
                'nama_pendidikan' => $row[15],
                'id_agama' => $row[16],
                'nama_agama' => $row[17],
                // 'id_ibu' => $row[24],
                // 'nama_ibu' => $row[25],
                // 'id_ayah' => $row[26],
                // 'nama_ayah' => $row[27],
                // 'id_jenis_anak' => $row[28],
                // 'nama_jenis_anak' => $row[29],
                // 'anak_tanggungan' => $row[30],
                // 'hak_pensiun' => $row[31],
                'gelar_depan' => $row[18],
                'gelar_belakang' => $row[19],
                // 'status_hidup' => $row[34],
                // 'akta_meninggal' => $row[35],
                // 'tanggal_meninggal' => $tanggal_meninggal ,
                // 'tanggal_ket_dokter' => $tanggal_ket_dokter,
                // 'no_ket_dokter' => $row[38],
                // 'no_ket_institusi' => $row[39],
                // 'no_ket_narkoba' => $row[40],
                // 'tanggal_ket_narkoba' => $tanggal_ket_narkoba,
                // 'no_ket_kelakuan_baik' => $row[42],
                // 'tanggal_ket_kelakukan_baik' => $tanggal_ket_kelakukan_baik,
                // 'karis_karsu' => $row[44],
                'mk_tahun' => $row[20],
                'mk_bulan' => $row[21],
                'user_id' => Auth::user()->id,
            ]);

            // RiwayatKepangkatan::create([
            //     'pegawai_id' => $row[10],
            //     'golongan' => $row[9],
            //     'jenis_golongan' =>  $jenis_golongan,
            //     'nama_pangkat' => $nama_pangkat
            // ]);

            // User::create([
            //     'name' => $row[0],
            //     'email' => $row[0].'@gmail.com',
            //     'password' =>  Hash::make($row[0]),
            //     'group' => 3
            // ]);
        }

    }
}
