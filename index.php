<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/28
 * Time: 14:25
 */
include_once "PDOManager.class.php";
echo "hello php";
//PDOManager::getInstance()->initData();
//PDOManager::getInstance()->insertRow();
$re = PDOManager::getInstance()->selectRow(1);