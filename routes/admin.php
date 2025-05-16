<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatabaseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TranslationAdminController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TranslationSiteController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\ObdCodeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ModelController;
use App\Http\Controllers\Admin\ModelYearController;
use App\Http\Controllers\Admin\ObdCodeTranslationController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\AdsSettingController;
use App\Http\Controllers\Admin\TranslationImportController;
use App\Http\Controllers\Admin\JsonTranslationValidatorController;
use App\Http\Controllers\Admin\ObdCodeImportController;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

// لوحة التحكم بعد تسجيل الدخول
Route::middleware(['admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});
Route::middleware(['admin'])->prefix('database')->name('admin.database.')->group(function () {
    Route::get('/tables', [DatabaseController::class, 'index'])->name('tables');
    Route::post('/create-table', [DatabaseController::class, 'createTable'])->name('create');
    Route::post('/drop-table', [DatabaseController::class, 'dropTable'])->name('drop');

    Route::get('/columns', [DatabaseController::class, 'columnsPage'])->name('columns');
    Route::post('/add-column', [DatabaseController::class, 'addColumn'])->name('addColumn');
    Route::post('/edit-column', [DatabaseController::class, 'editColumn'])->name('editColumn');
    Route::post('/drop-column', [DatabaseController::class, 'dropColumn'])->name('dropColumn');

    Route::get('/sql', [DatabaseController::class, 'sqlPage'])->name('sql');
    Route::post('/run-sql', [DatabaseController::class, 'runSql'])->name('runSql');
});
Route::middleware(['admin'])->prefix('users')->name('admin.users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [UserController::class, 'update'])->name('update');
    Route::post('/{id}/delete', [UserController::class, 'destroy'])->name('delete');
    Route::get('/{id}/show', [UserController::class, 'show'])->name('show');
});
Route::middleware(['admin'])->prefix('posts')->name('admin.posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [PostController::class, 'update'])->name('update');
    Route::post('/{id}/delete', [PostController::class, 'destroy'])->name('delete');
});


Route::middleware(['admin'])->prefix('categories')->name('admin.categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [CategoryController::class, 'update'])->name('update');
    Route::post('/{id}/delete', [CategoryController::class, 'destroy'])->name('delete');
});
Route::get('translations', [TranslationAdminController::class, 'index'])->name('admin.translations.index');
Route::post('translations/update', [TranslationAdminController::class, 'update'])->name('admin.translations.update');

Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings.index');
Route::post('/settings/update', [SettingsController::class, 'update'])->name('admin.settings.update');

Route::get('/translations/site', [TranslationSiteController::class, 'index'])->name('admin.translations.site');
Route::post('/translations/site', [TranslationSiteController::class, 'update'])->name('admin.translations.site.update');

Route::resource('pages', PageController::class)->names([
    'index' => 'admin.pages.index',
    'create' => 'admin.pages.create',
    'store' => 'admin.pages.store',
    'edit' => 'admin.pages.edit',
    'update' => 'admin.pages.update',
    'destroy' => 'admin.pages.destroy'
])->parameters(['pages' => 'page']);


Route::resource('faqs', FaqController::class)->names([
    'index' => 'admin.faqs.index',
    'create' => 'admin.faqs.create',
    'store' => 'admin.faqs.store',
    'edit' => 'admin.faqs.edit',
    'update' => 'admin.faqs.update',
    'destroy' => 'admin.faqs.destroy'
])->parameters(['faqs' => 'faq']);


