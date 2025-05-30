@empty($dokumen)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data dokumen tidak ditemukan.
                </div>
                <a href="{{ url('/feedback') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
@else
    <form action="{{ url('/feedback/' . $dokumen->id_dokumen . '/update_ajax') }}" method="POST" id="form-edit" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div id="modal-master" class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Dokumen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Dokumen</label>
                        <input value="{{ $dokumen->nama_dokumen }}" type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" required>
                        <small id="error-nama_dokumen" class="error-text form-text text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="isi" id="isi" class="form-control" rows="4" required>{{ $dokumen->isi }}</textarea>
                        <small id="error-isi" class="error-text form-text text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label>Link</label>
                        <input value="{{ $dokumen->link }}" type="url" name="link" id="link" class="form-control">
                        <small id="error-link" class="error-text form-text text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label>Upload Dokumen Baru (Opsional)</label>
                        <input type="file" name="file" id="file" class="form-control-file">
                        <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti file.</small>
                        <small id="error-file" class="error-text form-text text-danger"></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $("#form-edit").validate({
                rules: {
                    nama_dokumen: { required: true, minlength: 3, maxlength: 255 },
                    isi: { required: true, minlength: 5 },
                    link: { url: true },
                    file: { extension: "pdf|doc|docx|jpg|jpeg|png" }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: formData.serialize(),
                        success: function(response) {
                            if(response.status) {
                                $('#myModal').modal('hide');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message
                                });
                                dataKriteria1.ajax.reload();
                            } else {
                                $('.error-text').text('');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi Kesalahan',
                                    text: response.message
                                });
                            }
                        }
                    });

                    return false;
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endempty