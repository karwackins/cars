
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
     <link href="{{ asset('css/starter-template.css') }} " rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Strona główna <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/shopping">Zakupy <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/repair">Naprawy <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/insurance">Ubezpieczenia <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/detriment">Szkody <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/driver">Kierowcy <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown show">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zestawienia</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Samochody</a>
              <a class="dropdown-item" href="#">Przeglądy okresowe</a>
              <a class="dropdown-item" href="#">Przeglądy okresowe</a>
              <a class="dropdown-item" href="#">Ubezpieczenia</a>
            </div>
          </li>
        </ul>
          
        <a class="navbar-brand" href="#">System Zarządzania Flotą Samochodową Kuratorium Oświaty w Katowicach</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <main role="main" class="container">

        <div class="row">
            <div class="col-md-2">
              <div class="card">
                <div class="card-header">
                 Samochody
                </div>
                <div class="card-body">
                     @yield('content')  
                </div>
              </div>
            </div>   
            
            <div class="col-md-5">
              <div class="card">
                <div class="card-header">
                 Ostatnie zakupy
                </div>
                <div class="card-body">
                    @yield('content_shopping')
                </div>
              </div>
            </div>  
            <div class="col-md-5">
              <div class="card">
                <div class="card-header">
                 Ostatnie naprawy
                </div>
                  <div class="card-body">
                    @yield('content_repair')
                  </div>
                </div>
              </div>
            </div> 
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
              <div class="card border-danger">
                <div class="card-header border-danger">
                 Komunikaty
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <th>Samochód</th>
                        <th>Ubezpieczenie kończy się za</th>
                        <th>Przegląd techniczny kończy się za</th>
                        <th>Przegląd okresowy kończy się za</th>
                         @foreach($chkdate as $value)
                            <tr><td>{{$value->marka .' '.$value->nr_rej}}</td><td>{{$value->uIloscDni.' dni'}}</td><td>{{$value->ptIloscDni.' dni'}}</td><td>{{$value->poIloscDni.' dni'}}</td></tr>
                        @endforeach
                    </table>
                </div>
              </div>
            </div>   
        </div>
    
        
        
        

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
