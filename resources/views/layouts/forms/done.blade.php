@extends('layouts.app')

@section('content')

<main class="page page-form-done">
      <section class="form-done-box">
        <div class="form-done-box__wrap container">
          @if(!empty($title))
            <h3 class="alert alert-success"><span class="alert-success__title">{{ $title }}</span><i class="alert-success__icon glyph-check-1"> </i></h3>
          @endif
          <a class="form-done-box__link" href="/">Вернуться на главную</a>
        </div>
      </section>
    </main>

@endsection