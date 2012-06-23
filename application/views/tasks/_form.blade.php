	{{ Form::open('tasks/' . $route, 'POST');}}

	{{ Form::token(); }}
	@if(isset($task_input))
		{{Form::hidden('_id', $task->id); }}
	@endif
	<table>
		<tr>
			<td>{{ Form::label('task', 'Task'); }}</td>
			<td>{{ Form::text('task', (isset($task_input)) ? $task_input : Form\Task::old('task')); }}</td>
			<td>{{ $errors->has( 'task' ) ? '<span class="error">' . $errors->first( 'task' ) . '</span>': '' }}</td>
		</tr>

		<tr>
			<td>{{ Form::label('description', 'Description')}}</td>
			<td>{{ Form::textarea('description', (isset($description_input)) ? $description_input : Form\Task::old('description'));}}</td>
			<td>{{ $errors->has( 'description' ) ? '<span class="error">' . $errors->first( 'description' ) . '</span>': '' }}</td>
		</tr>

		<tr>
			<td>{{ Form::submit('submit'); }}</td>
		</tr>
	</table>
	{{ Form::close(); }}