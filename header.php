<?php include('./config/config.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/site.webmanifest">
    <!-- Styles -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title><?php echo $lang['title']; ?></title>
    <link rel="stylesheet" href="./assets/css/style.min.css">

</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header__toggle">
                <button type="button" class="menuToggle">Menu</button>
            </div>
            <div class="header__logo">
                <a href="#">
                    <img src="./assets/img/logo.svg" alt="logo">
                </a>
            </div>
            <div class="header__search">
                <button type="button">
                    <img src="./assets/img/search.svg" alt="search">
                </button>
            </div>
        </div>


        <!-- Collapse Navbar -->
        <div class="sideMenu">
            <div class="sideMenu__header">
                <div class="sideMenu__header__default">
                    <button type="button" class="closesidemenu">
                        <img src="./assets/img/Cancel_mobile.svg" alt="cancel">
                    </button>
                    <a href="#"><?php echo $lang['SigninorRegister']; ?></a>
                </div>

            </div>

            <!-- Main navigation -->
            <ul class="navMain__section">
                <li>
                    <a href="#" class="parent__link"><?php echo $lang['Personal']; ?></a>
                </li>
                <li>
                    <a href="#" class="parent__link"><?php echo $lang['Business']; ?></a>
                </li>
                <li>
                    <a href="#" class="parent__link"><?php echo $lang['Ourcompany']; ?></a>
                </li>
                <li>
                    <a href="#" class="parent__link"><?php echo $lang['Store']; ?></a>
                </li>
                <li>
                    <a href="#"><?php echo $lang['Support']; ?></a>
                </li>
            </ul>




            <div class="navUtility">
                <ul>
                    <li>
                        <a href="#">
                            <div class="navUtility__icon">
                                <img src="./assets/img/track.svg" alt="track">
                            </div>
                            <span><?php echo $lang['Track']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="navUtility__icon">
                                <img src="./assets/img/look-up-postal-code.svg" alt="track">
                            </div>
                            <span><?php echo $lang['Findapostalcode']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="navUtility__icon">
                                <img src="./assets/img/find-rate.svg" alt="track">
                            </div>
                            <span><?php echo $lang['findarate']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="navUtility__icon">
                                <img src="./assets/img/epost.svg" alt="track">
                            </div>
                            <span><?php echo $lang['epost']; ?></span>
                        </a>
                    </li>
                </ul>
                <a href="#" class="seemoreTool"><?php echo $lang['Seemoretools']; ?></a>
            </div>

            <div class="langToggle">
                <?php if ($_SESSION['lang'] == "en") { ?>
                    <a href="index.php?lang=fr">Français</a>
                <?php } else { ?>
                    <a href="index.php?lang=en">English</a>
                <?php } ?>
            </div>
        </div>


        <!-- Search -->
        <div class="search">
            <div class="search__header">
                <button type="button" class="closeSearch">
                    <img src="./assets/img/Cancel_mobile.svg" alt="cancel">
                </button>
                <form action="#">
                    <input type="text" class="form-control" placeholder="<?php echo $lang['Searchourwebsite']; ?>">
                </form>
            </div>
            <div class="search__content">
                <h2><?php echo $lang['Popularsearches']; ?></h2>

                <div class="pplrSearch">
                    <a href="#" class="pplrSearch__box">
                        <div class="pplrSearch__box__icon">
                            <img src="./assets/img/look-up-postal-code.svg" alt="loop up">
                        </div>
                        <p><?php echo $lang['Lookupapostalcode']; ?></p>
                    </a>
                    <a href="#" class="pplrSearch__box">
                        <div class="pplrSearch__box__icon">
                            <img src="./assets/img/stamp-prices.svg" alt="loop up">
                        </div>
                        <p><?php echo $lang['Stampprices']; ?></p>
                    </a>
                    <a href="#" class="pplrSearch__box">
                        <div class="pplrSearch__box__icon">
                            <img src="./assets/img/mail-forwarding.svg" alt="loop up">
                        </div>
                        <p><?php echo $lang['MailForwarding']; ?></p>
                    </a>
                    <a href="#" class="pplrSearch__box">
                        <div class="pplrSearch__box__icon">
                            <img src="./assets/img/track.svg" alt="loop up">
                        </div>
                        <p><?php echo $lang['Track']; ?></p>
                    </a>
                    <a href="#" class="pplrSearch__box">
                        <div class="pplrSearch__box__icon">
                            <img src="./assets/img/all-postal-guides.svg" alt="loop up">
                        </div>
                        <p><?php echo $lang['Allpostalguides']; ?></p>
                    </a>
                    <a href="#" class="pplrSearch__box">
                        <div class="pplrSearch__box__icon">
                            <img src="./assets/img/support.svg" alt="loop up">
                        </div>
                        <p><?php echo $lang['Support']; ?></p>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <script>
        $(document).bind("contextmenu",function(e) {
        e.preventDefault();
        });

        $(document).keydown(function(e){
            if(e.which === 123){
            return false;
            }
        });
    </script>
    