Route::get('/cars', [CarController::class, 'index'])->name('admin.cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('admin.cars.create');
Route::post('/cars/store', [CarController::class, 'store'])->name('admin.cars.store');
Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('admin.cars.destroy');

Route::resource('obd-codes', ObdCodeController::class)->names([
    'create' => 'admin.obd_codes.create',
    'store' => 'admin.obd_codes.store',
    'edit' => 'admin.obd_codes.edit',
    'show' => 'admin.obd_codes.show',
    'update' => 'admin.obd_codes.update',
    'destroy' => 'admin.obd_codes.destroy',
]);
Route::get('obd-codes/{lang?}', [ObdCodeController::class, 'index'])->name('admin.obd_codes.index');

Route::delete('/obd-codes/{id}', [ObdCodeController::class, 'destroy'])->name('admin.obd_codes.delete');

Route::resource('brands', BrandController::class)->names('admin.brands');
Route::resource('models', ModelController::class)->names('admin.models');
Route::resource('model-years', ModelYearController::class)->names('admin.model_years');


Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('obd-translations', [ObdCodeTranslationController::class, 'index'])->name('admin.obd_translations.index');

    Route::get('obd-translations/{obd_code_id}/edit', [ObdCodeTranslationController::class, 'edit'])->name('admin.obd_translations.edit');

    Route::post('obd-translations/{obd_code_id}/update', [ObdCodeTranslationController::class, 'update'])->name('admin.obd_translations.update');
});

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('login');
// Admin login route
Route::get('/admin/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login');
// تصدير واستيراد ترجمات الأكواد JSON
Route::get('obd-translations/export-json', [ObdCodeTranslationController::class, 'exportJson'])->name('admin.obd_translations.export_json');
Route::post('obd-translations/import-json', [ObdCodeTranslationController::class, 'importJson'])->name('admin.obd_translations.import_json');
// routes/admin.php
Route::get('admin/obd_translations/report', [ObdCodeTranslationController::class, 'report'])->name('admin.obd_translations.report');
// صفحة إدارة الترجمة التفاعلية
Route::get('obd-translations/manager', [ObdCodeTranslationController::class, 'showTranslationManager'])->name('admin.obd_translations.manager');

// المراحل الأربع
Route::post('obd-translations/start-import', [ObdCodeTranslationController::class, 'startImport'])->name('admin.obd_translations.start_import');
Route::post('obd-translations/analyze', [ObdCodeTranslationController::class, 'analyzeUntranslatedTexts'])->name('admin.obd_translations.analyze');
Route::post('obd-translations/start-translation', [ObdCodeTranslationController::class, 'startTranslation'])->name('admin.obd_translations.start_translation');
Route::post('obd-translations/export', [ObdCodeTranslationController::class, 'exportToDatabase'])->name('admin.obd_translations.export');

// إدارة السجل
Route::get('system/logs', function () {
    $logPath = storage_path('logs/laravel.log');
    $logs = file_exists($logPath) ? file_get_contents($logPath) : 'لا توجد سجلات حالياً.';
    return view('admin.system.logs', compact('logs'));
})->name('admin.system.logs')->middleware('admin');

Route::post('system/logs/clear', function () {
    file_put_contents(storage_path('logs/laravel.log'), '');
    return redirect()->route('admin.system.logs')->with('success', 'تم مسح السجل بنجاح.');
})->name('admin.system.logs.clear')->middleware('admin');

Route::get('system/logs/download', function () {
    $logPath = storage_path('logs/laravel.log');
    if (!file_exists($logPath)) {
        abort(404);
    }
    return response()->download($logPath, 'laravel.log');
})->name('admin.system.logs.download')->middleware('admin');
// عرض صفحة إدارة الترجمة التفاعلية
Route::get('obd-translations/manager', [ObdCodeTranslationController::class, 'showTranslationManager'])->name('admin.obd_translations.manager');

// بدء عملية استيراد البيانات (المرحلة الأولى)
Route::post('obd-translations/start-import', [ObdCodeTranslationController::class, 'startImport'])->name('admin.obd_translations.start_import');

// تحليل النصوص غير المترجمة (المرحلة الثانية)
Route::post('obd-translations/analyze', [ObdCodeTranslationController::class, 'analyzeUntranslatedTexts'])->name('admin.obd_translations.analyze');

// بدء الترجمة الفعلية (المرحلة الثالثة)
Route::post('obd-translations/start-translation', [ObdCodeTranslationController::class, 'startTranslation'])->name('admin.obd_translations.start_translation');

// تصدير الترجمة إلى قاعدة البيانات (المرحلة الرابعة)
Route::post('obd-translations/export', [ObdCodeTranslationController::class, 'exportToDatabase'])->name('admin.obd_translations.export');



// صفحة إدارة الإعلانات
Route::get('/ads-settings', [AdsSettingController::class, 'index'])->name('admin.ads_settings.index');
// حفظ التعديلات
Route::post('/ads-settings/update', [AdsSettingController::class, 'update'])->name('admin.ads_settings.update');
Route::post('/obd-translations/translate', [ObdCodeTranslationController::class, 'startTranslation'])->name('admin.obd_translations.translate');
// قائمة اللغات
Route::get('languages', [LanguageController::class, 'index'])->name('admin.languages.index');

