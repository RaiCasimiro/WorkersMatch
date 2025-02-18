<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EditarController;

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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/escolhas', function (){
    return view('escolhas');
});

// Route::get('/cadastro', function (){
//     return view('cadastro');
// });

// Route::get('/perfilUsuario', [CurriculoController::class, 'buscaDados']);


Route::get('/vagas', function(){
    return view('vagas');
});

Route::get('/wm/minhasVagas', function(){
    return view('minhasvagas');
});

route::get('/inicial', function(){
    return view('inicial');
});

Route::get('/perfilUsuario/editarCurriculo', function(){
    return view('editarcurriculo');
});

Route::get('/inicial/Privacidade', function(){
    return view('privacidade');
});

Route::get('/inicial/contato', function(){
    return view('contato');
});

Route::get('/inicial/PerguntasFrequentes', function(){
    return view('perguntas');
});

Route::get('/inicial/TermosECondicoes', function(){
    return view('termosECond');
});

Route::get('/wm/Configuracoes', function(){
    return view('configuracoes');
});


Route::get('/montarCurriculo', function(){
    return view('montarCurriculo');
});

Route::get('/wm/perfil', function(){
    return view('perfil');
});



// Route::get('/inicial/login', function(){
//     return view('login');
// });

Route::get('/regrasdacomunidade/regrasComunidade', function(){
    return view('regrasComunidade');
});

Route::get('/dicasdeseguranca/dicasDeSeguranca', function(){
    return view('dicasdeseguranca');
});

Route::get('/segurancaDenuncia/segurancaDenuncia', function(){
    return view('segurancaDenuncia');
});

Route::get('/inicial/patrocinadores', function(){
    return view('patrocinadores');
});

Route::get('/wm', function(){
    return view('wm');
});

Route::get('/inicial/tutorial', function(){
    return view('tutorial');
});

Route::get('/inicial/cadastroLogin', function(){
    return view('cadastroLogin');
});

Route::get('/wm/configuracoes/editarPerfil', function(){
    return view('editarPerfil');
});

Route::get('/vagas', function(){
    return view('vagas');
});


Route::get('/cadastroLogin', [UserController::class, 'index'])->name('cadastrologin');

Route::post('/cadastro2', [UserController::class, 'store2']);

Route::get('/contato', [ContatoController::class, 'index1']);

Route::post('/contato', [ContatoController::class, 'store1']);

Route::get('/curriculo', [CurriculoController::class, 'index3']);

Route::post('/curriculo', [CurriculoController::class, 'store3']);

Route::post('/cadastroLogin', [UserController::class, 'validaUsuario']);

Route::get('/perfil/{id}', [EditarController::class, 'perfil'])->name('perfil');

Route::get('/usuario/editarPerfil', [EditarController::class, 'editarPerfil'])->name('usuario.editar');

Route::post('/atualizarUsuario', [EditarController::class, 'atualizar'])->name('usuario.atualizar');

// Route::get('/editarPerfil/{id}', [EditarController::class, 'editar']);

