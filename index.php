<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home - Loja Virtual</title>
        <link rel="stylesheet" href="css/css.css">
    </head>

    <body>
    <header>
        <h1 class="header-logo"><a href="#"><img src="http://fakeimg.pl/200x80/1C140D/CBE86B/?text=LOGO+200x80&amp;font_size=30&amp;font=roboto" /></a></h1>
        <?php 
            $menuUrl = "json/menu.json";

            $arrMenu = json_decode(file_get_contents($menuUrl), true);
            echo "<nav class=\"top-menu\"><ul>";
            foreach ($arrMenu["menu"] as $option) {
                echo "<li><a href=\"#\" class=\"" . $option["slug"]  . "\">" . $option["titulo"] . "</a></li>";
            }
            echo "</ul></nav>";
        ?> 
    </header>
    <section class="container">
        <?php 
            $productsUrl = "json/products.json";

            $arrProducts = json_decode(file_get_contents($productsUrl), true);
            echo "<ul class=\"product-list\">";
            foreach ($arrProducts["produtos"] as $item) {
                echo "<li class=\"item " . $item["slug"]  . "\">
                        <a href=\"#\">
                            <span class=\"image-container\"><img class=\"image\" src=\"" . $item["thumbnail"]  . "\" /></span>
                            <span class=\"name\">" . $item["nome"]  . "</span>
                            <span class=\"price-container\"><span class=\"currency\">R$</span> <span class=\"price\">" . $item["preco"]  . "</span></span>
                        </a>
                      </li>";
            }
            echo "</ul>";
        ?>
    </section>
    <footer>
    <a href="#" class="footer-logo"><img src="http://fakeimg.pl/200x80/d8d8d8/999/?text=LOGO+200x80&amp;font_size=30&amp;font=roboto" /></a>
        <?php 
            echo "<nav class=\"bottom-menu\"><ul>";
            foreach ($arrMenu["menu"] as $option) {
                echo "<li><a href=\"#\" class=\"" . $option["slug"]  . "\">" . $option["titulo"] . "</a></li>";
            }
            echo "</ul></nav>";
        ?>         
    </footer>
 </body>
</html>
