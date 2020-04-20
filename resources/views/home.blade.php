@extends('layouts.app')

@section('content')
<main class="page page--home">
      <!-- SECTION-->
      <section class="home-opening">
        <div class="home-opening__wrap">
          <div class="home-opening__video">
            <video muted autoplay loop playsinline>
              <source src="/storage/home.webm" type="video/webm">
              <source src="/storage/home.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="home-about">
        <div class="home-about__wrap">
          <div class="home-about__inner">
            <div class="container">
              <div class="home-about__desc">
                <h2>О фонде</h2>
                <p>Благотворительный Фонд социальной помощи и поддержки граждан "Клуб Добрых Людей (КДЛ)" учрежден 11 января 2016 года. </p>
              </div>
              <div class="home-about__collected">
                <ul class="home-about__collected-info-list collected-info-list row">
                  @foreach($collectreports as $report)
                  <li class="collected-info-list__item collected-info-item">
                    <p class="collected-info-item__amount">{{ $report->sum }} <b>р.</b></p><span>{{ $report->title }}</span>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="home-collects">
        <div class="home-collects__wrap">
          <div class="container">
            <h3 class="home-collects__heading">Им нужна ваша помощь</h3>
            <ul class="home-collects__collects-list owl-carousel collects-list__owl-carousel collects-list owl-carousel--custom-nav-1">
            
              @include('layouts.components.collect')
         
              
            </ul>
            <a class="home-collects__collects-link" href="{{ route('kdl.collects') }}">Все сборы</a>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="home-howtohelp">
        <div class="home-howtohelp__wrap">
          <div class="container">
            <h2 class="home-howtohelp__heading">Как помочь?</h2>
            <ul class="home-howtohelp__help-list help-list row-mg">
              <!-- - -->
              <li class="help-list__item help-item"><a class="help-item__link" href="">
                  <div class="help-item__preview"><img class="img-responsive" src="img/help_item_bg_1.jpg" alt="Делом"></div>
                  <p class="help-item__title">Делом</p></a></li>
              <!-- - -->
              <li class="help-list__item help-item"><a class="help-item__link" href="">
                  <div class="help-item__preview"><img class="img-responsive" src="img/help_item_bg_2.jpg" alt="Деньгами"></div>
                  <p class="help-item__title">Деньгами</p></a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="home-partners">
        <div class="home-partners__wrap">
          <div class="home-partners__inner">
            <h3 class="home-partners__heading">Наши партнеры</h3>
            <ul class="partners-list home-partners__partners-list owl-carousel partners-list__owl-carousel">
              @foreach($partners as $partner)
                <li class="item partners-list__item partner-item"><img src="/storage/{{ $partner->logo }}" alt=""></li>
              @endforeach
            </ul>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="home-news">
        <div class="home-news__wrap">
          <div class="container">
            <div class="home-news__inner">
              <h3 class="home-news__heading">Последние новости</h3>
              <ul class="home-news__news-list owl-carousel news-list__owl-carousel news-list owl-carousel--custom-nav-1">
                
              @foreach($posts as $post)
                <li class="news-item">
                  <a href="{{ route('kdl.news.show', $post->id) }}">
                    <div class="news-item__preview"><img src="/storage/{{ $post->image }}" alt=""></div>
                    <div class="news-item__info">
                      <h4 class="news-item__title" title="{{ $post->title }}">{{ $post->short_title }}</h4><span class="news-item__date">{{ $post->created_at }}</span>
                      <p class="news-item__text">{!! $post->short_anotation !!}</p>
                      <p class="news-item__more">Подробнее</p>
                    </div>
                  </a>
                </li>
              @endforeach
                
              </ul><a class="home-news__news-link" href="{{ route('kdl.news') }}">Все новости</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    
@endsection