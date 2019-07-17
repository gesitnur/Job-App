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

       
        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-1">
                       </div>						
                       <h1></h1>					
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
                                      
                                       <h4>{!!$userr->posisi!!}</h4></a>
                                        
                                    </div>
                                 
                                </div>
                                <p>
                                        {!! str_limit($userr->detail, 100) !!} 
                                </p>   

    <table>
        <tr>
<td>Name</td>
<td>:</td>
<td>{{ $userr->name }}</td>
        </tr>
        
        <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $userr->email }}</td>
                        </tr>

                        
        <tr>
                <td>Birth</td>
                <td>:</td>
                <td>{{ $userr->birth }}</td>
                        </tr>

                        
        <tr>
                <td>Address</td>
                <td>:</td>
                <td>@if($userr->address == null)
                       Null
                        @else
                    {{ $userr->address }}</td>
                @endif        
                </tr>
                        
        <tr>
                <td>No KTP</td>
                <td>:</td>
                <td>@if($userr->no_ktp == null)
                        Null
                        @else
                    {{ $userr->no_ktp }}</td>
                @endif        
                </tr>
                        
        <tr>
                <td>CV</td>
                <td>:</td>
                <td>@if($userr->cv == null)
                   no CV
                   @else  
                    <a href="{{ asset($userr->cv) }}" target="_blank">see</a></td>
                @endif        
                </tr>
                <tr>
                    <td>.</td>
                </tr>
                <tr>
                    <td><a href="{{route('edit_profil')}}" class="btn btn-reised btn-warning">Edit</a>     </td>
                </tr>
    </table>
     
                             
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
            	
        </section>
        <!-- End post Area -->
            

      
    
       	
    </body>
</html>



