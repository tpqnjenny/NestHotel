<?php
	session_start();
?>
<header id="header">
  <ul class="top_menu">
    <?php
      if(!$_SESSION['userid']){
    ?>
    <li><a href="login_form.php">LOGIN</a></li>
    <li><a href="member_form.php">JOIN</a></li>
    <li><a href="#">고객지원</a></li>
    <li><select name="LANGUAGE" id="lang">
      <option value="KOREAN">KOR</option>
      <option value="KOREAN">ENG</option>
      <option value="KOREAN">JAP</option>
      <option value="KOREAN">CHN</option>
    </select></li>
  </ul>
  <?php
    } else{
  ?>
  <ul class="top_menu">
    <li><?php echo $_SESSION['usernick']?> 님</li>
    <li><a href="logout.php">LOGOUT</a></li>
    <li><a href="#">JOIN</a></li>
    <li><a href="#">고객지원</a></li>
    <li><select name="LANGUAGE" id="lang">
      <option value="KOREAN">KOR</option>
      <option value="KOREAN">ENG</option>
      <option value="KOREAN">JAP</option>
      <option value="KOREAN">CHN</option>
    </select></li>
  </ul>
  <?php
    }
  ?>
  <nav class="navi cf">
    <h1 class="logo"><a href="index.php"><img src="img/main/logo.gif" alt="LOGO"></a></h1>
    <ul class="menu">
      <li class="resv"><a href="#">RESERVATION</a></li>
      <li class="m1"><a href="#">PROMOTIONS</a></li>
      <li class="m2"><a href="#">ACCOMMODATION</a></li>
      <li class="m3"><a href="#">DINING</a></li>
      <li class="m4"><a href="#">MEETING&EVENT</a></li>
      <li class="m5"><a href="#">FACILITIES</a></li>
      <li class="m6"><a href="#">INFINITY POOL</a></li>
      <li class="m7"><a href="#">ABOUT</a></li>
    </ul>
    <div class="sub">
      <ul class="s1">
        <li><a href="#">ROOM OFFER</a></li>
        <li><a href="#">DINING & EVENT</a></li>
      </ul>
      <ul class="s2">
        <li><a href="#">STANDARD</a></li>
        <li><a href="#">DELUXE</a></li>
        <li><a href="#">SUITE</a></li>
      </ul>
      <ul class="s3">
        <li><a href="#">PLATZ</a></li>
        <li><a href="#">KUNST LOUNGE</a></li>
        <li><a href="#">LUFT THE BAR</a></li>
        <li><a href="#">ROOM SERVICE</a></li>
        <li><a href="#">NEST DELI</a></li>
      </ul>
      <ul class="s4">
        <li><a href="#">BAUM HALL</a></li>
        <li><a href="#">STEIN HALL</a></li>
        <li><a href="#">GARDEN</a></li>
        <li><a href="#">WEDDING</a></li>
        <li><a href="#">첫돌</a></li>
      </ul>
      <ul class="s5">
        <li><a href="#">FITNESS & SOUNA</a></li>
        <li><a href="#">KIDS ZONE</a></li>
        <li><a href="#">NEST PARK</a></li>
        <li><a href="#">CAFETERIA</a></li>
      </ul>
      <ul class="s6">
        <li><a href="#">수영장 시설소개</a></li>
        <li><a href="#">운영 및 요금 안내</a></li>
        <li><a href="#">부대 시설</a></li>
        <li><a href="#">이용 안내</a></li>
      </ul>
      <ul class="s7">
        <li><a href="about.html">호텔 소개</a></li>
        <li><a href="#">오시는 길</a></li>
        <li><a href="#">HOTEL MAP</a></li>
        <li><a href="#">주변 명소</a></li>
        <li><a href="#">ARTICLE</a></li>
      </ul>
    </div>
  </nav>
