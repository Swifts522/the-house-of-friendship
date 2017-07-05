<html>
    <head>
        <?php
        include "config.php"; ?>
        <meta charset="UTF-8">
        <title></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
                background-image: url(img/Home.png);
                background-size: cover;
                top: 0%;
                left: 10%;
                display: block;
                z-index: 999;
            }   
            #img3
            {
                position: absolute;
                background-image: url(img/logoru.png);
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
            .news
            {
                position: relative;
                float: none;
                display: block;
                padding-bottom: 25px;
                width: 100%;
            }
            .titlenews
            {
                font-size: 25px;
                padding-bottom: 25px;
            }
            .previewtext
            {
                position: relative;
                font-size: 20px;
                float: none;
            }
            .previewimg
            {
            }
            .titlenews a
            {
                text-decoration: none;
                color: #571586;
            }
            .titlenews a:hover
            {
                text-decoration: underline;
            }
            .buttonopen
            {
                position: relative;
                margin-top: 20px;
                background-color: rgba(230, 230, 230, 0.5);
                box-shadow: 0 0 5px rgba(0,0,0,0.5); /* Параметры тени */
                padding: 10px 20px;
                font-size: 18px;
            }
            .previewa
            {
                text-decoration: none;
                color: #571586;
            }
            .dateimg
            {
                background-image: url(img/date.png);
                width: 15px;
                height: 15px;
                display: block;
                background-size: contain;
                margin-bottom: 15px;
                float: left;
                margin-right: 15px;
            }
            #buttonaddnews
            {
                position: relative;
                background-color: rgba(230, 230, 230, 0.5);
                box-shadow: 0 0 5px rgba(0,0,0,0.5); /* Параметры тени */
                padding: 10px 20px;
                font-size: 18px;
                margin-bottom: 50px;
            }
            .previewtext:after {
              content: "";
              display: table;
              clear: both;
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
            #menu a
            {
                color: #fff;
                text-decoration: none;
            }
            #menunav
            {
                display:block;
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
        </style>
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
            <?php
                if(isset($_SESSION['login']))
                {
                    echo "<a href = 'editor.php' class = 'previewa'><div id='buttonaddnews'>Добавить новость</div></a>";
                }
            ?>
           <?php
                $query = 'SELECT * FROM `templates` ORDER BY `Date` DESC';
                $res=mysql_query($query);
                while($row = mysql_fetch_assoc($res))
                {
                    echo "<div class='news'>
                            <div class='titlenews'>
                            <a href = 'viewnews.php?news=".$row['ID']."'>".$row['Title']."</a></div>
                            <div class='dateimg'></div>
                            <p style = 'float: none; padding-bottom: 15px; font-size: 15px;'>Опубликовано ".$row['Date']."</p>
                            <div class='previewtext'>".$row['PreviewText']."</div>
                            <a href = 'viewnews.php?news=".$row['ID']."' class = 'previewa'><div class='buttonopen'>
                            Подробнее...
                            </div></a>
                        </div>";
                }
            ?>
        </div> 
    </body>
</html>