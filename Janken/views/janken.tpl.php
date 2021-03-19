<!DOCTYPE html>
<html lang="ja">
<?php include("header.php"); ?>

<body>
    <div class='text-center container'>
        <h1 class=m-5>じゃんけんプログラム</h1>
        <p><?= $message ?></p>
    </div>
    <form action="result.php" method="post">
        <div class="container">
            <div class="row">
                <div class="form-check form-check-inline offset-sm-3 col-sm-2">
                    <input class="form-check-input" type="radio" name="playerHand" id="playerhand" value="グー" checked>
                    <label class="form-check-label" for="playerhand">グー</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="radio" name="playerHand" id="playerhand" value="チョキ">
                    <label class="form-check-label" for="playerhand">チョキ</label>
                </div>
                <div class="form-check form-check-inline col-sm-2">
                    <input class="form-check-input" type="radio" name="playerHand" id="playerhand" value="パー">
                    <label class="form-check-label" for="playerhand">パー</label>
                </div>
            </div>
        </div>
        <p></p>
        <input type="submit" class="btn-check" id="btn-check" autocomplete="off">
        <label class="offset-sm-5 col-sm-2 btn btn-primary" for="btn-check">ポンッ！</label>
        </div>
    </form>

    <?php include("footer.php"); ?>
</body>

</html>