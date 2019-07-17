@extends('layout.master_user')

@section("content") 

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
                                      
                                </p>
                                <form action="{{route('update_profil', $user->id)}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                        {{csrf_field()}} {{method_field('PUT')}}
                                          
                                              <div class="form-group">
                                                      <label for="title" class = "col-lg-3 control-label">Name</label>
                                                      <div class="col-lg-9">
                                                          <input type="text" name="name" class="form-control" autofocus="true" value="{!!$user->name!!}">
                                                          <div class="text-d anger">
                                                              {!! $errors->first('name') !!}
                                                          </div>
                                                       </div>
                                                        <div class="clear">
                                                            </div> 
                                                          </div>

                                                          <div class="form-group">
                                                                <label for="title" class = "col-lg-3 control-label">Email</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" name="email" class="form-control" autofocus="true" value="{!!$user->email!!}">
                                                                    <div class="text-d anger">
                                                                        {!! $errors->first('email') !!}
                                                                    </div>
                                                                 </div>
         <div class="clear">
       </div> 
</div>

         <div class="form-group">
         <label for="title" class = "col-lg-3 control-label">Birth</label>
         <div class="col-lg-9">
         <input type="date" name="birth" class="form-control" autofocus="true" value="{!!$user->birth!!}">
          <div class="text-d anger">
         {!! $errors->first('birth') !!}
           </div>
           </div>
           <div class="clear">
           </div> 
            </div> 

         <div class="form-group">
         <label for="title" class = "col-lg-3 control-label">No KTP</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input type="text" name="no_ktp" class="form-control" autofocus="true" value="{!!$user->no_ktp!!}">
                                                                                            <div class="text-d anger">
                                                                                                {!! $errors->first('no_ktp') !!}
                                                                                            </div>
                                                                                         </div>
                                                                                          <div class="clear">
                                                                                              </div> 
                                                                                            </div>

                                                           <div class="form-group">
                                                                  <label for="content" class = "col-lg-3 control-label">Address</label>
                                                                   <div class="col-lg-9">
                                            {{-- <input type="textarea" name="content" class="form-control" rows="250" value="{!!$article->content!!}"> --}}
                                            <textarea name="address"  id="address"  class="form-control" rows="10" cols="30">{!!$user->address!!}</textarea>                           
                                                              <div class="text-danger">{!! $errors->first('content') !!}</div> 
                                                                      </div>   
                                            <div class="form-group"> 
                                                                         <label for="cv">CV File (jpeg,png,jpg,gif)</label>
                                                                        </div>
                                                                       <input type="file" name="cv" class="form-control">
                                                                           <div class="clear">
                                                                       </div> 
                                                              </div>
                                                              <div class="form-group">
                                                                   <div class="col-lg-3"></div> 
                                                                   <div class="col-lg-9">
                                                                      <input type="submit" name=save class="btn btn-raised btn-primary">  
                                                                           </div> 
                                                                           <div class="clear"></div>
                                                                           </div>
                                      </form>

                             
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
            	
        </section>
        <!-- End post Area -->
            

        <!-- Start callto-action Area -->
       
    </body>
</html>



