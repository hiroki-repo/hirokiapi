<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
if(isset($_GET['page'])) { 
$page = $_GET['page']; 
}
?>
<form method="post" action="editpage.php">
<textarea name="contents" cols="60" rows="20">
<?php
// ファイル内容を表示
$file = $page."s.html";
if(isset($_GET['editcmd'])) {
      $cmdedit = $_GET['editcmd'];
if ($cmdedit=="1"){
$file = "command.html";
}
  }
  $text = file_get_contents($file);
  $text = htmlspecialchars($text);
  print $text;
?>
</textarea><br>
</td>
</tr>
<tr>
<td align="right">
<input type="submit" name="open" value="open">
</td>
<td align="right">
<input type="submit" name="save" value="save">
</td>
</tr>
</table>
<input type="hidden" name="editfile" value="<?php print $file ?>">
</form>
<?php
// ファイルを保存
$editfile = $_POST['editfile'];
if ($_POST['save'] && $editfile) {
  $fp = @fopen($editfile, 'w');
  if (!$fp) print "save fail<br>\n";
  else {
    //$contents = htmlspecialchars($_POST['contents']);
    $contents = $_POST['contents'];
    fwrite($fp, $contents);
    fclose($fp);
    print "save ok<br>\n";
  }
}
?>