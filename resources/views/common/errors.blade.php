
@if (! $errors->isEmpty())
<div class="alert alert-danger">
	<p><strong>Warning</strong> fix the follow error</p>
	<u>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</u>
</div>
@endif