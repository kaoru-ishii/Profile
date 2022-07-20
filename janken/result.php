<?php

// じゃんけんの手の変数
$hands = ['グー', 'チョキ', 'パー'];
$player_hand;
$pc_hand;
$result;

// player_handsをPOST
if (isset($_POST['player_hand'])) {

    jadgeJanken($_POST['player_hand']);

}

// result変数に、勝ち・負け・あいこを代入してくれる関数
function jadgeJanken($player)
{
    global $hands;
    global $player_hand;
    global $pc_hand;
    global $result;

    // 関数の引数をplayer_hand変数に代入
    $player_hand = $player;

    // array_rand関数は、配列の中からランダムにキーを取得してくれる
    $key = array_rand($hands);
    $pc_hand = $hands[$key];

    // $result変数に結果を代入するswich文
    switch ($player_hand) {
        case $player_hand == $pc_hand:
            $result = 'あいこ';
            break;
        case $player_hand == 'グー' && $pc_hand == 'チョキ':
            $result = '勝ち';
            break;
        case $player_hand == 'チョキ' && $pc_hand == 'パー':
            $result = '勝ち';
            break;
        case $player_hand == 'パー' && $pc_hand == 'グー':
            $result = '勝ち';
            break;
        default:
            $result = '負け';
            break;
    }

}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん - 結果</title>
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
                <h3>結果は...</h3>
                <h1><?php echo $result; ?>ですっ！</h1>
                <div>あなた：<?php echo $player_hand; ?></div>
                <br>
                <div>コンピューター：<?php echo $pc_hand; ?></div>
                <br>
                <p><a href="index.php">>>もう一度勝負しよ(*´꒳`*)</a></p>
            </div>
        </div>
    </main>
</body>

</html>