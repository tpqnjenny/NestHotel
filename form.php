<?
	session_start();
?>
<div id="join" class="tjoin mjoin">
  <h2>회원가입</h2>
  <p class="intro tintro mintro">영감과 휴식을 위한 공간, <span>네스트 호텔에 오신것을 환영합니다.</span></p>
  <form action="insert.php" name="member_form" method="post">
    <ul class="join_form tjoin_form mjoin_form">
      <li>
        <ul class="id tid mid">
          <li><span>*</span> 아이디</li>
          <li>
            <input type="text" name="id" placeholder="5~15자 영문" required>
            <button type="button" onclick="check_id()">중복확인</button>
          </li>
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
    <p class="must tmust mmust">* 은 필수 입력 항목입니다.</p>
    <div id="btn" class="tbtn mbtn">
      <button type="button" onclick="check_input()">가입하기</button>
      <button type="reset">초기화</button>
    </div>
  </form>
</div>
<script>
  function check_id(){
  window.open("check_id.php?id=" + document.member_form.id.value, "IDcheck", "left=200,top=200,width=350,height=60,scrollbars=no,resizable=yes");
  }

  function check_input(){
    const re1 =/^(?=.*[a-zA-Z]).{5,15}$/;
    const id = document.member_form.id.value;
    if(!document.member_form.id.value){
      alert("아이디를 입력해 주세요.")
      document.member_form.id.focus();
      return false;
    } else if(!re1.test(id)){
      alert("영문으로 5~15자의 아이디를 입력해 주세요.");
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