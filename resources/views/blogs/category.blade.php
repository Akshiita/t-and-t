@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img
                src="{{ asset('frontend/assets/img/blog-hero.jpg') }}"
                alt=""
                class="islands__bg"
              />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">category</h2>
                  <h1 class="islands__title">{{ $category->name }}</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

     
@endsection