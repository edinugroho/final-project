@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex">
        <a href="/" class="btn btn-primary d-flex align-items-center"><span class="fa fa-chevron-left"></span></a>
        <h3 class="font-weight-normal ml-4">Tambah Pertanyaan</h3> 
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form action="/pertanyaan/create" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Pertanyaan:</label>
                    <input type="text" name="judul" class="form-control" id="judul" required>
                </div>
                <div class="form-group">
                    <label for="isi">Isi Pertanyaan:</label>
                    <textarea class="form-control" name="isi" rows="5" id="isi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tag">Tag:</label>
                    <select name="tag[]" class="tokenizationSelect2 form-control" multiple="true" required>
                        @foreach ($tags as $tag)
                            <option value="{{ Str::lower($tag->nama_tag) }}">{{ Str::camel($tag->nama_tag) }}</option>                            
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js-plus')
<script>
    $(document).ready(function(){
        $(".tokenizationSelect2").select2({
            placeholder: "type and press enter to make many tags", //placeholder
            tags: true,
            tokenSeparators: ['/',',',';'," "] 
        });
    })
</script>
@endpush