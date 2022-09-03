
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
                                Data Headphone
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
                                    <form action="{{ url('/store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <div class="form-group">
                                            <label for="nama">imei *</label>
                                            <input type="number" name="imei" class="form-control" placeholder="mohon diisi">
                                            @error('imei')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br/>
                                        <div class="form-group">
                                            <label for="exampleinputEmail" class="form-label">Ram</label><br/>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ram" id="inlineRadio1" value="Ram 2">
                                                <label class="form-check-label" for="inlineRadio1">Ram 2</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ram" id="inlineRadio2" value="Ram 4">
                                                <label class="form-check-label" for="inlineRadio2">Ram 4</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ram" id="inlineRadio3" value="Ram 6">
                                                <label class="form-check-label" for="inlineRadio3">Ram 6</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ram" id="inlineRadio3" value="Ram 8">
                                                <label class="form-check-label" for="inlineRadio3">Ram 8</label>
                                              </div>
                                              <div>  @error('ram')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror</div>
                                        </div> --}}
                                          {{-- <br/> --}}
                                          <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">JENIS HEADPHONE</label>
                                            <select class="form-select @error("jenis_barang")is-invalid  @enderror" aria-label="Default select example" name="jenis_barang">
                                                <option value=""> </option>
                                                <option value="Handphone Oppo">Handphone Oppo</option>
                                                <option value="Handphone Xiaomi">Handphone Xiaomi</option>
                                                <option value="Handphone Realmi">Handphone Realmi</option>
                                                <option value="Handphone Samsung">Handphone Samsung</option>
                                                <option value="Handphone Iphone">Handphone Iphone</option>
                                                <option value="Handphone Vivo">Handphone Vivo</option>
                                                <option value="Handphone poco">Handphone poco</option>
                                                <option value="Handphone Infinix">Handphone Infinix</option>
                                            </select>
                                                {{-- <option value=""></option>
                                                @foreach ($databarang as $barang )
                                        <option value="{{ $barang->id }}" data-jumlah='{{ $barang->jumlah }}'>{{ $barang->jenis_barang }}</option>
                                        @endforeach
                                              </select> --}}
                                              @error('jenis_barang')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                        </div>
                                        <br/>
                                        <div class="mb-3">

                                            <h5>Fitur</h5>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Face Unlock" name="fitur[]">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Face Unlock</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Type C" name="fitur[]">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Type C</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Fast Charging" name="fitur[]">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Fast Charging</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Slot Micro Sd" name="fitur[]">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Slot Micro Sd</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="Fingerprint Scanner" name="fitur[]">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Fingerprint Scanner</label>
                                            </div>
                                            <div>
                                                @error('fitur')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <br/>  --}}

                                        <div class="form-group">
                                            <label for="nama">Harga</label>
                                            <input type="TEXT" name="harga_jual" class="form-control" Type-currency="IDR" onkeydown="javascript: return ['Backspace','Delete','ArrowLeft','ArrowRight'].includes(event.code) ? true : !isNaN(Number(event.key)) && event.code!=='Space'">
                                            @error('harga_jual')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br/>
                                        {{-- <div class="form-group">
                                            <label for="nama">stock</label>
                                            <input type="number" name="jumlah" class="form-control" readonly>
                                            @error('jumlah')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div> --}}
                                        <br/>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>
                                        <div>
                                            @error('foto')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary"> Tambah</button>
                                        {{-- <button type="reset" class="btn btn-primary"> RESET</button> --}}
                                    </div>
                                    {{-- <div class="form-group mt-2">
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
    <script>
        const selection = document.getElementById('databarang')
        selection.onchange = function(e){
            const jumlah = e.target.options[e.target.selectedIndex].dataset.jumlah
            document.getElementById('jumlahbarang').value = jumlah;
        }
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
</html>
