<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/09/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Portland, Oregon';
      $NAVIGATION  = true;
      $HEAD = '
        <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
        <link rel="stylesheet" href="/monitoring/index.css"/>
      ';
      $FOOT = '
      <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
      <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
      <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
      <script src="/monitoring/stations.js"></script>
      ';
      include  'template.inc.php';
      }
?>

<div class="row">
  <!-- Description and Contacts -->
  <div class="column two-of-three">

    <h2>Real-time Data</h2>
    <p>
      Instrument installation at this site took place during the summer and fall of 2006. These instruments are used to monitor and detect changes in local conditions, including
    </p>

    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#ten">Ground-water Pressure - Tensiometers</a></li>
      <li><a href="rtdmonitoring.php#waterpot">Ground-water Pressure - Water Potential Sensors</a></li>
      <li><a href="rtdmonitoring.php#pie">Ground-water Pressure - Piezometers</a></li>
      <li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
      <li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery</a></li>
    </ul>

    <p>
      <strong>Measurements are taken at 15-minute intervals</strong> and data are <strong>transmitted daily</strong> and displayed on graphs that are updated daily.
    </p>

    <hr/>
    <p>
      Landslides in the West Hills of Portland pose a hazard to people and property. In February 1996, a major storm induced hundreds of landslides in the West Hills. Smaller numbers of landslides occur every few years during extended rainy periods and intense storms.
    </p>
    <p>
      Data collection at this site supports research on hydrologic factors that control landslide initiation.  In many landslide-prone hillsides, infiltration of water from rainfall or snowmelt increases ground-water pressures. These elevated pressures can, in turn, induce landslide movement.
    </p>

    <hr/>
    <section class="photos">
      <figure>
        <a href="images/rex_logbox-lg.jpg"><img src="images/rex_logbox-sm.jpg" alt=""/></a>
      </figure>
      <figure>
        <a href="images/tens_install.jpg"><img src="images/tens_install_sm.jpg"/></a>
      </figure>
    </section>
  </div>

  <div class="column one-of-three">

    <h2>Monitoring Status</h2>
    <p class="status-active" align="center">ACTIVE</p>

    <h2>Location Map</h2>
    <div id="map">
    </div>
    <h2>Contacts</h2>
    <ul class="no-style">
      <li>
        <p>
          <strong>Jonathan Godt</strong><br />
          U.S. Geological Survey <br />
          Central Region Geologic Hazards Team <br />
          Box 25046, DFC <br />
          Mail Stop 966 <br />
          Denver CO 80225 <br />
          <a href="mailto:jgodt@usgs.gov">jgodt@usgs.gov</a>
        </p>
      </li>
      <li>
        <p>
          <strong>Rex Baum</strong><br />
          U.S. Geological Survey <br />
          Central Region Geologic Hazards Team <br />
          Box 25046, DFC <br />
          Mail Stop 966 <br />
          Denver CO 80225 <br />
          <a href="mailto:baum@usgs.gov">baum@usgs.gov</a>
        </p>
      </li>
    </ul>
    <h2>Cooperators</h2>
    <ul>
      <li>Portland State University</li>
      <li>The Oregon Department of Geology and Mineral Industries</li>
    </ul>
  </div>
</div>
