
@extends('layouts.front')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ملف المستخدم الشخصي') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>{{ __('الاسم') }}:</strong> {{ $user->name }}</p>
                    <p><strong>{{ __('البريد الإلكتروني') }}:</strong> {{ $user->email }}</p>


                    <hr>

                        <a href="{{ route('admin') }}" class="btn btn-primary">{{ __('لوحة التحكم') }}</a>


                        <form action="/editUser/{{$user->id}}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-info me-2"></i>تعديل الحساب
                            </button>
                        </form>
                        
                        <form action="/deleteUser/{{$user->id}}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash me-2"></i>حذف الحساب
                            </button>
                        </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection