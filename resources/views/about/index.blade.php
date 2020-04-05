@extends('layouts.app')

@section('content')

<main class="page page--about">
    <h3>О нас</h3>
    <!-- SECTION-->
    <section class="about-desc">
      <div class="about-desc__wrap">
        <div class="container">
          <div class="about-desc__group-photo"><img class="img-responsive img-br-rd" src="img/kdl_group_photo.jpg" alt=""></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
          <div class="about-desc__history">
            <h3 class="heading--theme--blue">История</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
          </div>
          <div class="about-desc__history">
            <h3 class="heading--theme--blue">Задачи</h3>
            <ul class="about-desc__goals-list goals-list row">
              <li class="goals-list__item goal-item"><i class="goal-item__icon">
                  <object class="icon icon-goal" data="img/svg/icon_goal_1.svg" type="image/svg+xml"></object></i>
                <p class="goal-item__title">Cбор средств на лечение и реабилитацию детей со сложными заболеваниями</p>
              </li>
              <li class="goals-list__item goal-item"><i class="goal-item__icon">
                  <object class="icon icon-goal" data="img/svg/icon_goal_2.svg" type="image/svg+xml"></object></i>
                <p class="goal-item__title">Помощь и поддержка семей, оказавшихся в сложной жизненной ситуации;</p>
              </li>
              <li class="goals-list__item goal-item"><i class="goal-item__icon">
                  <object class="icon icon-goal" data="img/svg/icon_goal_3.svg" type="image/svg+xml"></object></i>
                <p class="goal-item__title">Привлечение внимания общественности к проблемам больных детей и семей</p>
              </li>
              <li class="goals-list__item goal-item"><i class="goal-item__icon">
                  <object class="icon icon-goal" data="img/svg/icon_goal_4.svg" type="image/svg+xml"></object></i>
                <p class="goal-item__title">Содействие развитию безвозмездного донорства крови;</p>
              </li>
              <li class="goals-list__item goal-item"><i class="goal-item__icon">
                  <object class="icon icon-goal" data="img/svg/icon_goal_5.svg" type="image/svg+xml"></object></i>
                <p class="goal-item__title">Развитие волонтерства в регионе.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- SECTION            -->
    <section class="about-action">
      <div class="about-action__wrap">
        <div class="action-block about-action__action-block bg-gradient--blue">
          <div class="container">
            <h3 class="action-block__question">Хотите участвовать в волонтерстве?</h3>
            <button class="btn btn--theme--white-to-orange action-block__btn">Напишите нам</button>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection