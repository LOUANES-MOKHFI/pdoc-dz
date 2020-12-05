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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\email;
use App\Notifications\InvoicePaid;

Route::group(['middleware' => ['web' , 'admin']], function(){
   
   /*Les statistics*/
Route::get('/chart', 'StaticsController@chart');

       Route::get('/statistics','StaticsController@user')->middleware('admin');
       Route::get('/ressource/statistics','StaticsController@ressource')->middleware('admin');
       Route::get('/visitor/statistics','StaticsController@count_visitor')->middleware('admin');
       Route::get('/catalogues/statistics','StaticsController@catalogues')->middleware('admin');
      // Route::get('/statistics','StaticsController@count_visitor_university')->middleware('admin');

/* Admin */
    Route::get('/admin','AdminController@view')->middleware('admin');
    Route::get('/admin/profil','AdminController@profil')->middleware('admin');
    Route::resource('/administrateur','AdminController')->middleware('admin');
    Route::get('/administrateur/{id}/delete', 'AdminController@destroy');

    /*universite*/
    Route::resource('/universite','universiteController');
    Route::get('/universite/{id}/delete', 'universiteController@destroy');
Route::get('/search_universite', 'universiteController@search_universite_index');

    Route::get('/demande_confirmation', 'AdminController@all_demande');
    Route::get('/demande_confirmation/{id}/confirmer', 'AdminController@confirmer');
    Route::get('/demande_confirmation/{id}/rejeter', 'AdminController@rejeter');
    Route::get('/demande_confirmation/{id}', 'AdminController@show_demande');
Route::get('/etablissement/find_etablissement', 'universiteController@find_etablissement');

    /*partage des docuemnt*/
    Route::get('/admin/document', 'DocumentController@index');
    Route::get('/admin/document/{id}/confirmer', 'DocumentController@confirmer');
    Route::get('/admin/document/{id}/rejeter', 'DocumentController@rejeter');
    Route::get('/admin/document/{id}', 'DocumentController@show');
    Route::get('/search-document_index', 'DocumentController@search_document_index');
    Route::get('/titre/find_titre', 'DocumentController@find_titre');
    Route::get('/auteur/find_auteur', 'DocumentController@find_auteur');
    Route::get('/domaine/find_domaine', 'DocumentController@find_domaine');

    /*Contact*/
    Route::get('/admin/contact','ContactController@index');
    Route::get('/admin/contact/{id}','ContactController@show');
    Route::get('/admin/contact/{id}/delete','ContactController@destroy');
    Route::get('/admin/contact/message/message_lu','ContactController@message_lu');
    Route::get('/admin/contact/message/message_non_lu','ContactController@message_non_lu');
    Route::get('/admin/contact/message/corbeille','ContactController@corbeille');
    Route::get('/admin/contact/{id}/supprimer','ContactController@supprimer');

    /*Actualites*/
    
    Route::resource('/admin/actualites','ActualitesController');
    Route::get('/admin/actualites/{id}/delete', 'ActualitesController@destroy');

/*Student*/
	
	Route::resource('/student','StudentController');
    Route::get('/student/{id}/delete', 'StudentController@destroy');
    Route::get('/search_student', 'StudentController@search_student_index');

/*Tracher*/
    Route::resource('/teacher','TeacherController');
    Route::get('/teacher/{id}/delete', 'TeacherController@destroy');
    Route::get('/search_teacher', 'TeacherController@search_teacher_index');

/* autre person*/

  Route::resource('/autre','AutreController');
    Route::get('/autre/{id}/delete', 'AutreController@destroy');
    Route::get('/search_autre', 'AutreController@search_teacher_index');

     /* setting */

Route::get('/admin/sitesetting', 'SiteSettingController@index');
Route::post('/admin/sitesetting', 'SiteSettingController@store');
Route::post('/admin/sitesetting/{id}', 'SiteSettingController@update');

/*FAQ*/
    
    Route::resource('/admin/FAQ','FAQController');
    Route::get('/admin/FAQ/{id}/delete', 'FAQController@destroy');

/*demande_article*/
    
     Route::get('/demande_article1','ArticleController@index');
    Route::get('/demande_article1/{id}','ArticleController@show');
    Route::get('/demande_article1/{id}/delete', 'ArticleController@destroy');
    Route::get('/demande_article1/{id}/supprimer', 'ArticleController@supprimer');


     Route::get('/demande_article1/demande/demande_lu','ArticleController@demande_lu');
    Route::get('/demande_article1/demande/demande_non_lu','ArticleController@demande_non_lu');
    Route::get('/demande_article1/demande/corbeille','ArticleController@corbeille');

    /*Ressources*/

    Route::resource('/admin/ressource/ressourcePE','RessourcePEController');
    Route::get('/admin/ressource/ressourcePE/{id}/delete', 'RessourcePEController@destroy');
    Route::get('/search_ressource_PE', 'RessourcePEController@search_ressourcepe_index');


    Route::resource('/admin/ressource/ressourceDOC','RessourceDOCController');
    Route::get('/admin/ressource/ressourceDOC/{id}/delete', 'RessourceDOCController@destroy');
    Route::get('/search_ressource_DOC', 'RessourceDOCController@search_ressourcedoc_index');
  

    Route::resource('/admin/ressource/ressourceAO','RessourceAOController');
    Route::get('/admin/ressource/ressourceAO/{id}/delete', 'RessourceAOController@destroy');
    Route::get('/search_ressource_AO', 'RessourceAOController@search_ressourceao_index');


    /*Books*/
    
    Route::resource('/admin/books','BooksController');
    Route::get('/admin/books/{id}/delete', 'BooksController@destroy');
    Route::get('/search_book', 'BooksController@search_book_index');
  
    Route::get('/book_add/{id}/confirmer','BooksController@confirmer');

    Route::get('/admin/book_add/{id}','BooksController@show_book_add');
    Route::get('/book_add/{id}/confirmer','BooksController@confirmer');
    Route::get('/book_add/{id}/rejeter','BooksController@rejeter');
    Route::get('/admin/book_add','BooksController@index_book_add');


     /*Catalogue*/
    Route::resource('/admin/catalogue','CatalogueController');
    Route::get('/admin/catalogue/{id}/delete', 'CatalogueController@destroy');
    Route::get('/search_catalogue', 'CatalogueController@search_catalogue_index');



//Route::post('/add-module','ModuleController@store_module');

    /*Modules*/
    Route::resource('/admin/modules','ModuleController');
    Route::get('/admin/modules/{id}/delete', 'ModuleController@destroy');
    Route::get('/search_modules', 'ModuleController@search_modules_index');
Route::get('/module/find_module', 'ModuleController@find_module');

    /*Cours*/
    Route::resource('/admin/cours','CoursController');
    Route::get('/admin/cours/create/{id}','CoursController@create');
    Route::get('/search_cours', 'CoursController@search_cours_index');
    Route::get('/admin/cours/{id}/add-cours','CoursController@create')->middleware('auth');
    Route::get('/admin/cours/{id}/all-cours','CoursController@all_cours_in_module1')->middleware('auth');
    Route::post('/add-cours','CoursController@store')->middleware('auth');
Route::get('/cours/find_cours', 'CoursController@find_cours');

    /*Tds*/
   Route::resource('/admin/tds','TdsController');
    Route::get('/admin/tds/create/{id}','TdsController@create');
    Route::get('/search_tds', 'TdsController@search_tds_index');
    Route::get('/admin/tds/{id}/add-tds','TdsController@create')->middleware('auth');
    Route::get('/admin/tds/{id}/all-tds','TdsController@all_tds_in_module1')->middleware('auth');
    Route::post('/add-tds','TdsController@store')->middleware('auth');
    Route::get('/tds/find_tds', 'TdsController@find_tds');

    /*EXamens*/
  Route::resource('/admin/examens','ExamensController');
    Route::get('/admin/examens/create/{id}','ExamensController@create');
    Route::get('/search_examens', 'ExamensController@search_examens_index');
    Route::get('/admin/examens/{id}/add-examens','ExamensController@create')->middleware('auth');
    Route::get('/admin/examens/{id}/all-examens','ExamensController@all_examens_in_module1')->middleware('auth');
    Route::post('/add-examens','ExamensController@store')->middleware('auth');
    Route::get('/examens/find_examens', 'ExamensController@find_examens');
     
     /*Bibliographie des modules*/
      Route::resource('/bibliographie-modules','BibliographieController')->middleware('admin');
    Route::get('/bibliographie-modules/{id}/delete', 'BibliographieController@destroy');
    Route::get('/bibliographie-modules/module/{id}/add-reference','ReferenceController@add_reference_admin')->middleware('auth');
Route::post('/bibliographie-module/add_reference','ReferenceController@store_reference_admin')->middleware('auth');
Route::get('/bibliographie-modules/{id}','ReferenceController@show')->middleware('auth');
Route::get('/search_module', 'BibliographieController@search_module_index');

});


