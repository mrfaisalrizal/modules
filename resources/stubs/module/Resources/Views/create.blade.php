@extends("layouts.app")

@section("content")
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create</div>

				<div class="panel-body">

					@include('DummySlug::form')

				</div>
			</div>
		</div>
	</div>
</div>
@endsection