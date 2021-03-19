<!DOCTYPE html>
<html lang="ja">
<?php include("header.php"); ?>

<body>
<div class='text-center container'>

    <h1 class=m-5>じゃんけんプログラム</h1>

    <p><?= $message ?></p>
    <p></p>
    <p class='h2 m-3'><strong><?= $message_result ?></strong></p>
    <p>あなたは<?= $playerHand ?>を、コンピューターは<?= $computerHand?>を出しました。</p>
    <p></p>

    <form action="janken.php">
        <input type="submit" class="btn-check" id="btn-check" autocomplete="off">
        <label class="btn btn-primary" for="btn-check">もう一度挑戦する</label>
    </form>

</div>
    <?php include("footer.php"); ?>
</body>

</html>