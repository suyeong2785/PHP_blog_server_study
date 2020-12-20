<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">
<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css" />
<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js"></script>

<script>
	function Editor1__init() {
  var el = document.querySelector('#editor-1');

  if ( el === null)
	  {
	  return;
	  }

  var initialValue = $(el).prev().html().trim().replace(/<!--REPLACE:script-->/gi, 'script');
  var editor = new toastui.Editor({
    el: el,
    previewStyle: 'vertical',
    initialValue: initialValue,
    height:600,
    plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
  });
 
	$(el).data('toast-editor',editor);
}

$(function() {
	Editor1__init(); 
})

function EditorViewer1__init() {
  var el = document.querySelector('#editor-viewer-1');

  if ( el === null)
  {
	  return;
  }

  var initialValue = $(el).prev().html().trim().replace(/<!--REPLACE:script-->/gi, 'script');
  var viewer = new toastui.Editor.factory({
    el: el,
    initialValue: initialValue,
    viewer:true,
    plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
  });
}
$(function() {
	EditorViewer1__init();
})
</script>