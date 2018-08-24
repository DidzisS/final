<?php



//Route::get('/', function () {

  // $raksti = DB::table('raksti')->get($photo_name);

    //return view('start',compact('raksti'));
//});

Route::get('/', function () {
$titles = DB::table('raksti')->pluck('photo_name');

return view('start',compact('raksti'));});

/*foreach ($titles as $title) {
    echo $title;
}}; */



//Route::get('/{rakst}', function($id) {
    
  //  $raksti =DB::table('raksti')->find($id);

    //return view('start'->compact('rakst'));
//});

