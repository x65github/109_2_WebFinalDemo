<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page6_5.php">上一頁</a>
        <a href="page6_7.php">| 下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p id='Cole'>柯爾：不過，這次的兇手應該跟那個死神是不同人吧。</p>
            <p id='Wieden'>維登：怎麼可能是不同人啊?時間點這麼近，有兩個兇手的話也太不合理了吧，除非那兩個人是同伴。</p>
            <p id='Cole'>柯爾：因為這次他沒有放警告語阿。</p>
            <p id='Wieden'>維登：大概兇手這次很著急吧，…等等。…柯…尤金你可能真的蠻適合當偵探也說不定…總之現在沒時間了!</p>
            <p>克勞德：原來如此，走吧，我們得趕緊把其他客人聚集起來。</p>
            <p id='Cole'>柯爾：???為什麼你們兩個要突然跑起來啊!</p>
            <p id='Wieden'>維登：我有不好的預感！我們分組去各樓層每間客房確認賓客的安危吧。</p>
            <form name="myForm" action='page6_7.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>請做出選擇</legend>
                    <input type="radio" name="choice" value="choice6-5-1" >跟柯爾一組
                    <input type="radio" name="choice" value="choice6-5-2" >跟沙拉一組
                    <input type="radio" name="choice" value="choice6-5-3" >跟克勞德一組
                    <input type="submit" value="確定" /></fieldset></form></div>
    </div>

<?php 
    include("footer.php");
?>

