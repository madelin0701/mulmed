<?php

?>

<html>
    <head> 
        <meta charset="utf-8" />
        <link rel="icon" href="%PUBLIC_URL%/favicon.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>WEB MULTIMEDIA</title>
        <link rel="stylesheet" href="styli.css"/>
    </head>
    <body>
            <header>
                <div class="logo">
                    <img src="asset/icon/desainlogo.jpg" alt="logo" class="logo-img"/>
                    <h1 class="logo">MULTIMEDIA</h1>
                </div>
                <nav>
                    <ul>
                        <li class="materi-page" onclick="redirMateri()"><a href="logout.php">Logout</a></li>
            </header>
            <div class="container">
                        <div class="card" id="jasa">
                            <div class="card-item">
                                <img src="asset/icon/logos.png" alt="icon 1" class="icon"/>
                                <p class="card-title" >Data akun siswa XI MM 1 yang mengakses web</p>
                                <button class="btn-cta" onclick="redirWebsite1()">XI MM 1</button>
                            </div>
                            <div class="card-item">
                                <img src="asset/icon/logos.png" alt="icon 1" class="icon"/>
                                <p class="card-title" >Data akun siswa XI MM 2 yang mengakses web</p>
                                <button class="btn-cta" onclick="redirWebsite2()">XI MM 2</button>
                            </div>
            </div>


    <script>
        function redirWebsite1() {
            window.location.href="admincr.php"
        }
        function redirWebsite2() {
            window.location.href="admincr2.php"
        }


    </script>
    </body>
     </html>