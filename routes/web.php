<?php

use App\Http\Controllers\AnswerController;
use App\Models\Cources;

use App\Http\Controllers\AnswerListController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\CaController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CheckerAnswerController;
use App\Http\Controllers\CourceController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListOfUser;
use App\Http\Controllers\ListPendingController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\QuestionPaperController;
use App\Http\Controllers\QuetionController;
use App\Http\Controllers\RejectListController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\frontend\StudentDashController;
use App\Http\Controllers\frontend\ObjectiveTestController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\frontend\SubjectiveTestController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\MainController;
use App\Http\Controllers\PaperQuestionsController;
use App\Http\Controllers\ProductController;
use App\Models\PaperQuestions;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Quizscontroller;
use App\Http\Controllers\StudentQuizsController;
use App\Http\Controllers\SubProductController;

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






Route::post('/auth/store', [MainController::class, 'store'])->name('auth.store');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');

// Route::get('/admn/dashboard',[MainController::class,'dashboard']);

Route::get('/student/logout', [MainController::class, 'logout'])->name('student_auth.logout');

// //// Usin Middleware ////
// Route::group(['middleware'=>['AuthCheck']], function(){
Route::get('/student/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/student/register', [MainController::class, 'register'])->name('auth.register');

Route::get('/student/dashboard', function () {
    $core = Cources::all();
    return view('frontend/student/index', compact('core'));
});
// });

// //MMMMMM ////
// Route::get('/tryal', function(){
//     return view('/frontend/student/index');
// });
// end frontend 


Route::get('/home', [HomeController::class, 'index']);

Route::get('/corce', [CaController::class, 'index']);
Route::get('/admin/add', [CourceController::class, 'index']);
Route::get('/admin/subject', [SubjectController::class, 'index']);
Route::get('/admin/chapter', [ChapterController::class, 'index']);
Route::get('/admin/unit', [QuetionController::class, 'index']);
Route::get('/groups', [GroupsController::class, 'index']);
Route::get('/admin/showlist', [QuetionController::class, 'show']);

Route::get('/answerlist', [AnswerListController::class, 'index']);
Route::get('/listpending', [ListPendingController::class, 'index']);
Route::get('/auditlist', [AuditController::class, 'index']);
Route::get('/approvelist', [ApproveController::class, 'index']);
Route::get('/rejectlist', [RejectListController::class, 'index']);
Route::get('/questionpaper', [QuestionPaperController::class, 'index']);
// Route::get('/questionpaper',[QuestionPaperController::class,'index']);




//subjectcontroller//

Route::post('/nsert', [SubjectController::class, 'store']);
Route::get('/insert', [SubjectController::class, 'show']);
Route::get('/subject/update/{id}', [SubjectController::class, 'update']);
Route::get('/subject/delete/{id}', [SubjectController::class, 'destroy']);

//courcecontroller////

Route::post('/store', [CourceController::class, 'store']);
Route::get('/show', [CourceController::class, 'show']);
Route::get('/course/delete/{id}', [CourceController::class, 'destroy']);

//ChapterController//
Route::post('/chapter/store', [ChapterController::class, 'store']);
Route::get('/chapter/getSubjectList', [ChapterController::class, 'getSubjectList']);
Route::get('/chapter/delete/{id}', [ChapterController::class, 'destroy']);
// Route::get('/chapter/getSubjectList',[ChapterController::class, 'update']);


//questioncontroller//
Route::POST('/question/store', [QuetionController::class, 'store']);
Route::get('/unit/getSubjectList', [QuetionController::class, 'getSubjectList']);
Route::get('/unit/getchapterlist', [QuetionController::class, 'getchapterlist']);
Route::get('/unit/delete/{id}', [QuetionController::class, 'destroy']);


Route::get('/question/getQuestionList', [QuetionController::class, 'getQuestionList']);


Route::get('/unit/getSubjectList', [ShowController::class, 'getSubjectList']);
Route::get('/unit/getchapterlist', [ShowController::class, 'getchapterlist']);


Route::get('/admin/listuser', [ListOfUser::class, 'index']);
Route::get('/user/delete/{id}', [ListOfUser::class, 'index']);

