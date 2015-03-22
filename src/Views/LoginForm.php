<?php

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {


        $this->content = <<<LOGIN_FORM
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Login Form</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="main">
		<h1>Welcome to CS4350</h1>
		<div id="login">
		<h2>Please login</h2>
		<form action="/auth" method="POST">
			<label>UserName :</label>
			<input id="name" name="username" placeholder="username" type="username"><br /><br />
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password"><br /><br />
			File Based<input type="radio" name="authType" value="file" checked>
			In Memory<input type="radio" name="authType" value="memory">
			<p><input name="submit" type="submit" value=" Login "></p>
		</form>
		</div>
		</div>
	</body>
</html>
LOGIN_FORM;
    }
}
