<?
	session_start();
?>
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>네스트 호텔</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/header_footer.css">
		<link rel="stylesheet" href="css/member.css">
		<link rel="shortcut icon" href="img/icon/favicon.ico">
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/index.js"></script>
  <script>
    function check_id(){
      window.open("check_id.php?id=" + document.member_form.id.value, "IDcheck", "left=200,top=200,width=350,height=60,scrollbars=no,resizable=yes");
    }

    function check_input(){
      const re1 =/^(?=.*[a-zA-Z]).{5,10}$/;
      const id = document.member_form.id.value;
      if(!document.member_form.id.value){
        alert("아이디를 입력해 주세요.")
        document.member_form.id.focus();
        return false;
      } else if(!re1.test(id)){
        alert("영문으로 5~10자의 아이디를 입력해 주세요.");
        return false;
      }

      const reg_pw2 = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,15}$/;
      const pw = document.member_form.pw.value;
      if(!document.member_form.pw.value){
        alert("비밀번호를 입력하세요.");
        document.member_form.pw.focus();
        return false;
      } else if(!reg_pw2.test(pw)){
        alert("영문, 숫자, 특수문자를 포함한 8~15자의 비밀번호를 입력해 주세요.");
        return false;
      }
      
      if(!document.member_form.pw_confirm.value){
        alert("비밀번호 확인을 입력하세요.");
        document.member_form.pw_confirm.focus();
        return false;
      }
      if(document.member_form.pw.value != document.member_form.pw_confirm.value){
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
        document.member_form.pw.focus();
        document.member_form.pw.select();
        return false;
      }

      if(!document.member_form.name.value){
        alert("이름을 입력하세요.");
        document.member_form.name.focus();
        return false;
      }

      if(!document.member_form.hp.value){
        alert("휴대폰 번호를 입력하세요.");
        document.member_form.hp.focus();
        return false;
      }
      const hp1 = document.member_form.hp.value;
      const re2 = /^010-?([0-9]{4})-?([0-9]{4})$/;
      if(!re2.test(hp1)){
        alert("휴대폰 번호가 올바르지 않습니다. 다시 입력해 주세요.");
        return false;
      }

      if(!document.member_form.email.value){
        alert("이메일을 입력하세요.");
        document.member_form.email.focus();
        return false;
      }
      const email = document.member_form.email.value;
      const re = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
      if(!re.test(email)){
        alert("도메인(예:@abc.co.kr)을 포함해서 다시 입력해 주세요.");
        return false;
      }
      document.member_form.submit();
    }
  </script>
