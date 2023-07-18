<?
  $db_user="user";
  $db_pass="";
  $db_host="localhost";
  $db="videodemos";
  $demoSandbox='demo.whitehot.ninja';
  $maxResultsPerPage = 6;
  
  
  $local = false;
  if($local){
    $baseURL='local.audiocloud.whitehot.ninja';
    $baseAssetsURL = 'http://local.assets.whitehotrobot.com';
  }else{
    $baseURL='audiocloud.whitehot.ninja';
    $baseAssetsURL = 'https://assets.whitehot.ninja';
  }
  
  $baseFullURL= ($local ? 'http://' : 'https://') . $baseURL;
  $link = mysqli_connect($db_host, $db_user, $db_pass, $db);

?>

