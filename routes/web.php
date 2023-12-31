<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);


// Route::get('/phpinfo', function() {
//     return phpinfo();
// });

Route::statamic('contact-us','minor_pages/contact_form');

Route::post('contact-us',[MailController::class,'notifyContact']);