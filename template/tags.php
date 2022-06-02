<div class="tag">
	<h2 class="tag-box">Tags</h2>
	<div class="plus">
		<?php  
			if (!function_exists('Tampil_kategori')) {
				include 'sys/function.php';
			}
			Tampil_kategori();
		?>
	</div>
</div>