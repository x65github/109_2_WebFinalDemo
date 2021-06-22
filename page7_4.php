<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page7_3.php">上一頁</a>
        <a href="page7_5.php">| 下一頁</a>
    </div>
    <div id='main'>
    <?php 
        if(isset($_POST["choice"])){
            if ($_POST["choice"] == 'choice7-3-1'){
                ?><p id='answer'>選擇結果：<br>
                        維登:方便讓我們去庭院看看嗎?<br>
                        荷鲁斯‧魏斯曼:可以的，我讓女僕將狗趕回犬舍吧。<br>
                        音效:腳步聲<br>
                        荷鲁斯‧魏斯曼:愛麗莎，將獵犬們趕回犬舍，尤金子爵要參觀。<br>
                        愛麗莎:好的魏斯曼先生...<br>
                        音效:犬吠<br>
                        愛麗莎:沙克!!把繩子放下!!那不可以吃!!尤金子爵，讓您見笑了，沙克他還小，總愛亂咬東西....沙克!!<br>
                        柯爾:它叫沙克嗎?哈哈哈真是隻活力旺盛的小獵犬阿!<br>
                        荷鲁斯‧魏斯曼:是的，子爵及二位先生，這邊請。<br>
                        克勞德:恩...這看起來確實是禽類的殘骸沒錯，但是哪種禽類就看不出來了。<br>
                        柯爾:可憐的小鳥......<br>
                        維登:獵犬活動時間雖然跟案件發生時間有重疊，但應該是沒什麼關聯…我們再回案發現場看看，順便思考一下吧。<br>
                        克勞德:好<br>
                        (案發現場房間)<br>
                        </p>
                <?php
            }
            else{
                ?><p id='answer'>選擇結果：<br>
                        維登: 獵犬吃的食物殘骸應該跟這個案件沒什麼關係…<br>
                        克勞德:說的也是呢，那我們繼續在房間裡蒐集證據吧。</p>
                <?php
            }
        }else{
           ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
           window.location.href='page7_3.php'</script><?php 
        }
    ?>
</div>
<?php 
    include("footer.php");
?>


