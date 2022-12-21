<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Se agrega el modelo
use App\Models\Producto;

class ProductoController extends Controller
{

    //funcion del control
    public function nuevo(){
        $product= new Producto();
        $product->nombre="Usuario";
        $product->intereses="2.6689898";
        $product->cantidadsinsigno="95";
        $product->save();
        echo "nuevo usuario creado";
    }
    public function todos()
    {
        return Producto::all();
    }
    public function primero()
    {
        $resultado= Producto::find(1);
        return dd($resultado);
    }
    public function where()
    {
        return Producto::where("nombre","like","a%")->get();
    }
    public function update()
    {
        $resultado= Producto::find(2);
        $resultado->nombre="segundo";
        $resultado->save();
        return "se actualizo el nombre del segundo registro";
    }
    public function del()
    {
        $resultado= Producto::find(1);
        $resultado->delete();
        return "se borro el primer registro";
    }


}

