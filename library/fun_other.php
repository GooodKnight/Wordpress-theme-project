<?php
    function slider_background($div, $id) {
        $img = $div."{background-image: url(".esc_url(get_the_post_thumbnail_url($id)).");}";
        return $img;
    }

    function slider_con($id) {
        $text = get_the_content(null, false, $id);
        return $text;
    }
    
    function slider_left() {
        $text = get_the_content(null, false, 114);
        return $text;
    }

    function slider_right() {
        $id = 102;
        $info = get_post_meta($id, "info", true);
        $text = [];

        $text[] = "<h1>".get_the_content(null, false, $id)."</h1>";
        $text[] = "<div><a href=\"".get_the_permalink($id)."\">".$info."</a></div>";

        $text = implode("", $text);
        return $text;
    }

    function home_icon() {
        $home = get_home_url();
        return $home;
    }

    function my_next_page() {
        $next_page = [];

        $next_page[] = "<a href=\"".get_next_posts_page_link()."\">";
        $next_page[] = "<div class=\"otheroffersnext\"><p class=\"otheroffersrightnext\">zobrazit další nabídky</p>";
        $next_page[] = "<img src=\"imgmean/arrow.png\" alt=\"Arrow\"></div></a>";

        $next_page = implode("", $next_page);
        return $next_page;
    }

    function my_previous_page() {
        $previous_page = [];

        $previous_page[] = "<a href=\"".get_previous_posts_page_link()."\">";
        $previous_page[] = "<div class=\"otheroffersprevious\"><img src=\"imgmean/arrow.png\" alt=\"Arrow\">";
        $previous_page[] = "<p class=\"otheroffersrightprevious\">zobrazit předchozí nabídky</p></div></a>";

        $previous_page = implode("", $previous_page);
        return $previous_page;
    }
?>