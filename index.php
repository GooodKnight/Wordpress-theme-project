<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starfish</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        <?=slider_background(".sliderrightpart", 102)?>
        <?=slider_background(".sliderleftpart", 114)?>
    </style>
    <?php /*define( 'WP_USE_THEMES', false );*/ get_header(); ?> 
    <?php
        wp_head(); // tohle musi byt tesne pred zakoncenym head
    ?>
</head>
<body>
    <div id="center">
        <div id="main">
            <div id="my_header">
                <div class="topinfo">
                    <div class="lefttopinfo">
                        <div class="date">
                            <p>Po-Pá 8:00 -16:00</p>
                        </div>
                        <div class="phonenumber">
                            <p> +420 774 410 350</p>
                        </div>
                        <div class="emailaddres">
                            <p>info@starfishing.cz</p>
                        </div>                       
                    </div>
                    <div class="righttopinfo">
                        <?= header_right_menu()?> 
                        
                    </div>
                </div>
                <div class="banner">                    
                    <div class="logostar">
                        <a href="<?=home_icon();?>">
                            <img src="imgmean/logostar.png" alt="Logo">
                        </a>
                    </div>
                    <form action="#">
                        <div class="search">
                            <label for="text">
                                <a href="#">HLEDAT</a>
                            </label>
                            <input type="text" id="text" name="search" placeholder="Zadejte hledaný výraz">
                        </div>
                    </form>
                    <div class="loginpluscart">
                        <div class="costpluslogin">
                            <p class="signup"><a href="#">Registrovat</a></p>
                            <div></div>
                            <p class="login"><a href="#">Přihlásit</a></p>
                        </div>
                    </div>
                </div>
                <div class="topmenu">
                    <?=main_menu();?>
                </div>
            </div>
            <div id="content">
                <div class="slider detail_hide">
                    <div class="sliderleftpart">
                        <p>
                            <?=slider_left()?>
                        </p>
                    </div>
                    <div class="sliderrightpart">
                        <?=slider_right()?>
                    </div>
                </div>
                <div class="bottommenu detail_hide">
                    <a href="#">
                        <div class="fastdelivery">
                            <h2>RYCHLOST DODÁNÍ</h2>
                        </div>
                    </a>    
                    <div class="menuborder"></div>
                    <a href="#">
                        <div class="giveawayplaces">
                            <h2>1.200 VÝDEJNÍCH MÍST</h2>
                        </div>
                    </a>
                    <div class="menuborder"></div>
                    <a href="#">   
                        <div class="amountdiscounts">
                            <h2>MNOŽSTEVNÍ SLEVY</h2>
                        </div>
                    </a> 
                    <div class="menuborder"></div>
                    <a href="#">
                        <div class="freedelivery">
                            <h2>DOPRAVA NAD 1.500KČ ZDARMA</h2>
                        </div>
                    </a>    
                </div>
                <div class="otheroffers detail_hide">
                    <p class="otheroffersleft">Akční nabídka</p>
                    <?php 
                        global $wp_query;

                        if (isset($_GET["paged"]) and is_numeric($_GET["paged"]) and $_GET["paged"] >= $wp_query->max_num_pages - 1 or $wp_query->max_num_pages == 1) {
                            
                        } else {
                            echo my_next_page();
                        }
                        if (isset($_GET["paged"]) and is_numeric($_GET["paged"]) and $_GET["paged"] > 1) {
                            echo my_previous_page();
                        }
                    ?>  
                </div>
                <div class="productsection">                   
                    <?php
                        $detail_hide_check = FALSE;
                        if (is_singular()) {
                            $page = page_detail();
                            $detail_hide_check = TRUE;
                        } elseif(isset($_GET["cat"])) {
                            $page = page(14, $_GET["cat"]);
                        } else {
                            $page = page(14);
                        }
                        echo $page;
                    ?>  
                </div>
                <div class="otheractualities">
                    <p class="otheractualitiesleft">Co je u nás nového</p>
                    <a href="#">   
                        <div>
                            <p class="otheractualitiesright">zobrazit další aktuality</p>
                            <img src="imgmean/arrow.png" alt="Arrow">
                        </div> 
                    </a>  
                </div>
                <div class="actualitiessection">
                    <?=news(20)?>
                </div>
                <div class="otheractualities">
                    <p class="otheractualitiesleft">Značky, které prodáváme</p>
                </div>
                <div class="brands">
                    <div class="brandarrow brandarrowflip">
                        <img src="imgmean/brandsarrow.png" alt="Arrow">
                    </div>
                    <div class="specificbrand">
                        <img src="imgmean/brandsimgone.png" alt="Brand">
                    </div>
                    <div class="specificbrand">
                        <img src="imgmean/brandsimgtwo.png" alt="Brand">
                    </div>
                    <div class="specificbrand">
                        <img src="imgmean/brandsimgthree.png" alt="Brand">
                    </div>
                    <div class="specificbrand">
                        <img src="imgmean/brandsimgfour.png" alt="Brand">
                    </div>
                    <div class="specificbrand">
                        <img src="imgmean/brandsimgfive.png" alt="Brand">
                    </div>
                    <div class="specificbrandwithoutborder">
                        <img src="imgmean/brandsimgsix.png" alt="Brand">
                    </div>
                    <div class="brandarrow">
                        <img src="imgmean/brandsarrow.png" alt="Arrow">
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="footertop">
                    <div class="footerlogo">
                        <img src="imgmean/footerlogo.png" alt="Starfish logo">
                    </div>
                    <div class="footerinfo">
                        <div class="footerinfotop">
                            <p class="footerhead">Starfishing s.r.o.</p>
                            <p>nám. Komenského 57</p>
                            <p>687 25 Hluk</p>
                            <p>Czech Republic</p>
                        </div>
                        <div class="footerinfobottom">
                            <p>info@starfishing.cz</p>
                            <p>objednavky@starfishing.cz</p>
                            <p>+420 774 410 350</p>
                        </div>
                    </div>
                    <div class="footerlinks">
                        <p class="footerhead">Vše o nákupu</p>
                        <?=footer_middle_menu();?>
                    </div>
                    <div class="footernewsdelivery">
                        <p class="footerhead">Máte zájem o zasílání novinek?</p>
                        <form action="#">
                            <div class="search">
                                <label for="email">
                                    <a href="#">HLEDAT</a>
                                </label>
                                <input type="email" id="email" name="search" placeholder="Zadejte váš email">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footerbottom">
                    <p>Copyright © 2018 starfishing.cz | Tvorba www stránek Machin.cz</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            if (<?=$detail_hide_check?>) {
                $(".detail_hide").css("display", "none");
                $("#product-img-div .size-post-thumbnail").css("width", "100%")
                $("#product-img-div .size-post-thumbnail").css("height", "auto")
                $("#product-img-div .size-post-thumbnail").css("border", "1px solid rgb(232, 232, 232)")
            }
        });
    </script>
    <?php
        wp_footer(); // tohle musi byt tesne pred zakoncenym body
    ?>
</body>
</html>

