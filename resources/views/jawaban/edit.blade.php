@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex">
        <a href="/pertanyaan/{{ $jawaban->pertanyaan->id }}" class="btn btn-primary d-flex align-items-center"><span class="fa fa-chevron-left"></span></a>
        <h3 class="font-weight-normal ml-4">Edit Jawaban</h3> 
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form action="/jawaban/edit/{{ $jawaban->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="hidden" name="id_pertanyaan" value="{{ $jawaban->pertanyaan->id }}">
                    <label for="isi">Isi Jawaban:</label>
                    <textarea class="form-control" rows="5" name="jawaban" id="isi">{{ $jawaban->jawaban }}</textarea>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection