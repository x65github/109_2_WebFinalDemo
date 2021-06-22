<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a  href="page8_1.php">上一頁</a>
    <a  href="page8_3.php">下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p id='Wieden'>維登：我總有股直覺，克洛維家族的秘密跟這起案件一定有關係。如果以這個為前提，我的推理就會是正確的。</p>
            <p id='Cole'>柯爾：時間差不多了，我們去找李曼吧，如果李曼公爵跟夫人願意說出來，我們就能確信也不一定。</p>
            <p>(李曼房間內)</p>
            <p id='Wieden'>維登：李曼老公爵、公爵夫人，初次見面。既然兩位答應與我們見面，就代表你們已經有了說出真相的想法，那我就省時間直接問了，請原諒我的失禮。十五年前的革命，克洛維家族到底發生了什麼事?</p>
            <p>李曼老公爵：當時一切都來的很匆忙，接到消息後這座城鎮的貴族都去鄰國避難了，大家都做好了再也回不來的準備…我聽說歐費克洛維他們遭到強盜搶劫了，財寶都沒了。當時我跟夫人也過得很驚險，根本沒機會與他們聯絡…<br>
            再見到他們時，是布雷爾‧克洛維，也就是現在克洛維公爵的兄弟來找我們。<br>
            他說瑪莉老公爵跟奧斯頓(現在的克洛維公爵)與布雷爾他們失聯，並且歐費和他夫人染疾了，沒錢醫治，找了很多親戚都沒有人願意幫忙，只能來尋求我們的幫助。<br>
            但當時那種情況，誰都不保證能回法西斯!我也害怕我支付了醫藥費，下一個染疾又沒錢的會輪到我…所以我選擇了拒絕他，他帶著恨意的說著你們會得到報應的，之後就離去了。<br>
            不久後我就聽說他們兩位過世了，布雷爾也染疫了，之後就再也沒聽說過他們的消息了。<br>
            兩年後，革命風頭過去了，我們終於回到法西斯，才得知瑪莉老公爵跟奧斯頓公爵沒事，我跪著懇求他們的原諒，他們兩位都是非常溫柔的人，原諒了我的過錯。<br>
            但這幾年我睡的一直不安穩，今天願意跟你們講這些，也是因為我想消除心中的罪惡感…</p>
            <p id='Wieden'>維登：布雷爾幸運活了下來，他成為了活死神，立誓報復”背叛”他的人…</p>
            <p id='Cole'>柯爾：原來是這樣…等等，這樣不妙，這樣下去李曼公爵也會被殺的！</p>
            <p id='Wieden'>維登：被殺害的人都是當年拒絕幫助布雷爾的人…他選了一次能聚集所有親戚的聚會，決心消除「罪惡」…這樣也解釋了為什麼兇手如此了解城堡的構造及僕人們的行動了。</p>
            <p id='Cole'>柯爾：我們得趕緊找出布雷爾才行，隱瞞身分混入了宴會，為什麼都沒有人注意到…</p>
            </div>
         
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
if ($contents>=9){
    $contents=$contents;
    }
else{
    savegame('9');
    }
    
?>
<?php 
    include("footer.php");
?>
