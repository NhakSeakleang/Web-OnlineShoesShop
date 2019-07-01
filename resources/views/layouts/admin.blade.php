@extends('layouts.master')

@section('title', 'Admin')

@section('stylesheet')

@endsection

@section('main-content')

    <div>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-primary">Primary</button>

        <!-- Default button -->
        <button type="button" class="btn btn-default">Default</button>

        <!-- Secondary button -->
        <button type="button" class="btn btn-secondary">Secondary</button>

        <!-- Indicates a successful or positive action -->
        <button type="button" class="btn btn-success">Success</button>

        <!-- Contextual button for informational alert messages -->
        <button type="button" class="btn btn-info">Info</button>

        <!-- Indicates caution should be taken with this action -->
        <button type="button" class="btn btn-warning">Warning</button>

        <!-- Indicates a dangerous or potentially negative action -->
        <button type="button" class="btn btn-danger">Danger</button>
    </div>
    <div>
        <button type="button" class="btn btn-outline-primary waves-effect">Primary</button>
        <button type="button" class="btn btn-outline-default waves-effect">Default</button>
        <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
        <button type="button" class="btn btn-outline-success waves-effect">Success</button>
        <button type="button" class="btn btn-outline-info waves-effect">Info</button>
        <button type="button" class="btn btn-outline-warning waves-effect">Warning</button>
        <button type="button" class="btn btn-outline-danger waves-effect">Danger</button>
    </div>
    <div>
        <button type="button" class="btn btn-primary btn-rounded">Primary</button>
        <button type="button" class="btn btn-default btn-rounded">Default</button>
        <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
        <button type="button" class="btn btn-success btn-rounded">Success</button>
        <button type="button" class="btn btn-info btn-rounded">Info</button>
        <button type="button" class="btn btn-warning btn-rounded">Warning</button>
        <button type="button" class="btn btn-danger btn-rounded">Danger</button>
    </div>
    <div>
        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Primary</button>
        <button type="button" class="btn btn-outline-default btn-rounded waves-effect">Default</button>
        <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
        <button type="button" class="btn btn-outline-success btn-rounded waves-effect">Success</button>
        <button type="button" class="btn btn-outline-info btn-rounded waves-effect">Info</button>
        <button type="button" class="btn btn-outline-warning btn-rounded waves-effect">Warning</button>
        <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Danger</button>
    </div>
    <div>
        <a class="btn-floating btn-lg btn-default"><i class="fas fa-bolt"></i></a>
        <a class="btn-floating btn-primary"><i class="fas fa-leaf"></i></a>
        <a class="btn-floating btn-sm btn-secondary"><i class="fas fa-star"></i></a>
    </div>
    <div>
        <button class="btn btn-primary"><i class="fas fa-magic mr-1"></i> Left</button>
        <button class="btn btn-default">Right <i class="fas fa-magic ml-1"></i></button>
    </div>
    <div>
        <div class="progress md-progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div>
        <div class="progress md-progress primary-color-dark">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div>
        <!--Big blue-->
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>

        <!--Medium red-->
        <div class="preloader-wrapper active">
            <div class="spinner-layer spinner-red-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>


        <!--Small yellow-->
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-yellow-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <!-- Horizontal Steppers -->
        <div class="row">
            <div class="col-md-12">

                <!-- Stepers Wrapper -->
                <ul class="stepper stepper-horizontal">

                    <!-- First Step -->
                    <li class="completed">
                        <a href="#!">
                            <span class="circle">1</span>
                            <span class="label">First step</span>
                        </a>
                    </li>

                    <!-- Second Step -->
                    <li class="active">
                        <a href="#!">
                            <span class="circle">2</span>
                            <span class="label">Second step</span>
                        </a>
                    </li>

                    <!-- Third Step -->
                    <li class="warning">
                        <a href="#!">
                            <span class="circle"><i class="fas fa-exclamation"></i></span>
                            <span class="label">Third step</span>
                        </a>
                    </li>

                </ul>
                <!-- /.Stepers Wrapper -->

            </div>
        </div>
        <!-- /.Horizontal Steppers -->
    </div>
    <div>
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-4">

                <h4 class="h4 pb-4">Wider</h4>

                <!-- Card Wider -->
                <div class="card card-cascade wider">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title"><strong>Alison Belmont</strong></h4>
                        <!-- Subtitle -->
                        <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
                        <!-- Text -->
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam. </p>

                        <!-- Linkedin -->
                        <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Twitter -->
                        <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                        <!-- Dribbble -->
                        <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

                    </div>

                </div>
                <!-- Card Wider -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

                <h4 class="h4 pb-4">Narrower</h4>

                <!-- Card Narrower -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                        <!-- Text -->
                        <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi.</p>
                        <!-- Button -->
                        <a class="btn btn-unique waves-effect waves-light">Button</a>

                    </div>

                </div>
                <!-- Card Narrower -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

                <h4 class="h4 pb-4">Regular</h4>

                <!-- Card Regular -->
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title"><strong>Billy Coleman</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
                        <!-- Text -->
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex,
                            recusandae. Facere modi sunt, quod quibusdam.
                        </p>

                        <!-- Facebook -->
                        <a type="button" class="btn-floating btn-small btn-fb waves-effect waves-light"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn-floating btn-small btn-tw waves-effect waves-light"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn-floating btn-small btn-dribbble waves-effect waves-light"><i class="fab fa-dribbble"></i></a>

                    </div>

                </div>
                <!-- Card Regular -->

            </div>
            <!-- Grid column -->

        </div>
    </div>
    <div>
        <canvas id="myChart" style="max-width: 500px;"></canvas>
    </div>
    <div>
        <canvas id="lineChart"></canvas>
    </div>
    <div>
        <canvas id="radarChart"></canvas>
    </div>
    <div>
        <canvas id="horizontalBar"></canvas>
    </div>
    <div>
        <canvas id="pieChart"></canvas>
    </div>
    <div>
        <canvas id="doughnutChart"></canvas>
    </div>
    <div>
        <div class="text-center">
            <span class="min-chart" id="chart-sales" data-percent="56"><span class="percent"></span></span>
            <h5><span class="label green badge">Sales <i class="fas fa-arrow-circle-up"></i></span></h5>
        </div>
    </div>
    <div>
        <!-- Section: Products v.1 -->
        <section class="text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
                nostrum quisquam eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/1.jpg" class="card-img-top"
                                 alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Denim</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Denim trousers</a>
                                </strong>
                            </h4>
                            <!--Rating-->
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="far fa-star"></i>
                                </li>
                            </ul>
                            <!-- Description -->
                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit..
                            </p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>49$</strong>
            </span>
                                <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                <i class="fas fa-heart ml-3"></i>
              </a>
            </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg" class="card-img-top"
                                 alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Shoes</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">High heels</a>
                                </strong>
                            </h4>
                            <!--Rating-->
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                            <!-- Description -->
                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                            </p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>89$</strong>
            </span>
                                <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fas fa-heart grey-text ml-3"></i>
              </a>
            </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg" class="card-img-top"
                                 alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Brown coat</a>
                                </strong>
                            </h4>
                            <!--Rating-->
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star-half-alt"></i>
                                </li>
                            </ul>
                            <!-- Description -->
                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                            </p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>59$</strong>
            </span>
                                <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fas fa-heart grey-text ml-3"></i>
              </a>
            </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg" class="card-img-top"
                                 alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Blouses</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Shirt</a>
                                </strong>
                            </h4>
                            <!--Rating-->
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li>
                                    <i class="far fa-star"></i>
                                </li>
                            </ul>
                            <!-- Description -->
                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit.
                            </p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>119$</strong>
            </span>
                                <span class="float-right">
              <a data-toggle="tooltip" data-placement="top" title="Add to Cart">
                <i class="fas fa-shopping-cart grey-text ml-3"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Share">
                <i class="fas fa-share-alt grey-text ml-3"></i>
              </a>
              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                <i class="fas fa-heart ml-3"></i>
              </a>
            </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Products v.1 -->
    </div>
    <div>
        <!-- Section: Products v.3 -->
        <section class="text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
                nostrum quisquam eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Shirt</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Denim shirt
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>120$</strong>
                            </h4>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Sweatshirt</a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>139$</strong>
                            </h4>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="card-img-top"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Grey blouse
                                        <span class="badge badge-pill primary-color">BEST</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>99$</strong>
                            </h4>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card align-items-center">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <!-- Category & Title -->
                            <a href="" class="grey-text">
                                <h5>Outwear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="" class="dark-grey-text">Black jacket</a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>219$</strong>
                            </h4>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Products v.3 -->
    </div>
    <div>
        <!-- Section: Products v.4 -->
        <section class="text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
                nostrum quisquam eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/5.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe dark">
                                <a>
                                    <p>Red trousers
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/8.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe light">
                                <a>
                                    <p>Sweatshirt
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/9.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe dark">
                                <a>
                                    <p>Accessories
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Fourth column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/7.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe light">
                                <a>
                                    <p>Sweatshirt
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Fourth column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Products v.4 -->
    </div>
    <div>
        <!-- Section: Products v.5 -->
        <section class="text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
                nostrum quisquam eum porro a pariatur veniam.</p>

            <!-- Carousel Wrapper -->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!-- Controls -->
                <div class="controls-top">
                    <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <!-- Controls -->
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!-- Indicators -->
                <!-- Slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    <div class="carousel-item active">
                        <div class="col-md-4 mb-2">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Shoes</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Leather boots</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">69$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Jeans</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Slim jeans</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">99$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Shorts</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Denim shorts</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">49$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <!-- First slide -->
                    <!-- Second slide -->
                    <div class="carousel-item">
                        <div class="col-md-4 mb-2">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Accessories</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Summer hat</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">39$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Shoes</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Black heels</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">79$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Outerwear</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Black jacket</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">149$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <!-- Second slide -->
                    <!--Third slide -->
                    <div class="carousel-item">
                        <div class="col-md-4 mb-2">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Accessories</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Leather bag</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">29$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Accessories</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Leather belt</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">89$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                        <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                            <!-- Card -->
                            <div class="card card-cascade narrower card-ecommerce">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top"
                                         alt="sample photo">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <!-- Category & Title -->
                                    <a href="" class="text-muted">
                                        <h5>Shoes</h5>
                                    </a>
                                    <h4 class="card-title my-4">
                                        <strong>
                                            <a href="">Sneakers</a>
                                        </strong>
                                    </h4>
                                    <!-- Description -->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci.
                                    </p>
                                    <!-- Card footer -->
                                    <div class="card-footer px-1">
                                        <span class="float-left">129$</span>
                                        <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fas fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fas fa-heart ml-3"></i>
                  </a>
                </span>
                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <!--Third slide -->
                </div>
                <!-- Slides -->
            </div>
            <!-- Carousel Wrapper -->

        </section>
        <!-- Section: Products v.5 -->
    </div>
    <div>
        <div class="wrapper-editor">

            <div class="block my-4">
                <div class="d-flex justify-content-center">
                    <p class="h5 text-primary createShowP">0 row selected</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center modalWrapper">
                <div class="modal fade addNewInputs" id="modalAdd15" tabindex="-1" role="dialog" aria-labelledby="modalAdd15"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Add new form</h4>
                                <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3 modal-add-inputs">
                                <div class="md-form mb-5">
                                    <input type="text" id="inputName15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputName15">Name</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="inputPosition15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputPosition15">Position</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="inputOfficeInput15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputOfficeInput15">Office</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="inputAge15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="inputAge15">Age</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="date" id="inputDate" class="form-control" placeholder="Select Date">
                                    <label data-error="wrong" data-success="right" for="inputDate15"></label>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                                <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Add form
                                    <i class="far fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd15">Add<i
                                class="fas fa-plus-square ml-1"></i></a>
                </div>
                <div class="modal fade modalEditClass" id="modalEdit15" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
                                <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3 modal-inputs">
                                <div class="md-form mb-5">
                                    <input type="text" id="formNameEdit15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="formNameEdit15">Name</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="formPositionEdit15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="formPositionEdit15">Position</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="formOfficeEdit15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="formOfficeEdit15">Office</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="formAgeEdit15" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="formAgeEdit15">Age</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="text" id="formDateEdit" class="form-control datepicker">
                                    <label data-error="wrong" data-success="right" for="formDateEdit15">Date</label>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center editInsideWrapper">
                                <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
                                    form
                                    <i class="far fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center buttonEditWrapper">
                    <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit15"
                            disabled>Edit<i class="fas fa-pen-square ml-1"></i></button>
                </div>
                <div class="modal fade" id="modalDelete15" tabindex="-1" role="dialog" aria-labelledby="modalDelete15"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4>
                                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <p class="text-center h4">Are you sure to delete selected row?</p>
                            </div>
                            <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
                                <button type="button" class="btn btn-outline-danger btnYesClass" id="btnYes15" data-dismiss="modal">Yes
                                    <i class="far fa-paper-plane ml-1"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary btnNoClass" id="btnNo15" data-dismiss="modal">No
                                    <i class="far fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal" disabled data-target="#modalDelete15"
                            disabled>Delete<i class="fas fa-times ml-1"></i></button>
                </div>
            </div>
            <table id="dt-less-columns" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Position
                    </th>
                    <th class="th-sm">Office
                    </th>
                    <th class="th-sm">Age
                    </th>
                    <th class="th-sm">Start date
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                </tr>
                <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                </tr>
                <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                </tr>
                <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                </tr>
                <tr>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                </tr>
                <tr>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                </tr>
                <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                </tr>
                <tr>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                </tr>
                <tr>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                </tr>
                <tr>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                </tr>
                <tr>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                </tr>
                <tr>
                    <td>Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                </tr>
                <tr>
                    <td>Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                </tr>
                <tr>
                    <td>Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                </tr>
                <tr>
                    <td>Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                </tr>
                <tr>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Sidney</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                </tr>
                <tr>
                    <td>Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2009/10/09</td>
                </tr>
                <tr>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                </tr>
                <tr>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>Singapore</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                </tr>
                <tr>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>28</td>
                    <td>2011/06/07</td>
                </tr>
                <tr>
                    <td>Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                </tr>
                <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                </tr>
                <tr>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sidney</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                </tr>
                <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                </tr>
                <tr>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                </tr>
                <tr>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                </tr>
                <tr>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                </tr>
                <tr>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                </tr>
                <tr>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                </tr>
                <tr>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                </tr>
                <tr>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                </tr>
                <tr>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                </tr>
                <tr>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                </tr>
                <tr>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                </tr>
                <tr>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                </tr>
                <tr>
                    <td>Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>Tokyo</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                </tr>
                <tr>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                </tr>
                <tr>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                </tr>
                <tr>
                    <td>Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                </tr>
                <tr>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                </tr>
                <tr>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                </tr>
                <tr>
                    <td>Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                </tr>
                <tr>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                </tr>
                <tr>
                    <td>Hermione Butler</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                </tr>
                <tr>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                </tr>
                <tr>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                </tr>
                <tr>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                </tr>
                <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                </tr>
                <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Name
                    </th>
                    <th>Position
                    </th>
                    <th>Office
                    </th>
                    <th>Age
                    </th>
                    <th>Start date
                    </th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection

