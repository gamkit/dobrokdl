@extends('layouts.app')

@section('content')

<main class="page page--documents">
      <h3>Документы фонда</h3>
      <!-- SECTION-->
      <section class="documents-box">
        <div class="documents-box__wrap">
          <div class="container">
            <ul class="documents-box__list documents-items-list">
              <li class="documents-list__link-item"><span class="file-link documents-box__file-link">
                  <div class="file-link__info"><i>
                          <svg class="icon icon-file icon-file--type--pdf">
                            <use xlink:href="#svg-icon-file-pdf"></use>
                          </svg></i>
                    <p class="file-link__file-size">2 МБ</p>
                  </div><a class="file-link__title" href="">Публичная оферта</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p></span></li>
              <li class="documents-list__link-item"><span class="file-link documents-box__file-link">
                  <div class="file-link__info"><i>
                          <svg class="icon icon-file icon-file--type--pdf">
                            <use xlink:href="#svg-icon-file-pdf"></use>
                          </svg></i>
                    <p class="file-link__file-size">2 МБ</p>
                  </div><a class="file-link__title" href="">Устав</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p></span></li>
              <li class="documents-list__link-item"> <span class="file-link documents-box__file-link">
                  <div class="file-link__info"><i>
                          <svg class="icon icon-file icon-file--type--pdf">
                            <use xlink:href="#svg-icon-file-pdf"></use>
                          </svg></i>
                    <p class="file-link__file-size">2 МБ</p>
                  </div><a class="file-link__title" href="">Протокол</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p></span></li>
              <li class="documents-list__link-item"> <span class="file-link documents-box__file-link">
                  <div class="file-link__info"><i>
                          <svg class="icon icon-file icon-file--type--pdf">
                            <use xlink:href="#svg-icon-file-pdf"></use>
                          </svg></i>
                    <p class="file-link__file-size">2 МБ</p>
                  </div><a class="file-link__title" href="">Свидетельство о постановке на учет</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p></span></li>
              <li class="documents-list__link-item"> <span class="file-link documents-box__file-link">
                  <div class="file-link__info"><i>
                          <svg class="icon icon-file icon-file--type--pdf">
                            <use xlink:href="#svg-icon-file-pdf"></use>
                          </svg></i>
                    <p class="file-link__file-size">2 МБ</p>
                  </div><a class="file-link__title" href="">Свительство о гос. регистрации нко</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p></span></li>
              <li class="documents-list__link-item"> <span class="file-link documents-box__file-link">
                  <div class="file-link__info"><i>
                          <svg class="icon icon-file icon-file--type--pdf">
                            <use xlink:href="#svg-icon-file-pdf"></use>
                          </svg></i>
                    <p class="file-link__file-size">2 МБ</p>
                  </div><a class="file-link__title" href="">Свидетельство о государственной регистрации</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p></span></li>
            </ul>
          </div>
        </div>
      </section>
    </main>

@endsection