<?php 
foreach ($pay->result() as $row) {
  $alamat   = $row->alamat;
  $tgl_gaji = $row->tgl_gaji;
  $lembur   = $row->lama_lembur;
  $jabatan  = $row->nama_jabatan;
  $gapok    = $row->gaji_pokok;
  $kesehatan= $row->tunjangan_kesehatan;
  $pensiun  = $row->dana_pensiun;
  $t_lembur = $row->tunjangan_lembur;
  $telpon   = $row->no_telpon;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title; ?></title>
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>

<body onclick="Print()">
<table width="997" height="106" style="border-bottom: solid black">
  <tr>
    <td width="205"><div align="center"><strong>PT. PUDOT SEJATI</strong> </div></td>
    <td width="336" rowspan="3"><div align="center" class="style1">SLIP GAJI </div></td>
    <td width="59">Tanggal</td>
    <td width="11"><div align="center">:</div></td>
    <td width="126"><?php echo date('d F Y') ?></td>
  </tr>
  <tr>
    <td><div align="center">Jl. Imam Nahrowi No 211111 </div></td>
  </tr>
  <tr>
    <td><div align="center">Telp : 0321-324325</div></td>
  </tr>
</table>
<table width="997" style="border-bottom:solid black;">
  <tr>
    <td width="58">Nama</td>
    <td width="13"><div align="center">:</div></td>
    <td width="226"><?php echo $row->nama_karyawan; ?></td>
    <td width="63" rowspan="2">&nbsp;</td>
    <td width="57">Alamat</td>
    <td width="13"><div align="center">:</div></td>
    <td width="295"><?php echo $alamat ?></td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td><div align="center">:</div></td>
    <td><?php echo $jabatan ?></td>
    <td>Telpon</td>
    <td><div align="center">:</div></td>
    <td><?php echo $telpon ?></td>
  </tr>
</table>
<table width="997" style="border-bottom:solid black;">
  <tr>
    <td width="29"><strong>NO</strong></td>
    <td width="261"><div align="center"><strong>K E T E R A N G A N </strong></div></td>
    <td width="139">&nbsp;</td>
    <td width="322"><strong>JUMLAH</strong></td>
  </tr>
</table>
<table width="997" style="border-bottom:solid black;">
  <tr>
    <td width="27"><div align="center">1.</div></td>
    <td width="256">Gaji Pokok </td>
    <td width="139">&nbsp;</td>
    <td width="321">Rp. <?php echo number_format($gapok) ?> ,- </td>
  </tr>
  <tr>
    <td><div align="center">2.</div></td>
    <td>Tunjangan kesehatan </td>
    <td>&nbsp;</td>
    <td>Rp. <?php echo number_format($kesehatan) ?> ,- </td>
  </tr>
  <tr>
    <td><div align="center">3.</div></td>
    <td>Dana Pensiun </td>
    <td>&nbsp;</td>
    <td>Rp. <?php echo number_format($pensiun) ?> ,- </td>
  </tr>
  <tr>
    <td><div align="center">4.</div></td>
    <td>Tunjangan Lembur </td>
    <td><?php echo $lembur ?> Jam</td>
    <td style="border-bottom:solid black;">Rp. <?php $total_lembur = $lembur * $t_lembur; echo number_format($total_lembur) ?> ,- </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>TOTAL GAJI </strong></div></td>
    <td>Rp. <?php $total = $gapok + $kesehatan + $pensiun + $total_lembur; echo number_format($total) ?> ,- </td>
  </tr>
</table>
<table width="997">
  <tr>
    <td width="216"><div align="center">Penerima</div></td>
    <td width="296">&nbsp;</td>
    <td width="237"><div align="center">Surabaya, <?php echo date('d F Y') ?> </div></td>
  </tr>
  <tr>
    <td height="51">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23"><div align="center">(<?php echo $row->nama_karyawan; ?>)</div></td>
    <td>&nbsp;</td>
    <td><div align="center"><strong>(PT PUDOT SEJATI) </strong></div></td>
  </tr>
</table>

</body>
</html>

<script>
function Print() { 
  window.print();
}
</script>
