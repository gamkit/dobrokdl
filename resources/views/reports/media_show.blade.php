@extends('layouts.app')

@section('content')

<main class="page page-gallery-reports">
    
      <!-- SECTION-->
      <section class="gallery-reports">
        <div class="gallery-reports__wrap">
          <div class="container">
            <h4>Фотоотчет от {{ $media_report->created_at }}</h4>
            <p>{!! $media_report->body !!}</p>
            <ul class="gallery gallery__lightslider">
              <!-- - -->
              @foreach($media_report->images_list as $image)
              
              <li data-thumb="{{ Voyager::image($image) }}"><img class="img-responsive" src="{{ Voyager::image($image) }}" alt=""></li>
              @endforeach
              
            </ul>
          </div>
        </div>
      </section>
    </main>

@endsection