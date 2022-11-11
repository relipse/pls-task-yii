<?php

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
