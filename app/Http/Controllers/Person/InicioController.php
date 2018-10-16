<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Session;
use App\SvLog;
use App\detallVenta;
use App\Product;
use App\Ventum;
use App\Proveedor;
use App\Cliente;
use App\Almacen;

class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('person', ['except' => 'logout']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacen = Almacen::findOrFail(1);

        $perPage = 5;

        $carbon = Carbon::now(new \DateTimeZone('America/Guayaquil'));
        $fecha_venta = $carbon->now()->format('Y-m-d');
        $year = $carbon->now()->format('Y');
        $month = $carbon->now()->format('m');

        $count_ventas = Ventum::where('fecha', $fecha_venta)->count();

        if($almacen->min_prodinventario > 0){
            $productos_bajoonventario = Product::where('cantidad','<=',$almacen->min_prodinventario)->count();
            $productos = Product::where('cantidad','<=',$almacen->min_prodinventario)->paginate($perPage);
        }else{
            $productos_bajoonventario = '';
            $productos = '';
        }
        
        
        
        $productos_total = Product::where('activo','1')->count();

        $valor_ventas = Ventum::where('fecha', $fecha_venta)->sum('total');

        $total_ingresos = Product::whereYear('products.fecha_ingreso','=',$year)
            ->whereMonth('products.fecha_ingreso','=',$month)
            ->get();

            if (count($total_ingresos) > 0) {
                $acumula=0;
                    foreach ($total_ingresos as $ingresos) {
                        $suma = ($ingresos->pre_compra*$ingresos->compras);
                        $acumula = $suma + $acumula;
                    }
            }else{
                $acumula = 0;
            }
        

        $total_egresos = detallVenta::whereYear('detall_ventas.fecha_egreso','=',$year)
            ->whereMonth('detall_ventas.fecha_egreso','=',$month)
            ->get();


        if (count($total_egresos)>0) {
            $acumulaegreso=0;
            foreach ($total_egresos as $egresos) {
                $sumaegreso = ($egresos->precio*$egresos->cant);
                $acumulaegreso = $sumaegreso + $acumulaegreso;
            }
        }else{
            $acumulaegreso = 0;
        }

        $proveedores = Proveedor::where('status','1')->count();        
        $clientes = Cliente::where('activo','1')->count();   

            $ventas = Ventum::orderBy('num_venta','DESC')->where('fecha', $fecha_venta)->paginate($perPage);    

        return view('person.home',compact('fecha_venta','count_ventas','productos_bajoonventario','valor_ventas','productos_total','productos','acumula','acumulaegreso','proveedores','clientes','ventas'));
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

    protected function guard()
    {
        return Auth::guard('person');
    }

}
