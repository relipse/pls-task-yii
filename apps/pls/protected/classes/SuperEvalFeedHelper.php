<?php

/**
 * SuperEvalFeedHelper
 * This class was used to refactor the item->description replacing code
 * which was originally in repo. Because I decided to use it in several places,
 * I refactored it into its own static function.
 * I was not sure the best place to put helper classes, so I simply added a new
 * "classes" directory and autoloaded it in main.php
 * @see main.php
 */
class SuperEvalFeedHelper {
    /**
     * Format Feed Items
     * @param Feed $feed
     * @return SimpleXMLElement
     */
    public static function FormatFeedItems(Feed $feed): SimpleXMLElement{
        foreach ($feed->item as $item) {
            $more = ' <a href="' . $item->link . '" target="_blank">Read more</a>';
            $item->description = trim(str_replace(' [&#8230;]', '...' . $more, $item->description));
            $item->description = preg_replace('/The post.*appeared first on .*\./', '', $item->description);
        }
        $items = $feed->item;
        return $items;
    }
}
