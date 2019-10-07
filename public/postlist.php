<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>postlist</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="__1280___6__________________________________3.css"/>
<script id="applicationScript" type="text/javascript" src="__1280___6__________________________________3.js"></script>


 <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
 <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC4jN6MCZ-GN6RXg6rtNwGmNEDhBCVpvXQ",
    authDomain: "writing-web-e3771.firebaseapp.com",
    databaseURL: "https://writing-web-e3771.firebaseio.com",
    projectId: "writing-web-e3771"
    storageBucket: "writing-web-e3771.appspot.com",
    messagingSenderId: "184184590919",
    appId: "1:184184590919:web:8466f91bd0b1944844d762"
  };
  firebase.initializeApp(firebaseConfig);

  // make auth and firestore references
  const auth = firebase.auth();
  const db = firebase.firestore();

</script>
</head>
<body>

	<form enctype="multipart/form-data" method="post">
<div id="__1280___6__________________________________3">
	<svg class="____511">
		<rect fill="rgba(99,103,128,1)" id="____511" rx="0" ry="0" x="0" y="0" width="1280" height="33">
		</rect>
	</svg>
	<svg class="____534">
		<rect fill="rgba(99,103,128,1)" id="____534" rx="0" ry="0" x="0" y="0" width="1280" height="33">
		</rect>
	</svg>
	<div id="____">
		<span>끄적끄적</span>
	</div>
	<svg class="____538">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____538" rx="0" ry="0" x="0" y="0" width="832" height="552">
		</rect>
	</svg>
	<script language="javascript">
		var dbase=db.collection('Writing/data').get();
	</script>
	<?php
	//sql 에서 불러오는 걸 firestore로 바꾸는 걸 못하겠어...ㅜㅜ

          $dbase = "<script> document.write(dbase);</script>" 

            while($board = $dbase->fetch_array())
            {
              $title=$board["title"]; 
              if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]); //title이 30을 넘어서면 ...표시
              }
        ?>
        <table class="____538" id="____538" border="0" style="visibility: hidden;">
      <tbody>
        <tr>
          <td width="200"><?php echo $board['subject']; ?></td>
          <td><a href="read.php"><?php echo $title;?></a></td>
          <td><?php echo $board['date'];?></td>
          <td><input type="checkbox" name="savecheck"></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