</header>
<div id="theader">
  <h1 class="tlogo"><a href="index.php"><img src="img/main/logo.gif" alt="LOGO"></a></h1>
  <div class="menubar">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<nav id="tnavi">
  <div class="ttop cf">
    <?php
      if(!$_SESSION['userid']){
    ?>
    <h2><a href="login_form.php">Login</a></h2>
    <img src="img/icon/xmark.png" alt="close" class="xmark">
    <?php
      } else{
    ?>
    <h2><?php echo $_SESSION['username']?> 님 </h2><a href="logout.php" class="logout">Logout</a>
    <img src="img/icon/xmark.png" alt="close" class="xmark">
    <?php
      }
    ?>
  </div>
  <hr>
  <ul class="tmenu">
    <li>
      <a href="#">Reservation</a>
    </li>
    <li>
      <a href="#">Promotions
        <span></span>
        <span></span>
      </a>
      <ul class="tsub">
        <li><a href="#">ROOM OFFER</a></li>
        <li><a href="#">DINING & EVENT</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Accommodation
        <span></span>
        <span></span>
      </a>
      <ul class="tsub">
        <li><a href="#">STANDARD</a></li>
        <li><a href="#">DELUXE</a></li>
        <li><a href="#">SUITE</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Dining
        <span></span>
        <span></span>
      </a>
      <ul class="tsub">
        <li><a href="#">PLATZ</a></li>
        <li><a href="#">KUNST LOUNGE</a></li>
        <li><a href="#">LUFT THE BAR</a></li>
        <li><a href="#">ROOM SERVICE</a></li>
        <li><a href="#">NEST DELI</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Meeting & Event
        <span></span>
        <span></span>
      </a>
      <ul class="tsub">
        <li><a href="#">BAUM HALL</a></li>
        <li><a href="#">STEIN HALL</a></li>
        <li><a href="#">GARDEN</a></li>
        <li><a href="#">WEDDING</a></li>
        <li><a href="#">첫돌</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Facilities
        <span></span>
        <span></span>
      </a>
      <ul class="tsub">
        <li><a href="#">FITNESS & SAUNA</a></li>
        <li><a href="#">KIDS ZONE</a></li>
        <li><a href="#">NEST PARK</a></li>
        <li><a href="#">CAFETERIA</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Infinity Pool
        <span></span>
        <span></span>
      </a>
      <ul class="tsub">
        <li><a href="#">수영장 시설소개</a></li>
        <li><a href="#">운영 및 요금 안내</a></li>
        <li><a href="#">부대 시설</a></li>
        <li><a href="#">이용 안내</a></li>
      </ul>
    </li>
    <li>
      <a href="#">About
        <span></span>
        <span></span>
      </a>
      <ul class="tsub">
        <li><a href="about.html">호텔 소개</a></li>
        <li><a href="#">오시는 길</a></li>
        <li><a href="#">HOTEL MAP</a></li>
        <li><a href="#">주변 명소</a></li>
        <li><a href="#">ARTICLE</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div id="mheader">
  <h1 class="mlogo"><a href="index.php"><img src="img/main/logo.gif" alt="LOGO"></a></h1>
  <div class="mham">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<nav id="mnavi">
  <div class="mtop">
    <?php
      if(!$_SESSION['userid']){
    ?>
    <h2><a href="login_form.php">Login</a></h2>
    <img src="img/icon/xmark.png" alt="close" class="mxmark">
    <?php
      } else{
    ?>
    <h2><?php echo $_SESSION['username']?> 님 </h2><a href="logout.php" class="logout">Logout</a>
    <img src="img/icon/xmark.png" alt="close" class="mxmark">
    <?php
      }
    ?>
  </div>
  <hr>
  <ul class="mmenu">
    <li>
      <a href="#">Reservation</a>
    </li>
    <li>
      <a href="#">Promotions
        <span></span>
        <span></span>
      </a>
      <ul class="msub">
        <li><a href="#">ROOM OFFER</a></li>
        <li><a href="#">DINING & EVENT</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Accommodation
        <span></span>
        <span></span>
      </a>
      <ul class="msub">
        <li><a href="#">STANDARD</a></li>
        <li><a href="#">DELUXE</a></li>
        <li><a href="#">SUITE</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Dining
        <span></span>
        <span></span>
      </a>
      <ul class="msub">
        <li><a href="#">PLATZ</a></li>
        <li><a href="#">KUNST LOUNGE</a></li>
        <li><a href="#">LUFT THE BAR</a></li>
        <li><a href="#">ROOM SERVICE</a></li>
        <li><a href="#">NEST DELI</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Meeting & Event
        <span></span>
        <span></span>
      </a>
      <ul class="msub">
        <li><a href="#">BAUM HALL</a></li>
        <li><a href="#">STEIN HALL</a></li>
        <li><a href="#">GARDEN</a></li>
        <li><a href="#">WEDDING</a></li>
        <li><a href="#">첫돌</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Facilities
        <span></span>
        <span></span>
      </a>
      <ul class="msub">
        <li><a href="#">FITNESS & SAUNA</a></li>
        <li><a href="#">KIDS ZONE</a></li>
        <li><a href="#">NEST PARK</a></li>
        <li><a href="#">CAFETERIA</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Infinity Pool
        <span></span>
        <span></span>
      </a>
      <ul class="msub">
        <li><a href="#">수영장 시설소개</a></li>
        <li><a href="#">운영 및 요금 안내</a></li>
        <li><a href="#">부대 시설</a></li>
        <li><a href="#">이용 안내</a></li>
      </ul>
    </li>
    <li>
      <a href="#">About
        <span></span>
        <span></span>
      </a>
      <ul class="msub">
        <li><a href="about.html">호텔 소개</a></li>
        <li><a href="#">오시는 길</a></li>
        <li><a href="#">HOTEL MAP</a></li>
        <li><a href="#">주변 명소</a></li>
        <li><a href="#">ARTICLE</a></li>
      </ul>
    </li>
  </ul>
</nav>