@section('javascript')

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>
    <script>
        //line
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                },
                    {
                        label: "My Second dataset",
                        data: [28, 48, 40, 19, 86, 27, 90],
                        backgroundColor: [
                            'rgba(0, 137, 132, .2)',
                        ],
                        borderColor: [
                            'rgba(0, 10, 130, .7)',
                        ],
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true
            }
        });

    </script>
    <script>
        //radar
        var ctxR = document.getElementById("radarChart").getContext('2d');
        var myRadarChart = new Chart(ctxR, {
            type: 'radar',
            data: {
                labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 59, 90, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                },
                    {
                        label: "My Second dataset",
                        data: [28, 48, 40, 19, 96, 27, 100],
                        backgroundColor: [
                            'rgba(0, 250, 220, .2)',
                        ],
                        borderColor: [
                            'rgba(0, 213, 132, .7)',
                        ],
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true
            }
        });

    </script>
    <script>
        new Chart(document.getElementById("horizontalBar"), {
            "type": "horizontalBar",
            "data": {
                "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
                "datasets": [{
                    "label": "My First Dataset",
                    "data": [22, 33, 55, 12, 86, 23, 14],
                    "fill": false,
                    "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                        "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
                        "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                    ],
                    "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                        "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"
                    ],
                    "borderWidth": 1
                }]
            },
            "options": {
                "scales": {
                    "xAxes": [{
                        "ticks": {
                            "beginAtZero": true
                        }
                    }]
                }
            }
        });

    </script>
    <script>
        //pie
        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                    data: [300, 50, 100, 40, 120],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
            },
            options: {
                responsive: true
            }
        });

    </script>
    <script>
        //doughnut
        var ctxD = document.getElementById("doughnutChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'doughnut',
            data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                    data: [300, 50, 100, 40, 120],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
            },
            options: {
                responsive: true
            }
        });

    </script>
    <script>
        $(function () {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#4caf50",
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

    </script>
    <script>
        $('#dt-less-columns').mdbEditor({
            modalEditor: true,
            headerLength: 5,
        });
        $('.dataTables_length').addClass('bs-select');
    </script>

@endsection