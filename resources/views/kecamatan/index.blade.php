@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kecamatan') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kecamatan.create')}}"class="btn btn-outline-success float-right"><b>Tambah Data</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Kode Kecamatan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kecamatan as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kota->nama_kota}}</td>
                        <td>{{$data->kode_kecamatan}}</td>
                        <td>{{$data->nama_kecamatan}}</td>
                        <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary btn-sm" href="{{route('kecamatan.show', $data->id)}}">SHOW</a>|
                                <a class="btn btn-warning btn-sm" href="{{route('kecamatan.edit', $data->id)}}"> EDIT </a>|
                                <button type="submit" class="btn btn-danger  btn-sm" onclick="return confirm('Apakah anda yakin ?')"><a>DELETE</a></button>
                        </td>
                      </tr>
                          </form>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
