@layout('templates.index')


@section('content')
	
	<h1>New Task</h1>
	<hr />

	@include('tasks._form')

@endsection