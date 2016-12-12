<?php
require get_template_directory() . "/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

function get_tweets() {
    if ( get_transient('tweets') !== false ) {
        return get_transient('tweets');
    } else {
        $connection = new TwitterOAuth(TWITTER_API_KEY, TWITTER_API_SECRET, TWITTER_ACCESS_TOKEN_KEY, TWITTER_ACCESS_TOKEN_SECRET);
        $content = $connection->get("search/tweets",
                        ["q" => "#yearofopen",
                         "since_id" => 702939861158768640,
                         "count" => 100
                        ]);
        $tweets = array();
        foreach ($content->statuses as $tweet) {
            if ( ! isset($tweet->retweeted_status) )
            $tweets[] = $tweet->id_str;
        }

        $tweets = array_slice($tweets, 0, 4);
        set_transient('tweets', $tweets, 60*60*1);
        return $tweets;
    }
}
