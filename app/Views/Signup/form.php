<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/public/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/public/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                  <form method="post" action="<?=base_url('Daftar/Save')?>">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >
                    
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control p_input" required value="<?=$data['username']?? ''?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Pengajar</label>
                    <input type="text" name="namapengajar" class="form-control p_input" required value="<?=$data['username']?? ''?>">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input" required value="<?=$data['email']?? ''?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control p_input" required value="<?=$data['password']?? ''?>">
                  </div>
                  <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jeniskelamin" id="dropdownMenuButton2" value="<?=$data['jeniskelamin']?? ''?>" style="color: white;">
                        <option value="" disabled selected>-</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Daftar</button>
                  </div>      
                  <p class="sign-up text-center">Sudah Punya Akun?<a href="<?=base_url('LoginView/form')?>"> Masuk</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/public/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/public/js/off-canvas.js"></script>
    <script src="/public/js/hoverable-collapse.js"></script>
    <script src="/public/js/misc.js"></script>
    <script src="/public/js/settings.js"></script>
    <script src="/public/js/todolist.js"></script>
  </script>
    <!-- endinject -->
  </body>
</html>