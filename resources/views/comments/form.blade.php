<form method="POST" action="/comments/add">

    {{ csrf_field() }}
	
	@if (isset($parentId))
    	
    	<input type="hidden" name="parent_id" value="{{ $parentId }}">

    @endif

    @if (isset($nesting))
        
        <input type="hidden" name="nesting" value="{{ $nesting+1 }}">

    @endif
    
	<div class="form-group">

		<textarea name="body" id="body" placeholder="Leave a comment"></textarea>
	
	</div>

    <div class="form-group">

    	<button type="submit" class="btn btn-primary">@if (isset($parentId)) Reply @else Add Comment @endif</button>

    </div>
    

</form>