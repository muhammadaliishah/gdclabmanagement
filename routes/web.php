<?php

use App\Http\Controllers\Backend\ABOBloodGroupTestControllers\ABOBloodGroupTestController;
use App\Http\Controllers\Backend\BioChemistryDiagnosticControllers\BilirubinBioChemistryTestsController;
use App\Http\Controllers\Backend\BioChemistryDiagnosticControllers\BioChemistryDiagnosticTestsController;
use App\Http\Controllers\Backend\BloodCrossMatchIssueSlipTestControllers\BloodCrossMatchIssueSlipTestController;
use App\Http\Controllers\Backend\ClinicalPathologyTestControllers\ClinicalPathologyTestController;
use App\Http\Controllers\Backend\CompleteBloodCountControllers\CompleteBloodCountController;
use App\Http\Controllers\Backend\ReportsControllers\ReportsControllersController;
use App\Http\Controllers\Backend\SemanAnalysisPostCoitalTestControllers\SemanAnalysisPostCoitalTestController;
use App\Http\Controllers\Backend\SerologicalRapidDiagnosticTestControllers\SerologicalRapidDiagnosticTestController;
use App\Http\Controllers\Backend\Settings\DoctorsController;
use App\Http\Controllers\Backend\Settings\UsersController;
use App\Http\Controllers\Backend\UrinePregnancyTestControllers\UrinePregnancyTestController;
use App\Http\Controllers\Backend\UrineTestControllers\UrineTestsController;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'backend/users'], function () {

        Route::get('/index', [UsersController::class, 'index'])->name('users.index');
        Route::get('/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/store', [UsersController::class, 'store'])->name('users.store');
        Route::get('/show/{id}', [UsersController::class, 'show'])->name('users.show');
        Route::post('/update/{id}', [UsersController::class, 'update'])->name('users.update');
    });

    Route::group(['prefix' => 'backend/doctors'], function () {

        Route::get('/index', [DoctorsController::class, 'index'])->name('doctors.index');
        Route::get('/create', [DoctorsController::class, 'create'])->name('doctors.create');
        Route::post('/store', [DoctorsController::class, 'store'])->name('doctors.store');
        Route::get('/show/{id}', [DoctorsController::class, 'show'])->name('doctors.show');
        Route::post('/update/{id}', [DoctorsController::class, 'update'])->name('doctors.update');
    });

    Route::group(['prefix' => 'backend/urine/tests'], function () {

        Route::get('/index', [UrineTestsController::class, 'index'])->name('urine-tests.index');
        Route::get('/create', [UrineTestsController::class, 'create'])->name('urine-tests.create');
        Route::post('/store', [UrineTestsController::class, 'store'])->name('urine-tests.store');
        Route::get('/edit/{id}', [UrineTestsController::class, 'edit'])->name('urine-tests.edit');
        Route::post('/update/{id}', [UrineTestsController::class, 'update'])->name('urine-tests.update');
    });

    Route::group(['prefix' => 'backend/bio-chemistry-diagnostic/tests'], function () {

        Route::get('/index', [BioChemistryDiagnosticTestsController::class, 'index'])->name('bio-chemistry-diagnostic.index');
        Route::get('/create', [BioChemistryDiagnosticTestsController::class, 'create'])->name('bio-chemistry-diagnostic.create');
        Route::post('/store', [BioChemistryDiagnosticTestsController::class, 'store'])->name('bio-chemistry-diagnostic.store');
        Route::get('/edit/{id}', [BioChemistryDiagnosticTestsController::class, 'edit'])->name('bio-chemistry-diagnostic.edit');
        Route::post('/update/{id}', [BioChemistryDiagnosticTestsController::class, 'update'])->name('bio-chemistry-diagnostic.update');
    });

    Route::group(['prefix' => 'backend/bilirubin/bio-chemistry-diagnostic/tests'], function () {

        Route::get('/index', [BilirubinBioChemistryTestsController::class, 'index'])->name('bilirubin-bio-chemistry.index');
        Route::get('/create', [BilirubinBioChemistryTestsController::class, 'create'])->name('bilirubin-bio-chemistry.create');
        Route::post('/store', [BilirubinBioChemistryTestsController::class, 'store'])->name('bilirubin-bio-chemistry.store');
        Route::get('/edit/{id}', [BilirubinBioChemistryTestsController::class, 'edit'])->name('bilirubin-bio-chemistry.edit');
        Route::post('/update/{id}', [BilirubinBioChemistryTestsController::class, 'update'])->name('bilirubin-bio-chemistry.update');
    });

    Route::group(['prefix' => 'backend/urine/pregnancy/tests'], function () {

        Route::get('/index', [UrinePregnancyTestController::class, 'index'])->name('urine-pregnancy.index');
        Route::get('/create', [UrinePregnancyTestController::class, 'create'])->name('urine-pregnancy.create');
        Route::post('/store', [UrinePregnancyTestController::class, 'store'])->name('urine-pregnancy.store');
        Route::get('/edit/{id}', [UrinePregnancyTestController::class, 'edit'])->name('urine-pregnancy.edit');
        Route::post('/update/{id}', [UrinePregnancyTestController::class, 'update'])->name('urine-pregnancy.update');
    });

    Route::group(['prefix' => 'backend/abo/blood/group/tests'], function () {

        Route::get('/index', [ABOBloodGroupTestController::class, 'index'])->name('abo-blood-group.index');
        Route::get('/create', [ABOBloodGroupTestController::class, 'create'])->name('abo-blood-group.create');
        Route::post('/store', [ABOBloodGroupTestController::class, 'store'])->name('abo-blood-group.store');
        Route::get('/edit/{id}', [ABOBloodGroupTestController::class, 'edit'])->name('abo-blood-group.edit');
        Route::post('/update/{id}', [ABOBloodGroupTestController::class, 'update'])->name('abo-blood-group.update');
    });

    Route::group(['prefix' => 'backend/serological/rapid/diagnostic/tests'], function () {

        Route::get('/index', [SerologicalRapidDiagnosticTestController::class, 'index'])->name('rdt.index');
        Route::get('/create', [SerologicalRapidDiagnosticTestController::class, 'create'])->name('rdt.create');
        Route::post('/store', [SerologicalRapidDiagnosticTestController::class, 'store'])->name('rdt.store');
        Route::get('/edit/{id}', [SerologicalRapidDiagnosticTestController::class, 'edit'])->name('rdt.edit');
        Route::post('/update/{id}', [SerologicalRapidDiagnosticTestController::class, 'update'])->name('rdt.update');
    });

    Route::group(['prefix' => 'backend/blood/cross-match/issue-slip/tests'], function () {

        Route::get('/index', [BloodCrossMatchIssueSlipTestController::class, 'index'])->name('blood-cross-match.index');
        Route::get('/create', [BloodCrossMatchIssueSlipTestController::class, 'create'])->name('blood-cross-match.create');
        Route::post('/store', [BloodCrossMatchIssueSlipTestController::class, 'store'])->name('blood-cross-match.store');
        Route::get('/edit/{id}', [BloodCrossMatchIssueSlipTestController::class, 'edit'])->name('blood-cross-match.edit');
        Route::post('/update/{id}', [BloodCrossMatchIssueSlipTestController::class, 'update'])->name('blood-cross-match.update');
    });

    Route::group(['prefix' => 'backend/complete/blood/count/CBC/ESR'], function () {

        Route::get('/index', [CompleteBloodCountController::class, 'index'])->name('complete-blood-count.index');
        Route::get('/create', [CompleteBloodCountController::class, 'create'])->name('complete-blood-count.create');
        Route::post('/store', [CompleteBloodCountController::class, 'store'])->name('complete-blood-count.store');
        Route::get('/edit/{id}', [CompleteBloodCountController::class, 'edit'])->name('complete-blood-count.edit');
        Route::post('/update/{id}', [CompleteBloodCountController::class, 'update'])->name('complete-blood-count.update');
    });

    Route::group(['prefix' => 'backend/seman-analysis/post-coital'], function () {

        Route::get('/index', [SemanAnalysisPostCoitalTestController::class, 'index'])->name('seman-analysis-post-coital.index');
        Route::get('/create', [SemanAnalysisPostCoitalTestController::class, 'create'])->name('seman-analysis-post-coital.create');
        Route::post('/store', [SemanAnalysisPostCoitalTestController::class, 'store'])->name('seman-analysis-post-coital.store');
        Route::get('/edit/{id}', [SemanAnalysisPostCoitalTestController::class, 'edit'])->name('seman-analysis-post-coital.edit');
        Route::post('/update/{id}', [SemanAnalysisPostCoitalTestController::class, 'update'])->name('seman-analysis-post-coital.update');
    });


    Route::group(['prefix' => 'backend/clinical/pathology'], function () {

        Route::get('/index', [ClinicalPathologyTestController::class, 'index'])->name('clinical-pathology.index');
        Route::get('/create', [ClinicalPathologyTestController::class, 'create'])->name('clinical-pathology.create');
        Route::post('/store', [ClinicalPathologyTestController::class, 'store'])->name('clinical-pathology.store');
        Route::get('/edit/{id}', [ClinicalPathologyTestController::class, 'edit'])->name('clinical-pathology.edit');
        Route::post('/update/{id}', [ClinicalPathologyTestController::class, 'update'])->name('clinical-pathology.update');
    });

    Route::group(['prefix' => 'backend/reports'], function () {

        Route::get('/complete-blood-analysis/{id}/print', [ReportsControllersController::class, 'printCompleteBloodCountTest'])->name('complete-blood-count.print');
        Route::get('/semen-analysis/post-coital/{id}/print', [ReportsControllersController::class, 'printSemanAnalysisPostCoitalTest'])->name('seman-analysis-analysis.print');
        Route::get('/urine-test/{id}/print', [ReportsControllersController::class, 'printUrineTest'])->name('urine-test.print');
        Route::get('/urine/pregnancy/test/{id}/print', [ReportsControllersController::class, 'printUrinePregnancyTest'])->name('urine.pregnancy.test.print');
        Route::get('/clinical/pathology/test/{id}/print', [ReportsControllersController::class, 'printClinicalPathologyTest'])->name('clinical-pathology.print');
        Route::get('/abo/blood/group/{id}/print', [ReportsControllersController::class, 'printABOBloodGroupTest'])->name('abo.blood.group.print');
        Route::get('/bilirubin/bio/chemistry/test/{id}/print', [ReportsControllersController::class, 'printBilirubinBioChemistryTest'])->name('bilirubin.bio.chemistry.test.print');
        Route::get('/serological/rapid/diagnostic/test/{id}/print', [ReportsControllersController::class, 'printSerologicalRapidDiagnosticTest'])->name('serological.rapid.diagnostic.test.print');
        Route::get('/bio/chemistry/diagnostic/test/{id}/print', [ReportsControllersController::class, 'printBioChemistryDiagnosticTest'])->name('bio.chemistry.diagnostic.test.print');
        Route::get('/blood/crossmatch/issue/slip/{id}/print', [ReportsControllersController::class, 'printBloodCrossMatchIssueSlipTest'])->name('blood.crossmatch.issue.slip.print');
    });


});