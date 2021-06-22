<html>
<head>
<meta charset="utf-8"/>
<title>網頁小說DEMO</title>
<link href="Styles/Site.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
function nextpage(){
    if (document.forms["myForm"]["choice"].value == ''){
        alert('尚未選擇結果');
        return false;
    }
}
</script>
</head>
<body>
    <div id="outer-wrapper">
        <div id="setting">
        <span id="title">章節：</span>
        <a href="page1_1.php">章節一</a>
        <a href="page2_1.php">章節二</a>
        <a href="page3_1.php">章節三</a>
        <a href="page4_1.php">章節四</a><br>
        <a href="page5_1.php">　　　章節五</a>
        <a href="page6_1.php">章節六</a>
        <a href="page7_1.php">章節七</a>
        <a href="page8_1.php">章節八</a>
        <a href="page9_1.php">章節九</a>
        </div>