<?php

namespace App\Http\Controllers;

use App\Http\Livewire\WelcomeD;
use App\Models\Admin;
use App\Models\CentralUser;
use App\Models\Certificado;
use App\Models\Documento;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDO;

class AdminController extends Controller
{

 protected $guard='admins';


    public function initContent(){
        return view('admin.login');
    }

    public function initRegister(){
        return view('admin.register');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        $credentials= $request->only('email','password');

        if(auth('admins')->attempt($credentials)){
            return redirect()->route('admdashboard');
        }else{
            return redirect()->route('admlogin');
        }

    }

    
    public function authdestroy()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('home');
    }

    public function register(Request $request){

         Admin::create(['name'=>$request['name'],'email'=>$request['email'],'password'=> Hash::make($request['password'])]);
         return redirect()->route('admlogin');
    }


    public function welcome($uid = null){
       
        return view('welcome')->with(['uid' => $uid]);
        
    }
        
    

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function AdminModule(){
        return view('admin.managemodule');
    }

    public function AdminModuleLec($mod){
        return view('admin.managemodlecs')->with(['mod'=>$mod]);
    }

    public function AdminModuleTest($mod){
        return view('admin.managemoduletest')->with(['mod'=>$mod]);
    }


    public function AdminLeccion($lec){
         return view('admin.manageleccion')->with(['lec'=>$lec]);
    }

    public function AdminCertificado(){
        return view('admin.managecertificado');
   }

   public function UploadCertificado(Request $request){

       $cert=null;

       if($request->hasFile('plantilla')){

        try{

            $cert=Certificado::findOrFail($request['mod_id']);
            $cert['file']= $request->file('plantilla')->store('certificacion');
            if($request['version']!=null){
                Certificado::where('id',$cert['id'])->delete();
                Certificado::create(['file'=> $request->file('plantilla')->store('certificacion'),'modulo_id'=> $request['mod_id'],'version'=> $request['version']]);
            }


           }catch(ModelNotFoundException $e){
            if($request['version']!=null){
                Certificado::create(['file'=> $request->file('plantilla')->store('certificacion'),'modulo_id'=> $request['mod_id'],'version'=>$request['version']]);
            }

           }

       }

       return redirect()->back();
   }

   public function AdminPoliticas(){
    return view('admin.politicas');
   }

   public function UploadPoliticas(Request $request){


    if($request['editor']!=null  && $request['version']!=null){
        try{
           $document= Documento::where('nombre',$request['nombre'])->firstOrFail();
           Documento::where('id',$document['id'])->delete();
           Documento::create(['nombre'=>$request['nombre'],'contenido'=>$request['editor'],'version'=>$request['version']]);
        }catch(ModelNotFoundException $e){
            Documento::create(['nombre'=>$request['nombre'],'contenido'=>$request['editor'],'version'=>$request['version']]);
        }

    }
    return redirect()->back();
   }

   public function AdminHabeas(){
    return view('admin.habeas');
   }

   public function UploadHabeas(Request $request){


    if($request['editor']!=null  && $request['version']!=null){
        try{
           $document= Documento::where('nombre',$request['nombre'])->firstOrFail();
           Documento::where('id',$document['id'])->delete();
           Documento::create(['nombre'=>$request['nombre'],'contenido'=>$request['editor'],'version'=>$request['version']]);
        }catch(ModelNotFoundException $e){
            Documento::create(['nombre'=>$request['nombre'],'contenido'=>$request['editor'],'version'=>$request['version']]);
        }

    }
    return redirect()->back();
   }

   public function AdminContrato(){
    return view('admin.contrato');
   }

   public function UploadContrato(Request $request){

    if($request['editor']!=null  && $request['version']!=null){
        try{
           $document= Documento::where('nombre',$request['nombre'])->firstOrFail();
           Documento::where('id',$document['id'])->delete();
           Documento::create(['nombre'=>$request['nombre'],'contenido'=>$request['editor'],'version'=>$request['version']]);
        }catch(ModelNotFoundException $e){
            Documento::create(['nombre'=>$request['nombre'],'contenido'=>$request['editor'],'version'=>$request['version']]);
        }

    }
    return redirect()->back();
   }

}
