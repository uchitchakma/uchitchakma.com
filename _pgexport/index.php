<?php get_header(); ?>

<div id="wrapper">
    <header id="header" class="noselect">
        <h1 id="main-title"><span><?php _e( 'Moxhe', 'u8979' ); ?></span> <?php _e( '- Fresh Australian Seafood', 'u8979' ); ?></h1>
        <nav class="nav">
            <button id="btn--menu" aria-label="Menu"><span class="hamburger"></span><span class="hamburger"></span><span class="hamburger"></span><span class="btn--menu__text"><?php _e( 'Menu', 'u8979' ); ?></span><span class="btn--menu__text"><?php _e( 'Close', 'u8979' ); ?></span>
            </button>
            <div id="content--menu">
                <ul class="nav__left">
                    <li>
                        <a href="https://instagram.com/moxherestaurant/" class="icon--ig"><?php _e( 'Instagram', 'u8979' ); ?></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/moxherestaurant/info?tab=overview" class="icon--fb"><?php _e( 'Facebook', 'u8979' ); ?></a> 
                    </li>
                    <li>
                        <?php _e( 'Follow us!', 'u8979' ); ?>
                    </li>
                </ul>
                <ul class="nav__center">
                    <li>
                        <a href="index.htm" data-goto="home"><?php _e( 'Home', 'u8979' ); ?></a>
                    </li>
                    <li>
                        <a href="index.htm#about" data-goto="home"><?php _e( 'About', 'u8979' ); ?></a>
                    </li>
                    <li>
                        <a href="menu.html" data-goto="menu"><?php _e( 'Menu', 'u8979' ); ?></a>
                    </li>
                    <li>
                        <a href="index.htm#voucher" data-goto="voucher"><?php _e( 'Voucher', 'u8979' ); ?></a>
                    </li>
                    <li>
                        <a href="press.html" class="current" data-goto="press"><?php _e( 'Press', 'u8979' ); ?></a>
                    </li>
                    <li>
                        <a href="contact.html" data-goto="contact"><?php _e( 'Contact', 'u8979' ); ?></a>
                    </li>
                </ul>
            </div><a href="#booking" class="nav__right " data-goto="booking"><span><?php _e( 'Booking', 'u8979' ); ?></span></a>
        </nav>
    </header>
    <!-- /#header -->
    <main id="content" role="main">
        <canvas id="c" width="0" height="0"></canvas>
        <div id="page-container">
            <div class="container--background"></div>
            <section>
                <div class="section--left valign-p"><span class="separator separator--left"></span>
                    <div class="background--gradient"></div>
                    <img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/press/background-press.jpg" alt="Press">
                    <div class="valign-c">
                        <h2><?php _e( 'Press', 'u8979' ); ?></h2>
                        <h3><?php _e( 'An insight into Moxhe,', 'u8979' ); ?> <br><?php _e( 'through the reviewers eyes.', 'u8979' ); ?></h3>
                    </div>
                </div>
                <div class="section--right"><span class="separator separator--right"></span>
                    <ul class="press-list">
                        <li>
                            <article class="press-article">
                                <time datetime="2017-12-20">
                                    <?php _e( '20/12/17', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Roberta Muir', 'u8979' ); ?></h4>
                                <p><?php _e( '“Top 5 Seafood restaurants”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.food-wine-travel.com/top-5-sydney-seafood-restaurants/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2017-11-08">
                                    <?php _e( '08/11/17', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Kim Lamb', 'u8979' ); ?></h4>
                                <p><?php _e( '“The night we visited, everything was faultless and executed with finesse. Every dish brought out the subtleties of the seafood to perfection.”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.eatplaylovetravel.com.au/2017/11/08/moxhe-head-to-bronte-for-one-helluva-seafood-degustation/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2016-10-10">
                                    <?php _e( '10/10/16', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Susan Thye', 'u8979' ); ?></h4>
                                <p><?php _e( '“I had such an incredible meal at Moxhe and seriously guys, it’s such great value! Impeccable food and such lovely warm and down to earth service, I can’t wait to return!”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.chocolatesuze.com/2016/10/10/moxhe-bronte/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2016-08-22">
                                    <?php _e( '22/08/16', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Jennifer Lam', 'u8979' ); ?></h4>
                                <p><?php _e( '“Moxhe has built itself quite the reputation as an accessible neighbourhood restaurant, striking the perfect balance between elegance and simplicity.”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.iatemywaythrough.com/2016/08/moxhe-restaurant-bronte-sydney/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2016-08-22">
                                    <?php _e( '22/08/16', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Roberta Muir', 'u8979' ); ?></h4>
                                <p><?php _e( 'Top 5 Great Value Degustation Menus (with Wine)', 'u8979' ); ?></p><a class="press-article__link" href="http://www.food-wine-travel.com/top-5-great-value-degustation-menus-wine/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2016-05-09">
                                    <?php _e( '09/05/16', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Jacqui&rsquo;s Food Fetish', 'u8979' ); ?></h4>
                                <p><?php _e( 'The degustation at Moxhe is a bargain. What David is serving up is well considered, quality Top 100-worthy food. It’s delicious, fresh seafood treated with the utmost respect.', 'u8979' ); ?></p><a class="press-article__link" href="https://jacquisfoodfetish.com.au/2016/05/09/moxhe-bronte-sydney/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2016-04-22">
                                    <?php _e( '22/04/16', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Gourmantic', 'u8979' ); ?></h4>
                                <p><?php _e( 'A superb dish that is a contender in our “Best Dishes of the Year” series.', 'u8979' ); ?></p><a class="press-article__link" href="http://www.gourmantic.com/2016/04/22/moxhe-bronte/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2015-10-11">
                                    <?php _e( '11/10/15', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'The Food Diary', 'u8979' ); ?></h4>
                                <p><?php _e( '“Moxhe is probably going to go down as one of my favourite meals of the year for both food and atmosphere. The food itself is good and although I’m normally not a fan of seafood I was surprised to find that I enjoyed almost every dish on the menu.”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.fooddiarysyd.net/2015/10/moxhe-bronte/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2015-09-19">
                                    <?php _e( '19/09/15', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Not quite Nigella', 'u8979' ); ?></h4>
                                <p><?php _e( '“They’re superbly crunchy and fresh and I could snack on them both all day long.”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.notquitenigella.com/2015/09/19/moxhe-bronte/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2015-04-28">
                                    <?php _e( '28/04/15', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Hiramasa', 'u8979' ); ?></h4>
                                <p><?php _e( '“Sydney’s eastern suburbs is fortunate that Coumont and Diab decided to bookend Belgium with Bronte via a menu that’s already shaping up as a modern classic amongst the city’s suburban restaurants.”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.hiramasakingfish.com.au/moxhe-leading-the-suburban-restaurants-uprising/" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2015-04-14">
                                    <?php _e( '14/04/15', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Good Food', 'u8979' ); ?></h4>
                                <p><?php _e( '“Coumont brings a degree of professional finesse not often seen in a little 34-seater eastern suburbs dining room”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.goodfood.com.au/good-food/eat-out/review/restaurant/moxhe-20150414-3u19w.html" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                        <li>
                            <article class="press-article">
                                <time datetime="2015-03-30">
                                    <?php _e( '30/03/15', 'u8979' ); ?>
                                </time>
                                <h4><?php _e( 'Broadsheet', 'u8979' ); ?></h4>
                                <p><?php _e( '“It’s so much easier to first see what’s nice at the moment when creating a dish,” Coumont says. Sometimes you wouldn’t think of doing certain dishes if you don’t go buy the stuff yourself.”', 'u8979' ); ?></p><a class="press-article__link" href="http://www.broadsheet.com.au/sydney/food-and-drink/article/moxhe-opens-bronte" target="_blank"><span><?php _e( 'Read full article', 'u8979' ); ?></span></a>
                            </article>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <!-- /#content -->
    <footer id="footer" class="noselect"><a class="logo--reed" target="_blank" href="http://reed.be"><?php _e( 'Reed.be', 'u8979' ); ?></a>
    </footer>
</div>
<!-- /#wrapper -->
<div class="iframeCtn">
    <div class="iframeWrapper iframeWrapper--large" id="booking">
        <iframe data-id="nbi-widget" src="https://bookings.nowbookit.com/?accountid=bae7181b-88ff-4180-ab10-17cb7e9ef74e&venueid=4424&theme=light&colors=hex,a1887f"></iframe>
    </div>
    <div class="iframeWrapper" id="voucher">
        <iframe src="https://giftcards.nowbookit.com/cards?accountid=bae7181b-88ff-4180-ab10-17cb7e9ef74e&venueid=4424&theme=light&accent=0,0,0" width="100%" height="830px"></iframe>
    </div>
</div>        

<?php get_footer(); ?>