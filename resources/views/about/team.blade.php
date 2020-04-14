@extends('layouts.app')

@section('content')

<main class="page page-team">
      <h3>{{ $title }}</h3>
      <!-- SECTION-->
      <section class="team-members">
        <div class="team-members__wrap">
          <div class="container">
            <ul class="team-members__list members-list row">
              
            @foreach($members as $member)
              <li class="member-item">
                <a href="{{ route('kdl.about.team.show', $member->id) }}">
                  <div class="member-item__photo" style="background-image: url(/storage/{{ $member->photo }});"></div>
                  <div class="member-item__contacts">
                    <div class="member-item__name" title="{{ $member->fullname }}">{{  $member->short_fullname }}</div>
                    <div class="member-item__position" title="{{ $member->position }}">{{ $member->short_position }}</div>
                    <p class="member-item__connect"><b>Тел.:</b> {{ $member->phone }}</p>
                    <p class="member-item__connect"><b>Email.:</b>  {{ $member->email }}</p>
                  </div>
                </a>
              </li>
              @endforeach
            </ul>
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