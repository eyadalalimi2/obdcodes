@extends('admin.layouts.admin')

@section('title', 'تعديل المستخدم')

@section('content')
<div class="container-fluid">

    <h4 class="mb-4">تعديل المستخدم</h4>

    @if ($errors->any())<div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                @csrf

                <div class="form-group">
                    <label>الاسم</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}" required>
                </div>

                <div class="form-group">
                    <label>رقم الهاتف</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" required>
                </div>

                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                </div>

                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>تأكيد كلمة المرور</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <div class="form-group">
                    <label>نوع المستخدم</label>
                    <select name="is_admin" class="form-control" required>
                        <option value="0" {{ $user->is_admin ? '' : 'selected' }}>مستخدم عادي</option>
                        <option value="1" {{ $user->is_admin ? 'selected' : '' }}>مسؤول</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">حفظ التعديلات</button>
            </form>
        </div>
    </div>

</div>
@endsection
