@extends('admin.layouts.admin')

@section('title', 'تفاصيل الكود ' . $obdCode->code)

@section('content')
    <div class="container-fluid">

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5>تفاصيل الكود: {{ $obdCode->code }}</h5>
                
            </div>
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الكود:</div>
                    <div class="col-md-9">{{ $obdCode->code }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">العنوان:</div>
                    <div class="col-md-9">{{ $obdCode->title }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الوصف:</div>
                    <div class="col-md-9">{{ $obdCode->description }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الأعراض:</div>
                    <div class="col-md-9">{{ $obdCode->symptoms }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الأسباب المحتملة:</div>
                    <div class="col-md-9">{{ $obdCode->causes }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الحلول المقترحة:</div>
                    <div class="col-md-9">{{ $obdCode->solutions }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الشدة:</div>
                    <div class="col-md-9">{{ $obdCode->severity }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">التشخيص:</div>
                    <div class="col-md-9">{{ $obdCode->diagnosis }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الفئة:</div>
                    <div class="col-md-9">{{ $obdCode->category }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">رابط المصدر:</div>
                    <div class="col-md-9">
                        @if ($obdCode->source_url)
                            <a href="{{ $obdCode->source_url }}" target="_blank">{{ $obdCode->source_url }}</a>
                        @else
                            <span class="text-muted">لا يوجد</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">الصورة:</div>
                    <div class="col-md-9">
                        @if ($obdCode->image)
                            <img src="{{ asset('storage/' . $obdCode->image) }}" width="150">
                        @else
                            <span class="text-muted">بدون صورة</span>
                        @endif
                    </div>
                </div>
            

            </div>
            
        </div>
        <a href="{{ route('admin.obd_codes.index') }}" class="btn btn-sm btn-light">
            <i class="fas fa-arrow-right"></i> العودة للقائمة
        </a>
    </div>
@endsection
