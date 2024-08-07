<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'jiotv.s0ndip',
  'creator_name' => 's0ndip',
  'creation_date' => '2024-07-16',
  'rev_no' => 'R0',
  'remarks' => 'Edit Url paths based on your local file locations | Edit Timezone based on your file | Edit culture info based on your files',
  'culture' => 'en',
  'max_day' => '5',
  'rating_system' => 'EN',
  'episodeOption' => '2',
  'keepindexpage' => 'on',
  'pastdayremover' => 'on',
  'compressionOption' => '1',
  'url1' => 'https://github.com/s0ndip/automated.epg.grabber/raw/main/tempest_config/epg/geo.xml.gz',
  'requestOption1' => '1',
  'show' => '(<programme.*?<\\/programme>)||#include#channel="##channel##"||#include#catchup-id="##catchup-id##">',
  'start' => 'start="(\\d+)"',
  'start_format' => 'YmdHis',
  'stop' => 'stop="(\\d+)"',
  'stop_format' => 'YmdHis',
  'title' => '<title>(.*?)<\/title>',
  'desc' => '<desc>(.*?)<\/desc>',
  'category' => '<category>(.*?)<\/category>',
  'showicon' => '<icon src="(.*?)"',
  'season' => '">S(\\d+)',
  'episode' => '">(?:S\\d+\\s)?E(\\d+)',
  'episode_total' => '">(?:S\\d+\\s)?E\\d+\\/(\\d+)',
  'channel_logo' => '||#add###cclogo##',
  'actor' => '<actor.*?>(.*?)<\\/',
  'director' => '<director>(.*?)<\\/',
  'rating' => '<rating.*?<value>(.*?)<\\/',
  'ccurl1' => 'https://github.com/s0ndip/automated.epg.grabber/raw/main/tempest_config/epg/geo.xml.gz',
  'ccrequestOption1' => '1',
  'ccchannel_block' => '<channel id.*?<\\/channel>',
  'ccchannel_id' => 'id="(.*?)"',
  'ccchannel_name' => '<display-name.*?>(.*?)<\\/',
  'ccchannel_logo' => '<icon src="(.*?)"',
  'catchup_id' => 'catchup-id="(\d+)"',
);
?>