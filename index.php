<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>测试</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>

<div class="container" style="padding-top: 60px;">
    <h1>Tonight	Schedule</h1>
    <div>
        <img src="aa.jpg"  style="width: 50%;height: 500px">
    </div>
    <div>
        <div class="form-group">
            <label for="exampleInputEmail1"><h3>Would you like to have dinner with me tonight?</h3></label>
            <br>
            <button class="btn btn-success" id="success">yes</button>
            <br>
            <br>
            <button type="button" class="btn btn-danger"  data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?" id="lose">no</button>
        </div>
    </div>

</div>
<script>
    $(function () {
     $('#success').on('click',function () {
         alert("good hoopier baby!!");
     });
      $('#lose').on('click',function () {
          alert("eat what tonight!!");
      });
    });

</script>

</body>
</html>

