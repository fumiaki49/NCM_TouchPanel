<?php
	session_start();

	if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
		die('お問い合わせの送信に失敗しました。');
	}

	/*メール言語設定*/
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");

	/*$checkedInquiry = $_POST["inquiry"];*/
	$checkedItem = $_POST["inquiry-item"];
	$message = $_POST["message"];
	$email = $_POST["mail"];
	$company = $_POST["company-name"];
	$name = $_POST["customer-name"];
	$phoneNumber = $_POST["phone-number"];

	/*件名*/
	$subject = "[自動送信] お問い合わせ内容の確認(カメラ方式タッチパネル)";

	/*メール本文*/
	$body = "{$name}様 \n";
	$body .= "\n";
	$body .= "お問い合わせありがとうございます。\n";
	$body .= "以下の内容で、お問い合わせを承りました。\n";
	$body .= "\n";
	$body .= "=============================================\n";
	$body .= "<問い合わせ項目>\n";
	foreach($checkedItem as $item) {
		$body .= "・{$item}\n";
	}
	$body .= "\n";
	$body .= "<問い合わせ詳細>\n";
	$body .= "{$message}\n";
	$body .= "\n";
	$body .= "<メールアドレス>\n";
	$body .= "{$email}\n";
	$body .= "\n";
	$body .= "<会社名>\n";
	$body .= "{$company}\n";
	$body .= "\n";
	$body .= "<お名前>\n";
	$body .= "{$name}\n";
	$body .= "\n";
	$body .= "<会社電話>\n";
	$body .= "{$phoneNumber}\n";
	$body .= "=============================================\n";
	$body .= "\n";
	$body .= "いただいた内容について、通常 1～3営業日以内にメールもしくは電話にて\n";
	$body .= "回答申し上げます。もし弊社からの回答が届かない場合は下記のメールか、\n";
	$body .= "お電話で直接お問合せいただきますようお願いいたします。\n";
	$body .= "\n";
	$body .= "━━━━株式会社ニューコム━━━━━━━━━━\n";
	$body .= "E-Mail:　ncm.contact@newcom07.jp\n";
	$body .= "Tel:　048-815-8460\n";
	$body .= "━━━━━━━━━━━━━━━━━━━━━━━\n";
	
	$to = "{$email}";
	$headerText = "株式会社ニューコム";
	$headers = "From: ".mb_encode_mimeheader($headerText)."<ncm.contact@newcom07.jp>"."\r\n";
	$headers .= 'Bcc: ncm.contact@newcom07.jp';
	mb_send_mail($to, $subject, $body, $headers);

	/*送信完了画面へ移動*/
	header(("location: https://www.xiroku.com/touchpanel/contact/finish.php"));
	exit;
?>