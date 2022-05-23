@extends('layouts.app')

@section('content')



<div class="container">
    <form>
        <div id="pression1">
            <label>Pression(Bar)</label>
            <input type="number">
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Small file input example</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
        </div>
        <div id="pression2">
            <label>Pression(Bar)</label>
            <input type="number">
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Small file input example</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
        </div>
    </form>
</div>

@endsection