<?php get_header(); the_post(); ?>
    <div class="dynamicSpacer"></div>
    <section id="professional-hero" class="bg-light-black">
        <div class="spacer-60"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <div class="professional-hero-img">
                        <?php $photo = get_field('foto'); ?>
                        <?php if($photo): ?>
                        <img class="img-fluid" src="<?php echo $photo['sizes']['Equipe']; ?>" alt="">
                        <?php else: ?>
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/placeholder-equipe.jpg" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="professional-hero-content title-white">
                        <a href="javascript: history.back(-1);" class="main-btn bg-gold text-white bg-hover-white text-hover-gold">VOLTAR</a>
                        <div class="spacer-20"></div>
                        <h1><?php the_title(); ?></h1>
                        <div class="professional-hero-contacts">
                            <?php if(get_field('telefone')): ?>
                            <?php $cleanTel = cleanTel(get_field('telefone')); ?>
                            <a href="tel:<?php echo $cleanTel; ?>" class="contact-link"><i class="bi bi-telephone text-gold"></i> <?php echo get_field('telefone'); ?></a>
                            <?php endif; ?>
                            <?php if(get_field('email')): ?>
                            <a href="mailto:<?php echo get_field('email'); ?>" class="contact-link"><i class="bi bi-envelope text-gold"></i> <?php echo get_field('email'); ?></a>
                            <?php endif; ?>
                            <div class="d-flex text-white">
                                <?php if(get_field('linkedin')): ?>
                                <a href="<?php echo get_field('linkedin'); ?>" class="contact-link me-4"><i class="bi bi-linkedin text-gold"></i></a>
                                <?php endif; ?>
                                <?php if(get_field('oab')): ?>
                                <p>OAB: <?php echo get_field('oab'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php /*
                        <div class="professional-hero-divider"></div>
                        <div class="professional-hero-tags">
                            <span class="professional-tag">ÁREA DE ATUAÇÃO</span>
                            <span class="professional-tag">ÁREA DE ATUAÇÃO</span>
                            <span class="professional-tag">ÁREA DE ATUAÇÃO</span>
                        </div>
                        */ ?>
                    </div>
                </div>
            </div>
            <div class="spacer-60"></div>
        </div>
    </section>
    <?php if(get_field('curriculo')): ?>
    <section id="about-us-content">
        <div class="spacer-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content main-text">
                        <?php echo get_field('curriculo'); ?>
                    </div>
                </div>
            </div>
            <div class="spacer-60"></div>
        </div>
    </section>
    <?php else: ?>
    <div class="bg-gold divider-no-cv"></div>
    <?php endif; ?>
    <?php /*
    <section id="publications">
        <div class="spacer-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="publications-title title-gold">
                        <h2>Publicações</h2>
                    </div>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="pub-card">
                        <div class="pub-card-img">
                            <span class="pub-tag">ÁREA DE ATUAÇÃO</span>
                            <img src="<?php bloginfo('template_url'); ?>/img/placeholder-publicacoes.jpg" alt="">
                        </div>
                        <div class="pub-card-body title-light-black text-light-black main-text">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <a href="#">Ler mais <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="pub-card">
                        <div class="pub-card-img">
                            <span class="pub-tag">ÁREA DE ATUAÇÃO</span>
                            <img src="<?php bloginfo('template_url'); ?>/img/placeholder-publicacoes.jpg" alt="">
                        </div>
                        <div class="pub-card-body title-light-black text-light-black main-text">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <a href="#">Ler mais <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="pub-card">
                        <div class="pub-card-img">
                            <span class="pub-tag">ÁREA DE ATUAÇÃO</span>
                            <img src="<?php bloginfo('template_url'); ?>/img/placeholder-publicacoes.jpg" alt="">
                        </div>
                        <div class="pub-card-body title-light-black text-light-black main-text">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <a href="#">Ler mais <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="pub-card">
                        <div class="pub-card-img">
                            <span class="pub-tag">ÁREA DE ATUAÇÃO</span>
                            <img src="<?php bloginfo('template_url'); ?>/img/placeholder-publicacoes.jpg" alt="">
                        </div>
                        <div class="pub-card-body title-light-black text-light-black main-text">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <a href="#">Ler mais <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-40"></div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <a href="#" class="main-btn bg-gold text-white bg-hover-light-black text-hover-gold">VER TODAS AS PUBLICAÇÕES</a>
                </div>
            </div>
            <div class="spacer-60"></div>
        </div>
    </section>
    */ ?>
<?php get_footer(); ?>