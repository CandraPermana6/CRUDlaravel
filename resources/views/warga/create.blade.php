@extends('layouts.master')


@section('content')


<div class="container">

    <h1>Create Warga</h1>
    
    <form action="/warga/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" ></label>
            <input type="text" name="nama" placeholder="Nama" class="table table-hover" value="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" ></label>
            <input type="text" name="nik" placeholder="NIK" class="table table-hover" value="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" ></label>
            <input type="text" name="no_kk" placeholder="No KK" class="table table-hover" value="">
        </div>



        <select class="form-select" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br>
    
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="10"></textarea><br>
        </div>
    
        <input type="submit" name="submit" class="btn btn-info" id="Save"><br>
    </form>
</div>

@endsection


