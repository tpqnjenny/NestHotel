<?php
	session_start();

  $connect = mysqli_connect("localhost", "tpqnjenny97", "rladldud97!", "tpqnjenny97");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>네스트 호텔</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" href="img/icon/favicon.ico">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/menu.js"></script>
</head>
<body>
  <div id="skip-menu" class="skip">
    <a href="#menu">메뉴바로가기</a>
    <a href="#main">콘텐츠 바로가기</a>
  </div>
  <section id="PC">
    <header id="header">
      <ul class="top_menu">
        <?php
				  if (!isset($_SESSION['userid'])) {
				?>
        <li><a href="login_form.php">LOGIN</a></li>
        <li><a href="member_form.php">JOIN</a></li>
        <?php
          } else {
        ?>
        <li><?php echo $_SESSION['username'] ?> 님</li>
        <li><a href="logout.php">LOGOUT</a></li>
        <?php
          }
        ?>
        <li><a href="#">고객지원</a></li>
        <li>
          <select name="LANGUAGE" id="lang">
            <option value="KOREAN">KOR</option>
            <option value="KOREAN">ENG</option>
            <option value="KOREAN">JAP</option>
            <option value="KOREAN">CHN</option>
          </select>
        </li>
      </ul>
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
    <section id="main">
      <ul class="mbanner cf">
        <li><img src="img/main/main1.jpg" alt="img1"></li>
        <li><img src="img/main/main3.jpg" alt="img2"></li>
        <li><img src="img/main/main4.jpg" alt="img3"></li>
        <li><img src="img/main/main5.jpg" alt="img4"></li>
        <li><img src="img/main/main7.jpg" alt="img5"></li>
        <li><img src="img/main/main8.jpg" alt="img6"></li>
        <li><img src="img/main/main9.jpg" alt="img7"></li>
        <li><img src="img/main/main15.jpg" alt="img8"></li>
      </ul>
      <ul>
        <li class="prev"><img src="img/icon/arrow-left-solid.png" alt="prev"></li>
        <li class="mtxt"><span>Your own hideout</span>당신만의 은신처, 네스트호텔</li>
        <li class="next"><img src="img/icon/arrow-right-solid.png" alt="next"></li>
      </ul>
      <ol class="pagination"></ol>
    </section>
    <section id="cont1">
      <h2>SPECIAL OFFERS</h2>
      <p>네스트호텔에서 경험할 수 있는 다양한 프로모션 상품을 만나보세요.</p>
      <div class="pkg">
        <a href="#" class="pkg1">
          <img src="img/main/pkg1.jpg" alt="pkgimg1">
          <p class="name">Green Vacation</p>
          <span class="date">2023-03-01 ~ 2023-04-30</span>
          <span class="txt">객실1박+플라츠조식2인권+야외수영장2인권+루프트더바3만원권</span>
          <p class="price">250,000원 ~</p>
        </a>
        <a href="#" class="pkg2 delay-05s">
          <img src="img/main/pkg2.jpg" alt="pkgimg2">
          <p class="name">쿤스트 라운지 애프터눈 티 세트 |<br>Strawberry Day</p>
          <span class="date">2023-03-29 ~ 2023-05-31</span>
          <span class="txt">애프터눈 티 세트(DESSERT + JUICE or COFFEE or TEA 2잔)</span>
          <p class="price">65,000원</p>
        </a>
        <a href="#" class="pkg3 delay-1s">
          <img src="img/main/pkg3.jpg" alt="pkgimg3">
          <p class="name">야외 수영장 STRAND<br>블루 시즌권 사전 예약</p>
          <span class="date">2023-04-12~ 2023-04-30</span>
          <span class="txt">5~6월 STRAND 블루 시즌권 + 루프트 더 바 10% 할인</span>
          <p class="price">234,000원</p>
        </a>
      </div>
    </section>
    <section id="cont2">
      <p>I leave for an unfamiliar place<br>For meeting myself.<span>본연의 나를 만나기 위해, 낯선 공간으로 떠납니다.</span></p>
      <div class="rect"></div>
    </section>
    <section id="cont3">
      <h2>ACCOMMODATION</h2>
      <ul class="rooms">
        <li class="standard"><p>스탠다드</p></li>
        <li class="deluxe"><p>디럭스</p></li>
        <li class="suite"><p>스위트</p></li>
      </ul>
      <div class="type">
        <ul class="standard">
          <li class="flex">
            <img src="img/rooms/standard/SSS.jpg" alt="Standard Twin">
            <div class="info">
              <p>Standard Twin</p>
              <span>위치: 4층 ~ 6층</span>
              <span>침대: 싱글베드 2개</span>
              <span>전망: 마운틴 뷰 / 씨사이드 뷰</span>
              <span>객실면적: 32.9㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
          </li>
          <li class="flex">
            <div class="info">
              <p>Standard Double</p>
              <span>위치: 4층 ~ 7층</span>
              <span>침대: 더블베드 1개</span>
              <span>전망: 마운틴 뷰 / 씨사이드 뷰</span>
              <span>객실면적: 32.9㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
            <img src="img/rooms/standard/SDM.jpg" alt="Standard Double">
          </li>
          <li class="flex">
            <img src="img/rooms/standard/STS.jpg" alt="Standard Super Twin">
            <div class="info">
              <p>Standard Super Twin</p>
              <span>위치: 6층</span>
              <span>침대: 더블베드 1개 + 싱글베드 1개</span>
              <span>전망: 씨사이드 뷰</span>
              <span>객실면적: 32.9㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
          </li>
        </ul>
        <ul class="deluxe">
          <li class="flex">
            <img src="img/rooms/deluxe/DTS.jpg" alt="Deluxe Twin">
            <div class="info">
              <p>Deluxe Twin</p>
              <span>위치: 8층</span>
              <span>침대: 더블베드 1개 + 싱글베드 1개</span>
              <span>전망: 마운틴 뷰 / 씨사이드 뷰</span>
              <span>객실면적: 43.4㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
          </li>
          <li class="flex">
            <div class="info">
              <p>Deluxe Double</p>
              <span>위치: 9층 ~ 11층</span>
              <span>침대: 더블베드 1개</span>
              <span>전망: 마운틴 뷰 / 씨사이드 뷰</span>
              <span>객실면적: 43.4㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
            <img src="img/rooms/deluxe/DDS.jpg" alt="Deluxe Double">
          </li>
          <li class="flex">
            <img src="img/rooms/deluxe/DFS.jpg" alt="Deluxe Family">
            <div class="info">
              <p>Deluxe Family</p>
              <span>위치: 8층 ~ 11층</span>
              <span>침대: 더블베드 2개</span>
              <span>전망: 씨사이드 뷰</span>
              <span>객실면적: 43.4㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
          </li>
        </ul>
        <ul class="suite">
          <li class="flex">
            <img src="img/rooms/suite/studio suite.jpg" alt="Studio Suite">
            <div class="info">
              <p>Studio Suite</p>
              <span>위치: 10층 ~ 11층</span>
              <span>구성: 침실1, 욕실1, 화장실1</span>
              <span>침대: 킹베드 1개</span>
              <span>전망: 올 씨사이드 뷰</span>
              <span>객실면적: 75.9㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
          </li>
          <li class="flex">
            <div class="info">
              <p>Reed Suite</p>
              <span>위치: 8층 ~ 9층</span>
              <span>구성: 침실1, 욕실1, 화장실1</span>
              <span>침대: 킹베드 1개</span>
              <span>전망: 올 씨사이드 뷰</span>
              <span>객실면적: 75.9㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
            <img src="img/rooms/suite/reed suite.jpg" alt="Reed Suite">
          </li>
          <li class="flex">
            <img src="img/rooms/suite/panorama suite1.jpg" alt="Panorama Suite">
            <div class="info">
              <p>Panorama Suite</p>
              <span>위치: 8층</span>
              <span>구성: 침실1, 욕실1, 화장실1</span>
              <span>침대: 킹베드 1개</span>
              <span>전망: 파노라마 뷰</span>
              <span>객실면적: 119.4㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
          </li>
          <li class="flex">
            <div class="info">
              <p>Patio Suite</p>
              <span>위치: 8층</span>
              <span>구성: 침실1, 욕실1, 화장실2</span>
              <span>침대: 킹베드 1개</span>
              <span>전망: 씨사이드 뷰</span>
              <span>객실면적: 119.4㎡</span>
              <button class="more">자세히 보기 <img src="img/icon/more-arrow-right.png" alt="more"></button>
            </div>
            <img src="img/rooms/suite/patio suite.jpg" alt="Patio Suite">
          </li>
        </ul>
      </div>
    </section>
    <section id="cont4">
      <h2>NEST MEMBERSHIP</h2>
      <p>네스트호텔의 회원이 되어 특별한 혜택을 누려보세요.</p>
      <div class="mem">
        <div class="mem1">
          <img src="img/main/mem1.jpg" alt="memimg1">
          <p>기본혜택</p>
          <ul>
            <li>객실 예약 시 할인쿠폰 2종 제공</li>
            <li>인피니티풀 스트란트 1인 무료 입장</li>
            <li>레드와인 1병(750ml) 증정</li>
            <li>생일 축하 기념 3만원 할인권 제공</li>
          </ul>
        </div>
        <div class="mem2 delay-05s">
          <img src="img/main/mem2.jpg" alt="mem2">
          <p>모바일 APP 상시 혜택</p>
          <ul>
            <li>스트란트 입장 10% 할인</li>
            <li>쿤스트 라운지 10% 할인</li>
            <li>플라츠 레스토랑 10% 할인</li>
            <li>플라츠 아메리카노 1잔 무료 제공</li>
          </ul>
        </div>
        <div class="mem3 delay-1s">
          <img src="img/main/mem3.jpg" alt="mem3">
          <p>스페셜 혜택</p>
          <ul>
            <li>객실 최대 30% 할인</li>
            <li>조식 뷔페 2인 무료</li>
            <li>디럭스더블 바다전망 11만원 이용권</li>
            <li>파노라마 스위트 25만원 이용권</li>
            <li class="caution">※ 1회 이상 객실 이용 시 발급됩니다.</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="cont5">
      <img src="img/main/cont5.jpg" alt="img" class="img1">
      <img src="img/main/cont5-1.jpg" alt="img" class="img2">
      <div class="about">
        <h3>Nest on Reed Beds</h3>
        <p class="title">갈대 밭에 둥지를 틀다</p>
        <p class="article">
          네스트호텔이 영종도 외딴 곳에 둥지를 마련했습니다.<br>
          호텔이 세워질 대지에는 자연적으로 자라난 갈대들이 장관을 이루고 있었습니다.<br>
          건물을 지으면서 갈대 밭을 없애지 않고 최대한 보존하기로 한 것은,<br>
          네스트호텔로서는 자연스러운 결정이었습니다.<br>
          오랫동안 영종도를 품어 온 갈대들이야말로 이 땅의 진정한 주인이며,<br>
          무엇보다 갈대와 바다, 소나무가 어우러져 함께 빚어 내는<br>
          풍광 그대로를 많은 이들과 공유하고 싶었기 때문입니다.<br>
          갈대는 호텔의 출발점인 동시에, 호텔의 기본 정신이기도 합니다.<br>
          갈대가 상징하는 사색과 소리, 문화는 호텔의 정체성으로 이어지고 있습니다.
        </p>
        <a href="#" class="seemore">더보기 ></a>
      </div>
    </section>
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
    <!-- <a href="#header" class="gotop"><img src="" alt=""></a> -->
  </section>
  <section id="Tablet">
    <header id="theader">
      <h1><a href="index.php">nest hotel<br><span>INCHEON</span></a></h1>
      <div class="menubar">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
    <nav id="tnavi">
      <div class="ttop cf">
        <?php
          if (!isset($_SESSION['userid'])) {
        ?>
        <h2><a href="login_form.php">Login</a></h2>
        <img src="img/icon/xmark.png" alt="close" class="xmark">
        <?php
          } else{
        ?>
        <h2><?php echo $_SESSION['username'] ?> 님 </h2><a href="logout.php" class="logout">Logout</a>
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
    <section id="tmain">
      <div class="bg">
        <img src="img/main/main1.jpg" alt="img1" class="show">
        <img src="img/main/main4.jpg" alt="img2">
        <img src="img/main/main5.jpg" alt="img3">
        <img src="img/main/main7.jpg" alt="img4">
        <img src="img/main/main8.jpg" alt="img5">
        <img src="img/main/main9.jpg" alt="img6">
        <img src="img/main/main15.jpg" alt="img7">
        <img src="img/main/mem2.jpg" alt="img8">
      </div>
      <h1><span>Your own hideout</span>당신만의 은신처, 네스트호텔</h1>
    </section>
    <footer id="tfooter">
      <div class="tline1">
        <p>네스트(주)</p>
        <p>주소: 인천광역시 중구 영종해안남로 19-5 (운서동 2877)</p>
      </div>
      <div class="tline2">
        <p>Tel: 032-743-9000</p>
        <p>E-mail: <a href="mailto:info@nesthotel.co.kr">info@nesthotel.co.kr</a></p>
      </div>
      <div class="tline3">
        <p>대표이사: 김영재</p>
        <p>사업자등록번호: 535-86-01931</p>
        <p>통신판매업신고: 2021-인천중구-0087</p>
      </div>
      <p class="tcopyright">&copy; 2014 by nest hotel Co., Ltd.</p>
    </footer>
  </section>
  <section id="Mobile">
    <header id="mheader">
      <h1><a href="index.php">nest hotel<br><span>INCHEON</span></a></h1>
      <div class="mham">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
    <nav id="mnavi">
      <div class="mtop">
        <?php
          if (!isset($_SESSION['userid'])) {
        ?>
        <h2><a href="login_form.php">Login</a></h2>
        <img src="img/icon/xmark.png" alt="close" class="mxmark">
        <?php
          } else{
        ?>
        <h2><?php echo $_SESSION['username'] ?> 님 </h2><a href="logout.php" class="mlogout">Logout</a>
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
    <section id="mmain">
      <div class="mbg">
        <img src="img/main/main1.jpg" alt="img1" class="show">
        <img src="img/main/main4.jpg" alt="img2">
        <img src="img/main/main5.jpg" alt="img3">
        <img src="img/main/main7.jpg" alt="img4">
        <img src="img/main/main8.jpg" alt="img5">
        <img src="img/main/main9.jpg" alt="img6">
        <img src="img/main/main15.jpg" alt="img7">
        <img src="img/main/mem2.jpg" alt="img8">
      </div>
      <h4><span>Your own hideout</span>당신만의 은신처, 네스트호텔</h4>
    </section>
    <footer id="mfooter">
      <div class="mline1">
        <p>네스트(주)</p>
        <p>주소: 인천광역시 중구 영종해안남로 19-5 (운서동 2877)</p>
      </div>
      <div class="mline2">
        <p>Tel: 032-743-9000</p>
        <p>E-mail: <a href="mailto:info@nesthotel.co.kr">info@nesthotel.co.kr</a></p>
      </div>
      <div class="mline3">
        <p>대표이사: 김영재</p>
        <p>사업자등록번호: 535-86-01931</p>
        <p>통신판매업신고: 2021-인천중구-0087</p>
      </div>
      <p class="mcopyright">&copy; 2014 by nest hotel Co., Ltd.</p>
    </footer> 
  </section>
</body>
</html>