<?php $pageTitle = '<i class="far fa-edit"></i><span>Edit</span>'; ?>
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

<?php 
if (App__actorIsLogined() == false) { 
	?>
	<script>
		alert('권한이 없습니다.');
		history.back();
	</script>	
	<?php
	exit;
} ?>

<?php include_once 'toast_ui.php'; ?> 

<script>
var submitModifyFormDone = false;

function submitModifyForm(form){
	if(submitModifyFormDone)
		{
			return;
		}

	form.title.value = form.title.value.trim();

	if(form.title.value.length == 0  ){
		alert('제목을 입력해주세요');
		form.title.focus();

		return false;
	}

	var editor = $('#editor-1').data('toast-editor');

	var body = editor.getMarkdown().trim();

	if (body.length == 0)
	{
		alert('본문을 입력해주세요.');
		editor.focus();

		return false;
	}
	form.body.value = body;

	form.submit();

	submitModifyFormDone = true;
}
</script>

<section class="section section-article-modify con-min-width">
 <div class="con">
	<form method="POST" action="do_modify_article.php" onsubmit="submitModifyForm(this); return false;">
		<input type="hidden" name="id" value="<?=$article['id']?>">
        <input type="hidden" name="body">
		<div>
			<input style="width:100%; display:block;" type="text" name="title" placeholder="제목" value="<?=$article['title']?>">
		</div>
		<hr />
		<div>
		<script type="text/x-template"><?=App__printBodyForToastEditor($article['body'])?></script>
            <div id="editor-1"></div>
		</div>
		<div>
			<input class="underline"type="submit" value="수정">
		</div>
	</form>
 </div>
</section>
<?php include_once 'footer.php'; ?>

