<?php

namespace Form;

class Task extends \FormBase_Model
{
	public static $rules = array(
		'task'			=> 'required',
		'description'	=> 'required',
	);


}
