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
    $result = "<ul class='nav navbar-right navbar-nav'>\n";

    // get nav file as string
    $navFile = dirname(__FILE__) . '/../json/nav.json';
    $result .= jsonFileArrayToStr($navFile, "makeNavItem");

    // return html
    return $result . "</ul>\n";
}

function makeNavItem($item) {
    if (property_exists($item, "items")) {
        return makeNavDropDown($item);
    }
    elseif (property_exists($item, "link")) {
        return makeNavLink($item);
    }
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
        <ul class='dropdown-menu' role='menu'>\n";

    $result .= jsonArrayToStr($ddObj->items, "makeNavItem");

    return $result . "</ul>\n</li>\n";
}


/*
 * Given path to a json file, assumes that the top level element
 * in the file is an array of objects. Reduces the array to a string
 * by mapping each object through the given function and
 * imploding the mapped array
 */
function jsonFileArrayToStr($jsonPath, $mapFunc) {
    $arr = json_decode(file_get_contents($jsonPath));
    return jsonArrayToStr($arr, $mapFunc);
}

/*
 * Map each object in a json array of objects with the given function
 * and implode the resulting array
 */
function jsonArrayToStr($jsonArr, $mapFunc) {
    return implode("", array_map($mapFunc, $jsonArr));
}

?>
