<li>
	<small class="form-text text-muted">{{ $comment->created_at->diffForHumans() }}</small>

	<p>{{ $comment->body }}</p>
	
	<p>	
		<div class="d-inline-block">
	        <a class="btn btn-outline-info btn-sm" data-toggle="collapse" href="#collapse_{{ $comment->id }}" role="button" aria-expanded="false" aria-controls="collapse_{{ $comment->id }}">
	        Reply
	        </a>
    	</div>
    	<div class="d-inline-block">
    		@include ('comments.delete')
    	</div>
        
    </p>

	@include ('comments.form', [ 'parentId' => $comment->id, 'nesting' => $comment->nesting])

</li>

	

<hr>

@if (isset($comments[$comment->id]))

        @include ('comments.list', ['collection' => $comments[$comment->id]])

@endif