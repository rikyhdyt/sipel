<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nota Penjualan KPSH</title>
</head>
  <style type="text/css">
  	           table.satu { border-collapse:collapse; }
            table.dua { border-collapse:separate; }

            table.awal{
            	border-collapse:collapse;	
            	border-style: solid;
            	margin-top: -380px;
            	margin-bottom: 100px;
            	margin-left: 23px;
                margin-right: 23px;
            }
            table.tengah{
                border-collapse:collapse;
                margin-top: -94px;
                margin-bottom:100px; 
                margin-left: 23px;
            }
            table.contact{
            	border-collapse:collapse;
                margin-left: 23px;
                margin-top: -90px;
                margin-bottom: 70px;
            }
            table.ttd{
            	border-collapse:collapse;
                margin-top: -185px;
                margin-right: 23px;
                margin-bottom: 8px;

            }


            td.a {
                border-style:dotted;
                border-width:3px;
                border-color:#000000;
                padding: 10px;
            }
            td.b {
                border-style:solid;
                border-width:2px;
                border-color:#333333;
                padding:10px;
            }
            .gambar{
            	max-width: 70%;
            	max-height: 70%;
            	margin-left: 40px;
				margin-bottom: 350px;

            }
            th.atas {
            	width: 10%;
            	height: 10%;
            }
            th.alamat{
            	line-height: 12px;
            	padding-bottom: 350px;
                padding-left: 15px;

            }
            a.al{
            	margin-left: 5px;
            	font-family: calibri;
            	font-size: 8pt;
            	margin-bottom: 400px;
            }
            td.no{
            	width: 300px;
                font-family: calibri;
                font-size: 12pt;
            }
             td.kanan{
             	font-family: calibri;
             	font-size: 11pt;
            	width: 250px;
                padding-left: 20px;
            }

            td.kanan2{
                font-family: calibri;
                font-size: 12pt;
                width: 250px;
                padding-left: 20px;
            }
            td.kanan3{
                font-family: calibri;
                font-size: 12pt;
                
            }
            td.tengah{
            	font-weight: bold;
            	font-family: calibri;
            	font-size: 10pt;
                padding-left: 15px;
                padding-right: 15px;
                width: 142px;
            }
            td.kiri{
                border-right: hidden;
            }
             td.kiri2{
                border-right: hidden;
            }
             td.kiri3{
                border-left: hidden;
            }
            td.kiri33{
            	font-family: calibri;
            	font-size: 8pt;
            	font-weight: bold;
                border-left: hidden;
            }
            td{
            	border-style: solid;
            	border-color: #000000;
            	border-width: 2px;
            }
            th.kom{
                border-style: solid;
                border-color: #000000;
                border-width: 2px;
                font-family: calibri;
                font-size: 12pt;
            }
             td.nomor{
                width: 30px;
                font-family: calibri;
                font-size: 12pt;
            }
            td.barang{

                width: 266px;
                font-family: calibri;
                font-size: 12pt;
            }
            td.retail{
                width: 83px;
                font-family: calibri;
                font-size: 12pt;
            }
            h2{
            	font-family: arial;
            	margin-top: 5px;
                margin-bottom: -10px;
            }
            td.cp{
            	font-family: calibri;
            	font-size: 8.5pt;
            	font-weight: bold;
            	padding-left: 14px;
                padding-right: 14px;
            }
             td.cpn{
            	font-family: calibri;
            	font-size: 8pt;
            	font-weight: bold;
            	padding-left: 16px;
                padding-right: 16px;
            }
            td.kontak{
            	font-family: calibri;
            	font-size: 11pt;
            	font-weight: bold;
            }
            td.hormat{
            	font-family: calibri;
             	font-size: 11pt;
             	
            }
             td.tanda{
            	font-family: calibri;
             	font-size: 11pt;
             	padding-right: 5px;
             	padding-left: 5px;
             	
            }
            span.bri{
            	margin-left: 23px;
            	font-family: calibri;
            	font-size: 11pt;
            	font-weight: bold;

            }
            span.bri2{
            	margin-left: 34px;
            	font-family: calibri;
            	font-size: 11pt;
            	font-weight: bold;

            }
            span.pajak{
            	margin-left: 186px;
            	font-family: calibri;
            	font-size: 10pt;
            	font-weight: bold;
            }
            span.pajak2{
            	margin-left: 140px;
            	font-family: calibri;
            	font-size: 10pt;
            	font-weight: bold;
            }
             td.tanggal{
             	font-family: calibri;
             	font-size: 11pt;
            	width: 270px;
                
            }
            

  </style>
<body>
<table border="1" class="satu">

