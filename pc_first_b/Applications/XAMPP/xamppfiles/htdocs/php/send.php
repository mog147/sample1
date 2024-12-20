<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    $to = "396mog@gmail.com";
    $subject = "お問い合わせがありました";
    $headers = "From:396mog@gmail.com";
    $body = "名前: $name\nメールアドレス: $email\n\n$message";

    if (mail($to, $subject, $body, $headers)) {

    $message = "お問い合わせが送信されました。ありがとうございます！";

    } else {

        $message = "エラーが発生しました。もう一度お試しください。";

        }

    } else {

        header("Location: index.html");

    }
?>

<html>
  <head>
    <title>お問い合わせフォーム - 送信完了画面</title>
  </head>

  <body>
        <h1>お問い合わせフォーム - 送信完了画面</h1>
        <p><?php echo $message; ?></p>
        <p><a href="index.html">お問い合わせフォームに戻る</a></p>
  </body>

</html>