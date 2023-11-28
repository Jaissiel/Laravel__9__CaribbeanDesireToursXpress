<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToursController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TestsEnrollmentController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\EnjoyerController; 
use App\Http\Controllers\Enjoyers_Controller;
use App\Http\Controllers\ProviderController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
/*
    Route::redirect('/','/es');
    Route::group(['prefix' => '{$parameter_locale}'],function(){
    
        Route::resource('/tours', ToursController::class);
        

   }); 

*/


Route::resource('clients', ClientController::class);

Route::resource('reservations', ReservationController::class);

Route::get('/reservation_1', [App\Http\Controllers\ReservationController::class,'reservation_1']);

//Route::get('/finalconfirmation/{xParameterIdReservation}', [App\Http\Controllers\ConfirmationController::class,'finalconfirmation']); /* ConfirmationMail: 01  */
Route::get('/finalconfirmation/{xParameterIdReservation}/{xEmail}', [App\Http\Controllers\ConfirmationController::class,'finalconfirmation']); /* ConfirmationMail: 01  */




// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

//example of parameter
//Route::resource('/tours/{id?}',ToursController::class);
//  http://tours.test/tours
    Route::redirect('/','/tours');
    Route::resource('/tours',ToursController::class);
    Route::resource('/english',ToursController::class);


// original work fine Route::redirect('/','/es');
// original work fine Route::resource('/tours/{parameter_locale?}', ToursController::class);
//Route::get('/reservation_1', function () { return view('tours.reservation_1');});
// original work fine --->  Route::get('/reservation_1', [App\Http\Controllers\ReservationController::class,'reservation_1']);


Route::get('Verbos-Ingles-Simple-Present-Past-Participle-Verbs-English', function () { return view('articles.Verbos-Ingles-Simple-Present-Past-Participle-Verbs-English'); });
Route::get('Dia-de-Muertos-Verdadero-Origen-Mexico-Anahuac-Toltecayotl-Mictlan', function () { return view('articles.Dia-de-Muertos-Verdadero-Origen-Mexico-Anahuac-Toltecayotl-Mictlan'); });
Route::get('Como-Hacer-una-pagina-Web-Importante-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico', function () { return view('articles.Como-Hacer-una-pagina-Web-Importante-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico'); });
Route::get('Zen-Emprendedor-Negocios-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico', function () { return view('articles.Zen-Emprendedor-Negocios-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico'); });
Route::get('Guardianes-Manglar-Proteger-Selva-Mar-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico', function () { return view('articles.Guardianes-Manglar-Proteger-Selva-Mar-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico'); });
Route::get('Solar-Arrecifes-No-bloqueador-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico', function () { return view('articles.Solar-Arrecifes-No-bloqueador-Deseocaribe-Puerto-Morelos-Quintana-Roo-Mexico'); });
Route::get('Diez-Razones-Visitar-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico', function () { return view('articles.Diez-Razones-Visitar-Puerto-Morelos-Playa-Caribe-Quintana-Roo-Mexico'); });

Route::get('ads', function () { return view('tours.ads'); });

Route::get('admin', function () { return view('admin.login'); });

Route::resource('/enjoyer', EnjoyerController::class);

Route::resource('/enjoyers', Enjoyers_Controller::class);

// locale01
Route::get('locale/{locale}', function ($locale){
        session()->put('locale', $locale);
        return Redirect::back();
});




Route::resource('/providers',ProviderController::class);



// 9 Auth::routes();

// 9 Route::get('/send-testenrollment', [TestsEnrollmentController::class,'sendTestNotification']);

//Auth::routes();

// 9 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//     Test APIs

Route::get('curl_1', function () { return view('tours.curl_1'); });

Route::get('api_mp', function () { return view('tours.api_mp'); });

Route::get('api_test_02', function () { return view('api.api_test_02'); });

Route::get('api_index', function () { return view('api.index'); });
Route::get('api_show', function () { return view('api.show'); });
//Route::get('api_init_curl', function () { return view('api.init_curl'); });
Route::get('api_new', function () { return view('api.new'); });
Route::post('api_create', function () { return view('api.create'); });

