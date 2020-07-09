@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex">
        <a href="/" class="btn btn-primary d-flex align-items-center"><span class="fa fa-chevron-left"></span></a>
        <h3 class="font-weight-normal ml-4">Tambah Pertanyaan</h3> 
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form action="" method="">
                <div class="form-group">
                    <label for="judul">Judul Pertanyaan:</label>
                    <input type="text" class="form-control" id="judul" required>
                </div>
                <div class="form-group">
                    <label for="isi">Isi Pertanyaan:</label>
                    <textarea class="form-control" rows="5" id="isi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tags">Tags:</label>
                    <input type="text" class="form-control" id="tags" required>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection