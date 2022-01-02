<?php
// Uncomment this code to turn on maintainance mode
//header("Location: ./undermaintainance.php")
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="./ext/all.css">
<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./ext/initial-variables.sass">
<div class="notification is-warning">
    <button class="delete"></button>
    The website is currently <b>under development</b>. Some things <b>may not work</b> or <b>may be formatted wrong.</b> If you have any issue please report it to <a href="https://github.com/CinqueNetwork/cinque.network">the github</a>. <br>Thank you, Priansh Mittra
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            const $notification = $delete.parentNode;

            $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
            });
        });
    });
</script>
<style>
    .background-grey-extralight {
        background-color: #EAEFF0;
    }

    .blackborder {
        color: black;
    }

    hr {
        background-color: grey;
        margin-left: auto;
        margin-right: auto;
    }

    .hr2 {
        width: 20%;
        margin-left: 10px;
        background-color: black;
    }

    .hr4 {
        width: 10%;
        margin-left: auto;
        margin-right: auto;
        background-color: black;
    }

    .hr3 {
        width: 30%;
        height: 5px;
        margin-left: auto;
        margin-right: auto;
        background-color: aqua;
    }

    .margins {
        margin-left: 10px;
        margin-right: 10px;
    }

    .hr3-blackline {
        width: 30%;
        height: 5px;
        margin-left: auto;
        margin-right: auto;
        background-color: black;
    }
</style>
<header class="is-mobile">
    <nav class="navbar has-background-white" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item is-active" href="/">
                <img src="./images/brand.png" height="172">
                &nbsp;Home
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar">
                <span aria-hidden="true"></span><span aria-hidden="true"></span><span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbar" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="#">
                    <i class="fas fa-book" style="color:#f6b93b;"></i>&nbsp;Whitepaper
                </a>
                <a class="navbar-item" href="#">
                    <i class="fas fa-heart" style="color:#ff7474;"></i>&nbsp;Donate
                </a>
                <a class="navbar-item" href="./team.php">
                    <i class="fas fa-user" style="color:#00e7ff;"></i>&nbsp;Our Team
                </a>
            </div>
            <div class="navbar-end buttons has-addons">
                <a class="navbar-item" href="https://twitter.com/">
                    <i class="fab fa-lg fa-twitter"></i></a></li>
                </a>
                <a class="navbar-item" href="https://www.reddit.com/">
                    <i class="fab fa-lg fa-reddit"></i></a></li>
                </a>
                <a class="navbar-item" href="https://discord.gg">
                    <i class="fab fa-lg fa-discord"></i></a></li>
                </a>
                <a class="navbar-item" href="https://github.com/revoxhere/">
                    <i class="fab fa-lg fa-github"></i></a></li>
                </a>
                <div class="navbar-item">
                    <div class="buttons">
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }

        });
    </script>
</header>
<body class="is-mobile">
    <p class="title has-text-centered">
        Team
    </p>
    <p class="subtitle has-text-centered">
        The amazing team that brings you <strong>cinque</strong>!
    </p>
    <div class="tile is-ancestor" style="margin:10px">
        <div class="tile is-vertical is-3">
            <div class="tile">
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification is-primary">
                        <p class="title has-text-centered">Helpful Crypto Miner</p>
                        <p class="subtitle has-text-centered has-text-warning">Lead Developer | <span class="has-text-danger">Founder</span></p>

                    </article>
                </div>
            </div>
        </div>
    </div>
</body>