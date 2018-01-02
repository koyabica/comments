<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){

	$comments = App\Comment::get()->groupBy('parent_id');

    //return $comments;

    return view('pages.index', compact('comments'));

});

Route::post('/comments/add', function (){

	$comment = new App\Comment(['body' => request('body')]);

	$comment->parent_id = request('parent_id', null);

	$comment->save();

	return back();

});

function SubCommentsDelete($comments, $comment) {

	foreach ($comments[$comment->id] as $subcomment) {

		if(isset($comments[$subcomment->id])){

			SubCommentsDelete($comments, $subcomment);

		}
		
		$subcomment->delete();
		
	}

}

Route::delete('comments/{comment}', function(App\Comment $comment){

	$comments = App\Comment::get()->groupBy('parent_id');

	if(isset($comments[$comment->id]))
	{	
		
		SubCommentsDelete($comments, $comment);

	}

	$comment->delete();
	

	return back();

});
