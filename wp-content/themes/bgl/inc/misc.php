<?php

$news_archive_post_per_page = get_field('news_archive_post_per_page', 'option');
$news_ppp = (int)$news_archive_post_per_page;

function blg_news_pagination_ppp($query)
{
    if (!is_admin() && is_post_type_archive('news') && $query->is_main_query()) {
        global $news_ppp;
        $query->set('post_per_page', $news_ppp);
    }
}
