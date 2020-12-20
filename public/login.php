<?php $pageTitle = '<i class="fas fa-sign-in-alt"></i>&nbsp;<span>LOGIN</span>'; ?>
<?php include_once 'header.php'; ?>

	<hr />

	<section class="section section-article-list con-min-width">
		<div class="con">
		<form  method="POST" action="do_login.php">
			<div>
				<input  style="width:20%; display:block;" type="text" name="loginId" placeholder="아이디" required>
			</div>
			<br/>
			<div>
				<input  type="password" style="width:20%; display:block;" rows="10" name="loginPw" placeholder="비밀번호" required></input>
			</div>
			<div>
			<br/>
				<a href="/" onclick="history.back();">뒤로가기</a>
				<input type="submit" value="로그인" class="underline">
			</div>
		</form>
	</div>
	</section>
<?php include_once 'footer.php'; ?>

