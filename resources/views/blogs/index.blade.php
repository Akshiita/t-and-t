<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">

<!-- MDB CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.7.0/mdb.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies (Popper.js is included with Bootstrap) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.7.0/mdb.min.js"></script>
    @extends('layouts.frontend')

    @section('content')
    <section>
    <!--==================== HOME ====================-->
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <section class="islands swiper-slide">
                <img src="{{ asset('frontend/assets/img/blogs.jpg') }}" alt="" class="islands__bg" />
                <div class="islands__container container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle" style="color:black">Our</h2>
                        <h1 class="islands__title" style="color:black">Blog</h1>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    
  </section>
  {{-- <style>
    /* Custom styles for the carousel items */
.carousel-item {
    display: none;
    text-align: center;
    padding: 50px;
    background-color: #f8f9fa;
    color: #333;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.carousel-item.active {
    display: block;
}

/* Custom styles for carousel navigation controls */
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #007bff;
    padding: 10px;
    border-radius: 50%;
    color: #fff;
}

.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background-color: #0056b3;
}

/* Adjust the width and margin of the carousel container */
#carouselExampleControls {
    max-width: 600px;
    margin: 0 auto;
}
/* Custom styles for carousel navigation controls */
.carousel-control-prev,
.carousel-control-next {
    width: 50px;
    height: 50px;
    background-color: #007bff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 1;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    color: #fff;
    font-size: 24px;
}

/* Optionally, you can add margin to create some space between the buttons and the carousel */
.carousel-control-prev {
    margin-left: 20px;
}

.carousel-control-next {
    margin-right: 20px;
}
/* Custom styles for carousel navigation buttons */
.carousel-control-prev,
.carousel-control-next {
    width: 50px;
    height: 50px;
    background-color: #007bff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0.8;
    transition: opacity 0.3s ease;
    color: #fff;
    font-size: 24px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 1;
}



    </style> --}}
 
   <!-- Bootstrap CSS -->


    {{-- <script>
     
    document.addEventListener("DOMContentLoaded", function () {
        // Get the carousel element
        var carousel = document.getElementById("carouselExampleControls");

        // Get the previous and next buttons
        var prevButton = document.querySelector(".carousel-control-prev");
        var nextButton = document.querySelector(".carousel-control-next");

        // Add event listeners to the buttons
        prevButton.addEventListener("click", function () {
            var currentIndex = parseInt(carousel.querySelector(".carousel-item.active").getAttribute("data-bs-slide-to"));
            if (currentIndex > 0) {
                carousel.querySelector(".carousel-indicators li[data-bs-slide-to='" + (currentIndex - 1) + "']").click();
            }
        });

        nextButton.addEventListener("click", function () {
            var currentIndex = parseInt(carousel.querySelector(".carousel-item.active").getAttribute("data-bs-slide-to"));
            var totalItems = carousel.querySelectorAll(".carousel-item").length - 1; // Zero-based index
            if (currentIndex < totalItems) {
                carousel.querySelector(".carousel-indicators li[data-bs-slide-to='" + (currentIndex + 1) + "']").click();
            }
        });
    });
</script> --}}
     


<!-- Carousel wrapper -->
<div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
        style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">Maria Kate</h5>
          <p>Photographer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
        style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">John Doe</h5>
          <p>Web Developer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">Anna Deynah</h5>
          <p>UX Designer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
  data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
  data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>

</div>
<!-- Carousel wrapper -->
<!-- Carousel wrapper -->



    @endsection


