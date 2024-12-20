<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

$email = $_POST["email"];

} else { 
header("Location: index.html"); 
} 
?>

<html>
    <head>
    <title>お問い合わせフォーム - 確認画面</title>
    </head>
    <body>
        <h1>お問い合わせフォーム - 確認画面</h1>
        <p>以下の内容で送信します。よろしいですか？</p>

        <table>
            <tr><td>メールアドレス：</td><td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        </table>

        <form method="post" action="Applications/XAMPP/xamppfiles/htdocs/php/send.php">


            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="submit" value="送信">

            <button type="button" onclick="history.back()">戻る</button>

        </form>

    </body>
</html>