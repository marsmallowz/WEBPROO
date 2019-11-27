

<body>
	<!-- cek pesan notifikasi -->
    <?php  

	if(isset($_GET['error'])&& $_GET['error']==1){
		echo "login gagal ~~~~~~";
	}
	?>
	<br/>
	<br/>
	<form method="post" action="index.php?page=proses_login">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Log In"></td>
			</tr>
		</table>			
	</form>
</body>
</html>