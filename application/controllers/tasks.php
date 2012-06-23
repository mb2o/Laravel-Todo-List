<?php

class Tasks_Controller extends Base_Controller
{
	public $restful = true;

	public function __construct()
	{
		$this->filter('before', 'csrf')->on('post');
	}

	public function get_index()
	{
		$tasks = ATask::order_by('created_at', 'desc')->get();
		return View::make('tasks.index')->with('tasks', $tasks);
	}

	public function get_new()
	{
		return View::make('tasks.new')->with('route', 'create');
	}

	public function post_create()
	{
		if(! Form\Task::is_valid())
		{
			return Redirect::back()->with_input()->with_errors(Form\Task::$validation);
		}

		// Successfully validated our form model.
		$task = new ATask(array(
			'task' => Input::get('task'),
			'description' => Input::get('description'),
		));

		$task->save();

		return Redirect::to('tasks/index')->with('success', 'Task created.');
	}

	public function get_edit($id = '')
	{
		if(!is_numeric($id))
		{
			return Response::error('404');
		}

		$task = ATask::find($id);


		return View::make('tasks.edit')->with(array('route' => 'update', 'task' => $task, 'task_input' => $task->task, 'description_input' => $task->description));
	}

	public function post_update()
	{
		if(! Form\Task::is_valid())
		{
			return Redirect::back()->with_input()->with_errors(Form\Task::$validation);
		}

		$task = ATask::find(Input::get('_id'));
		$task->task = Input::get('task');
		$task->description = Input::get('description');
		$task->save();
		return Redirect::to('tasks/index')->with('success', 'Task was successfully edited.');
	}

	public function get_delete($id = '')
	{
		if(!is_numeric($id))
		{
			return Response::error('404');
		}

		$task = ATask::find($id);
		$task->delete();
		return Redirect::to('tasks/index')->with('success', 'Task was successfully deleted.');
	}

}