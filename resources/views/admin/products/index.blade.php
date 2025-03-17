@extends('layouts.admin')
@section('content')

<div class="py-3">
    <div class="d-flex justify-content-between mb-3">
        <h3>قائمة المنتجات</h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">+ إضافة منتج</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم المنتج</th>
            <th scope="col">الصنف</th>
            <th scope="col">السعر</th>
            <th scope="col">الكمية</th>
            <th scope="col">الأحداث</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category ? $product->category->name : 'صنف غير متوفر' }}</td>
            <td>$ {{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">تعديل</a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection
