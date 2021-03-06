@extends('layouts.master')

@section('title')
	All Books
@stop

@section('content')
<ul>
@foreach($books as $book)
	<li>
		{{ link_to_route('books.show', $book->title, $book->id) }}
		by {{{ $book->author->name }}}
	</li>
@endforeach
</ul>
@stop
