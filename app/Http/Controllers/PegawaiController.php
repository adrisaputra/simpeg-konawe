<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Models\RiwayatPendidikan;   //nama model
use App\Models\RiwayatOrangTua;   //nama model
use App\Models\RiwayatJabatan;   //nama model
use App\Models\RiwayatSkp;   //nama model
use App\Imports\PegawaiImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    ## Tampikan Data
    public function index()
    {
        $title = "Data Pegawai";
        $pegawai = Pegawai::where('status_hapus', 0)->orderBy('nip','ASC')->paginate(25)->onEachSide(1);
        return view('admin.pegawai.index',compact('title','pegawai'));
    }

    ## Tampilkan Data Search
    public function search(Request $request)
    {
        $title = "Data Pegawai";
        $pegawai = $request->get('search');
        $pegawai = Pegawai::where('status_hapus', 0)
                    ->where(function ($query) use ($pegawai) {
                        $query->where('nip', 'LIKE', '%'.$pegawai.'%')
                            ->orWhere('nama_pegawai', 'LIKE', '%'.$pegawai.'%');
                    })
                    ->orderBy('nip','ASC')->paginate(50)->onEachSide(1);
        
        return view('admin.pegawai.index',compact('title','pegawai'));
    }

    ## Data Utama
    public function detail_data_utama(Pegawai $data_utama)
    {
        $title = "Data Utama";
        
        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_utama($data_utama->nip);
            $status = json_encode($sapk['code']);

            if($status==0){
                $sapk   = (object) array("gelarDepan"=>"", "nama"=>"", "gelarBelakang"=>"", "nipBaru"=>"", "tempatLahir"=>"", "tglLahir"=>"", "jenisKelamin"=>"", "golRuangAkhir"=>"", "email"=>"", "nik"=>"");
            } else {
                $sapk   = json_decode($sapk['data']);
            } 

            $success ="border: 1px solid #00a65a;";
            $danger ="border: 1px solid #dd4b39";
            $view=view('admin.data_utama.detail_data_utama ', compact('title','data_utama','sapk','success','danger'));
            $view=$view->render();
            return $view;
        }

    }

    public function data_utama($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/data-utama/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, TRUE);

    }

    ## Orang Tua
    public function detail_orang_tua(Pegawai $data_utama)
    {
        $title = "Data Orang Tua";
        
        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_orang_tua($data_utama->nip);
            $status = json_encode($sapk['code']);

            if($status==0){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else {
                $output = json_encode($sapk['data']);
                $output = json_decode($output);
                $ayah = json_encode($output->ayah);
                $ayah = json_decode($ayah);
                $ibu = json_encode($output->ibu);
                $ibu = json_decode($ibu);
                $orang_tua  = RiwayatOrangTua::where('nip',$data_utama->nip)->first();
                $success ="border: 1px solid #00a65a;";
                $danger ="border: 1px solid #dd4b39";
                $view=view('admin.data_utama.detail_orang_tua ', compact('title','data_utama','orang_tua','ayah','ibu','success','danger'));
                $view=$view->render();
                return $view;
            } 
        }

    }

    public function data_orang_tua($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/data-ortu/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, TRUE);
    }

    ## Pasangan
    public function detail_pasangan(Pegawai $data_utama)
    {
        $title = "Data Pasangan";
        
        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_pasangan($data_utama->nip);
            $status = json_encode($sapk['code']);

            if($status==0){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else {
                $output = json_encode($sapk);
                // echo $output;  
        
                $output2= json_decode($output, TRUE);
                $output2 = json_encode($output2['data']);
                // echo $output2;  
        
                $output3= json_decode($output2, TRUE);
                $output3 = json_encode($output3['listPasangan']);
                // echo $output3;
        
                if($output3=="null"){
                    return redirect()->back()->with('status2','Data Tidak Ditemukan');
                } else {
                    $riwayat_pasangan  = DB::table('riwayat_pasangan_tbl')->where('nip',$data_utama->nip)->get()->toArray();
                    $pasangan= json_decode($output3, TRUE);
                    $pasangan = json_encode($pasangan);
                    $pasangan = json_decode($pasangan,TRUE);
                    // print_r($output4);
                    // $pernikahan = $pasangan[0]['dataPernikahan']['nama'];
                    // $orang = $pasangan[0]['dataOrang']['nama'];

                    $success ="border: 1px solid #00a65a;";
                    $danger ="border: 1px solid #dd4b39";
                    $view=view('admin.data_utama.detail_pasangan', compact('title','data_utama','riwayat_pasangan','pasangan','success','danger'));
                    $view=$view->render();
                    return $view;
                }
                
            } 
        }

    }

    public function data_pasangan($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/data-pasangan/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, TRUE);
    }

    ## Anak
    public function detail_anak(Pegawai $data_utama)
    {
        $title = "Data Anak";
        
        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_anak($data_utama->nip);
            $message = json_encode($sapk['message']);

            if($message=='"Result is empty"'){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else if($message=='"Please contact BKN Web Service administrator at http:\/\/www.bkn.go.id\/"'){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else {
                $status = json_encode($sapk['code']);
                 if($status==0){
                    return redirect()->back()->with('status2','Data Tidak Ditemukan');
                } else {
                    ## Array Ke String
                    $output = json_encode($sapk['data']);

                    ## String Ke Array
                    $output = json_decode($output);
            
                    $anak = json_encode($output->listAnak, TRUE);
                    $anak = json_decode($anak, TRUE);
                    
                    if($anak){
                        $success ="border: 1px solid #00a65a;";
                        $danger ="border: 1px solid #dd4b39";
                        $view=view('admin.data_utama.detail_anak', compact('title','data_utama','anak','success','danger'));
                        $view=$view->render();
                        return $view;
                    } else {
                        return redirect()->back()->with('status2','Data Tidak Ditemukan');
                    }
                }

                // $n = 0;
                // foreach ($anak as $v) {
                //     echo $anak[$n]['nama'], "\n";
                //     $n++;
                // }

            } 
        }

    }

    public function data_anak($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/data-anak/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, TRUE);

    }

    ## Riwayat Golongan
    public function detail_riwayat_golongan(Pegawai $data_utama)
    {
        $title = "Riwayat Golongan";

        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_riwayat_golongan($data_utama->nip);
            $status = json_encode($sapk['code']);

            if($status==0){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else {
                $riwayat_golongan  = DB::table('riwayat_golongan_tbl')->where('nip',$data_utama->nip)->get()->toArray();
                $sapk  =  $sapk['data'];

                $jml_riwayat_golongan = count($riwayat_golongan);
                $jml_sapk = count($sapk);

                if($jml_riwayat_golongan > $jml_sapk){
                    $data = $riwayat_golongan;
                } else if($jml_riwayat_golongan < $jml_sapk){
                    $data =  $sapk;
                } else {
                    $data = $riwayat_golongan;
                }

                $sapk =  collect($sapk)->sortBy('golonganId');
                $sapk = $sapk->values()->all();
                
                $success ="border: 1px solid #00a65a;";
                $danger ="border: 1px solid #dd4b39";
                $view=view('admin.data_utama.detail_riwayat_golongan', compact('title','data_utama','data','riwayat_golongan','sapk','jml_riwayat_golongan','jml_sapk','success','danger'));
                $view=$view->render();
                return $view;
            } 
        }
    }

    public function data_riwayat_golongan($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/rw-golongan/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, TRUE);
        // return $output['data'];
    }

    ## Riwayat Golongan
    public function detail_riwayat_pendidikan(Pegawai $data_utama)
    {
        $title = "Riwayat Pendidikan";

        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_riwayat_pendidikan($data_utama->nip);
            $status = json_encode($sapk['code']);

            if($status==0){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else {
                $riwayat_pendidikan  = DB::table('riwayat_pendidikan_tbl')->where('nip',$data_utama->nip)->get()->toArray();
                $sapk  =  $sapk['data'];

                $jml_riwayat_pendidikan = count($riwayat_pendidikan);
                $jml_sapk = count($sapk);

                if($jml_riwayat_pendidikan > $jml_sapk){
                    $data = $riwayat_pendidikan;
                } else if($jml_riwayat_pendidikan < $jml_sapk){
                    $data =  $sapk;
                } else {
                    $data = $riwayat_pendidikan;
                }

                $sapk =  collect($sapk)->sortBy('tkPendidikanId');
                $sapk = $sapk->values()->all();

                $success ="border: 1px solid #00a65a;";
                $danger ="border: 1px solid #dd4b39";
                $view=view('admin.data_utama.detail_riwayat_pendidikan', compact('title','data_utama','data','riwayat_pendidikan','sapk','jml_riwayat_pendidikan','jml_sapk','success','danger'));
                $view=$view->render();
                return $view;

            } 
        }
    }

    public function data_riwayat_pendidikan($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/rw-pendidikan/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, TRUE);
    }

    ## Riwayat Jabatan
    public function detail_riwayat_jabatan(Pegawai $data_utama)
    {
        $title = "Riwayat Jabatan";

        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_riwayat_jabatan($data_utama->nip);
            $status = json_encode($sapk['code']);

            if($status==0){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else {
                $riwayat_jabatan  = RiwayatJabatan::where('nip',$data_utama->nip)->get();
                $sapk  =  $sapk['data'];
                
                $jml_riwayat_jabatan = count($riwayat_jabatan);
                $jml_sapk = count($sapk);

                if($jml_riwayat_jabatan > $jml_sapk){
                    $data = $riwayat_jabatan;
                } else if($jml_riwayat_jabatan < $jml_sapk){
                    $data =  $sapk;
                } else {
                    $data = $riwayat_jabatan;
                }

                $success ="border: 1px solid #00a65a;";
                $danger ="border: 1px solid #dd4b39";
                $view=view('admin.data_utama.detail_riwayat_jabatan', compact('title','data_utama','data','riwayat_jabatan','sapk','jml_riwayat_jabatan','jml_sapk','success','danger'));
                $view=$view->render();
                return $view;
            } 
        }
        
    }

    public function data_riwayat_jabatan($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/rw-jabatan/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, TRUE);
    }

    
    ## Riwayat Jabatan
    public function detail_riwayat_skp(Pegawai $data_utama)
    {
        $title = "Riwayat Jabatan";

        if($data_utama->nip==NULL){
            return redirect()->back()->with('status2','Data Tidak Ditemukan');
        } else {
            
            $sapk   = $this->data_riwayat_skp($data_utama->nip);
            $status = json_encode($sapk['code']);

            if($status==0){
                return redirect()->back()->with('status2','Data Tidak Ditemukan');
            } else {
                $riwayat_skp  = RiwayatSkp::where('nip',$data_utama->nip)->get();
                $sapk  =  $sapk['data'];
                
                $jml_riwayat_skp = count($riwayat_skp);
                $jml_sapk = count($sapk);

                if($jml_riwayat_skp > $jml_sapk){
                    $data = $riwayat_skp;
                } else if($jml_riwayat_skp < $jml_sapk){
                    $data =  $sapk;
                } else {
                    $data = $riwayat_skp;
                }

                $sapk =  collect($sapk)->sortBy('tahun');
                $sapk = $sapk->values()->all();

                $success ="border: 1px solid #00a65a;";
                $danger ="border: 1px solid #dd4b39";
                $view=view('admin.data_utama.detail_riwayat_skp', compact('title','data_utama','data','riwayat_skp','sapk','jml_riwayat_skp','jml_sapk','success','danger'));
                $view=$view->render();
                return $view;
            } 
        }
        
    }

    public function data_riwayat_skp($nip){

        $token   = json_decode($this->token(), TRUE);
        $token   = $token['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/rw-skp/'.$nip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, TRUE);
    }

	## Import Excel
	public function import_excel(Request $request) 
	{
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		$file = $request->file('file');
 
		$nama_file = rand().$file->getClientOriginalName();
 
		$file->move('public/import',$nama_file);
 
		Excel::import(new PegawaiImport, public_path('/import/'.$nama_file));
		return redirect()->back()->with('status', 'Data Berhasil Diimport');
	}
    
    public function token(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/oauth/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'client_id=konawetr&grant_type=client_credentials',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Basic a29uYXdldHI6NzQwMXRy'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
        
    }

}
