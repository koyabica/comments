<li>
			
    <small>{{ $comment->created_at->diffForHumans() }} - {{ $comment->id }}</small>
	
	@include ('comments.delete')

	<p>{{ $comment->body }}</p>

	@include ('comments.form', [ 'parentId' => $comment->id, 'nesting' => $comment->nesting])

</li>

	

<hr>

@if (isset($comments[$comment->id]))

        @include ('comments.list', ['collection' => $comments[$comment->id]])

@endif