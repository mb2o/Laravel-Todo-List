@layout('templates.index')

@section('content')
	<h1>Tasks</h1>
	<hr />


	{{Session::get('success');}}

	@if(count($tasks) == 0)
		<h3>There are no tasks created yet. {{HTML::link('/tasks/new', 'Create one?');}}
	@else

		@foreach($tasks as $task)

			<h3>{{$task->task}}</h3>
			{{nl2br($task->description)}}<br />
			<small>
				{{ HTML::link('tasks/edit/' . $task->id, 'Edit'); }} |
				{{ HTML::link('tasks/delete/' . $task->id, 'Delete'); }} |
			</small>
			<hr />

		@endforeach

	@endif

@endsection