Route::group(['middleware' => 'web'], function(){
Route::auth();

Auth::routes(['verify' => true]);
Route::get('/send-mail','MailSend@mailsend');
Route::get('/', function () {
    return view('user.home');
});

//Route::get('/confirm/{id}','Auth\RegisterController@confirm');
Route::get('dashboard','HomeController@dashboard')->middleware('auth')->middleware('verified');
Route::get('user/books','BooksController@getbook_user')->middleware('auth')->middleware('verified');
Route::get('user/documents','DocumentController@getdocument_user')->middleware('auth')->middleware('verified');
Route::get('user/catalogues','CatalogueController@getcatalogues_user')->middleware('auth')->middleware('verified');
Route::get('user/book/{id}','BooksController@editbook_user')->middleware('auth')->middleware('verified');
Route::get('user/document/{id}','DocumentController@editdocument_user')->middleware('auth')->middleware('verified');
Route::get('user/catalogue/{id}','CatalogueController@editcatalogues_user')->middleware('auth')->middleware('verified');

Route::post('user/update_c/{id}','CatalogueController@updatecatalogues_user')->middleware('auth');
Route::post('user/update_d/{id}','DocumentController@updatedocuments_user')->middleware('auth');
Route::post('user/update_b_g/{id}','BooksController@updatebook_g_user')->middleware('auth');
Route::post('user/update_b_p/{id}','BooksController@updatebook_p_user')->middleware('auth');
Route::get('user/book/{id}/delete','BooksController@destroybook_user')->middleware('auth');
Route::get('user/catalogue/{id}/delete','CatalogueController@destroycatalogue_user')->middleware('auth');
Route::get('user/document/{id}/delete','DocumentController@destroydocument_user')->middleware('auth');

Route::get('home','HomeController@index');
Route::get('news','HomeController@news');
Route::get('cours','HomeController@cours');
Route::get('FAQ','HomeController@FAQ');
Route::get('contact','HomeController@contact');
Route::get('about','HomeController@about');
Route::get('profil','StudentController@profil')->middleware('auth')->middleware('verified');
Route::get('books','HomeController@books');

/*Ressource Doc*/
Route::get('ressource_doc/about','HomeController@docabout');
Route::get('ressource_doc/st','HomeController@st');
Route::get('ressource_doc/slv','HomeController@slv');
Route::get('ressource_doc/shs','HomeController@shs');
Route::get('ressource_doc/pluridisciplinaire','HomeController@pluridisciplinaire');
Route::get('ressource_doc/multidisciplinares','HomeController@multidisciplinares');


/*Ressource oa*/
Route::get('ressource_ao/about','HomeController@aoabout');
Route::get('ressource_ao/algeriennes','HomeController@algeriennes');
Route::get('ressource_ao/etrangeres','HomeController@etrangeres');

/*Ressource pe*/
Route::get('ressources_rpe','HomeController@rpe');

Route::get('demande_article','HomeController@demande_article');
Route::get('/demande_livre','HomeController@demande_livre');
Route::get('/catalogue-bibliotheque/about','HomeController@catalogueabout');

Route::get('/catalogue-bibliotheque','HomeController@catalogue_universite');
Route::get('/catalogue-bibliotheque-algerienne','HomeController@catalogue_universite_algerienne');
Route::get('/catalogue-bibliotheque-etrangere','HomeController@catalogue_universite_etrangere');
Route::get('/add-catalogue-bibliotheque','HomeController@add_catalogue_universite')->middleware('auth');
Route::get('/add-document','HomeController@document')->middleware('auth');
Route::get('/search-document','HomeController@search_document')->middleware('auth');
/*Etablissement*/
Route::get('/espace-elearning-about','HomeController@elearning_about');

Route::post('/etablissment/get', 'ModuleController@get')->name('etablissment.get');
Route::get('/etablissement','universiteController@All_etablissement')->middleware('auth');
Route::get('/search-etablissement','universiteController@get_etablissement')->middleware('auth');
Route::get('/espace-elearning/{id}/{etablissement}','ModuleController@all_modules_in_etablissement')->middleware('auth');

/*Module*/
Route::get('/espaces-elearning','ModuleController@all_modules')->middleware('auth');
Route::get('/search-module','ModuleController@search_module')->middleware('auth');
Route::post('/module/search', 'ModuleController@search')->name('module.search');
Route::get('/espace-elearning/{id}','ModuleController@show_module')->middleware('auth');
Route::get('/espace-elearning/add-module/{id}/{etablissement}','ModuleController@add_module')->middleware('auth');
Route::post('/add-module','ModuleController@store_module')->middleware('auth');

/*cours*/
Route::get('/espaces-elearning/cours','CoursController@all_cours')->middleware('auth');
Route::get('/search-cours','CoursController@search_cours')->middleware('auth');
Route::post('/cours/search', 'CoursController@search')->name('cours.search');
Route::get('/module/{id}/add-cours','CoursController@add_cours')->middleware('auth');
Route::get('/module/{id}/all-cours','CoursController@all_cours_in_module')->middleware('auth');
Route::post('/add-cours','CoursController@store_cours')->middleware('auth');
Route::get('/cours/find_cours', 'CoursController@find_cours');



//Route::post('/add-module','ModuleController@store_module');
/*examens*/
Route::get('/espaces-elearning/examens','ExamensController@all_examens')->middleware('auth');
Route::get('/module/{id}/add-examens','ExamensController@add_examens')->middleware('auth');
Route::get('/module/{id}/all-examens','ExamensController@all_examens_in_module')->middleware('auth');
Route::post('/examens/search', 'ExamensController@search')->name('examens.search');
Route::post('/add-examens','ExamensController@store_examens')->middleware('auth');
Route::get('/search-examens','ExamensController@search_examens');
    Route::get('/examens/find_examens', 'ExamensController@find_examens');


/*td*/
Route::get('/espaces-elearning/tds','TdsController@all_tds')->middleware('auth');
Route::get('/module/{id}/add-tds','TdsController@add_tds')->middleware('auth');
Route::get('/module/{id}/all-tds','TdsController@all_tds_in_module')->middleware('auth');
Route::post('/tds/search', 'TdsController@search')->name('tds.search');
Route::post('/add-tds','TdsController@store_tds')->middleware('auth');
    Route::get('/tds/find_tds', 'TdsController@find_tds');

/*Search Ressource*/
Route::get('/search_ressource_st','RessourceDOCController@getressourcest');
Route::get('/search_ressource_slv','RessourceDOCController@getressourceslv');
Route::get('/search_ressource_shc','RessourceDOCController@getressourceshs');
Route::get('/search_ressource_plu','RessourceDOCController@getressourceplu');
Route::get('/search_ressource_multidisciplinares','RessourceDOCController@getressourcemultidisciplinaires');

Route::get('/search_ressource_pe','RessourcePEController@getressourcepe');

Route::get('/search_ressource_al','RessourceAOController@getressourceal');
Route::get('/search_ressource_etr','RessourceAOController@getressourceetr');


/*get ressource by domaine*/
Route::get('/ressource_rpe/{domaine}','RessourcePEController@getressourceby_domaine');
Route::get('/ressource_algerienne/{domaine}','RessourceAOController@getressourcealby_domaine');
Route::get('/ressource_etrangere/{domaine}','RessourceAOController@getressourceetrby_domaine');
Route::get('/ressource_st/{domaine}','RessourceDOCController@getressourcestby_domaine');
Route::get('/ressource_slv/{domaine}','RessourceDOCController@getressourceslvby_domaine');
Route::get('/ressource_shs/{domaine}','RessourceDOCController@getressourceshsby_domaine');
Route::get('/ressource_plu/{domaine}','RessourceDOCController@getressourcepluby_domaine');


/*get ressource by type*/
Route::get('/ressource_rp/{type}','RessourcePEController@getressourceby_type');
Route::get('/ressource_algerienn/{type}','RessourceAOController@getressourcealby_type');
Route::get('/ressource_etranger/{type}','RessourceAOController@getressourceetrby_type');
Route::get('/ressources_st/{type}','RessourceDOCController@getressourcestby_type');
Route::get('/ressources_slv/{type}','RessourceDOCController@getressourceslvby_type');
Route::get('/ressources_shs/{type}','RessourceDOCController@getressourceshsby_type');
Route::get('/ressources_plu/{type}','RessourceDOCController@getressourcepluby_type');
Route::get('/ressources_multidisciplinares/{type}','RessourceDOCController@getressourcemultiby_type');

Route::get('/ressource-doc/{lettre}/{ressource}','RessourceDOCController@getressource_lettre');
Route::get('/ressource-ao/{lettre}/{ressource}','RessourceAOController@getressource_lettre');
Route::get('/ressource-pe/{lettre}','RessourcePEController@getressource_lettre');


Route::post('/contact','ContactController@store');
/* Article */
Route::post('/demande_article','ArticleController@demande_article');
Route::post('/demande_livre','ArticleController@demande_livre');

/*Partager les document*/
Route::get('/document/about','HomeController@documentabout');

Route::post('/add_document','DocumentController@add_document')->middleware('auth');
;
Route::get('/search_document','DocumentController@search_document')->middleware('auth');
;
Route::get('/document/{id}', 'DocumentController@show_document')->middleware('auth');
Route::post('/autocomplete/fetch', 'DocumentController@fetch')->name('autocomplete.fetch');
Route::get('/titre/find_titre', 'DocumentController@find_titre');
Route::get('/auteur/find_auteur', 'DocumentController@find_auteur');
Route::get('/domaine/find_domaine', 'DocumentController@find_domaine');
Route::get('/etablissement/find_etablissement', 'universiteController@find_etablissement');


/*Catalogue des bibliotheque*/
Route::get('/live_search/action', 'CatalogueController@action')->name('live_search.action');
Route::get('/live_search/action_etrangere', 'CatalogueController@action_etrangere')->name('live_search.action_etrangere');
Route::post('add-catalogue','CatalogueController@ajouter_catalogue')->middleware('auth');

Route::get('/actualites/{id}','ActualitesController@show_news');
Route::get('/show_book/{titre}/{sujet}','BooksController@show_book');
Route::get('/show_book','BooksController@search_book');
Route::get('/books/{sujet}','BooksController@filter_book');
Route::get('/books-price/{price}','BooksController@filter_book_price');

Route::get('/books_sujet','BooksController@filter_book');
Route::get('/books-about','HomeController@books_about');
Route::get('/add-book','BooksController@add_book')->middleware('auth');
Route::post('/store-book','BooksController@store_book')->middleware('auth');

 Route::get('/add-to-cart/{id}',
    ['uses' => 'BooksController@getadd_to_cart',
     'as' => 'book.addToCarte']);

    Route::get('/books-cart',
    ['uses' => 'BooksController@getCart',
     'as' => 'book.cart']);

  Route::get('/checkout',
    ['uses' => 'BooksController@getCheckout',
     'as' => 'checkout']);

    Route::post('/checkout',
    ['uses' => 'BooksController@postCheckout',
     'as' => 'checkout']);

Route::get('/remove-item/{id}',
    ['uses' => 'BooksController@getRemove',
     'as' => 'book.remove']);

 
Route::get('/add-book-author','BooksController@add_book_author')->middleware('auth');
Route::post('/store-book-author','BooksController@store_book_author')->middleware('auth');


/*Bibliographie des modules*/
Route::get('/bibliographie-des-modules','BibliographieController@all_modules')->middleware('auth');
Route::get('/live_search1/action', 'BibliographieController@action')->name('live_search1.action');
Route::get('/bibliographie-des-modules/add-module','BibliographieController@add_module')->middleware('auth');
Route::post('/bibliographie-des-modules/add_module','BibliographieController@store_module')->middleware('auth');
Route::get('/bibliographie-des-modules/{id}','ReferenceController@show_module')->middleware('auth');
/*References*/
Route::get('/bibliographie-des-modules/module/{id}/add-reference','ReferenceController@add_reference')->middleware('auth');
Route::post('/bibliographie-des-module/add_reference','ReferenceController@store_reference')->middleware('auth');
Route::get('/module/find_module', 'ModuleController@find_module');
Route::get('/update_download_count', 'BooksController@updateDownloadCount');
Route::get('/update_view_count', 'BooksController@updateViewCount');


/*Profil*/
Route::put('/update-email','AdminController@update_email');
Route::put('/update-information','AdminController@update_information');
Route::put('/update-password','AdminController@update_password');

Route::match(['get', 'post'], '/search-all',[
        'as' => '/search-all',
        'uses' => 'HomeController@search' ]);
//Route::post('/search-all', 'HomeController@search');
Route::get('/reclamation', 'HomeController@reclamation');
Route::post('/reclamer', 'ContactController@reclamer');

/*inscription*/
Route::get('/register-teacher', 'HomeController@register_teacher');
Route::get('/register-bibliothecaire', 'HomeController@register_bibliothecaire');
Route::get('/register-autre', 'HomeController@register_autre');

Route::get('/paiement-user','HomeController@paiement_user');
Route::get('/paiement','HomeController@paiement');
Route::post('/subscribe','SubscribeController@postCheckout');
Route::post('/subscribe-mail','SubscribeController@getUser');


/* Ajax */
Route::get('/ajax-etablissement',function(){
$type_etablissement = $_GET['type_etablissement'];
  //dd($id_faculte);
  $etablissement = \App\Universite::where('type_etablissement','=',$type_etablissement)->get();

  return Response::json($etablissement);
});

});