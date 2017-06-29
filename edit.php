<html>
    <?php
        include "config.php";
        if(!isset($_SESSION['login']) || !isset($_GET['news']))
        {
            header('Location: index.php');
        }
    ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            html, body, div, span, applet, object, iframe,
            h1, h2, h3, h4, h5, h6, p, blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            article, aside, canvas, details, embed, 
            figure, figcaption, footer, header, hgroup, 
            menu, nav, output, ruby, section, summary,
            time, mark, audio, video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            /* HTML5 display-role reset for older browsers */
            article, aside, details, figcaption, figure, 
            footer, header, hgroup, menu, nav, section {
                display: block;
            }
            body {
                line-height: 1;
            }
            ol, ul {
                list-style: none;
            }
            blockquote, q {
                quotes: none;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: '';
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }
            #header
            {
                position: absolute;
                width: 100%;
                height: 8%;
                top: 0%;
                left: 0%;
                background: rgba(0,0,0,0.8);
            }
            body
            {
                background: #eee -webkit-linear-gradient(top,#00A5FF,#eee) no-repeat;
            }
            #menu
            {
                position: absolute;
                color: #fff;
                text-transform: uppercase;
                font-size: 14px;
                width: 80%;
                top: 0%;
                left: 17%;
                height: 60%;
            }
            #menu ul li
            {
                float: left;
                padding-left: 15px;
                padding-right: 15px;
                height: 100%;
                padding-top: 25px;
            }
            #menu ul li:hover
            {
                float: left;
                background-color: #08c;
                cursor: pointer;
            }      
            #img1 
            {
                position: absolute;
                width: 5%;
                height: 100%;
                background: #00A5FF;
                top: 0%;
                left: 10%;
                display: block;
                z-index: 999;
                box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
            }
            #img2
            {
                position: absolute;
                width: 85%;
                height: 95%;
                left: 0%;
                background-image: url(Home.png);
                background-size: cover;
                top: 0%;
                left: 10%;
                display: block;
                z-index: 999;
            }   
            #img3
            {
                position: absolute;
                background-image: url(logoru.png);
                width: 35.5%;
                height: 19.7%;
                display: block;
                background-size: cover;
                top: 10%;
                left: 10%;
            }
            #content
            {
                position: absolute;
                width: 75%;
                top: 35%;
                left: 10%;
                background: rgb(255, 255, 255);
                padding: 35px;
            }
            #menu a
            {
                color: #fff;
            }
            .editortext
            {
                padding-bottom: 30px;  
                padding-top: 20px;
            }
            #content label
            {
                font-size: 20px;
                position: relative;
            }
            #titlebookedit
            {
                width: 100%;
                padding-top: 10px;
                height: 30px;
                font-size: 20px;
                padding-bottom: 10px;
                margin-top: 10px;
                margin-bottom: 20px;
                
            }
            #butonadd
            {
                position: relative;
                background-color: rgba(230, 230, 230, 0.5);
                box-shadow: 0 0 5px rgba(0,0,0,0.5); /* Параметры тени */
                padding: 10px 20px;
                font-size: 18px;
                margin-bottom: 10px;
            }
            .previewa
            {
                text-decoration: none;
                color: #571586;
            }
            #social { 
            float: left; 
            width: 50%; 
            top: 25%;
            position: absolute;
            right: -25%;
            } 

            #social img { 
            width: 30px; 
            height: 30px; 
            float: left; 
            margin-right: 5px; 
            } 
            #menu a
            {
                color: #fff;
                text-decoration: none;
            }
            #menunav
            {
                display:block;
            }
        </style>
        <script src="js/jquery.min.js"></script>
        <script src = 'ckeditor/ckeditor.js'></script>
        <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
    </head>
    <body>
        <div id="header">
             <a href = 'index.php'><div id="img1">
                 <div id="img2"></div>
             </div></a>
             <div id="menu">
                 <ul id="menunav">
                     <a href = 'aboutus.php'><li>О нас</li></a>
                     <a href = 'index.php'><li>Новости</li></a>
                     <a href = 'http://www.ankpvl.kz'><li>АНК Павлодар</li></a>
                     <a href = 'gosz.php'><li>Госзакупки</li></a>
                     <?php
                        if(isset($_SESSION['login']))
                        {
                            echo "<a href = 'exit.php'><li>Выход</li></a>";
                        }
                     ?>
                 </ul>    
             </div>  
        <div id="social"> 
        <a href="http://vk.com" title="Group VK" target="_blank"> 
        <img src="img/vk3D.png" alt="VK" title="VK"> 
        </a> 
        <a href="http://facebook.com" title="Group Facebook" target="_blank"> 
        <img src="img/facebook3D.png" alt="Facebook" title="Facebook"> 
        </a> 
        <a href="http://plus.google.com" title="Group Google+" target="_blank"> 
        <img src="img/google3D.png" alt="G+" title="Google+"> 
        </a> 
        </div> 
        </div> 
        <div id="img3"></div>
        <div id="content">
          <label for 'titlebookedit'>Заголовок</label> 
           <?php
                $query = "SELECT Title FROM `templates` WHERE `ID` = ".$_GET['news'];
                $res=mysql_query($query);
                $row = mysql_fetch_assoc($res);
                echo "<input type = 'edit' id = 'titlebookedit' value='".$row['Title']."'>";
            ?>
            <label for="editortextarea1">Предварительный текст</label>
           <?php
                $query = "SELECT PreviewText FROM `templates` WHERE `ID` = ".$_GET['news'];
                $res=mysql_query($query);
                $row = mysql_fetch_assoc($res);
                echo "<div class = 'editortext'><textarea name='editor1' id = 'editortextarea1'>".$row['PreviewText']."</textarea></div> ";
            ?>
            <label for="editortextarea2">Полный текст</label>
           <?php
                $query = "SELECT Text FROM `templates` WHERE `ID` = ".$_GET['news'];
                $res=mysql_query($query);
                $row = mysql_fetch_assoc($res);
                echo "<div class = 'editortext'><textarea name='editor2' id = 'editortextarea2'>".$row['Text']."</textarea></div>";
            ?>  
            <a href = 'addnews.php'  id = 'butonaddnews' class = 'previewa'><div id="butonadd">Редактировать новость</div></a> 
        </div> 
        <script>
            CKEDITOR.config.height  = '200px';
            CKEDITOR.config.resize_enabled = false;
            var editor1 = CKEDITOR.replace( 'editor1' );
            var editor2 = CKEDITOR.replace( 'editor2' );
            $(document).ready(function()
            {
                $('#butonaddnews').bind("click", function(event)
                {
                    event.preventDefault();
                    if($('#titlebookedit').val().length < 1)
                    {
                        alert('Введите заголовок');
                    }
                    else
                    {
                        var id = "<?php echo $_GET['news'];?>";
                        $.ajax({
                            url: "editnews.php",
                            type: "POST",
                            data: ({ID: id, Title: $('#titlebookedit').val(), PreviewText: editor1.getData(), Text: editor2.getData()}),
                            dataType: "html",
                            success: function(data)
                            {
                                if(data == "1") alert('Новость отредактирована'); 
                                else alert('Ошибка'); 
                                window.location.href = "index.php";
                            }
                        });
                    }
                }); 
            });
        </script>      
    </body>
</html>