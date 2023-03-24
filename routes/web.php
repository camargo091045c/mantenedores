<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',function(){
return view('clientes');
});
Route::post('/clientes',function(Request $request){
$validator=validator::make($request->all(),[
    'name'=>'required|max:70',
    'ruc'=>'required|digits:11',
    'phone'=>'min:6',
    'email'=>'email'
]);
if($validator->fails())
{
    return redirect('/clientes')
    ->withInput()
    ->withErrors($validator);
}
$cliente=new Client;
$cliente->name=$request->name;
$cliente->ruc=$request->ruc;
$cliente->address=$request->address;
$cliente->phone=$request->phone;
$cliente->email=$request->email;
$cliente->save();
return redirect('/clientes');
});

/*Route::delete('/cliente/{id}',function($id){
    
    
})*/
