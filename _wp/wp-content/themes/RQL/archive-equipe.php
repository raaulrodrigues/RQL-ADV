<?php get_header(); ?>
    <div class="dynamicSpacer"></div>
    <section id="about-us-hero">
        <div class="slide" style="background-image: url('<?php bloginfo('template_url'); ?>/img/background-contato.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-hero-content main-text text-white">
                            <p>Equipe</p>
                            <h1>Profissionais</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="professionals-list">
        <div class="spacer-60"></div>
        <div class="container">
            <form action="<?php bloginfo('url'); ?>/equipe" method="get" class="row align-items-center justify-content-between">
                <div class="col-12 col-md-5">
                    <div class="professionals-search-field">
                        <input type="text" name="keyword" placeholder="Nome do Profissional" value="<?php if(isset($_GET['keyword'])){ echo $_GET['keyword']; } ?>">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="professionals-search-field">
                        <select name="atuacao">
                            <option value="" selected disabled>Área de atuação</option>
                            <?php
                                $args = array(
                                    'post_type' => 'areas_de_atuacao',
                                    'posts_per_page' => -1,
                                );
                                $query = new WP_query($args);
                            ?>
                            <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <option value="<?php echo $post->ID; ?>"<?php if($_GET['atuacao'] == $post->ID){echo ' selected';} ?>><?php the_title(); ?></option> 
                            <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); wp_reset_query(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-6 col-md-auto">
                    <button type="submit" class="main-btn bg-gold text-white bg-hover-white text-hover-gold"><i class="bi bi-search"></i> BUSCAR</button>
                </div>
                <div class="col-6 col-md-auto">
                    <a href="<?php bloginfo('url'); ?>/equipe" class="main-btn bg-gold text-white bg-hover-white text-hover-gold"><i class="bi bi-trash"></i> LIMPAR</a>
                </div>
            </form>
            <?php
                if(isset($_GET['keyword'])){
                    $keyword = $_GET['keyword'];
                }else{
                    $keyword = '';
                }
                $args = array(
                    'post_type' => 'equipe',
                    'posts_per_page' => 16,
                    's' => $keyword,
                    'meta_query' => array(
                        'relation' => 'AND',
                        (!empty($_GET['atuacao']) ? array( 'key' => 'atuacoes_relacionadas_%_atuacao_relacionada', 'value' => $_GET['atuacao'], 'compare' => 'LIKE' ) : null ),
                    )
                );
                $query = new WP_query($args);
            ?>
            <div class="spacer-40"></div>
            <?php if($query->have_posts()): ?>
            <div class="row">
                <?php while($query->have_posts()): $query->the_post(); ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="professional-card">
                        <div class="professional-card-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php $photo = get_field('foto'); ?>
                                <?php if($photo): ?>
                                <img class="img-fluid" src="<?php echo $photo['sizes']['Equipe']; ?>" alt="">
                                <?php else: ?>
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/placeholder-equipe.jpg" alt="">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="professional-card-body title-light-black">
                            <h5><?php the_title(); ?></h5>
                            <div class="professional-card-divider"></div>
                            <?php if(get_field('email')): ?>
                            <a href="mailto:<?php echo get_field('email'); ?>" class="professional-card-email"><i class="bi bi-envelope"></i> <?php echo get_field('email'); ?></a>
                            <?php endif; ?>
                            <div class="professional-card-footer justify-content-between">
                                <?php if(get_field('linkedin')): ?>
                                <a href="<?php echo get_field('linkedin'); ?>"><i class="bi bi-linkedin"></i></a>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="pagenavi">
                <?php wp_pagenavi( array('query' => $query) ); ?>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="col-12">
                    <div class="main-text text-gold">
                        <p><b>Desculpe nenhum advogado foi encontrado para os parâmetros buscados.</b></p>
                    </div>
                </div>
            </div>
            <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
        </div>
        <div class="spacer-60"></div>
    </section>
<?php get_footer(); ?>