<tr>
	<td>
		<table width="800" height="400">
			<h2><center><u><strong>NOTA PENJUALAN KPSH</strong></u></center></h2>
				<th class="atas"><img src="<?php echo base_url()?>tema/img/logo.png" class="gambar"></th>
				<th class="alamat" align="left">
				<a class="al">PERUM BULOG</a><br>
				<a class="al">Jl. Jend. Gatot Subroto Kav. 49</a><br>
				<a class="al">Jakarta Selatan</a><br>
				<a class="al">01.003.148.2-051.000</a>
				</th>
				<table border="1" align="center" class="awal">
					
			<tbody>
				<tr>
					<td style="visibility: hidden">sdasd</td>
					<td class="tengah">Jenis Saluran</td>
					<td class="kanan"><strong><?php echo $cetak->nm_saluran ;?></strong></td>
				</tr>
				<tr>
					<td style="visibility: hidden">sdasd</td>
					<td class="tengah">Nama Saluran</td>
					<td class="kanan"><strong><?php echo $cetak->nm_mitra ;?></strong></td>
				</tr>
				<tr>
					<td class="no"><strong>Nota No: <?php echo $cetak->no_nota ;?></strong></td>
					<td class="tengah">Tempat Pengambilan</td>
					<td class="kanan"><?php echo $cetak->nm_gdng ;?></td>
				</tr>
			</tbody>
			</table>

<table border="1" align="center" class="tengah">
	<thead>
        <tr>
            <th class="kom">No</th>
            <th class="kom">Nama Barang</th>
            <th class="kom">Kuantum</th>
            <th class="kom">Harga (Rp)</th>
            <th class="kom">Harga Jual (Rp)</th>
            </tr>
            <tbody>
				<tr>
					<?php
        $no = 1;
        foreach ($komoditi->result() as $row) {
        ?>
					<td class="nomor" align="center"><?php echo $no++;?></td>
					<td class="barang"><?php echo $row->nm_komoditi;?></td>
					<td class="retail" align="right"><?php echo number_format($row->kuantum,0,',','.');?></td>
					<td class="retail" align="right"><?php echo number_format($row->harga,0,',','.');?></td>
					<td class="kanan2" align="right"><?php echo number_format($row->jumlah,0,',','.');?></td>
					 
				</tr>
				<?php } ?>
				<tr>
					<td class="kiri"></td>
					<td class="kiri3"></td>
					<td class="kiri3"></td>
					<td class="kiri3"></td>
					<td class="kanan3"align="right"><?php echo number_format($cetak->ttl_harga,0,',','.');?></td>
				</tr>
				<tr height="1px">
					<td class="kiri2" ></td>
					<td class="kiri33"><i>Dasar Pengenaan Pajak (DPP)</i></td>
					<td class="kiri3"></td>
					<td class="kiri3"></td>
					<td align="right">-</td>
				</tr>
				<tr>
					<td class="kiri"></td>
					<td class="kiri3"></td>
					<td class="kiri3"></td>
					<td class="kiri3"></td>
					<td align="right">-</td>
					
				</tr>
			</tbody>
</table>

<table border="1" align="center" class="contact">
	
<tbody>
	<tr>
					<td class="kiri"></td>
					<td class="kontak" align="center">Contact Person</td>
					<td class="kiri3"></td>
					
				</tr>
				<tr>
					<td class="cp">1. Tanre</td>
					<td class="cp" align="center">ADM KANTOR</td>
					<td class="cp" align="center">0821-7757-3712</td>
					
				</tr>
				<tr>
					<td class="cp">2. SATRIO</td>
					<td class="cp" align="center"> ADM KANTOR</td>
					<td class="cp" align="center">0812-7872-3712</td>
					
				</tr>
				<tr>
					<td class="cp">3. YOGIE</td>
					<td class="cp" align="center"> BU & MUKO2</td>
					<td class="cp" align="center">0821-7606-0270</td>
					
				</tr>
				<tr>
					<td class="cp">4. KADIR</td>
					<td class="cp" align="center">KT, BNTNG, SELUMA</td>
					<td class="cpn" align="center">0823-7588-5553</td>
					
				</tr>
				<tr>
					<td class="cp">5. RIKI</td>
					<td class="cp" align="center">BS & KAUR</td>
					<td class="cp" align="center">0853-7741-9416</td>
					
				</tr>
</tbody>
</table>
		
<table border="1" align="center" class="ttd">
	<tr>
		<td style="visibility: hidden"> 1</td>
		<td class="tanggal" align="center">Bengkulu, <?php echo $cetak->tanggal ;?> </td>
	</tr>
	<tr>
		<td class="tanda">Tanda Terima</td>
		<td class="hormat" align="center">Hormat Kami</td>
	</tr>
	<tr>
		<td height="43px"></td>
		<td></td>
	</tr>
	<tr>
		<td> </td>
		<td align="center" class="hormat">(<?php echo $cetak->nm_op ;?>)</td>
	</tr>
	
</table>

<span class="bri">*)Bank BRI : 0115-01-003664-30-5</span> <span class="pajak">*)Komoditi Terkena Pajak PPN</span><br>
<span class="bri2">A.n BULOG DIVRE BENGKULY CQ OPCBP</span>  <span class="pajak2">*) Pengembalian Barang Karena Kualitas maks 2x24 jam</span>

	</td>
</tr>


</table>
</body>
</html>


<!--<script type="text/javascript">
window.print();

</script>-->