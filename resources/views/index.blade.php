@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h3 class="font-weight-normal">Daftar Pertanyaan <a href="/pertanyaan/create" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah</a></h3>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">
                    Pertanyaan
                    <span class="fa fa-check-square-o text-success"></span>
                    <div class="float-right small">
                        <a class="mr-2" href="">Laravel</a>
                        <a class="mr-2" href="">PHP</a>
                    </div>
                </h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quos aliquam? Sint dignissimos distinctio voluptatibus hic reprehenderit maiores quia nemo veniam, aut voluptatum inventore necessitatibus magnam deserunt sapiente quisquam odio.</p>
                <a href="/pertanyaan">2 Responses</a>
                <a href="/pertanyaan/edit" class="btn btn-primary btn-sm"><span class="fa fa-pencil-square-o"></span> Edit</a>
                <button class="btn btn-danger btn-sm"><span class="fa fa-trash-o"></span> Hapus</button>
                <p class="d-inline float-right font-italic small">Dibuat pada : 12-12-2012 12:00:00</p>
            </div>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="container mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- End Pagination --}}
@endsection