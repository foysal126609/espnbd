<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'FrontEndController@homeContent');
Route::get('/aboutUs', 'FrontEndController@aboutUsContent');
Route::get('/category/{id}', 'FrontEndController@categoryContent');
Route::get('/notice', 'FrontEndController@NoticeContent');
Route::get('/notice-detaile/{id}', 'FrontEndController@noticeDetaileContent');
Route::get('/contact', 'FrontEndController@contactContent');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-user', 'AdminController@addUser');
Route::post('/new-user', 'AdminController@saveUser');
Route::get('/manage-user', 'AdminController@manageUser');
Route::get('/admin/edit/{id}', 'AdminController@editUser');
Route::get('/admin/delete/{id}', 'AdminController@deleteUser');
Route::post('/user/update', 'AdminController@updateUser');


Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/category/edit/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/unpublished/{id}', 'CategoryController@unpublishdeCategoryInfo');
Route::get('/category/published/{id}', 'CategoryController@publishdeCategoryInfo');
Route::get('/manage-category', 'CategoryController@manageCategory');

Route::get('/add-product', 'ProductController@addProduct');
Route::post('/product/new', 'ProductController@saveProductInfo');
Route::get('/product/view/{id}', 'ProductController@viewProductInfo');
Route::get('/product/edit/{id}', 'ProductController@editProductInfo');
Route::post('/product/update', 'ProductController@updateProductInfo');
Route::get('/product/unpublished/{id}', 'ProductController@unpublishdeProductInfo');
Route::get('/product/published/{id}', 'ProductController@publishdeProductInfo');
Route::get('/product/delete/{id}', 'ProductController@deleteproductinfo');
Route::get('/manage-product', 'ProductController@manageProduct');


Route::get('/add-slider', 'SliderController@addSlider');
Route::post('/slider/new', 'SliderController@saveSliderInfo');
Route::get('/manage-slider', 'SliderController@manageSlider');
Route::get('/slider/unpublished/{id}', 'SliderController@unpublishedSlider');
Route::get('/slider/published/{id}', 'SliderController@publishedSlider');
Route::get('/slider/delete/{id}', 'SliderController@deleteSlider');

Route::get('/add-feature', 'FeatureController@addFeature');
Route::post('/feature/new', 'FeatureController@saveFeatureInfo');
Route::get('/manage-feature', 'FeatureController@manageFeature');
Route::get('/feature/edit/{id}', 'FeatureController@editFeatureInfo');
Route::post('/feature/update', 'FeatureController@updateFeatureInfo');
Route::get('/feature/unpublished/{id}', 'FeatureController@unpublishedFeature');
Route::get('/feature/published/{id}', 'FeatureController@publishedFeature');
Route::get('/feature/delete/{id}', 'FeatureController@deleteFeature');

Route::get('/add-notice', 'NoticeController@addNotice');
Route::post('/notice/new', 'NoticeController@saveNoticeInfo');
Route::get('/manage-notice', 'NoticeController@manageNotice');
Route::get('/notice/view/{id}', 'NoticeController@viewDetailsNoticeInfo');
Route::get('/notice/edit/{id}', 'NoticeController@editNoticeInfo');
Route::post('/notice/update', 'NoticeController@updateNoticeInfo');
Route::get('/notice/unpublished/{id}', 'NoticeController@unpublishedNotice');
Route::get('/notice/published/{id}', 'NoticeController@publishedNotice');
Route::get('/notice/delete/{id}', 'NoticeController@deleteNotice');

Route::get('/add-client-message', 'ClientController@addClientMessage');
Route::post('/client/new', 'ClientController@saveClientMessageInfo');
Route::get('/manage-client-message', 'ClientController@manageClientMessage');
Route::get('/client/unpublished/{id}', 'ClientController@unpublishedClientMessageInfo');
Route::get('/client/published/{id}', 'ClientController@publishedClientMessageInfo');
Route::get('/client/delete/{id}', 'ClientController@deleteClientMessageInfo');


Route::get('/add-about', 'AboutController@addAbout');
Route::post('/about/new', 'AboutController@saveAboutInfo');
Route::get('/manage-about', 'AboutController@manageAbout');
Route::get('/about/edit/{id}', 'AboutController@editAboutInfo');
Route::get('/about/unpublished/{id}', 'AboutController@unpublishedAboutInfo');
Route::get('/about/published/{id}', 'AboutController@publishedAboutInfo');
Route::get('/about/delete/{id}', 'AboutController@deleteAboutInfo');
Route::post('/about/update', 'AboutController@updateAboutInfo');

Route::get('/add-team-message', 'TeamController@addTeamMessage');
Route::post('/team/new', 'TeamController@saveTeamMessage');
Route::get('/manage-team-message', 'TeamController@manageTeamMessage');
Route::get('/team/unpublished/{id}', 'TeamController@unpublishedTeamMessageInfo');
Route::get('/team/published/{id}', 'TeamController@publishedTeamMessageInfo');
Route::get('/team/delete/{id}', 'TeamController@deleteTeamMessageInfo');
