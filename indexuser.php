
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
                        <li><a href="#jasa">Informasi</a></li>
                        <li class="materi-page" onclick="redirMateri()"><a href="materi.php">Tugas</a></li>
                        <li><a href="https://drive.google.com/drive/folders/1y-hDSGFkN_bfDv0RgpUbdf1Vtpgxqx9l?usp=share_link">Google Drive</a></li>
                        <li class="materi-page" onclick="redirMateri()"><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <button class="btn-cta" onclick="redirTime()">Project Management</button>
            </header>
            <div class="container">
                <div class="intro">
                    <p class="title" >Hallo, Selamat datang di kelas XI Multimedia </p>
                    <p class="description">Produk Kreatif dan Kewirausahaan</p>
                    <img src="asset/foto/pic1.png" alt="pic1" class="img-foto"/>
                </div>
            </div>
            <div class="parallax">
                <div class="tentang">
                    <p class="title" >Untuk melihat materi dalam versi flipbook</p>
                    <p class="description">Kamu dapat mengakses flipbook di bawah sini.</p>
                    <div class="mt-10">
                        <button class="btn-cta" onclick="redirWebsite1()">XI MM 1</button>
                        <button class="btn-cta" onclick="redirWebsite2()">XI MM 2</button>
                    </div>
                </div>
                <div class="container">
                        <div class="card" id="jasa">
                            <div class="card-item">
                                <img src="asset/icon/rating.png" alt="icon 1" class="icon"/>
                                <p class="card-title" >Website ini dibuat untuk mempermudah siswa dalam mengakses materi</p>
                                <p class="card-description">Materi tersedia dalam tutorial video pembelajaran.</p>
                            </div>
                            <div class="card-item">
                                <img src="asset/icon/wrench.png" alt="icon 1" class="icon"/>
                                <p class="card-title" >Mengumpulkan Project</p>
                                <p class="card-description">Siswa dapat mengumpulkan tugas pada menu Google Drive.</p>
                            </div>
                            <div class="card-item">
                                <img src="asset/icon/24-hours.png" alt="icon 1" class="icon"/>
                                <p class="card-title" >Project Management</p>
                                <p class="card-description">Project Management dibuat untuk melihat proses siswa dalam praktik mengerjakan proyek.</p>
                            </div>
                        </div>
                </div>
            </div>
            <footer>
                <p class="title" >&copy Pendidikan Teknologi Informasi</p>
            </footer>
    <script>
        function redirWebsite1() {
            window.location.href="loginsystem.php"
        }
        function redirWebsite2() {
            window.location.href="loginsystem2.php"
        }
        function redirTime() {
            window.location.href="https://www.notion.so/738c04fffd6f45258a163c8a2ded7cca?v=3378f6192fda46ea88b55fc11343f26b&pvs=4"
        }
    </script>
    </body>
</html>