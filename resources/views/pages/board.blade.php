@extends('layout')
<div>
	<h1>Edit/Create/delete board</h1>
	<form class="" method="POST" action="/">
		@csrf
		<input type="text" name="name">
		<textarea name="discription"></textarea>
	</form>
</div>