<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page2_2.php">上一頁</a>
        <a href="page2_4.php">| 下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound2' style="display:none;" controls>
            <source src="Sound/6_destruction1.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
    
    <?php 
        if(isset($_POST["choice"])){
            if ($_POST["choice"] == 'choice2-2-1'){
                ?><p id='answer'>選擇結果：是<br>
                        (你站了起來，結果柯爾拉住了手)<br>
                        　　　柯爾：欸欸欸你幹嘛站起來，快坐下!別逞英雄了，跟著大家舉吧，我可不想得罪人</p>
                <?php
            }
            else{
                ?><p id='answer'>選擇結果：否<br>
                        </p>
                <?php
            	}
        }else{
           ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
           window.location.href='page2_2.php'</script><?php 
        }
    ?>
    <div id='autotype' style="display:none;">
            <p id='Wieden'>維登：那個李曼太過分了吧...</p>
            <p>奧斯頓‧克洛維:奶奶是我這輩子最敬重的人......</p>
            <p>眾人:!!!</p>
            </div><div id='autotype2'>
            <p>碰!開門聲</p>
            <p>尼古拉‧肖特:哎呀~多年不見，城堡氣派是氣派，但主人的風采倒是不如從前啊~可惜了~</p>
            <p>僕人:肖特公爵，請入座</p>
            <p id='Cole'>柯爾：這個叫肖特的好沒禮貌啊..</p>
            <p id='Wieden'>維登：他是受國王重用的肖特家族的主人，早就聽說他們家仗著權勢橫行霸道，今日一見，果然如此。</p>
            <p>奧斯頓‧克洛維:......那麼我在此宣布宴會正式開始，望各位盡興!</p>
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>


