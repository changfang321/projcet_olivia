<!DOCTYPE >
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flower desing Olivia</title>

    <link rel="stylesheet" href="css1/banner.css">
    <link rel="stylesheet" href="css1/navbar.css">
    <link rel="stylesheet" href="css1/about.css">
    <link rel="stylesheet" href="css1/tiles.css">
    <link rel="stylesheet" href="css1/designimg.css">
    <link rel="stylesheet" href="css1/map.css">
    <link rel="stylesheet" href="fontawesome-5.2.0/css/all.css">
    <link rel="stylesheet" href="css1/footer.css">
    <link rel="stylesheet" href="css1/all.css">


</head>

<body>

    <div id="all">

        <div id="block">
            <ul class="images">
                <li>
                    <img src="images/banner1.jpg" alt="">
                </li>
                <li>
                    <img src="images/banner2.jpg" alt="">
                </li>
                <li>
                    <img src="images/banner3.jpg" alt="">
                </li>
                <li>
                    <img src="images/banner4.jpg" alt="">
                </li>
            </ul>
            <input type="button" value="<" id="prev">
            <input type="button" value=">" id="next">
        </div>
        <div id="navbar">
            <ul class="nav">
                <li class="logoli">
                    <a href=''><img src="images/logo.png"></a>
                </li>
                <li>
                    <p class="logoP"><i class="fas fa-bars"></i></p>
                    <ul class="tresA">
                        <li>
                            <h3 class='tres'>
                                <a href='#content' onclick="myFunction()" >關於Olivia</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class='tres'>
                                <a href="share_list.php"> 花藝分享</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class='tres'>
                                <a href="designflower.php">特殊佈置</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class='tres'>
                                <a href='#map' ><p>花坊位置</p></a>
                            </h3>
                        </li>
                        <li>
                            <h3 class='tres'>
                                <a href='index.php' onclick="myFunction()" >線上花店</a>
                            </h3>
                        </li>

                    </ul>
                </li>
            </ul>

        </div>




        <div id="content">

            <ul id="contentul">
                <li class="contentli">

                    <h1>花坊的故事</h1>
                    <a href="https://www.instagram.com/olivia_ch/" alt="https://www.instagram.com/olivia_ch/" target="_blank">OLIVIA
                        IG</a>
                    <br>
                    <br>

                    <p>五年前到澳洲打工渡假，因緣際會下接觸了花藝，</p>
                    <p> 開啟了我對花藝的喜好，旅途中認識了很多人，</p>
                    <p> 很多故事，這些經歷讓我更加壯大，</p>
                    <p> 也將旅途中所吸收到的美，呈現在我的作品裡</p>
                    <p> ，分享給他人。
                    </p>
                </li>
                <li>
                    <img src="images/aboutpic.png">
                </li>
            </ul>

        </div>




        <div class="tiles">

            <div class="tile" data-scale="1.1" data-image="images/tiles1.jpg"></div>
            <div class="tile" data-scale="1.1" data-image="images/tiles2.jpg"></div>
            <div class="tile" data-scale="1.1" data-image="images/tiles3.jpg"></div>
        </div>


        <div id="designimg">
            <span id="P" class="arrowNP">
            </span>
            <ul class="sliderul">
                <li class="sliderli">
                    <img src="images/designimg1.jpg" alt="silder—1">
                    <div class="des">
                        <h3></h3>
                        <span></span>
                    </div>
                </li>
                <li class="sliderli">
                    <img src="images/designimg2.jpg" alt="silder-2">
                    <div class="des">
                        <h3></h3>
                        <span></span>
                    </div>
                </li>
                <li class="sliderli">
                    <img src="images/designimg3.jpg" alt="silder-3">
                    <div class="des">
                        <h3></h3>
                        <span></span>
                    </div>
                </li>
            </ul>
            <span id="N" class="arrowNP"></span>


        </div>
        <div id="map">
            <div class="mapul">
                <iframe src="https://www.google.com/maps/d/embed?mid=1w5ZBKo8SHAKN-nHKIlMEXacG8LNaJEly&hl=zh-TW"></iframe>

            </div>
            <div>
                <br>
                <br>
                <h1>花坊位置:</h1>
                <br>
                <p> 桃園市八德區介壽路一段728號</p>
                <br>
                <h1>花坊電話:</h1>
                <br>
                <p>03-3365588</p>
                <br>
                <h1>花坊 QR code:</h1>
                <br>
                <p><img src="images/qrcode.png"></p>
            </div>


        </div>
        <div id="footer">

            <div class="footerlogo"><img src="images/footerlogo.png" alt=""></div>

            <div class="footercontent">
                <div class="footericon">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-blogger-b"></i>
                    <i class="fab fa-facebook-messenger"></i>

                </div>
                <div class="footerp">
                    <p>Copyright <i class="far fa-copyright"></i>2018 Olivia flower design. All rights reserved</p>
                </div>
            </div>

        </div>


    </div>

    <script src="js1/jquery-1.12.4.js"></script>
    <script src="js1/jquery-ui.js"></script>
    <script src="js1/bannerimg.js"></script>
    <script src="js1/navbar.js"></script>
    <script src="js1/about.js"></script>
    <script src="js1/tiles.js"></script>
    <script src="js1/designimg.js"></script>
    <script src="js1/goto.js"></script>



</body>

</php>