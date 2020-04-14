@extends('layouts.app')

@section('content')

<main class="page page-founders">
      <h3>{{ $title }}</h3>
      <!-- SECTION-->
      <section class="founders-members">
        <div class="founders-members__wrap">
          <div class="container">
            <ul class="founders-members__founders-list founders-list row">
              @foreach($founders as $founder)
              <li class="founder-item">
                <a href="{{ route('kdl.about.founders.show', $founder->id) }}">
                  <div class="founder-item__photo" style="background-image: url(/storage/{{ $founder->photo }})"></div>
                  <div class="founder-item__contacts">
                    <h5 class="founder-item__name">{{ $founder->fullname }}</h5>
                    <p class="founder-item__position">{{ $founder->position }}</p>
                    <p class="founder-item__contact"><b>Тел.:</b> 8 (928) 731-26-02</p>
                    <p class="founder-item__contact"><b>Email.:</b> {{ $founder->email }}</p>
                    <div class="founder-item__body">{{ $founder->body }}</div>
                  </div>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </section>
    </main>

@endsection