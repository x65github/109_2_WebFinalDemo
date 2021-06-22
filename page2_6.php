<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page2_5_1.php">上一頁</a>
        <a href="page2_6_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    
    <?php 
        if(isset($_POST["choice"])){
            if ($_POST["choice"] == 'choice2-5-1'){
                ?><p id='answer'>選擇結果：慰問簡<br>
                        簡:肖特公爵.....他.....他....</p>

                <?php
            }
            else{
                ?><p id='answer'>選擇結果：<br>
                        (更衣室門半開著，簡臉色蒼白的坐在地上，向裡面看，是一動也不動倒在地上的尼古拉‧肖特，頭部鮮血不止)</p>　　　
                <?php
            }
        }else{
           ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
           window.location.href='page2_5.php'</script><?php 
        }
    ?>
    <div id='autotype' style="display:none;">
            <p id='Wieden'>維登：他已經沒有呼吸了.....很遺憾...</p>
            <p id='Cole'>柯爾：他胸口的口袋裡是什麼東西?</p>
            <p id='Wieden'>維登：是...一張字條!「Leave, and you’ll be the next」是要我們不許離開這座城堡嗎......</p>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/1_peoplesound2.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            <p>眾人竊竊私語聲</p>
            <p id='Cole'>柯爾：咳咳咳哼!</p>
            <p id='Wieden'>維登：????!!!!</p>
            <p id='Cole'>柯爾：各位先生淑女！別緊張！</p>
            <p id='Wieden'>維登：(小聲)喂！柯爾，你在做什麼阿?!</p>
            <p id='Cole'>柯爾：其實，我在來這裡之前就有預感會有駭人的犯罪事件發生!</p>
            <p id='Wieden'>維登：(我們來偷東西確實也算犯罪吧...)</p>
            <p id='Cole'>柯爾：其實我家男侍維登呢，他呢~是個偵探！我特別帶上他，來與上帝一同幫助各位解決危機！</p>
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>


