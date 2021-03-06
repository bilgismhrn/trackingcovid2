@extends('layouts.admin')
<!-- @section('css') -->
<!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}"> -->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}"> -->
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}"> -->
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
<!-- @endsection -->

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session('message'))
                <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message') }}
                </div>
            @elseif(session('message1'))
                <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message1') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Tracking Covid') }}
                <a href="{{route('kasus2.create')}}" class="float-right btn btn-outline-primary">Tambah Data(+)</a>
            </div>

            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr class="">
                      <th scope="col">No</th>
                                            <th scope="col"><center>Lokasi</center></th>
                                            <th scope="col"><center>Rw</center></th>
                                            <th scope="col"><center>Positif</center></th>
                                            <th scope="col"><center>Meninggal</center></th>
                                            <th scope="col"><center>Sembuh</center></th>
                                            <th scope="col"><center>Tanggal</center></th>
                                            <th scope="col"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no=1;
                                    @endphp
                                    @foreach($kasus2 as $data)

                                        <tr>
                                            <th scope="row"><center>{{$no++}}</center></th>
                                            <td><center>Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}<br>
                                            Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                            Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                            Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}</center></td>
                                            <td><center>{{$data->rw->nama_rw}}</center></td>
                                            <td><center>{{$data->jumlah_positif}}</center></td>
                                            <td><center>{{$data->jumlah_meninggal}}</center></td>
                                            <td><center>{{$data->jumlah_sembuh}}</center></td>
                                            <td><center>{{$data->tanggal}}</center></td>
                                            <td>
                                            <form action="{{route('kasus2.destroy',$data->id)}}"  method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <center>  <a href="{{route('kasus2.show',$data->id)}}" class="btn btn-outline-success btn-sm"><i class="fa fa-glasses"></a></i>
                                    <a href="{{route('kasus2.edit',$data->id)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></a></i>
                                    <button type="submit"  class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash">
                                            </form>
                                        </tr>
                                    @endforeach
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('js')
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection