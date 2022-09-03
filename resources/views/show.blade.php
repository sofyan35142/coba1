
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset ('template/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        @include('template.navbar')
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
                                            {{-- <a class="nav-link" href="logout">logout</a>  --}}
                                        {{-- </nav>
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
                            <div class="sb-sidenav-menu-heading">Addons</div>  --}}
                            {{-- <a class="nav-link" href="/charts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a> --}}
                            <a class="nav-link" href="/table">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-list "></i></div>
                                Data Handphone
                            </a>
                            <a class="nav-link" href="/pembeli">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-cells-large"></i></div>
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
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Table Handphone</li>
                        </ol>
                        {{-- <div class="card mb-4"> --}}
                            {{-- <div class="card-body">
                                <center>  <h1>Data Headphone </h1>  </center>

                            </div> --}}
                        {{-- </div> --}}
                        <div class="card mb-4">
                            {{-- <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Headphone
                            </div> --}}
                            <div class="card-body">
                                <table class="table">
                                    <form action="{{ url('/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">JENIS HEADPHONE</label>
                                            <select class="form-select" aria-label="Default select example" name="jenis_barang">
                                                <option value="Handphone Xiomi"  <?php echo ($data->jenis_barang== "Handphone Xiomi") ?"selected" : "" ?>>Handphone Xiomi</option>
                                                <option value="Handphone Oppo" <?php echo ($data->jenis_barang== "Handphone Oppo") ?"selected" : "" ?>>Handphone Oppo</option>
                                                <option value="Handphone Realmi" <?php echo ($data->jenis_barang== "Handphone Realmi") ?"selected" : "" ?> >Handphone Realmi</option>
                                                <option value="Handphone Samsung" <?php echo ($data->jenis_barang== "Handphone Samsung") ?"selected" : "" ?>>Handphone Samsung</option>
                                                <option value="Handphone Iphone" <?php echo ($data->jenis_barang== "Handphone Iphone") ?"selected" : "" ?>>Handphone Iphone</option>
                                                <option value="Handphone Vivo" <?php echo ($data->jenis_barang== "Handphone Vivo") ?"selected" : "" ?>>Handphone Vivo</option>
                                                <option value="Handphone Poco" <?php echo ($data->jenis_barang== "Handphone Poco") ?"selected" : "" ?>>Handphone Poco</option>
                                                <option value="Handphone Infinix" <?php echo ($data->jenis_barang== "Handphone Infinix") ?"selected" : "" ?>>Handphone Infinix</option>
                                              </select>
                                        </div>
                                        <br/>
                                        <div class="mb-3">
                                            <h5>Fitur </h5>
                                            <?php $far = explode(',',$data->fitur)?>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Face Unlock" name="fitur[]" <?php if(in_array('Face Unlock',$far)) echo 'checked'; ?>
                                                >
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Face Unlock</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Type C" name="fitur[]" <?php if(in_array('Type C',$far)) echo 'checked'; ?>
                                                >
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Type C</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Fast Charging" name="fitur[]" <?php if(in_array('Fast Charging',$far)) echo 'checked'; ?>
                                                >
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Fast Charging</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Slot Micro Sd" name="fitur[]" <?php if(in_array('Slot Micro Sd',$far)) echo 'checked'; ?>
                                                >
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Slot Micro Sd</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Fingerprint Scanner" name="fitur[]" <?php if(in_array('Fingerprint Scanner',$far)) echo 'checked'; ?>
                                                >
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Fingerprint Scanner</label>
                                            </div>
                                        </div>
                                        <br/>

                                        <div class="form-group">
                                            <label for="nama">Harga</label>
                                            <input type="text" name="harga_jual" readonly type-currency="IDR" class="form-control" value="{{ $data->harga_jual }}">
                                        </div>
                                        <br/>

                                        <div class="form-group">
                                            <label for="nama">Stock</label>
                                            <input type="number" name="jumlah" readonly class="form-control" value="{{ $data->jumlah }}">
                                        </div>
                                        <br/>

                                        <div class="mb-3">
                                            <img src="{{ asset('fotomahasiswa/' .$data->foto) }}" alt="" width="60px" height="60px">
                                            <label for="exampleInputEmail1" class="form-label">Edit Foto</label>
                                            <input type="file" name="foto" class="form-control"
                                            aria-describedby="emailHelp" value="img src="{{ asset('fotomahasiswa/' . $data->foto) }} alt="" width="70px" height="70px">
                                        </div>

                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary"> Edit Data</button>
                                    {{-- </div>
                                    <div class="form-group mt-2">
                                        <a href="{{ url('/') }}">
                                            << kembali ke halaman utama</a>

                                    </div> --}}
                                      </form>
                                        </table>
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
                            <script>
                               $(document).ready(function () {
                                $('#example').DataTable();
                            });
                            </script>
                            <script>
                                document.addEventListener('DOMContentLoaded', () => {

                                    document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
                                        element.addEventListener('keyup', function(e) {
                                            let cursorPostion = this.selectionStart;
                                            let value = parseInt(this.value.replace(/[^,\d]/g, ''));
                                            let originalLenght = this.value.length;
                                            if (isNaN(value)) {
                                                this.value = "";
                                            } else {
                                                this.value = value.toLocaleString('id-ID', {
                                                    currency: 'IDR',
                                                    style: 'currency',
                                                    minimumFractionDigits: 0
                                                });
                                                cursorPostion = this.value.length - originalLenght + cursorPostion;
                                                this.setSelectionRange(cursorPostion, cursorPostion);
                                            }
                                        });
                                    });
                                });
                            </script>


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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset ('template/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('template/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
