@extends('layouts.app')

@section('content')

<main class="page page--reports">
      <h3>Отчеты</h3>
      <section class="breadcumbs">
        <div class="container">
          <ul class="breadcumbs__list row-mg">
            <li class="breadcumb-item"><a href="/">Главная</a></li>
            <li class="breadcumb-item"><a href="">Отчеты</a></li>
          </ul>
        </div>
      </section>

      <section class="reports-links-box">
        <div class="reports-links-box__wrap">
          <div class="container">
            <ul class="reports-links-box__list">
              <li class="reports-links-box__item"><a href="{{ route('kdl.reports.media') }}">Фото и видео</a></li>
              <li class="reports-links-box__item"><a href="{{ route('kdl.reports.financial') }}">Финансовые отчеты</a></li>
            </ul>
          </div>
        </div>
      </section>

    </main>

@endsection