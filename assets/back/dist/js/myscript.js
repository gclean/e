const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        type: 'success',
        title: 'Data Item',
        text: 'Berhasil ' + flashData,
        showConfirmButton: false,
        timer: 1500
    })
}

//tombol hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();

    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda yakin ?',
        	text: "Data Item akan dihapus !",
        	type: 'warning',
        	showCancelButton: true,
        	confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
        	confirmButtonText: 'Hapus data !'
        }).then((result) => {
        			if (result.value) {
                        document.location.href = href;
        			}
    })

});