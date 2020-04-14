@extends('layouts.app')

@section('content')

<main class="page page-gallery-reports">
      <!-- SECTION-->
      <section class="gallery-reports">
        <div class="gallery-reports__wrap">
          <div class="container">
            <h4 class="txt-color--orange">{{ $title }}</h4>
            <ul class="gallery-reports__reports-list owl-carousel gallery-reports__owl-carousel gallery-reports-list owl-carousel--custom-nav-2">
              @foreach($media_reports as $report)
              <li class="gallery-item">
                <div class="gallery-item__photo" style="background-image: url({{Storage::disk('public')->url($report->preview)}})"></div>
                <div class="gallery-item__desc">
                  <div class="gallery-item__title">Отчет от {{ $report->created_at }}</div>
                  <div class="gallery-item__text">{{ $report->description }}</div>
                  <a class="btn btn--theme--blue gallery-item__btn" href="{{ route('kdl.reports.media.show', $report->id) }}"> Перейти</a>
                </div>
              </li>
              @endforeach
              
            </ul>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="gallery-reports">
        <div class="gallery-reports__wrap">
          <div class="container">
            <h4 class="txt-color--blue">Видеоотчеты</h4>
            <ul class="gallery-reports__reports-list owl-carousel gallery-reports__owl-carousel gallery-reports-list owl-carousel--custom-nav-2">
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo" style="background-image: url(/img/help_item_bg_2.jpg)"></div>
              </li>
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo" style="background-image: url(/img/help_item_bg_2.jpg)"></div>
              </li>
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo" style="background-image: url(/img/help_item_bg_2.jpg)"></div>
              </li>
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo" style="background-image: url(/img/help_item_bg_2.jpg)"></div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

@endsection