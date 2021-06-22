<?php 
    include("header.php");
?>
    <div id="setting">
        <span id="title">設定：</span>
        <a target='_blank' href="gameset.php">系統設定</a>
    </div>
    <div id='autotype'>
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
</body>
</html>