<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Http\Requests\ContactoRequest;
use App\models\Inicio;
use Illuminate\Support\Facades\Storage;
use App\models\Nosotros;
use App\Http\Requests\NosotrosRequest;
use App\Models\Servicio;
use App\Http\Requests\ServicioRequest;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Auth;

class AdminController extends Controller
{

  /***Controladores Inicio***/

  public function editar_inicio(){
    $fondo = Inicio::first();
    return view('editar-inicio',compact('fondo'));
  }

  public function actualizar_fondo(Request $request){
    $request->validate([
      'fondo'=>'required|image'
    ]);

    $usuario = Auth::user()->id;

    $file = Inicio::first();

    $eliminar = str_replace('storage','public', $file->url);
    Storage::delete($eliminar);

    $fondo = $request->file('fondo')->store('public');
    //Al enlazar con la carpeta storage public, la ruta se mantiene al inicio como public, entonces nunca va encontrar la carpeta public/public; se realiza lo siguiente para cambiar el nombre y quedara como public/storage
    $url = Storage::url($fondo);

    $file->url = $url;
    $file->usuario_id = $usuario;

    $file->save();

    return back()->with('mensaje', 'Fondo de Inicio Actualizado');
  }

  /***Controlador Nosotros***/

  public function editar_nosotros(){
    $inf = Nosotros::first();
    return view('editar-nosotros', compact('inf'));
  }

  public function actualizar_informacion(NosotrosRequest $request){

    $request->validated();
    $usuario = Auth::user()->id;
    $nosotros = Nosotros::first();

    if (!empty($request->perfil)) {

      $eliminar2 = str_replace('storage','public', $nosotros->perfil_url);
      Storage::delete($eliminar2);

      $perfil = $request->file('perfil')->store('public');
      $url_perfil = Storage::url($perfil);

      $nosotros->perfil_url = $url_perfil;

    }

    $nosotros->titulo_1 = $request->title1;
    $nosotros->descripcion_1 = $request->description1;
    $nosotros->titulo_2 = $request->title2;
    $nosotros->descripcion_2 = $request->description2;
    $nosotros->usuario_id = $usuario;

    $nosotros->save();

    return back()->with('mensaje', 'Información Sobre Nosotros Actualizada');
  }

  /***Controlador Contacto***/

  public function editar_contacto(){
    $info = Contacto::first();
    // return view('editar-info',['info'=>$info]);
    return view('editar-contacto', compact('info'));
  }

  public function actualizar_contacto(ContactoRequest $request){

    $request->validated();
    $usuario = Auth::user()->id;

    $contacto = Contacto::first();
    $contacto->direccion = $request->direccion;
    $contacto->colonia = $request->colonia;
    $contacto->cp = $request->cp;
    $contacto->ciudad = $request->ciudad;
    $contacto->email = $request->email;
    $contacto->telefono = $request->telefono;
    $contacto->hora_semanal = $request->hora_semanal;
    $contacto->fin_semana = $request->fin_semana;
    $contacto->usuario_id = $usuario;

    $contacto->save();

    return back()->with('mensaje', 'Información de Contacto Actualizada');
  }

  /***Controlador Servicios***/

  public function editar_servicios(){
    $tabla = Servicio::paginate(5);
    return view('editar-servicios', compact('tabla'));
  }

  public function agregar_servicio(ServicioRequest $request){
    $request->validated();

    $servicio = new Servicio;
    $servicio->nombre_servicio = $request->nombre_servicio;
    $servicio->descripcion_servicio = $request->descripcion_servicio;
    $servicio->precio = $request->precio;
    $servicio->oferta = $request->oferta;
    $servicio->precio_anterior = $request->precio_anterior;

    $servicio->save();

    return back()->with('mensaje','Se ha creado un nuevo Servicio');
  }

  public function editar_servicio(ServicioRequest $request, $id){
    $request->validated();

    $usuario = Auth::user()->id;

    $servicio = Servicio::find($id);
    $servicio->nombre_servicio = $request->nombre_servicio;
    $servicio->descripcion_servicio = $request->descripcion_servicio;
    $servicio->precio = $request->precio;
    $servicio->oferta = $request->oferta;
    $servicio->precio_anterior = $request->precio_anterior;
    $servicio->usuario_id = $usuario;

    $servicio->save();

    return back()->with('mensaje','Se ha editado el servicio: ' . $servicio->nombre_servicio . ', correctamente.');
  }

  public function eliminar_servicio($id){
    $servicio = Servicio::find($id);
    $eliminado = $servicio->nombre_servicio;
    $servicio->delete();
    return back()->with('mensaje','Se ha eliminado el servicio: ' . $eliminado . ', correctamente.');
  }

  /***Controlador Gestion Usuarios***/

  public function gestion_usuarios(){
    $usuarios = User::paginate(5);
    return view('gestion-usuarios', compact('usuarios'));
  }

  public function crear_usuario(UserRequest $request){
    $request->validated();

    User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => bcrypt($request['password']),
      // 'tipo' => 'Auxiliar'
    ]);

    return back()->with('mensaje','Se ha creado nueva cuenta correctamente.');
  }

  public function actualizar_usuario(UserUpdateRequest $request, $id){
    // $request->validate([
    //   'name'=>'required',
    //   'email'=>'required|email|unique:users,email,' . $request->id,
    //   'password'=>''
    // ]);

    $request->validated();

    $actualizar = User::find($id);
    $actualizar->name = $request->name;
    $actualizar->email = $request->email;

    if (!empty($request->password)) {
      $validar = $request->validate([
        'password' => 'string|confirmed|min:8|max:16'
      ]);

      if ($validar == TRUE) {
        $newPassword = bcrypt($request->password);
        $actualizar->password = $newPassword;
      }
    }

    $actualizar->save();

    return back()->with('mensaje','Se ha actualizado al usuario: ' . $actualizar->name . ', correctamente.');
  }

  public function eliminar_usuario($id){
    $usuario = User::find($id);
    $eliminar = $usuario->email;
    $usuario->delete();
    return back()->with('mensaje','Se ha eliminado al usuario: ' . $eliminar . ', correctamente.');
  }



}
