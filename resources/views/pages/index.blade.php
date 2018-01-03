@extends('layouts.master')


@section('content')

    <article>
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in malesuada dui, ac sagittis nisi. Mauris faucibus congue orci ac elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In leo diam, hendrerit ut diam ac, consequat pellentesque lectus. Duis ante nulla, mattis nec lacus vel, gravida blandit nisl. Morbi ut nisl sed purus vehicula pulvinar. Maecenas maximus mollis pellentesque. Donec fermentum condimentum nisl, a convallis orci auctor non. Ut vehicula risus dolor, id mattis ante lobortis hendrerit.</p>
        <p>Morbi eget dolor non tellus facilisis iaculis non dictum lorem. Suspendisse sed massa et magna iaculis luctus non consequat est. Aenean sed libero purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vulputate arcu fringilla eleifend sagittis. Integer scelerisque odio pharetra, semper orci non, semper ante. Suspendisse convallis arcu et dapibus eleifend. Integer venenatis ligula et felis dictum, a ullamcorper magna gravida. Ut tortor felis, interdum ac dui sed, laoreet dictum dolor. Nunc rhoncus pulvinar libero in molestie.</p>

    </article>

    <h2>Comments</h3>
            
        @if (count($comments))

            @include ('comments.list', ['collection' => $comments['']])

        @endif
        
    <h3>Leave a Comment</h3>

    @include ('comments.form')

    @include('layouts.errors')

    <script>
    
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        var form = document.getElementById('needs-validation');
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      }, false);
    })();
    </script>

@endsection