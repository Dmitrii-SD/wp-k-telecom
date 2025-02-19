<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?> 
<main class="main">
            <section class="banner">
                <div class="container">
                    <div class="banner__inner">
                        <div class="banner__text">
                            <h1><?php the_field("title")?></h1>
                            <ul class="banner__list">
                                <li><?php the_field("li_one")?></li>
                                <li><?php the_field("li_two")?></li>
                                <li><?php the_field("li_three")?></li>
                            </ul>
                            <button class="banner__btn">Подробнее</button>
                        </div>
                        <div class="banner__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/sm.Macbook-2 1.svg" alt="" class="mackbookImg">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/роутер.svg" alt="" class="routerImg">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/подложка.svg" alt="" class="backImg">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Wi-Fi.svg" alt="" class="wiFi">
                        </div>
                        
                    </div>
                </div>
            </section>
            <section class="tariffs">
                <div class="tariffs__inner">
                    <div class="container">
                        <h2><?php the_field("tariffs_title")?></h2>
                    </div>
                    <div class="tariffs__boxItem">
                        <div class="swiper">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                <?php
global $post;

$myposts = get_posts([
	'numberposts' => -1,
	
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title()-->
        <div class="swiper-slide tariffs__item">
            <h3><?php the_title(); ?></h3>
            <p class="tariffs__speedText"><?php the_field("speed_text")?><span class="speedText_span">до 40 Мбит/с</span></p>
            <p class="tariffs__text"><?php the_field("tariffs__text")?></p>
            <label><input type="checkbox"><span class="checkbox__span"><?php the_field("checkbox_text")?><br>(пакет “Базовый”)</span></label>
            <P class="price"><?php the_field("price")?><span class="price__span"><?php the_field("price_text")?></span></P>
            <small><?php the_field("dop_inform")?></small>
            <button class="tariffs__btn">Выбрать тариф</button>
        </div>        
		<?php
	}
} 


wp_reset_postdata();
?>

                                    
                                    
                                    <div class="swiper-slide spaceSlide"></div> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   
                    
            
                </div>
            </section>
        </main>
<?php get_footer(); ?> 
