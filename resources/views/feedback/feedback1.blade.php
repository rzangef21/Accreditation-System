@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title">Kriteria 1</h3>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm" id="feedback1" width="100%">
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
  $(document).ready(function(){
    var dataKriteria1 = $('#feedback1').DataTable({
      serverSide: true,
      ajax: {
        "url": "{{ url('feedback1/list') }}",
        "dataType": "json",
        "type": "POST"
      },
      columns: [
        {
        data: "id_dokumen",
        className: "text-center",
        orderable: false,
        searchable: false,
        },
        {
        data: "nama_dokumen",
        className: "",
        orderable: false,
        searchable: false,
        },
        {
        data: "tahap.nama_tahap",
        className: "",
        orderable: false,
        searchable: false,
        },
        {
        data: "status",
        className: "",
        orderable: false,
        searchable: false,
        },
        {
        data: "komentar",
        className: "",
        orderable: false,
        searchable: false,
        },
        {
        data: "aksi",
        className: "text-center",
        orderable: false,
        searchable: false,
        }
      ]
    });
  });
</script>
@endpush