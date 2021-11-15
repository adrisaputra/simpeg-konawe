<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;

class PengaturanController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    ## Tampikan Data
    public function index()
    {
        $title = 'Pengaturan';
        $pengaturan = DB::table('pengaturan_tbl')->find(1);
        $view=view('admin.pengaturan.edit', compact('title','pengaturan'));
        $view=$view->render();
        return $view;
    }

    
    ## Edit Data
    public function update(Request $request, Pengaturan $pengaturan)
    {
        $this->validate($request, [
            'logo_kecil' => 'mimes:jpg,jpeg,png|max:500',
            'logo_besar' => 'mimes:jpg,jpeg,png|max:500',
            'background_login' => 'mimes:jpg,jpeg,png|max:500',
            'background_sidebar' => 'mimes:jpg,jpeg,png|max:500',
            'layout' => 'required',
            'skin' => 'required'
        ]);
        
        if($request->file('logo_kecil') && $pengaturan->logo_kecil){
            $pathToYourFile = public_path('upload/pengaturan/'.$pengaturan->logo_kecil);
            if(file_exists($pathToYourFile))
            {
                unlink($pathToYourFile);
            }
        }

        if($request->file('logo_besar') && $pengaturan->logo_besar){
            $pathToYourFile = public_path('upload/pengaturan/'.$pengaturan->logo_besar);
            if(file_exists($pathToYourFile))
            {
                unlink($pathToYourFile);
            }
        }

        if($request->file('background_login') && $pengaturan->background_login){
            $pathToYourFile = public_path('upload/pengaturan/'.$pengaturan->background_login);
            if(file_exists($pathToYourFile))
            {
                unlink($pathToYourFile);
            }
        }

        if($request->file('background_sidebar') && $pengaturan->background_sidebar){
            $pathToYourFile = public_path('upload/pengaturan/'.$pengaturan->background_sidebar);
            if(file_exists($pathToYourFile))
            {
                unlink($pathToYourFile);
            }
        }

		$pengaturan->fill($request->all());
		
		if($request->file('logo_kecil') == ""){}
    	else
    	{	
            $filename = time().'1.'.$request->logo_kecil->getClientOriginalExtension();
            $request->logo_kecil->move(public_path('upload/pengaturan'), $filename);
            $pengaturan->logo_kecil = $filename;
		}
		
		if($request->file('logo_besar') == ""){}
    	else
    	{	
            $filename = time().'2.'.$request->logo_besar->getClientOriginalExtension();
            $request->logo_besar->move(public_path('upload/pengaturan'), $filename);
            $pengaturan->logo_besar = $filename;
		}
		
		if($request->file('background_login') == ""){}
    	else
    	{	
            $filename = time().'3.'.$request->background_login->getClientOriginalExtension();
            $request->background_login->move(public_path('upload/pengaturan'), $filename);
            $pengaturan->background_login = $filename;
		}
		
		if($request->file('background_sidebar') == ""){}
    	else
    	{	
            $filename = time().'4.'.$request->background_sidebar->getClientOriginalExtension();
            $request->background_sidebar->move(public_path('upload/pengaturan'), $filename);
            $pengaturan->background_sidebar = $filename;
		}
		
		$pengaturan->user_id = Auth::user()->id;
    	$pengaturan->save();
		
        activity()->log('Ubah Data Pengaturan');
		return redirect('/pengaturan')->with('status', 'Data Berhasil Diubah');
    }
}
