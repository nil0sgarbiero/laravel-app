<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Controllers\MAN\ItemController;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LoginDController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\MAN\FamiliaController;
use App\Http\Controllers\AutocompleteController;
use App\Http\Controllers\DBF\ImportDbfController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DBF\ImportBatchController;
use App\Http\Controllers\Admin\User\UserDController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\MAN\GrupoControleEstoqueController;

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

//Route::view('/', 'index')->name('index');
Route::get('/', function () {
        return view('index');
});

// Route::middleware('guest')->group(function () {
//     Route::get('login', Login::class)
//         ->name('login');

//     Route::get('register', Register::class)
//         ->name('register');
// });

// Route::get('password/reset', Email::class)
//     ->name('password.request');

// Route::get('password/reset/{token}', Reset::class)
//     ->name('password.reset');

// Route::middleware('auth')->group(function () {
//     Route::get('email/verify', Verify::class)
//         ->middleware('throttle:6,1')
//         ->name('verification.notice');

//     Route::get('password/confirm', Confirm::class)
//         ->name('password.confirm');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
//         ->middleware('signed')
//         ->name('verification.verify');

//     Route::post('logout', LogoutController::class)
//         ->name('logout');
// });
//Route::get('/test', function() { return view('test');});
Route::get('/test', [TestController::class, 'test']);
// autocomplete
Route::get('/caditem', [AutocompleteController::class, 'index']);
//Route::get('autocomplete-search', [AutocompleteController::class, 'autocompleteSearch']);
Route::get('/familia', [AutocompleteController::class, 'AutoComplete'])->name('familia');

// Autenticacao do usuario
Route::get('/login', [LoginDController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginDController::class, 'login']);
Route::post('/logout', [LoginDController::class, 'logout'])->name('logout');

// Entrando no dashboard somente autenticado
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('home')
    ->middleware('auth');

// Entrando no MAM somente autenticado
Route::get('/mam', [DashboardController::class, 'CadastroItem'])
    ->name('mam')
    ->middleware('auth');

// Usuarios com autenticação
Route::resource('/dashboard/users', UserDController::class)
    ->middleware('auth');

// Cadastro do item
Route::get('/caditem/familia', [FamiliaController::class, 'familiaJson'])->name('caditem.familia');
Route::get('/caditem/gru_ctr_estoq', [GrupoControleEstoqueController::class, 'gruCtrEstoqJson'])->name('caditem.gru_ctr_estoq');
// Rotas para exibir a view de cadastro de items
//Route::get('/caditem', function () { return view('caditem');});
Route::get('/caditem/item', [ItemController::class, 'itemJson'])->name('caditem.item');

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

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
