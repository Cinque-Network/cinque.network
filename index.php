<!DOCTYPE html>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="./ext/all.css">
<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./ext/initial-variables.sass">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="CinQue Network" />
<title>Cinque Network</title>
<div class="notification is-warning">
    <button class="delete"></button>
    The website is currently <b>under development</b>. Some things <b>may not work</b> or <b>may be formatted wrong.</b> If you have any issue please report it to <a href="https://github.com/CinqueNetwork/cinque.network">the github</a>. Thank you, Priansh Mittra
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
        width:10%;
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
                <a class="navbar-item" href="#">
                    <i class="fas fa-user" style="color:#00e7ff;"></i>&nbsp;Our Team
                </a>
            </div>
            <div class="navbar-end">
                <--When socials are released put em here-->
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
<br>
<br>

<body class="is-mobile">
    <section class="margins">
        <p class="title has-text-centered">
            Cinque
        </p>
        <div class="container">
            <hr>
        </div>
        <p class="is-size-5 has-text-centered">
            A decentralized coin <b>forked</b> from digibyte with <b>5</b> PoW (<b>Proof of Work</b>) algorithms.
        </p>
        <br>
        <p class="is-size-4 has-text-centered">
            <b>So, what are the benefits of joining Cinque Network?</b>
        </p>
        <div class="columns" style="margin:10px;">
            <div class="column is-size-5">
                <ul class="is-shadow">
                    <li><span class="icon">
                            <i class="far fa-signature"></i>
                        </span>
                        <span>Coin Name: <strong>Cinque</strong></span>
                    </li>
                    <li><span class="icon"><i class="fas fa-sticky-note"></i></span>
                        <span>Ticker: <strong>CIN</strong></span>
                    </li>
                    <li><span class="icon"><i class="fas fa-coins"></i></span>
                        <span>Max Coins: <strong>5 Million</strong></span>
                    </li>
                    <li><span class="icon"><i class="fas fa-stopwatch"></i></span>
                        <span>Block Time: <strong>10 Minutes</strong></span>
                    </li>
                    <li><span class="icon"><i class="fas fa-code"></i></span>
                        <span><span>Algorithms(PoW):</span> <span class="is-size-6"><br><b>Equihash192</b> (GPU),<br> <b>MYR-GRS</b>(ASIC), <br><b>Ghostrider</b> (CPU, GPU), <br><b>Keccak</b>(CPU, GPU, ASIC, FGPA), <br><b>HeavyHash</b>(CPU, GPU, FGPA)</span></span>
                </ul>
            </div>
            <div class="column is-two-thirds is-size-5">
                <ul class="is-shadow">
                    <b>Why Else?</b>
                    <li><span class="icon"><i class="fas fa-desktop"></i></span>
                        <span>Ongoing development</span>
                    </li>
                    <li><span class="icon"><i class="far fa-balance-scale"></i></span>
                        <span>Balanced Algorithms</span>
                    </li>
                    <li><span class="icon"><i class="far fa-book-open"></i></span>
                        <span>Open Source</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="has-background-link has-text-white">
        <br>
        <p class="has-text-centered title has-text-white">
            Links
        </p>
        <div class="container">
            <hr class="hr3">
        </div>
        <div class="buttons is-centered">
            <a class="button" href="https://github.com/Cinque-Network/Cinque-Core/releases">
                <span class="icon"><i class="fal fa-download"></i></span>
                <span><b>Latest Release</b></span></a>
            <a class="button is-primary is-light" href="https://miningpoolstats.stream/cinque"><span class="icon"><i class="fad fa-users"></i></span><span>Pools</span></a>
        </div>
        <br>
    </section>
    <br>
    <br>
    <section class="has-background-white">
        <p class="title has-text-centered">
            Roadmap
        </p>
        <div class="container">
            <hr class="hr3-blackline">
        </div>
        <div class="columns">
            <div class="column">
                <div class="box has-text-centered is-centered">
                    <span class="icon is-centered">
                        <br>
                        <i class="fa-solid fa-1 fa-2x""></i>
                    </span>
                    <hr class="hr4 is-centered has-text-centered">
                    <br>
                    <li> Initial premine that will occur before swap (<a href="./blog/premine">Reason</a>)
                    <li> Addition of more pools
                    <li> Burn remaining amount from premine
                </div>
            </div>
            <div class="column">
                <div class="box has-text-centered is-centered">
                    <span class="icon is-centered">
                        <br>
                        <i class="fa-solid fa-2 fa-2x""></i>
                    </span>
                    <hr class="hr4 is-centered has-text-centered">
                    <br>
                    <li> Wallet development for linux, PC, mac, web and paper wallets
                    <li> Explore UI development for user friendly applications
                    <li> Further developed oracles to get them up faster
                </div>
            </div>
            <div class="column">
                <div class="box has-text-centered is-centered">
                    <span class="icon is-centered">
                        <br>
                        <i class="fa-solid fa-1 fa-2x""></i>
                    </span>
                    <hr class="hr4 is-centered has-text-centered">
                    <br>
                    <li> Listing on exchanges (3 smaller exchanges, and 2 medium exchanges)
                </div>
            </div>
        </div>
    </section>
</body>

</html>