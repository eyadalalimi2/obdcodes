<aside class="main-sidebar elevation-4"
    style="background: linear-gradient(135deg, #2c3e50, #4ca1af); color: white; width: 250px; position: fixed; height: 100vh; overflow-y: auto; right: 0; left: auto;">

    <a href="{{ route('admin.dashboard') }}" class="brand-link text-center"
        style="color: #fff; font-weight: bold; border-bottom: 1px solid rgba(255,255,255,0.2); padding: 15px;">
        <i class="fas fa-tools"></i> لوحة التحكم
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" style="text-align: right;" data-widget="treeview"
                role="menu">

                {{-- إدارة الأكواد --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-tools" style="color: #e91e63;"></i>
                        <p>أكواد الأعطال <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-right: 20px;">
                        <li class="nav-item">
                            <a href="{{ route('admin.obd_codes.index') }}" class="nav-link text-white">
                                <i class="fas fa-list nav-icon"></i>
                                <p>قائمة الأكواد</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.obd_translations.index') }}" class="nav-link text-white">
                                <i class="fas fa-language nav-icon"></i>
                                <p>ترجمة الأكواد</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.obd_codes.import.form') }}" class="nav-link">
                                <i class="fas fa-file-import">
                                    
                                </i>
                                استيراد أكواد OBD
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('admin.obd_translations.report') }}" class="nav-link text-white">
                                <i class="fas fa-chart-pie nav-icon"></i>
                                <p>تقرير الترجمات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.obd_translations.manager') }}" class="nav-link text-white">
                                <i class="fas fa-magic nav-icon"></i>
                                <p>إدارة الترجمة التفاعلية</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- إدارة قاعدة البيانات --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-database" style="color: #00c853;"></i>
                        <p>إدارة قاعدة البيانات <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-right: 20px;">
                        <li class="nav-item">
                            <a href="{{ route('admin.database.tables') }}" class="nav-link text-white">
                                <i class="fas fa-table nav-icon"></i>
                                <p>عرض الجداول</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.database.columns') }}" class="nav-link text-white">
                                <i class="fas fa-columns nav-icon"></i>
                                <p>إدارة الأعمدة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.database.sql') }}" class="nav-link text-white">
                                <i class="fas fa-terminal nav-icon"></i>
                                <p>تنفيذ SQL</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- إدارة المحتوى --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-folder-open" style="color: #ff9800;"></i>
                        <p>إدارة المحتوى <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-right: 20px;">
                        <li class="nav-item"><a href="{{ route('admin.posts.index') }}" class="nav-link text-white"><i
                                    class="fas fa-newspaper nav-icon"></i>
                                <p>المقالات</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.categories.index') }}"
                                class="nav-link text-white"><i class="fas fa-tags nav-icon"></i>
                                <p>التصنيفات</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.pages.index') }}" class="nav-link text-white"><i
                                    class="fas fa-file-alt nav-icon"></i>
                                <p>الصفحات الثابتة</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.faqs.index') }}" class="nav-link text-white"><i
                                    class="fas fa-question-circle nav-icon"></i>
                                <p>الأسئلة الشائعة</p>
                            </a></li>
                    </ul>
                </li>

                {{-- إدارة السيارات --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-car" style="color: #607d8b;"></i>
                        <p>إدارة السيارات <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-right: 20px;">
                        <li class="nav-item"><a href="{{ route('admin.cars.index') }}" class="nav-link text-white"><i
                                    class="fas fa-car nav-icon"></i>
                                <p>السيارات</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.brands.index') }}" class="nav-link text-white"><i
                                    class="fas fa-building nav-icon"></i>
                                <p>الشركات</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.models.index') }}"
                                class="nav-link text-white"><i class="fas fa-car-side nav-icon"></i>
                                <p>الموديلات</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.model_years.index') }}"
                                class="nav-link text-white"><i class="fas fa-calendar-alt nav-icon"></i>
                                <p>سنوات الإنتاج</p>
                            </a></li>
                    </ul>
                </li>

                {{-- إدارة اللغات --}}
                <li class="nav-item">
                    <a href="{{ route('admin.languages.index') }}" class="nav-link text-white">
                        <i class="nav-icon fas fa-language" style="color: #3f51b5;"></i>
                        <p>إدارة اللغات</p>
                    </a>
                </li>

                {{-- ترجمة النظام --}}
                <li class="nav-item">
                    <a href="{{ route('admin.translations.index') }}" class="nav-link text-white">
                        <i class="nav-icon fas fa-language" style="color: #673ab7;"></i>
                        <p>ترجمة لوحة التحكم</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.translations.site') }}" class="nav-link text-white">
                        <i class="nav-icon fas fa-globe" style="color: #3f51b5;"></i>
                        <p>ترجمة واجهة الموقع</p>
                    </a>
                </li>

                {{-- إدارة المستخدمين --}}
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link text-white">
                        <i class="nav-icon fas fa-users" style="color: #2196f3;"></i>
                        <p>إدارة المستخدمين</p>
                    </a>
                </li>

                {{-- إعدادات الإعلانات --}}
                <li class="nav-item">
                    <a href="{{ route('admin.ads_settings.index') }}" class="nav-link text-white">
                        <i class="nav-icon fas fa-ad" style="color: #f39c12;"></i>
                        <p>إعدادات الإعلانات</p>
                    </a>
                </li>

                {{-- سجل الأحداث --}}
                <li class="nav-item">
                    <a href="{{ route('admin.system.logs') }}" class="nav-link text-white">
                        <i class="nav-icon fas fa-file-alt" style="color: #e74c3c;"></i>
                        <p>سجل الأحداث</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
