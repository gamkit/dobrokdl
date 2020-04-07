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

            
            @foreach($collects as $collect)
            @php
                $collect_done = null;
                $collect_urgent = null;

                if($collect->status) {
                  $collect_done = "collect-item--done";
                }

                if($collect->quickly_collect) {
                  $collect_urgent = "collect-item--urgent";
                }
                if($collect->status && $collect->quickly_collect) {
                  $collect_urgent = null;
                }
              @endphp
          
              <li class="collect-item {{ $collect_done }} {{ $collect_urgent }}">
                <a class="collect-item__link" href="{{ route('kdl.collects.show', $collect->id) }}">   
                  <div class="collect-item__preview">
                    <img src="/storage/{{ $collect->photo }}" alt="">
                    <div class="collect-item__title-done">Сбор закрыт</div>
                    <div class="collect-item__title-urgent">Срочный сбор</div>
                  </div>
                  <div class="collect-item__desc">
                    <p class="collect-item__name" title="{{ $collect->diagnoz }}"><b>{{ $collect->fullname }}</b>, {{ $collect->year }}<br/><span>{{ mb_strimwidth($collect->diagnoz, 0, 40, "...") }}</span></p>
                    <div class="collect-item__collect row">
                      <div class="collect-item__bar"><span style="width: {{ $collect->percent }}% ;"></span></div>
                      <p class="collect-item__collected">Собрано <br/><b>{{ $collect->collected_money }}</b></p>
                      <p class="collect-item__needed">Требуется <br/><b>{{ $collect->needed_money }}</b></p>
                      <p class="collect-item__icon-done"><i class="glyph-check-1"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              @endforeach
             
            </ul>

            {{ $collects->links('layouts.pagination') }}
          </div>
        </div>
      </section>
    </main>

@endsection