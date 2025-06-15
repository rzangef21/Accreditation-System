@extends('layouts.app')

@section('title', 'Penetapan')

@section('content_header_title', 'Penetapan')
@section('content_header_subtitle', 'Formulir Pengisian')

@section('content_body')
<div class="card">
    <div class="card-body">
        <form action="{{ route('kriteria2.storeAll') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- ================= SECTION PENETAPAN ================= --}}
            <h4 class="mb-3"><strong>Penetapan</strong></h4>
                {{-- Input Judul Penetapan --}}
                <div class="form-group">
                    <label for="judul_penetapan">Judul Penetapan</label>
                    <input type="text" name="judul_penetapan" id="judul_penetapan" class="form-control">
                </div>

                {{-- Input teks panjang dengan Summernote --}}
                <div class="form-group">
                    <label for="deskripsi_penetapan">Deskripsi</label>
                    <textarea id="summernote-penetapan" name="deskripsi_penetapan" class="form-control" rows="6"></textarea>
                </div>

                {{-- Input link --}}
                <div class="form-group">
                    <label for="link_penetapan">Link</label>
                    <input type="url" name="link_penetapan" class="form-control">
                </div>

                {{-- Upload file --}}
                <div class="form-group">
                    <label for="dokumen_penetapan">Unggah Dokumen</label>
                    <input type="file" name="dokumen_penetapan" class="form-control-file" accept=".pdf">
                </div>

            <hr class="my-5" style="border-top: 2px solid #6c757d;">

            {{-- ================= SECTION PELAKSANAAN ================= --}}
            <h4 class="mb-3"><strong>Pelaksanaan</strong></h4>
                {{-- Input Judul Pelaksanaan --}}
                <div class="form-group">
                    <label for="judul_pelaksanaan">Judul Pelaksanaan</label>
                    <input type="text" name="judul_pelaksanaan" id="judul_pelaksanaan" class="form-control">
                </div>

                {{-- Input teks panjang dengan Summernote --}}
                <div class="form-group">
                    <label for="deskripsi_pelaksanaan">Deskripsi</label>
                    <textarea id="summernote-pelaksanaan" name="deskripsi_pelaksanaan" class="form-control" rows="6"></textarea>
                </div>

                {{-- Input link --}}
                <div class="form-group">
                    <label for="link_pelaksanaan">Link</label>
                    <input type="url" name="link_pelaksanaan" class="form-control">
                </div>

                {{-- Upload file --}}
                <div class="form-group">
                    <label for="dokumen_pelaksanaan">Unggah Dokumen</label>
                    <input type="file" name="dokumen_pelaksanaan" class="form-control-file" accept=".pdf">
                </div>

            <hr class="my-5" style="border-top: 2px solid #6c757d;">

            {{-- ================= SECTION EVALUASI ================= --}}
            <h4 class="mb-3"><strong>Evaluasi</strong></h4>
                {{-- Input Judul Penetapan --}}
                <div class="form-group">
                    <label for="judul_evaluasi">Judul Evaluasi</label>
                    <input type="text" name="judul_evaluasi" id="judul_evaluasi" class="form-control">
                </div>

                {{-- Input teks panjang dengan Summernote --}}
                <div class="form-group">
                    <label for="deskripsi_evaluasi">Deskripsi</label>
                    <textarea id="summernote-evaluasi" name="deskripsi_evaluasi" class="form-control" rows="6"></textarea>
                </div>

                {{-- Input link --}}
                <div class="form-group">
                    <label for="link_evaluasi">Link</label>
                    <input type="url" name="link_evaluasi" class="form-control">
                </div>

                {{-- Upload file --}}
                <div class="form-group">
                    <label for="dokumen_evaluasi">Unggah Dokumen</label>
                    <input type="file" name="dokumen_evaluasi" class="form-control-file" accept=".pdf">
                </div>

            <hr class="my-5" style="border-top: 2px solid #6c757d;">

            {{-- ================= SECTION PENGENDALIAN ================= --}}
            <h4 class="mb-3"><strong>Pengendalian</strong></h4>
                {{-- Input Judul Pengendalian --}}
                <div class="form-group">
                    <label for="judul_pengendalian">Judul Pengendalian</label>
                    <input type="text" name="judul_pengendalian" id="judul_pengendalian" class="form-control">
                </div>

                {{-- Input teks panjang dengan Summernote --}}
                <div class="form-group">
                    <label for="deskripsi_pengendalian">Deskripsi</label>
                    <textarea id="summernote-pengendalian" name="deskripsi_pengendalian" class="form-control" rows="6"></textarea>
                </div>

                {{-- Input link --}}
                <div class="form-group">
                    <label for="link_pengendalian">Link</label>
                    <input type="url" name="link_pengendalian" class="form-control">
                </div>

                {{-- Upload file --}}
                <div class="form-group">
                    <label for="dokumen_pengendalian">Unggah Dokumen</label>
                    <input type="file" name="dokumen_pengendalian" class="form-control-file" accept=".pdf">
                </div>

            <hr class="my-5" style="border-top: 2px solid #6c757d;">

            {{-- ================= SECTION PENINGKATAN ================= --}}
            <h4 class="mb-3"><strong>Peningkatan</strong></h4>
                {{-- Input Judul Penetapan --}}
                <div class="form-group">
                    <label for="judul_peningkatan">Judul Peningkatan</label>
                    <input type="text" name="judul_peningkatan" id="judul_peningkatan" class="form-control">
                </div>

                {{-- Input teks panjang dengan Summernote --}}
                <div class="form-group">
                    <label for="deskripsi_peningkatan">Deskripsi</label>
                    <textarea id="summernote-peningkatan" name="deskripsi_peningkatan" class="form-control" rows="6"></textarea>
                </div>

                {{-- Input link --}}
                <div class="form-group">
                    <label for="link_peningkatan">Link</label>
                    <input type="url" name="link_peningkatan" class="form-control">
                </div>

                {{-- Upload file --}}
                <div class="form-group">
                    <label for="dokumen_peningkatan">Unggah Dokumen</label>
                    <input type="file" name="dokumen_peningkatan" class="form-control-file" accept=".pdf">
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
            $('#summernote-pengendalian').summernote({
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
            $('#summernote-peningkatan').summernote({
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