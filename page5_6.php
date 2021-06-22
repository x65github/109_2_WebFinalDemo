<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page5_5.php">上一頁</a>
        <a href="page6_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    <?php 
    if(isset($_POST["choice"])){
        if ($_POST["choice"] == 'choice5-5-1'){
            ?>
            <p id='Wieden'>維登：請問伯爵您知道關於已故的克洛維老公爵與公爵夫人的事嗎?</p>
            <p>李曼:我知道的根本不能算是事實。我當時還沒見過奧斯頓，但畢竟克洛維家族如此有名，一些管不住嘴的仕女們間的流言蜚語總是不知不覺傳遍整座城市，我聽到的是，十年前的革命中，公爵與公爵夫人逃難時遇劫而亡。<br>
            我的雙親似乎知道些什麼，但我與他們提到這事他們也都不太回答。我只知道這樣了。</p>
            <?php
        }
        else if($_POST["choice"] == 'choice5-5-2'){
            ?><p id='answer'>選擇結果：<br>
            <p id='Wieden'>維登：敝人昨天的推理，您覺得如何呢。</p>
            <p>李曼:啊，兩位昨天的推理真是精采呢，在下昨日光是理解突發狀況就已經竭盡全力了，可二位不僅臨危不亂剖析事實，還能發現事件中的一絲違和感。實在是十分佩服。</p>
            <?php
        }
        else{
            ?><p id='answer'>選擇結果：<br>
            <p id='Wieden'>維登：你與克洛維公爵是舊識嗎?</p>
            <p>李曼:我跟奧斯頓認識五年了，他昨天的生日搞的這麼不愉快，真的非常的遺憾...</p>
            <?php
        }
    }else{
       ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
       window.location.href='page5_5.php'</script><?php 
    }
    ?>
    <div id='autotype'>
            <p>李曼:與兩位的聊天真的是非常的有趣，我得先回大廳了，失陪了。</p>
            <p id='Cole'>柯爾：怎麼感覺越問疑問越多...維登，怎麼辦?</p>
            <p id='Wieden'>維登：只能繼續蒐集情報了。</p>
	<p>第五章 死神降臨 完</p></div>
		
    </div>
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
if ($contents>=6){
    $contents=$contents;
    }
else{
    savegame('6');
    }
    
?>
<?php 
    include("footer.php");
?>

