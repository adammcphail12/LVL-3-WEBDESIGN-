 <div class = "box main">
           <h2>Insect Gallery</h2>

            <p>
                These Insects are a selection from <a href = 'https://commons.wikimedia.org/wiki/Commons:Featured_pictures/Animals/Arthropods'>Wikimedia</a> commons featured pages.
            </p>

            <?php
                $dirname = "images/insects/";
                $images = glob($dirname."*.jpg");

                foreach($images as $images) {

                    // get image properties
                    $exif = exif_read_data($images, 0, true);

                    foreach ($exif as  $key => $section) {
                        foreach ($section as $name => $val) {

                            if ($key == 'IFDO' and $name == "Title") {

                                // strips 'special' characters,  allows a-z, spaces, dashes and round brackets
                                $val = preg_replace('/[^A-Za-z0-9\- ()]/', '', $val);
                                $title = $val;
                            }

                        } // end $section loop
                    }// end$exif loop
                    ?>

                        <div class =  'responsive-gallery'>
                            <div class='gallery'>
                                <a href='<?php echo $images; ?>' class='big'>
                                <img src='<?php echo $images; ?>' alt='<?php echo $title; ?>' title = '<?php echo $title; ?>'>
                                </a>
                            </div> <!-- / gallery --> 
                        </div> <!-- / responsive gallery  -->

                    <?php

                }

            ?>

            
        </div>