<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>네스트 호텔</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header_footer.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="img/icon/favicon.ico">
  <script src="js/jquery-1.11.2.min.js"></script>  
  <script src="js/menu.js"></script>
</head>
<body>
  <section id="PC">
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
        <li><?php echo $_SESSION['usernick'] ?> 님</li>
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
    <div id="login">
      <h2>Log in <span>로그인</span></h2>
      <hr>
      <p class="intro">이곳은 당신만의 은신처, 네스트 호텔입니다.</p>
      <form action="login.php" name="member_form" method="post" class="form">
        <p>
          <input type="text" placeholder="아이디 입력" class="account" name="id" required>
          <input type="password" placeholder="비밀번호 입력" class="account" name="pw" required>
        </p>
        <button type="submit">로그인</button>
      </form>
      <p class="chk">
        <input type="checkbox" id="rememberid" checked>
        <label for="rememberid">아이디 저장</label>
      </p>
      <ul class="else">
        <li><a href="member_form.php" class="join">회원가입</a></li>
        <li><a href="#">아이디 찾기</a></li>
        <li><a href="#">비밀번호 찾기</a></li>
      </ul>
    </div>
    <footer id="footer">
      <div class="top">
        <ul>
          <li><a href="#">사이트맵</a></li>
          <li><a href="#">문의하기</a></li>
          <li><a href="#">셔틀버스 정보</a></li>
          <li><a href="#">분실물 찾기</a></li>
          <li><a href="#">파트너십 문의</a></li>
          <li class="bold"><a href="#">개인정보 처리방침</a></li>
          <li><a href="#">이용약관</a></li>
          <li><a href="#">채용정보</a></li>
        </ul>
        <ul class="sns">
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
        </ul>
      </div>
      <div class="bottom">
        <div class="data">
          <div class="first">
            <span>주소 </span><address>인천광역시 중구 영종해안남로 19-5 (운서동 2877)</address>
            <p><span>대표전화</span> 032-743-9000</p>
            <p><span>이메일 </span><a href="mailto:info@nesthotel.co.kr">info@nesthotel.co.kr</a></p>
          </div>
          <div class="second">
            <p><span>상호명</span> 네스트(주)</p>
            <p><span>대표이사</span> 김영재</p>
            <p><span>사업자등록번호</span> 535-86-01931</p>
            <p><span>통신판매업신고</span> 2021-인천중구-0087</p>
            <p class="copyright">&copy; 2014 by nest hotel Co., Ltd.</p>
          </div>
        </div>
        <div class="img">
          <a href="#"><img src="img/main/footer_designhotels.png" alt="design hotels" class="design"></a>
          <a href="#"><img src="img/main/footer_spg.png" alt="spg" class="spg"></a>
        </div>
      </div>
    </footer>
  </section>
  <section id="Tablet">
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
        <h2><a href="#">Login</a></h2>
        <img src="img/icon/xmark.png" alt="close" class="xmark">
        <?php
          } else{
        ?>
        <h2><?php echo $_SESSION['username'] ?> 님 </h2><a href="logout.php" class="logout">Logout</a>
        <img src="img/icon/xmark.png" alt="close" class="xmark">
        <?
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
            <li><a href="#">호텔 소개</a></li>
            <li><a href="#">오시는 길</a></li>
            <li><a href="#">HOTEL MAP</a></li>
            <li><a href="#">주변 명소</a></li>
            <li><a href="#">ARTICLE</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="tlogin">
      <h2>Log in</h2>
      <p class="tintro">이곳은 당신만의 은신처, 네스트 호텔입니다.</p>
      <form action="login.php" name="member_form" method="post" class="tform">
        <p>
          <input type="text" placeholder="아이디 입력" class="taccount" name="id" required>
          <input type="password" placeholder="비밀번호 입력" class="taccount" name="pw" required>
        </p>
        <p class="tchk">
          <input type="checkbox" id="rememberid" checked>
          <label for="rememberid">아이디 저장</label>
        </p>
        <button type="submit">로그인</button>
      </form>
      <div class="tjoin"><a href="member_form.php">회원가입</a></div>
      <ul class="telse">
        <li><a href="#">아이디 찾기</a></li>
        <li><a href="#">비밀번호 찾기</a></li>
      </ul>
    </div>
    <div id="tfooter">
      <div class="tftop">
        <ul>
          <li><a href="#">사이트맵</a></li>
          <li><a href="#">문의하기</a></li>
          <li><a href="#">셔틀버스 정보</a></li>
          <li><a href="#">분실물 찾기</a></li>
        </ul>
        <ul>
          <li><a href="#">파트너십 문의</a></li>
          <li class="bold"><a href="#">개인정보 처리방침</a></li>
          <li><a href="#">이용약관</a></li>
          <li><a href="#">채용정보</a></li>
        </ul>
      </div>
      <div class="tfbottom">
        <ul class="tsns">
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
        </ul>
        <ul class="tdata">
          <li><span>주소 </span><address>인천광역시 중구 영종해안남로 19-5 (운서동 2877)</address></li>
          <li><span>대표전화</span> 032-743-9000</li>
          <li><span>이메일 </span><a href="mailto:info@nesthotel.co.kr">info@nesthotel.co.kr</a></li>
          <li><span>상호명</span> 네스트(주)</li>
          <li><span>대표이사</span> 김영재</li>
          <li><span>사업자등록번호</span> 535-86-01931</li>
          <li><span>통신판매업신고</span> 2021-인천중구-0087</li>
          <li>&copy; 2014 by nest hotel Co., Ltd.</li>
        </ul>
        <div class="timg">
          <a href="#"><img src="img/main/footer_designhotels.png" alt="design hotels" class="tdesign"></a>
          <a href="#"><img src="img/main/footer_spg.png" alt="spg" class="tspg"></a>
        </div>
      </div>
    </div>
  </section>
  <section id="Mobile">
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
        <h2><a href="#">Login</a></h2>
        <img src="img/icon/xmark.png" alt="close" class="mxmark">
        <?php
          } else{
        ?>
        <h2><?php echo $_SESSION['username'] ?> 님 </h2><a href="logout.php" class="logout">Logout</a>
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
            <li><a href="#">호텔 소개</a></li>
            <li><a href="#">오시는 길</a></li>
            <li><a href="#">HOTEL MAP</a></li>
            <li><a href="#">주변 명소</a></li>
            <li><a href="#">ARTICLE</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="mlogin">
      <h2>Log in</h2>
      <p class="mintro">이곳은 당신만의 은신처, 네스트 호텔입니다.</p>
      <form action="login.php" name="member_form" method="post" class="mform">
        <p>
          <input type="text" placeholder="아이디 입력" class="maccount" name="id" required>
          <input type="password" placeholder="비밀번호 입력" class="maccount" name="pw" required>
        </p>
        <p class="mchk">
          <input type="checkbox" id="rememberid" checked>
          <label for="rememberid">아이디 저장</label>
        </p>
        <button type="submit">로그인</button>
      </form>
      <div class="mjoin"><a href="member_form.php">회원가입</a></div>
      <ul class="melse">
        <li><a href="#">아이디 찾기</a></li>
        <li><a href="#">비밀번호 찾기</a></li>
      </ul>
    </div>
    <div id="mfooter">
      <div class="mftop">
        <ul>
          <li><a href="#">사이트맵</a></li>
          <li><a href="#">문의하기</a></li>
          <li><a href="#">셔틀버스 정보</a></li>
          <li><a href="#">분실물 찾기</a></li>
          <li><a href="#">파트너십 문의</a></li>
          <li class="bold"><a href="#">개인정보 처리방침</a></li>
          <li><a href="#">이용약관</a></li>
          <li><a href="#">채용정보</a></li>
        </ul>
      </div>
      <div class="mfbottom">
        <ul class="msns">
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
          <li><a href="#"><div></div></a></li>
        </ul>
        <ul class="mdata">
          <li><span>주소 </span><address>인천광역시 중구 영종해안남로 19-5 (운서동 2877)</address></li>
          <li><span>대표전화</span> 032-743-9000</li>
          <li><span>이메일 </span><a href="mailto:info@nesthotel.co.kr">info@nesthotel.co.kr</a></li>
          <li><span>상호명</span> 네스트(주)</li>
          <li><span>대표이사</span> 김영재</li>
          <li><span>사업자등록번호</span> 535-86-01931</li>
          <li><span>통신판매업신고</span> 2021-인천중구-0087</li>
          <li>&copy; 2014 by nest hotel Co., Ltd.</li>
        </ul>
        <div class="mimg">
          <a href="#"><img src="img/main/footer_designhotels.png" alt="design hotels" class="mdesign"></a>
          <a href="#"><img src="img/main/footer_spg.png" alt="spg" class="mspg"></a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>