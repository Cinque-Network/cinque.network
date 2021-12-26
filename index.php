<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<style>
    .background-grey-extralight{
        background-color: #EAEFF0;
    }
</style>
<header>
    <nav class="navbar background-grey-extralight" role="navigation" aria-label="main navigation">
            <div class="navbar-menu" style="margin:10px;">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Home
                    </a>
                    <a class="navbar-item">
                        Blockchain
                    </a>
                    <a class="navbar-item">
                        Currency
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

<body>

</body>