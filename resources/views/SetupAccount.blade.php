<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Your Acount</title>
     

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  

  

  <!-- Google Font: Source Sans Pro -->
  <!-- Custom css -->
  <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">



</head>
<body>

<div class="col d-flex justify-content-center">
<div class="card w-75 mt-5">
  <div class="card-body">
      <h2>Set Up Your Account</h2>
      <p class="text-muted">Fill in the profile details</p>
      @if (count($errors) > 0)
    <div class="alert alert-danger text-center"  id="alertcart">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block" id="alertcart">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
  <form  method="POST" action="UserDataSubmit ">
  @csrf
  <div class="form-group">
    <label for="profileName" class="text-muted font-weight-lighter">Full Name</label>
    <input type="text" class="form-control p-4" name="fullname" id="profileName" placeholder="Enter Full Name">
  
  </div>
  <div class="form-group">
  <label for="profilePassword"  class="text-muted  font-weight-lighter">Password</label>
    <input type="password" class="form-control p-4" name="password" id="profilePassword" placeholder="Enter Password">
  </div>

  <div class="form-group">
  <label for="profileemail"  class="text-muted  font-weight-lighter">Email</label>
    <input type="email" class="form-control p-4" name="email" id="profileemail" placeholder="Enter Email">
  </div>

<br>
  <label for="profileEmail"  class="text-muted  font-weight-lighter">Create your company's custom oboloo website e.g. yourcompany.oboloo.software</label>
  <div class="input-group mb-3">
  <input type="text" class="form-control" name="subdomain" placeholder="Recipient's username" style="padding:30px;">
  <div class="input-group-append">
    <span class="input-group-text" style="color:teal;" id="basic-addon2">@example.com</span>
  </div>
</div>

<div class="p text-center mt-5">
        <p>By logging into the oboloo system you agree to oboloo’s </p>
        <p>Acceptable Use Policy, Terms of Service & Privacy Policy</p>
    </div>

  <button  class="btn btn-dark">Previous</button>
  <button type="submit"  class="btn btn-primary" style="float:right;">Continue</button>
</form>
  </div>
</div>
</div>
    
</body>
</html>

<script>
  setTimeout(function() {

// Do something after 3 seconds
// This can be direct code, or call to some other function

$('#alertcart').hide();

},3000);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>