# Wordpress-theme-project

Custom wordpress theme presenting a simple e-shop page. Includes homepage, detail, filtering and pagination.
Project also includes example screenshots.

## Content

The theme was originally developed with several example blog posts and categories.
These items are not included in the repository because they belong to the WordPress database.

## Installation

1. Download the repository
2. Place the folder into: wp-content/themes/
3. Activate the theme in WordPress admin panel

## Used categories

- ČLUNY, MOTORY, BELLY BOATY
- DALŠÍ
- BRÝLE
- CAMPING, OUTDOOR
- KRMENÍ, NÁSTRAHY NÁVNADY
- NAVIJÁKY
- PRUTY

- Produkt
- Uncategorized

- Novinky
- Akce
- Doprava zdarma
- Výprodej

## Menu Setup

1. Go to WordPress Admin
2. Navigate to Appearance → Menus
3. Create a 3 new menus
4. Assign them to the "main-menu", "header-right-menu", "footer-middle-menu" locations
5. Add categories (first 7) to main-menu, to next two, add simple posts
6. When creating posts, asign categories to filter them out

## Filtering

The page filters posts using a GET parameter "cat".
For example: /?cat=12
