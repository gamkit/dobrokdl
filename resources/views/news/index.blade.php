@extends('layouts.app')

@section('content')

<main class="page page--news">
  <h3>{{ $title }}</h3>
  <!-- SECTION-->
  <section class="news-box">
    <div class="news-box__wrap">
      <div class="container">
        <ul class="news-box__list news-list row">
           
          @foreach($posts as $post)
            <li class="news-list__item news-item">
              <a href="{{ route('kdl.news.show', [$post->id, $post->slug]) }}">
                <div class="news-item__preview"><img src="/storage/{{ $post->image }}" alt=""></div>
                <div class="news-item__info">
                  <h4 class="news-item__title" title="{{ $post->title }}">{{ $post->short_title }}</h4>
                  <!-- <span class="news-item__date">{{ $post->created_at }}</span> -->
                  <p class="news-item__text">{!! $post->short_anotation !!}</p>
                  <p class="news-item__more">Подробнее</p>
                </div>
              </a>
            </li>
          @endforeach
        </ul>
        {{ $posts->links('layouts.pagination') }}
      </div>
    </div>
  </section>
</main>

@endsection