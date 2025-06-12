@extends('kriteria2.app')

@section('title', 'Penetapan')

@section('content_header_title', 'Penetapan')
@section('content_header_subtitle', 'Formulir Pengisian')

@section('content_body')
<div class="card">
    <div class="card-body">
        {{-- ================= SECTION PENETAPAN ================= --}}
        <h4 class="mb-3"><strong>Penetapan</strong></h4>
        <form action="{{ route('penetapan2.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Judul Penetapan --}}
            <div class="form-group">
                <label for="judul">Judul Penetapan</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>

            {{-- Input teks panjang dengan Summernote --}}
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="summernote-penetapan" name="deskripsi" class="form-control" rows="6"></textarea>
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

        <hr class="my-5">

        {{-- ================= SECTION PELAKSANAAN ================= --}}
        <h4 class="mb-3"><strong>Pelaksanaan</strong></h4>
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
                <textarea id="summernote-pelaksanaan" name="deskripsi" class="form-control" rows="6"></textarea>
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

        <hr class="my-5">

        {{-- ================= SECTION EVALUASI ================= --}}
        <h4 class="mb-3"><strong>Evaluasi</strong></h4>
        <form action="{{ route('evaluasi2.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Judul Penetapan --}}
            <div class="form-group">
                <label for="judul">Judul Evaluasi</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>

            {{-- Input teks panjang dengan Summernote --}}
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="summernote-evaluasi" name="deskripsi" class="form-control" rows="6"></textarea>
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

@push('scripts')
    {{-- Load jQuery dan Summernote --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>

    {{-- Inisialisasi Summernote --}}
    <script>
        $(document).ready(function() {
            $('#summernote-penetapan').summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
            $('#summernote-pelaksanaan').summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
            $('#summernote-evaluasi').summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endpush