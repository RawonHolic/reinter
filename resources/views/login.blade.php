<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSPINIA | Login</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">
  <div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <div>
          <h1 class="logo-name">IRS</h1>
      </div>
      <h3>Selamat Datang</h3>
      <p>Internal Repository System adalah sistem internal yang digunakan oleh FKIP USP untuk menyimpan data keaktifan dosen
          <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
      </p>
      @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif
      @if (session('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
      @endif
      <form class="m-t" role="form" action="/login" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
        <a href="#"><small>Forgot password?</small></a>
        <p class="text-muted text-center"><small>Do not have an account?</small></p>
        <a class="btn btn-sm btn-white btn-block" href="{{ url('/register') }}">Create an account</a>
      </form>
      <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
  </div>

  <!-- Mainly scripts -->
  <script src="js/jquery-2.1.1.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
