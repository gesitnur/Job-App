@extends('layout.master_user')

@section("content") 

<body>

   


  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
      <div class="overlay overlay-bg"></div>
      <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
              <div class="about-content col-lg-12">
                  <h1 class="text-white">
                      Job Details				
                  </h1>	
                  <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="single.html"> Job Details</a></p>
              </div>											
          </div>
      </div>
  </section>
  <!-- End banner Area -->	
      
  <!-- Start post Area -->
  <section class="post-area section-gap">
      <div class="container">
          <div class="row justify-content-center d-flex">
              <div class="col-lg-8 post-list">
                  <div class="single-post d-flex flex-row">
                      <div class="details">
                          <div class="title d-flex flex-row justify-content-between">
                              <div class="titles">
                                  <h4>{!! $job->posisi !!}</h4>				
                              </div>
                          </div>
                          <p class="address">Gaji : {!! $job->gaji !!}</p>
                          <p class="address"></span> Waktu Proses : {!! $job->waktu_proses !!}</p>
                        </div>
                  </div>	
                  <div class="single-post job-details">
                      <h4 class="single-title">Detail</h4>
                      <p>
                        {!! $job->detail !!}
                      </p>
                      </div>
                  
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Kirim lamaran dengan posisi {!! $job->posisi !!}</p>
          <p>Atas Nama {{ Auth::user()->name }}</p>

        </div>
        <div class="modal-footer">
                <form class="form-horizontal" method="POST" action="{{ route('apply_job',$job->id) }}">
                        {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary">
                                   Kirim
                                </button>
                          
          {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
        </div>
      </div>
    </div>
  </div>
</div>														
              </div>
              
              </div>
          </div>
      </div>	
  </section>
  <!-- End post Area -->

</body>