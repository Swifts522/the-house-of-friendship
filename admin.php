<!DOCTYPE html>
<html>
<head>
    <?php
        include "config.php"; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<script src="js/jquery.min.js"></script>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Войти в панель управления</h1>
      <form method="post" action="index.html">
        <p><input type="text" name="login" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Пароль"></p>
        <p class="submit" id = 'SinginButton'><input type="submit" name="commit" value="Войти"></p>
      </form>
    </div>
  </section>
  <script>
        $(document).ready(function()
        {
            $('#SinginButton').bind("click", function(event)
            {
                event.preventDefault();
                if($('input[name=login]').val().length < 1)
                {
                    alert('Введите email');
                }
                else if($('input[name=password]').val().length < 1)
                {
                    alert('Введите пароль');
                }
                else
                {
                    $.ajax({
                        url: "login.php",
                        type: "POST",
                        data: ({Email: $('input[name=login]').val(), Password: $('input[name=password]').val()}),
                        dataType: "html",
                        success: function(data)
                        {
                            if(data == "0")
                            {
                                alert('Неверное имя пользователя, либо пароль');    
                            }
                            else
                            {
                                alert('Вы успешно вошли');
                                window.location.href = "index.php";
                            }
                        }
                    });
                }
            }); 
        });
  </script>
</body>
</html>
