<?php
ini_set('display_errors', "On");
date_default_timezone_set ('Asia/Tokyo');
/*
    src内のphpファイルを全て読み込む
*/

// srcのパス
$_src = pathinfo(__FILE__, PATHINFO_DIRNAME);
// $_src = "src/";

loadPHPFileAll($_src);

// 下層含めて全てのPHP読み込み
function loadPHPFileAll($_src){

    // 読み込みの例外
    $exception = [$_src."utility.php"];

    // もし、$_srcがデレクトリである
    if( is_dir($_src) ){

        $files = glob($_src."*");

        foreach ($files as $file) {
            
            // ファイル名が .phpで終わっているか && 例外ではないか
            if( str_ends_with($file,".php") && !in_array($file, $exception)){

                require($file);
            }

            // もしデレクトリなら
            else if( is_dir($file) ){
                loadPHPFileAll($file."/");
            }
        }
    }
}


if( !function_exists("str_starts_with") ){
    function str_starts_with($haystack, $needle) {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }
}

if( !function_exists("str_ends_with") ){

    function str_ends_with($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }
        return (substr($haystack, -$length) === $needle);
    }
}