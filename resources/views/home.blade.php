<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasanesia.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

    </head>
    <!-- navbar -->
    <body>

            <div id="app">
              <div class="main-wrapper main-wrapper-1">
                <!-- navbar & notification -->
                @include('layouts.navbar')
                <!-- end navbar -->
              </div>
                <!-- side bar -->
          
                <!-- Main Content -->
                <div class="container">
                <div class="main-content row">
                  
                  <div class="col col-lg-auto">
                    <div class="container" style="padding: 20px">
                    <h1 id="campaign-text">Our Campaign</h1>
                    <div class="card mb-3" style="max-width: 18rem; border: 1px solid rgba(0, 0, 0, 0.125);">
                      <img src="{{ URL::to('/') }}/assets/img/skillage.png" class="card-img-top" alt="skillage">
                      <div class="card-body">
                        <h5 class="card-title">Bantu Petani jagung Sidoarjo</h5>
                        <p class="card-text">lorem ipsum bla bla bla bla bla bla bla bla bla bla.</p>
                        <a href="#" class="btn btn-primary" style="margin-top: 5px">Lihat selengkapnya</a>
                      </div>
                    </div>

                    <div class="card mb-3" style="max-width: 18rem; border: 1px solid rgba(0, 0, 0, 0.125);">
                      <img src="{{ URL::to('/') }}/assets/img/skillage.png" class="card-img-top" alt="skillage">
                      <div class="card-body">
                        <h5 class="card-title">Bantu Petani jagung Sidoarjo</h5>
                        <p class="card-text">lorem ipsum bla bla bla bla bla bla bla bla bla bla.</p>
                        <a href="#" class="btn btn-primary" style="margin-top: 5px">Lihat selengkapnya</a>
                      </div>
                    </div>
                      </div>
                </div>
              
                <!-- akhir dari campaign sebelah kiri -->

                
               <!-- carousel slide foto -->

                  <div class="col" style="margin-inline-start: 341px; margin-block-start: -834px;">
                  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 933px; height: 545px;">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <br>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_1@2x.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_3.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_1@2x.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              
              <!-- carousel slide foto --> 
              {{-- thumbnail kategori --}}
              <div class="col" style="margin-inline-start: 341px; margin-block-start: -302px; margin-inline-end: 20px;"> {{-- style card picture --}}
                <h1 id="campaign-text" style="margin-inline-start: 350px">Kategori</h1>
                <div class="" style="background-color: #37806b; height: 8px; width: 19%; margin-inline-start: 373px; margin-top: -5px; margin-bottom: 10px;"></div>
              <div class="card-group">
                <div class="card">
                  <a style="position: absolute; margin-inline: 9px; margin-block-start: 54px;" id="thumbnails">AGRICULTURE</a>
                  <img src="{{ URL::to('/') }}/assets/img/Intersection_4.png">
                </div>
                <div class="card mb-3">
                  <a style="position: absolute; margin-inline: 20px; margin-block-start: 54px;" id="thumbnails">VEGETABLES</a>
                  <img src="{{ URL::to('/') }}/assets/img/Intersection_5.png">
                </div>
                <div class="card mb-3">
                  <a style="position: absolute; margin-inline: 59px; margin-block-start: 54px;" id="thumbnails">FRUITS</a>
                  <img src="{{ URL::to('/') }}/assets/img/Intersection_6.png">
                </div>
                <div class="card mb-3">
                  <a style="position: absolute; margin-inline: 59px; margin-block-start: 54px;" id="thumbnails">FRUITS</a>
                  <img src="{{ URL::to('/') }}/assets/img/Intersection_6.png">
                </div>
              </div>
              </div>
              {{-- ROW 2 --}}

              <div class="col" style="margin-inline-start: 341px; margin-block-start: -82px; margin-inline-end: 20px;"> {{-- style card picture row 2 --}}
              <div class="card-group" style="padding: 103px; margin-block-start: -99px;">
                <div class="card">
                  <a style="position: absolute; margin-inline: 9px; margin-block-start: 54px;" id="thumbnails">AGRICULTURE</a>
                  <img src="{{ URL::to('/') }}/assets/img/Intersection_4.png">
                </div>
                <div class="card mb-3">
                  <a style="position: absolute; margin-inline: 20px; margin-block-start: 54px;" id="thumbnails">VEGETABLES</a>
                  <img src="{{ URL::to('/') }}/assets/img/Intersection_5.png">
                </div>
                <div class="card mb-3">
                  <a style="position: absolute; margin-inline: 59px; margin-block-start: 54px;" id="thumbnails">FRUITS</a>
                  <img src="{{ URL::to('/') }}/assets/img/Intersection_6.png">
                </div>
              </div>
              </div>

               {{-- END THUMBNAIL --}}

               {{-- NEW PRODUCT --}}

               <section id="views">
                <div class="row" style="margin: 30px; margin-left: 10px;">
                  <h1 id="campaign-text">Produk Baru
                    <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                  </h1>
                </div>

                <div class="row" style="margin: 30px;">
                  <div class="col-md-4  d-flex">
                    <div class="card">
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_35@2x.png" class="card-img-top" alt="...">
                      <div class="card-body" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                        <h3 class="card-title">Janda Bolong</h3 >
                          <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                          <p style="font-size: 12px; margin-top: 10px !important; text-align: left; color: #B0A8B9;"><span class="fa fa-star checked"></span>Lorem, ipsum dolor.</p>
                          <div class="row" style="margin-top: 50px; text-align: left; margin-bottom: 0;">
                              <span style=" font-size: 30px;">USD $200</span>
                              <span style="color: #B0A8B9; font-size: 12px;">Lorem, ipsum dolor.</span>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4  d-flex">
                    <div class="card" >
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_35@2x.png" class="card-img-top" alt="...">
                      <div class="card-body" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                        <h3 class="card-title">Kuping Gajah</h3 >
                          <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                          <p style="font-size: 12px; margin-top: 10px !important; text-align: left; color: #B0A8B9;"><span class="fa fa-star checked"></span>Lorem, ipsum dolor.</p>
                          <div class="row" style="margin-top: 50px; text-align: left; margin-bottom: 0;">
                              <span style=" font-size: 30px;">USD $200</span>
                              <span style="color: #B0A8B9; font-size: 12px;">Lorem, ipsum dolor.</span>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4  d-flex">
                    <div class="card" >
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_35@2x.png" class="card-img-top" alt="...">
                      <div class="card-body" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                        <h3 class="card-title">Gelombang Cinta</h3 >
                          <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                          <p style="font-size: 12px; margin-top: 10px !important; text-align: left; color: #B0A8B9;"><span class="fa fa-star checked"></span>Lorem, ipsum dolor.</p>
                          <div class="row" style="margin-top: 50px; text-align: left; margin-bottom: 0;">
                              <span style=" font-size: 30px;">USD $200</span>
                              <span style="color: #B0A8B9; font-size: 12px;">Lorem, ipsum dolor.</span>
                          </div>
                      </div>
                    </div>
                  </div>
                </section>
                
                {{-- BEST SELLER PRODUCT --}}

               <section id="views">
                <div class="row" style="margin: 30px; margin-left: 10px;">
                  <h1 id="campaign-text">Best Seller
                    <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                  </h1>
                </div>

                <div class="row" style="margin: 30px;">
                  <div class="col-md-4  d-flex">
                    <div class="card">
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_35@2x.png" class="card-img-top" alt="...">
                      <div class="card-body" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                        <h3 class="card-title">Network Fundamental</h3 >
                          <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                          <p style="font-size: 12px; margin-top: 10px !important; text-align: left; color: #B0A8B9;"><span class="fa fa-star checked"></span>Lorem, ipsum dolor.</p>
                          <div class="row" style="margin-top: 50px; text-align: left; margin-bottom: 0;">
                              <span style=" font-size: 30px;">USD $200</span>
                              <span style="color: #B0A8B9; font-size: 12px;">Lorem, ipsum dolor.</span>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="card" >
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_35@2x.png" class="card-img-top" alt="...">
                      <div class="card-body" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                        <h3 class="card-title">Network Fundamental</h3 >
                          <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                          <p style="font-size: 12px; margin-top: 10px !important; text-align: left; color: #B0A8B9;"><span class="fa fa-star checked"></span>Lorem, ipsum dolor.</p>
                          <div class="row" style="margin-top: 50px; text-align: left; margin-bottom: 0;">
                              <span style=" font-size: 30px;">USD $200</span>
                              <span style="color: #B0A8B9; font-size: 12px;">Lorem, ipsum dolor.</span>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="card" >
                      <img src="{{ URL::to('/') }}/assets/img/Intersection_35@2x.png" class="card-img-top" alt="...">
                      <div class="card-body" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                        <h3 class="card-title">Network Fundamental</h3 >
                          <div class="" style="background-color: #37806b; height: 8px; width: 208px;"></div>
                          <p style="font-size: 12px; margin-top: 10px !important; text-align: left; color: #B0A8B9;"><span class="fa fa-star checked"></span>Lorem, ipsum dolor.</p>
                          <div class="row" style="margin-top: 50px; text-align: left; margin-bottom: 0;">
                              <span style=" font-size: 30px;">USD $200</span>
                              <span style="color: #B0A8B9; font-size: 12px;">Lorem, ipsum dolor.</span>
                          </div>
                      </div>
                    </div>
                  </div>
                </section>
              {{-- akhir dari produk --}}

              <!-- order to whatsapp -->
              <div class="container">
                <span id="Request_orders">Request orders</span><span style="color:rgba(0,0,0,1); font-size: 50px; font-family: Poppins; font-style: normal;
                font-weight: bold;"> according<br/>to your needs.</span>
              </div>
              <!-- formnya -->
              <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" style="width: 40%;">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Apa yang mau dibeli?" style="width: 40%;">
              </div>
              <!-- button -->
              <div class="col-12">
                <button type="submit" class="btn btn-whatsapp" style=" width: 40%; height: 62px;">Chat us on whatsapp.</button>
              </div>
            </form>             
              
            <!--- gambar disampingnya -->
            <img src="{{ URL::to('/') }}/assets/img/Intersection_20@2x.png" class="img-fluid" alt="thumbnail" style="width: 698px; margin-inline-start: 594px; margin-block-start: -312px;">

              <!-- footer -->
              @include('layouts.footer')

              {{--  end div bagian atas --}}
            </div>
            </div>
            </div>
            </div>
          
     <!-- end navbar -->

        <script src="assets/js/bootstrap.bundle.js"></script>
    </body>
</html>
