<?php  
	$data = $blog->read($komen);
?>
<div class="tabel">
	<h1>List Komentar</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Komentar</th>
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				if ($data->rowCount() > 0) {
					$no = 1;
					while ($r = $data->fetch(PDO::FETCH_LAZY)) {
						echo "<tr>";
						echo "<td>";
						echo $no;
						echo "</td>";
						echo "<td>";
						echo $r->nama;
						echo "</td>";
						echo "<td>";
						echo $r->komentar;
						echo "</td>";
						echo "<td class='edit-delete'>";
						echo "<a href='{$url}?page=halaman&id=$r->id_post' target='_blank'>Lihat</a>";
						echo "<a href='?page=hapus_komentar&id=$r->id_komentar'>Delete</a>";
						echo "</td>";
						$no++;
					}
				} else {
					echo "<tr>";
					echo "<td colspan='4'>";
					echo "Belum ada komentar sama sekali";
					echo "</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>