<div class="container">

	<div class="center teal-text text-lighten-1">
		<h4><?= $ayats[0]['surat_indonesia'] ?></h4>
		<h5 class="black-text">[<?= $ayats[0]['jumlah_ayat'] ?> Ayats]  [<?= $ayats[0]['arti'] ?>] [<?= $ayats[0]['tempat_turun'] ?>]</h5>
	</div>
	<hr class="garis">
	
	<div class="right-align">
		<a href="<?= base_url(); ?>" class="right-align waves-effect waves-light btn">Daftar Surah</a>
	</div>
	<ul class="collection with-header z-depth-3 ">
		<?php if ($ayats[0]['index'] != 1): ?>
			
		<li class="collection-header center teal lighten-1 white-text text-lighten-2">
			<h5 class="mb3"><?= $bismillah['ayatText'] ?></h5>
			<p><?= $bismillah['readText'] ?></p>
			<p><?= $bismillah['indoText'] ?></p>
		</li>

		<?php endif ?>
		<?php foreach($ayats as $ayat) : ?>
			<li class="collection-item" id="<?= $ayat['verseID'] ?>">
				<div class="number"><?= $ayat['verseID'] ?></div>
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
						<div class="text"><?= $ayat['indoText'] ?></div>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>

</div>
