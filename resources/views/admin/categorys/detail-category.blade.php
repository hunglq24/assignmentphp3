@extends('admin.layouts.index')

@section('title')
    @parent
    CHI TIẾT LOẠI SẢN PHẨM
@endsection

@push('style')

@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">CHI TIẾT LOẠI SẢN PHẨM</h4>
        <div>
            Tên Loại Sản Phẩm:
            <span class="font-weight-bold">{{ $category->name_category }}</span>
        </div>

        <a href="{{ route('admin.categorys.listCategory') }}" class="btn btn-info mt-3">Quay lại</a>
    </div>
@endsection

@push('scripts')

@endpush
