@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h3 class="font-weight-normal">Daftar Pertanyaan <a href="/pertanyaan/create" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah</a></h3>
        @foreach ($pertanyaans as $pertanyaan)   
        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $pertanyaan->judul }}
                    <span class="fa fa-check-square-o text-success"></span>
                    <div class="float-right small">
                        @foreach ($pertanyaan->tag as $tag)
                        <a class="mr-2" href="">{{ $tag->nama_tag }}</a>
                        @endforeach
                    </div>
                </h5>
                <p class="card-text">{{ Str::limit($pertanyaan->isi,100,' ...') }}</p>
                <a href="/pertanyaan">2 Responses</a>
                @auth
                <div class="row ml-1 mt-2">
                    @if ($pertanyaan->id_user==Auth::id())
                        <a href="/pertanyaan/edit/{{ $pertanyaan->id }}" class="btn btn-primary btn-sm"><span class="fa fa-pencil-square-o"></span> Edit</a>
                        <form action="{{ url('/pertanyaan/delete', ['id' => $pertanyaan->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="ml-1 btn btn-danger btn-sm"><span class="fa fa-trash-o"></span> Hapus</button>
                        </form>
                    @endif
                </div>
                @endauth
                <p class="d-inline float-right font-italic small">Created {{ $pertanyaan->created_at->diffForHumans() }}</p>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="container mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center"> 
	            {{ $pertanyaans->links() }}
            </ul>
        </nav>
    </div>
    {{-- End Pagination --}}
@endsection