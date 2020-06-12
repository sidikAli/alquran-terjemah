	<div class="teal lighten-3" id="bg-jumbo">
		<div class="jumbotron center">
			<img src="<?= base_url('assets/quran.png') ?>">
			<h3 class="white-text title">AL-QURAN INDONESIA</h3>
		</div>
	</div>


	<div class="container">
		
		<div class="center teal-text text-lighten-1 title mb2">Daftar Surah</div>
		<hr class="garis">
		<div class="row">
			<div class="col s11">
				<input id="keyword" type="text" name="keyword" placeholder="Cari Surah">
			</div>
			<div class="col s1">
				<i class="fas fa-search mt2 fa-lg"></i>
			</div>
		</div>


		<div class="row" id="surah">

			<?php foreach($surah as $srh) : ?>

				<div class="col l6 m12 s12 " >
					<div class="collection font">
						<a href="<?= base_url('quran/detail/') . $srh['index'] ?>" class="collection-item black-text">
							<?= $srh['index'] .". ". $srh['surat_indonesia'] ?> 
							<span class="">[<?= $srh['jumlah_ayat'] ?> Ayat]</span> 
							<span class="kanan"><?= $srh['surat_arab'] ?></span>
						</a>
					</div>
				</div>

			<?php endforeach; ?>

		</div>


	</div>
