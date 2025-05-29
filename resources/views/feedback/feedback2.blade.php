@extends('kriteria2.template')

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title">Kriteria 2</h3>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm" id="feedback2">
      <thead>
        <tr>
          <th>ID Dokumen</th>
          <th>Nama Dokumen</th>
          <th>Tahap</th>
          <th>Status</th>
          <th>Komentar</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
<script>
  
</script>
@endpush