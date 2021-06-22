<?php 
    include("header.php");
?>
    <div id="pages_short">
        <span id="title">頁面：</span>
        <a href="page1_2.php">下一頁</a>
    </div>
    <div id='main'>
        <!--音效在這-->
            <audio id='sound' style="display:none;" controls autoplay >
                <source src="Sound/1_1party.mp3" type="audio/mpeg">
                音檔播放失敗!瀏覽器不支援此技術!
            </audio>
        <!--音效在這-->
        <div style="display:none;" id="autotype">
            <p>《第一章 起始》</p>
            <p>路人甲：哇...這是什麼...你看你看！柯爾！仕女端上來的那些該不會全是我們可以隨便吃的吧?!</p>
            <p id='Cole'>柯爾：你在講什麼蠢話！他端上來的東西不拿來吃難道是裝飾嗎?!維登，我們趕緊去拿！</p>
            <p id='Wieden'>維登：好！真沒想到幾天前還在巴黎貧民區的我能經歷這種好事...</p>
            <p>(三天前 地點：巴黎市區某麵包店)</p>
            <p id='Wieden'>維登：呃...長棍麵包兩根、牛角麵包五個，這樣一共是0.3法郎！好的！謝謝惠顧！下次也來光臨喔！</p></div>
         <audio id='sound2' style="display:none;" controls>
            <source src="Sound/1_1bellonce.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
         </audio>
         <div id="autotype2">
            <p>麵包店阿姨：維登，辛苦了，換人吧。</p>
            <p id='Wieden'>維登：辛苦了謝謝~</p>
            <p>麵包店阿姨：說起來維登你還真辛苦呢，5點就開始送報，待會還要去工廠上班，要養弟弟妹妹們很辛苦吧?</p>
            <p id='Wieden'>維登：嘿嘿還好啦~我想快點還清債務讓他們好過一些~不聊了，我去工廠上班啦!掰掰!</p>
            <p>麵包店阿姨：唉這孩子還真努力，怎麼就攤上一個不負責任的爸爸呢。</p></div>
    </div>
</div>
<?php 
    include("footer.php");
?>