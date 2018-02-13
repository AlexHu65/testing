<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 6/20/2017
 * Time: 1:21 PM
 */


/*libxml_use_internal_errors(true);*/
$responseBody = '<ersion="1.0" encoding="UTF-8"?>
<request type="mraidAd">
   <htmlString skipoverlaybutton="1"><![CDATA[<script src="mraid.js"></script>
      <script>
      
      (function() {
      var c = \'\';
      var u = \'http://api.celtra.com/v1/creatives/1520/compiled/ExpandableBanner/mraid-inapp.js
      ?channel=test&c=\'+encodeURIComponent(c)+\'&rnd=\'+(Math.random()+\'\').slice(2);
      document.write(\'<script src="\'+u+\'"></scr\'+\'ipt>\');
      })();
      
      </script>]]>
   </htmlString>
   
   <clicktype>inapp</clicktype>
   
   <clickurl />
   
   <urltype>link</urltype>
   
   <refresh>30</refresh>
   
   <scale>no</scale>
   <skippreflight>yes</skippreflight>
</request>';
/*$xmlDoc = simplexml_load_string($responseBody);

if (!$xmlDoc) {
    $errors = libxml_get_errors();

    if ($errors != '') {
        echo 'errors on the xml file';
    }
    /*foreach ($errors as $error) {
        echo '<pre>';
        print_r($error);
        echo '</pre>';
    }*/

/* libxml_clear_errors();
}*/


libxml_use_internal_errors(true);
$xmlDoc = simplexml_load_string($responseBody);
$xmlError = false;

if (!$xmlDoc) {
    $errors = libxml_get_errors();
    if ($errors != '') {
        echo htmlentities($responseBody);
    }

}

//var_dump($xmlError);

