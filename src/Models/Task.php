<?php
namespace App\Models;

use App\Config;

/**
 * Task model
 */
class Task
{
    private $pdo;
    
    public function __construct()
    {
        $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $task
     * 
     * @return integer 
     */
    public function create(string $name, string $email, string $task){
        $sql = 'INSERT INTO task(name, email, task, complete, edit) VALUES(:name, :email, :task, 0, 0)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':task', $task);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    /**
     * @param int $id
     * @param string $task
     * @param int $complete
     * @param int $edit
     * 
     * 
     */
    public function update(int $id, string $task, int $complete, int $edit){
        $sql = "UPDATE task "
                . "SET complete = :complete,  task = :task, edit = :edit "
                . "WHERE id = :task_id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':task_id', $id);
        $stmt->bindValue(':task', $task);
        $stmt->bindValue(':edit', $edit);
        $stmt->bindValue(':complete', $complete);

        $stmt->execute();
    }

    /**
     * @param int $id
     * 
     * @return array
     */
    public function get(int $id){
        $stmt = $this->pdo->query("SELECT * FROM task WHERE id={$id}");

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * @param int $page
     * @param mixed $sort='asc'
     * @param string $name
     * 
     * @return array
     */
    public function list(int $page = 1, $sort='asc', $name = ''){
        $limit = Config::SQL_RESULT_LIMIT;
        $offset = ($page-1) * $limit;
        $stmt = $this->pdo->query("SELECT * FROM task ORDER BY {$name} {$sort} LIMIT {$limit} OFFSET {$offset}");
        $tables = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $tables[] = $row;
        }
        return $tables;
    }


    /**
     * @return int
     */
    public function count(){
        
        $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM task");
        $res = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $res['count'];
    }



}
