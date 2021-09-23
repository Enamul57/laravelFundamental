<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-6 mt-5">
                <form action='verifySignin' method="POST">
                    @csrf
                   <h4> <span>Sign In</span></h4>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="text"  class="form-control-plaintext" name='email' id="staticEmail" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control"  name='password' id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <button type='submit' class="btn btn-success" style='float:right'>Sign In</button>
                </form>
              </div>
              <div class="col-6 mt-5">
                <form action='registration' method='POST'>
                    @csrf
                   <h4> <span>Sign Up</span></h4>
                   <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text"  class="form-control-plaintext" id="name" value="" name='name' placeholder='Enter your name'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="text"  class="form-control-plaintext" id="staticEmail"  name='email' value="" placeholder='Enter your email'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                            <input type="text"  class="form-control-plaintext" id="" value="" name='phone' placeholder='Enter your cell number'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword"  name='password' placeholder="Password">
                            </div>
                        </div>
                        <button type='submit' class="btn btn-success" style='float:right'>Sign Up</button>
                </form>
              </div>

          </div>
      </div>
  </body>
</html>