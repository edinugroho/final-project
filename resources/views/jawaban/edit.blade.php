@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex">
        <a href="/pertanyaan" class="btn btn-primary d-flex align-items-center"><span class="fa fa-chevron-left"></span></a>
        <h3 class="font-weight-normal ml-4">Edit Jawaban</h3> 
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form action="" method="">
                <div class="form-group">
                    <label for="isi">Isi Jawaban:</label>
                    <textarea class="form-control" rows="5" id="isi"></textarea>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection