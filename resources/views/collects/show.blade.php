@extends('layouts.app')

@section('content')

<main class="page page-collect">
      @php
        $collect_done = null;
        $collect_urgent = null;
        $collect_needed_title = "Требуется";

        if($collect->status) {
          $collect_done = "collect-item--done";
          $collect_needed_title = "Собрано";
        }

        if($collect->quickly_collect) {
          $collect_urgent = "collect-item--urgent";
        }
        if($collect->status && $collect->quickly_collect) {
          $collect_urgent = null;
        }
      @endphp

      <h3>Сбор: <b style="opacity: 0.6;">{{ $collect->fullname }}</b> </h3>
      <!-- SECTION-->
      <section class="collect-box">
        <div class="collect-box__wrap">
          <div class="container">
            <div class="collect-box__collect-info-item collect-item {{ $collect_done }} {{ $collect_urgent }}">
              <div class="row-mg">
                <div class="collect-item__preview" style="background-image: url(/storage/{{ $collect->photo }});">
                  <div class="collect-item__title-done">Сбор закрыт</div>
                  <div class="collect-item__title-urgent">Срочный сбор</div>
                </div>
                <div class="collect-item__desc">
                  <h4 class="collect-item__name"><b>{{ $collect->fullname }}</b>, {{ $collect->year }} </h4>
                  <p class="collect-item__diagnosis"><b>Диагноз:</b><br/> {{ $collect->diagnoz }} </p>
                  <p class="collect-item__target"><b>Цель сбора:</b><br/> {{ $collect->donate_target }}</p>
                  <div class="collect-item__collect row">
                    <div class="collect-item__bar"><span style="width: {{ $collect->percent }}% ;"></span></div>
                    <p class="collect-item__collected">Собрано <br/><b>{{ $collect->collected_money }} р.</b></p>
                    <p class="collect-item__needed">{{ $collect_needed_title }} <br/><b>{{ $collect->needed_money }} р.</b></p>
                    <p class="collect-item__icon-done"><i class="glyph-check-1"></i></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="collect-box__collect-info-post">
              {!! $collect->body !!}
            </div>
            

          </div>
        </div>
      </section>
    </main>
@endsection