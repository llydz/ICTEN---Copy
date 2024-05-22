<link rel="stylesheet" href="./styles/header.css">

<nav>

    <div class="nav-container">
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById("sidebar");
                sidebar.classList.toggle("open-sidebar");
            }
            function closeSidebar() {
                var sidebar = document.getElementById("sidebar");
                sidebar.classList.remove("open-sidebar");
            }
        </script>
        <a id="menu" onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></a>
        <div id="sidebar" class="sidebar">
            <a href="#" class="closebtn" onclick="closeSidebar()">&times;</a>
            <a href="index.php">HOME</a>
            <a href="product.php">PRODUCTS</a>
            <a href="product.php">REFERENCE</a>
            <a href="about.php">ABOUT US</a>
            <a href="contact.php">CONTACT US</a>
        </div>

        <div class="logo">
            ICTEN
        </div>
        <div class="navigation">
            <a href="index.php">HOME</a>
            <a href="product.php">PRODUCTS</a>
            <a href="product.php">REFERENCE</a>
            <a href="about.php">ABOUT US</a>
            <a href="contact.php">CONTACT US</a>
        </div>

        <div class="login">
            <a hidden href="login.php">LOGIN</a>
        </div>



    </div>

</nav>