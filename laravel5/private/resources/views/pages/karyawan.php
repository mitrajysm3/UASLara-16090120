<div id="karyawan">
	<h2>Data Karyawan</h2>
	<?php if(!empty($karyawan)): ?>
		<u1>
			<?php foreach ($karyawan as $data):?>
			<li><?php echo $data; ?></li>
			<?php endforeach ?>
		</u1>
		<?php else: ?>
			<p>Tidak ada data.</p>
			<?php endif ?>
		</div>