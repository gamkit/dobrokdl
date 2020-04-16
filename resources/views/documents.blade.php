@extends('layouts.app')

@section('content')

<main class="page page-documents">
      <h3>{{ $title }}</h3>
      <!-- SECTION-->
      <section class="documents-box">
        <div class="documents-box__wrap">
          <div class="container">
            <ul class="documents-box__list documents-items-list">

            @foreach($docs as $doc)
            @php
            @endphp
            <li class="documents-list__link-item"><span class="file-link documents-box__file-link">
                  <div class="file-link__info"><i>
                          <svg class="icon icon-file icon-file--type--pdf">
                            <use xlink:href="#svg-icon-file-pdf"></use>
                          </svg></i>
                    <p class="file-link__file-size">{{ $doc->file_size}}</p>
                  </div><a class="file-link__title" href="{{ $doc->file }}" target="_blank">{{$doc->name}}</a>
                  <p> {{ $doc->description }} &nbsp; </p></span></li>
            @endforeach
              
            </ul>
          </div>
        </div>
      </section>
    </main>

@endsection