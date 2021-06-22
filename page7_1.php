<?php 
    include("header.php");
?>
<?php 
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
function jump($now){
    if (readgame()<$now){
    echo '<script language="JavaScript">;alert("未解鎖此頁面，即將跳轉至首頁");location.href="home.php";</script>;';
        }
    }
jump(7);
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page6_5.php">上一頁</a>
        <a href="page7_2.php">| 下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound2' style="display:none;" controls >
    <source src="Sound/girlyell.mp3" type="audio/mpeg">
    音檔播放失敗!瀏覽器不支援此技術!
    </audio>
    <div id='autotype'>
            <p>《第七章 支離破碎》</p>
            </div><div id='autotype2'>
            <p>(女生尖叫聲)</p>
            <p id='Cole'>柯爾：是沙拉的聲音，在樓下!快走!</p>
            <p>...</p>
            <p id='Wieden'>維登：!博蒙德子爵…是警語…</p>
            <p id='Cole'>柯爾：他被壓在書櫃下了！應該是剛剛才倒下的，快把書櫃移開急救!</p>
            <p>。。。</p>
            <p>(博蒙德子爵房間內)</p>
            <p>克勞德：博蒙德子爵，下午都獨自待在客房裡，六點多房間裡傳出非常大的聲響，開門後被發現被壓倒在書櫃下…雖有急救但已經沒了心跳…</p>
            <p id='Wieden'>維登：可惡…又被兇手搶先一步…慌忙中殺害貝絲留下的證據，兇手居然反過來利用這點拖延我們爭取作案時間…又輸了…</p>
            <p id='Cole'>柯爾: 這個櫃子真重!魏斯曼先生，櫃子突然倒塌，你有什麼頭緒嗎?</p>
            <p>魏斯曼:各房間的家具我們都有定期保養的，雖然老舊，但絕對不至於因為失修而突然倒塌…</p>
            <p id='Cole'>柯爾:但這個櫃子的底座雖然不明顯但有嚴重磨損…是兇手刻意造成的嗎…</p>
            <p>魏斯曼:但是光是這個櫃子加上這麼多的書籍，就算是一個成年人也很難搬動的。</p>
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>