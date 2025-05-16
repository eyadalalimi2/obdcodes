@extends('admin.layouts.admin')

@section('title', 'عرض بيانات المستخدم')

@section('content')
<div class="container-fluid">

    <h4 class="mb-4">عرض بيانات المستخدم</h4>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>اسم المستخدم:</strong> {{ $user->username }}</p>
            <p><strong>رقم الهاتف:</strong> {{ $user->phone }}</p>
            <p><strong>البريد الإلكتروني:</strong> {{ $user->email ?? 'لا يوجد' }}</p>
            <p><strong>نوع المستخدم:</strong> {{ $user->is_admin ? 'أدمن' : 'مستخدم عادي' }}</p>
            <p><strong>تاريخ الإنشاء:</strong> {{ $user->created_at->translatedFormat('Y-m-d H:i') }}</p>
        </div>
    </div>

</div>
@endsection
