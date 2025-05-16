@extends('admin.layouts.admin')

@section('title', 'إضافة مستخدم جديد')

@section('content')
<div class="container-fluid">

    <h4 class="mb-4">إضافة مستخدم جديد</h4>

    @if ($errors->any())<div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                <div class="form-group">
                    <label>الاسم</label>
                    <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
                </div>

                <div class="form-group">
                    <label>رقم الهاتف</label>
                    <input type="text" name="phone" class="form-control" required value="{{ old('phone') }}">
                </div>

                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label>كلمة السر</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>تأكيد كلمة السر</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>نوع المستخدم</label>
                    <select name="is_admin" class="form-control" required>
                        <option value="0" {{ old('is_admin') == '0' ? 'selected' : '' }}>مستخدم عادي</option>
                        <option value="1" {{ old('is_admin') == '1' ? 'selected' : '' }}>مسؤول</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">أضافة المستخدم</button>
            </form>
        </div>
    </div>

</div>
@endsection
