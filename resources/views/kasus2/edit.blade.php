@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kasus Local') }}</b></center></div>

                <div class="card-body">
                <form action="{{route('kasus2.update', $kasus2->id)}}" method="POST">
                 <input type="hidden" name="_method" value="PUT">
                @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                <!-- <div class="mb-3">
                        <label for="" class="form-label">Rw</label>
                       <select name="id_rw" class="form-control" id="" readonly>
                       @foreach($rw as $data)
                       <option value="{{$data->id}}" {{ $data->id == $kasus2->id_rw ? 'selected' : '' }}  > {{$data->nama}}</option>
                       @endforeach
                       </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="" class="form-label">Provinsi</label>
                        <input type="text" name="nama_provinsi"  value="{{$kasus2->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kota</label>
                        <input type="text" name="nama_kota"  value="{{$kasus2->rw->kelurahan->kecamatan->kota->nama_kota}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kecamatan</label>
                        <input type="text" name="nama_kecamatan"  value="{{$kasus2->rw->kelurahan->kecamatan->nama_kecamatan}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" name="nama_kelurahan"  value="{{$kasus2->rw->kelurahan->nama_kelurahan}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Rw</label>
                        <input type="text" name="nama"  value="{{$kasus2->rw->nama}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumalah Positif</label>
                        <input type="number" name="jumlah_positif"  value="{{$kasus2->jumlah_positif}}" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumalah Meninggal</label>
                        <input type="number" name="jumlah_meninggal"  value="{{$kasus2->jumlah_meninggal}}" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumalah Sembuh</label>
                        <input type="number" name="jumlah_sembuh"  value="{{$kasus2->jumlah_sembuh}}" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal"  value="{{$kasus2->tanggal}}" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection