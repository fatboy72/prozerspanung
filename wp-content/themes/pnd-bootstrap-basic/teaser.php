
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// ALl Teasers
$type = get_field( 'teasertype');
$pageteasertitle = get_field( 'pageteasertitle');
$pageteasertitle = empty ( $pageteasertitle ) ? get_the_title() : $pageteasertitle;
$pageteaser = get_field( 'pageteaser');

// Teaser: Image + Text
$teaserimage = get_field( 'teaserimage');
$teaserimageposition = get_field( 'teaserimageposition'); // bool: image left?

// Contact Teasers
$teaserimages = get_field( 'teaserimages');
$teaserquotation = get_field( 'teaserquotation');




if ( isset ($type) AND empty ($type) === FALSE ) {


    if ( $type == 'contact' ) {
    ?> <!-- Ansprechpartner Teaser -->
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php echo $pageteasertitle; ?>
            </a>
        </h2>
        <?php
            echo get_field( 'pageteaser' );
            $permanentlink = get_the_permalink();
        ?>
        
        
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="row">
                        <?php
                            foreach ( $teaserimages as $image ) {
                                $post = $image;
                                setup_postdata( $post );
                        ?>
                            <div class="col-md-6 col-xs-6">
                                <div class="contact">
                                    <p class="attachment">
                                        <?php 
                                            echo wp_get_attachment_image ($image->ID, thumbnail, false, array ( 'class' => 'img-responsive'  ));
                                        ?>
                                    </p>
                                    <p>
                                    <?php 
                                        the_title();
                                        echo '<br /><strong>' . get_the_content() . '</strong>';
                                    ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                                wp_reset_postdata();
                            }
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="teaser-quotation">
                   <?php
                        echo $teaserquotation ."</mark>" ?>
                    </div>
                    <p><a class="btn btn-default" href="<?php echo $permanentlink ?>" role="button"><?php pll_e('Ansprechpartner'); ?></a></p>
                </div>
            </div>

        <!-- Bild + Text Teaser -->
    <?php

    } else if ( $type == 'textimage' ) {
        $textclass = '';
        if ( $teaserimageposition == 1 ) {
            $textclass= 'text-md-right';
        }
        $text_col = '<div  class="col-xs-12 col-md-6 ' . $textclass . '" >'
                    . $pageteaser 
                    . '<p><a class="btn btn-default" href="'. get_the_permalink() .'" role="button">'. pll__('Mehr erfahren') . '</a></p>'
                . '</div>';
        
        $image_col = '<div  class="col-xs-12 col-md-6">
                        '. wp_get_attachment_image ($teaserimage, 'large', false, array ('class' => 'img-responsive' ) ).'
                    </div>' ;  
        
        echo '<div class="row">';
        echo '<div  class="col-md-12 ' . $textclass . '" ><h2 class="h4"><a href="' . get_the_permalink() . '">'
                    . $pageteasertitle 
                    . '</a></h2></div>';
        if ( $teaserimageposition == 1 ) {
            echo $image_col . $text_col;
        } else {
            echo $text_col . $image_col;
        }
        echo '</div>';
        
        
    ?>
        <!--  Text Teaser -->
    <?php
    } else if ( $type == 'text' ) {
    ?>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php echo $pageteasertitle; ?>
            </a>
        </h2>
        <?php echo get_field( 'pageteaser' ); ?>
        <p><a class="btn btn-default" href="<?php the_permalink() ?>" role="button"><?php pll_e('Mehr erfahren'); ?></a></p>
    <?php
    }
}