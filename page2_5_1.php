<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page2_5.php">上一頁</a>
        <a href="page2_6.php">| 下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound' style="display:none;" controls autoplay>
    <source src="Sound/girlyell.mp3" type="audio/mpeg">
    音檔播放失敗!瀏覽器不支援此技術!
    </audio>
    <div id='autotype' style="display:none;">

            <p>女性尖叫聲</p>
            <p>眾人:???!!!!!!!!!</p>
            <p id='Cole'>柯爾：是凱爾特小姐!</p>
            <p id='Wieden'>維登：快去看看!</p>
            <p>跑步腳步聲</p>
            <form name="myForm" action='page2_6.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>請做出選擇</legend>
                    <input type="radio" name="choice" value="choice2-5-1" >慰問簡
                    <input type="radio" name="choice" value="choice2-5-2" >查看更衣室　　
                    <input type="submit" value="確定" />
                </fieldset>
            </form></div>

    </div>
</div>
<?php 
    include("footer.php");
?>


