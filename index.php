<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>ICTEN</title>
</head>




<body>

    <header>

    </header>

    <!-- <nav>

        <div class="nav-container">
            <a href="#" id="menu">
                <i class="fa-solid fa-bars"></i>
            </a>

            <div class="logo">
                ICTEN
            </div>
            <div class="navigation">
                <a href="">HOME</a>
                <a href="">SERVICES</a>
                <a href="about.php">ABOUT US</a>
                <a href="">CONTACT US</a>
            </div>



            <div class="login">
                <a hidden href="login.php">LOG IN</a>
            </div>
        </div>

    </nav> -->

    <main>
    <?php include ('header.php'); ?>

        <div class="intro">
            <div class="taas">
                <h1>WELCOME TO ICTEN</h1>
                <p>ICTEN I.T. Solutions is committed to bringing the best solutions for its customers. We pride
                    ourselves
                    for being a leading player in the market today, being a reliable technology partner across the
                    Philippines.</p>
            </div>

            <div class="intro-img">
                <img src="./images/pic.png" alt="pic">
            </div>
        </div>

        <div class="baba">
            <h1>ICTEN OFFERINGS:</h1>


            <div class="offers">
                <div class="offerings">

                    <img class="offer-img" src="./images/it-solutions.png" alt="offer">

                    <div class="expl">

                        <h3>IT SOLUTIONS</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veritatis minima doloribus a.
                            Corrupti dolore consequatur error at porro magni molestiae impedit quasi facilis non labore
                            dignissimos, vel optio ut!</p>
                    </div>
                </div>

                <div class="offerings">

                    <img class="offer-img" src="./images/pc-repair.png" alt="offer">

                    <div class="expl">

                        <h3>PC REPAIR</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veritatis minima doloribus a.
                            Corrupti dolore consequatur error at porro magni molestiae impedit quasi facilis non labore
                            dignissimos, vel optio ut!</p>
                    </div>
                </div>

                <div class="offerings">

                    <img class="offer-img" src="./images/net-sup.png" alt="offer">

                    <div class="expl">

                        <h3>NETWORK SUPPORT</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veritatis minima doloribus a.
                            Corrupti dolore consequatur error at porro magni molestiae impedit quasi facilis non labore
                            dignissimos, vel optio ut!</p>
                    </div>
                </div>

                <div class="offerings">
                    <img class="offer-img" src="./images/coding.png" alt="offer">

                    <div class="expl">

                        <h3>CODING PROJECTS</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veritatis minima doloribus a.
                            Corrupti dolore consequatur error at porro magni molestiae impedit quasi facilis non labore
                            dignissimos, vel optio ut!</p>
                    </div>
                </div>
                <div class="offerings">
                    <img class="offer-img" src="./images/software.png" alt="offer">

                    <div class="expl">

                        <h3>SOFTWARE SERVICING</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veritatis minima doloribus a.
                            Corrupti dolore consequatur error at porro magni molestiae impedit quasi facilis non labore
                            dignissimos, vel optio ut!</p>
                    </div>
                </div>

                <div class="offerings">
                    <img class="offer-img" src="./images/cont.png" alt="offer">

                    <div class="expl">

                        <h3>CONTENT CREATION</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veritatis minima doloribus a.
                            Corrupti dolore consequatur error at porro magni molestiae impedit quasi facilis non labore
                            dignissimos, vel optio ut!</p>
                    </div>
                </div>


            </div>
    </main>

    <?php include ('footer.php'); ?>

    <!-- <script>
        document.getElementById('menu').addEventListener('click', function () {
            var nav = document.querySelector('.navigation');
            var navTop = getComputedStyle(nav).top; // Get the computed value of 'top'

            if (navTop === '-120px') {
                nav.style.top = '70px';
            } else { // Include '0px' as a fallback
                nav.style.top = '-12bb ,0px';
            },,
        });

    </script> -->


</body>

</html>