Route::get('/admin/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $core = Cources::all();
    return view('auth/index', compact('core'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/admin/dashboard', function () {
    $core = Cources::all();
    return view('admin/auth/index', compact('core'));
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__ . '/adminauth.php';




Route::get('check', function () {
    Artisan::call('php artisan --version');
});


Route::post('/questionpaper', [QuestionpaperController::class, 'fileUpload'])->name('fileUpload');
Route::get('/userChangeStatus', [QuestionpaperController::class, 'userChangeStatus']);
Route::get('/admin/questionpaper', [QuestionpaperController::class, 'index'])->middleware(['auth:admin']);
// Route::get('/admin/questionpaper', [PaperQuestionsController::class, 'index']);
Route::get('/admin/listquestion', [QuestionpaperController::class, 'view']);
Route::get('/questionpaper/getSubjectList', [QuestionpaperController::class, 'getSubjectList']);
Route::get('/questionPaper/getQuestionPaperList', [QuestionpaperController::class, 'getQuestionPaperList']);
Route::get('/questionPaper/getchapterlist', [QuestionpaperController::class, 'getchapterlist']);
Route::get('/storequestionpaper', [QuestionpaperController::class, 'store']);
Route::get('/view/{id}', [QuestionpaperController::class, 'viewdata']);
Route::get('/delete/{id}', [QuestionpaperController::class, 'deletedata']);
Route::post('questionpaper/save', [QuestionPaperController::class, 'save']);
Route::get('/fetchquestion/paper', [QuestionPaperController::class, 'fetch']);
Route::get('/fetchingquestion/paper', [QuestionPaperController::class, 'fetching']);
Route::get('/getfinalpaper', [QuestionPaperController::class, 'finalppr']);
Route::get('/storefinalquestionpaper', [QuestionPaperController::class, 'storeppr']);
Route::get('/storelink', [QuestionPaperController::class, 'storelink']);
Route::get('/getpaperids', [QuestionPaperController::class, 'storeproduct']);
Route::get('/getQuestionId', [QuestionPaperController::class, 'viewqes']);
Route::get('/getQuestionpaperId', [QuestionPaperController::class, 'addques']);
Route::get('questionpapaer/delete/{id}', [QuestionPaperController::class, 'destroy']);

Route::get('/quiz', [QuizsController::class, 'index']);
Route::post('/quiz/store', [QuizsController::class, 'store']);
Route::get('/quizs/getSubjectList/', [QuizsController::class, 'getSubjectList']);
Route::get('/quizs/getchapterlist/', [QuizsController::class, 'getchapterlist']);
Route::get('/quizs', [QuizsController::class, 'quizs']);

//product//
Route::get('/addproduct', [ProductController::class, 'index']);
Route::post('/storeproduct', [ProductController::class, 'store']);
Route::get('/product/paperids', [ProductController::class, 'showpprids']);
Route::get('/publishpaper', [ProductController::class, 'userChangeStatus']);



Route::get('/sub_product', [SubProductController::class, 'index']);
Route::post('/store/sub_product', [SubProductController::class, 'store']);

Route::get('/ans', [AnswerController::class, 'create']);
Route::get('/admin/ans', [AnswerController::class, 'index']);


//checkerAnswerSheet//
Route::get('/checker', [CheckerAnswerController::class, 'index']);

//Querycontroller//
Route::get('/queries', [QueryController::class, 'create']);
Route::get('/admin/queries', [QueryController::class, 'index']);

//user controller//
Route::get('/corce', [CaController::class, 'create']);
Route::get('/add', [CourceController::class, 'create']);
Route::get('/subject', [SubjectController::class, 'create']);
Route::get('/chapter', [ChapterController::class, 'create']);
Route::get('/unit', [QuetionController::class, 'create']);
Route::get('/groups', [GroupsController::class, 'create']);
Route::get('/showlist', [QuetionController::class, 'shows']);
Route::get('/questionpaper', [QuestionpaperController::class, 'create']);
Route::get('/listquestion', [QuestionpaperController::class, 'views']);


//frontend site controller//

Route::get('/', function () {
    return view('index');
});
//Instructor Registration
Route::get('/instructor-registration', function () {
    return view('instructor-registration');
});

//shop
Route::get('/shop', function () {
    return view('shop');
})->name('products.list');
Route::get('/shop/ca-foundation-notes', function () {
    return view('ca-foundation-notes');
});


Route::get('/quez', [StudentQuizsController::class, 'index']);
Route::get('/quez/getSubjectList', [StudentQuizsController::class, 'getSubjectList']);
Route::get('/quez/getchapterlist', [StudentQuizsController::class, 'getchapterlist']);
Route::get('/quez/getQizs', [StudentQuizsController::class, 'getQuizquestion']);
Route::get('/getquiz/{data}', [StudentQuizsController::class, 'getQuiz']);





Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart-store', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
//end frontend site controller//

// Frontend Dashbord //
// Route::get('/student/dashboard',[StudentDashController::class,'index']);

Route::get('/subjectivetest', [SubjectiveTestController::class, 'index']);
Route::get('/premiumtest/{id}', [SubjectiveTestController::class, 'create']);
Route::get('/subtestaction/{id}', [SubjectiveTestController::class, 'insert']);


Route::get('/objectivetest', [ObjectiveTestController::class, 'index']);
Route::get('/objpremiumtest/{id}', [ObjectiveTestController::class, 'create']);
Route::get('/objtestaction/{id}', [ObjectiveTestController::class, 'insert']);
Route::get('/objtestpaper/{id}', [ObjectiveTestController::class, 'test']);

Route::get('/order', function () {
    return view('cart/order');
});
