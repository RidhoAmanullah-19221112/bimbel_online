<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
                                <h3 class="card-title text-left mb-3">Login</h3>
                                <form action="<?=base_url()?>/LoginView" method="post">
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="text" class="form-control p_input" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" class="form-control p_input" name="katasandi">
                                    </div>
                                    <div class="form-group">
                                        <label for="dropdownMenuButton2">Pilih Sebagai</label>
                                        <select class="form-control" id="dropdownMenuButton2" style="color: white;">
                                            <option selected disabled>-</option>
                                            <option value="Pengajar">Pengajar</option>
                                            <option value="Siswa">Siswa</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember me </label>
                                        </div>
                                        <a href="#" class="forgot-pass">Forgot password</a>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                    </div>
                                    <p class="sign-up">Belum memiliki akun? <a href="<?=base_url('Daftar')?>">Daftar di sini</a></p>
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
        <!-- endinject -->
</body>
</html>