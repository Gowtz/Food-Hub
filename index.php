<?php
include('./template/header.php')
?>
 <!-- header -->
 <header id="home" class="header">
      <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">Book Your Table Now!!</h1>
        <!-- <h2 class="display-4 mb-5">Center fresh &amp; Delightful</h2> -->
        <a class="btn btn-lg btn-primary" href="#gallery">Our Restaurants</a>
      </div>
    </header>
    <!--  About Section  -->
    

    <!--  gallary Section  -->
  <?php 
  require('./pages/restaurant.php')
  ?>
    <!-- BLOG Section  -->
    <div
      id="blog"
      class="container-fluid bg-dark text-light py-5 text-center wow fadeIn"
    >
      <h2 class="section-title py-5">Special Food Available In Our Restuants </h2>
      <div class="row justify-content-center">
        <div class="col-sm-7 col-md-4 mb-5">
          <ul
            class="nav nav-pills nav-justified mb-3"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#foods"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >Foods</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#juices"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >Juices</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="foods"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
        >
          <div class="row">
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/blog-1.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹250</a>
                  </h1>
                  <h4 class="pt20 pb20">Burger </h4>
                  <p class="text-white">
                    Available at Truffles
                    
              
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/1.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹120</a>
                  </h1>
                  <h4 class="pt20 pb20">Pasta</h4>
                  <p class="text-white">
                     Available at Polar Bear
                      <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/3.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹80</a>
                  </h1>
                  <h4 class="pt20 pb20">Sulaimani Tea</h4>
                  <p class="text-white">
                  Available at Chai Kings
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="juices"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <div class="row">
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-4.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹150</a>
                  </h1>
                  <h4 class="pt20 pb20">Lime soda</h4>
                  <p class="text-white">
                    Fresh and refreshing limes and chilled soda.
                    <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-5.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹290</a>
                  </h1>
                  <h4 class="pt20 pb20">Raspberry Pomogrante Smoothie</h4>
                  <p class="text-white">
                    Healthy pomogrante with a twist of raspbery.                 </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-6.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">₹300    </a>
                  </h1>
                  <h4 class="pt20 pb20">Melon Juice</h4>
                  <p class="text-white">
                    Fresh melons from the farm.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- REVIEWS Section  -->
    <div
      id="testmonial"
      class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items py-5"
    >
      <h2 class="section-title my-5 text-center">REVIEWS</h2>
      <div class="row mt-3 mb-5">
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Elon Musk</h3>
            <h6 class="testmonial-subtitle">Web Designer</h6>
            <div class="testmonial-body">
              <p>
                Cheta 2 Tea
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Steve Jobs</h3>
            <h6 class="testmonial-subtitle">UX/UI Designer</h6>
            <div class="testmonial-body">
              <p>
                Offer please
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Jeff Bezos</h3>
            <h6 class="testmonial-subtitle">Graphic Designer</h6>
            <div class="testmonial-body">
              <p>
                Good Job nigga
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
    id="about"
    class="container-fluid wow fadeIn"
    id="about"
    data-wow-duration="1.5s"
  >
    <div class="row">
      <div class="col-lg-6 has-img-bg"></div>
      <div class="col-lg-6">
        <div class="row justify-content-center">
          <div class="col-sm-8 py-5 my-5">
            <h2 class="mb-4">About Us</h2>
            <p>Our Team
              <br /><br />
              <table>
                <tr>
                  <td>Gowtham V  </td>
                  <td>1MJ21CS402</td>
                </tr>
                <tr>
                  <td>Sankalp M S</td>
                  <td>1MJ20CS254</td>
                </tr>
                <tr>
                  <td>Vageesha T C</td>
                  <td>1MJ20CS227</td>
                </tr>
                <tr>
                  <td> Tharun N </td>
                  <td>1MJ20CS221</td>
                </tr>
              </table>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
    <!-- CONTACT Section  -->
    <div
      id="contact"
      class="container-fluid bg-dark text-light border-top wow fadeIn"
    >
      <div class="row">
        <div class="col-md-6 px-0">
          <div
            id="map"
            style="width: 100%; height: 100%; min-height: 400px"
          ></div>
        </div>
        <div class="col-md-6 px-5 has-height-lg middle-items">
          <h3>FIND US</h3>
          <div class="text-muted">
            <p><span class="ti-location-pin pr-3"></span> Bengaluru</p>
            <p><span class="ti-support pr-3"></span>9876543215</p>
            <p><span class="ti-email pr-3"></span>mvjce@microsoft.com</p>
          </div>
        </div>
      </div>
    </div>

  
<!-- google maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>    
<?php
include('./template/footer.php')
?>
