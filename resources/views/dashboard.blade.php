<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .rounded-lg {
  border-radius: 1rem !important;
}

.text-small {
  font-size: 0.9rem !important;
}

.custom-separator {
  width: 5rem;
  height: 6px;
  border-radius: 1rem;
}

.text-uppercase {
  letter-spacing: 0.2em;
}

body {
  background: #00B4DB;
  background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
  background: linear-gradient(to right, #0083B0, #00B4DB);
  color: #514B64;
  min-height: 100vh;
}

    </style>
    <title>Document</title>
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img
              src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
              height="16"
              alt="MDB Logo"
              loading="lazy"
              style="margin-top: -1px;"
            />
          </a>
      
          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
      
          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
              </li>
            </ul>
            <!-- Left links -->
      
            <div class="d-flex align-items-center">
                
                    <a class="nav-link" href="#">Hello {{ session('user')->name }}</a>
                 
                <form action="logout" method="get">
                    @csrf
              <button type="submit" class="btn btn-link px-3 me-2">
                Logout
              </button>
                </form>
              
            </div>
          </div>
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
      </nav>
    <section >
      <div class="col-lg-2 col-sm-2 col-xs-4">
        <div class="btn-group pull-right bg-clean " >
            <button type="button" style="color:#efefef" class="btn btn-default dropdown-toggle"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort by <span class="caret"></span>
            </button>
            <ul style="width: 20em" class="dropdown-menu list-inline mx-auto justify-content-center">
              {{-- <li><h6 class="dropdown-header">Age</h6></li>
              <form action="age" method="post">
                @csrf
                <div class="input-group input-group-sm mb-3">
    
                  <input type="text" placeholder="enter minimum age" name="minAge" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <input type="text" placeholder="enter maximum age" name="maxAge" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <button type="submit">Ok</button>
              </form> --}}
                <li><h6 class="dropdown-header">Gender</h6></li>
                <li><a href="sort_by_male" ><i class="cv cvicon-cv-calender"></i> male</a></li>
                <li><a href="sort_by_female" ><i class="cv cvicon-cv-view-stats"></i>Female</a></li>
                <li><h6 class="dropdown-header">Family type</h6></li>
                <li><a href="sort_by_nuclear" ><i class="cv cvicon-cv-view-stats"></i>Nuclear</a></li>
                <li><a href="sort_by_joint" ><i class="cv cvicon-cv-view-stats"></i>Joint</a></li>
                <li><h6 class="dropdown-header">Manglik</h6></li>
                <li><a href="sort_by_yes" ><i class="cv cvicon-cv-view-stats"></i>Yes</a></li>
                <li><a href="sort_by_no" ><i class="cv cvicon-cv-view-stats"></i>No</a></li>
                {{-- <li><h6 class="dropdown-header">Price range</h6></li>
                <form action="income_range" method="post">
                <div class="input-group input-group-sm mb-3">
                 
                  <input type="text" style="" name="min" placeholder="min" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  &nbsp;
        
                  <input type="text" placeholder="max" name="max" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <button type="submit">Ok</button>
              </form> --}}
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    @php
      use App\Models\User;
      $data = User::select('users.*')->where(['id' => session('user')->id])->first();
    @endphp
  
      {{-- @if (Session::get('user')->role_as == "user") --}}
      @if ($data->role_as == 'user')
        <div class="container py-5">
      
          <!-- Start -->
          <header class="text-center mb-5 text-white">
            <div class="row">
              <div class="col-lg-7 mx-auto">
              
                <h1>Dashboard</h1>
  
              </div>
            </div>
          </header>
          <!-- END -->
      
      @if (Session::has('success'))
          <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
          </div>
        @endif
      
          <div class="row text-center align-items-end">
           
              @foreach ($items as $item)
               <!-- Pricing Table-->

               <?php 
            // echo $item->family_type;
             $ff = json_decode($data["Family"]);
          
            $occupation = json_decode($data["partnerOccupation"]);
            $partnerManglik = json_decode($data["partnerManglik"]);
           
        if($item->family_type == $ff[0])
        {
            $match_percentage1 = 20;
        }else{
            $match_percentage1 = 0;
        }
        if($item->occupation == $occupation[0] || $item->partnerOccupation == $occupation[1])
        {
           $match_percentage2 = 30;
        }else{
          $match_percentage2 = 0;
        }
        if($item->manglik == $partnerManglik[0])
        {
            $match_percentage3 = 20;
        }else{
          $match_percentage3 = 0;
        }
        // if(in_array($expe, range($min, $max), true))
        // {
        //     $match_percentage4 = 30;
        // }

         $total_match_percentage = $match_percentage1 + $match_percentage2 + $match_percentage3;

        // echo $total_match_percentage;

               ?>
           @if($total_match_percentage != 0)
               <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-4">
                    <div class="d-flex text-black">
                      @if($item->gender == 'male')
                      <div class="flex-shrink-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                          alt="Generic placeholder image" class="img-fluid"
                          style="width: 180px; border-radius: 10px;">
                      </div>
                      @endif
                      @if($item->gender == 'female')
                      <div class="flex-shrink-0">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp"
                          alt="Generic placeholder image" class="img-fluid"
                          style="width: 180px; border-radius: 10px;">
                      </div>
                      @endif
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1">{{$item->name}}</h5>
                        <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$item->occupation}}</p>
                        <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                          style="background-color: #efefef;">
                          <div>
                            <p class="small text-muted mb-1">Income</p>
                            <p class="mb-0">{{$item->annual_income}}</p>
                          </div>
                          <div class="px-3">
                            <p class="small text-muted mb-1">Gender</p>
                            <p class="mb-0">{{$item->gender}}</p>
                          </div>
                         
                          <div>
                            <p class="small text-muted mb-1">matching percentage</p>
                            <p class="mb-0">{{$total_match_percentage}}%</p>
                          </div>
                        </div>
                        <div class="d-flex pt-1">
                          <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                          <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             @endif
              <!-- END -->
              @endforeach
      
          </div>
        </div>
        <div class="msg"></div>
        @endif
      





      <!-- admin dashboard -->
      @if (Session::get('user')->role_as == "admin")
      <div class="container py-5">
        <!-- Start -->
        <header class="text-center mb-5 text-white">
          <div class="row">
            <div class="col-lg-7 mx-auto">
              <h1>Dashboard</h1>
            </div>
          </div>
        </header>
        <!-- END -->
    
    @if (Session::has('success'))
        <div class="alert alert-success">
          <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
        </div>
      @endif
   
        <div class="row text-center align-items-end" id="dashboard">
         
            @foreach ($allData as $all)
             <!-- Pricing Table-->
         
             <div class="col col-md-9 col-lg-7 col-xl-5">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                  <div class="d-flex text-black">
                    @if($all->gender == 'male')
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                        alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;">
                    </div>
                    @endif
                    @if($all->gender == 'female')
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp"
                        alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;">
                    </div>
                    @endif
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-1">{{$all->name}}</h5>
                      <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$all->occupation}}</p>
                      <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                        style="background-color: #efefef;">
                        <div>
                          <p class="small text-muted mb-1">Income</p>
                          <p class="mb-0">{{$all->annual_income}}</p>
                        </div>
                        <div class="px-3">
                          <p class="small text-muted mb-1">Gender</p>
                          <p class="mb-0">{{$all->gender}}</p>
                        </div>
                        <div class="px-3">
                          <p class="small text-muted mb-1">Gender</p>
                          <p class="mb-0">{{$all->gender}}</p>
                        </div>
                       
                      </div>
                      <div class="d-flex pt-1">
                        <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                        <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <!-- END -->
            @endforeach
    
        </div>
      </div>
      <div class="msg"></div>
      @endif
    </section>
</body>
<script>
 //$(document).ready(function(){
// function age(){    
//         $.ajax({
//             type: "GET",
//             url: "{{ URL::to('sort_by_age') }}",
           
//             cache: false,
//             success: function(response)
//             {
//               console.log(response)
//                 $('#dashboard').empty().html(response.allData );
//             }
//         });
//     }
//});
</script>
</html>