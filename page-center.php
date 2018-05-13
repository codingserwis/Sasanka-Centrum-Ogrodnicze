<?php 
/**
 * Template Name: Centrum Ogrodnicze
 * 
 * @version: 1.0
 * 
 * @since: 2.o
 */
get_header();

?>

<section class="main_section">
    <div class="top_img_shoping"></div>
    <div class="main_container">
        <section class="s_center">
            <div class="row">
                <div class="container">
                    <h2 class="container_header">
                        Zachęcamy do odwiedzenia naszego Centrum Ogrodniczego
                    </h2>
                    <p class="container_content">
                        Naszym klientom proponujemy szeroką ofertę wszystkiego, co może się okazać niezbędne w pielęgnacji ogrodu lub przydatne w jego upiększeniu. Służymy fachową pomocą przy zakupie upatrzonych roślin a nasi pracownicy doradzą jak je pielęgnować.
                    </p>
                </div>
            </div>
        </section>
        <section class="shoping_oferta"> <!-- shopping offer -->
            <div class="row">
                <div class="container"> <!-- offer container -->
                    <div class="row">
                        <div class="s_box to_animate margin_right">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/fertilizers_icon.svg' ) ; ?>" />
                            <h3>Nawozy ogrodnicze</h3>
                            W naszej ofercie znajdują się nawozy do wszystkich rodzajów roślin. Zarówno te naturalne jak i wieloskładnikowe.
                            <div class="more_btn">
                                <a href="<?php echo esc_url( home_url( '/centrum-ogrodnicze/nawozy-ogrodnicze/' ) ); ?>" style="color: #019200;">
                                    Dowiedz się więcej
                                </a> 
                            </div>
                        </div>
                        <div class="s_box to_animate margin_left_right">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/plant_prot_icon.svg' ); ?>" />
                            <h3>Środki ochrony roślin</h3>
                            W trosce o zdrowie i kondycję Państwa roślin nasze centrum ogrodnicze prowadzi sprzedaż tylko atestowanych środków ochrony roślin.
                            <div class="more_btn">
                                <a href="<?php echo esc_url( home_url( '/centrum-ogrodnicze/ochrona-roslin/' ) ); ?>" style="color: #019200;">
                                    Dowiedz się więcej
                                </a>
                            </div>
                        </div>
                        <div class="s_box to_animate margin_right">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/organic_substr_icon.svg' ); ?>" />
                            <h3>Podłoża organiczne</h3>
                            W Centrum Ogrodniczym Sasanka dostępne są podłoża najwyższej jakości. Znaleźć tu można ziemie uniwersalne jak i podłoża specjalistyczne.
                            <div class="more_btn">
                                <a href="<?php echo esc_url( home_url( '/centrum-ogrodnicze/podloza/' ) ); ?>" style="color: #019200;">
                                    Dowiedz się więcej
                                </a>
                            </div>
                        </div>
                        <div class="s_box to_animate">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/stone_icon.svg' ); ?>" />
                            <h3>Kamień ozdobny</h3>
                            Piękny ogród to nie tylko zadbane rośliny, dla tego oferujemy Państwu szeroką gamę kamieni ozdobnych, które idealnie skomponują się z zakupionymi u nas roślinami.
                            <div class="more_btn">
                                <a href="<?php echo esc_url( home_url( '/centrum-ogrodnicze/kamien-ozdobny/' ) ); ?>" style="color: #019200;">
                                    Dowiedz się więcej
                                </a>
                            </div>
                        </div>
                        <div class="s_box to_animate margin_right margin_left_right">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/trees_icon.svg' ); ?>" />
                            <h3>Drzewa i krzewy owocowe</h3>
                            Posiadamy w swojej ofercie również bogatą gamę drzew i krzewów owocowych.
                            <div class="more_btn">
                                <a href="<?php echo esc_url( home_url( '/centrum-ogrodnicze/kamien-ozdobny/' ) ); ?>" style="color: #019200;">
                                    Dowiedz się więcej
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end offer container --> 
            </div>
            <div class="row">
                <h3 class="marketing_heading">Zapewniamy transport zakupionych towarów a stałym klientom proponujemy system rabatowy</h3>
            </div>
        </section> <!-- end shopping offer -->
    </div>
</section>

<?php get_footer(); ?>