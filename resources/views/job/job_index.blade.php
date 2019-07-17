@extends('layout.master_user')

@section("content") 

    {{-- <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title --> --}}
    <body>

         
          <!-- #header -->


        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-1">
                       </div>						
                       <h1>GEEKSFARM</h1>					
                </div>
            </div>
        </section>
        <!-- End banner Area -->
        <!-- Start post Area -->
        @foreach($jobs as $job)
        <section class="post-area section-gap">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8 post-list">
                        <div class="single-post d-flex flex-row">
                           
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        
                                       <h4>{!!$job->posisi!!}</h4>				
                                    </div>
                                </div>
                                <p>
                                        {!! str_limit($job->detail, 100) !!} 
                                </p>
                                <p class="address"><strong>Waktu Proses :</strong>{!!$job->waktu_proses!!}</p>
                                <p class="address"><strong>Gaji         :</strong>{!!$job->gaji!!}</p>
                                <p class="address"><strong>Dibuat Tanggal:</strong>{!!$job->created_at->format('d-m-y')!!}</p>
                                @guest
                            <a href="{{ route('login') }}">Login untuk melamar</a>
                        @else
                        <a href="{{route('job.show',$job->id)}}" class="pull right btn btn-primary">Read More</a></div>
                  
                        @endguest
                                
                            </div>
                        </div>
                       
                       
                    </div></div>
                
        </section>
        @endforeach
     
        <!-- End post Area -->
            

        <div class="row">
                <div class="col">{{$jobs->links('vendor.pagination.bootstrap-4')}}</div>
                </div></body>
</html>



