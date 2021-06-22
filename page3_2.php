<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a target="_blank" href="page3_1.php">上一頁</a>
    <a target="_blank" href="page3_3.php">下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
		<p>奧斯頓‧克洛維:維登先生，魏斯曼一家世代都與克洛維家族同生共死，荷鲁斯更是絕對不可能殺人的。</p>
            <p id='Wieden'>維登：公爵請放心，我一定會給您滿意的答覆。</p>
            <p id='Wieden'>維登：這次看來，嫌疑人應該是全員。</p>
            <p id='Cole'>柯爾：是因為誰都能找個人少的地方撐傘爬窗出去殺人嗎?</p>
            <p id='Wieden'>維登：外頭下著大雨，所以基本上不太可能是這樣</p>
            <p id='Cole'>柯爾：這樣一來嫌疑最大的果然是凱爾特小姐?</p>
            <form name="myForm" action='page3_3.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend><p id='Wieden'>維登：不，他也可能不是被石頭砸死的，你們不覺得____很奇怪嗎?</p></legend>
                    <input type="radio" name="choice" value="choice3-1" >紙條
                    <input type="radio" name="choice" value="choice3-2" >女傭證詞
                    <input type="radio" name="choice" value="choice3-3" >受傷痕跡
                    <input type="submit" value="確定" />
                </fieldset>
            </form></div>
    </div>
</div>
<?php 
    include("footer.php");
?>
