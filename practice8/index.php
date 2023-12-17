<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        [class*="col-"] {
            float: left;
            padding: 15px;
        }

        html {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #3498db;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu li {
            padding: 8px;
            margin-bottom: 7px;
            background-color: #2980b9;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .menu li:hover {
            background-color: #36a9e0;
        }

        .aside {
            background-color: #2980b9;
            padding: 20px;
            color: #fff;
            text-align: center;
            font-size: 14px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .footer {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            font-size: 12px;
            padding: 15px;
        }

        [class*="col-"] {
            width: 100%;
        }

        @media only screen and (min-width: 600px) {
            .col-s-1 { width: 8.33%; }
            .col-s-2 { width: 16.66%; }
            .col-s-3 { width: 25%; }
            .col-s-4 { width: 33.33%; }
            .col-s-5 { width: 41.66%; }
            .col-s-6 { width: 50%; }
            .col-s-7 { width: 58.33%; }
            .col-s-8 { width: 66.66%; }
            .col-s-9 { width: 75%; }
            .col-s-10 { width: 83.33%; }
            .col-s-11 { width: 91.66%; }
            .col-s-12 { width: 100%; }
        }

        @media only screen and (min-width: 768px) {
            .col-1 { width: 8.33%; }
            .col-2 { width: 16.66%; }
            .col-3 { width: 25%; }
            .col-4 { width: 33.33%; }
            .col-5 { width: 41.66%; }
            .col-6 { width: 50%; }
            .col-7 { width: 58.33%; }
            .col-8 { width: 66.66%; }
            .col-9 { width: 75%; }
            .col-10 { width: 83.33%; }
            .col-11 { width: 91.66%; }
            .col-12 { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="color: #ffffff;">PRAKTIKUM PEMOGRAMAN WEB TENTANG CSS-MM4</h1>
    </div>

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <ul>
                <li><a class="active" href="#home">php</a></li>
                <li><a href="arrays.php">array</a></li>
                <li><a href="casting.php">casting</a></li>
                <li><a href="comments.php">comment</a></li>
                <li><a href="constants.php">constans</a></li>
                <li><a href="datatypes.php">datatypes</a></li>
                <li><a href="echo.php">echo</a></li>
                <li><a href="functions-retrun1.php">functions-retrun1</a></li>
                <li><a href="functions-retrun2.php">functions-retrun2</a></li>
                <li><a href="functions.php">functions</a></li>
                <li><a href="hello.php">hello</a></li>
                <li><a href="if-else-elsif.php">if-else-elseif</a></li>
                <li><a href="loops.php">loops</a></li>
                <li><a href="math.php">math</a></li>
                <li><a href="numbers.php">numbers</a></li>
                <li><a href="operators.php">operators</a></li>
                <li><a href="regex.php">regex</a></li>
                <li><a href="strings.php">strings</a></li>
                <li><a href="superhlobals.php">superhlobals</a></li>
                <li><a href="switch.php">switch</a></li>
                <li><a href="syntax.php">syntax</a></li>
                <li><a href="variables.php">variables</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-3 col-s-3 menu">
                <ul>
                    <li>Wayan Bayu Pamungkas</li>
                    <li>Fakultas Informatika Program Studi S1 Teknik Informatika 2021</li>
                    <li>Institut Teknologi Telkom Purwokerto</li>
                    <li>Jawa Tengah</li>
                </ul>
            </div>

            <div class="col-3 col-s-12">
                <div class="aside">
                    <h2 style="color: #f6920e;">Tentang</h2>
                    <p style="text-align: justify; color: #e2e1e1;">
                        Saya Wayan Bayu Pamungkas Mahasiswa Program Studi S1 Teknik Informatika Fakultas Informatika angkatan 2021. Saya Lahir di Cilacap, 07 Juni 2003.
                    </p>
                    <h2 style="color: #f6920e;">Kata-Kata Inspirasi</h2>

                    <p style="text-align: justify; color: #e2e1e1;">
                        "One Thousand Problems Million Solutions" Setiap masalah selalu ada jalan !!!
                    </p>
                    <h4 style="text-align: justify; color: #5d0303;">
                        HIDUP MAHASISWA!!!
                    </h4>
                </div>
            </div>
        </div>

        <div class="footer">
            <p style="color: #ffffff;">Latihan Pemrograman Web dengan dosen pengampu Bapak Novian Adi Prasetyo dan Asprak Kak Faiza Rachma.</p>
        </div>
    </body>
</html>