@extends('layouts.auth')

@section('title', 'تسجيل الدخول')

@section('content')
<h2 class="text-center">تسجيل الدخول</h2>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">البريد الإلكتروني</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">كلمة المرور</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
</form>
<p class="text-center mt-3">
    لا تملك حساب؟ <a href="{{ route('register') }}">إنشاء حساب</a>
</p>
@endsection
