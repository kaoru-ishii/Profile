<?php

$hands = ["グー", "チョキ", "パー"];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../top/top.php">Topへ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <img src="../images/janken.jpg" alt="">
            <div class="text">
                <h1>【じゃんけん】</h1>
                <h2>さぁっ！！勝負だっ！！<br>下から好きな手を選んでね♬</h2>
                <form method="POST" action="result.php">
                    <?php foreach ($hands as $hand) { ?>
                        <input name="player_hand" required type="radio" value="<?php echo $hand; ?>" /> <?php echo $hand; ?>
                        <br>
                    <?php } ?>
                        <br>
                    <button type="submit">勝負ダァーッ！！</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
