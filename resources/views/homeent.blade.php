@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ENTREPRISE</h1>
    <form class="d-flex" action="{{Route('entreprise.recherche')}}">
        <input class="form-control me-2" type="search" placeholder="Search" name='q'>
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
@endsection