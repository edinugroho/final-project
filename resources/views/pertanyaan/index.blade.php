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
                        Apa Kepanjangan HTML<span class="ml-2 fa fa-check-square-o text-success"></span>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right small">
                            <a class="mr-2" href="">Laravel</a>
                            <a class="mr-2" href="">PHP</a>
                        </div>
                    </div>
                </div>
            </h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quos aliquam? Sint dignissimos distinctio voluptatibus hic reprehenderit maiores quia nemo veniam, aut voluptatum inventore necessitatibus magnam deserunt sapiente quisquam odio.</p>
            <div class="row border-bottom border-secondary pb-4">
                <div class="col-md">
                    <button class="btn btn-success"><span class="fa fa-angle-double-up"></span> Up Vote</button>
                    <button class="btn btn-danger"><span class="fa fa-angle-double-down"></span> Down Vote</button>
                    <button class="btn btn-primary">Vote</button>
                </div>
                <div class="col-md">
                    <p class="d-inline float-right font-italic small">Dibuat pada : 12-12-2012 12:00:00</p>
                </div>
            </div>
            <div class="container mt-4">
                <p class="font-weight-bold">Komentar</p>
                <div class="row border-bottom mb-4">
                    <div class="col">
                        <p>Gitu aja ga tau</p>
                        <a href="" class="btn btn-danger btn-sm float-right"><span class="fa fa-trash-o mr-2"></span>Hapus</a>
                        <p class="font-italic small float-right mr-2">Dikomentar oleh : Hamdan Miftahul Husna 12-12-2012 12:00:00</p>
                    </div>
                </div>
                <div class="row border-bottom mb-4">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati itaque sapiente ipsam nam qui, nulla possimus perferendis ad eos minus rerum tempora facere. Iste odio, deleniti corrupti accusantium quae repudiandae.</p>
                        <a href="" class="btn btn-danger btn-sm float-right"><span class="fa fa-trash-o mr-2"></span>Hapus</a>
                        <p class="font-italic small float-right mr-2">Dikomentar oleh : Hamdan Miftahul Husna 12-12-2012 12:00:00</p>
                    </div>
                </div>
                <div class="form-group">
                    <a href="">Tambahkan Komentar</a>
                    {{-- <label for="comment">Tambah Komentar:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea> --}}
                </div>
                {{-- <button class="btn btn-primary">Submit</button> --}}
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">
                <div class="row">
                    <div class="col-md-8">
                        Jawaban<span class="ml-2 fa fa-check-square-o text-success"></span>
                    </div>
                    <div class="col-md-4">
                        <a href="" class="btn btn-danger btn-sm float-right"><span class="fa fa-trash-o mr-2"></span>Hapus</a>
                        <a href="/jawaban/edit" class="btn btn-primary btn-sm float-right mr-2"><span class="fa fa-pencil-square-o mr-2"></span>Edit</a>    
                    </div>
                </div>
            </h5>
            <p class="card-text">Hypertext Markup Language</p>
            <div class="row border-bottom border-secondary pb-4">
                <div class="col-md">
                    <button class="btn btn-success"><span class="fa fa-angle-double-up"></span> Up Vote</button>
                    <button class="btn btn-danger"><span class="fa fa-angle-double-down"></span> Down Vote</button>
                    <button class="btn btn-primary">Vote</button>
                </div>
                <div class="col-md">
                    <p class="d-inline float-right font-italic small">Dibuat pada : 12-12-2012 12:00:00</p>
                </div>
            </div>
            <div class="container mt-4">
                <p class="font-weight-bold">Komentar</p>
                <div class="row border-bottom mb-4">
                    <div class="col">
                        <p>Makasih</p>
                        <a href="" class="btn btn-danger btn-sm float-right"><span class="fa fa-trash-o mr-2"></span>Hapus</a>
                        <p class="font-italic small float-right mr-2">Dikomentar oleh : Hamdan Miftahul Husna 12-12-2012 12:00:00</p>
                    </div>
                </div>
                <div class="form-group">
                    <a href="">Tambahkan Komentar</a>
                    {{-- <label for="comment">Balas</label> --}}
                    {{-- <textarea class="form-control" rows="5" id="comment"></textarea> --}}
                </div>
                {{-- <button class="btn btn-primary">Submit</button> --}}
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">
                <div class="row">
                    <div class="col-md-8">
                        Jawaban
                    </div>
                    <div class="col-md-4">
                        <a href="" class="btn btn-danger btn-sm float-right"><span class="fa fa-trash-o mr-2"></span>Hapus</a>
                        <a href="/jawaban/edit" class="btn btn-primary btn-sm float-right mr-2"><span class="fa fa-pencil-square-o mr-2"></span>Edit</a>    
                    </div>
                </div>
            </h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quos aliquam? Sint dignissimos distinctio voluptatibus hic reprehenderit maiores quia nemo veniam, aut voluptatum inventore necessitatibus magnam deserunt sapiente quisquam odio.</p>
            <div class="row border-bottom border-secondary pb-4">
                <div class="col-md">
                    <button class="btn btn-success"><span class="fa fa-angle-double-up"></span> Up Vote</button>
                    <button class="btn btn-danger"><span class="fa fa-angle-double-down"></span> Down Vote</button>
                    <button class="btn btn-primary">Vote</button>
                </div>
                <div class="col-md">
                    <p class="d-inline float-right font-italic small">Dibuat pada : 12-12-2012 12:00:00</p>
                </div>
            </div>
            <div class="container mt-4">
                <p class="font-weight-bold">Komentar</p>
                <div class="form-group">
                    <a href="">Tambahkan Komentar</a>
                    {{-- <label for="comment">Tambah Komentar:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea> --}}
                </div>
                {{-- <button class="btn btn-primary">Submit</button> --}}
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <div class="form-group">
                <label for="comment" class="font-weight-bold">Tambah Jawaban :</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
@endsection