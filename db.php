<?
  $db_user="user";
  $db_pass="";
  $db_host="localhost";
  $db="videodemos";
  $demoSandbox='demo.twilightparadox.com';
  $maxResultsPerPage = 6;
  
  
  $local = false;
  if($local){
    $baseURL='local.audiocloud.twilightparadox.com';
    $baseAssetsURL = 'http://local.assets.whitehotrobot.com';
  }else{
    $baseURL='audiocloud.twilightparadox.com';
    $baseAssetsURL = 'https://assets.twilightparadox.com';
  }
  
  $baseFullURL= ($local ? 'http://' : 'https://') . $baseURL;
  $link = mysqli_connect($db_host, $db_user, $db_pass, $db);

?>

