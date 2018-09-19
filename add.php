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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">通訊錄</a></div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">    
          <li class="disable"><a href="home.php" target="_self">總覽</a></li>
          <li class="active"><a href="add.php" target="_self">新增</a></li>
          <li class="disable"><a href="manage.php" target="_self">管理</a></li></ul>
          <ul class="nav navbar-nav navbar-right">
<li><a>
        <?php
        echo $_SESSION["setname"];
        ?>
        </a>
    </li>    
      </ul>
    </ul>
  </div>
  </div>
</nav>
<br><br>
<br><br>

   <!--action="home.php"-->

    
<!--div class="col-lg-12"縮減-->
            <div class="well bs-component">
              <form action="save.php" method="POST" style="margin:10px 0 0 0;" class="form-horizontal">
                <fieldset class="info">
                  <legend class="navbar-brand">新增雷姆</legend>
                  
                  <!--      
                  <form name="input" action="home.asp" method="get" style="margin:10px 0 0 0;">
                  -->
                  <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">姓名</label>
                    <div class="col-lg-8">
                      <input type="text" name="name" class="form-control" id="inputName" placeholder="輸入姓名">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTel" class="col-lg-2 control-label">電話</label>
                    <div class="col-lg-8">
                      <input type="text" name="phone" class="form-control" id="inputTel" placeholder="輸入電話">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">信箱</label>
                    <div class="col-lg-8">
                      <input type="email" name="email" class="form-control" id="inputEmail" placeholder="輸入信箱">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-lg-2 control-label">地址</label>
                    <div class="col-lg-8">
                      <input type="text" name="address" class="form-control" id="inputAddress" placeholder="輸入地址">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">去你EMT</button>
                      <button type="submit" class="btn btn-info" value="Submit">丟你雷姆</button>
                    </div>
                  </div>
                </fieldset>
              </form>
          </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js"></script>
  

</body></html>