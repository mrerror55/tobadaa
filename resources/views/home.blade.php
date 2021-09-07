@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

<h1>This Is The Full Name For Auth User : {{ auth()->user()->full_name }}</h1>
    </div>
</div>
@endsection
