@extends('layouts.app')


@section('content')
<div class="container">
    <h1>ROLE</h1>
    <form action="{{route('admin.users.dash.listutil.update',$user)}}" method="POST">
        @csrf
        @method('PUT')
        @foreach ($roles as $role)
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="{{$role->id}}" @foreach($user->roles as $userRole) @if($userRole->id===$role->id) checked @endif @endforeach>
            <label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label>
        </div>
        @endforeach
        <button type="submit">assigner un role</button>
    </form>

</div>

@endsection