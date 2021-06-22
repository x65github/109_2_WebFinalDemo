<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page5_4.php">上一頁</a>
        <a href="page5_6.php">| 下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p>(下午2點)(城堡外)</p>
            <p id='Cole'>柯爾：維登，這都繞城堡第三圈了，有看出什麼嗎?</p>
            <p id='Wieden'>維登： ...</p>
            <p id='Cole'>柯爾：剛剛還叫我爬外牆到三樓，一個不小心可是會摔死的，這樣一來還沒見到兇手就死了，哈哈哈哈哈！</p>
            <p id='Wieden'>維登：嗯，經過剛剛的實驗，不管幾樓的客房都有辦法從窗戶爬到一樓再返回，全部客人跟總管家都有可能作案。傭人的房間沒有窗戶，所以僕人們沒有嫌疑。</p>
            <p id='Cole'>柯爾：你能不能對我的笑話有點反應?</p>
            <p id='Wieden'>維登：你不是在巴黎的時候天天爬窗偷人家東西嗎...怎麼可能摔死...</p>
            <p id='Cole'>柯爾：算了算了你繼續說吧。殺死伯爵的該不會真是死神吧？</p>
            <p id='Wieden'>維登：不能完全否定卻也沒法證明存在的事物...我們先以一般常識思考吧。如果弗蘭茲小伯爵看到的是人，他的裝扮跟凶器都直接丟樹林就好，那樣規模的樹林，即使確定證據藏在其中，我們也不一定找的到...先回去室內吧，差不多看完了。</p>
            <p>???:二位於此處是在欣賞莊園風景嗎?</p>
            <p id='Cole'>柯爾：李曼伯爵，您好阿。</p>
            <p id='Wieden'>維登：(剛剛那個放肆大笑的傻小子哪去了...昨天看起來，李曼伯爵好像跟克洛維公爵交情不錯，是一個蒐集情報的好機會...)</p>
            <form name="myForm" action='page5_6.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>請做出選擇</legend>
                    <input type="radio" name="choice" value="choice5-5-1" >關於已故的克洛維老公爵與公爵夫人....<br>
                    <input type="radio" name="choice" value="choice5-5-2" >昨天的推理...<br>
                    <input type="radio" name="choice" value="choice5-5-3" >你跟克洛維公爵...
                    <input type="submit" value="確定" />
                </fieldset>
            </form></div>
    </div>
</div>
<?php 
    include("footer.php");
?>


