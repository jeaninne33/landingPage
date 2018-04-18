<?php
	use App\Participant;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DrawController@index');

Route::resource('draws','DrawController');

Route::get('/city/{id}',function($id){
  $citys=Participant::city();
  $i=$id-1;
  return Response::json([$citys[$i]]);
});

Route::get('/export-draw', function(){
	return (new App\Exports\ParticipantExport)->download('registros.xlsx');
	//return \Excel::download( new App\Exports\ParticipantImport, 'registros.xlsx');
});
