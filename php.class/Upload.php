<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/5
 * Time: 9:32
 */
//header("Content-Type:text/html; charset=utf-8");
require "inclue.php";
//echo 'errorCode:' .$_FILES["filese"]["error"];
//var_dump($_FILES["filese"]);
//判断是否上传成功了
$file = $_FILES["filese"];
switch($file["error"]){
    case 0:
        // 上传成功
        break;
    case 1:
        // 文件大小超过了php.ini中upload_max_filesize选项限制的值
        echo "文件大小超过了php.ini中upload_max_filesize选项限制的值";
        break;
    case 2:
        // 上传文件的大小超过了HTML表单中MAX_FILE_SIZE选项值。可在程序中检查表单$FILES ['up_file']['size']来处理
        echo "上传文件的大小超过了HTML表单中MAX_FILE_SIZE选项值。可在程序中检查表单$FILES ['up_file']['size']来处理";
        break;
    case 3:
        // 文件只有部分被上传
        echo "文件只有部分被上传";
        break;
    case 4:
        // 用户没有提供任何文件上传
        echo "用户没有提供任何文件上传";
        break;
    default:
        echo 'file["error"] 难道还有其他值，你在逗我吧兄弟';
        break;
}
if($file["error"] == 0){
    var_dump($file);
    if(move_uploaded_file($file["tmp_name"],"../res/upload/".$file["name"])){
        echo "upload succ";
    }
//    move_uploaded_file($file["tmp_name"],"../res/upload/".$file["name"]);
}