
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				HASIL KONSULTASI 
			</div>
			<div class="card-body">
				<?php
				$connect = mysqli_connect("localhost", "root", "", "db_spnarkoba");
				$querydata = mysqli_query($connect, "SELECT * FROM pasien ORDER BY id DESC LIMIT 1"); 
				$pasiendisplay = mysqli_fetch_array($querydata);
				?>
				<table class="table">
					<tr>
						<td>Nama Dokter</td>
						<td width="10">:</td>
						<td>dr. Hamsu Kadriyan, M.Kes, Sp.THT-KL</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['nama'] ?></td>
					</tr>
					<tr>
						<td>Umur</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['umur'] ?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['jenis_kelamin'] ?></td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['pekerjaan'] ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['alamat'] ?></td>
					</tr>
				</table>

				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>Pertanyaan</th>
						<th>Jawaban</th>
					</thead>
					<tbody>
						
						@foreach($datakonsul as $key=>$soal )

						@if ($data[$soal->id_gejala] == "YA")

						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $soal->soal }}</td>
							<td><?= $data[$soal->id_gejala]; ?></td>
						</tr>

						<?php
						$idgejala [$key] =$soal->id_gejala;
							// print_r($idgejala);


						?>
						@endif

						@endforeach

						<?php
						$id_gejala = implode("','",$idgejala);
						
						

						$con = mysqli_connect('localhost','root','','db_spnarkoba');
						echo "";
						$hasil = "";  
						?>

					</tbody>
				</table>
				<?php
					// $nilaicf = [[]];
				$nilaicfP1=[];
				$nilaicfP2=[];
				$nilaicfP3=[];
				$nilaicfP4=[];
				$nilaicfP6=[];
				$nilaicfP7=[];
				$nilaicfP8=[];
				$nilaicfP9=[];
				$nilaicfP10=[];
				$Cf_pakar=0;
				$Cf_user=0;
				$temp1=0;
				$temp2=0;
				$tmp = 1;
				$tmp2 = 1;
				$a = 0;
				$b = 0;
				$c = 0;
				$d = 0;
				$e = 0;
				$f = 0;
				$g = 0;
				$h = 0;
				$i = 0;
				$j = 0;
				$cf1 = [];
				$cf2 = [];
				$cf3 = [];
				$cf4 = [];
				$cf5 = [];
				$cf6 = [];
				$cf7 = [];
				$cf8 = [];
				$cf9 = [];
				$cf10 = [];


				$query2 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P001' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query2)){
					$nilaicfP1[$a][0] = $data2['Cf_pakar'];
					$nilaicfP1[$a][1] = $data2['Cf_user'];
					$nilaicfP1[$a][2] = $data2['gejala_id'];
					$nilaicfP1[$a][3]	= $data2['penyakit_id'];
					$a++;
				}


				$query3 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P002' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query3)){
					$nilaicfP2[$b][0] = $data2['Cf_pakar'];
					$nilaicfP2[$b][1] = $data2['Cf_user'];
					$nilaicfP2[$b][2] = $data2['gejala_id'];
					$nilaicfP2[$b][3]	= $data2['penyakit_id'];
					$b++;
				}


				$query4 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P003' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query4)){
					$nilaicfP3[$c][0] = $data2['Cf_pakar'];
					$nilaicfP3[$c][1] = $data2['Cf_user'];
					$nilaicfP3[$c][2] = $data2['gejala_id'];
					$nilaicfP3[$c][3]	= $data2['penyakit_id'];
					$c++;
				}

				$query5 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P004' AND gejala_id IN ("."'$id_gejala'".")");
				
				while($data2 = mysqli_fetch_array($query5)){
					$nilaicfP4[$d][0] = $data2['Cf_pakar'];
					$nilaicfP4[$d][1] = $data2['Cf_user'];
					$nilaicfP4[$d][2] = $data2['gejala_id'];
					$nilaicfP4[$d][3]	= $data2['penyakit_id'];
					$d++;
				}
				$query6 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P005' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query6)){
					$nilaicfP5[$e][0] = $data2['Cf_pakar'];
					$nilaicfP5[$e][1] = $data2['Cf_user'];
					$nilaicfP5[$e][2] = $data2['gejala_id'];
					$nilaicfP5[$e][3]	= $data2['penyakit_id'];
					$e++;
				}
				$query7 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P006' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query7)){
					$nilaicfP6[$f][0] = $data2['Cf_pakar'];
					$nilaicfP6[$f][1] = $data2['Cf_user'];
					$nilaicfP6[$f][2] = $data2['gejala_id'];
					$nilaicfP6[$f][3]	= $data2['penyakit_id'];
					$f++;
				}
				$query8 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P007' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query8)){
					$nilaicfP7[$g][0] = $data2['Cf_pakar'];
					$nilaicfP7[$g][1] = $data2['Cf_user'];
					$nilaicfP7[$g][2] = $data2['gejala_id'];
					$nilaicfP7[$g][3]	= $data2['penyakit_id'];
					$g++;
				}
				$query9 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P008' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query9)){
					$nilaicfP8[$h][0] = $data2['Cf_pakar'];
					$nilaicfP8[$h][1] = $data2['Cf_user'];
					$nilaicfP8[$h][2] = $data2['gejala_id'];
					$nilaicfP8[$h][3]	= $data2['penyakit_id'];
					$h++;
				}
				$query10 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P009' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query10)){
					$nilaicfP9[$i][0] = $data2['Cf_pakar'];
					$nilaicfP9[$i][1] = $data2['Cf_user'];
					$nilaicfP9[$i][2] = $data2['gejala_id'];
					$nilaicfP9[$i][3]	= $data2['penyakit_id'];
					$i++;
				}
				$query11 = mysqli_query($con,"SELECT gejala_id, penyakit_id, Cf_pakar, Cf_user FROM diagnosa WHERE penyakit_id ='P010' AND gejala_id IN ("."'$id_gejala'".")");
				while($data2 = mysqli_fetch_array($query11)){
					$nilaicfP10[$j][0] = $data2['Cf_pakar'];
					$nilaicfP10[$j][1] = $data2['Cf_user'];
					$nilaicfP10[$j][2] = $data2['gejala_id'];
					$nilaicfP10[$j][3]	= $data2['penyakit_id'];
					$j++;
				}

			

				if (!empty($nilaicfP1)) {
					foreach ($nilaicfP1 as $value){
						if ($data['G001'] == 'YA' AND $data['G002'] == 'YA'  AND $data['G003'] == 'YA' AND $data['G004'] == 'YA' AND $data['G005'] == 'YA' ) {
							$cf1 = 1;
						}else{


							$tmp = $tmp + ($value[1] * (1-$value[1]));
							$Cf_pakar = $tmp; 

							$tmp2 = $tmp2 * $value[0];
							$Cf_user = $tmp2; 

							$cf1 =  $Cf_user + $Cf_pakar ;

					// $tmp = $tmp + $value[0] * (1-$tmp);
					// $Cf_pakar = $tmp;
					// $tmp2 = $tmp2 + $value[1] * (1-$tmp2);
					// $Cf_user = $tmp2;
					// $cf1 = $Cf_pakar - $Cf_user;
						}
					}

				}else {
					$cf1=0;
				}

				$tmp3 = 1;
				$tmp4 = 1;
				$Cf_pakar2 = 0;
				$Cf_user2 = 0;
				if (!empty($nilaicfP2)) {
					foreach ($nilaicfP2 as $value2){
						if ($data['G006'] == 'YA' AND $data['G002'] == 'YA'  AND $data['G007'] == 'YA' AND $data['G008'] == 'YA' AND $data['G009'] == 'YA' AND $data['G010'] == 'YA' ) {
							$cf2 = 1;
						}else{

							$tmp3 = $tmp3 * $value2[0];
							$Cf_pakar2 = $tmp3; 

							$tmp4 = $tmp4 * $value2[1];
							$Cf_user2 = $tmp4; 

							$cf2 = ($Cf_pakar2 + $Cf_user2) * (1-$Cf_pakar2);

						}
					}

					}else{
						$cf2=0;
					}

					$tmp5 = 1;
					$tmp6 = 1;
					$Cf_pakar3 = 0;
					$Cf_user3 = 0;
					if (!empty($nilaicfP3)) {
						foreach ($nilaicfP3 as $value3){
							if ($data['G005'] == 'YA' AND $data['G011'] == 'YA'  AND $data['G012'] == 'YA' AND $data['G013'] == 'YA' AND $data['G014'] == 'YA' ) {
								$cf3 = 1;
							}else{

								$tmp5 = $tmp5 * $value3[0];
								$Cf_pakar3 = $tmp5; 
								$tmp6 = $tmp6 * $value3[1];
								$Cf_user3 = $tmp6; 

								$cf3 = ($Cf_pakar3 + $Cf_user3) * (1-$Cf_pakar3);

							}
						}
					}else {
						$cf3=0;
					}

					$tmp7 = 1;
					$tmp8 = 1;
					$Cf_pakar4 = 0;
					$Cf_user4 = 0;

					if (!empty($nilaicfP4)) {
						foreach ($nilaicfP4 as $value4){
							if ($data['G015'] == 'YA' AND $data['G002'] == 'YA'  AND $data['G007'] == 'YA' AND $data['G016'] == 'YA' ) {
								$cf4 = 1;
							}else{


								$tmp7 = $tmp7 * $value4[0];
								$Cf_pakar4 = $tmp7; 
								$tmp8 = $tmp8 * $value4[1];
								$Cf_user4 = $tmp8; 

								$cf4 = ($Cf_pakar4 + $Cf_user4) * (1-$Cf_pakar4);

							}
						}
					}else {
						$cf4=0;
					}

					$tmp9 = 1;
					$tmp10 = 1;
					$Cf_pakar5 = 0;
					$Cf_user5 = 0;
					if (!empty($nilaicfP5)) {
						foreach ($nilaicfP5 as $value5){
							if ($data['G011'] == 'YA' AND $data['G001'] == 'YA'  AND $data['G016'] == 'YA' AND $data['G017'] == 'YA' AND $data['G018'] == 'YA' ) {
								$cf5 = 1;
							}else{

								$tmp9 = $tmp9 * $value5[0];
								$Cf_pakar5 = $tmp9; 
								$tmp10 = $tmp10 * $value5[1];
								$Cf_user5 = $tmp10; 

								$cf5 = ($Cf_pakar5 + $Cf_user5) * (1-$Cf_pakar5);

							}
						}

					}else {
						$cf5=0;
					}

					$tmp11 = 1;
					$tmp12 = 1;
					$Cf_pakar6 = 0;
					$Cf_user6 = 0;
					if (!empty($nilaicfP6)) {
						foreach ($nilaicfP6 as $value6){
							if ($data['G009'] == 'YA' AND $data['G011'] == 'YA'  AND $data['G018'] == 'YA' AND $data['G019'] == 'YA' AND $data['G010'] == 'YA' AND 
								$data['G014'] == 'YA' ) {
								$cf6 = 1;
							}else{

								$tmp11 = $tmp11 * $value6[0];
								$Cf_pakar6 = $tmp11; 
								$tmp12 = $tmp12 * $value6[1];
								$Cf_user6 = $tmp12; 

								$cf6 = ($Cf_pakar6 + $Cf_user6) * (1-$Cf_pakar6);

							}
						}

					}else {
						$cf6=0;
					}

					$tmp13 = 1;
					$tmp14 = 1;
					$Cf_pakar7 = 0;
					$Cf_user7 = 0;
					if (!empty($nilaicfP7)) {
						foreach ($nilaicfP7 as $value7){
							if ($data['G018'] == 'YA' AND $data['G003'] == 'YA'  AND $data['G004'] == 'YA' AND $data['G005'] == 'YA' AND $data['G001'] == 'YA' AND 
								$data['G020'] == 'YA') {
								$cf7 = 1;
							}else{

								$tmp13 = $tmp13 * $value7[0];
								$Cf_pakar7 = $tmp13; 
								$tmp14 = $tmp14 * $value7[1];
								$Cf_user7 = $tmp14; 

								$cf7 = ($Cf_pakar7 + $Cf_user7) * (1-$Cf_pakar7);

							}
						}

					}else {
						$cf7=0;
					}

					$tmp15 = 1;
					$tmp16 = 1;
					$Cf_pakar9 = 0;
					$Cf_user8 = 0;
					if (!empty($nilaicfP8)) {
						foreach ($nilaicfP8 as $value8){
							if ($data['G007'] == 'YA' AND $data['G013'] == 'YA'  AND $data['G005'] == 'YA' AND $data['G003'] == 'YA' ) {
								$cf8 = 1;
							}else{

								$tmp15 = $tmp15 * $value8[0];
								$Cf_pakar8 = $tmp15; 
								$tmp16 = $tmp16 * $value8[1];
								$Cf_user8 = $tmp16; 

								$cf8 = ($Cf_pakar8 + $Cf_user8) * (1-$Cf_pakar8);

							}
						}

					}else {
						$cf8 =0;
					}

					$tmp17 = 1;
					$tmp18 = 1;
					$Cf_pakar9 = 0;
					$Cf_user9 = 0;
					if (!empty($nilaicfP9)) {
						foreach ($nilaicfP9 as $value9){
							if ($data['G027'] == 'YA' AND $data['G003'] == 'YA'  AND $data['G018'] == 'YA' AND $data['G021'] == 'YA' AND $data['G022'] == 'YA' ) {
								$cf9 = 1;
							}else{

								$tmp17 = $tmp17 * $value9[0];
								$Cf_pakar9 = $tmp17; 
								$tmp18 = $tmp18 * $value9[1];
								$Cf_user9 = $tmp18; 

								$cf9 = ($Cf_pakar9 + $Cf_user9) * (1-$Cf_pakar9);

							}
						}

					}else {
						$cf9 =0;
					}

					$tmp19 = 1;
					$tmp20 = 1;
					$Cf_pakar10 = 0;
					$Cf_user10 = 0;
					if (!empty($nilaicfP10)) {
						foreach ($nilaicfP10 as $value10){
							if ($data['G023'] == 'YA' AND $data['G024'] == 'YA'  AND $data['G009'] == 'YA' AND $data['G025'] == 'YA' AND $data['G026'] == 'YA' ) {
								$cf10 = 1;
							}else{

								$tmp19 = $tmp19 * $value10[0];
								$Cf_pakar10 = $tmp19; 
								$tmp20 = $tmp20 * $value10[1];
								$Cf_user10 = $tmp20; 

								$cf10 = ($Cf_pakar10 + $Cf_user10) * (1-$Cf_pakar10);

							}
						}

					}else {

						$cf10 =0;
					}

					$cfsemua = [];
					$cfsemua[0] = $cf1;
					$cfsemua[1] = $cf2;
					$cfsemua[2] = $cf3;
					$cfsemua[3] = $cf4;
					$cfsemua[4] = $cf5;
					$cfsemua[5] = $cf6;
					$cfsemua[6] = $cf7;
					$cfsemua[7] = $cf8;
					$cfsemua[8] = $cf9;
					$cfsemua[9] = $cf10;

					?>

					<?php 
					if (max($cfsemua) == $cfsemua[0]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P001'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[1]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P002'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[2]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P003'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[3]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P004'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[4]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P005'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];

					}elseif (max($cfsemua) == $cfsemua[5]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P006'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[6]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P007'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[7]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P008'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[8]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P009'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[9]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P010'");

						$data = mysqli_fetch_array($query);
						$hasil = $data['nama'];
						$idpenyakit=$data['id'];
						$deskripsi = $data['deskripsi'];
					}

					$persentase = max($cfsemua) * 100;
					$persentasep1 = $cf1 * 100;
					$persentasep2 = $cf2 * 100;
					$persentasep3 = $cf3 * 100;
					$persentasep4 = $cf4 * 100;
					$persentasep5 = $cf5 * 100;
					$persentasep6 = $cf6 * 100;
					$persentasep7 = $cf7 * 100;
					$persentasep8 = $cf8 * 100;
					$persentasep9 = $cf9 * 100;
					$persentasep10 = $cf10 * 100;

					$solusi = "";
					if ($hasil == 'Kokain') {
						$solusi = "Sebagian besar kasus otitis media tidak memerlukan pengobatan khusus dan akan sepakaruh dengan sendirinya dalam beberapa hari. Namun pada beberapa kasus, dokter akan memberikan obat pereda nyeri dan antibiotik, 
						bila otitis media sudah berlangsung dalam waktu lama dan sering kambuh, dokter akan mengeluarkan cairan dari dalam telinga melalui prosedur bedah.";
					}elseif ($hasil == 'Ganja') {
						$solusi = "Kortikosteroid dapat dapat mengurangi ukuran bahkan menghilangkan Tergantung keparahannya, dokter dapat memberikan obat kortikosteroid jenis semprot hidung, tablet, suntik, ataupun kombinasi. Contoh obat kortikosteroid antara lain fluticasone, budesonide, mometason, atau prednisone";
					}elseif ($hasil == 'Ekstasi') {
						$solusi = "Bila penanganan faringitis secara mandiri tidak membuat kondisi membaik dalam beberapa hari, maksimal 1 minggu, pemeriksaan ke dokter diperlukan. Dokter meresepkan beberapa jenis obat, seperti Antibiotik, Benzocaine, Paracetamol / Ibuprofen, ";
					}elseif ($hasil == 'Heroin atau Putaw') {
						$solusi = "Karena adanya nyeri dan sulit menelan, penderita akan diberikan cairan dan nutrisi melalui infus. Dokter juga akan memberikan obat penghilang rasa sakit dan antibiotik untuk mengatasi infeksi bakteri yang terjadi. Anda diwajibkan untuk menghabiskan antibiotik sesuai dosis yang dianjurkan dokter. Karena jika tidak dikonsumsi sampai habis, dikhawatirkan infeksi bisa saja muncul kembali dan menimbulkan resistensi bakteri.";
					}elseif ($hasil == 'Methampethamin') {
						$solusi = "Pengobatan kanker nasofaring dapat berbeda-beda, disesuaikan dengan riwayat penyakit, stadium kanker, letak kanker, dan kondisi pasien secara umum, namun disarankan untuk langsung menghubungi dokter yang bersangkutan";
					}elseif ($hasil == 'Halusinogen') {
						$solusi = "Halusinogen";
					}elseif ($hasil == 'Amfetamin') {
						$solusi = "Amfetamin";
					}elseif ($hasil == 'Petidin') {
						$solusi = "Petidin";
					}elseif ($hasil == 'Kodein') {
						$solusi = "Kodein";
					}elseif ($hasil == 'Morfin') {
						$solusi = "Morfin";
					}

					?>

					<h4>Anda Kemungkinan terkena penyakit : <?= $hasil ?></h4>
					<h4>Dengan kepastian :<?= $persentase."%" ?> </h4>
					<br>
					<h5>Persentase Keseluruhannya adalah</h5>
					<h5>Kokain : <?= $persentasep1 ?> %</h5>
					<h5>Ganja : <?= $persentasep2 ?> %</h5>
					<h5>Ekstasi : <?= $persentasep3 ?> %</h5>
					<h5>Heroin atau Putaw: <?= $persentasep4 ?> %</h5>
					<h5>Methampethamin : <?= $persentasep5 ?> %</h5>
					<h5>Halusinogen : <?= $persentasep6 ?> %</h5>
					<h5>Amfetamin : <?= $persentasep7 ?> %</h5>
					<h5>Petidin : <?= $persentasep8 ?> %</h5>
					<h5>Kodein : <?= $persentasep9 ?> %</h5>
					<h5>Morfin : <?= $persentasep10 ?> %</h5>
					<br>

					<p>Penjelasan : </p>

					<p><?= $deskripsi ?></p>
					<p>Solusi</p>
					<p><?= $solusi ?></p>
					<a href="/" class="btn btn-primary"> Kembali</a>


				</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>
