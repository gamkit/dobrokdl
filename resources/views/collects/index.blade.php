@extends('layouts.app')

@section('content')

<main class="page page--collects">
      <h3>{{ $title }}</h3>
      <!-- SECTION-->
      <section class="collects-list-box">
        <div class="collects-list-box__wrap">
          <div class="container">

          @if(Route::currentRouteName() == 'kdl.collects.urgent')
            <a class="btn btn--theme--orange" href="{{ route('kdl.collects') }}">Все сборы</a>
          @else (Route::currentRouteName() == 'kdl.collects')
            <a class="btn btn--theme--red" href="{{ route('kdl.collects.urgent') }}">Срочные сборы</a>
          @endif
            <ul class="collects-list-box__collects-list collects-list row">

            
             @include('layouts.components.collect')
             
            </ul>

            {{ $collects->links('layouts.pagination') }}
          </div>
        </div>
      </section>
    </main>

@endsection