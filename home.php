<?php
session_start();
?>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Content/AssetsBS3/img/favicon.ico">
    <title>通訊錄</title> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Content/AssetsBS3/examples/starter-template.css" rel="stylesheet">
    <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <script src="/Scripts/AssetsBS3/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".col_id").click(function(e){
            var id = this.innerText;
            $.ajax({
              url : 'ajax.php',
              method : 'GET',
              data:{
                "id":id
              },
              dataType:'json',
              success:function(obj){
                alert(obj["name"]);
              },
              error:function(msg){
                alert("ERROR:" + msg);
              }
            });

        });

      });
    </script>
  </head>

  <body>

  <!-- 最新編譯和最佳化的 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!-- 選擇性佈景主題 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <!-- 最新編譯和最佳化的 JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 

          <a class="navbar-brand" href="#">通訊錄</a></div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php" target="_self">總覽</a></li>
            <li><a href="add.php" target="_self">新增</a></li>
            <li><a href="manage.php " target="_self">管理</a></li> <!--上面的按鈕-->
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a>
        <?php
        $_SESSION["setname"]="silentforest";
        echo $_SESSION["setname"];
        ?>
        </a>
    </li>    
      </ul>


          </ul>
        </div>
      </div>
    </nav>
    <br></br>
    <br></br>
<!--按鈕以下了///////////////////////////////////////////////////////////-->

    <div class="well bs-component">
      <!-- Default panel contents -->
      <div class="panel-heading">
      <legend class="navbar-brand" style="color: #111111">所有會員</legend>
      </div>

      <!-- Table -->

      <table class="table table-striped">
        <thead>
          <tr>
            <th class="col-md-1">編號</th>
            <th class="col-md-2">照片</th>
            <th class="col-md-2">角色名稱</th>
<!--             <th class="col-md-2">電話</th>
            <th class="col-md-2">信箱</th>
            <th class="col-md-4">地址</th> -->
<!--             <th class=" col-md-1">　　</th>
            <th class=" col-md-1">　　</th>不知道用來幹嘛的 -->
          </tr>
        </thead>
        <tbody>
<?php 
 include("key.php");
?>
<?php



// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
mysqli_set_charset($con,"utf8");//make chinese work
$sql = "SELECT * FROM 403411233_de_ciquo";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td class=\"col_id\">".$row['id']."</td>";
      echo "<td><img class=\"img-thumbnail\"  src=\"http://dl.profile.line-cdn.net/0h66L3hMnHaRlxSkTg8-8WTk0PZ3QGZG9RCXhzK1RMNHoPLS8bTCRxeQBDNSxdKS9GTCRyfFNCYixU\"  style=\"width: 40px; word-break:break-all;\"></td>";//no height to ensure img propotion
      echo "<td>" . $row['name'] . "</td>";
      // echo "<td>" . $row['phone'] . "</td>";
      // echo "<td>" . $row['email'] . "</td>";
      // echo "<td>" . $row['address'] . "</td>";
      echo "</tr>";
    }
} else {
    echo "0 results";
}

mysql_close($con);
?>

        </tbody>
      </table>
    </div>
</body>
</html>