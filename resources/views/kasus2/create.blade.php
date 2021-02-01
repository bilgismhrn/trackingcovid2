@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><center>{{ __('All Data') }}</center></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{route('kasus2.store')}}" class="form-horizontal m-t-30" method="post">
                            @csrf
                            @livewireScripts
                            @livewire('statecity')
                            @livewireStyles
                            <div class="form-group">
                            <div class="col-md-6">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                            <div class="col-md-6">
                                <label for="positif">Jumlah Positif</label>
                                <input type="text" class="form-control" name="jumlah_positif" required>
                            </div>
                            <div class="col-md-6">
                                <label for="meninggal">Jumlah Meninggal</label>
                                <input type="text" class="form-control" name="jumlah_meninggal" required>
                            </div>
                            <div class="col-md-6">
                                <label for="sembuh">Jumlah Sembuh</label>
                                <input type="text" class="form-control" name="jumlah_sembuh" required>
                            </div>
                            <button type="submit" class="float-right btn btn-outline-primary">Simpan</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection