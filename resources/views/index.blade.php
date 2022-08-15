<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>front</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('index/assets/favicon.ico')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('index/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <a class="btn btn-primary" href="#signup">Sign Up</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Generate more leads with a professional landing page!</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class="form-subscribe" action="{{route('frontemail')}}" method="post" >
                                <!-- Email address input-->
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddress" name="email" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                    </div>
                                    <div class="col-auto"><button class="btn btn-primary btn-lg" type="submit">Submit</button></div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
         
            <div class="container">
                <div class="row">
                  @if(isset($getallservice) && !$getallservice->isEmpty())

                     @foreach($getallservice as $key=>$v)


                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="{{$v->icon}}"></i></div>
                            <h3>{{$v->title}}</h3>
                            <p class="lead mb-0">{{$v->description}}</p>
                        </div>
                    </div>
                    
                    @endforeach
                  @endif  
                    
                </div>
            </div>
      
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                @if(isset($getallblog) && !$getallblog->isEmpty())

                  @foreach($getallblog as $key=>$v)

                   @if($key%2 == 0)
                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('index/assets/img/bg-showcase-1.jpg')"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>{{$v->title}}</h2>
                            <p class="lead mb-0">{{$v->description}}</p>
                        </div>
                    </div>
                   @else
                    <div class="row g-0">
                        <div class="col-lg-6 text-white showcase-img" style="background-image: url('index/assets/img/bg-showcase-2.jpg')"></div>
                        <div class="col-lg-6 my-auto showcase-text">
                            <h2>{{$v->title}}</h2>
                            <p class="lead mb-0">{{$v->description}}</p>
                        </div>
                    </div>
                   @endif
                  @endforeach
                @endif  
                    
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">What people are saying...</h2>
                <div class="row">
                @if(isset($getalltestimonial) && !$getalltestimonial->isEmpty())

                  @foreach($getalltestimonial as $key=>$v)
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="index/assets/img/testimonials-1.jpg" alt="..." />
                            <h5>{{$v->title}}</h5>
                            <p class="font-weight-light mb-0">"{{$v->description}}"</p>
                        </div>
                    </div>
                  @endforeach
                @endif
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="" action="{{route('frontemail')}}" method="post">
                            <!-- Email address input-->
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddressBelow" type="email" name="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg" 

                                 type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            @if(isset($getallfooter) && !$getallfooter->isEmpty())
                              @foreach($getallfooter as $key=>$v)
                            <li class="list-inline-item"><a href="{{$v->link}}">{{$v->title}}</a></li>
                              @endforeach
                            @endif
                        </ul>
                        
                         @if(isset($getsetting)) 
                         <p class="text-muted small mb-4 mb-lg-0">
                            {{$getsetting->copyright}}</p>
                         @endif
                   
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            @if(isset($getallsocial) && !$getallsocial->isEmpty())
                              @foreach($getallsocial as $key=>$v)
                            <li class="list-inline-item me-4">
                                <a target="_blank" href="{{$v->link}}"><i class="{{$v->icon}}"></i></a>
                            </li>
                             @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('index/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
