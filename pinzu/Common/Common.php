<?php
/**
 * Auth: TheAnother
 * Date: 2015/3/17
 * Time: 9:49
 */
require_once("Macros.php");
require_once("Globals.php");
require_once("SMSClient.php");

define("__USER_UPLOAD__", "Uploads/");

/**
 * @param $model
 */
function autoModel(&$model)
{
    $class = new \ReflectionClass($model);

    $properties = $class->getProperties();

    foreach ($properties as $property) {

        $propertyName = $property->getName();

        $value = I($propertyName);

        $property->setValue($model, $value);
    }
}

define('F_GETUSERID', 'getUserId');

function getUserId()
{
    return session(C_USER_ID);
}

function getUidType($uid)
{
    $uid_type = 0;
    if (preg_match('#[a-z0-9&\-_.]+@[\w\-_]+([\w\-.]+)?\.[\w\-]+#is', $uid)) {
        $uid_type = UT_EMAIL_ADDRESS;
    } else if (preg_match('#^1[\d]{10}$#', $uid)) {
        $uid_type = UT_PHONE_NUMBER;
    }
    return $uid_type;
}

function getMillisecond()
{
    list ($t1, $t2) = explode(' ', microtime());
    return (float)sprintf('%.0f', (floatval($t1) + floatval($t2)) * 1000);
}

function getFileExtension($fileName)
{
    return '.' . pathinfo($fileName, PATHINFO_EXTENSION);
}

function getFilePath($folderKey, $subFolderName = NULL, $fileName = NULL, $root = __USER_UPLOAD__)
{
    $folder = $root . Globals::getFolderName($folderKey);

    if ($subFolderName)
        $folder .= "/" . $subFolderName . "/";

    $suffixArr = array(
        'gif',
        'png',
        'jpg',
        'jpeg',
        'html'
    );

    $paths = array();

    foreach ($suffixArr as $index => $suffix) {

        if ($fileName)
            $pattern = $folder . $fileName . '.' . $suffix;
        else
            $pattern = $folder . '*.' . $suffix;

        $all = glob($pattern);

        $paths = array_merge($paths, $all);
    }

    return $fileName ? $paths[0] : $paths;
}

function saveUploadedFile($file, $folderKey, $subFolder = NULL, &$fileName = NULL)
{
    if ($file["error"] > 0)
        return false;

    $source = $file["tmp_name"];

    $fileExt = getFileExtension($file["name"]);

    if ($fileName == NULL)
        $fileName = (string)getMillisecond() . $fileExt;
    else
        $fileName .= $fileExt;

    $root = getPath($folderKey);

    if ($subFolder)
        $root .= "/" . $subFolder;

    if (!is_dir($root))
        mkdir($root, 0777, true);

    return move_uploaded_file($source, $root . "/" . $fileName);
}

function getPath($folderKey, $root = __USER_UPLOAD__)
{
    $folderName = Globals::getFolderName($folderKey);

    return $root . $folderName;
}

function getRandomKey()
{
    $key = (string)mt_rand(1000, 9999);
    return $key;
}

function setDictValue(&$list, $dict, $keyName = C_STATUS, $valueName = C_STATUS_NAME)
{
    foreach ($list as $index => $item) {
        $status = $item[$keyName];
        $list[$index][$valueName] = $status_name = $dict[$status];
    }

}

function py_md5($content)
{
    return md5($content . ".py.access");
}

function getDataFromKendoRequest()
{
    $json = $_REQUEST['models'];

    return json_decode($json, true)[0];
}

function  kendo_callback($data, $msg = null)
{
    $callback = $_GET["callback"];

    if ($data)
        $callback = sprintf("%s(%s);", $callback, json_encode($data, true));
    else
        $callback = sprintf("%s([]);",$callback);

    if ($msg)
        $callback .= sprintf("alert('%s');", $msg);

    echo $callback;
}