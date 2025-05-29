@extends('layouts.app')

@section('title', 'Peningkatan')

@section('content_header_title', 'Peningkatan')
@section('content_header_subtitle', 'Formulir Pengisian')

@section('content_body')
<div class="card">
    <div class="card-body">
        <form action="{{ route('peningkatan1.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Judul Penetapan --}}
            <div class="form-group">
                <label for="judul">Judul Peningkatan</label>
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
                <button type="submit" name="action" value="delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200
        });
    });
</script>
@endpush