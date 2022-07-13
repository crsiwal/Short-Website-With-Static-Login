<?php
session_start();
$request = isset($_SERVER['REDIRECT_URL']) ? trim($_SERVER['REDIRECT_URL'], "/") : trim($_SERVER['REQUEST_URI'], "/");
$routes = [
	"add" => "campaign_add",
	"login" => "login",
	"vlogin" => "verify_login",
];

if (isset($routes[$request])) {
	if (in_array($request, ["add"])) {
		if (isset($_SESSION["login"]) && $_SESSION["login"] === true) {
			view($routes[$request]);
		} else {
			header("Location: /login");
		}
	} else {
		view($routes[$request]);
	}
} else {
	http_response_code(404);
	view("404");
}

function view($path = "") {
	require __DIR__ . "/views/${path}.php";
}

function base_url($path = "") {
	return sprintf(
		"%s://%s%s",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'],
		"/" . $path
	);
}

function error() {
	if (isset($_SESSION["error"])) {
		$error = $_SESSION['error'];
		unset($_SESSION['error']);
		return $error;
	}
	return null;
}
