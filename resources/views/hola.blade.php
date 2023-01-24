
<?php
    //estas implementaciones deberian incluirse en la ruta junto al controlador
    use App\Models\Producto;
    use App\Models\User; ?>

Si quieres redirigir a dashboard agrega /redirigir/9 <br>


@if ($id==9)
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard en url</a><br>
<a href="{{ route('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard en ruta</a>
@endif

<br>
<?php
$nuevo = User::where('id','>',0)->get();
//$nuevo = Producto::where('id','>',0)->get();
//print_r($nuevo);

//sin el foreach da error
//https://norvicsoftware.com/vistas-y-rutas-en-laravel-8/
foreach ($nuevo as $nuevo => $nombre) {
    echo "<br>";
    echo "<br><br> <h2>Nombre usuario $cont:</h2> ";
    echo $nombre->name;
    //echo "<br> <h2>Encriptado:</h2> ";
    //Encriptacion en bcrypt
    //https://www.geeksforgeeks.org/how-to-use-bcrypt-for-hashing-passwords-in-php/
    //echo password_hash($nombre->nombre, PASSWORD_DEFAULT);
    echo "<br>";

} ?>

//eloquent
@auth
    ESTAS LOGUEADO
    <h4>Bienvenido . {{ auth()->user()->name }} con correo {{ auth()->user()->email }}</h4
@endauth
@guest
    DESCONECTADO
@endguest
