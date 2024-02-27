<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Transaksi</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Penjualan</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Penjualan</h6>
        <h5 class="font-weight-bolder text-white mb-0">Kasir <?= user()->username; ?></h5>
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
          <!--<li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../public/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../public/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>-->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <style>
    div.dataTables_wrapper div.dataTables_length label {
      display: none !important;
    }
  </style>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group row d-none">
              <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" name="tanggal" id="tanggal">
              </div>
            </div>
            <div class="form-group row">
              <label for="pelanggan" class="col-sm-5 col-form-label">Pelanggan</label>
              <div class="col-sm-9">
                <select name="pelanggan" id="pelanggan" class="form-control">
                  <?php foreach ($tb_pelanggan as $plg) : ?>
                    <option value="<?= $plg['PelangganID']; ?>"><?= $plg['nama_pelanggan']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group row">
              <label for="nama_produk" class="col-sm-6 col-form-label">Cari Produk</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <input type="hidden" id="nama_produk">
                  <input type="hidden" id="harga_beli">
                  <input type="hidden" id="harga_jual">
                  <input type="hidden" id="stok">
                  <select class="form-control mr-5" type="select">
                    <option value="">Pilih Produk</option>
                    <?php foreach ($tb_produk as $pro) : ?>
                      <option value="<?= $pro['ProdukID']; ?>"><?= $pro['nama_produk']; ?> (<?= $pro['stock']; ?>) -<?= $pro['harga_jual']; ?> </option>
                    <?php endforeach; ?>
                  </select>
                  <span class="text-muted" id="tampil-stok"></span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="jumlah" class="col-sm-5 col-form-label">Jumlah</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" name="jumlah" id="jumlah" min="1">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="text-right">
              <h4>Subtotal <span class="text-bold" id="invoice"></span></h4>
              <h1><span class="text-bold text-danger" id="tampilkan_total">0</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-0 mt-4">
       <button type="submit" class="btn btn-primary">Simpan</button>
         &nbsp;<a href="/produk" class="btn btn-danger">Cancel</a>
    </div>
   <!-- .row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-primary card-outline">
          <div class="p-0 table-responsive">
            <table class="table table-bordered table-striped" id="tabel-keranjang" width="100%">
              <thead>
                <tr>
                  <th>tanggal Penjualan</th>
                  <th>Nama Pelanggan</th>
                  <th>Nama Produk</th>
                  <th>Jumlah barang</th>
                  <th>Aksi</th>
                </tr>
              </thead>          
              <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($tb_penjualan as $item) : ?>
                    <tr>
                      <td class="align-middle text-center text-sm">
                        <?= $item['tanggal_penjualan']; ?>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <?= $item['nama_pelanggan']; ?>
                      </td>
                      <td class="align-middle text-center text-sm">
                         <?= $item['nama_produk']; ?>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <?= $item['jumlah_produk']; ?>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <?= $item['subtotal']; ?>
                      </td>
                      <td class="text-center">
                        <a href="javascript:;" class="text-warning font-weight-bold text-xs ps-2" data-toggle="tooltip" data-original-title="Edit user"><i class=" fas fa-solid fa-info text-warning me-0"></i>
                          Details
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/produk/edit/<?= $pro['ProdukID']; ?>" class="text-primary font-weight-bold text-xs ps-2" data-toggle="tooltip" data-original-title="Edit user"><i class="fas fa-pencil-alt text-primary me-0" aria-hidden="true"></i>
                          Edit
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <form action="/produk/<?= $pro['ProdukID'];?>" method="post" class="d-inline">

                          <input type="hidden" name="_method" value="DELETE">

                            <button type="submit" style="border: none; background-color: Transparent;"  onclick="return confirm('Hapus data produk <?= $pro['nama_produk'] ;?>?');"><a class="text-danger font-weight-bold text-xs ps-2" data-toggle="tooltip" data-original-title="Edit user"><i class="far fa-trash-alt me-0"></i>
                              Hapus
                            </a></button>
                        </form>
                      </td>
                    </tr>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td class="align-middle text-center text sm" colspan="4">Total Harga</td>
                    <td class="text-center"></td>
                  </tr>
                  </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <!-- .row -->
   
    <!-- .row -->
  </div>

  <!-- modal edit item produk -->
 
    </div>
    <!-- /.modal-dialog -->
  </div>