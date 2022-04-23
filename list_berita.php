<?php

include "layout/header.php";

$query =mysql_query("SELECT * FROM berita order by id_berita DESC", $con);

$data = mysql_fetch_assoc($query);

?>

<table border="1">

	<thead>
		<tr>
			<th>No.</th>
			<th>Judul</th>
			<th>Kategori</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $num =0; do{$num++;?>
		<tr>
			<td><?=$num;?></td>
			<td><?=$data['judul_berita'];?></td>
			<td><?=$data['id_kategori'];?></td>
			<td><?=$data['gambar'];?></td>
			<td>
				<a href="edit_berita.php?id=<?=$data['id_berita'];?>">Edit</a> -
				<a href="hapus_berita.php?id=<?=$data['id_berita'];?>">Delete</a>
			</td>
		</tr>
	<?php }while($data =mysql_fetch_assoc($query));?>
	</tbody>
</table	>	