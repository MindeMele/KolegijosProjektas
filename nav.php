
    <nav class="navbar navbar-expand-md navbar-light bg navbar-right">
        <div class="collapse navbar-collapse w-100" id="navbarNavDropdown">
            <ul class="nav navbar-nav h-100 d-flex align-items-center">
            <li class="nav-item ">
                    <a class="nav-link" href="uzsakymas.php">Sukurti Užsakymą</a>
            </li>
            </ul>
            <ul class="nav navbar-nav h-100 ms-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="pagrindinis.php">Pagrindinis</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="rsc/img/user-photo.png" alt="user-photo" width="50px" height="50px">
                        <span><?php echo $_SESSION["username"]; ?></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<a class="dropdown-item"  href="nustatymai.php">Nustatymai</a>';
                                }
                            ?>
                        </li>
                        <li>
                            <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<a class="dropdown-item" href="includes/logout.inc.php">Atsijungti</a>';
                                }
                            ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>