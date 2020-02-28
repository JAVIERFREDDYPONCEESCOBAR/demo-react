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
        $datosUsuario=request()->all();

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
       //  if(Gate::denies('edit-users')){
       //  return redirect(route('admin.usuario.index'));
       //  }
       $show = User::findOrFail($user->id);

        $roles = Role::all();
        return view('admin.usuario.edit',[
            'user'=>$user,
            'roles'=>$roles,
            'aeditar'=>$show
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
        
     $user->roles()->sync($request->roles);
     $user->name  = $request->name;
     $user->email = $request->email;

     if($user->save()){
        $recuest->session()->flash('success', $user->name.'Usuario actualizado con exito');
     }else{
        $recuest->session()->flash('error','Usuario no actualizado');
     }
     
     return redirect()->route('admin.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        dd('Eliminando:'.$user->id);
              //  if(Gate::denies('delete-users')){
             //   return redirect(route('admin.users.index'));
            //    }
           
           
           // $user->roles()->detach();
          //  $user->delete();
         //   return redirect()->route('admin.users.index');
    }

    private function validateData($data){

        return $this->validate($data,[
            'promo_fecha_inicio'       => ['required'],
            'promo_fecha_termino'      => ['required'],
            'periodo'                  => ['required'],
            'plaza'                    => ['required'],
            'imagen'                   => (!$data->id || $data->imagen) ? ['required','image:png,jpeg,jpg','dimensions:width=500','dimensions:height=600'] : ''
        ],
        [

            'periodo.required'=>'Periodo requerido',
            'plaza.required'=>'Plaza requerida',
            'promo_fecha_inicio.required'=>'Fecha requerida',
            'promo_fecha_termino.required'=>'Fecha requerida',
            'imagen.dimensions'=>'La imagen no es de las dimenciones soportadas',
            'imagen.required'=>'Imagen requerida'
        ]);
    }



}
