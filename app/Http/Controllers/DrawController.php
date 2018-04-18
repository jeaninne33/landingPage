<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Draw;
use App\Participant;
use Illuminate\Support\Facades\DB;


class DrawController extends Controller
{
    /**
     * Display pagina. a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()

    {
     $departament=Participant::departament();
     $participants = Participant::latest()->paginate(10);
        return view('draws.index',compact('participants','departament'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	 $departament=Participant::departament();
    	 /*echo '<pre>';
    	 var_dump( $departament);
    	 echo '<pre>';
    	 die;*/
        return view('draws.create', compact('draws', 'departament'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responsess
     */
    public function store(Request $request)
    {

        request()->validate([
        	'document' => 'required|numeric',
        	'name' => 'required|alpha',
        	'lastname' => 'required|alpha',
            'email' => 'required|email',
            'phone'=>'required|numeric',
            'id_depeartament'=>'required',
            'id_city'=>'required',
        ]);
        $draw = Draw::where('status','like','Activo')->first();;
        
        if($draw){
        	$draw_id=$draw->id;
        }else{
        	$drawsCount=Draw::all()->count();
        	$id=$drawsCount+1;
        	$draw= new Draw;
        	$draw->name="Sorteo # $id";
        	$draw->status='Activo';
        	$draw->created_at=date('Y-m-d H:i:s');
        	$draw->save();
        	$draw_id=$draw->id;
        }
        $data=$request->all();
        $data['draw_id']=$draw_id;
        $participant=Participant::create($data);
      
        $countParticipants=Participant::where('draw_id',$draw_id)->count();
        $text="";
        if($countParticipants>=5){//para asignar el ganador
        	$aleatorio=rand(1 , $countParticipants);
        	$all=Participant::where('draw_id', $draw_id)->get()->all();
        	$ganador=$all[$aleatorio-1]->id;
        	$draw->win_id=$ganador;
        	$draw->status='Cerrado';
        	$draw->save();
        	$win=Participant::where('id', $ganador)->first();
        	$text="    ".$draw->name." Finalizado, el ganador es: ".strtoupper ( $win->name)." ".strtoupper ($win->lastname).". Cédula: ".$win->document;
        }
        return redirect()->route('draws.index')
                        ->with('success','Concursante almacenado Exitosamente. '.$text);
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
