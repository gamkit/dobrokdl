@extends('layouts.app')

@section('content')
<main class="page page-default">
    <h3>{{ $title }}</h3>
    <div class="page-default__wrap container">
        {!! $page->body !!}
    </div>


</main>
@endsection