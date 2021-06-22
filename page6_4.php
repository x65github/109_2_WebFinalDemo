<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page6_3.php">上一頁</a>
        <a href="page6_5.php">| 下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound2' style="display:none;" controls >
            <source src="Sound/2_door.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
    <?php
    if(isset($_POST["choice"])){
        if ($_POST["choice"] == 'choice6-3-1'){
            ?><p id='answer'>選擇結果：<br>
            維登：克勞德你覺得貝絲跟這案件有關聯嗎?<br>
            克勞德：這個嘛…目前資訊不足，很難下定論呢。不過，維登你想找到她不就是確信她與案件脫不了關係嗎?<br>
            維登：不，我只是憑直覺…<br>
            克勞德：在這種時候的靈光一閃或直覺往往是最準的喔，呵呵。<br>
            維登：是這樣嗎...?<br>
            克勞德：恩，歷史上很多偵辦了好幾年的困難案件都是突然靈光一閃而解出來的喔。<br>
            柯爾：靈光一閃阿…</p>
            <?php
        }
        else{
            ?><p id='answer'>選擇結果：<br>
            維登：…<br>
            柯爾：話說回來，克勞德，我們曾經在哪見過嗎?我怎麼覺得對你的臉有些印象...<br>
            克勞德：是這樣嗎?我們昨天宴會上見過了阿，呵呵，開玩笑的，我曾經去過巴黎，可能當時跟子爵您有過一面之緣吧?<br>
            柯爾:也許是這樣吧...<br>
            維登：(是這樣嗎?)</p>
            <?php
        }
    }else{
       ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
       window.location.href='page6_3.php'</script><?php 
    }
    ?>
    <div id='autotype'>
            
            <p>(城堡二樓走廊)</p>
            <p id='Cole'>柯爾：這都找了半小時了…不會躲在垃圾間吧…</p>
            <p id='Wieden'>維登：不太可能吧。</p>
            <p>女僕沙拉：先生，到了，還有可能在這邊的儲藏室。</p>
            <p id='Cole'>柯爾：那我把門拉開吧。</p>
            </div><div id='autotype2'>
            <p>(開門聲)</p>
            <p id='Cole'>柯爾：….!你沒事嗎!</p>
            <p>女僕沙拉：貝絲！你醒醒啊!</p>
            <p>克勞德：看來對方搶先我們一步呢</p>
            <p id='Wieden'>維登：怎麼會這樣…</p>
            <p id='Cole'>柯爾：她已經沒有呼吸了。</p>
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>


