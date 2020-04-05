@extends('layouts.app')

@section('content')
<main class="page page--home">
      <!-- SECTION-->
      <section class="home-opening">
        <div class="home-opening__wrap">
          <div class="home-opening__video">
            <video muted autoplay loop playsinline>
              <source src="uploads/video/home.webm" type="video/webm">
              <source src="uploads/video/home.mp4" type="video/mp4">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
              </div>
              <div class="home-about__collected">
                <ul class="home-about__collected-info-list collected-info-list row">
                  <li class="collected-info-list__item collected-info-item">
                    <p class="collected-info-item__amount">11 522 000 <b>р.</b></p><span>Собрано за 2017</span>
                  </li>
                  <li class="collected-info-list__item collected-info-item">
                    <p class="collected-info-item__amount">245 000 <b>р.</b></p><span>Собрано за февраль</span>
                  </li>
                  <li class="collected-info-list__item collected-info-item">
                    <p class="collected-info-item__amount">25 001 540 <b>р.</b></p><span>За все время</span>
                  </li>
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
            @foreach($collects as $collect)
              @php
                $collect_done = null;
                if($collect->status) {
                  $collect_done = "collect-item--done";
                }
              @endphp
          
              <li class="collect-item {{ $collect_done }}">
                <a class="collect-item__link" href="{{ route('kdl.collects.show', $collect->id) }}">   
                  <div class="collect-item__preview">
                    <img src="/storage/{{ $collect->photo }}" alt="">
                    <div class="collect-item__title-done">Сбор закрыт</div>
                  </div>
                  <div class="collect-item__desc">
                    <p class="collect-item__name" title="{{ $collect->diagnoz }}"><b>{{ $collect->fullname }}</b>, 10 лет<br/><span>{{ mb_strimwidth($collect->diagnoz, 0, 40, "...") }}</span></p>
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
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
              <li class="item partners-list__item partner-item"><img src="img/partner.jpg" alt=""></li>
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
                <!-- - -->
                <li class="news-item"><a href="">
                    <div class="news-item__preview"><img src="uploads/images/news_item.jpg" alt=""></div>
                    <div class="news-item__info">
                      <h4 class="news-item__title">Знакомство с ментальной арифметикой...</h4><span class="news-item__date">23.04.2019</span>
                      <p class="news-item__text">Наши маленькие подопечные продолжают развивать умственные и творческие способности.</p>
                    </div></a></li>
                <!-- - -->
                <li class="news-item"><a href="">
                    <div class="news-item__preview"><img src="uploads/images/news_item.jpg" alt=""></div>
                    <div class="news-item__info">
                      <h4 class="news-item__title">Знакомство с ментальной арифметикой...</h4><span class="news-item__date">23.04.2019</span>
                      <p class="news-item__text">Наши маленькие подопечные продолжают развивать умственные и творческие способности.</p>
                    </div></a></li>
                <!-- - -->
                <li class="news-item"><a href="">
                    <div class="news-item__preview"><img src="uploads/images/news_item.jpg" alt=""></div>
                    <div class="news-item__info">
                      <h4 class="news-item__title">Знакомство с ментальной арифметикой...</h4><span class="news-item__date">23.04.2019</span>
                      <p class="news-item__text">Наши маленькие подопечные продолжают развивать умственные и творческие способности.</p>
                    </div></a></li>
                <!-- - -->
                <li class="news-item"><a href="">
                    <div class="news-item__preview"><img src="uploads/images/news_item.jpg" alt=""></div>
                    <div class="news-item__info">
                      <h4 class="news-item__title">Знакомство с ментальной арифметикой...</h4><span class="news-item__date">23.04.2019</span>
                      <p class="news-item__text">Наши маленькие подопечные продолжают развивать умственные и творческие способности.</p>
                    </div></a></li>
                <!-- - -->
                <li class="news-item"><a href="">
                    <div class="news-item__preview"><img src="uploads/images/news_item.jpg" alt=""></div>
                    <div class="news-item__info">
                      <h4 class="news-item__title">Знакомство с ментальной арифметикой...</h4><span class="news-item__date">23.04.2019</span>
                      <p class="news-item__text">Наши маленькие подопечные продолжают развивать умственные и творческие способности.</p>
                    </div></a></li>
                <!-- - -->
                <li class="news-item"><a href="">
                    <div class="news-item__preview"><img src="uploads/images/news_item.jpg" alt=""></div>
                    <div class="news-item__info">
                      <h4 class="news-item__title">Знакомство с ментальной арифметикой...</h4><span class="news-item__date">23.04.2019</span>
                      <p class="news-item__text">Наши маленькие подопечные продолжают развивать умственные и творческие способности.</p>
                    </div></a></li>
              </ul><a class="home-news__news-link" href="">Все новости</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    
@endsection