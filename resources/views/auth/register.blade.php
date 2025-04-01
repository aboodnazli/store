@extends('layouts.auth')

@section('title', 'إنشاء حساب جديد')

@section('content')
<h2 class="text-center">إنشاء حساب جديد</h2>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">الاسم</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">البريد الإلكتروني</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    
    <div class="mb-3">
        <label for="password" class="form-label">كلمة المرور</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">إنشاء حساب</button>
</form>
<p class="text-center mt-3">
    لديك حساب؟ <a href="{{ route('login') }}">تسجيل الدخول</a>
</p>
@endsection
