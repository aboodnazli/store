@extends('layouts.admin')
@section('content')

<div class="py-3">
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">وصف الصنف</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">تحديث</button>
        </div>
    </form>
</div>

@endsection
