<header id="header">
    <div class="container">
        <div  class="justify-content-center">
            <a href="./home.php"><img src="../views/images/logo.png" alt="" title="" /></img></a>
         </div>
                    <ul class="nav nav-pills nav-fill nav-tabs">
                        <li class="nav-item dropdown">
                            <a id="myTab" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Avalable resume</a>
                            <ul class="dropdown-menu">
                                <?php getNomAllUsers(); ?>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Avalable resume</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/register.php">New User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                       
               
    </div>
</header>