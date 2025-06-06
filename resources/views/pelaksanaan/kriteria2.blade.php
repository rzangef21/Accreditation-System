@extends('kriteria2.app')

@section('title', 'Pelaksanaan')

@section('content_header_title', 'Pelaksanaan')
@section('content_header_subtitle', 'Formulir Pengisian')

@section('content_body')
<div class="card">
    <div class="card-body">
        <form action="{{ route('pelaksanaan2.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Judul Pelaksanaan --}}
            <div class="form-group">
                <label for="judul">Judul Pelaksanaan</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>

            {{-- Input teks panjang dengan Summernote --}}
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="summernote" name="deskripsi" class="form-control" rows="6"></textarea>
            </div>

            {{-- Input link --}}
            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" name="link" class="form-control">
            </div>

            {{-- Upload file --}}
            <div class="form-group">
                <label for="dokumen">Unggah Dokumen</label>
                <input type="file" name="dokumen" class="form-control-file">
            </div>

            <div class="mt-3">
                <button type="submit" name="action" value="submit" class="btn btn-primary">Submit</button>
                <button type="submit" name="action" value="draft" class="btn btn-secondary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

{{-- Tambahkan Summernote CSS --}}
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet">
@endpush

{{-- Tambahkan Summernote JS --}}
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endpush