<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
//si no se define, Model busca en la bd la tabla en plural ("productos")
{
    //definicion base de datos (opc)
   protected $table="tabladeproductos";

   //Activa o desactiva fechas
   public $timestamps=false;

    //los campos que se visualizan en consultas
    protected $fillable = [
       
    ];
    //los campos ocultos en consultas
    protected $hidden = ['created_at','updated_at'];





}
