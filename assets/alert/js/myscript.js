const flashData = $('.flash-data').data('flashdata');

if(flashData){
	Swal.fire(
  		'Data E-Dentist',
  		'Berhasil '+ flashData + '!!',
  		'success'
);
}

//Tombol Hapus
$('.tombol-hapus').on('click', function(e){
	e.preventDefault();
	const href = $(this).attr('href');


	Swal.fire({
	  title: 'Apakah Anda Yakin ??',
	  text: "Data E-Dentist Akan Dihapus !!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
	  if (result.value) {
	    document.location.href = href;
  }
})


});