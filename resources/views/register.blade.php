<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Integrate Bootstrap Datepicker in Laravel </title>
    <title>Laravel Bootstrap Datepicker</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
       <!-- CSS only -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>  

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



    <title>Document</title>

     <style>
        .form-label{
            color: white;
        }
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
  font-size: 20px;
}
.genral_info{
      background: linear-gradient( to right,#D3EDFF 0%, #FCAAA3 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
}
.reg {
  color: white;
  background-color: rgba(104, 85, 224, 1);
}

    </style>
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
           
          </div>
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
      </nav>
    <section>
    <div class="container-fluid">
        <header class="text-center mb-5 text-white">
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <h1>Registration Form</h1>
               <h3 class="fw-normal mb-3 genral_info"  style="color: #4835d4;">General Infomation</h3>
              </div>
            </div>
          </header>
          @if(session('user'))
          {{ session('user')->name }}
          @endif
        <div class="row justify-content-center">
         
            <div class="col-4">
              <form action="/register_user" method="post">
                @csrf
                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      @if(!session('user'))
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1">First name</label>
                            <input type="text" placeholder="Enter first name" id="form3Example1" name="fname" class="form-control" required />
                           
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example2">Last name</label>
                            <input type="text" placeholder="Enter last name" id="form3Example2" name="lname" class="form-control" required />
                          
                          </div>
                        </div>
                      </div>
                    
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" placeholder="Enter your email" id="form3Example3" name="email" class="form-control" required />
                        
                      </div>
                    
                      <!-- Password input -->
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" placeholder="Enter password" id="form3Example4" name="password" class="form-control" required />
                       
                      </div>
                    @endif
                      <!-- Checkbox -->
                      <div class="form-outline mb-4">
                        <label class="form-label"  for="form3Example4">Date of birth</label>
                          <input class="date form-control" placeholder="Enter date of birth" name="dob" type="text" id="form3Example4" required>
                         
                      </div>
                      <label class="form-label"  for="form3Example4">Gender</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="male" />
                          <label class="form-check-label" for="flexRadioDefault1">
                            Male
                          </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="female" checked />
                          <label class="form-check-label" for="flexRadioDefault2">
                            Female
                          </label>
                        </div><br>
              
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example4">Annul income</label>
                          <input type="input" placeholder="Enter annul income" name="income" id="form3Example4" class="form-control" required/>
                         
                        </div>
                        <span class="" style="color: white">occupation</span>
                        <select class="form-control mb-4" name="occupation"  required>
                         
                          <option value="Private">Private job</option>
                          <option value="Government">Government job</option>
                          <option value="Business">Business</option>
                        </select>
                        <span style="color: white">family type</span>
                        <select class="form-control mb-4" name="family"  required>
                         
                          <option value="Joint">Joint family</option>
                          <option value="Nuclear">Nuclear family</option>
                        </select>
                        <span style="color: white">Manglik</span>
                        <select class="form-control mb-4" name="manglik"  required>
                          <option value="yes">yes</option>
                          <option value="no">no</option>
                        </select>
                              <!-- Submit button -->
         <button type="submit" class="btn btn-success reg btn-block mt-4 mb-4 ">Sign up</button>
        </form>

      </div>
    </section>
      
<script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  



</script> 
</body>

</html>