<form method="POST" action="/comments/{{ $comment->id }}">
	
	{{ csrf_field() }}

	<input type="hidden" name="_method" value="DELETE">

	<button type="submit" class="btn btn-outline-secondary btn-sm">Delete</button>

</form>