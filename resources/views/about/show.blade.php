@extends('layouts.app')

@section('content')

<main class="page page-member">
      <h3>Сотрудник</h3>
      <!-- SECTION-->
      <section class="member-box">
        <div class="member-box__wrap">
          <div class="container">
            <div class="member-box__member-info member-info">
              <div class="row-mg">
                <div class="member-info__photo" style="background-image: url(/storage/{{ $entity->photo }});"></div>
                <div class="member-box__desc">  
                  <h4 class="member-info__name">{{ $entity->fullname }}</h4>
                  <p class="member-info__position">{{ $entity->position }}</p>
                  @if($entity->email != null && $entity->phone != null)
                  <p class="member-info__connect"><b>Тел.:</b> {{ $entity->phone }}</p>
                  <p class="member-info__connect"><b>Email.:</b> {{ $entity->email }}</p>
                  @endif
                </div>
              </div>
              <div class="member-info__about">
              {!! $entity->body !!}
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="team-action">
        <div class="team-action__wrap">
          <div class="action-block team-action__action-block bg-gradient--blue">
            <div class="container">
              <h3 class="action-block__question">Хотите участвовать в волонтерстве?</h3>
              <button class="btn btn--theme--white-to-orange action-block__btn">Напишите нам</button>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection