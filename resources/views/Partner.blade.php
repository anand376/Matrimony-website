<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
     
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
     
     
     
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/css/bootstrap-multiselect.css" integrity="sha512-tlP4yGOtHdxdeW9/VptIsVMLtgnObNNr07KlHzK4B5zVUuzJ+9KrF86B/a7PJnzxEggPAMzoV/eOipZd8wWpag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/js/bootstrap-multiselect.min.js" integrity="sha512-lxQ4VnKKW7foGFV6L9zlSe+6QppP9B2t+tMMaV4s4iqAv4iHIyXED7O+fke1VeLNaRdoVkVt8Hw/jmZ+XocsXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
            
            
            <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="/resources/demos/style.css">
        
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <title>Document</title>
</head>
<style>
  
    .select{width: 100%}
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
</style>
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
                <h1>Partner Details</h1>
                
            </div>
          </header>
          <div class="row justify-content-center">
            <div class="col-4">
              
                <form action="/partner_info" method="post">
                    @csrf
                   
                    <p>
                        <label style="color: white" for="amount">Expected:</label>
                        <input type="text" id="amount" name="expectedIncome" readonly style="border:0; color:#f6931f; font-weight:bold;" required>
                      </p>
                       
                      <div id="slider-range" class="mb-4"></div>
                    <span style="color: white">Occupation</span>
    <select id="multi-select-demo" name="occupation[]" class="form-control" multiple="multiple" required>
 
        <option value="Private">Private job</option>
     
        <option value="Government"> Government Job</option>
     
        <option value="Business">Business</option>
     
    </select><br><br>

    <span style="color: white">Family type</span>
    <select id="multi-select-Family" name="family[]" class="form-control mt-4" multiple="multiple" required>
 
        <option value="Joint">Joint family</option>
     
        <option value="Nuclear">Nuclear family</option>
     
    </select><br><br>

    <span style="color: white" class="mt-4">Manglik</span>
    <select id="multi-select-Manglik" name="manglik[]" class="form-control mt-4" multiple="multiple" required>
 
        <option value="Yes">Yes</option>
     
        <option value="No">No</option>
     
    </select>
    <button type="submit" class="btn btn-primary btn-block mt-4 mb-4">Save</button>
                    
                </form>
            </div>
          </div>
    </div>
      </section>

 
    <script type="text/javascript">
 
        $(document).ready(function() {
     
            $('#multi-select-demo').multiselect();
     
        });

        $(document).ready(function() {
     
     $('#multi-select-Family').multiselect();

 });

 $(document).ready(function() {
     
     $('#multi-select-Manglik').multiselect();

 });



 $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 100000,
      max: 1500000,
      values: [ 1000000, 5000000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val(  ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) );
  } );
     
    </script>
 
</body>
</html>