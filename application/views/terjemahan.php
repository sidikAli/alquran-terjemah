<div class="container">
	
	<div class="mt3">
		
		<h3 class="center teal-text mb3">Pencarian</h3>

		<form action="" method="POST">

			<div class="row">
				<div class="col m11 s10">
					<input type="text" name="keyword" placeholder="Cari Terjemahan" autocomplete="off" minlength="3" value="<?= set_value('keyword') ?>">
				</div>
				<div class="col m1 s2 right">
					<button type="submit" class="waves-effect waves-light btn"><i class="material-icons">search</i></button>
				</div>
			</div>

		</form>

	</div>
	<!-- cek jika tidak ada data ayat yang dikirim atau ayat yang dicari tidak ditemukan  -->
	<?php if(!isset($ayats) || $ayats < 1) : ?>
		<div class="row">
			<div class="col s12 ">
				<?php if ( isset($_POST['keyword']) ): ?>
					<h4 class="mb3 grey-text text-darken-2 center">Terjemahan yang kamu cari tidak ditemukan. </h4>
				<?php endif ?>
				<div class="card blue-grey darken-1 ">
					<div class="card-content white-text text">
						<span class="card-title"><i class="fas fa-info-circle"></i> Tips</span>
						<p>Masukan kata kunci terjemahan bahasa indonesia yang ingin anda cari pada kolom pencarian diatas.</p>
						<p>Contoh : <i>surga, hewan, dll</i></p>
					</div>
				</div>
			</div>
		</div>
		<!-- jika ada pencarian -->
		<?php else : ?>

			<?php foreach($ayats as $ayat) : ?>
				<ul class="collection with-header z-depth-3">
					<li class="collection-item">

						<!-- Keterangan Ayat -->
						<div class="row">
							<div class="col">
								<a href="<?= base_url('quran/detail/') . $ayat['suraId'] . '#' .$ayat['verseID']; ?>" class="btn"><?= $ayat['surat_indonesia']." Ayat ".$ayat['verseID'] ?></a>
							</div>
						</div>

						<!-- arab -->
						<div class="row">
							<div class="col m12 s12 l12">
								<p class="arab-font right-align">  <?= $ayat['ayatText']?> (<?= arabicNumerals($ayat['verseID']) ?>)</p>
								<div class="text"><?= $ayat['readText'] ?></div>
							</div>
						</div>

						<!-- arti -->
						<div class="row">
							<div class="col">
								<div class="text">
									<?= highlight_word($ayat['indoText'], $_POST['keyword']) ?>
								</div>
							</div>
						</div>
					</li>
				</ul>
			<?php endforeach; ?>

		<?php endif; ?>
	</div>
