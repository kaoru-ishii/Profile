<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    <title>profile</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <header>
        <h1>
            <a href="#top">Ishii Kaoru</a>
        </h1>
        <nav class="pc_nav">
            <ul>
                <li><a href="#top">Top</a></li>
                <li><a href="#profile">自己紹介</a></li>
                <li><a href="#portfolio">制作物</a></li>
                <li><a href="#work_history">職務経歴書</a></li>
                <li><a href="#contact">お問い合わせ</a></li>
            </ul>
        </nav>
        <nav class="sp_nav">
            <ul>
                <li><a href="#top">Top</a></li>
                <li><a href="#profile">自己紹介</a></li>
                <li><a href="#portfolio">制作物</a></li>
                <li><a href="#work_history">職務経歴書</a></li>
                <li><a href="#contact">お問い合わせ</a></li>
                <li><a href="">閉じる</a></li>
            </ul>
        </nav>
        <div id="hamburger">
            <span></span>
        </div>
    </header>
    <main>
        <section id="top" class="image_section">
            <img class="image" src="../images/top.jpg" alt="">
            <p class="text">
                Welcome My pege
            </p>
        </section>
        <section class="detail_section">
            <div class="box">
                <div id="profile" class="profile_wrapper">
                    <h2>自己紹介</h2>
                    <div class="">
                        <div class="my_picture">
                                <p><img src="../images/my_picture.jpg" alt=""></p>
                                <p><img src="../images/basketball.jpg" alt=""></p>
                                <p><img src="../images/jounangu.jpg" alt=""></p>
                                <p><img src="../images/cake.jpg" alt=""></p>
                        </div>
                    </div>
                    <div class="profile">
                        <table>
                            <tr>
                                <th>名前</th>
                                <td>石井 薫(29)</td>
                            </tr>
                            <tr>
                                <th>生年月日</th>
                                <td>1993年05月06日(木)</td>
                            </tr>
                            <tr>
                                <th>出身地</th>
                                <td>大阪府高槻市</td>
                            </tr>
                            <tr>
                                <th>趣味</th>
                                <td>バスケットボール(歴:16年)、散歩、スイーツ巡り</td>
                            </tr>
                            <tr>
                                <th>職歴</th>
                                <td>
                                    保育士(1年)　　　担任：5歳児
                                    <br>
                                    体育指導員(4年)　役職：主任
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="portfolio" class="production_wrapper">
                    <h2>Portfolio</h2>
                    <div class="production">
                        <div class="upper_row">
                            <div class="production_box">
                                <a href="../training/view/login.php" rel="noopener" target="blank">
                                    <img class="portfolio_img" src="../images/training.jpg" alt="筋力トレーニング">
                                    <h4>筋力トレーニング</h4>
                                    <div class="line"></div>
                                    <p>筋鍛えて理想のボディを手に入れよう！</p>
                                </a>
                            </div>
                            <div class="production_box">
                                <a href="../typing_game/top.php" rel="noopener" target="blank">
                                    <img src="../images/TaipingGame.jpg" alt="">
                                    <h4>タイピング練習</h4>
                                    <div class="line"></div>
                                    <p>タイピング練習をしよう！</p>
                                </a>
                            </div>
                            <div class="production_box">
                                <a href="../janken/index.php" rel="noopener" target="blank">
                                    <img src="../images/janken.jpg" alt="">
                                    <h4>じゃんけん</h4>
                                    <div class="line"></div>
                                    <p>じゃんけん勝負をしよう！</p>
                                </a>
                            </div> 
                        </div>
                        <div class="upper_row">
                            <div class="production_box" rel="noopener" target="blank">
                                <a href="../poster/poster.php">
                                    <img src="../images/ai_ps_list.jpg" alt="">
                                    <h4>ポスター</h4>
                                    <div class="line"></div>
                                    <p>Illustlater & Photoshopでの制作物</p>
                                </a>
                            </div>
                            <div class="production_box">
                                <a href="">
                                    <div class="portfolio">画像</div>
                                    <!-- <img src="../images/image04.jpg" alt=""> -->
                                    <h4>小項目</h4>
                                    <div class="line"></div>
                                    <p>本文</p>
                                </a>
                            </div>
                            <div class="production_box">
                                <a href="">
                                    <div class="portfolio">画像</div>
                                    <!-- <img src="../images/image04.jpg" alt=""> -->
                                    <h4>小項目</h4>
                                    <div class="line"></div>
                                    <p>本文</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="work_history" class="work_history_wrapper">
                    <h2>職務経歴書</h2>
                    <div class="work_history">
                        <table>
                            <tr>
                                <th>会社名</th>
                                <th>職種</th>
                                <th>経験年数</th>
                                <th>活動内容</th>
                            </tr>
                            <tr>
                                <td><a href="https://m-tsubasa.ed.jp/irodori/">社会福祉法人<br>博光福祉会<br>彩つばさ保育園</a></td>
                                <td>保育士</td>
                                <td>１年</td>
                                <td>５歳児の担任(加配担当)</td>
                            </tr>
                            <tr>
                                <td><a href="https://www.tsubasa-sports-academy.jp/">社会福祉法人<br>博光福祉会<br>体育指導員</a></td>
                                <td>体育指導員(主任)</td>
                                <td>４年</td>
                                <td>大阪、京都、兵庫、11園ある姉妹園の幼児(小学生)に体育を指導する。</td>
                            </tr>
                            <tr>
                                <td>個人事業主</td>
                                <td>ネットショップ</td>
                                <td>２年</td>
                                <td>ＥＣサイトを利用して物販を行う。</td>
                            </tr>
                        </table>
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104739.1758620567!2d135.54415404795682!3d34.87885406720991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600102620847b5a7%3A0xbe4451ac28f4201d!2z5aSn6Ziq5bqc6auY5qe75biC!5e0!3m2!1sja!2sjp!4v1654840113348!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div id="contact" class="contact_wrapper">
                    <h2>お問い合わせ(仮)</h2>
                    <div class="item">
                        <p class="label">氏名</p>
                        <input required class="input" type="text" placeholder="例) 山田太郎">
                    </div>
                    <div class="item">
                        <p class="label">メールアドレス</p>
                        <input class="input" type="text" placeholder="例) example@gmail.com">
                    </div>
                    <div class="item">
                        <p class="label">お問い合わせ内容</p>
                        <textarea required class="textarea" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <input class="btn" type="submit" value="送信する">
                </div>
            </div>
        </section>
    </main>
    <div class="btn-top">
        <span></span>
    </div>
    <footer>
        <p>kaoru_portfolio</p>
    </footer>
</body>
</html>