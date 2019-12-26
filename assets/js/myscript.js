const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Thank you',
        text: flashData,
        type: 'success'
    })
}

$('.tombol-cancel').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Are you sure ?',
        text: "Cart data will be removed ?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});