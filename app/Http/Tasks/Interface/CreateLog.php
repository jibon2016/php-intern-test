<?php

namespace App\Http\Tasks\Interface;

class CreateLog implements Logger
{
    public function createLog($type = 'error', $message = '')
    {
        //Directory for Logs
        $fileDirName = $_SERVER['DOCUMENT_ROOT']. '/logs/'. date('d-M-Y');

        //If Directory is Not create then Create

        if (!is_dir($fileDirName)){
            mkdir($fileDirName, 0777, true);
        }

        //Create a Log in File
        $logFileData = $fileDirName. '/log_'. date('d-M-Y') . '.log';

        //Put Log into the file
        $content = $type. ' : ' . date('d-m-Y h:i:s'). ' : ' .$message . PHP_EOL;

        file_put_contents($logFileData, $content, FILE_APPEND | LOCK_EX);

    }
}

//Now Create a Log into the File
$log = new \App\Http\Tasks\Interface\CreateLog();
$log->createLog('info', 'User Visit: IP-'. $_SERVER['REMOTE_ADDR']. ', Line-'. __LINE__ );
