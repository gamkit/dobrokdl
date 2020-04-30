@extends('layouts.app')

@section('content')
<main class="page page-default">
    <h3>{{ $title }}</h3>
    
    <div class="page-default__wrap container">
        @if($page->meta_description === "Донорство")
            {!! Menu::display('kdl_donor_menu', 'layouts.menus.donors') !!}<hr>
        @endif
        

        {!! $page->body !!}
    </div>


</main>
@endsection