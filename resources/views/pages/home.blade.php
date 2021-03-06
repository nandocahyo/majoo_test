
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Majoo Teknologi Indonesia</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('frontend/sticky-footer-navbar.css') }}" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Majoo Teknologi Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
      </nav>
    </header>

<br>
    <!-- Begin page content -->
    
  <div class="container">
      <div class="row">
      <h4>List Produk</h4>
        <div class="card-deck text-center">
        @foreach($products as $p)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ URL::to('/') }}/product-image/{{ $p->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$p->name_product}}</h5>
                <h5 class="mt-0">Rp. {{ number_format($p->price,0,",",".") }}</h5>
                <p class="card-text">{{ Illuminate\Support\Str::limit($p->description, 100) }}</p>
                <a href="{{ route('product_detail', $p->id) }}" class="btn btn-primary">Beli</a>
            </div>
        </div>
        @endforeach

      </div>
  </div>
</div>

    <footer class="footer text-center">
      <div class="container">
        <span class="text-center">2020 @ PT Majoo Teknologi Indonesia</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"></script>
  </body>
</html>
