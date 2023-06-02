
<div class="container">

	<h3 class="center teal-text mb3">Jadwal Sholat <?= ucwords(strtolower($semuaJadwal->data->lokasi)) ?></h3>

	<div class="row jadwal-subtitle" style="margin: 0px;">
		<div class="col">
			<h5 class="teal-text"> <?= $bulanSekarang ?></h5>
		</div>

		<div class="col right">
			<form method="post">
				<select class="browser-default js-example-basic-single"  id="idkota" name="idkota">
					<option value="" disabled selected>Silahkan Pilih Kota</option>
					<?php foreach($semuaKota as $kota) :?>
						<option value="<?= $kota->id ?>"><?= $kota->lokasi ?></option>
						<?php endforeach ?>
				</select>
			</form>
		</div>
	</div>

	<table class="table responsive-table">
		<thead class="teal white-text">
			<tr>
				<td>Tanggal</td>
				<td>Subuh</td>
				<td>Terbit</td>
				<td>Dzuhur</td>
				<td>Ashar</td>
				<td>Maghrib</td>
				<td>Isya</td>
			</tr>
		</thead>
		<tbody>

			<?php $semuaJadwal = $semuaJadwal->data->jadwal; ?>
			<?php foreach($semuaJadwal as $jadwal): ?>
				<?php if($jadwal->date == date('Y-m-d')) : ?>
				<tr class="grey darken-1 white-text">
					<td><?= $jadwal->tanggal  ?></td>
					<td><?= $jadwal->subuh; ?></td>
					<td><?= $jadwal->terbit; ?></td>
					<td><?= $jadwal->dzuhur; ?></td>
					<td><?= $jadwal->ashar; ?></td>
					<td><?= $jadwal->maghrib; ?></td>
					<td><?= $jadwal->isya; ?></td>
				</tr>
				<?php else : ?>
				<tr class="">
					<td><?= $jadwal->tanggal  ?></td>
					<td><?= $jadwal->subuh; ?></td>
					<td><?= $jadwal->terbit; ?></td>
					<td><?= $jadwal->dzuhur; ?></td>
					<td><?= $jadwal->ashar; ?></td>
					<td><?= $jadwal->maghrib; ?></td>
					<td><?= $jadwal->isya; ?></td>
				</tr>
				<?php endif ?>
			<?php endforeach ?>
			</tbody>
		</table>

		<p class="grey darken-1 center">
			<a class="white-text" href="https://api.myquran.com/">https://api.myquran.com/</a>
		</p>

	</div>