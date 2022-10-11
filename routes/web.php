<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
Use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::redirect('/', '/fr');
Route::group(['prefix'=>'{language}','where' => ['locale' => '[a-zA-Z]{2}']],function(){

   Route::get('/', [App\Http\Controllers\ClientController::class, 'nav'])->name('welcome');

    Route::get('/programmes', function () {
        return view('programmes.index');
    })->name('programmes.index');



    Auth::routes();


    // Route::get('/mission', [App\Http\Controllers\ClientController::class, 'projects'])->name('provinces.mission');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/projets', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projets/create',[App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projets',[App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');

// Route::get('/projets/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('projects.edit');
// Route::delete('/projets/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('projects.destroy');
// Route::put('/projets/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update');

    Route::get('/userlist', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::get('/infouser', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::put('/infouser', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('/userlist/create',[App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/userlist',[App\Http\Controllers\UserController::class, 'store'])->name('users.store');

    Route::get('/version',[App\Http\Controllers\VersionController::class, 'index'])->name('versions.index');
    Route::get('/version/create',[App\Http\Controllers\VersionController::class, 'create'])->name('versions.create');
    Route::post('/version',[App\Http\Controllers\VersionController::class, 'store'])->name('versions.store');

    Route::get('/faires', [App\Http\Controllers\FaireController::class, 'index'])->name('faires.index');
    Route::get('/faires', [App\Http\Controllers\FaireController::class, 'create'])->name('faires.create');
    Route::post('/faires', [App\Http\Controllers\FaireController::class, 'store'])->name('faires.store');

    Route::get('/docvers',[App\Http\Controllers\DocVersController::class, 'index'])->name('docverss.index');
    Route::get('/docvers/create',[App\Http\Controllers\DocVersController::class, 'create'])->name('docverss.create');
    Route::post('/docvers',[App\Http\Controllers\DocVersController::class, 'store'])->name('docverss.store');

    Route::get('/mchroe', [App\Http\Controllers\NewsController::class, 'index'])->name('newss.index');
    Route::get('/mchroe/create',[App\Http\Controllers\NewsController::class, 'create'])->name('newss.create');
    Route::post('/mchroe',[App\Http\Controllers\NewsController::class, 'store'])->name('newss.store');

    Route::get('/mchroecontent', [App\Http\Controllers\NewscontentController::class, 'index'])->name('newscontents.index');
    Route::get('/mchroecontent/create',[App\Http\Controllers\NewscontentController::class, 'create'])->name('newscontents.create');
    Route::post('/mchroecontent',[App\Http\Controllers\NewscontentController::class, 'store'])->name('newscontents.store');

    Route::get('/appelprojets',[App\Http\Controllers\AppelProjetController::class, 'index'])->name('appelprojets.index');
    Route::get('/appelprojets/create',[App\Http\Controllers\AppelProjetController::class, 'create'])->name('appelprojets.create');
    Route::post('/appelprojets',[App\Http\Controllers\AppelProjetController::class, 'store'])->name('appelprojets.store');

    Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
    Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
    Route::post('uploads', [App\Http\Controllers\PostController::class, 'uploadImage'])->name('posts.upload');

    Route::get('/chiffre', [App\Http\Controllers\MessageController::class, 'chiffre'])->name('provinces.chiffre');
    Route::get('/mission', [App\Http\Controllers\MessageController::class, 'mission'])->name('provinces.mission');
    Route::get('/gouvernance', [App\Http\Controllers\MessageController::class, 'ogov'])->name('provinces.ogov');
    Route::get('/odas', [App\Http\Controllers\MessageController::class, 'odas'])->name('provinces.odas');

    Route::get('/publication', [App\Http\Controllers\ClientController::class, 'version'])->name('version.home');
    Route::get('/coidee',[App\Http\Controllers\ClientController::class, 'appelprojet'])->name('appelprojets.home');
    Route::get('/medias', [App\Http\Controllers\ClientController::class, 'media'])->name('projects.home');
    Route::get('/', [App\Http\Controllers\ClientController::class, 'news'])->name('welcome');
    Route::get('/actualite', [App\Http\Controllers\ClientController::class, 'post'])->name('posts.home');


    Route::get('/docfiles', [App\Http\Controllers\DocfileController::class, 'index'])->name('docfiles.index');
    Route::get('/docfiles/create',[App\Http\Controllers\DocfileController::class, 'create'])->name('docfiles.create');
    Route::post('/docfiles',[App\Http\Controllers\DocfileController::class, 'store'])->name('docfiles.store');

    Route::get('/documents', [App\Http\Controllers\DocumentController::class, 'index'])->name('documents.index');
    Route::get('/documents/create',[App\Http\Controllers\DocumentController::class, 'create'])->name('documents.create');
    Route::post('/documents',[App\Http\Controllers\DocumentController::class, 'store'])->name('documents.store');
    Route::post('/filedoc',[App\Http\Controllers\DocumentController::class, 'fileadd'])->name('documents.fileadd');


    Route::get('/files', [App\Http\Controllers\FilesController::class, 'index'])->name('files.index');
    Route::get('/files/create',[App\Http\Controllers\FilesController::class, 'create'])->name('files.create');
    Route::post('/files',[App\Http\Controllers\FilesController::class, 'store'])->name('files.store');
    Route::post('/filespic',[App\Http\Controllers\FilesController::class, 'fileadd'])->name('files.fileadd');

    Route::get('/filespics', [App\Http\Controllers\FilespicsController::class, 'index'])->name('filespics.index');
    Route::get('/filespics/create',[App\Http\Controllers\FilespicsController::class, 'create'])->name('filespics.create');
    Route::post('/filespics',[App\Http\Controllers\FilespicsController::class, 'store'])->name('filespics.store');


    Route::get('/emails',[App\Http\Controllers\MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages',[App\Http\Controllers\MessageController::class, 'create'])->name('messages.create');
    Route::post('/messages',[App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');

    Route::get('/users/role', [UserController::class,'role'])->name('users.role');
    Route::get('/permission/create',[UserController::class,'permission'])->name('permission.create');
    Route::post('/permission',[UserController::class,'storepermission'])->name('permission.store');
    Route::get('/permission',[UserController::class,'indexrole'])->name('role.index');
    Route::get('/programe1',[App\Http\Controllers\FaireController::class,'programme1'])->name('programmes.p1');
});


Route::get('/emails/{id}',[App\Http\Controllers\MessageController::class, 'show'])->name('messages.show');

Route::get('/files/pics/{id}',[App\Http\Controllers\FilesController::class, 'show'])->name('files.show');
Route::get('/files/editer/{id}', [App\Http\Controllers\FilesController::class, 'edit'])->name('files.edit');
Route::put('/files/editer/{id}', [App\Http\Controllers\FilesController::class, 'update'])->name('files.update');
Route::delete('/files/{id}', [App\Http\Controllers\FilesController::class, 'destroy'])->name('files.destroy');
Route::get('/filespic/create/{id}',[App\Http\Controllers\FilesController::class, 'cree'])->name('files.cree');
Route::delete('/filespics/{id}', [App\Http\Controllers\FilespicsController::class, 'destroy'])->name('filespics.destroy');
Route::get('/filespics/editer/{id}', [App\Http\Controllers\FilespicsController::class, 'edit'])->name('filespics.edit');
Route::put('/filespics/editer/{id}', [App\Http\Controllers\FilespicsController::class, 'update'])->name('filespics.update');


Route::get('/filedoc/create/{id}',[App\Http\Controllers\DocumentController::class, 'cree'])->name('documents.cree');
Route::delete('/docfiles/{id}', [App\Http\Controllers\DocfileController::class, 'destroy'])->name('docfiles.destroy');
Route::get('/docfiles/editer/{id}', [App\Http\Controllers\DocfileController::class, 'edit'])->name('docfiles.edit');
Route::put('/docfiles/editer/{id}', [App\Http\Controllers\DocfileController::class, 'update'])->name('docfiles.update');

Route::get('/documents/files/{id}',[App\Http\Controllers\DocumentController::class, 'show'])->name('documents.show');
Route::get('/documents/editer/{id}', [App\Http\Controllers\DocumentController::class, 'edit'])->name('documents.edit');
Route::put('/documents/editer/{id}', [App\Http\Controllers\DocumentController::class, 'update'])->name('documents.update');
Route::delete('/documents/{id}', [App\Http\Controllers\DocumentController::class, 'destroy'])->name('documents.destroy');


Route::get('/publication/docvers/{id}',[App\Http\Controllers\ClientController::class, 'versdoc'])->name('versions.display');


Route::get('/userlist/restore/{id}', [App\Http\Controllers\UserController::class, 'restore'])->name('users.restore');
Route::delete('/userlist/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
Route::get('/userlist/editer/{id}', [App\Http\Controllers\UserController::class, 'modifier'])->name('users.modifier');
Route::put('/userlist/editer/{id}', [App\Http\Controllers\UserController::class, 'upd'])->name('users.upd');

//  Route::get('{language}/password/reset', [App\Http\Controllers\ResetPasswordController::class, 'resetUrl'])->name('password.reset');
//  Route::post('{language}/password/reset', [App\Http\Controllers\ResetPasswordController::class, 'resetUrl'])->name('password.reset');

Route::get('/projets/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('projects.edit');
Route::delete('/projets/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('projects.destroy');
Route::put('/projets/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update');



Route::delete('/faires/{id}', [App\Http\Controllers\FaireController::class, 'destroy'])->name('faires.destroy');
Route::get('/faires/{id}', [App\Http\Controllers\FaireController::class, 'edit'])->name('faires.edit');
Route::put('/faires/{id}', [App\Http\Controllers\FaireController::class, 'update'])->name('faires.update');

Route::get('/password/reset/{token}', [App\Http\Controllers\ResetPasswordController::class])->name('password.reset');


Route::get('/version/{id}', [App\Http\Controllers\VersionController::class, 'edit'])->name('versions.edit');
Route::put('/version/{id}', [App\Http\Controllers\VersionController::class, 'update'])->name('versions.update');
Route::delete('/version/{id}', [App\Http\Controllers\VersionController::class, 'destroy'])->name('versions.destroy');
Route::get('/version/docvers/{id}',[App\Http\Controllers\VersionController::class, 'show'])->name('versions.show');



Route::get('/docvers/edit/{id}',[App\Http\Controllers\DocVersController::class, 'edit'])->name('docverss.edit');
Route::put('/docvers/edit/{id}',[App\Http\Controllers\DocVersController::class, 'update'])->name('docverss.update');
Route::delete('/docvers/{id}', [App\Http\Controllers\DocVersController::class, 'destroy'])->name('docverss.destroy');


Route::get('/coidee/{id}',[App\Http\Controllers\ClientController::class, 'dissplay'])->name('appelprojets.display');
Route::get('/appelprojets/{id}',[App\Http\Controllers\AppelProjetController::class, 'show'])->name('appelprojets.show');
Route::get('/appelprojets/editer/{id}', [App\Http\Controllers\AppelProjetController::class, 'edit'])->name('appelprojets.edit');
Route::put('/appelprojets/editer/{id}', [App\Http\Controllers\AppelProjetController::class, 'update'])->name('appelprojets.update');
Route::delete('/appelprojets/{id}', [App\Http\Controllers\AppelProjetController::class, 'destroy'])->name('appelprojets.destroy');

// Route::get('/filesapppros',[App\Http\Controllers\FilesappproController::class, 'index'])->name('filesapppros.index');
// Route::get('/filesapppros/create',[App\Http\Controllers\FilesappproController::class, 'create'])->name('filesapppros.create');
// Route::post('/filesapppros',[App\Http\Controllers\FilesappproController::class, 'store'])->name('filesapppros.store');

Route::get('/mchroe/contenuaffiche/{id}',[App\Http\Controllers\ClientController::class, 'contenuaffiche'])->name('newss.contenuaffiche');
Route::get('/mchroe/affiche/{id}',[App\Http\Controllers\ClientController::class, 'affiche'])->name('newss.affiche');

Route::get('/mchroe/display/{id}',[App\Http\Controllers\NewsController::class, 'display'])->name('newss.display');
Route::get('/mchroe/mchroecontent/{id}',[App\Http\Controllers\NewsController::class, 'show'])->name('newss.show');
Route::delete('/mchroe/{id}', [App\Http\Controllers\NewsController::class, 'destroy'])->name('newss.destroy');
Route::get('/mchroe/editer/{id}', [App\Http\Controllers\NewsController::class, 'edit'])->name('newss.edit');
Route::put('/mchroe/editer/{id}', [App\Http\Controllers\NewsController::class, 'update'])->name('newss.update');


Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/editer/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/editer/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
Route::get('/posts/show/{id}',[App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/media/display/{id}',[App\Http\Controllers\ClientController::class, 'actualite'])->name('posts.display');

//

Route::get('/permission/edit/{id}',[UserController::class,'editrole'])->name('role.edit');
Route::put('/permission/{id}',[UserController::class,'updaterole'])->name('role.update');
Route::delete('/permission/{id}',[UserController::class,'destroyrole'])->name('role.delete');
