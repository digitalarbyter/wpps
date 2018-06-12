<?php
/*
Change slug of the plugin
Take the URL of the plugin (for example https://wordpress.org/plugins/wp-tweaker/) and copy the slug of the plugin without the "/"
*/
$slug="wp-tweaker";
$json=file_get_contents("https://api.wordpress.org/stats/plugin/1.0/downloads.php?slug=".$slug."&historical_summary=1");
if(!empty($json))
{
$output=json_decode($json);

//assigning the variables
$dl_today=$output->today;
$dl_yesterday=$output->yesterday;
$dl_last_week=$output->last_week;
$dl_all_time=$output->all_time;

//output of download-numbers as provided by wordpress.org
echo "Today: ".$dl_today." yesterday: ".$dl_yesterday." last week: ".$dl_last_week." all time: ".$dl_all_time;
}
?>
