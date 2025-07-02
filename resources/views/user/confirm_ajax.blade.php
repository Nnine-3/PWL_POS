@empty($user)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data yang anda cari tidak ditemukan.
                </div>
                <a href="{{ url('/user') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
@else
<form action="{{ url('/user/' . $user->user_id . '/delete_ajax') }}" method="POST" id="form-delete">
    @csrf
    @method('DELETE')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Data User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="alert alert-warning">
                <h5><i class="icon fas fa-ban"></i> Konfirmasi !!!</h5>
                Apakah Anda ingin menghapus data seperti di bawah ini?
            </div>
            <table class="table table-sm table-bordered table-striped">
                @if($user->level == 'level_satu')
                <tr>
                    <th class="text-right col-3">Level Pengguna :</th>
                    <td class="col-9">{{ $user->level_nama }}</td>
                </tr>
                @endif
                <tr>
                    <th class="text-right col-3">Username :</th>
                    <td class="col-9">{{ $user->username }}</td>
                </tr>
                <tr>
                    <th class="text-right col-3">Nama :</th>
                    <td class="col-9">{{ $user->nama }}</td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ya, Hapus</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('#form-delete').validate({
            rules: {
                // ... (no specific rules defined in the screenshot)
            },
            submitHandler: function(form) {
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        if (response.status) {
                            $('#modal-master').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            });
                            datauser.ajax.reload();
                        } else {
                            $.each(response.msgField, function(prefix, val) {
                                $('span.' + prefix + '-error').text(val[0]);
                            });
                            Swal.fire({
                                icon: 'error',
                                title: 'Terjadi Kesalahan',
                                text: response.message
                            });
                        }
                    },
                    error: function() {
                        // This part seems to be outside the success callback in the original image,
                        // but logically fits here as a general error handler for the AJAX call.
                        // However, the provided snippet places it after the submitHandler.
                        // For the sake of combining, it's placed according to the screenshot logic.
                    }
                });
                return false;
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
@endempty