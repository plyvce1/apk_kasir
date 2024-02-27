<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Master Data</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Produk</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Produk</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="<?= base_url('logout') ?>" class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    < <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="img-fluid img-circle avatar">
                        </div>
                        <h3 class="profile-username text-center"></h3>
                        <p class="text-muted text-center">Tanggal Daftar </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h6><i class="ni ni-box-2 text-dark align-items-center" aria-hidden="true"></i>&nbsp;Profile</h6>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama">
                                <small class="invalid-feedback"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="username">
                                <small class="invalid-feedback"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Alamat Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" id="email">
                                <small class=" invalid-feedback"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password" autocomplete="off">
                                <small class="text-danger">Kosongkan jika tidak ingin di ganti!</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                                <small class="invalid-feedback"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="avatar" class="col-sm-2 col-form-label">Photo Profile</label>
                            <div class="col-sm-2 d-none">
                                <img class="img-thumbnail" id="img-preview">
                            </div>
                            <div class="col-sm-4">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="avatar" name="avatar">
                                    <label class="custom-file-label" for="avatar">Upload Photo</label>
                                    <small class="invalid-feedback"></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="id">
                            <input type="hidden" name="role">
                            <input type="hidden" name="avatarLama" id="avatarLama">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" id="simpan" class="btn btn-success">Simpan</button>
                            </div>
                        </div>

                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>

        <script>
            $("#avatar").on("change", function(e) {
                let src = URL.createObjectURL(e.target.files[0]);
                $("#img-preview").prop("src", src).parent().removeClass("d-none")
            })
            $("#simpan").on("click", function(e) {
                e.preventDefault();
                let formData = new FormData($("form")[0]);
                $.ajax({
                    type: $("form").attr("method"),
                    url: $("form").attr("action"),
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    cache: false,
                    data: formData,
                    success: function(response) {
                        responValidasi(['simpan'], ['nama', 'username', 'email', 'avatar'], response);
                        if (response.sukses) {
                            $("#img-preview").parent().addClass('d-none');
                            $(".avatar").attr("src", `${BASE_URL}/uploads/profile/${response.user.avatar}`);
                            $("#nama").val(response.user.nama);
                            $("#username").val(response.user.username);
                            $("#email").val(response.user.email);
                            $("#password").val('');
                            $("#alamat").val(response.user.alamat);
                            $("#avatarLama").val(response.user.avatar);
                        }
                    }
                });
            });
        </script>