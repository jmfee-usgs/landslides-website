<?php

include_once '../lib/Features.class.php';

date_default_timezone_set('UTC');

$LS_FEATURES = new Features();
$LS_FEATURES->id = 'usgs_landslides_home';
$LS_FEATURES->title = 'USGS Landslide Hazards Program Featured Items';
$LS_FEATURES->author = 'U.S. Geological Survey';
$LS_FEATURES->siteUrl = 'https://landslides.usgs.gov/';
$LS_FEATURES->baseUrl = '';


$LS_FEATURES->items[] = array(
  'id' => '2018-08-24',
  'title' => 'Preliminary Landslide Susceptibility Maps and Data for Hawaii',
  'content' => 'Hurricane Lane is expected to bring heavy rain to the Hawaiian Islands and the potential for debris flows and other landslides',
  'link' => 'https://www.usgs.gov/natural-hazards/landslide-hazards/science/preliminary-landslide-susceptibility-maps-and-data-hawaii',
  'modified' => strtotime('2018-08-23'),
  'thumbnail' => 'https://landslides.usgs.gov/images-featured/HI-debrisflow-haz.jpg',
  'image' => 'https://landslides.usgs.gov/images-featured/HI-debrisflow-haz.jpg'
);

$LS_FEATURES->items[] = array(
  'id' => '2018-08-06',
  'title' => 'Landslide and Liquefaction Estimates for Earthquake Eventpages',
  'content' => 'Landslides and liquefaction estimates are one of the new event products for realtime earthquakes.',
  'link' => 'https://www.usgs.gov/center-news/better-performance-and-new-features-earthquake-website',
  'modified' => strtotime('2018-08-06'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/ground-failure-card.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/ground-failure-card.png'
);

$LS_FEATURES->items[] = array(
  'id' => '2018-07-25',
  'title' => 'Researchers Develop Model for Predicting Landslides Caused by Earthquakes',
  'content' => 'A model developed by researchers at Indiana University and the USGS can help experts address such risks by estimating the likelihood of landslides that will be caused by earthquakes anywhere in the world within minutes.',
  'link' => 'https://www.eurekalert.org/pub_releases/2018-07/iu-ird072418.php',
  'modified' => strtotime('2018-07-25'),
  'thumbnail' => 'https://landslides.usgs.gov/images-featured/ElSalvador-landslide.jpg',
  'image' => 'https://landslides.usgs.gov/images-featured/ElSalvador-landslide.jpg'
);

$LS_FEATURES->items[] = array(
   'id' => '2018-06-25',
   'title' => 'Near Realtime Maps of Possible Earthquake-Triggered Landslides',
   'content' => 'USGS scientists have been developing a system to quickly identify areas where landslides may have been triggered by a significant earthquake.' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/realtime-ls/',
   'modified' => strtotime('2018-06-25'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/Nepal-Baisari.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/Nepal-Baisari.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-06-18',
   'title' => 'Mountain Permafrost, Climate Change, and Rock Avalanches in Glacier Bay National Park, Alaska',
   'content' => 'We usually hear about landslides and avalanches that are caused by large amounts of rainfall, the shaking from earthquakes, or a volcanic eruption, but we may be hearing more about avalanches caused by the (seemingly innocuous) melting of ice in the coming years.' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/glacier-bay/',
   'modified' => strtotime('2018-06-18'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/glacierbay.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/glacierbay.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-06-11',
   'title' => 'Slow-Motion Landslides',
   'content' => 'Sluggishly-moving earthflows can help us learn what controls the starting and stopping of landslides.' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/clayey-ls/',
   'modified' => strtotime('2018-06-11'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/TwoTowers-sm.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/TwoTowers-sm.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-05-14',
   'title' => 'Landslides Can Cause More Landslides',
   'content' => 'The deadliest individual landslides in the U.S. recently were in places where there had previously been a landslide. Why do landslides happen in the same place instead of on nearby slopes that appear to be just as likely, if not more likely, to slide?' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/landslide-disruption/',
   'modified' => strtotime('2018-05-14'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/more-landslides.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/more-landslides.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-04-03',
   'title' => 'Landslides triggered by the 14 November 2016 Mw 7.8 Kaikoura Earthquake, New Zealand',
   'content' => 'In the months since the earthquake a large team of USGS scientists and collaborators has been involved in constructing and analyzing an inventory of landslides from this event. (AGU Landslide Blog)' ,
   'link' => 'https://blogs.agu.org/landslideblog/2018/04/03/bssa-mw-7-8-kaikoura-earthquake-1/',
   'modified' => strtotime('2018-02-03'),
   'thumbnail' => 'images-featured/Kaikoura-geol-effects.png',
   'image' => 'https://landslides.usgs.gov/images-featured/Kaikoura-geol-effects.png'
 );

 $LS_FEATURES->items[] = array(
    'id' => '2018-01-29',
    'title' => 'USGS Geologists Study Debris-Flow Aftermath in Montecito',
    'content' => 'Days after fatal debris flows devastated Southern California’s Montecito community,  a team of U.S. Geological Survey geologists joined county, state, and federal partners to survey and  evaluate the aftermath.' ,
    'link' => 'https://www.usgs.gov/news/usgs-geologists-join-efforts-montecito-assess-debris-flow-aftermath',
    'modified' => strtotime('2018-01-29'),
    'thumbnail' => 'images-featured/ScientistsUnite_Montecito.jpg',
    'image' => 'images-featured/ScientistsUnite_Montecito.jpg'
  );

 $LS_FEATURES->items[] = array(
    'id' => '2018-01-18',
    'title' => 'Rattlesnake Hills Landslide Information',
    'content' => 'What is known and what is being done, from the Washington Department of Natural Resources.' ,
    'link' => 'https://www.dnr.wa.gov/rattlesnake-hills-landslide',
    'modified' => strtotime('2018-01-18'),
    'thumbnail' => 'images-featured/RattlesnakeHills.png',
    'image' => 'images-featured/RattlesnakeHills.png'
  );

 $LS_FEATURES->items[] = array(
    'id' => '2017-10-25',
    'title' => 'Map data showing concentration of landslides caused by Hurricane Maria in Puerto Rico',
    'content' => 'This data release presents geospatial data describing the concentration of landslides generated by Hurricane Maria in Puerto Rico.' ,
    'link' => 'https://landslides.usgs.gov/research/featured/2017/maria-pr/',
    'modified' => strtotime('2017-10-25'),
    'thumbnail' => 'images-featured/PR_Maria_LS_density_map_sm.jpg',
    'image' => 'images-featured/PR_Maria_LS_density_map_sm.jpg'
  );

 $LS_FEATURES->items[] = array(
    'id' => '2017-09-29',
    'title' => 'Preliminary locations of landslide impacts from Hurricane Maria, Puerto Rico',
    'content' => 'Preliminary analysis of rainfall-triggered landslides in the mountainous areas of Puerto Rico from Hurricane Maria.' ,
    'link' => 'http://landslides.usgs.gov/research/featured/2017-maria-pr/',
    'modified' => strtotime('2017-09-29'),
    'thumbnail' => 'images-featured/maria-pr.jpg',
    'image' => 'images-featured/maria-pr.jpg'
  );

 $LS_FEATURES->items[] = array(
    'id' => '2017-08-30',
    'title' => 'Debris Flow Video from Chalk Cliffs, Colorado',
    'content' => 'Chalk Cliffs, located 8 miles southwest of Buena Vista, CO, is one of the most active debris-flow areas in the state. This debris flow took place August 18, 2016. ' ,
    'link' => 'https://www.usgs.gov/media/videos/debris-flow-monitoring-chalk-cliffs-co-2016',
    'modified' => strtotime('2017-08-30'),
    'thumbnail' => 'images-featured/chalkcliffs-video.png',
    'image' => 'images-featured/chalkcliffs-video.png'
  );

 $LS_FEATURES->items[] = array(
    'id' => '2017-06-30',
    'title' => 'Nuugaatsiaq Landslide&ndash;Preliminary Analysis',
    'content' => 'Preliminary analysis of the tsunami that hit the community of Nuugaatsiaq, Greenland around 10 pm local time on June 17th, 2017 that presumably killed four people and destroyed eleven homes.' ,
    'link' => 'https://landslides.usgs.gov/research/featured/2017/nuugaatsiaq/',
    'modified' => strtotime('2017-06-30'),
    'thumbnail' => 'images-featured/nuug-landslide.jpg',
    'image' => 'images-featured/nuug-landslide.jpg'
  );

$LS_FEATURES->items[] = array(
   'id' => '2017-04-17',
   'title' => 'Homeowner&apos;s Guide to Landslides',
   'content' => 'A new publication, <i>A Homeowner&apos;s Guide to Landslides for Washington and Oregon</i> (PDF) by the Washington Department of Natural Resources and the Oregon Department of Geology and Mineral Industries.' ,
   'link' => 'http://file.dnr.wa.gov/publications/ger_homeowners_guide_landslides.pdf',
   'modified' => strtotime('2017-04-17'),
   'thumbnail' => 'images-featured/homeowner-guide.gif',
   'image' => 'images-featured/homeowner-guide.gif'
 );

$LS_FEATURES->items[] = array(
   'id' => '2017-01-05',
   'title' => 'Predicting Postfire Debris Flows Saves Lives',
   'content' => 'How predicting postfire debris flows saves lives.' ,
   'link' => 'https://www.usgs.gov/center-news/predicting-postfire-debris-flows-saves-lives',
   'modified' => strtotime('2017-01-05'),
   'thumbnail' => 'images-featured/debrisflow-sm.jpg',
   'image' => 'images-featured/debrisflow-sm.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2017-01-01',
   'title' => 'Rainfall and Landslides in California',
   'content' => '
    <a href="research/ca-rainfall/ncal.php">Northern and Central California</a>
    <br/>
    <a href="research/ca-rainfall/scal.php">Southern California</a>
  ' ,
   'link' => '',
   'modified' => strtotime('2017-01-01'),
   'thumbnail' => 'images-featured/bluebirdcyn2005-sm.jpg',
   'image' => 'images-featured/bluebirdcyn2005-sm.jpg'
 );

 $LS_FEATURES->items[] = array(
    'id' => '2015-03-21',
    'title' => 'Down to Earth With: The USGS Landslide Response Team',
    'content' => 'Interview by EARTH magazine of members of the USGS Landslide Reponse Team' ,
    'link' => 'https://www.earthmagazine.org/article/down-earth-usgs-landslide-response-team',
    'modified' => strtotime('2015-03-21'),
    'thumbnail' => 'images-featured/responseteam-sm.jpg',
    'image' => 'images-featured/responseteam-sm.jpg'
  );

$LS_FEATURES->items[] = array(
  'id' => '2014-05-25',
  'title' => 'Reconstruction of an Avalanche',
  'content' => 'The West Salt Creek Rock Avalanche, Colorado, May 25, 2014.' ,
  'link' => 'https://landslides.usgs.gov/research/featured/2015-westsaltcreek/',
  'modified' => strtotime('2014-05-25'),
  'thumbnail' => '/research/featured/images/westsaltcreek-sm.jpg',
  'image' => '/research/featured/images/westsaltcreek-sm.jpg'
);
