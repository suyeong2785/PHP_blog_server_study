<?php
session_start();

$dbLink = mysqli_connect("127.0.0.1", "site1", "sbs123414", "site1" , "3307");

function App__actorisLogined() {
	return isset($_SESSION['loginedMember']);
}
function App__actorCanModify($article) {
	return App__actorisLogined();
}
function App__actorCanDelete($article) {
	return App__actorisLogined();
}
function App__printBodyForToastEditor($body) {
  return str_ireplace("script", "<!--REPLACE:script-->", $body);
} 