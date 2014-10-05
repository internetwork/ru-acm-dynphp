<?php

function hyperlink($url, $linkTxt=false) {
    if (!$linkTxt) {
        return "<a href='{$url}'>{$url}</a>";
    }
    else {
        return "<a href='{$url}'>{$linkTxt}</a>";
    }
}

/*
 * Creates unordered list for top-level navbar element
 * by reading nav elements from a json file
 */
function makeNav() {
    $result = "<ul class='nav navbar-right navbar-nav'>" . PHP_EOL;

    // get nav file as string
    $navFile = dirname(__FILE__) . '/../const/nav.json';
    $jsonStr = file_get_contents($navFile);
    // parse string as json
    $jsonObj = json_decode($jsonStr);

    // iterate through object to create list
    $result .= makeNavLinkList($jsonObj->items);

    // return html
    return $result . "</ul>" . PHP_EOL;
}

/*
 * Given an array of objects, create list items for each object in the list
 * Objects must have a "name" property and either a "link" property or "items" property
 * Objects w/ a link property are turned into a single list item w/ makeNavLink();
 * objects with an 'items' property are turned into a dropdown list item using makeNavDropDown()
 */
function makeNavLinkList($linkArr) {
    $result = '';
    foreach ($linkArr as $item) {
        // is it a single link or dropdown?
        if (property_exists($item, "items")) {
            $result .= makeNavDropDown($item);
        }
        elseif (property_exists($item, "link")) {
            $result .= makeNavLink($item);
        }
    }
    return $result;
}

/*
 * Creates a single navigation list item
 */
function makeNavLink($jsonObj) {
    $name = $jsonObj->name;
    $url = $jsonObj->link;
    $href = hyperlink($url, htmlspecialchars($name));
    return "<li id='$name'>$href</li>" . PHP_EOL;
}

/*
 * Creates a navigation dropdown list item
 */
function makeNavDropDown($ddObj) {
    $name = $ddObj->name;
    $result = "<li class='dropdown'>
        <a href='#' class='dropdown-toggle' data-toggle='dropdown'>$name <span class='caret'></span></a>
        <ul class='dropdown-menu' role='menu'>" . PHP_EOL;

    $result .= makeNavLinkList($ddObj->items);

    return $result . "</ul>\n</li>\n";
}

?>
