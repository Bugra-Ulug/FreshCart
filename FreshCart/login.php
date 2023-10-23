<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=bizmeslekliseliyiz;charset=utf8;","root","");
if ($_POST) {

  $ad2= isset($_POST['ad2']) ? $_POST['ad2'] : '';
  $eposta= isset($_POST['eposta']) ? $_POST['eposta'] : '';
  $sifre2= isset($_POST['sifre2']) ? $_POST['sifre2'] : '';
  $id= isset($_POST['id']) ? $_POST['id'] : '';

if (!$ad2 || !$sifre2 || !$eposta){
  echo("Boş Bırakmayınız");
}

$user = $db->query("SELECT * FROM hesaplar WHERE ad ='$ad2' AND eposta = '$eposta' AND sifre = '$sifre2' ")->fetch();

if ($user) {
  $_SESSION['user'] = $user;
  header("location:forum.php");
}else {
  echo "Bilgiler Eşleşmiyor";
}
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>FreshCart</title>
</head>
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="index.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Ana Sayfaya Dön</a></div>
				<div class="contact">
					<form action="login.php" method="post">
						<h3>Giriş Yapınız</h3>
						<input type="text" name="ad2" placeholder="Adınızı Giriniz" required>
                        <input type="text" name="eposta" placeholder="E-postanızı Giriniz" required>
						<input type="password" name="sifre2" placeholder="Şifrenizi Giriniz" required>
						<button class="submit">Giriş Yap</button>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>FreshCart</h2>
					<h5>Welcome to our site</h5>
				</div>
                <div class="right-inductor"><img src="https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>