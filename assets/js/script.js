//materialize Side Navbar
let nav =  $(document).ready(function(){
	$('.sidenav').sidenav();
});


//Pencarian
$('#keyword').on('keyup', function(){
	//hapus seluruh data
	$('#surah').html('');
	//ambil data inputan
	const keyword = $('#keyword').val();
	//cek menggunakan ajax
	$.ajax({
		url : BASE_URL + 'quran/searchsurah',
		data : {keyword:keyword},
		method : 'post',
		dataType : 'json',
		success : function(result){
			let surah = result.surah;
			//jika tidak ada surah yang dicari
			if (surah.length < 1) {
				$('#surah').html(`
					<div class="center">
					<h3> Data Tidak Ditemukan </h3>
					</div>
					`);
			}
			//jika ada tampilkan surah
			$.each(surah, function(i, data) {
				$('#surah').append(`
					<div class="col l6 m12 s12 " >
					<div class="collection font">
					<a href="`+BASE_URL+`quran/detail/`+data.index+`" class="collection-item black-text">
					`+data.index+` . `+data.surat_indonesia+` 
					<span class="">[`+data.jumlah_ayat+` Ayat]</span> 
					<span class="kanan">`+data.surat_arab+`</span>
					</a>
					</div>
					</div>
					`);
			});
		}
	});

});

//Ganti Kota
$('#idkota').on('change', function() {
  // alert( $(this).val() );
  this.form.submit();
});


$(document).ready(function() {
    $('.js-example-basic-single').select2();
});