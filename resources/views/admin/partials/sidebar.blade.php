<aside class="main-sidebar elevation-4"
    style="background: linear-gradient(135deg, #2c3e50, #4ca1af); color: white; width: 250px; position: fixed; height: 100vh; overflow-y: auto; right: 0; left: auto;">

    {{-- تحميل استايل وشيفرة الجافاسكربت --}}
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>

    <div id="accordian">
        <ul class="main-navbar">
            <div class="selector-active">
                <div class="top"></div>
                <div class="bottom"></div>
            </div>
            {{-- لوحة التحكم --}}
            <li class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tools"></i> لوحة التحكم
                </a>
            </li>

            {{-- أكواد الأعطال --}}
            <li class="{{ Request::is('admin/obd_codes*') ? 'active' : '' }}">
                <a href="{{ route('admin.obd_codes.index') }}">
                    <i class="fas fa-list"></i> قائمة الأكواد
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.obd_translations.index') ? 'active' : '' }}">
                <a href="{{ route('admin.obd_translations.index') }}">
                    <i class="fas fa-language"></i> ترجمة الأكواد
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.obd_codes.import.form') ? 'active' : '' }}">
                <a href="{{ route('admin.obd_codes.import.form') }}">
                    <i class="fas fa-file-import"></i> استيراد أكواد OBD
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.obd_translations.report') ? 'active' : '' }}">
                <a href="{{ route('admin.obd_translations.report') }}">
                    <i class="fas fa-chart-pie"></i> تقرير الترجمات
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.obd_translations.manager') ? 'active' : '' }}">
                <a href="{{ route('admin.obd_translations.manager') }}">
                    <i class="fas fa-magic"></i> إدارة الترجمة التفاعلية
                </a>
            </li>

            {{-- إدارة قاعدة البيانات --}}
            <li class="{{ Request::is('admin/database/*') ? 'active' : '' }}">
                <a href="{{ route('admin.database.tables') }}">
                    <i class="fas fa-table"></i> عرض الجداول
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.database.columns') ? 'active' : '' }}">
                <a href="{{ route('admin.database.columns') }}">
                    <i class="fas fa-columns"></i> إدارة الأعمدة
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.database.sql') ? 'active' : '' }}">
                <a href="{{ route('admin.database.sql') }}">
                    <i class="fas fa-terminal"></i> تنفيذ SQL
                </a>
            </li>

            {{-- إدارة المحتوى --}}
            <li class="{{ Request::routeIs('admin.posts.index') ? 'active' : '' }}">
                <a href="{{ route('admin.posts.index') }}">
                    <i class="fas fa-newspaper"></i> المقالات
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.categories.index') ? 'active' : '' }}">
                <a href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-tags"></i> التصنيفات
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.pages.index') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.index') }}">
                    <i class="fas fa-file-alt"></i> الصفحات الثابتة
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.faqs.index') ? 'active' : '' }}">
                <a href="{{ route('admin.faqs.index') }}">
                    <i class="fas fa-question-circle"></i> الأسئلة الشائعة
                </a>
            </li>

            {{-- إدارة السيارات --}}
            <li class="{{ Request::routeIs('admin.cars.index') ? 'active' : '' }}">
                <a href="{{ route('admin.cars.index') }}">
                    <i class="fas fa-car"></i> السيارات
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.brands.index') ? 'active' : '' }}">
                <a href="{{ route('admin.brands.index') }}">
                    <i class="fas fa-building"></i> الشركات
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.models.index') ? 'active' : '' }}">
                <a href="{{ route('admin.models.index') }}">
                    <i class="fas fa-car-side"></i> الموديلات
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.model_years.index') ? 'active' : '' }}">
                <a href="{{ route('admin.model_years.index') }}">
                    <i class="fas fa-calendar-alt"></i> سنوات الإنتاج
                </a>
            </li>

            {{-- إدارة اللغات --}}
            <li class="{{ Request::routeIs('admin.languages.index') ? 'active' : '' }}">
                <a href="{{ route('admin.languages.index') }}">
                    <i class="fas fa-language"></i> إدارة اللغات
                </a>
            </li>

            {{-- ترجمة لوحة التحكم --}}
            <li class="{{ Request::routeIs('admin.translations.index') ? 'active' : '' }}">
                <a href="{{ route('admin.translations.index') }}">
                    <i class="fas fa-language"></i> ترجمة لوحة التحكم
                </a>
            </li>
            <li class="{{ Request::routeIs('admin.translations.site') ? 'active' : '' }}">
                <a href="{{ route('admin.translations.site') }}">
                    <i class="fas fa-globe"></i> ترجمة واجهة الموقع
                </a>
            </li>

            {{-- إدارة المستخدمين --}}
            <li class="{{ Request::routeIs('admin.users.index') ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fas fa-users"></i> إدارة المستخدمين
                </a>
            </li>

            {{-- إعدادات الإعلانات --}}
            <li class="{{ Request::routeIs('admin.ads_settings.index') ? 'active' : '' }}">
                <a href="{{ route('admin.ads_settings.index') }}">
                    <i class="fas fa-ad"></i> إعدادات الإعلانات
                </a>
            </li>

            {{-- سجل الأحداث --}}
            <li class="{{ Request::routeIs('admin.system.logs') ? 'active' : '' }}">
                <a href="{{ route('admin.system.logs') }}">
                    <i class="fas fa-file-alt"></i> سجل الأحداث
                </a>
            </li>

        </ul>
    </div>
</aside>
