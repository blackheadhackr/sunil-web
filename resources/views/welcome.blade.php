<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('common.headlink')

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        @include('common.header')
        {{-- header end --}}
    </div>
    <section class="bg-light my-2">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-photo/waistup-portrait-redhead-female-student-write-down-thoughts-red-lovely-notebook-prepare-grocery-l_1258-126257.jpg?t=st=1739876264~exp=1739879864~hmac=9c76c91e01c3098f679dd951d30da2d96b7fd1ef664f6203d15182705940f137&w=1380"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/waistup-portrait-redhead-female-student-write-down-thoughts-red-lovely-notebook-prepare-grocery-l_1258-126257.jpg?t=st=1739876264~exp=1739879864~hmac=9c76c91e01c3098f679dd951d30da2d96b7fd1ef664f6203d15182705940f137&w=1380"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/waistup-portrait-redhead-female-student-write-down-thoughts-red-lovely-notebook-prepare-grocery-l_1258-126257.jpg?t=st=1739876264~exp=1739879864~hmac=9c76c91e01c3098f679dd951d30da2d96b7fd1ef664f6203d15182705940f137&w=1380"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="py-2 text-center container-fluid">
        <div class="row py-lg-5 about">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">About example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
              <a href="#" class="btn btn-primary my-2">Main call to action</a>
              <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
          </div>
        </div>
    </section>
    <div class="album py-2 bg-light">
        <div class="container">
            <h3 class="pb-4 mb-4 fst-italic border-bottom text-center">
                Top Services
              </h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        
                    <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        
                    <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        
                    <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
        
            </div>
        </div>
    </div>
    <section>
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                  <img class="rounded-lg-3" src="https://platform.theverge.com/wp-content/uploads/sites/2/chorus/uploads/chorus_asset/file/25718390/247372_MacBook_Pro_M4_ADiBenedetto_0029.jpg?quality=90&strip=all&crop=0,0,100,100" alt="" width="720">
              </div>
            </div>
          </div>
        
    </section>
    {{-- <div class="b-example-divider"></div> --}}
    <main>
        <div class="container">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Pricing</h1>
                <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
              </div>
              
       
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>10 users included</li>
                  <li>2 GB of storage</li>
                  <li>Email support</li>
                  <li>Help center access</li>
                </ul>
                {{-- <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button> --}}
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Pro</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>20 users included</li>
                  <li>10 GB of storage</li>
                  <li>Priority email support</li>
                  <li>Help center access</li>
                </ul>
                {{-- <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button> --}}
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Enterprise</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>30 users included</li>
                  <li>15 GB of storage</li>
                  <li>Phone and email support</li>
                  <li>Help center access</li>
                </ul>
                {{-- <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button> --}}
              </div>
            </div>
          </div>
        </div>
    </div>
</main>
@include('common.footer')
    
</body>

</html>
