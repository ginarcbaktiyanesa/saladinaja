<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Login Admin - Saladin aja</title>
    <link rel="icon" href="assets/img/salad1.png" type="image/gif">
    
  </head>
  <body style="background-image: url('assets/img/bg-login.jpg')">
      <div class="row" style="margin-top: 100px;">
          <div class="col-md-4 offset-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <center><h2>LOGIN</h2></center>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="<?= base_url('Auth'); ?>">
                        <div class="form-group">
                            <td>Username</td>
                            <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <td>Password</td>
                            <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off" required>
                        </div>
                        <?php echo $this->session->flashdata('message'); ?>
                        <center>
                        <input type="radio" id="pegawai" name="jenis_table" value="pegawai">
                        <label for="male">Pegawai</label>

                        <input type="radio" id="kurir" name="jenis_table" value="kurir">
                        <label for="female">Kurir</label><br>
                        
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </center>
                </div>
            </div>
          </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>