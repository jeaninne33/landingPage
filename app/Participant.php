<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
     //
     protected $table = 'participants';
     protected $fillable = ['document', 'name', 'lastname',
     'phone','email','id_depeartament', 'draw_id', 'id_city'];

    public function draw() {
	    return $this->belongsTo('App\Draw','draw_id','id');
	}

	public static function departament(){
	  	$departament=[
    		['id'=>'1','name'=>'Amazonas'],
    		['id'=>'2','name'=>'Antioquia'],
    		['id'=>'3','name'=>'Arauca'],
    		['id'=>'4','name'=>'Atlántico'],
    		['id'=>'5','name'=>'Bolívar'],
    		['id'=>'6','name'=>'Boyacá'],
    		['id'=>'7','name'=>'Caldas'],
    		['id'=>'8','name'=>'Caquetá'],
    		['id'=>'9','name'=>'Casanare'],
    		['id'=>'10','name'=>'Cauca'],
    		['id'=>'11','name'=>'Cesar'],
    		['id'=>'12','name'=>'Chocó'],
    		['id'=>'13','name'=>'Córdoba'],
    		['id'=>'14','name'=>'Cundinamarca'],
    		['id'=>'15','name'=>'Guainía'],
    		['id'=>'16','name'=>'Guaviare'],
    		['id'=>'17','name'=>'Huila'],
    		['id'=>'18','name'=>' La Guajira'],
    		['id'=>'19','name'=>'Magdalena'],
    		['id'=>'20','name'=>'Meta'],
    		['id'=>'21','name'=>'Nariño'],
    		['id'=>'22','name'=>'Norte de Santander'],
    		['id'=>'23','name'=>'Putumayo'],
    		['id'=>'24','name'=>'Quindio'],
    		['id'=>'25','name'=>'Risaralda'],
    		['id'=>'26','name'=>'San Andres y Providencia'],
    		['id'=>'27','name'=>'Santander'],
    		['id'=>'28','name'=>'Sucre'],
    		['id'=>'29','name'=>'Tolima'],
    		['id'=>'30','name'=>'Valle del Cauca'],
    		['id'=>'31','name'=>'Vaupés'],
    		['id'=>'32','name'=>'Vichada'],
    	];
    	return $departament;
    	
	}

	public static function city(){
		$citys=[
			['id'=>'1','name'=>'Leticia'],
			['id'=>'2','name'=>'Medellín'],
			['id'=>'3','name'=>'Arauca'],
			['id'=>'4','name'=>'Barranquilla'],
			['id'=>'5','name'=>'Cartagena'],
			['id'=>'6','name'=>'Tunja'],
			['id'=>'7','name'=>'Manizales'], 
			['id'=>'8','name'=>'Florencia'],
			['id'=>'9','name'=>'Yopal'],
			['id'=>'10','name'=>'Popayán'],
			['id'=>'11','name'=>'Valledupar'],
			['id'=>'12','name'=>'Quibdó'],
			['id'=>'13','name'=>'Montería'],
			['id'=>'14','name'=>'Bogotá'],
			['id'=>'15','name'=>'Puerto Inírida'],
			['id'=>'16','name'=>'San José del Guaviare'],
			['id'=>'17','name'=>'Neiva'],
			['id'=>'18','name'=>'Neiva'],
			['id'=>'19','name'=>'Santa Marta'],
			['id'=>'20','name'=>'Villavicencio'],
			['id'=>'21','name'=>'Pasto'],
			['id'=>'22','name'=>'Cúcuta'],
			['id'=>'23','name'=>'Mocoa'],
			['id'=>'24','name'=>'Armenia'],
			['id'=>'25','name'=>'lda- Pereira'],
			['id'=>'26','name'=>'San Andrés'],
			['id'=>'27','name'=>'Bucaramanga'],
			['id'=>'28','name'=>'Sincelejo'],
			['id'=>'29','name'=>'Ibagué'],
			['id'=>'30','name'=>'Cali'],
			['id'=>'31','name'=>'Mitú'],
			['id'=>'32','name'=>'Puerto Carreño']
			];
			return $citys;
	}

	public function findDepartament($depart, $id){
	  	
	  	foreach ($depart as $dp) {
	  		if($dp['id']==$id){
	  			return $dp['name'];
	  		}
	  	}
    	
	}
	public function findCity($citys, $id){
	  	
	  	foreach ($citys as $ct) {
	  		if($ct['id']==$id){
	  			return $ct['name'];
	  		}
	  	}
    	
	}
}
