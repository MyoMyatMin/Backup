@extends('layouts.app')
@section('content')
<div class="container">
    <div class="rol">
        <div class="col">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
                <hr>
                {{session('yway')}}
            </div>
        @endif
        </div>
    </div>
</div>
@endsection
