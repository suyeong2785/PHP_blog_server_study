<?php $pageTitle = '<i class="fas fa-newspaper"></i>&nbsp;<span>Detail</span>'; ?>
<?php include_once 'header.php'; ?>
<?php
$_REQUEST['id'] = mysqli_real_escape_string($dbLink, $_REQUEST['id']);

$sql = "
SELECT *
FROM article
WHERE id = '{$_REQUEST['id']}'
";
$rs = mysqli_query($dbLink, $sql);
$article = mysqli_fetch_assoc($rs);
?>
		<?php include_once 'toast_ui.php'; ?>
		<section class="section section-article-list con-min-width">
	         <div class="con">
		<div>
			번호 : <?=$article['id']?>
		</div>
		<hr/>
		<div>
			날짜 : <?=$article['regDate']?>
		</div>
		<hr/>
		<div>
			제목 : <?=$article['title']?>
		</div>
		<script type="text/x-template"><?=App__printBodyForToastEditor($article['body'])?></script>
		<div id="editor-viewer-1"></div>
		 <br>
		 <a href="/" onclick="history.back();">뒤로가기</a>
		<?php if ( App__actorCanDelete($article) ) { ?>
			<a href="javascript:;" onclick="if ( confirm('삭제하시겠습니까?') ) { location.replace('/do_delete_article.php?id=<?=$article['id']?>'); };" class="underline">삭제</a>
			<?php } ?>
			<?php if ( App__actorCanModify($article) ) { ?>
			<a href="/modify_article.php?id=<?=$article['id']?>" class="underline">수정</a>
			<?php } ?>
	</div>
	</section>

<?php include_once 'footer.php'; ?>

