@extends('layouts.app')

@section('content')

<main class="page page-contacts">
  <h3>{{ $page->title }}</h3>

   {!! $page->body !!}

  <section class="contacts-form" id="form_question">
    <div class="contacts-form__wrap">
      <div class="container">
        <h4 class="contacts-form__title txt-color--orange">Остались вопросы? Напишите нам</h4>
        <form class="form contacts-form__form" method="POST" action="{{route('kdl.forms.question')}}">
          {{ csrf_field() }}
          <div class="form__wrap">
            @include('layouts.errors.default')
            <div class="form__group form-group">
              <div class="form-group__fields-list row"><span class="field field-text form-group__field">
                  <input type="text" required name="first_name" placeholder="Имя"></span><span class="field field-text form-group__field">
                  <input type="text" required name="last_name" placeholder="Фамилия"></span><span class="field field-text form-group__field">
                  <input type="text" required name="phone" placeholder="Телефон"></span><span class="field field-text form-group__field">
                  <input type="text" required name="email" placeholder="E-mail"></span></div>
            </div><span class="field field-textarea">
              <textarea required name="message" cols="30" rows="10" placeholder="Сообщение"></textarea></span>
            <button class="btn btn--theme--orange" type="submit">Отправить</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>


@endsection