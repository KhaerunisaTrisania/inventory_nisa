<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hello World";
});

Route::get('/name/{name}', function ($name) {
    return "Hello " . $name;
});

Route::get('/data/{data?}', function ($data = "Kosong") {
    return "Isi Parameter = " . $data;
});

Route::get('/name/{name}', function ($name) {
    return "Hello " . $name;
})->where('name', '[A-Za-z]+');

Route::get('/mahasiswa/{nrp}/{nama}', function ($nrp, $nama) {
    return $nrp . " " . $nama;
})->where([
    'name' => '[A-Za-a]+',
    'nrp' => '[0-9]+',
]);

Route::get('/cekbilangan/{bilangan}', function ($bilangan)  {
    if($bilangan % 2 == 0){
        return  "Bilangan genap";
    }else{
        return "Bilangan ganjil";
}
});

Route::get('/cekbilangan/{bilangan}', function ($bilangan)  {
    for($i = 0 ; $i <= $bilangan; $i++){
    if($bilangan % 2 == 0){
        echo  "{$i} genap";
        echo "</br>";
    }else{
        echo "{$i} ganjil";
        echo "</br>";
}
}
});

Route::get('/person', 'PersonController@index');


Route::get('/homepage', function () {
    return view('home', ["name" => "Khaerunisa Trisania"]);
});

Route::get('/sendData',[PersonController::class,'sendData']);

