<?php
namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Modelo\admin\User;
use App\Modelo\admin\Role;
use Gate;
use Session;
use Redirect;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mirole()
    {
        return $this->belongsTo('Gestor\roles', 'name');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
       $users = User::all();
       return view('admin.usuario.index',['users'=>$users]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.usuario.agregar',[
            'roles'=>$roles
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validateData($request);
        $data = $request->all();
        $user = User::create([
           'name'     =>$data['nombre'],
           'email'    =>$data['email'],
           'edad'     =>$data['edad'],
           'telefono' =>$data['telefono'],
           'genero'   =>$data['genero'],
           'productos_activados'=>'no',
           'password' => bcrypt($data['password']),
       ]);
       $adminRole = Role::where('name',$data['tipo_usuario'])->first();
       $user->roles()->attach($adminRole);
       return redirect(route('admin.users.index'))->with('success','Usuario agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       $show       = User::findOrFail($user->id);
       $roles      = Role::all();
       $actualroll = $user->roles()->get()->pluck('name')[0];
        return view('admin.usuario.edit',[
            'user'=>$user,
            'roles'=>$roles,
            'aeditar'=>$show,
            'actualroll'=>$actualroll
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
            $this->validateData($request);
            $data = $request->all();
            $user->fill($data);
            $user->roles()->sync($request->tipo_usuario);
           
     if($user->update()){
        return redirect(route('admin.users.index'))->with('success','Usuario '.$user->name.' actualizado con exito');
     }else{
        return redirect(route('admin.users.index'))->with('error','Usuario no actualizado');
     }
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
           $user->roles()->detach();
           $user->delete();
           return redirect(route('admin.users.index'))->with('success','Usuario eliminado correctamente');
    }

    private function validateData($data){

        return $this->validate($data,[
            'nombre'     => ['required'],
            'email'      => ['required'],
            'password'   => ['required'],
            'telefono'   => ['required'],
            'edad'       => ['required'],
            'genero'     => ['required'],
            'tipo_usuario'=>['required']
        ],
        [
            'nombre.required'=>'Nombre requerido',
            'email.required'=>'E-mail requerido',
            'password.required'=>'Contraseña requerido',
            'telefono.required'=>'Teléfono requerido',
            'edad.dimensions'=>'Edad requerido',
            'genero.required'=>'Genero requerido',
            'tipo_usuario.required'=>'Rol requerido'
        ]);
    }



}
