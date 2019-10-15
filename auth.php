<!--    로그인 / 회원가입   -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>로그인 - 선인고 노트북 관리 시스템</title>

	<!-- Login Stylesheet -->
	<link rel="stylesheet" href="/src/css/login.css">

	<!-- jQuery 3.4.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Login / Register Script -->
	<script src="/src/js/login.js"></script>
	
	<script>
	    $(document).ready(function() {
	        $('a').click(function() {
	            alert('완성되지 않았습니다');
	        })
	    })
	</script>
</head>
<body>
	<hr>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="./register.php" method="post">
				<h1>회원가입</h1>
				<input type="text" name="name" placeholder="이름">
				<input type="password" name="password" placeholder="비밀번호">
				<input type="password" name="confirm" placeholder="비밀번호 확인">
				<input type="checkbox" name="admin" id="admin"><span>관리자</span>
				<button>회원가입</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="./login.php" method="post">
				<h1>로그인</h1>
				<input type="text" name="username" placeholder="이름">
				<input type="password" name="password" placeholder="비밀번호">
				<a href="#">비밀번호 찾기</a>
				<button>로그인</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
				    <h1>Sunin High</h1>
				    <h2>Laptop Management System</h2>
					<button class="ghost" id="signIn">로그인</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>선인고등학교<br>노트북 관리 시스템</h1>
					<button class="ghost" id="signUp">회원가입</button>
				</div>
			</div>
		</div>
	</div>

	<!-- <footer>
		<p>
			Created with <i class="fa fa-heart"></i> by
			<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
			- Read how I created this and how you can join the challenge
			<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
		</p>
	</footer> -->
</body>
</html>