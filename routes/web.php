<?php

use App\Http\Controllers\ConductorController;
use App\Http\Controllers\SolicitudConductorController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    $status = session('status'); // Esto capturará el 'status' de la sesión
    return view('inicioSesion', compact('status'));
})->name('login');

Route::get('/mapa', function () {
    return view('nuevoConductor');
});

/* Usuarios ------------------------------------------ */
Route::get('/Usuario/CrearUsuario', [UsuariosController::class, 'CrearUsuario'])->name('usuario.CrearUsuario');
Route::post('/Usuario/GuardarUsuario', [UsuariosController::class, 'GuardarUsuario'])->name('usuario.GuardarUsuario');
Route::get('/Usuario/menuUsuario', [UsuariosController::class, 'menuCliente'])->name('usuario.menuCliente');
Route::get('/Usuario/login', [UsuariosController::class, 'CerraSesion'])->name('usuario.cerrarSesion');
Route::post('/Usuario/iniciar', [UsuariosController::class, 'iniciarSesion'])->name('usuario.iniciar');
Route::post('/Usuario/IniciarSesion', [UsuariosController::class, 'iniciarSesion'])->name('usuario.iniciarSesion');


/* Conductores ----------------------------------------------------------------- */
Route::get('/Conductores/CambioModo', [ConductorController::class, 'modoConductor'])->name('conductor.solictud');
Route::get('/Conductores/menuPrincipal', [ConductorController::class, 'CrearUsuario'])->name('conductor.menuConductor');

/* SolicitudesCondutores */
Route::get('/SolicitudConductor/Solictud', [SolicitudConductorController::class, 'Solicitud'])->name('solictudConduc.solictud');






