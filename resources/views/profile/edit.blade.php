@extends('layouts.auth')

@section('title', 'تعديل حسابك')

@section('content')
<h2 class="text-center">تعديل حسابك</h2>
<form action="{{ route('updateUser') }}" method="POST">
    @csrf
    @method('PATCH') <!-- Method Spoofing for PATCH -->
    <input type="hidden" name="id" value="{{$user->id}}">
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
    <button type="submit" class="btn btn-primary w-100">تعديل </button>
</form>

@endsection
