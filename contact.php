<?php

if($_POST) {
  echo $_POST['email'];
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}

?>