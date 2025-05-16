@extends('admin.layouts.admin')

@section('title', 'لوحة التحكم الرئيسية')

@section('content')
<div class="container-fluid" style="direction: rtl;">

    <div class="row">

        <!-- المستخدمين -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #667eea, #764ba2); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2">عدد المستخدمين</h5>
                    <h2>{{ $usersCount }}</h2>
                </div>
            </div>
        </div>

        <!-- المقالات -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #ff7e5f, #feb47b); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2">عدد المقالات</h5>
                    <h2>{{ $postsCount }}</h2>
                </div>
            </div>
        </div>

        <!-- أكواد الأعطال -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #43cea2, #185a9d); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2">عدد أكواد الأعطال</h5>
                    <h2>{{ $obdCodesCount }}</h2>
                </div>
            </div>
        </div>

        <!-- الصفحات الثابتة -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #ff512f, #dd2476); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2">عدد الصفحات الثابتة</h5>
                    <h2>{{ $pagesCount }}</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        <!-- المستخدمين -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #667eea, #764ba2); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2">عدد الأكواد في الفئة P</h5>
                    <h2>{{ $countP }}</h2>
                </div>
            </div>
        </div>

        <!-- المقالات -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #ff7e5f, #feb47b); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2"> عدد الأكواد في الفئة C</h5>
                    <h2>{{ $countC }}</h2>
                </div>
            </div>
        </div>

        <!-- أكواد الأعطال -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #43cea2, #185a9d); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2">عدد الأكواد في الفئة B</h5>
                    <h2>{{ $countB }}</h2>
                </div>
            </div>
        </div>

        <!-- الصفحات الثابتة -->
        <div class="col-md-3 mb-4">
            <div class="card text-white shadow-sm" style="background: linear-gradient(135deg, #ff512f, #dd2476); border: none; border-radius: 12px;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-2">عدد الأكواد في الفئة U</h5>
                    <h2>{{ $countU }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- سجل الأنشطة -->
    <div class="card shadow-sm mt-4">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">آخر العمليات</h5>
        </div>
        <div class="card-body">
            @if($recentActivities->count() > 0)
                <ul class="list-group">
                    @foreach($recentActivities as $activity)
                        <li class="list-group-item">
                            <span class="text-muted">{{ $activity->created_at->format('Y-m-d H:i') }}</span> - {{ $activity->description }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted mb-0">لا توجد أنشطة بعد.</p>
            @endif
        </div>
    </div>

</div>
@endsection
