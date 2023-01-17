@extends('layouts.app')

@section('content')
<div class="container">
    <@extends('layouts.app')

    @section('content')
    <div class="container">
        <p> Nome: {{ Auth::user()->name}} eMail: {{Auth::user()->email}}</p>
    </div>
    @endsection
</div>
@endsection
