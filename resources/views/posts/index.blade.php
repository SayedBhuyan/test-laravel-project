
@if(isset($posts))
<h1>All posts</h1>
@foreach($posts as $post)
	<h2><?php echo $post['title']; ?></h2>
	<p><?php echo $post['description']; ?></p>
	<hr>
@endforeach
@else
<h1>No post found!</h1>
@endif