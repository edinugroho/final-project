@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex">
        <a href="/" class="btn btn-primary d-flex align-items-center"><span class="fa fa-chevron-left"></span></a>
        <h3 class="font-weight-normal ml-4">Jawab Pertanyaan</h3> 
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">
                <div class="row">
                    <div class="col-md-8">
                        {{ $pertanyaan->judul }}<span class="ml-2 fa fa-check-square-o text-success"></span>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right small">
                            @foreach ($pertanyaan->tag as $tag)
                                <a class="mr-2" href="">{{ $tag->nama_tag }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </h5>
            <p class="card-text">{{ $pertanyaan->isi }}</p>
            <div class="row border-bottom border-secondary pb-4">
                <div class="col-md">
                    <button class="btn btn-success"><span class="fa fa-angle-double-up"></span> Up Vote</button>
                    <button class="btn btn-danger"><span class="fa fa-angle-double-down"></span> Down Vote</button>
                    <button class="btn btn-primary">Vote</button>
                </div>
                <div class="col-md">
                    <p class="d-inline float-right font-italic small">created {{ $pertanyaan->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="container mt-4">
                <p class="font-weight-bold">Komentar</p>
                @foreach ($pertanyaan->komentar as $komentar)
                <div class="row border-bottom mb-4">
                    <div class="col">
                        <p>{{ $komentar->komentar }}</p>
                        @if (auth()->user()->id == $komentar->id_user)
                            <form action="{{ url('pertanyaan/delete/komentar', ['id' => $komentar->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="ml-1 btn btn-danger btn-sm"><span class="fa fa-trash-o"></span> Hapus</button>
                            </form>
                        @endif
                        <p class="font-italic small float-right mr-2">Comented by {{ $komentar->user->name }} {{ $komentar->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                @endforeach
                <form action="/pertanyaan/{{ $pertanyaan->id }}/komentar" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="comment">Tambah Komentar:</label>
                        <textarea class="form-control" name="komentar" rows="5" id="comment"></textarea>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @foreach ($pertanyaan->jawaban as $jawaban)
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="row">
                    <div class="col-md-8">
                        Jawaban<span class="ml-2 fa fa-check-square-o text-success"></span>
                    </div>
                    @if (Auth::user()->id == $jawaban->id_user)
                    <div class="col-md-4">
                        hapus jawaban
                        <a href="/jawaban/edit/{{ $jawaban->id }}" class="btn btn-primary btn-sm float-right mr-2"><span class="fa fa-pencil-square-o mr-2"></span>Edit</a>    
                    </div>
                    @endif
                </div>
            </h5>
            <p class="card-text"> {{ $jawaban->jawaban }} </p>
            <div class="row border-bottom border-secondary pb-4">
                <div class="col-md">
                    <button class="btn btn-success"><span class="fa fa-angle-double-up"></span> Up Vote</button>
                    <button class="btn btn-danger"><span class="fa fa-angle-double-down"></span> Down Vote</button>
                    <button class="btn btn-primary">Vote</button>
                </div>
                <div class="col-md">
                    <p class="d-inline float-right font-italic small">answered {{ $jawaban->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="container mt-4">
                <p class="font-weight-bold">Komentar</p>
                @foreach ($jawaban->komentar as $komentar)
                <div class="row border-bottom mb-4">
                    <div class="col">
                        <p>{{ $komentar->komentar }}</p>
                        @if (auth()->user()->id == $komentar->id_user)
                            <form action="{{ url('jawaban/delete/komentar', ['id' => $komentar->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="ml-1 btn btn-danger btn-sm"><span class="fa fa-trash-o"></span> Hapus</button>
                            </form>
                        @endif
                        <p class="font-italic small float-right mr-2">Comented by {{ $komentar->user->name }} {{ $komentar->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                @endforeach
                <form action="/jawaban/{{ $jawaban->id }}/komentar" method="POST">
                    @csrf 
                    <div class="form-group">
                        <label for="comment">Tambahkan Komentar:</label>
                        <textarea class="form-control" name="komentar" rows="5" id="comment"></textarea>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <div class="card mt-4">
        <div class="card-body">
            <form action="/pertanyaan/{{ $pertanyaan->id }}/jawab" method="POST">
                @csrf
                <div class="form-group">
                    <label for="comment" class="font-weight-bold">Tambah Jawaban :</label>
                    <textarea class="form-control" name="jawaban" rows="5" id="comment"></textarea>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection