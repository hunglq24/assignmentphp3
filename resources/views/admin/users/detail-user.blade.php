@extends('admin.layouts.index')

@section('title')
    @parent
    CHI TIẾT USER
@endsection

@push('style')

@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">CHI TIẾT USER</h4>
        <div>
            Tên User:
            <span class="font-weight-bold">{{ $user->name }}</span>
        </div>
        <div>
            Email:
            <span class="font-weight-bold">{{ $user->email }}</span>
        </div>
        <div>
            Password:
            <span class="font-weight-bold">{{ $user->password }}</span>
        </div>
        <div>
            Role:
            <span class="font-weight-bold">
                @if($user->role == 1)
                    Admin
                @elseif($user->role == 2)
                    User
                @endif
            </span>
        </div>

        <a href="{{ route('admin.users.listUser') }}" class="btn btn-info mt-3">Quay lại</a>
    </div>
@endsection

@push('scripts')

@endpush
