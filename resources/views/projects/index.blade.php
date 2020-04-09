@extends('layouts.app')

@section('content')

<main class="page page-projects">
      <h3>Программы и проекты</h3>
      <!-- SECTION-->
      <section class="projects-desc">
        <div class="projects-desc__wrap">
          <div class="container">
            <p>Здесь какое-то тематическое описание</p>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="projects-box">
        <div class="projects-box__wrap">
          <hr class="projects-box__line">
          <div class="container">
            <div class="tabs tabs--theme--blue projects-box__tabs">
              <ul class="projects-box__tabs-list tabs__list row">
                <li class="projects-box__tab-item tab-item tab-item--active" data-tab-index="0">Проекты</li>
                <li class="projects-box__tab-item tab-item" data-tab-index="1">Программы</li>
              </ul>
              <div class="tabs__content projects-box__carousels-list">
                <!-- - Tab content-->
                <ul class="tab-content-item tab-content-item--active projects-box__project-list project-list project-list--active owl-carousel project-list__owl-carousel owl-carousel--custom-nav-2" data-tab-index="0">
                 
                  @foreach($projects as $project)
                    <li class="project-item" style="background-image: url(/storage/{{ $project->image }});">
                      <div class="project-item__desc">
                        <h4 class="project-item__title">{{ $project->name }}</h4>
                        <p class="project-item__date">Дата запуска: <b>{{ $project->date }}</b></p>
                        <p class="project-item__text">{{ $project->anotation }}</p>
                        <a class="btn btn--theme--white-to-orange" href="{{ route('kdl.projects.show', ['id' => $project->id, 'type' => strtolower($project->type)]) }}">Перейти</a>
                      </div>
                    </li>
                  @endforeach
                  
                </ul>
                <!-- - Tab content -->
                <ul class="tab-content-item projects-box__project-list project-list owl-carousel project-list__owl-carousel owl-carousel--custom-nav-2" data-tab-index="1">
                  @foreach($programs as $program)
                    <li class="project-item" style="background-image: url(/storage/{{ $program->image }});">
                      <div class="project-item__desc">
                        <h4 class="project-item__title">{{ $program->name }}</h4>
                        <p class="project-item__date">Дата запуска: <b>{{ $program->date }}</b></p>
                        <p class="project-item__text">{{ $program->anotation }}</p>
                        <a class="btn btn--theme--white-to-orange" href="{{ route('kdl.projects.show', ['id' => $program->id, 'type' => strtolower($program->type)]) }}">Перейти</a>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="projects-action">
        <div class="projects-action__wrap">
          <div class="action-block projects-action__action-block bg-gradient--blue">
            <div class="container">
              <h3 class="action-block__question">Вступай в волонтеры</h3><a class="btn btn--theme--white-to-orange action-block__btn" href="">Вступить</a>
            </div>
          </div>
        </div>
      </section>
    </main>



@endsection