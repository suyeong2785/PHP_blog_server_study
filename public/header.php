<?php include_once '../start.php'; ?>
<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <title>홍길동 블로그-<?=strip_tags( $pageTitle) ?></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <link rel="stylesheet" href="/resource/app.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>

<body>
  <header class="top-bar con-min-width">
    <div class="con height-100p flex">
		<a class="top-bar__logo flex flex-ai-c">
			<i class="fab fa-apple"></i>&nbsp;
			Bang Blog
		</a>
		<div class="flex-grow-1"></div>
      <nav class="top-bar__menu">
        <ul class="flex height-100p">
          <li>
            <a href="/" class="flex flex-ai-c height-100p hover-underline">
              <i class="fas fa-home"></i>
              &nbsp;
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="/article_list.php" class="flex flex-ai-c height-100p hover-underline">
              <i class="fas fa-list-ul">
                <span>LIST</span>
              </i>
            </a>
          </li>
		<?php if (App__actorisLogined()) { ?>
          <li>
            <a href="/write_article.php" class="flex flex-ai-c height-100p hover-underline">
              <i class="fas fa-pen-alt"></i>
              &nbsp;
              <span>WRITE</span>
            </a>
          </li>
		 <?php } ?>
		<?php if (!App__actorisLogined() ) { ?>
		  <li>
            <a href="/login.php" class="flex flex-ai-c height-100p hover-underline">
              <i class="fas fa-sign-in-alt"></i>
              &nbsp;
              <span>LOGIN</span>
            </a>
          </li>
		  <?php } ?>
		<?php if (App__actorisLogined()) { ?>
		<li>
			<a href="/do_logout.php" class="flex flex-ai-c height-100p hover-underline">
			  <i class="fas fa-sign-out-alt"></i>
			  &nbsp;
			  <span>LOGOUT</span>
			</a>
		  </li>
		<?php } ?>
        </ul>
      </nav>
    </div>
  </header>

  <div class="title-bar con-min-width">
    <h1 class="con">
      <?= $pageTitle ?>
    </h1>
  </div>