<?php

class Create_Tasks_Table{

		
				
 	public function up()
	{
			
		Schema::create('tasks', function($table){

		 	$table->increments('id');
 			$table->integer('user_id');
 			$table->string('task', 100);
 			$table->text('description');
 			$table->timestamps();
 		});
	}
				
}