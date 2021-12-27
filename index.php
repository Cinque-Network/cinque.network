<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="./ext/initial-variables.sass">
<style>
    .background-grey-extralight {
        background-color: #EAEFF0;
    }

    .blackborder {
        color: black;
    }
</style>
<header>
    <nav class="navbar background-grey-extralight" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <img src="./images/brand.png" width="60px" style="margin:5px">
        </div>
        <div class="navbar-menu" style="margin:10px;">
            <div class="navbar-start">
                <a class="navbar-item">
                    <span>Home</span>
                </a>
                <a class="navbar-item">
                    <span>Blockchain</span>
                </a>
                <a class="navbar-item">
                    <span>Currency</span>
                </a>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <script src="https://cdn.jsdelivr.net/npm/js-cookie/dist/js.cookie.min.js"></script>
                            <script>
                                var $color_scheme = Cookies.get("color_scheme");

                                function get_color_scheme() {
                                    return (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) ? "dark" : "light";
                                }

                                function update_color_scheme() {
                                    Cookies.set("color_scheme", get_color_scheme());
                                }
                                // read & compare cookie `color-scheme`
                                if ((typeof $color_scheme === "undefined") || (get_color_scheme() != $color_scheme))
                                    update_color_scheme();
                                // detect changes and change the cookie
                                if (window.matchMedia)
                                    window.matchMedia("(prefers-color-scheme: dark)").addListener(update_color_scheme);
                            </script>
                            <?php
                            $color_scheme = isset($_COOKIE["color_scheme"]) ? $_COOKIE["color_scheme"] : false;
                            if ($color_scheme === false) $color_scheme = 'unknown';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<br>
<br>

<body>
    <div style="margin:10px">
        <p class="title has-text-weight-bold has-text-centered">
            Welcome to Cinque
        </p>
        <div class="container">
            <hr class="blackborder">
            </hr>
        </div>
        <p class="subtitle">
            <strong>Technical Specifictions</strong>
        </p>
        <p class="is-size-6">
            <span class="icon">
                <i class="far fa-signature"></i>
            </span>
            <span>Coin Name: <strong>Cinque</strong></span>
        </p>
    </div>
</body>