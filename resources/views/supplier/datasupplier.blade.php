
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - Data Supplier</title>
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"> --}}
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Handphone</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                {{-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> --}}
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/logout" onclick="return confirm('apakah anda yakin ingin logout?');">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="/table">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-list "></i></div>
                                Data Handphone
                            </a>
                            <a class="nav-link" href="/pembeli">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-cells-large"></i></i></div>
                                Data Pembeli
                            </a>
                            <a class="nav-link" href="/pegawai">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Pegawai
                            </a>
                            <a class="nav-link" href="/supplier">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Supplier
                            </a>
                            {{-- <a class="nav-link" href="/barang">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Barang
                            </a> --}}
                        </div>
                    </div>
                    {{-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> --}}
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h5 class="mt-4">Tabel</h5>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tabel Supplier</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="/tambahsupplier" class="btn btn-primary">+ Tambah Supplier +</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTabel Supplier
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-dark" id="example">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Supplier</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Fitur</th>
                                        <th scope="col">Jumlah Barang</th>
                                        <th scope="col">Harga Beli</th>
                                        <th scope="col">Harga Total</th>
                                        <th scope="col">No.Telepon</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($data as $datasupplier)
                                        <tr>
                                        <td>{{  $no }}</td>
                                        <td>{{  $datasupplier->nama_supplier }}</td>
                                        <td>{{  $datasupplier->idsupplier->jenis_barang }}</td>
                                        <td>{{  $datasupplier->fitur }}</td>
                                        <td>{{  $datasupplier->jumlah }}</td>
                                        <td>Rp {{ number_format($datasupplier['harga_beli'],2,',',',') }}</td>
                                        <td>Rp {{ number_format($datasupplier['hargatotal'],2,',',',') }}</td>
                                        {{-- <td>{{  $datasupplier->hargatotal }}</td> --}}
                                        <td>{{  $datasupplier->notelp }}</td>
                                        <td>{{  $datasupplier->alamat }}</td>
                                        <td>
                                            {{-- <a href="{{ url('/editsupplier/'.$datasupplier->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>    --}}
                                            <a href="#" class="btn btn-danger destroysup" data-id="{{ $datasupplier->id }}" data-nama="{{ $datasupplier->nama_supplier }}"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                     <?php $no++ ?>
                                    @endforeach
                                  </table>

                                </div>
                        </div>
                    </div>
                </main>
                {{-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
       @include('template.script')
    </body>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
         $('.destroysup').click(function(){
            var supplierid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                title: "Yakin?",
  text: "Kamu ingin menghapus data supplier dengan nama "+nama+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/destroysup/"+supplierid+""
    swal("Data Berhasil Dihapus", {
      icon: "success",
    });
  } else {
    swal("Data Tidak Terhapus");
  }
});
        });
    </script>

    <script>
        @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        @endif

    </script>
    <script>
        $(document).ready(function () {
         $('#example').DataTable();
     });
     </script>
</html>
