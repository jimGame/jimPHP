<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/28
 * Time: 14:19
 */
class PDOManager
{
    /*
     *  single mode
     */
    private static $g_instance;

    public static function getInstance()
    {
        if (!self::$g_instance instanceof self) {
            self::$g_instance = new self;
        }
        if (!self::$g_instance->db) {
            self::$g_instance->initData();
        }
        return self::$g_instance;
    }

    public $db;

    private function __construct()
    {
        echo "PDOManager construct";
        $this->db = null;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        trigger_error('Clone is not allow!', E_USER_ERROR);
    }


    public function initData()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=player", "root", "") or die("connect Failed");
        $this->db->exec("set names 'utf8'");
    }

    public function insertRow()
    {
        if ($this->db) {
            $sql = "INSERT INTO player(`name`,`age`,`date`) VALUES ('田','28',now())";
            $this->db->query($sql);
            echo "lastId:" . $this->db->lastInsertId();
        } else {
            echo "未初始化数据库";
        }
    }

    public function selectRow($_id)
    {
        if ($this->db) {
            $sql = "SELECT * FROM player WHERE id = ?";
            $stam = $this->db->prepare($sql);
            $stam->execute(array($_id));
            $re = $stam->fetchAll(PDO::FETCH_ASSOC);
            return $re;
        } else {
            echo "未初始化数据库";
            return -1;
        }
    }
}