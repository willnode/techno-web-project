
<?php
$menuaktif = 4;
include "pages/menu.php";
$db = mysqli_connect('localhost','root','','informasi');
?>

 <div class="content tentang">
	 <div class='head'>
	 <img class='logo' src="images/SmartFriend.png">
	 <div class='inner'>
		 <h1>Sistem Informasi <br>Perkonomian Bangkalan</h1>
		  <pre>Versi Aplikasi - 1.00 23/10/2018, PHP <?=phpversion()?>, MySQL <?=mysqli_get_server_info($db)?></pre>

		  <div class='bio'>
		<h4>-- Team Developer --</h4>
		<p>Nama Team : Smart Friends</p>
		<div><span style="vertical-align: top;">Nama Anggota:</span>
		<ul style=" display: inline-block; padding-left: 10px;">
			<li>- David Apriyanto</li>
			<li>- Wildan Mubarok</li>
			<li>- Lailatul Badria</li>
		</ul>
		<p>Instansi : Universitas Trunojoyo Madura</p>
</div>
	 </div>
	</div>



</div>
 </div>