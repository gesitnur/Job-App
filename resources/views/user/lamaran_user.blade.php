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
                       <h1>GEEKSFARM</h1>					
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Table -->
      <div class="row">
            <div class="col">
              <div class="card shadow">
                <div class="card-header border-0">
                  <h3 class="mb-0">Lamaran Anda</h3>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $li)
                      <tr>
                  <td>{{ $li->posisi }} </td>
                  <td>{!! str_limit($li->detail, 50) !!} </td>
                  <td> @if($li->pivot->message == null)
            <button type="button" class="btn btn-info btn-sm">No Message</button>
                     
                      @else
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal-{!! $li->id !!}">Open Message</button>
                      <div class="modal fade" id="myModal-{!! $li->id !!}" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                            </div>
                            <div class="modal-body">
                              <p>{!! $li->pivot->message !!}</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                     @endif
                    </td>
                  <td>{{ $li->pivot->status }}</td>
                  <td>{{ $li->birth }}</td>
                      </tr>
                  
                   @endforeach
                   
                        <td class="text-right">
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                
          </div>
      </div>
    </div>
      
    </body>
</html>