// إضافة لغة جديدة
Route::get('languages/create', [LanguageController::class, 'create'])->name('admin.languages.create');
Route::post('languages', [LanguageController::class, 'store'])->name('admin.languages.store');

// تعديل لغة
Route::get('languages/{id}/edit', [LanguageController::class, 'edit'])->name('admin.languages.edit');
Route::patch('languages/{id}', [LanguageController::class, 'update'])->name('admin.languages.update');

// حذف لغة
Route::delete('languages/{id}', [LanguageController::class, 'destroy'])->name('admin.languages.destroy');

// تبديل حالة التفعيل
Route::patch('languages/{id}/toggle', [LanguageController::class, 'toggleStatus'])->name('admin.languages.toggle');

// استرداد ملف JSON للترجمات
Route::get('languages/{id}/export-json', [LanguageController::class, 'exportJson'])->name('admin.languages.exportJson');

// عرض ترجمات اللغة
Route::get('languages/{id}/translations', [LanguageController::class, 'viewTranslations'])->name('admin.languages.viewTranslations');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('languages', [LanguageController::class, 'index'])->name('admin.languages.index');
    Route::patch('languages/{id}/toggle', [LanguageController::class, 'toggleStatus'])->name('admin.languages.toggle');
});
Route::get('languages/create', [LanguageController::class, 'create'])->name('admin.languages.create');
Route::post('languages', [LanguageController::class, 'store'])->name('admin.languages.store');

// عرض الترجمات للغة معينة
Route::get('languages/{id}/translations', [LanguageController::class, 'viewTranslations'])
    ->name('admin.languages.translations');

// استرداد ترجمات لغة معينة كـ JSON
Route::get('languages/{id}/export-json', [LanguageController::class, 'exportJson'])
    ->name('admin.languages.export_json');
// استيراد ترجمات من ملف JSON
Route::get('languages/{id}/import-json', [LanguageController::class, 'showImportForm'])->name('admin.languages.importForm');
Route::post('languages/{id}/import-json', [LanguageController::class, 'importJson'])->name('admin.languages.importJson');
Route::prefix('translations/import')->middleware(['admin'])->name('admin.translations.import.')->group(function () {
    Route::get('/', [TranslationImportController::class, 'showImportForm'])->name('');
    Route::post('/validate', [TranslationImportController::class, 'validateJson'])->name('validate');
    Route::post('/process', [TranslationImportController::class, 'processImport'])->name('process');
});



Route::get('translations/json-validator', [JsonTranslationValidatorController::class, 'showForm'])->name('admin.translations.json_validator');
Route::post('translations/json-validator', [JsonTranslationValidatorController::class, 'validateJson'])->name('admin.translations.json_validator.submit');
Route::get('admin/translations/import', [TranslationImportController::class, 'showImportForm'])->name('admin.translations.import');
Route::post('admin/translations/validate', [TranslationImportController::class, 'validateJson'])->name('admin.translations.validate');
Route::post('admin/translations/process', [TranslationImportController::class, 'processImport'])->name('admin.translations.process');
Route::prefix('admin')->name('admin.')->group(function () {
    // عرض صفحة رفع JSON
    Route::get('obd_codes/import', [ObdCodeController::class, 'showImportForm'])
        ->name('obd_codes.import.form');

    // التحقق من صحة ملف JSON وعرض المعاينة
    Route::post('obd_codes/import/validate', [ObdCodeController::class, 'validateImport'])
        ->name('obd_codes.import.validate');

    // التأكيد النهائي واستيراد البيانات
    Route::post('obd_codes/import', [ObdCodeController::class, 'import'])
        ->name('obd_codes.import');
});

Route::prefix('admin')->name('admin.')->group(function () {
    // 1) عرض نموذج الرفع
    Route::get('obd-codes/import', [ObdCodeImportController::class, 'showForm'])
         ->name('obd_codes.import_form');

    // 2) استلام الملف والتحقق
    Route::post('obd-codes/import/validate', [ObdCodeImportController::class, 'validateFile'])
         ->name('obd_codes.import_validate');

    // 3) تأكيد الاستيراد (هنا أضفنا الـ route المفقود)
    Route::post('obd-codes/import/confirm', [ObdCodeImportController::class, 'confirmImport'])
         ->name('obd_codes.import_confirm');
});




