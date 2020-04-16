@extends('layouts.app')

@section('content')

<main class="page page-gallery-reports">
      <!-- SECTION-->
      <section class="gallery-reports">
        <div class="gallery-reports__wrap">
          <div class="container">
            <h4 class="txt-color--orange">Фотооотчеты</h4>
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
              @foreach($video_reports as $report)
              <li class="gallery-item gallery-item--type--video">
                <a data-fancybox href="{{ $report->link }}">
                   <div class="gallery-item__photo" style="background-image: url(https://img.youtube.com/vi/{{ $report->video_id }}/mqdefault.jpg)"></div>
                </a>
                <h4> {{ $report->name }}</h4>
              </li>
              @endforeach
 
 
          </div>
        </div>
      </section>
    </main>
 

@endsection