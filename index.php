<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoonScape - The Resurrection - Battle, Craft, Earn</title>
    <link data-react-helmet="true" rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico"/>
	<!-- Google -->
	<meta name="description" content="Embark on a nostalgic “classic” journey in the vast world of Roonscape."/>
	<meta name="author" content="raphaelbrandao.me" />
	<meta name="robots" content="index,follow" />

	<!-- Facebook  -->
	<meta property="og:type" content="website" >
	<meta property="og:title" content="RoonScape - The Resurrection - Battle, Craft, Earn" >
	<meta property="og:description" content="Embark on a nostalgic “classic” journey in the vast world of Roonscape." >
	<meta property="og:author" content="raphaelbrandao.me" >
	<meta property="og:url" content="https://projectessence.club" >
	<meta property="og:site_name" content="RoonScape" >

	<meta property="og:image" content="./img/facebookog.jpg" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
 
	<meta property="og:image" content="./img/facebookog_square.jpg" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="600" />

    <link rel="stylesheet" href="./css/style.css">
    <script src='./js/jquery-1.9.1.js'></script>
    <script src="./js/jquery.functions.js?v=<?php echo time(); ?>"></script>
    <script src="./js/wow.min.js?v=<?php echo time(); ?>"></script>
</head>
<body>
    <header>
        <div class="wrapper">
            <nav>
                <ul>
                    <li>
                        <a href="#home" class="active">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#playtoearn">
                            Play-to-earn
                        </a>
                    </li>
                    <li>
                        <a href="#rsgcoin">
                            RSG Coin
                        </a>
                    </li>
                    <li>
                        <a href="#roadmap">
                            Roadmap
                        </a>
                    </li>
                    <li>
                        <a href="#purchase">
                            Purchase
                        </a>
                    </li>
                </ul>
            </nav>
            <span>
                <a class="button disabled">Marketplace</a>
            </span>
            <div class="menu-mobile show-smartphone">
                <span></span>
            </div>
        </div>
    </header>

    <section id="home" class="home">
        <div class="wrapper">
            <img class="wow fadeIn" src="./img/img_logo.png" alt="">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">The Resurrection</h1>
            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Battle, Craft, Earn</h2>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                Embark on a nostalgic “classic” journey in the vast world of Roonscape. Faithfully recreated to match the world you remember. Roam the planes, fight to become the strongest, and for the first time ever, earn while you have fun playing!
            </p>

            <div class="buttons wow fadeInUp" data-wow-delay="0.4s">
                <a class="disabled">Coming Soon</a>
                <a class="alt" href="#">Join Discord</a>
            </div>

            <div class="video wow fadeInDown" data-wow-delay="0.5s">
                <img src="./img/img_video.png" alt="">
            </div>
        </div>
    </section>

    <div class="anchor" id="about"></div>
    <section class="about">
        <div class="wrapper">
            <h1 class="section-title wow fadeInUp">
                About
            </h1>
            <p class="section-paragraph wow fadeInUp" data-wow-delay="0.1s">
                Roonscape is a faithful recreation of the original classic Runescape game released in 2001. The game engine has been updated and modernized to create a fun and exciting P2E (Play to earn) experience connected in true Web 3.0 form.
            </p>
            <div class="bullets">
                <a target="_blank" href="https://rsc.wiki/" class="wow fadeInUp" data-wow-delay="0.2s">
                    <img src="./img/ic_about_bullet1.png" alt="">
                    How to play
                    <small>Everything you need to know to play RuneScape</small>
                </a>
                <a target="_blank" href="https://rsc.vet/faq" class="wow fadeInUp" data-wow-delay="0.3s">
                    <img src="./img/ic_about_bullet2.png" alt="">
                    F.A.Q.
                    <small>Answers to Frequently Asked Questions</small>
                </a>
                <a target="_blank" href="https://classic.runescape.wiki/w/Library_of_Varrock" class="wow fadeInUp" data-wow-delay="0.4s">
                    <img src="./img/ic_about_bullet3.png" alt="">
                    Library of Varrock
                    <small>Learn about the History of RuneScape</small>
                </a>
                <a target="_blank" href="https://rsc.vet/rules" class="wow fadeInUp" data-wow-delay="0.5s">
                    <img src="./img/ic_about_bullet4.png" alt="">
                    Rules & Security
                    <small>Learn our rules and stay safe online</small>
                </a>
            </div>
        </div>
    </section>

    <div class="anchor" id="playtoearn"></div>
    <section class="playtoearn">
        <div class="wrapper row">
            <div class="col-6 text-center padding-default-right wow fadeInLeft" data-wow-delay="0.3s">
                <img src="./img/ic_playtoearn.png" alt="">
                <h1 class="section-title">
                    Play to Earn
                </h1>
                <p class="section-paragraph">
                    Players can enter the world with “Membership status” via the purchase of an access pass. Once in game, players can earn by killing monsters, finding rare loot, crafting unique items and trading to earn in-game GP (gold points). GP earned can be traded within the marketplace and ingame, or can be withdrawn into RSG, our Roonscape native crypto token.
                </p>
            </div>
            <div class="col-6 padding-default-left text-center wow fadeInRight" data-wow-delay="0.4s">
                <img src="./img/ic_staketoearn.png" alt="">
                <h1 class="section-title">
                    Stake to Earn
                </h1>
                <h2 class="section-subtitle">
                    Loot Boxes
                </h2>
                <p class="section-paragraph">
                    Account holders will receive weekly loot box drops based on pass status. Loot boxes will include a wide variety of RSC items, perhaps even a Party hat!
                </p>
            </div>
        </div>
    </section>
    
    <div class="anchor" id="rsgcoin"></div>
    <section class="rsgcoin">
        <div class="wrapper">
            <h1 class="section-title wow fadeInUp">
                What’s RSG Coin?
            </h1>
            <p class="section-paragraph wow fadeInUp" data-wow-delay="0.15s">
                RSG (Roonscape Gold) is our native token that will be used to power the web 3.0 ecosystem. In game you will use GP, but if you wish to withdraw, it will be withdrawn to RSG.
            </p>
            <div class="coinflow wow fadeInUp" data-wow-delay="0.3s">
                <div>
                    <span>
                        <img src="./img/ic_rsg_play.png" alt="">
                        <strong>Play the game</strong>
                    </span>
                </div>
                <div class="padding-small">
                    <img class="hide-smartphone" src="./img/img_rsgcoin.png" alt="">
                    <img class="show-smartphone marginauto" src="./img/img_rsgcoin_mobile.png" alt="">
                </div>
                <div>
                    <span>
                        <img src="./img/ic_rsg_exchange.png" alt="">
                        <strong>Exchange</strong>
                    </span>
                    <span>
                        <img src="./img/ic_rsg_trade.png" alt="">
                        <strong>Trade</strong>
                    </span>
                    <span>
                        <img src="./img/ic_rsg_profit.png" alt="">
                        <strong>Profit</strong>
                    </span>
                </div>
            </div>

        </div>
    </section>

    <div class="anchor" id="roadmap"></div>
    <section class="roadmap">
        <div class="wrapper">
            <h1 class="section-title wow fadeInUp">
                Roadmap
            </h1>

            <div class="list">
                <div class="wow fadeIn" data-wow-delay="0.1s">
                    <small>Act 1</small>
                    <strong>The Kick Off!</strong>
                    <div>
                        <ul>
                            <li>Discord Launch</li>
                            <li>Foll Website Launched</li>
                            <li>Game Trailer release</li>
                            <li>Private whitelist contest</li>
                            <li>Tokenomics release</li>
                            <li>Marketing with youtube and twitter gaming and crypto experts.</li>
                        </ul>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.2s">
                    <small>Act 2</small>
                    <strong>The Pre-Access Release</strong>
                    <div>
                        <ul>
                            <li>
                                Access pass mint (w/ gas saver contract)
                                <ul>
                                    <li>Private whitelist sale</li>
                                    <li>Public whitelist sale</li>
                                </ul>
                            </li>
                            <li>Special edition Genesis Loot box drop for holders</li>
                        </ul>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <small>Act 3</small>
                    <strong>Token launch</strong>
                    <div>
                        <ul>
                            <li>
                                Access pass holders EXCLUSIVE:
                                <ul>
                                    <li>Special IGO price</li>
                                    <li>Number of tokens you can buy is dependent on the total NFTs held and NFT pass level.</li>
                                    <li>Tokens will vest over 200 days at .5% per day.</li>
                                    <li>At great request, early unlock possible for fee</li>
                                </ul>
                            </li>
                            <li>Launch token pool using funds from mint pass and IGO sale.</li>
                        </ul>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.4s">
                    <small>Act 4</small>
                    <strong>Early Roonscape discovery</strong>
                    <div>
                        <ul>
                            <li>Server test and scaling</li>
                            <li>Economy test and scaling</li>
                            <li>
                                Low fee - Roonscape Marketplace launch!
                                <ul>
                                    <li>RSG used to purchase items in the marketplace.</li>
                                    <li>Initial genesis item party drop! (you will regret missing this)</li>
                                </ul>
                            </li>
                            <li>
                                RSG staking:
                                <ul>
                                    <li>Earn while holding RSG</li>
                                    <li>Provide liquidity for higher earnings</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="0.5s">
                    <small>Act 5</small>
                    <strong>Play & Earn - The Resurrection</strong>
                    <div>
                        <ul>
                            <li>
                                Game Start
                                <ul>
                                    <li>Rune Access: 2 hours after launch</li>
                                    <li>Mithril Access: 4 hours after launch</li>
                                    <li>Iron Access: 8 hours after launch</li>
                                </ul>
                            </li>
                            <li>
                                RSG to GP connection made 24 hours after launch
                                <ul>
                                    <li>Exchange in-game GP for RSG.</li>
                                </ul>
                            </li>
                            <li>
                                Leaderboard creation and development
                                <ul>
                                    <li>Top Players to gain fame AND fortune</li>
                                </ul>
                            </li>
                            <li>
                                Game contest to begin:
                                <ul>
                                    <li>Drop Party</li>
                                    <li>In-game quest</li>
                                    <li>Zone access pass drops (special gold and item drops)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="anchor" id="purchase"></div>
    <section class="purchase">
        <div class="wrapper">
            <h1 class="section-title wow fadeInUp">
                Purchase
            </h1>
            <p class="section-paragraph wow fadeInUp" data-wow-delay="0.1s">
                Purchase your starter access pack now and embark on an epic and nostalgic adventure to battle, craft and earn.
            </p>

            <ul>
                <li class="wow fadeInDown" data-wow-delay="0.2s">
                    <img src="./img/ic_pass1.png" alt="">
                    <h3>Iron Access Pass</h3>
                    <span>Iron Tier Box</span>
                    <span>Early Access to Game</span>

                    <strong>
                        <small>Price</small>
                        $200
                    </strong>
                </li>
                <li class="wow fadeInDown" data-wow-delay="0.3s">
                    <img src="./img/ic_pass2.png" alt="">
                    <h3>Mithril Access Pass</h3>
                    <span>Mithril Tier Box </span>
                    <span>Early Access to Game</span>

                    <strong>
                        <small>Price</small>
                        $400
                    </strong>
                </li>
                <li class="wow fadeInDown" data-wow-delay="0.4s">
                    <img src="./img/ic_pass3.png" alt="">
                    <h3>Rune Access Pass</h3>
                    <span>Rune Tier Box - Early Access to Game</span>
                    <span>Membership Status  - 1 Free NFT</span>

                    <strong>
                        <small>Price</small>
                        $800
                    </strong>
                </li>
            </ul>
        </div>
    </section>

    <div class="social wow fadeInLeft" data-wow-delay="1s">
        <a href="#" target="_blank">
            <img src="./img/ic_twitter.png" alt="">
        </a>
        <a href="#" target="_blank">
            <img src="./img/ic_instagram.png" alt="">
        </a>
        <a href="#" target="_blank">
            <img src="./img/ic_discord.png" alt="">
        </a>
    </div>

    <footer>
        <div class="wrapper row">
            <div class="col-3">
                <ul>
                    <li>
                        <a href="#">Terms of use</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <a class="button disabled">Marketplace</a>

            </div>
            <div class="col-2">
                <ul>
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#playtoearn">Play-to-earn</a>
                    </li>
                    <li>
                        <a href="#rsgcoin">RSG Coin</a>
                    </li>
                    <li>
                        <a href="#roadmap">Roadmap</a>
                    </li>
                    <li>
                        <a href="#purchase">Purchase</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <a href="#" target="_blank">
                    <img src="./img/ic_twitter.png" alt="">
                </a>
                <a href="#" target="_blank">
                    <img src="./img/ic_instagram.png" alt="">
                </a>
                <a href="#" target="_blank">
                    <img src="./img/ic_discord.png" alt="">
                </a>
            </div>
            <div class="col-4">
                <img class="logo" src="./img/img_logo.png" alt="">
                <span>All rights reserved to RoonScape &copy; 2022</span>
            </div>
        </div>
    </footer>
    <div class="loader">
        <img src="./img/img_logo.png" alt="">
    </div>
</body>
</html>