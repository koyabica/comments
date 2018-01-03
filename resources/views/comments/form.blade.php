<form method="POST" action="/comments/add" id="needs-validation" novalidate>

    {{ csrf_field() }}
	
    @if (isset($nesting))
        
        <input type="hidden" name="nesting" value="{{ $nesting+1 }}">

    @endif

    @if (isset($parentId))
        
        <input type="hidden" name="parent_id" value="{{ $parentId }}">


        <div class="collapse" id="collapse_{{ $parentId }}">
            
            <div class="form-group">
                <textarea name="body" id="body_{{ $parentId }}" class="form-control" placeholder="Leave a comment" required></textarea>
                <div class="invalid-feedback">
                    Requred at least 2 letter.
                </div>
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary btn-sm">Send</button>

            </div>

        </div>

    @else
    
    

	<div class="form-group">

        <textarea name="body" id="body" class="form-control" placeholder="Leave a comment" required></textarea>
        <div class="invalid-feedback">
            Requred at least 2 letter.
        </div>
	</div>

    <div class="form-group">

    	<button type="submit" class="btn btn-primary">Add Comment</button>

    </div>

    @endif
    

</form>