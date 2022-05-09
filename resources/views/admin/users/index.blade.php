@extends('layouts.app')


@section('content')
@foreach($users as $user)
<div>

    {{$user->name}} - {{$user->prenom}}

</div>
@endforeach
@endsection