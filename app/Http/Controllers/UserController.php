<?php

namespace App\Http\Controllers;

use App\Models\User;   //nama model
use App\Models\Pegawai;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    ## Tampikan Data
    public function index()
    {
        $title = "User";
		$user = DB::table('users')->where('status',0)->orderBy('id','DESC')->paginate(10);
		return view('admin.user.index',compact('title','user'));
    }
	
	## Tampilkan Data Search
	public function search(Request $request)
    {
        $title = "User";
        $user = $request->get('search');
		$user = User::where('status',0)->where('name', 'LIKE', '%'.$user.'%')->orderBy('id','DESC')->paginate(10);
		return view('admin.user.index',compact('title','user'));
    }
	
	## Tampilkan Form Create
	public function create()
    {
        $title = "User";
        $view=view('admin.user.create',compact('title'));
        $view=$view->render();
        return $view;
    }
	
	## Simpan Data
	public function store(Request $request)
    {
		$this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'group' => 'required'
		]);
		
        $input['name'] = $request->name;
        $input['email'] = $request->email;
        $input['password'] = Hash::make($request->password);
        $input['group'] = $request->group;
        User::create($input);
		
        activity()->log('Tambah Data User');
		return redirect('/user')->with('status','Data Tersimpan');

    }
	
	## Tampilkan Form Edit
    public function edit(User $user)
    {
        $title = "User";
        $view=view('admin.user.edit', compact('title','user'));
        $view=$view->render();
		return $view;
    }
	
	## Edit Data
    public function update(Request $request, User $user)
    {
        if($request->group==2){
            if($request->password){
                $this->validate($request, [
                    'password' => 'required|string|min:8|confirmed'
                ]);
            } 
        } else {
            if($request->password){
                $this->validate($request, [
                    'name' => 'required|string|max:255',
                    'password' => 'required|string|min:8|confirmed'
                ]);
            } else {
                $this->validate($request, [
                    'name' => 'required|string|max:255'
                ]);
            }
        }
         
		if($request->password){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->group = $request->group;
		} else {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->group = $request->group;
        }
        $user->save();
        
        activity()->log('Ubah Data User dengan ID = '.$user->id);
		return redirect('/user')->with('status', 'Data Berhasil Diubah');
    }

    ## Hapus Data
    public function delete(User $user)
    {
        $user->delete();
        activity()->log('Hapus Data User dengan ID = '.$user->id);
		return redirect('/user')->with('status', 'Data Berhasil Dihapus');
    }

    ## Tampilkan Form Edit
    public function edit_profil(User $user)
    {
        $title = "Profil";
        $view=view('admin.user.profil', compact('title','user'));
        $view=$view->render();
        return $view;
    }

    ## Edit Data
    public function update_profil(Request $request, User $user)
    {
        if($request->get('current-password')){
            if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
                $this->validate($request, [
                    'email' => 'required|email',
                    'foto' => 'mimes:jpg,jpeg,png|max:300',
                    'current-password' => 'string|confirmed'
                ]);
            } 
        }
            
        if($request->get('password')){
            if(!(strcmp($request->get('password'), $request->get('password_confirmation'))) == 0){
                if($request->password){
                    $this->validate($request, [
                        'email' => 'required|email',
                        'password' => 'string|min:8|confirmed'
                    ]);
                }
            } 
        }

        if($request->password){
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:8'
            ]);
        } else {
            $this->validate($request, [
                'email' => 'required|email'
            ]);
        }

        $user->fill($request->all());
        if($request->password){
            $user->password = Hash::make($request->password);
        } else {
            $cek_user = User::where('id', Auth::user()->id)->get();
            $cek_user->toArray();
            $user->password = $cek_user[0]->password;
        }
        
        if($request->file('foto') == ""){}
        else
        {	
            $filename = time().'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('upload/foto'), $filename);
            $user->foto = $filename;
        }
        
        $user->save();
        
        activity()->log('Ubah Data Profil dengan ID = '.$user->id);
        return redirect('/user/edit_profil/'.Auth::user()->id)->with('status', 'Data Berhasil Diubah');
    }
}
