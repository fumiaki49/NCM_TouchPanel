<?php
	session_start();
	
	/*CSRF攻撃対策*/
	$token_byte = openssl_random_pseudo_bytes(16);
	$csrf_token = bin2hex($token_byte);
	$_SESSION['csrf_token'] = $csrf_token;
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		/*$checkedInquiry = $_POST["inquiry"];*/
		$checkedItem = $_POST["inquiry-item"];
		$message = htmlspecialchars($_POST["message"]);
		$email = htmlspecialchars($_POST["mail"]);
		$company = htmlspecialchars($_POST["company-name"]);
		$name = htmlspecialchars($_POST["customer-name"]);
		$phoneNumber = htmlspecialchars($_POST["phone-number"]);
	} else {
		//フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
		header(("location: https://dbsheetclient.jp/index.php"));
		exit;
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>お問い合わせ | 確認</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--スタイルシート-->
		<link rel="stylesheet" href="./styles/contact.css">
		<link rel="stylesheet" href="./styles/responsive.css">
		<!--javascript-->
		<script src="./js/contact.js"></script>
		<script src="./js/dropdown.js"></script>
	</head>
	<body>
		<nav class="gloval-nav">
			<a class="logo-img" href="https://www.xiroku.com/">
				<img src="../images/xiroku_logo.png" alt="Xirokuのロゴ">
			</a>
			<ul class="list-item">
				<li class="drop-down">
					<p id="button">Xiroku製品</p>
					<ul>
						<a href="/html/touchpanel/touchpanel/index.html">
							<li>TouchSensor</li>
						</a>
						<a href="https://www.llsensor.com/index.html">
							<li>SheetSensor</li>
						</a>
						<a href="https://pegamore.com/">
							<li>PegAmore</li>
						</a>
					</ul>
				</li>
			</ul>
		</nav>
		
		<main class="main-area">
			<div class="content-wrapper">
				<div class="title-text_box inner">
					<h1 class="page-title">入力内容の確認</h1>
					<p>
						下記の内容で送信いたします。
						<br>
						よろしければ「送信する」を押してください。
					</p>
				</div>
				<section class="form-section inner">
					<form class="contact-form" action="./complete.php" method="post" name="form">
						<dl>
							<div class="item-wrapp">
								<dt>お問い合わせ項目</dt>
								<dd>
									<ul class="checked-list">
										<?php 
											foreach ($checkedItem as $item) {
												echo '<li>'.$item.'</li>';
												echo '<input type="hidden" name="inquiry-item[]" value="'.$item.'">';
											} 
										?>
									</ul>
								</dd>
							</div>
							<div class="item-wrapp">
								<dt>お問い合わせ詳細</dt>
								<dd>
									<input type="hidden" name="message" value="<?php echo $message ?>">
									<p><?php echo $message ?></p>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>E-mail</dt>
								<dd>
									<input type="hidden" name="mail" value="<?php echo $email ?>">
									<p><?php echo $email ?></p>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>会社名</dt>
								<dd>
									<input type="hidden" name="company-name" value="<?php echo $company ?>">
									<p><?php echo $company ?></p>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>御名前</dt>
								<dd>
									<input type="hidden" name="customer-name" value="<?php echo $name ?>">
									<p><?php echo $name ?></p>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>会社電話</dt>
								<dd>
									<input type="hidden" name="phone-number" value="<?php echo $phoneNumber ?>">
									<p><?php echo $phoneNumber ?></p>
								</dd>
							</div>
						</dl>
						<div class="btn-box">
							<input class="btn" type="button" value="修正する" onClick="history.back(-1)">
							<input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
							<input class="btn" type="submit" value="送信する">
						</div>
					</form>
				</section>
			</div>
			
		</main>
		
	</body>
</html>