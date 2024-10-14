@extends('admin.layouts.index')

@section('title')
    @parent
    SỬA USER
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">SỬA USER</h4>
        <form action="{{ route('admin.users.updatePutUser', $user->user_id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name">Name: </label>
                <input type="text" id="name" class="form-control" name="name" value="{{$user->name}}">
                @error('name')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="text" id="email" class="form-control" name="email" value="{{$user->email}}">
                @error('email')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" class="form-control" name="password" value="{{$user->password}}">
                @error('password')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role">Role:</label>
                <select id="role" class="form-control" name="role" >
                    <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>User</option>
                </select>
            </div>

            <button type="submit" class="btn btn-info">Sửa</button>
            <a href="{{ route('admin.users.listUser') }}" class="btn btn-warning ">Quay lại</a>
        </form>

    </div>

@endsection
