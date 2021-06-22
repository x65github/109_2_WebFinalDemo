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
jump(9);
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a  href="page8_3.php">上一頁</a>
    <a  href="page9_2.php">下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound' style="display:none;" controls autoplay>
    <source src="Sound/bgm2.mp3" type="audio/mpeg">
    音檔播放失敗!瀏覽器不支援此技術!
    </audio>
    <div id='autotype'>
            <p>《第九章 死神艾居埃克》</p>
            <p>(晚上八點五十分)</p>
            
            <p>???:請進。阿，原來是克洛維公爵，您不是跟我約好九點在會面室見面的嗎?怎麼還勞煩您提早來了。</p>
            <p>奧斯頓‧克洛維：克勞德先生…你…是布雷德對嗎?</p>
            <p>克勞德：哈哈…看來您已經認出來了呢，我覺得我這幾天過的都挺低調的呢…</p>
            <p>布雷德‧克洛維：好久不見了，十五年沒見了吧，哥哥…這些年來我就算不依靠克洛維家族的力量也活得很好喔。</p>
            <p>奧斯頓‧克洛維：你不知道這些年來我一直在找你…停手吧，布雷德。你這樣跟當年那場意外中的其他親戚有什麼區別!</p>
            <p>布雷德‧克洛維：哥哥，與弟弟睽違十五年的感人再會，你就這樣說讓我好傷心阿…當然有區別了，當年那些漠視爸媽的叛徒，我現在讓他們罪有應得，難道不對嗎?<br>
            啊，也難怪你會這樣想，真不愧是溫柔的克洛維公爵呢。<br>
            哥哥，你知道當年爸媽是怎麼死的嗎?他感染了呼吸病，沒錢請醫生救治，我找遍了所有可能幫助我們的人，沒有一個願意幫助的，一個都沒有!<br>
            父親先走了一步，我揹著母親去了我們曾經捐款過的窮人醫院，好不容易找到願意免費舊制母親的醫生，但醫生說他只能再活三天…<br>
            我陪母親過完他人生中的最後三天，回到了躺著死去的父親的小屋子，老鼠正在吃他的遺體…我好想吐...沒多久我也感染了…<br>
            哥哥，你告訴我，平時如此善良、對世上所有東西都很仁慈的父親母親，為什麼非得受這種罪?<br>
            太奇怪了，惡人相安無事，好人遇害，這太奇怪了…當時也許就是靠著恨意活下來的吧。<br>
            我的病好了，從此我的腦中就只有復仇了，成為死神，制裁罪惡…</p>
            </div>
         
    </div>
</div>
<?php 
    include("footer.php");
?>
