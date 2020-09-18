
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
        <a class="navbar-brand" href="#">Majoo Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
      </nav>
    </header>

<br>
    <!-- Begin page content -->
    
  <div class="container">
      <div class="row">
      <h4>Order Produk</h4>
      <div class="media">
        <img class="mr-3" src="{{ URL::to('/') }}/product-image/{{ $detail->image }}" alt="Generic placeholder image">
        <div class="media-body">
            <h5 class="mt-0">{{$detail->name_product}}</h5>
            <p>{{$detail->description}}</p>
            <h4 class="mt-0">Rp. {{ number_format($detail->price,0,",",".") }}</h4>
        </div>
        </div>
  </div>

<br>
  <h4>Form Order</h4><br>
    <form action="{{ route('order', $detail->id) }}" method="POST" class="needs-validation" novalidate>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="validationCustom01">Nama Customer</label>
            <input type="text" name="name_customer" class="form-control" id="validationCustom01" placeholder="Nama Customer" required>
            <div class="invalid-feedback">
              Masukkan Nama
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Alamat</label>
            <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="Alamat" required>
            <div class="invalid-feedback">
              Masukkan Alamat
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
            <div class="invalid-feedback">
              Masukkan Email
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nomor Telepon</label>
            <input type="text" name="phone_number" class="form-control" id="inputEmail4" placeholder="Nomor Telepon" required>
            <div class="invalid-feedback">
              Masukkan Nomor Telepon
            </div>
        </div>
    </div>
 
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputState">Keterangan</label>
            <input type="text" name="note" class="form-control" id="inputZip" placeholder="Tambah Keterangan" required>
            <div class="invalid-feedback">
              Masukkan Keterangan
            </div>
        </div>
    </div>

    <div class="form-group">
    </div>
    <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
    </form>
<br>

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
    <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
  </body>
</html>
