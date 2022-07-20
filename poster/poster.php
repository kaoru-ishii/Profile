<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    <title>profile</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/main_poster.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function (){
            const hum = $('#hamburger')
            const nav = $('.sp_nav')
            hum.on('click', function(){
                nav.toggleClass('toggle');
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>
            <a href="./top.html">Ishii Kaoru</a>
        </h1>
        <nav class="pc_nav">
            <ul>
                <li><a href="../top/top.php">ホーム</a></li>
            </ul>
        </nav>
        <nav class="sp_nav">
            <ul>
                <li><a href="../top/top.php">ホーム</a></li>
                <li><a href="">閉じる</a></li>
            </ul>
        </nav>
        <div id="hamburger">
            <span></span>
        </div>
    </header>
    <main>
        <section class="detail_section">
            <div class="box">
                <div class="poster_wrapper">
                    <h2>Illustlater & Photoshop</h2>
                    <div class="logo_list">
                        <div class="poster_box">
                            <img class="logo" src="../images/kaoru_logo.jpg" alt="薫のロゴ">
                            <p>薫のロゴ</p>
                        </div>
                        <div class="poster_box">
                            <img class="logo" src="../images/kaoru_logo2.jpg" alt="猫とバスケットボール">
                            <p>猫とバスケットボール</p>
                        </div>
                    </div>
                    <div class="poster_list">
                        <div class="poster_box">
                            <img class="poster" src="../images/keshousui_poster.jpg" alt="架空の化粧水ポスター">
                            <p>架空の化粧水ポスター</p>
                        </div>
                        <div class="poster_box">
                            <img class="poster" src="../images/tsujiri_poster.jpg" alt="架空の辻利ポスター">
                            <p>架空の辻利ポスター</p>
                        </div>
                        <div class="poster_box">
                            <img class="poster" src="../images/takujisho_poster.jpg" alt="架空の託児所ポスター">
                            <p>架空の託児所ポスター</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>kaoru portfolio</p>
    </footer>
</body>
</html>