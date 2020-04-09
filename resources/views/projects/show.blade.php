@extends('layouts.app')

@section('content')

<main class="page page-project-post">
      <h3>{{ $entity->project_type }}: "{{ $entity->name }}"</h3>
      <!-- SECTION-->
      <section class="projects-post-box">
        <div class="projects-post-box__wrap">
          <div class="container">
            <div class="projects-post-box__post">
              <p>{{ $entity->anotation }}</p>
              {!! $entity->body !!}
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection