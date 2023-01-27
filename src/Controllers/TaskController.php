<?php

namespace App\Controllers;

use App\Config;
use App\View\View;
use App\Models\Task;

class TaskController
{
    /**
     * 
     * Render task list
     * @return [type]
     */
    public static function getTasks()
    {
        $page = intval($_REQUEST['page'] ?? 1);
        $column = $_REQUEST['column'] ?? 'id';
        $sort = $_REQUEST['sort'] ?? 'asc';
        $task = new Task();
        $resCount = $task->count();
        $taskList = $task->list($page, $sort, $column);

        $page_count = $resCount  /  Config::SQL_RESULT_LIMIT;;
        View::render('index', [
            'logged_in' => AuthController::isAdmin(),
            'tasks' => $taskList,
            'current_page' => $page,
            'page_count' => $page_count,
            'column' => $column,
            'sort' => $sort,
            $column => $sort == 'asc' ? 'desc' : 'asc',
            
        ]);
    }


    /**
     * 
     * Add new task
     * @return [type]
     */
    public static function addTask()
    {

        $error_list = [];
        $name = htmlspecialchars($_REQUEST['name']);
        $email = htmlspecialchars($_REQUEST['email']);
        $task = htmlspecialchars($_REQUEST['task']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_list[] = 'Email error';
        }
        if ($name == '') {
            $error_list[] = 'Name error';
        }
        if ($task == '') {
            $error_list[] = 'Task error';
        }


        if (!empty($error_list)) {
            View::render('add_task', [
                'logged_in' => AuthController::isAdmin(),
                'name' => $name,
                'email' => $email,
                'task' => $task,
                'errors' => $error_list
            ]);
        } else {
            $newTask = new Task();
            $newTask->create($name, $email, $task);
            
            header("Location:  / ");
        }
    }


    /**
     * 
     * 
     * Update exist task
     * @return [type]
     */
    public static function updateTask()
    {
       
        $newTask = new Task();
        $error_list = [];
        $id = intval($_REQUEST['id']);
        
        $task_val = htmlspecialchars($_REQUEST['task']);
        $complete = isset($_REQUEST['complete']) ? 1 : 0;
        $edit = 0;
        $old_task = $newTask->get($id);
        $old_task_edit = $old_task['edit'];
        $old_task_val = $old_task['task'];
        $name = $old_task['name'];
        $email = $old_task['email'];

        if (($old_task_edit == 1) or ($old_task_val != $task_val)){
            $edit = 1;
        }

       
        if ($task_val == '') {
            $error_list[] = 'Task error';
        }
        if( !AuthController::isAdmin() ){
            $error_list[] = 'Access error. Pleas auth';
        }
        
        if (!empty($error_list)) {
            View::render('update_task', [
                'logged_in' => AuthController::isAdmin(),
                'name' => $name,
                'email' => $email,
                'task' => $task_val,
                'id'=> $id,
                'complete'=>$complete,
                'edit'=>$edit,
                'errors' => $error_list
            ]);
        } else {
            $newTask->update($id, $task_val, $complete, $edit);     
            header("Location:  / ");
        }
    }



    
    /**
     * @param int $id
     * 
     * Render page task
     * 
     * @return [type]
     */
    public static function getTask(int $id)
    {   
        if( AuthController::isAdmin() != True ){
            header("Location:  {/login ");
        }

        $task = (new Task())->get($id);
        $name = $task['name'];
        $email = $task['email'];
        $task_val = $task['task'];
        $complete = $task['complete'];

        View::render('update_task', [
            'logged_in' => AuthController::isAdmin(),
            'name' => $name,
            'email' => $email,
            'task' => $task_val,
            'complete' => $complete,
            'id'=>$id
            
        ]);
    }
}
