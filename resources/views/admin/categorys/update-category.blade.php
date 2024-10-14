@extends('admin.layouts.index')

@section('title')
    @parent
    SỬA LOẠI SẢN PHẨM
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">SỬA SẢN PHẨM</h4>
        <form action="{{ route('admin.categorys.updatePutCategory', $category->category_id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name_category">Name: </label>
                <input type="text" id="name_category" class="form-control" name="name_category" value="{{$category->name_category}}">
                @error('name_category')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-info">Sửa</button>
            <a href="{{ route('admin.categorys.listCategory') }}" class="btn btn-warning ">Quay lại</a>
        </form>

    </div>

@endsection
