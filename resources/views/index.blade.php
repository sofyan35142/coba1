{{-- @extends('layouts.default') --}}

{{-- @push('afterStyle')
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
@endpush --}}

<link href="{{asset ('template/css/styles.css') }}" rel="stylesheet" />

@section('content')

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
            <center>  <h1>Data Headphone </h1>  </center>
              <br/>
            <center>  <a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Data Headphone</a> </center>
            </div>
          <center>  <div class="col-lg-12">
               <table class="table-bordered table-dark" id="example">
                <br/>
                <thead>
                <tr>
                    <th>No</th>
                    <th>Imei</th>
                    <th>Ram</th>
                    <th>Jenis_Headphone</th>
                    <th>Fitur</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                @foreach ($data as $dataMahasiswa)
                <tr class="table-dark">
                    <td>{{  $no }}</td>
                    <td>{{  $dataMahasiswa->imei }}</td>
                    <td>{{  $dataMahasiswa->ram }}</td>
                    <td>{{  $dataMahasiswa->jenis_headphone }}</td>
                    <td>{{  $dataMahasiswa->fitur }}</td>
                    <td>
                        <img src="{{ asset('/fotomahasiswa/'. $dataMahasiswa->foto) }}" alt="" style="width: 80px;" height="80px">
                    </td>
                    <td>
                        <a href="{{ url('/show/'.$dataMahasiswa->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('/destroy/'.$dataMahasiswa->id) }}" class="btn btn-danger"onclick="return confirm('apakah anda yakin ingin menghapus data ini?');">Delete</a>
                    </td>
                </tr>
                </tbody>
                
                <?php $no++ ?>
                @endforeach
               </table>
              </div> </center>
      
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function () {
    $('#example').DataTable();
});
</script>
</section>
@endsection   