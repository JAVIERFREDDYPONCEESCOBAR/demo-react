<?php
namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Log;
use App\Modelo\admin\User;
use App\Modelo\admin\Role;
use App\Modelo\admin\Products;
use App\Modelo\admin\Productoscliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosClienteController extends Controller
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
        $Products = Products::all();
        return view('admin.product.index',
        ['products'  =>$Products,
        'user_nombre'=>$request->user_name_modificar,
        'user_id'    =>$request->user_id_modificar
        ]);
    
    }

    public function agregar_productos_usuario()
    {    
        $Products = 'freddy funciona';
        $Productscliente = Productoscliente::all();
        return view('admin.product.index',['products'=>$Products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
