@extends('layouts.app')

@section('content')

<main class="page page-trustees">
    <h3>Попечительный совет</h3>
    <!-- SECTION-->
    <section class="founders-members">
      <div class="founders-members__wrap">
        <div class="container">
          <ul class="founders-members__founders-list founders-list row">
            <!-- - -->
            @foreach($trustees as $trustee)
              <li class="founder-item">
                <a href="{{ route('kdl.about.trustees.show', $trustee->id) }}">
                  <div class="founder-item__photo" style="background-image: url(/storage/{{ $trustee->photo }})"></div>
                  <div class="founder-item__contacts">
                    <h5 class="founder-item__name">{{ $trustee->fullname }}</h5>
                    <p class="founder-item__position">{{ $trustee->position }}</p>
                    <div class="founder-item__body">{!! $trustee->body !!}</div>
                  </div>
                </a>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
    </section>
    <section class="founders-action">
      <div class="founders-action__wrap">
        <div class="action-block trustees-action__action-block bg-gradient--blue">
          <div class="container">
            <h3 class="action-block__question">Хотите присоединиться?</h3>
            <button class="btn btn--theme--white-to-orange action-block__btn">Напишите нам</button>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection