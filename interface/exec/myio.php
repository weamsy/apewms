<?

require("auth.php");

function apilog($type, $data){
    $line = "[".strtoupper($type)."]".$data." << ".date("d.m.Y");
    file_put_contents(getBaseDir()."wms.log",$line, FILE_APPEND);
    return $line;
}

if (isset($_GET["t"]) && isset($_GET["d"])) {
    echo apilog($_GET["t"],$_GET["d"]);
}

?>