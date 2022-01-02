<?php
// Uncomment this code to turn on maintainance mode
//header("Location: ./undermaintainance.php")
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="./ext/all.css">
<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./ext/initial-variables.sass">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cinque Network - A multi-algo coin forked from digibyte" />
<title>Cinque Network</title>
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
<br>
<br>

<body class="is-mobile">
    <section class="margins">
        <p class="title has-text-centered">
        <div class="is-hidden-desktop is-hidden-widescreen">
            <img src="https://servercdn.primitt.dev/images/brandwithname.png">
        </div>
        <div class="is-hidden-mobile has-text-centered">
            <img src="https://servercdn.primitt.dev/images/brandwithname.png" width="150px">


        </div>
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
                    <hr class=" hr4 is-centered has-text-centered">
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
                    <hr class=" hr4 is-centered has-text-centered">
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
                        <i class="fa-solid fa-3 fa-2x""></i>
                    </span>
                    <hr class=" hr4 is-centered has-text-centered">
                            <br>
                            <li> Listing on 3 smaller exchanges and 2 larger exchanges.
                            <li> Expantion of influence in the IoT sector
                            <li> Further development on oracles
                            <li> Start development on Layer 1.5 to (act as a cheaper more cost effective middle man from switching between layers and Parachains/Chains )
                            <li> Making the blockchain itself Ready for Smart Contract integration and Development
                </div>
            </div>
        </div>
        <br>
        <p class="subtitle has-text-centered">
        </p>
        <br>
    </section>
    <section class="has-background-link has-text-white">
        <br>
        <p class="title has-text-white has-text-centered">
            Exchanges
        </p>
        <div class="container">
            <hr class="hr3">
        </div>
        <br>
        <p class="has-text-centered subtitle has-text-white">
        </p>
        <script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
        <script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.29871" type="text/javascript"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
        <script type="text/javascript">
            JotForm.newDefaultTheme = true;
            JotForm.extendsNewTheme = false;
            JotForm.newPaymentUIForNewCreatedForms = true;
            JotForm.newPaymentUI = true;
            JotForm.clearFieldOnHide = "disable";
            JotForm.submitError = "jumpToFirstError";

            JotForm.init(function() {
                /*INIT-START*/
                if (window.JotForm && JotForm.accessible) $('input_4').setAttribute('tabindex', 0);
                JotForm.alterTexts(undefined);
                /*INIT-END*/
            });

            JotForm.prepareCalculationsOnTheFly([null, {
                "name": "heading",
                "qid": "1",
                "text": "Exchange Request",
                "type": "control_head"
            }, {
                "name": "submit2",
                "qid": "2",
                "text": "Submit",
                "type": "control_button"
            }, {
                "description": "",
                "name": "email",
                "qid": "3",
                "subLabel": "example@example.com",
                "text": "Email",
                "type": "control_email"
            }, {
                "description": "",
                "name": "typeA",
                "qid": "4",
                "subLabel": "eg. binance.com",
                "text": "Enter Exchange:",
                "type": "control_textbox"
            }, {
                "description": "",
                "name": "pleaseVerify",
                "qid": "5",
                "text": "Please verify that you are human",
                "type": "control_captcha"
            }]);
            setTimeout(function() {
                JotForm.paymentExtrasOnTheFly([null, {
                    "name": "heading",
                    "qid": "1",
                    "text": "Exchange Request",
                    "type": "control_head"
                }, {
                    "name": "submit2",
                    "qid": "2",
                    "text": "Submit",
                    "type": "control_button"
                }, {
                    "description": "",
                    "name": "email",
                    "qid": "3",
                    "subLabel": "example@example.com",
                    "text": "Email",
                    "type": "control_email"
                }, {
                    "description": "",
                    "name": "typeA",
                    "qid": "4",
                    "subLabel": "eg. binance.com",
                    "text": "Enter Exchange:",
                    "type": "control_textbox"
                }, {
                    "description": "",
                    "name": "pleaseVerify",
                    "qid": "5",
                    "text": "Please verify that you are human",
                    "type": "control_captcha"
                }]);
            }, 20);
        </script>
        <style type="text/css">
            @media print {
                .form-section {
                    display: inline !important
                }

                .form-pagebreak {
                    display: none !important
                }

                .form-section-closed {
                    height: auto !important
                }

                .page-section {
                    position: initial !important
                }
            }
        </style>
        <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251" />
        <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.29871" />
        <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.29871" />
        <form class="jotform-form" action="https://submit.jotform.com/submit/220007055718044/" method="post" name="form_220007055718044" id="220007055718044" accept-charset="utf-8" autocomplete="on">
            <input type="hidden" name="formID" value="220007055718044" />
            <input type="hidden" id="JWTContainer" value="" />
            <input type="hidden" id="cardinalOrderNumber" value="" />
            <div role="main" class="form-all">
                <style>
                    .form-all:before {
                        background: none;
                    }
                </style>
                <ul class="form-section page-section">
                    <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-large">
                            <div class="header-text httal htvam">
                                <h1 id="header_1" class="form-header" data-component="header">
                                    Exchange Request
                                </h1>
                                <div id="subHeader_1" class="form-subHeader">
                                    Put an exchange link in!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_email" id="id_3">
                        <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3">
                            Email
                            <span class="form-required">
                                *
                            </span>
                        </label>
                        <div id="cid_3" class="form-input-wide jf-required" data-layout="half">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="email" id="input_3" name="q3_email" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_3 sublabel_input_3" required="" />
                                <label class="form-sub-label" for="input_3" id="sublabel_input_3" style="min-height:13px" aria-hidden="false"> example@example.com </label>
                            </span>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_textbox" id="id_4">
                        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4">
                            Enter Exchange:
                            <span class="form-required">
                                *
                            </span>
                        </label>
                        <div id="cid_4" class="form-input-wide jf-required" data-layout="half">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="input_4" name="q4_typeA" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_4 sublabel_input_4" required="" />
                                <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> eg. binance.com </label>
                            </span>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_captcha" id="id_5">
                        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5">
                            Please verify that you are human
                            <span class="form-required">
                                *
                            </span>
                        </label>
                        <div id="cid_5" class="form-input-wide jf-required" data-layout="full">
                            <section data-wrapper-react="true">
                                <div id="hcaptcha_input_5" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="hcaptchaCallbackinput_5" data-expired-callback="hcaptchaExpiredCallbackinput_5">
                                </div>
                                <input type="hidden" id="input_5" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                                <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>
                                <script type="text/javascript">
                                    var hcaptchaCallbackinput_5 = function(token) {
                                        var hiddenInput = $("input_5");
                                        hiddenInput.setValue(1);
                                        if (hiddenInput.validateInput) {
                                            hiddenInput.validateInput();
                                        }
                                    }

                                    var hcaptchaExpiredCallbackinput_5 = function() {
                                        var hiddenInput = $("input_5");
                                        hiddenInput.writeAttribute("value", false);
                                        if (hiddenInput.validateInput) {
                                            hiddenInput.validateInput();
                                        }
                                    }
                                </script>
                            </section>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_button" id="id_2">
                        <div id="cid_2" class="form-input-wide" data-layout="full">
                            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                                <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </li>
                    <li style="display:none">
                        Should be Empty:
                        <input type="text" name="website" value="" />
                    </li>
                </ul>
            </div>
            <script>
                JotForm.showJotFormPowered = "new_footer";
            </script>
            <script>
                JotForm.poweredByText = "Powered by Jotform";
            </script>
            <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="220007055718044" />
            <script type="text/javascript">
                var all_spc = document.querySelectorAll("form[id='220007055718044'] .si" + "mple" + "_spc");
                for (var i = 0; i < all_spc.length; i++) {
                    all_spc[i].value = "220007055718044-220007055718044";
                }
            </script>
            <div class="formFooter-heightMask">
            </div>
        </form>
        <script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.29871"></script>
        <script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.29871"></script>
        <br>
    </section>
</body>
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <strong>Cinque Network Website(v1)</strong>
            <br>
            Made with Bulma CSS
        </p>
    </div>
</footer>