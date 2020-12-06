<?php

namespace App\Http\Controllers;

use App\Semanas;
use App\Cliente;
use App\Cliente_semana;
use App\Pagos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SemanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cliente_semana = Cliente_semana::select('cliente_id')->groupBy(['cliente_id'])->get();
        $semanas = Cliente_semana::orderBy('semana_id','ASC')->get();
        return view('Semanas.index', compact('cliente_semana','semanas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $fpagos = new Carbon('next monday');
        $pagos = Pagos::all();
        $cliente = Cliente::all();
                $nombre = $request->get('nombre');
                $tarjeta = $request->get('tarjeta');
                //return $elect;
                if(isset($nombre)){
                    $cliente = Cliente::orderBy('id', 'DESC')
                    ->nombre($nombre)
                    ->tarjeta($tarjeta)
                    ->first();
                        if(!isset($cliente)){
                            $cliente = new Cliente();
                      return view('Semanas.create', compact('cliente','pagos','fpagos'));
                            }
                    return view('Semanas.create', compact('cliente','pagos','fpagos'));
                }
                else{
                    $cliente = new Cliente();
                return view('Semanas.create', compact('cliente','pagos','fpagos'));
                }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->fecha as $item => $value ) {
            $data = array(
                'fecha' => $request->fecha[$item],
                'nombre' => $request->nombre[$item],
                'created_at' => now(),
                //'quantity' => $request->quantity[$item],
            );
            Semanas::insert($data);
        }
            $semanas = Semanas::latest()->orderBy('id', 'desc')
            ->take($request->input('cont'))
            ->get();

        foreach($semanas as $i => $s)
        {
            $array = array(
                'cliente_id' => $request->cliente_id,
                'semana_id' => $s->id,
                'pagos_id' => $request->pago_id
            );
            Cliente_semana::insert($array);
           // $cliente_semana = new Cliente_semana;
        }
        return redirect()->route('semanas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */
    public function show(Semanas $semanas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */
    public function edit($semanas)
    {
        $semanas = Cliente_semana::findOrFail($semanas);
        return view('Semanas.edit', compact('semanas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$semanas)
    {
        $semana = Cliente_semana::findOrFail($semanas);
        $datepago = Carbon::parse($semana->getSemana->fecha);
        $now = now();
            //return now()->toDateString();
        if ($now->lt($datepago)) {
            $semana->status = '1';
            $semana->save();
            return redirect()->route('semanas.index');
        }elseif($now->gte($datepago)){
            $semana->status = '2';
            $semana->save();
            return redirect()->route('semanas.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semanas $semanas)
    {
        //
    }
}
