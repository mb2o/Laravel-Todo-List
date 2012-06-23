@layout('templates.index')


@section('content')
	
	<h1>Edit Task : {{$task->task}}</h1>
	<hr />

	@include('tasks._form')

@endsection