@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img
                src="{{ asset('frontend/assets/img/views.jpg') }}"
                alt=""
                class="islands__bg"
              />
              <div class="bg__overlay">
                <div class="islands__container container">
                  <div class="islands__data">
                    <h2 class="islands__subtitle">Insight view</h2>
                    <h1 class="islands__title">Gallery</h1>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

	<style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

:root {
  --color-primary: #5ec576;
  --color-secondary: #ffcb03;
  --color-tertiary: #ff585f;
  --color-primary-darker: #4bbb7d;
  --color-secondary-darker: #ffbb00;
  --color-tertiary-darker: #fd424b;
  --color-primary-opacity: #5ec5763a;
  --color-secondary-opacity: #ffcd0331;
  --color-tertiary-opacity: #ff58602d;
  --gradient-primary: linear-gradient(to top left, #39b385, #9be15d);
  --gradient-secondary: linear-gradient(to top left, #ffb003, #ffcb03);
}

/* * {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  font-size: 62.5%;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  color: #444;
  line-height: 1.9;
  background-color: #f3f3f3;
} */

/* GENERAL ELEMENTS */
.section1 {
  padding: 8rem 3rem;
  border-top: 1px solid #ddd;

  transition: transform 1s, opacity 1s;
}

.section--hidden {
  opacity: 0;
  transform: translateY(8rem);
}

.section__title {
  max-width: 80rem;
  margin: 0 auto 8rem auto;
}

.section__description {
  font-size: 1.8rem;
  font-weight: 600;
  text-transform: uppercase;
  color: var(--color-primary);
  margin-bottom: 1rem;
}

.section__header {
  font-size: 4rem;
  line-height: 1.3;
  font-weight: 500;
}

.btn {
  display: inline-block;
  background-color: var(--color-primary);
  font-size: 1.6rem;
  font-family: inherit;
  font-weight: 500;
  border: none;
  padding: 1.25rem 4.5rem;
  border-radius: 10rem;
  cursor: pointer;
  transition: all 0.3s;
}

.btn:hover {
  background-color: var(--color-primary-darker);
}

.btn--text {
  display: inline-block;
  background: none;
  font-size: 1.7rem;
  font-family: inherit;
  font-weight: 500;
  color: var(--color-primary);
  border: none;
  border-bottom: 1px solid currentColor;
  padding-bottom: 2px;
  cursor: pointer;
  transition: all 0.3s;
}

p {
  color: #666;
}

button:focus {
  outline: none;
}

img {
  transition: filter 0.5s;
}

.lazy-img {
  filter: blur(20px);
}

.features {
  display: -ms-grid;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  margin: 0 12rem;
  overflow: hidden; /* Hide overflowing content */
   /* Set a fixed height for the container */
  
}

.zoom-image{
	transition: transform .2s;

}
.zoom-image:hover {
  -ms-transform: scale(1.5); /* IE 9 */
   -webkit-transform: scale(1.5); /* 3-8 */
  transform: scale(1.2); 
}

.features__img {
  width: 100%;
  
}


.image-container img {
    width: 100%; /* Make sure the image takes the full width of its parent container */
    height: auto; /* Automatically adjust the height to maintain aspect ratio */
} */




.features__feature {
  align-self: center;
  justify-self: center;
  width: 70%;
  font-size: 1.5rem;
}

.features__icon {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--color-primary-opacity);
  height: 5.5rem;
  width: 5.5rem;
  border-radius: 50%;
  margin-bottom: 2rem;
}



.features__header {
  font-size: 2rem;
  margin-bottom: 1rem;
}


.find-out-more-btn {
  border-color: #444;/* Set the background color of the button */
    color: rgb(30, 27, 27); /* Set the text color of the button */
  
    padding: 10px 20px; /* Set padding inside the button */
    font-size: 16px; /* Set the font size */
    cursor: pointer; /* Change cursor to pointer on hover */
    transition: background-color 0.3s ease; /* Add a smooth transition effect on background color */
}

.find-out-more-btn:hover {
    background-color: #313433;
	color:white; /* Change background color on hover */
}




/* img {
    width: 100%; /* Make sure images take the full width of their parent container */
} */
 /* position: relative; */

		</style>
<section class="section1" id="section--1">
	<div class="section__title">
		<h2 class="section__description">Featuring</h2>
		<h3 class="section__header">
			Experience All The Luxurious Things
		</h3>
	</div>

	<div class="features">
	<img src="{{asset('images/interior.jpg')}}" class="zoom-image" alt="room" />
	
   
		<div class="features__feature">
			{{-- <div class="features__icon"> --}}
				{{-- <svg>
					<use xlink:href="img/icons.svg#icon-monitor"></use>
				</svg> --}}
			{{-- </div> --}}
			<h5 class="features__header">Rooms</h5>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse explicabo fugit non modi eum, aspernatur perferendis maiores quaerat natus molestias nemo omnis? Maxime impedit ipsa, vero porro ea ex corporis!
			</p>
			<h5 class="features__header">Amenities</h5>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse explicabo fugit non modi eum, aspernatur perferendis maiores quaerat natus molestias nemo omnis? Maxime impedit ipsa, vero porro ea ex corporis!
			</p>
			<br/>
			<form action="{{ route('homepage') }}">
			<button class="find-out-more-btn">Find Out More</button>
			</form>

			<br/><br/>
			
		</div>
		
	

		<div class="features__feature">
			{{-- <div class="features__icon"> --}}
				{{-- <svg>
					<use xlink:href="img/icons.svg#icon-trending-up"></use>
				</svg> --}}
			{{-- </div> --}}
			<h5 class="features__header">Swimming Pool</h5>
			<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, architecto iure, id eligendi sapiente aliquid sunt accusamus saepe expedita ipsum dicta necessitatibus? Sit aliquam labore, quia fuga facere voluptatibus cumque.
			</p>
			<h5 class="features__header">Yoga Terrace</h5>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore consectetur voluptate, quibusdam quidem aspernatur, ad optio voluptatibus repudiandae officia unde minima ullam ex tenetur fugiat tempora doloribus blanditiis ducimus! Corporis!
			</p>
			<br/>
			<form action="{{ route('homepage') }}">
			<button class="find-out-more-btn">Find Out More</button>
			</form>

		</div>
		<img src="{{asset('images/pool.jpg')}}" class="zoom-image" alt="pool"  />
	</div>
</section>
@endsection