</head>	
<body>
  <section id="PC">
    <header id="header">
      <ul class="top_menu">
        <?
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
      <?
        } else{
      ?>
      <ul class="top_menu">
        <li><?=
          $_SESSION['usernick']
        ?> 님</li>
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
      <?
        }
      ?>
      <nav class="navi cf">
        <h1 class="logo"><a href="index.html"><img src="img/main/logo.gif" alt="LOGO"></a></h1>
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
    <div id="join">
      <h2>회원가입</h2>
      <hr>
      <p class="intro">영감과 휴식을 위한 공간, <span>네스트 호텔에 오신것을 환영합니다.</span></p>
      <form action="insert.php" name="member_form" method="post">
        <ul class="join_form">
          <li>
            <ul class="id">
              <li><span>*</span> 아이디</li>
              <li><input type="text" name="id" placeholder="5~10자 영문" required></li>
              <li><button onclick="check_id()">중복확인</button></li>
            </ul>
          </li>
          <li>
            <p><span>*</span> 비밀번호</p>
            <input type="password" name="pw" placeholder="8~15자 영문, 숫자, 특수문자 포함" required>
          </li>
          <li>
            <p><span>*</span> 비밀번호 확인</p>
            <input type="password" name="pw_confirm" placeholder="비밀번호 확인" required>
          </li>
          <li>
            <p><span>*</span> 이름</p>
            <input type="text" name="name" placeholder="이름" required>
          </li>
          <li>
            <p><span>*</span> 휴대폰</p>
            <input type="tel" name="hp" placeholder="- 을 제외하고 입력" required>
          </li>
          <li>
            <p><span>*</span> 이메일</p>
            <input type="email" name="email" placeholder="예시: abc@nesthotel.co.kr" required>
          </li>
        </ul>
        <p class="must">* 은 필수 입력 항목입니다.</p>
        <div id="btn">
          <button type="button" onclick="check_input()">가입하기</button>
          <button type="reset">초기화</button>
        </div>
      </form>
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
      <h1 class="tlogo"><a href="index.html"><img src="img/main/logo.gif" alt="LOGO"></a></h1>
      <div class="menubar">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav id="tnavi">
      <div class="ttop cf">
        <?
          if(!$_SESSION['userid']){
        ?>
        <h2><a href="login_form.php">Login</a></h2>
        <img src="img/icon/xmark.png" alt="close" class="xmark">
        <?
          } else{
        ?>
        <h2><?=
          $_SESSION['username']
        ?> 님 </h2><a href="logout.php" class="logout">Logout</a>
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
    <div id="tjoin">
      <h2>회원가입</h2>
      <p class="tintro">영감과 휴식을 위한 공간, <span>네스트 호텔에 오신것을 환영합니다.</span></p>
      <form action="insert.php" name="member_form" method="post">
        <ul class="tjoin_form">
          <li class="tid">
            <p><span>*</span> 아이디</p>
            <ul>
              <li><input type="text" name="id" placeholder="5~10자 영문" required></li>
              <li><button onclick="check_id()">중복확인</button></li>
            </ul>
          </li>
          <li>
            <p><span>*</span> 비밀번호</p>
            <input type="password" name="pw" placeholder="8~15자 영문, 숫자, 특수문자 포함" required>
          </li>
          <li>
            <p><span>*</span> 비밀번호 확인</p>
            <input type="password" name="pw_confirm" placeholder="비밀번호 확인" required>
          </li>
          <li>
            <p><span>*</span> 이름</p>
            <input type="text" name="name" placeholder="이름" required>
          </li>
          <li>
            <p><span>*</span> 휴대폰</p>
            <input type="tel" name="hp" placeholder="- 을 제외하고 입력" required>
          </li>
          <li>
            <p><span>*</span> 이메일</p>
            <input type="email" name="email" placeholder="예시: abc@nesthotel.co.kr" required>
          </li>
        </ul>
        <p class="tmust">* 은 필수 입력 항목입니다.</p>
        <div id="tbtn">
          <button type="button" onclick="check_input()">가입하기</button>
          <button type="reset">초기화</button>
        </div>
      </form>
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
      <h1 class="mlogo"><a href="index.html"><img src="img/main/logo.gif" alt="LOGO"></a></h1>
      <div class="mham">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav id="mnavi">
      <div class="mtop">
        <?
          if(!$_SESSION['userid']){
        ?>
        <h2><a href="login_form.php">Login</a></h2>
        <img src="img/icon/xmark.png" alt="close" class="mxmark">
        <?
          } else{
        ?>
        <h2><?=
          $_SESSION['username']
        ?> 님 </h2><a href="logout.php" class="logout">Logout</a>
        <img src="img/icon/xmark.png" alt="close" class="mxmark">
        <?
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
    <div id="mjoin">
      <h2>회원가입</h2>
      <p class="mintro">영감과 휴식을 위한 공간, <span>네스트 호텔에 오신것을 환영합니다.</span></p>
      <form action="insert.php" name="member_form" method="post">
        <ul class="mjoin_form">
          <li class="mid">
            <p><span>*</span> 아이디</p>
            <ul>
              <li><input type="text" name="id" placeholder="5~10자 영문" required></li>
              <li><button onclick="check_id()">중복확인</button></li>
            </ul>
          </li>
          <li>
            <p><span>*</span> 비밀번호</p>
            <input type="password" name="pw" placeholder="8~15자 영문, 숫자, 특수문자 포함" required>
          </li>
          <li>
            <p><span>*</span> 비밀번호 확인</p>
            <input type="password" name="pw_confirm" placeholder="비밀번호 확인" required>
          </li>
          <li>
            <p><span>*</span> 이름</p>
            <input type="text" name="name" placeholder="이름" required>
          </li>
          <li>
            <p><span>*</span> 휴대폰</p>
            <input type="tel" name="hp" placeholder="- 을 제외하고 입력" required>
          </li>
          <li>
            <p><span>*</span> 이메일</p>
            <input type="email" name="email" placeholder="예시: abc@nesthotel.co.kr" required>
          </li>
        </ul>
        <p class="mmust">* 은 필수 입력 항목입니다.</p>
        <div id="mbtn">
          <button type="button" onclick="check_input()">가입하기</button>
          <button type="reset">초기화</button>
        </div>
      </form>
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