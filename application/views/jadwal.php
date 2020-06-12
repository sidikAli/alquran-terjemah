
<div class="container">

	<h3 class="center teal-text mb3">Jadwal Sholat Kota <?= $jadwal->results->location->city ?></h3>

	<div class="row" style="margin: 0px;">
		<div class="col">
			<h5 class="teal-text"><?= date('F Y');  ?></h5>
		</div>

		<div class="col right">
			<form method="post">
				<select class="browser-default" id="kota" name="kota">
					<option value="" disabled selected>Silahkan Pilih Kota</option>
					<option value="Bandung">Bandung</option>
					<option value="Bekasi">Bekasi</option>
					<option value="Bogor">Bogor</option>
					<option value="Depok">Depok</option>
					<option value="Jakarta">Jakarta</option>
					<option value="Malang">Malang</option>
					<option value="Padang">Padang</option>
					<option value="Surabaya">Surabaya</option>
					<option value="Yogyakarta">Yogyakarta</option>
					<option value="tasikmalaya">tasikmalaya</option>
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

			<?php $jadwal = $jadwal->results->datetime; ?>
			<?php foreach($jadwal as $jw): ?>
				<?php if ($jw->date->gregorian == date('Y-m-d')): ?>
					<tr class="grey darken-1 white-text">
						<td><?= date('d', strtotime($jw->date->gregorian) );  ?></td>
						<td><?= $jw->times->Fajr; ?></td>
						<td><?= $jw->times->Sunrise; ?></td>
						<td><?= $jw->times->Dhuhr; ?></td>
						<td><?= $jw->times->Asr; ?></td>
						<td><?= $jw->times->Maghrib; ?></td>
						<td><?= $jw->times->Isha; ?></td>
					</tr>
					<?php else : ?>
						<tr class="">
							<td><?= date('d', strtotime($jw->date->gregorian) );  ?></td>
							<td><?= $jw->times->Fajr; ?></td>
							<td><?= $jw->times->Sunrise; ?></td>
							<td><?= $jw->times->Dhuhr; ?></td>
							<td><?= $jw->times->Asr; ?></td>
							<td><?= $jw->times->Maghrib; ?></td>
							<td><?= $jw->times->Isha; ?></td>
						</tr>
					<?php endif ?>
				<?php endforeach ?>
			</tbody>
		</table>

		<p class="grey darken-1 center">
			<a class="white-text" href="https://waktusholat.org/">https://waktusholat.org/</a>
		</p>

	</div>