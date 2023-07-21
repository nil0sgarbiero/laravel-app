<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AutocompleteController;
use App\Http\Controllers\DBF\ImportBatchController;
use App\Http\Controllers\DBF\ImportDbfController;
use App\Http\Controllers\MAN\FamiliaController;
use App\Http\Controllers\MAN\GrupoControleEstoqueController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', function () {
    return view('index');
});

//Route::get('/test', function() { return view('test');});
Route::get('/test', [TestController::class, 'test']);
// autocomplete
Route::get('/caditem', [AutocompleteController::class, 'index']);
//Route::get('autocomplete-search', [AutocompleteController::class, 'autocompleteSearch']);
Route::get('/familia', [AutocompleteController::class, 'AutoComplete'])->name('familia');

// Autenticacao do usuario
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Entrando no dashboard somente autenticado
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

// Entrando no MAM somente autenticado
Route::get('/mam', [DashboardController::class, 'CadastroItem'])
    ->name('mam')
    ->middleware('auth');

// Usuarios com autenticação
Route::resource('/users', UserController::class)
    ->middleware('auth');

// Cadastro do item
Route::get('/caditem/familia', [FamiliaController::class, 'familiaJson'])->name('caditem.familia');
Route::get('/caditem/gru_ctr_estoq', [GrupoControleEstoqueController::class, 'gruCtrEstoqJson'])->name('caditem.gru_ctr_estoq');

// Importar dados do Kairos para o MYSQL - Manipulação de arquivos DBF e Lotes de inserção.
Route::get('/import-dbf', [ImportDbfController::class, 'index'])->name('import-dbf');
Route::post('/import-dbf', [ImportDbfController::class, 'import']);
Route::post('/import-db-insert/{modelName}', [ImportDbfController::class, 'insertRecords'])->name('import-dbf-insert');
Route::post('/import-dbf-batch/{batchNumber}', [ImportBatchController::class, 'showBatch'])->name('import-dbf-batch');
Route::post('/import-dbf-insert-batch', [ImportBatchController::class, 'insertBatch'])->name('import-dbf-insert-batch');
Route::post('/import-dbf-skip-batch', [ImportBatchController::class, 'skipBatch'])->name('import-dbf-skip-batch');
Route::get('/import-dbf-batch-success', function () {
    return view('import_dbf_batch_success');
})->name('import-dbf-batch-success');
Route::post('/import-dbf-batch', [ImportBatchController::class, 'batch'])->name('import-dbf-batch');
