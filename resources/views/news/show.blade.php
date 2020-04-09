@extends('layouts.app')

@section('content')

<main class="page page-news-post ">
      <h3>Новость от {{ $post->created_at }}</h3>
      <!-- SECTION-->
      <section class="news-post-box">
        <div class="news-post-box __wrap">
          <div class="container">
            <div class="news-item">
              <div class="news-item__preview"><img src="/storage/{{ $post->image }}"" alt=""></div>
              <div class="news-item__info">
                <h4 class="news-item__title">{{ $post->title}}</h4><span class="news-item__date">23.04.2019</span>
        
              </div>
              <div class="news-item__body">
              {!! $post->body !!}
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection