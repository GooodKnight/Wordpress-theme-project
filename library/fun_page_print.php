<?php
    function page_detail() {
        $page = [];
        $id = $_GET["p"];
        if (isset($id)) {
            $price = get_post_meta($id, "price", true);
            if (!$price) {
                $price = "Neuvedena";
            }

            $thumbnail = get_the_post_thumbnail($id);
            if (!$thumbnail) {
                $thumbnail = "<img src=\"imgmean/logostar.png\" alt=\"Logo\">";
            }

            $page[] = "<div id=\"detail\">";
            $page[] = "<div id=\"product-img-div\">" . $thumbnail . "</div>";
            $page[] = "<div id=\"product-informations\">";
            $page[] = "<h2>" . get_the_title($id) . "</h2>";
            $page[] = "<div id=\"tags\">";
            $page[] = "<div class=\"green-window\"><p>Záruka:</p></div>";
            $page[] = "<div class=\"green-window left-green-window\"><ul><li><a href=\"#\">6 Měsíců</a></li></ul></div>";
            $page[] = "<div class=\"green-window\"><p>Cena:</p></div>";
            $page[] = "<div class=\"green-window left-green-window\"><p>".$price."</p></div>";
            $page[] = "<div class=\"green-window\"><p>Dostupnost:</p></div>";
            $page[] = "<div class=\"green-window left-green-window\"><p>Není skladem</p></div>";
            $page[] = "<div class=\"green-window\"><p>Výrobce:</p></div>";
            $page[] = "<div class=\"green-window left-green-window\"><ul><li><a href=\"#\">CatchFish</a></li></ul></div>";
            $page[] = "</div>";
            $page[] = "<p>" . get_the_content(null, false, $id) . "</p>";
            $page[] = "</div></div>";
        } else {
            $page[] = "Produkt nebyl nalezen";
        }
        $page = implode("", $page);
        return $page;
    }

    function page($words_count, $specific_category = 12) {
        $page = [];

        $paged = get_query_var("paged"); 

        if (!$paged) { 
            $paged = 1; 
        }

        $args = [
            "posts_per_page" => 8,
            "cat" => $specific_category,
            "paged" => $paged
        ];
    
        $query = new WP_Query($args);
    
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
    
                $price = get_post_meta(get_the_ID(), "price", true);
                if (!$price) {
                    $price = "Neuvedena";
                }

                $thumbnail = get_the_post_thumbnail();
                if (!$thumbnail) {
                    $thumbnail = "<img src=\"imgmean/logostar.png\" alt=\"Logo\">";
                }
    
                $page[] = "<a href=\"". get_the_permalink() ."\">";
                $page[] = "<div class=\"product productmargin productmarginbottom\">";
                $page[] = "<div class=\"producttopsection\">";
                $page[] = "<div class=\"tagsdiv\">";

                if (get_the_tags()) {
                   foreach (get_the_tags() as $tag) {
                        $t = $tag->name;
                        if ($t == "Akce") {
                            $t_class = "action";
                        } elseif ($t == "Doprava zdarma") {
                            $t_class = "freedelivery";
                        } elseif ($t == "Sale") {
                            $_class = "sale";
                        }

                        $page[] = "<div class=\"".$t_class."div\">";
                        $page[] = "<p>".$t."</p></div>";
                    } 
                }
                $page[] = "</div><div class=\"producttopsectionimg\">" . $thumbnail . "</div>";
                $page[] = "<div class=\"producttopsectionheader\"><h2>" . get_the_title() . "</h2></div>";
                $page[] = "<div class=\"producttopsectiondescription\"><p>" . wp_trim_words(get_the_content(), $words_count) . "</p></div></div>";
                $page[] = "<div class=\"productbottomsection\"><div><p>". esc_html($price) ."</p></div></div>";
                $page[] = "</div></a>";
            }
        }
    
        wp_reset_postdata();
    
        $page = implode("", $page);
        return $page;
    }
    
    function news($words_count) {
        $page = [];
        
        $args = [
            "category_name" => "Novinky", 
            "posts_per_page" => 2
        ];

        $query = new WP_Query($args);
    
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
    
                $page[] = "<a href=\"" . get_the_permalink() . "\">";
                $page[] = "<div class=\"actualitieshalfsection\">";
                $page[] = get_the_post_thumbnail();
                $page[] = "<div class=\"actualitieshalfsectionright\">";
                $page[] = "<div class=\"actualitiesheader\">";
                $page[] = "<h2>" . get_the_title() . "</h2>";
                $page[] = "</div>";
                $page[] = "<div class=\"actualitiesdate\">";
                $page[] = "<p>" . get_the_date("d.m.Y") . "</p>";
                $page[] = "</div>";
                $page[] = "<div class=\"actualitiesdescription\">";
                $page[] = "<p>" . wp_trim_words(get_the_content(), $words_count) . "</p>";
                $page[] = "</div>";
                $page[] = "</div>";
                $page[] = "</div>";
                $page[] = "</a>";
            }
            
        }
        wp_reset_postdata();

        $page = implode("", $page);
        return $page;
    } 
?>