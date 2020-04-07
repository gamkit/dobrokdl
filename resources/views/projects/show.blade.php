@extends('layouts.app')

@section('content')

<main class="page page--projects">
    <h3>Программы и проекты</h3>
    <!-- SECTION-->
    <section class="projects-desc">
      <div class="projects-desc__wrap">
        <div class="container">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
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
              <li class="projects-box__tab-item tab-item tab-item--active" data-tab-index="0">Программы</li>
              <li class="projects-box__tab-item tab-item" data-tab-index="1">Проекты</li>
            </ul>
            <div class="tabs__content projects-box__carousels-list">
              <!-- - Tab content-->
              <ul class="tab-content-item tab-content-item--active projects-box__project-list project-list project-list--active owl-carousel project-list__owl-carousel owl-carousel--custom-nav-2" data-tab-index="0">
                <!-- - -->
                <li class="project-item">
                  <div class="project-item__preview"><img src="uploads/images/project_item.jpg" alt=""></div>
                  <div class="project-item__desc">
                    <h4 class="project-item__title">Программа А</h4>
                    <p class="project-item__date">Дата запуска: <b>23.04.2019</b></p>
                    <p class="project-item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p><a class="btn btn--theme--white-to-orange" href>Перейти</a>
                  </div>
                </li>
                <!-- - -->
                <li class="project-item">
                  <div class="project-item__preview"><img src="uploads/images/project_item.jpg" alt=""></div>
                  <div class="project-item__desc">
                    <h4 class="project-item__title">Программа B</h4>
                    <p class="project-item__date">Дата запуска: <b>23.04.2019</b></p>
                    <p class="project-item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p><a class="btn btn--theme--white-to-orange" href>Перейти</a>
                  </div>
                </li>
              </ul>
              <!-- - Tab content -->
              <ul class="tab-content-item projects-box__project-list project-list owl-carousel project-list__owl-carousel owl-carousel--custom-nav-2" data-tab-index="1">
                <!-- - -->
                <li class="project-item">
                  <div class="project-item__preview"><img src="uploads/images/project_item.jpg" alt=""></div>
                  <div class="project-item__desc">
                    <h4 class="project-item__title">Проект А</h4>
                    <p class="project-item__date">Дата запуска: <b>23.04.2019</b></p>
                    <p class="project-item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p><a class="btn btn--theme--white-to-orange" href>Перейти</a>
                  </div>
                </li>
                <!-- - -->
                <li class="project-item">
                  <div class="project-item__preview"><img src="uploads/images/project_item.jpg" alt=""></div>
                  <div class="project-item__desc">
                    <h4 class="project-item__title">Проект B</h4>
                    <p class="project-item__date">Дата запуска: <b>23.04.2019</b></p>
                    <p class="project-item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p><a class="btn btn--theme--white-to-orange" href>Перейти</a>
                  </div>
                </li>
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