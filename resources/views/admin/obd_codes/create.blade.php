@extends('admin.layouts.admin')
@section('title', 'إضافة كود جديد')

@section('content')
    <div class="container-fluid">
        <h4 class="mb-4">إضافة كود جديد</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.obd_codes.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group"><label>رمز الكود</label><input type="text" name="code" class="form-control" required>
            </div>
            <div class="form-group"><label>العنوان</label><input type="text" name="title" class="form-control"
                    required></div>
            <div class="form-group"><label>الوصف</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group"><label>الأعراض</label>
                <textarea name="symptoms" class="form-control"></textarea>
            </div>
            <div class="form-group"><label>الأسباب</label>
                <textarea name="causes" class="form-control"></textarea>
            </div>
            <div class="form-group"><label>الحلول</label>
                <textarea name="solutions" class="form-control"></textarea>
            </div>
            <div class="form-group"><label>الخطورة</label><input type="text" name="severity" class="form-control"></div>
            <div class="form-group"><label>تشخيص</label>
                <textarea name="diagnosis" class="form-control"></textarea>
            </div>
            <div class="form-group"><label>التصنيف</label><input type="text" name="category" class="form-control"></div>
            <div class="form-group"><label>رابط المصدر</label><input type="text" name="source_url" class="form-control">
            </div>
            <div class="form-group"><label>الصورة</label><input type="file" name="image" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary btn-block">حفظ الكود</button>
        </form>

    </div>
@endsection
