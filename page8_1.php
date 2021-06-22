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
jump(8);
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a  href="page7_6.php">上一頁</a>
    <a  href="page8_2.php">下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p>《第八章 克洛維家族》</p>
            <p>(柯爾房間內)</p>
            <p id='Cole'>柯爾：維登，你剛剛到底是怎麼了阿，推理漏洞百出，就算是我也能指出你的錯誤的。要不是你臉色真的很差，大家當場肯定會直接反駁你的，克勞德還幫你救場了，要我說他的推理都比你合理一些呢。</p>
            <p id='Wieden'>維登：我想到了一個可能性。而如果我的猜測是正確的，那個可能性所指出的兇手不太方便在魏斯曼先生面前說出來，所以我當時滿腦子都是要隨便搪塞個理由離開那個地方…</p>
            <p id='Cole'>柯爾：不方便說?是僕人嗎?應該不會是克洛維公爵吧…</p>
            <p id='Wieden'>維登：那個活死神傳說，青年艾居埃克因為仇恨而化身死神…他仇恨的原因是被家族拋棄…記得克洛維家照片中的那位兄弟嗎，假設他沒死，他決心殺了拋棄他的所有人。</p>
            <p id='Cole'>柯爾：即使他還活著也不能就這樣斷定他就是兇手吧?而且，照你這樣說，他神出鬼沒又只懲治他所謂的罪惡，根本沒有理由殺了貝絲阿，再說，整個下午我們都在各樓層走廊上晃來晃去，根本沒見到疑似的人選吧。</p>
            <p id='Wieden'>維登：我們在四點半到六點之間確實是待在走廊上的，但四點半之前可不是。</p>
            <p id='Cole'>柯爾：你在說什麼?書櫃倒下是在六點多啊?我們都聽到聲音了不是嗎。</p>
            <p id='Wieden'>維登：書櫃倒下是在六點，但子爵有可能早就死了，兇手可是有毒藥的。他製造了近乎完美的不在場證明，他殺害子爵的時間是四點半前!而當時所有傭人都在一樓工作，除了偷懶的貝絲，她應該就是撞見了兇手從子爵房間走出來…</p>
            <p id='Cole'>柯爾:你要不要先解釋一下博蒙德子爵是怎麼死的</p>
            <p id='Wieden'>維登:兇手進入房間後，趁子爵不備，將他迷暈或打暈後放躺在正面對窗戶的書櫃前，將書櫃的書通通拿下散落在地上。<br>
            書櫃最上端有一些向上倒鉤的鉤子，將一條麻繩掛在鉤子上，另一端綁上前一天去雞舍偷的雞，垂放到窗外，再將書櫃稍微向前傾斜，這樣一來只要稍微拉扯，書櫃就會順勢倒下，壓在公爵身上，將他砸死，而繩子也會脫落，從窗外掉落。<br>
            女僕六點放獵犬在庭院內放風，獵犬亂跑發現雞後因為高度較高必須撲咬，咬到後所造成的拉力使書櫃倒下，而兇手則可以擺脫嫌疑。</p>
            </div>
           
    </div>
</div>
<?php 
    include("footer.php");
?>
