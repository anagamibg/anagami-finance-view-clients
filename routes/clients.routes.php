<?php

/*
|--------------------------------------------------------------------------
| Clients module routes (Anagami Finance View, AFV)
|--------------------------------------------------------------------------
|
| Route definitions extracted from the main application:
|   - routes/web.php            (authenticated group: prefix "account")
|   - routes/web-public.php     (public contract signing / signed contract view)
|   - routes/web-settings.php   (contract settings)
|   - routes/SuperAdmin/web-public.php (client self-registration)
|
| AFV note: the sidebar items for Clients and Contracts are NOT hidden in
| config/databackd.php; only some client-profile tabs and the client
| dashboard tab are (see README).
|
| This file is NOT auto-loaded. Either require it from RouteServiceProvider
| or paste the groups below into the corresponding original route files.
| TicketController, PublicUrlController (contract* methods) and
| SuperAdmin\FrontendController (clientSignup / clientRegister) are shared
| controllers that are NOT part of this module and must exist in the host app.
|
*/

use App\Http\Controllers\ClientCategoryController;
use App\Http\Controllers\ClientContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientDocController;
use App\Http\Controllers\ClientNoteController;
use App\Http\Controllers\ClientSubCategoryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContractDiscussionController;
use App\Http\Controllers\ContractFileController;
use App\Http\Controllers\ContractRenewController;
use App\Http\Controllers\ContractSettingController;
use App\Http\Controllers\ContractTemplateController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\PublicUrlController;
use App\Http\Controllers\SuperAdmin\FrontendController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authenticated routes (original: routes/web.php)
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'multi-company-select', 'email_verified'], 'prefix' => 'account'], function () {

    // Clients
    Route::post('approve/{id}', [ClientController::class, 'approve'])->name('clients.approve');
    Route::post('save-consent-purpose-data/{client}', [ClientController::class, 'saveConsentLeadData'])->name('clients.save_consent_purpose_data');
    Route::get('clients/gdpr-consent', [ClientController::class, 'consent'])->name('clients.gdpr_consent');
    Route::post('clients/save-client-consent/{lead}', [ClientController::class, 'saveClientConsent'])->name('clients.save_client_consent');
    Route::post('clients/ajax-details/{id}', [ClientController::class, 'ajaxDetails'])->name('clients.ajax_details');
    Route::get('clients/client-details/{id}', [ClientController::class, 'clientDetails'])->name('clients.client_details');
    Route::post('clients/project-list/{id}', [ClientController::class, 'projectList'])->name('clients.project_list');
    Route::post('clients/apply-quick-action', [ClientController::class, 'applyQuickAction'])->name('clients.apply_quick_action');
    Route::get('clients/import', [ClientController::class, 'importClient'])->name('clients.import');
    Route::post('clients/import', [ClientController::class, 'importStore'])->name('clients.import.store');
    Route::post('clients/import/process', [ClientController::class, 'importProcess'])->name('clients.import.process');
    Route::get('clients/finance-count/{id}', [ClientController::class, 'financeCount'])->name('clients.finance_count');
    Route::resource('clients', ClientController::class);

    // Client contacts
    Route::post('client-contacts/apply-quick-action', [ClientContactController::class, 'applyQuickAction'])->name('client-contacts.apply_quick_action');
    Route::get('get-contacts', [TicketController::class, 'getContacts'])->name('get.contacts');
    Route::resource('client-contacts', ClientContactController::class);

    // Client notes
    Route::get('client-notes/ask-for-password/{id}', [ClientNoteController::class, 'askForPassword'])->name('client_notes.ask_for_password');
    Route::post('client-notes/check-password', [ClientNoteController::class, 'checkPassword'])->name('client_notes.check_password');
    Route::post('client-notes/apply-quick-action', [ClientNoteController::class, 'applyQuickAction'])->name('client-notes.apply_quick_action');
    Route::post('client-notes/showVerified/{id}', [ClientNoteController::class, 'showVerified'])->name('client-notes.show_verified');
    Route::resource('client-notes', ClientNoteController::class);

    // Client documents
    Route::get('client-docs/download/{id}', [ClientDocController::class, 'download'])->name('client-docs.download');
    Route::resource('client-docs', ClientDocController::class);

    // Client category & subcategory
    Route::resource('clientCategory', ClientCategoryController::class);

    Route::get('getClientSubCategories/{id}', [ClientSubCategoryController::class, 'getSubCategories'])->name('get_client_sub_categories');
    Route::resource('clientSubCategory', ClientSubCategoryController::class);

    // Contracts
    Route::post('contracts/apply-quick-action', [ContractController::class, 'applyQuickAction'])->name('contracts.apply_quick_action');
    Route::get('contracts/download/{id}', [ContractController::class, 'download'])->name('contracts.download');
    Route::post('contracts/sign/{id}', [ContractController::class, 'sign'])->name('contracts.sign');
    Route::post('companySign/sign/{id}', [ContractController::class, 'companySign'])->name('companySign.sign');
    Route::get('companySignStore/sign/{id}', [ContractController::class, 'companiesSign'])->name('companySignStore.sign');
    Route::post('contracts/project-detail/{id}', [ContractController::class, 'projectDetail'])->name('contracts.project_detail');
    Route::get('contracts/company-sig/{id}', [ContractController::class, 'companySig'])->name('contracts.company_sig');

    Route::group(['prefix' => 'contracts'], function () {
        Route::resource('contractDiscussions', ContractDiscussionController::class);
        Route::get('contractFiles/download/{id}', [ContractFileController::class, 'download'])->name('contractFiles.download');
        Route::resource('contractFiles', ContractFileController::class);
        Route::resource('contractTypes', ContractTypeController::class);
    });

    Route::resource('contracts', ContractController::class);
    Route::resource('contract-renew', ContractRenewController::class);

    // Contract templates
    Route::post('contract-template/apply-quick-action', [ContractTemplateController::class, 'applyQuickAction'])->name('contract_template.apply_quick_action');
    Route::resource('contract-template', ContractTemplateController::class);
    Route::get('contract-template/download/{id}', [ContractTemplateController::class, 'download'])->name('contract-template.download');
});

/*
|--------------------------------------------------------------------------
| Public routes (original: routes/web-public.php)
|--------------------------------------------------------------------------
*/
Route::post('/contract/sign/{hash}', [PublicUrlController::class, 'contractSign'])->name('front.contract.sign');
Route::get('/contract/download/{id}', [PublicUrlController::class, 'contractDownload'])->name('front.contract.download');
Route::get('/contract/{hash}', [PublicUrlController::class, 'contractView'])->name('front.contract.show')->middleware('signed');

/*
|--------------------------------------------------------------------------
| Settings routes (original: routes/web-settings.php, prefix "account/settings")
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => 'account/settings'], function () {
    /* Contract Setting */
    Route::resource('contract-settings', ContractSettingController::class);
});

/*
|--------------------------------------------------------------------------
| Client self-registration (original: routes/SuperAdmin/web-public.php)
|--------------------------------------------------------------------------
*/
Route::group(['as' => 'front.', 'middleware' => ['web']], function () {
    Route::get('client-signup/{company:hash}', [FrontendController::class, 'clientSignup'])->name('client-signup');
    Route::middleware('guest')->group(function () {
        Route::post('client-signup/{company:hash}', [FrontendController::class, 'clientRegister'])->name('client-register');
    });
});
