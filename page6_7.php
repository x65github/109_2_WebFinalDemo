<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page6_6.php">上一頁</a>
        <a href="page7_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound2' style="display:none;" controls >
            <source src="Sound/6_destruction1.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
    <?php 
    if(isset($_POST["choice"])){
        if ($_POST["choice"] == 'choice6-5-1'){
            ?><p id='answer'>選擇結果：<br>
            (三樓)<br>
            柯爾：維登，所以剛剛那到底是怎麼一回事阿。<br>
            維登：我原先也想不通，我一直覺得很奇怪，前面兩起案件的作案工具，很明顯是預先準備好的，也就是這是預謀殺人案。我原本覺得有可能是因為賓客們貪圖去世的瑪莉老公爵的巨額遺產…但這樣貝絲的死就顯得特別突兀，並非貴族，還被殺害，而且還沒有留下警告訊息。
            柯爾：但你剛剛不是說是因為兇手很急嗎?<br>
            維登：兇手恐怕在那個情況下也沒預料會有女僕看見…貝絲八成是撞見了能夠指認出殺人兇手的那一刻才被滅口的，例如正在殺人的一刻或是準備凶器的過程…對兇手來說也是預料之外，不是因為太急而不留警告訊息，而是殺害貝絲本來不是在兇手的預謀之內，這麼一來就說得通了。<br>
            總之現在要趕緊確認所有客人的安危，如果貝絲看見的是剛剛推測的前者就代表還有至少一位犧牲者…<br>
            </div><div id='autotype2'>
            (櫃子倒地)
            
            <p>第六章 迷霧中的巨響 完</p>
            <?php
        }
        else if ($_POST["choice"] == 'choice6-5-2'){
            ?><p id='answer'>選擇結果：<br>
            (二樓走廊)<br>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/4_knocking_a_wooden_door1.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            (敲門聲)<br>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/6_room_door_O.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            (開門聲)<br>
            ???:有什麼事嗎?<br>
            沙拉：費加小姐，非常抱歉，就在剛剛又發生了一起殺人案件，我們為了確保各位賓客的安全，請您移駕至一樓的會客室。<br>
            費加小姐:你們這座城堡怎麼這麼恐怖?早知道就不來了，五年前我來參加宴會的時候也沒發生過這種事情啊?<br>
            沙拉：非常抱歉，那麼，請趕緊前往會客室吧，走到一樓後右轉有許多人聚集的地方就是…<br>
            。。。
            維登：接下來這應該是最後一間了吧，已經走到盡頭了，跟發現貝絲的地方是反方向。住在這間客房裡的是哪位先生?<br>
            沙拉：維登先生，這間是博蒙德子爵的房間。<br>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/4_knocking_a_wooden_door1.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            (敲門聲)<br>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/4_knocking_a_wooden_door1.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            (敲門聲)<br>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/4_knocking_a_wooden_door1.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            (敲門聲)<br>
            沙拉：子爵?<br>
            (櫃子倒地)<br>
            維登：子爵?!失禮了!<br>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/6_destruction1.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            (踹門聲)<br>
            <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/girlyell.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
            沙拉：啊!!!!!!!!!!!!!!!!!!!<br>
            
            </p>
            <p>第六章 迷霧中的巨響 完</p>
            <?php
        }
        else if ($_POST["choice"] == 'choice6-5-3'){
            ?><script>window.location.href='2end.php'</script><?php
        }
    }else{
       ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
       window.location.href='page6_6.php'</script><?php 
    }
    ?>
    
</div>
<?php
function savegame($content){
    $file='game.txt';
    $fp=fopen($file,"w");
    if (fwrite($fp,$content)){
        fclose($fp);
        return '已儲存遊戲進度！';}
    else{
        fclose($fp);
        return '發生未知錯誤，無法儲存遊戲進度';}
    }
function readgame(){
    $file='game.txt';
    if (file_exists($file)){
        $fp=fopen($file,"r");
        $contents=fread($fp,filesize($file));
        $contents=(int)$contents;
        fclose($fp);
        return $contents;
        }
    else{
        $fp=fopen($file,"w");
        $contents='1';
        fwrite($fp,$contents);
        fclose($fp);
        $contents=(int)$contents;
        return $contents;
        }
    }
$contents=readgame();
if ($contents>=7){
    $contents=$contents;
    }
else{
    savegame('7');
    }
    
?>
<?php 
    include("footer.php");
?>


