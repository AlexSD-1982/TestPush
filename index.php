<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <input id='in1' />
    <button id='but1'>Press</button>

    <div id='div1'></div>



<?php
    if (preg_match('/(\d{1,2}.\d{1,2}.\d{1,4})/', ' 10.12.2014', $matches)) {
            $parameters['leg_doc_date'] = $matches[0];
        } else {
            $parameters['leg_doc_date'] = '';
        }
        echo $parameters['leg_doc_date'];
?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        jQuery(document).on("click",
                             "#but1",
                            
                            function()
                              {
                                jQuery.post("takeslovo.php",
                                            {
                                              slovo: jQuery("#in1").val()
                                            },
                                            function(data)
                                              {
                                                  jQuery('#div1').html(data);
                                              }
                                            )
                              })



    </script>


  </body>
</html>