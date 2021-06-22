<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page6_2.php">上一頁</a>
        <a href="page6_4.php">| 下一頁</a>
    </div>
    <div id='main'>
    
    <div id='autotype'>
		<p>克勞德：這真是非常好的一個消息呢，那就麻煩妳了。</p>
            <p>女僕沙拉：不會的，是我的榮幸。那我們先去閣樓吧，她時常在那邊。先生們，請往這邊走。</p>
            <p id='Wieden'>維登：(離走到閣樓有段距離，要不要開個話題聊聊呢…)</p>
            <form name="myForm" action='page6_4.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>請做出選擇</legend>
                    <input type="radio" name="choice" value="choice6-3-1" >克勞德你覺得貝絲跟這案件有關聯嗎?<br>
                    <input type="radio" name="choice" value="choice6-3-2" >......<br>
                    <input type="submit" value="確定" />
                </fieldset>
            </form>
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>


