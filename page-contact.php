<?php 
/**
 * Template name: Kontakt
 * 
 * @version: 1.1
 * @since: 1.0
 */

// Contact information from ACF
    $phone_no = get_field( 'shop_phone' );
    $mobile_shop_no = get_field( 'shop_mobile_phone' );
    $mobile_service_no = get_field( 'service_mobile_phone' );
    $email = get_field( 'shop_email' );
    
    get_header();

?>

    <section class="contact"> <!-- start contact -->
        <div class="row">
            <div class="map_panel">
               
               <?php 
                
                    echo do_shortcode( '[php snippet=1]' );

                ?>

            </div>
            <div class="text_panel_green adress_desc">
                <h1 class="adress_heading">
                    Centrum Ogrodnicze Sasanka
                </h1>
                <address class="main_adress">
                    <div class="row">
                        <div class="adress_info">
                            Kurpiowska (boczna Hallera) 45-819 Opole
                        </div>
                    </div>
                    <div class="row">
                        <div class="adress_info">
                            <ul>
                                <li>Sklep: <a href="<?php echo esc_url( 'tel:+48' . $tel = str_replace( ' ', '', $phone_no ) ); ?>" ><?php the_field( 'shop_phone' ); ?></a></li>
                                <li>Sklep: <a href="<?php echo esc_url( 'tel:+48' . $shop_mob = str_replace( ' ', '', $mobile_shop_no) ); ?>"><?php the_field( 'shop_mobile_phone' ); ?></a></li>
                                <li>Usługi: <a href="<?php echo esc_url( 'tel:+48' . $service_mob = str_replace( ' ', '', $mobile_service_no) ); ?>" ><?php the_field( 'service_mobile_phone' ); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="adress_info">
                            <a href="<?php echo esc_url( 'mailto:' . $email ); ?>"><?php the_field( 'shop_email' ); ?></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="adress_info">
                            <ul>
                                <li>Pon. - Pt.: <?php the_field( 'hours_mon_fr_open' ); ?> - <?php the_field( 'hours_mon_fr_close' ); ?></li>
                                <li>Sobota: <?php the_field( 'hours_sat_open' ); ?> - <?php the_field( 'hours_sat_close' ); ?></li>
                            </ul>
                        </div>
                    </div>
                </address>
            </div>
        </div>
    </section>

<?php 

    get_footer();

?>