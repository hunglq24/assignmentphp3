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
                <label for="nameUser">Name: </label>
                <input type="text" id="nameUser" class="form-control" name="nameUser" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="emailUser">Email:</label>
                <input type="text" id="emailUser" class="form-control" name="emailUser" value="{{$user->email}}">
            </div>
            <div class="mb-3">
                <label for="passwordUser">Password:</label>
                <input type="password" id="passwordUser" class="form-control" name="passwordUser" value="{{$user->password}}">
            </div>
            <div class="mb-3">
                <label for="roleUser">Role:</label>
                <select id="roleUser" class="form-control" name="roleUser" >
                    <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>User</option>
                </select>
            </div>

            <button type="submit" class="btn btn-info">Sửa</button>
            <a href="{{ route('admin.users.listUser') }}" class="btn btn-warning ">Quay lại</a>
        </form>

    </div>

@endsection
