<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a href="page2_1.php">上一頁</a>
    <a href="page2_3.php">|下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/2_trumpet.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
    <div id='autotype' style="display:none;">
           
            <p>音效：號角聲</p>
            <p id='Wieden'>維登：那位相貌堂堂的小公爵，想必就是這次宴會的主人公—奧斯頓‧克洛維公爵了吧?</p>
            <p>奧斯頓‧克洛維:大家晚安，敝人奧斯頓‧克洛維，在宣布宴會開始之前，我想先表達我對奶奶，也就是瑪莉老公爵的哀悼之情，今天雖然是我的成年宴會，一切儀式從簡，也希望各位謹記老公爵的離世，讓我們緬懷她。</p>
            <p>???:說什麼呢!今天可是你的20歲生日啊!這麼值得慶祝的日子怎麼能不好好慶祝呢!瑪莉老公爵肯定也希望你繼續向前走啊!</p>
            <p>奧斯頓‧克洛維:李曼!你身為克洛維家族的一份子，請你自重，別這麼說!</p>
            <p>李曼‧克洛維:哈哈哈哈哈板著一張臉是有多晦氣啊!來~大家一起舉杯慶祝，祝我的玩伴奧斯頓生日快樂吧!</p>
            <form name="myForm" action='page2_3.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>你要站起來斥責李曼嗎?</legend>
                    <input type="radio" name="choice" value="choice2-2-1" >是
                    <input type="radio" name="choice" value="choice2-2-2" >否　　　
                    <input type="submit" value="確定" />
                </fieldset>
            </form></div>
    </div>
</div>
<?php 
    include("footer.php");
?>
