
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - Data Supplier</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
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
                        {{-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>

                            </div>
                        </div> --}}
                        <div class="card mb-4">
                            {{-- <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Supplier
                            </div> --}}
                            <div class="card-body">
                                <table class="table table-bordered table-dark">
                                  <form action="/updatesupplier/{{$data->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label  class="form-label">Nama Supplier</label>
                                        <input type="text" class="form-control" name="nama_supplier"  placeholder="silahkan isi nama" value=" {{ $data->nama_supplier }}">
                                        @error('nama_supplier')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>


                                        <div class="mb-3">
                                          <label  class="form-label">Jenis Barang</label>
                                          <select class="form-select @error("jenis_barang")is-invalid  @enderror" aria-label="Default select example" name="jenis_barang">
                                            <option value="{{ $data->idsupplier->id }}">{{ $data->idsupplier->jenis_barang }}</option>
                                            @foreach ($databarang as $barang )
                                    <option value="{{ $barang->id }}"  >{{ $barang->jenis_barang }}</option>
                                    @endforeach
                                          </select>
                                          @error('jenis_barang')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label  class="form-label">fitur</label>
                                            <input id="fitur" type="text" class="form-control" name="fitur" readonly  value="{{ $data->fitur }}">
                                            @error('fitur')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                      </div>


                                              <br/>
                                              <div class="mb-3">
                                                  <label  class="form-label">Jumlah</label>
                                                  <input type="number" id="jumlah" class="form-control" name="jumlah" placeholder="silahkan isi jumlah" value="{{ $data->jumlah }}">
                                                  @error('jumlah')
                                                  <div class="alert alert-danger">{{ $message }}</div>
                                                  @enderror
                                                </div>

                                                <div class="mb-3">
                                                  <label  class="form-label">harga beli</label>
                                                  <input  type="text" id="harga_beli"  class="form-control" name="harga_beli" onkeydown="javascript: return ['Backspace','Delete','ArrowLeft','ArrowRight'].includes(event.code) ? true : !isNaN(Number(event.key)) && event.code!=='Space'" value="{{ $data->harga_beli }}">

                                                    @error('harga_beli')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                              </div>
                                                <div class="mb-3">
                                                  <label  class="form-label">harga total</label>
                                                  <input type="text" id="hargatotal"  class="form-control" name="hargatotal" onkeydown="javascript: return ['Backspace','Delete','ArrowLeft','ArrowRight'].includes(event.code) ? true : !isNaN(Number(event.key)) && event.code!=='Space'" readonly value="{{ $data->hargatotal }}">

                                                    @error('harga_beli')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                              </div>



                                      <div class="mb-3">
                                        <label  class="form-label">No.Telepon</label>
                                        <input type="number" class="form-control" name="notelp" placeholder="08XXXXXX" value="{{ $data->notelp }}">
                                        @error('notelp')
                                        <div class="alert alert-danger" >{{ $message }}</div>
                                        @enderror
                                      </div>

                                      <div class="mb-3">
                                        <label  class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" >
                                        @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                  </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                  </form>

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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $("#jumlah").change(function(){
        var jml = $(this).val();
        var harga = $("#harga_beli").val();
        var total = jml*harga;
        $("#hargatotal").val(total);
    })
    </script>
</html>
