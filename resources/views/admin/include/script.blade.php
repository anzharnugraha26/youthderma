<script>
        $(document).ready(function() {
        $('#tbl').DataTable();
        });
</script>
    
@if(Session::has('simpan'))
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Data Anda Berhasil Disimpan',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
@endif
    