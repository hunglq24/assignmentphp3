@extends('admin.layouts.index')

@section('title')
    @parent
    CHI TIẾT SẢN PHẨM
@endsection

@push('style')

@endpush
    
@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">CHI TIẾT SẢN PHẨM</h4>
        <div>
            Tên Sản Phẩm:
            <span class="font-weight-bold">{{ $product->name_product }}</span>
        </div>
        <div>
            Giá Sản Phẩm:
            <span class="font-weight-bold">{{ $product->price }}</span>
        </div>
        <div>
            View:
            <span class="font-weight-bold">{{ $product->view }}</span>
        </div>
        <div>
            Ảnh Sản Phẩm:
            <img src="{{ asset($product->image)}}" alt="" class="img-product" width="100px" height="100px">
        </div>

        <a href="{{ route('admin.products.listProduct') }}" class="btn btn-info mt-3">Quay lại</a>
    </div>
@endsection

@push('scripts')
    
@endpush