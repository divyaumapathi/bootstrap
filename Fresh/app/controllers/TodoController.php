<?php
class TodoController extends BaseController
{
	public function get_index()
	{
		return View::make('todo');
	}
	public function index()
	{
		return Response::json(TodoModel::all(),200);
	}
	public function store()
	{
		$ins=new TodoModel;
		$ins=$ins->insert_todo();
	}
	public function destroy($id)
	{
		$del=new TodoModel;
		$del=$del->del_todo($id);
	}
	public function update($id)
	{
		$updte=new TodoModel;
		$updte=$updte->updte_todo($id);
	}
}