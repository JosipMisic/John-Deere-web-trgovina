<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
        <a href="../Projekt/index.php" class="logo">
        <img src="John Deere logo.png" alt="" class="img-fluid" style="height: 40px;"></a>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
            <ul class="menu-member">
                <?php
                    if(isset($_SESSION["userid"]))
                    {
                    ?>
                    <h5>
                    <p class="text-success" style="padding-top: 8px;"><?php echo $_SESSION["useruid"]; ?></p>
                    </h5>
                    <?php
                     }
                    else
                     {
                    ?>
                    <?php
                     }
                    ?>
                    </ul>
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Košarica
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-danger bg-dark\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-danger bg-dark\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>