<!--
<?
while($row=mysql_fetch_array($result))
{

?>

<tr>
    <td height=20  bgcolor=white>&nbsp;
        <a href=read.php?id=<?=$row[subject]?>&no=<?=$no?>><?=strip_tags($row[subject], '<b><i>');?></a>
    </td>
    <td align=center height=20 bgcolor=white>
        <font  color=black>
            <a href="mailto:<?=$row[title]?>"><?=$row[title]?></a>
        </font>
    </td>
    <td align=center height=20 bgcolor=white>
        <font  color=black><?=$row[date]?></font>
   
</tr>
-->
<?php

$start_page = (int)($current_page / $page_list_size) * $page_list_size;

$end_page = $start_page + $page_list_size - 1;
if ($total_page < $end_page) $end_page = $total_page;

if ($start_page >= $page_list_size) {
    $prev_list = ($start_page - 1)*$page_size;
    echo  "<a href=\"$PHP_SELF?no=$prev_list\">◀</a>\n";//수정해야됨
}

for ($i=$start_page;$i <= $end_page;$i++) {

$page=$page_size*$i;
$page_num = $i+1;

    if ($no!=$page){ 
        echo "<a href=\"$PHP_SELF?no=$page\">";
     }
    
    echo " $page_num "; 
    
    if ($no!=$page){
        echo "</a>";
    }

}

if($total_page > $end_page)
{
    $next_list = ($end_page + 1)* $page_size;
    echo "<a href=$PHP_SELF?no=$next_list>▶</a><p>";
}
?>

	<svg class="____525">
		<rect fill="rgba(247,236,235,1)" stroke="rgba(233,181,177,1)" stroke-width="3px" stroke-linejoin="round" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____525" rx="20" ry="20" x="0" y="0" width="785" height="61">
		</rect>
	</svg>
	<svg class="___385" viewBox="0 0 81.536 25">
		<path fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="___385" d="M 0 0 L 81.5361328125 0 L 81.5361328125 25 L 30.36016082763672 25 L 0 25 L 0 0 Z">
			<div id="___385"></div><input type="text" class="___385" id="___385" name="year" style="background-color: transparent; border: 0 solid black">
		</path>
	</svg>
	<div id="_">
		<span>년</span>
	</div>
	<svg class="____527">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____527" rx="0" ry="0" x="0" y="0" width="49" height="25">
			<div id="____527"></div><input type="text" class="____527" id="____527" name="month" style="background-color: transparent; border: 0 solid black">
		</rect>
	</svg>
	<div id="__A35_Text_3">
		<span>월</span>
	</div>
	<svg class="____528">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____528" rx="0" ry="0" x="0" y="0" width="49" height="25">
			<div id="____528"></div><input type="text" class="____528" id="____528" name="day" style="background-color: transparent; border: 0 solid black">
		</rect>
	</svg>
	<div id="__A35_Text_4">
		<span>일</span>
	</div>
	<svg class="____529">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____529" rx="0" ry="0" x="0" y="0" width="259" height="25">
			<div id="____529"></div>
			<input type="text" class="____529" id="____529" name="subj" placeholder="과목 입력" style="background-color: transparent; border: 0 solid black">
		</rect>
	</svg>
	<svg class="____540">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____540" rx="0" ry="0" x="0" y="0" width="832" height="33">
			<table class="____540" id="____540" style="text-align: center;"><td width=200>과목</td><td>제목</td><td>일시</td></table>
		</rect>
	</svg>
	
	<div id="___470"> 
		
		<svg class="___359" viewBox="0 0 40.417 40.417">
			<path fill="rgba(255,255,255,1)" id="___359" d="M 20.20849609375 0 C 31.36934089660645 0 40.4169921875 9.047652244567871 40.4169921875 20.20849609375 C 40.4169921875 31.36934089660645 31.36934089660645 40.4169921875 20.20849609375 40.4169921875 C 9.047652244567871 40.4169921875 0 31.36934089660645 0 20.20849609375 C 0 9.047652244567871 9.047652244567871 0 20.20849609375 0 Z">
			</path>

		</svg>
		<svg class="___373" viewBox="3 3 23 23">
			<path fill="rgba(84,88,113,1)" id="___373" d="M 19.43796348571777 17.46540832519531 L 18.39908409118652 17.46540832519531 L 18.03087425231934 17.11034774780273 C 19.31961059570313 15.61120700836182 20.09548187255859 13.66495037078857 20.09548187255859 11.54774188995361 C 20.09548187255859 6.826757431030273 16.26872444152832 2.999999761581421 11.54774188995361 2.999999761581421 C 6.826757431030273 2.999999761581421 2.999999761581421 6.826757431030273 2.999999761581421 11.54774188995361 C 2.999999761581421 16.26872444152832 6.826757431030273 20.09548187255859 11.54774188995361 20.09548187255859 C 13.66495037078857 20.09548187255859 15.61120700836182 19.31961059570313 17.11034774780273 18.03087425231934 L 17.46540832519531 18.39908409118652 L 17.46540832519531 19.43796348571777 L 24.04059410095215 25.99999809265137 L 25.99999809265137 24.04059410095215 L 19.43796348571777 17.46540832519531 Z M 11.54774188995361 17.46540832519531 C 8.273299217224121 17.46540832519531 5.630074024200439 14.82218360900879 5.630074024200439 11.54774188995361 C 5.630074024200439 8.273299217224121 8.273299217224121 5.630074024200439 11.54774188995361 5.630074024200439 C 14.82218360900879 5.630074024200439 17.46540832519531 8.273299217224121 17.46540832519531 11.54774188995361 C 17.46540832519531 14.82218360900879 14.82218360900879 17.46540832519531 11.54774188995361 17.46540832519531 Z">
			</path>
			
			<div id="___359"><input type="submit" class="___359" id="___359" action="search.php" name="search" value="" style="background-color: transparent; border: 0 solid black"></div>
		</svg>
	</div>
	<div id="_1_">
		<span>-1-</span>
	</div>
	<svg class="____565">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____565" rx="0" ry="0" x="0" y="0" width="832" height="39">
		</rect>
	</svg>
	<svg class="____566">
		<rect fill="rgba(230,219,218,1)" stroke="rgba(240,188,184,1)" stroke-width="2px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____566" rx="11" ry="11" x="0" y="0" width="75" height="22">
		</rect>
	</svg>
	<div id="______">
		<span>다음 페이지</span>
	</div>
	<svg class="____567">
		<rect fill="rgba(230,219,218,1)" stroke="rgba(240,188,184,1)" stroke-width="2px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____567" rx="11" ry="11" x="0" y="0" width="75" height="22">
		</rect>
	</svg>
	<div id="_______A35_Text_11">
		<span>이전 페이지</span>
	</div>
	<!--
	<svg class="__216">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__216" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__217">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__217" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__218">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__218" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__219">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__219" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__220">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__220" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__221">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__221" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__222">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__222" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__223">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__223" d="M 0 0 L 830 0">
		</path>
	</svg>
	<svg class="__224">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="__224" d="M 0 0 L 830 0">
		</path>
	</svg>
-->
	<div id="_____A35_Text_12">
		<span>수업일 </span>
	</div>	
	<form enctype="multipart/form-data" method="post" action="save.php">
	<svg class="____578">
		<rect fill="rgba(230,219,218,1)" stroke="rgba(240,188,184,1)" stroke-width="2px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____578" rx="11" ry="11" x="0" y="0" width="75" height="22">
		</rect>
	</svg>
	<div id="SAVE">
		<span>SAVE</span>
	</div>
	<svg class="____558">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____558" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____559">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____559" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____560">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____560" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____561">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____561" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____562">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____562" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____563">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____563" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____564">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____564" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____579">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____579" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____580">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____580" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<svg class="____581">
		<rect fill="rgba(255,255,255,1)" stroke="rgba(205,92,92,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="____581" rx="0" ry="0" x="0" y="0" width="20" height="20">
		</rect>
	</svg>
	<div id="_____A35_Text_14">
		<span>내 노트</span>
	</div>
	<div id="_____A35_Text_15">
		<span>공개노트</span>
	</div>
	<div id="HOME">
		<span>HOME</span>
	</div>
	<div id="___A35_Text_17">
		<span>설정</span>
	</div>
</div>
</body>
</html>