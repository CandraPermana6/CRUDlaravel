@extends('layouts.master')

@section('content')

<div class="container">
    <h1>Detail Data Warga</h1>

    <form action="/warga/{{$warga->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nama</label>
            <input type="text" name="nama" placeholder="Nama" class="table table-hover" value="{{$warga->nama}}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >NIK</label>
            <input type="text" name="nik" placeholder="NIK" class="table table-hover" value="{{$warga->nik}}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >NO KK</label>
            <input type="text" name="no_kk" placeholder="NO KK" class="table table-hover" value="{{$warga->no_kk}}">
        </div>
          

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >Jenis Kelamin</label>
        <select class="form-select" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L" @if($warga->jenis_kelamin == 'L')selected @endif class="table table-hover">Laki-laki</option>
            <option value="P" @if($warga->jenis_kelamin == 'P')selected @endif class="table table-hover">Perempuan</option>
        </select><br>
       </div>
    
       <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >Alamat Lengkap</label>
        <textarea class="form-control" name="alamat" rows="10">{{$warga->alamat}}</textarea>
    </div>
    
    </form>
</div>

@endsection

