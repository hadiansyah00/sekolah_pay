<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        html,
        body {
            font-size: 12px;
        }

        @page {
            margin: 25px;
        }

        header {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }

        table {
            width: 100%;
            border: 1px solid #000000;
            border-collapse: collapse;
        }

        table tr th,
        table tr td {
            border: 1px solid #000000;
            padding: 4px 8px;
        }

        table2 {
            width: 100%;
            border: 1px solid #fff;
            border-collapse: collapse;
        }
        .tabel_footer {
			padding-top: 30px;
			font-size: 14px;
			border: 1px solid #fff;
			text-align: center;
		}
        table2 tr th,
        table2 tr td {
            border:1px solid #000;
            padding: 4x 8px;
            text-align:center;
        }
    </style>
</head>

<body>
    <div style="border: 1px dashed #333333; padding: 5px">
        <div style="border: 1px solid #333333; padding: 5px">
            <header>
                <div>Kartu PMB</div>
                <div><strong>"<?= $web['nama'] ?>"</strong></div>
                <div style="font-size:12px"><?= $web['alamat'] ?></div>
                <div style="font-size:11px">No Telp : <?= $web['telp'] ?> Email : <?= $web['email'] ?></div>
            </header>
            <hr>
            <div class="row">
                <div style="padding: 10px 0  text-align: center; font-size:15px;"><strong>Informasi Mahasiswa baru <hr></strong></div>
                <br>
                <div class="col-md-6">
                    <table>
                         <tr>
                          
                            <td width="25.8%">No Daftar</td>
                            <td><strong><?= $user['no_daftar'] ?></strong></td>
                        </tr>
                        <tr>
                            <td width="25.8%">Nama Siswa</td>
                            <td><strong><?= $user['nama'] ?></strong></td>
                        
                        </tr>
                        <tr>
                            <td width="25.8%">Program Study</td>
                            <td><strong><?= $verfikasi['nama'] ?></strong></td>
                        </tr>
                        <tr>
                            <td width="25.8%">No Hp</td>
                            <td><strong><?= $user['no_hp'] ?></strong></td>
                        </tr>
                       
                        <tr>
                            <td width="25.8%">Email</td>
                            <td><strong><?= $user['email'] ?></strong></td>
                        </tr>
                         <tr>
                            <td width="25.8%">Alamat</td>
                            <td><strong><?= $user['prov'] ?>, <?= $user['kab'] ?>, <?= $user['kec'] ?> <br> <?= $user['alamat'] ?> </strong></td>
                        </tr>
                        
                    </table>
                </div>
           
                 <div style="padding: 10px 0  text-align: center; font-size:15px;"><strong>Tes Akademik Mahasiswa baru <hr></strong></div>
                <br>
         
                <table>
                  <thead class="table2" style="font-size:12px; text-align:center; ">
						<tr>
                            <td style=" width:100px; text-center"><strong>Tanggal Tes</strong></td>
							<td style="text-center"><strong>Nama Tes</strong></td>
							<td style="text-center"><strong>Paraf</strong></td>
						</tr>   
					</thead>
                    <tbody>
                        
                        <tr>
                            mediumdate_indo(date($user['date_created']));
                            <td><?=mediumdate_indo(date($verfikasi['tgl_tes']))?></td>
                            <td>Tes Tulis</td>
                            <td></td>
                        </tr>
                         <tr>
                            <td><?=mediumdate_indo(date($verfikasi['tgl_tes']))?></td>
                            <td>Tes Kesehatan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><?=mediumdate_indo(date($verfikasi['tgl_tes']))?></td>
                            <td>Tes Wawancara</td>
                            <td></td>
                        </tr>
                    </tbody>
                        
                       
                    </table>
            </div>
            <br>
            
           
        </div>
    </div>
   
</body>

</html>
