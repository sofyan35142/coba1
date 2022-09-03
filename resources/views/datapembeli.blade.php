
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - Data Pembeli</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
        {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
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
                            {{-- <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/login">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div> --}}
                            {{-- <a class="nav-link" href="/charts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a> --}}
                            <a class="nav-link" href="/table">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-list "></i></i></div>
                                Data Handphone
                            </a>
                            <a class="nav-link" href="/pembeli">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-cells-large"></i></div>
                                Data Pembeli
                            </a>

                            @if ((auth()->user()->level=="admin"))
                            <a class="nav-link" href="/pegawai">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Pegawai
                            </a>
                            @endif

                            @if ((auth()->user()->level=="admin"))

                            <a class="nav-link" href="/supplier">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Supplier
                            </a>
                            @endif
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
                    <div class="container-flu`id px-4">
                        <h5 class="mt-4">Tabel</h5>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tabel Pembeli</li>
                        </ol>
                        @if ((auth()->user()->level=="user"))

                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="/tambahpembeli" class="btn btn-primary">Tambah Pembeli <i class="fa-solid fa-plus-minus"></i></a>
                            </div>
                        </div>
                        @endif
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTabel Pembeli
                            </div>
                            <div class="card-body">
                                <table class="table table-success table-striped" id="example">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Handphone</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Foto</th>
                                        @if (auth()->user()->level=="user")

                                        <th scope="col">Pembayaran</th>
                                        @endif
                                        <th scope="col">Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($data as $datapembeli)
                                      <tr>
                                        <td>{{  $no }}</td>
                                        <td>{{  $datapembeli->nama }}</td>
                                        <td>{{  $datapembeli->idmerk->jenis_barang }}</td>
                                        <td>{{  $datapembeli->harga }}</td>
                                        <td>
                                            <img src="{{ asset('/fotomahasiswa/'. $datapembeli->foto) }}" alt="" style="width: 80px;" height="80px">
                                        </td>
                                        <td>
                                            @if ( (((auth()->user()->level=="user")))  )
                                            <a href="/tambahpembayaran/{{ $datapembeli->id }}" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i></a>
                                            @endif
                                            @if (auth()->user()->level=="admin")

                                            <a href="#" class="btn btn-danger destroyp" data-id="{{  $datapembeli->id }}" data-nama="{{  $datapembeli->nama }}"><i class="fa-solid fa-trash"></i></a>
                                            @endif
                                            {{-- @if ( (((auth()->user()->level=="admin")))  )
                                            <a href="{{ url('/pembayaran') }}" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i></a>
                                            @endif --}}
                                        </td>

                                        @if ( (((auth()->user()->level=="user")))  )
                                        <td>

                                            <a href="{{ url('/editpembeli/'.$datapembeli->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                                        {{-- <a href="#" class="btn btn-danger destroyp" data-id="{{  $datapembeli->id }}" data-nama="{{  $datapembeli->nama }}"><i class="fa-solid fa-trash"></i></a> --}}
                                    </td>
                                    @endif
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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.destroyp').click(function(){
            var pembeliid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
  title: "Yakin?",
  text: "Kamu ingin menghapus data pembeli dengan nama "+nama+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/destroyp/"+pembeliid+""
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
