@extends('layout')
@section('title', 'home')
@section('content')
<div class="container mx-auto px-4">
	<h1>Hello world</h1>
	<div class="board">
		<table class="table-auto border-collapse border-solid border-slate-600">
			<thead>
				<tr>
					<th class="border border-slate-600 p-2">Name</th>
					<th class="border border-slate-600 p-2">Description</th>
					<th class="border border-slate-600 p-2 text-red-600">Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($boarditems as $item)
				<tr>
					<td class="border border-slate-600">$item->name</td>
					<td class="border border-slate-600">$item->description</td>
					<td class="border border-slate-600 text-red-600"><a href="$item->id">X</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<form method="post" action="" class="block py-5">
		<input type="input" name="name" placeholder="name..." class="border-solid border-1 border-sky-500">
		<input type="textarea" name="description" placeholder="description..." class="border-solid border-1 border-sky-500">
		<button>Send</button>
	</form>
</div>
@endsection