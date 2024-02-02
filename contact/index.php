<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>お問い合わせ | カメラ方式タッチパネル</title>
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
					<h1 class="page-title">カメラ方式タッチパネルのお問い合わせ</h1>
					<p>お問い合わせの内容を確認後、折り返しご連絡させていただきます。</p>
				</div>
				<section class="form-section inner">
					<form class="contact-form" action="./confirm.php" method="post" name="form">
						<dl>
							<div class="item-wrapp">
								<dt>
									お問い合わせ項目
									<span class="require">※必須</span>
								</dt>
								<dd>
									<ul class="check-box">
										<li>
											<input type="checkbox" id="check6" name="inquiry-item[]" value="訪問を希望">
											<label for="check6">訪問を希望</label>
										</li>
										<li>
											<input type="checkbox" id="check7" name="inquiry-item[]" value="詳細説明を希望">
											<label for="check7">詳細説明を希望</label>
										</li>
										<li>
											<input type="checkbox" id="check8" name="inquiry-item[]" value="資料送付を希望">
											<label for="check8">資料送付を希望</label>
										</li>
										<li>
											<input type="checkbox" id="check9" name="inquiry-item[]" value="見積を希望">
											<label for="check9">見積を希望</label>
										</li>
										<li>
											<input type="checkbox" id="check11" name="inquiry-item[]" value="その他">
											<label for="check11">その他</label>
										</li>
									</ul>
								</dd>
							</div>
							<div class="item-wrapp">
								<dt>お問い合わせ詳細</dt>
								<dd>
									<textarea rows="7" name="message" placeholder="1000字以内でお願い致します" maxlength="1000"></textarea>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>
									E-mail
									<span class="require">※必須</span>
								</dt>
								<dd>
									<input class="text-box" type="email" name="mail" required>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>
									会社名
									<span class="require">※必須</span>
								</dt>
								<dd>
									<input class="text-box" type="text" name="company-name" required>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>
									御名前
									<span class="require">※必須</span>
								</dt>
								<dd>
									<input class="text-box" type="text" name="customer-name" required>
								</dd>
							</div>
							<div class="item-wrapp fix-center">
								<dt>
									会社電話
									<span class="require">※必須</span>
								</dt>
								<dd>
									<input class="text-box" type="tel" name="phone-number" required>
								</dd>
							</div>
						</dl>
						<div class="btn-box single">
							<input class="btn" type="submit" name="submit-btn" value="確認画面へ">
						</div>
					</form>
				</section>
			</div>
			
		</main>
		<footer></footer>
	</body>
</html>