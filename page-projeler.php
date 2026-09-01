<?php get_header(); ?>
<main class="projeler-page">
    <section class="projeler-hero-section">
        <div class="mis360-360-grid-bg"></div>
        <div class="mis360-360-projects-container">
            <nav class="proje-breadcrumb-nav" aria-label="Breadcrumb">
                <ol class="proje-breadcrumb-list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Ana Sayfa</a></li>
                    <li class="active">Projelerimiz ve Referanslarımız</li>
                </ol>
            </nav>
            <div class="projeler-hero-content">
                <h1 class="projeler-hero-title">Projelerimiz ve Referanslarımız</h1>
                <p class="projeler-hero-description">
                    Yılların deneyimi ve uzman ekibimizle hayata geçirdiğimiz başarılı projeleri keşfedin. Her proje, müşteri memnuniyetini ve teknolojik mükemmelliği bir araya getiriyor. Bize güvenen değerli markaları inceleyin.
                </p>
                <div class="projeler-hero-actions">
                    <a href="#projectsGrid" class="projeler-hero-btn">
                        <span>Projeleri Keşfet</span>
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="mis360-360-projects-section" id="projectsGrid">
        <div class="mis360-360-projects-container">
            <div class="projeler-grid">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="projeler-card">
                    <div class="projeler-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w1.webp" alt="Kurumsal Portal" loading="lazy">
                        <div class="projeler-card-overlay">
                            <div class="projeler-card-icon"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="projeler-card-content">
                        <div class="projeler-card-badge">Proje</div>
                        <h3 class="projeler-card-title">Kurumsal Portal</h3>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="projeler-card">
                    <div class="projeler-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w2.webp" alt="Dijital Pazarlama Kampanyası" loading="lazy">
                        <div class="projeler-card-overlay">
                            <div class="projeler-card-icon"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="projeler-card-content">
                        <div class="projeler-card-badge">Proje</div>
                        <h3 class="projeler-card-title">Dijital Pazarlama Kampanyası</h3>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="projeler-card">
                    <div class="projeler-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w3.webp" alt="Mobil Uygulama" loading="lazy">
                        <div class="projeler-card-overlay">
                            <div class="projeler-card-icon"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="projeler-card-content">
                        <div class="projeler-card-badge">Popüler</div>
                        <h3 class="projeler-card-title">Mobil Uygulama</h3>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="projeler-card">
                    <div class="projeler-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w4.webp" alt="Kurumsal Web Sitesi" loading="lazy">
                        <div class="projeler-card-overlay">
                            <div class="projeler-card-icon"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="projeler-card-content">
                        <div class="projeler-card-badge">Proje</div>
                        <h3 class="projeler-card-title">Kurumsal Web Sitesi</h3>
                    </div>
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="projeler-card">
                    <div class="projeler-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w5.webp" alt="E-Ticaret Platformu" loading="lazy">
                        <div class="projeler-card-overlay">
                            <div class="projeler-card-icon"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="projeler-card-content">
                        <div class="projeler-card-badge">Başarılı</div>
                        <h3 class="projeler-card-title">E-Ticaret Platformu</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Logos Section -->
    <section class="referanslar-logos-section">
        <div class="mis360-360-container">
            <div class="referanslar-section-header">
                <h2>Markalar & Referanslarımız</h2>
                <p>Farklı sektörlerden lider markalara teknoloji çözümleri üretiyoruz.</p>
            </div>
            <div class="referanslar-grid">
                <?php 
                $refs = array('ref1.webp', 'ref4.webp', 'ref5.webp', 'ref6.webp', 'ref7.webp');
                foreach($refs as $index => $ref): ?>
                <div class="referanslar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $ref; ?>" alt="Referans" loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="referanslar-testimonials">
        <div class="mis360-360-container">
            <div class="referanslar-section-header">
                <h2>Müşterilerimiz Ne Diyor?</h2>
                <p>Başarı hikayelerimizi iş ortaklarımızın ağzından dinleyin.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"E-ticaret sitemizi yenilerken Mis Teknoloji 360'ı seçtiğimiz için çok mutluyuz. Satışlarımız ciddi oranda arttı. Tasarım ve performans açısından mükemmel bir iş çıkardılar."</p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p2.webp" alt="Zeynep Kaya">
                        <div class="author-info">
                            <h4>Zeynep Kaya</h4>
                            <span>Kurucu, E-Ticaret</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"Mobil uygulamamızı geliştirirken ekip bizimle adım adım ilerledi. İletişimleri mükemmel, işleri hızlı ve çok kaliteli. Gerçekten güvenilir bir partner."</p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p3.webp" alt="Mehmet Demir">
                        <div class="author-info">
                            <h4>Mehmet Demir</h4>
                            <span>CTO, MobilTech</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"Kurumsal web sitemiz için tam aradığımız çözümü bulduk. Modern, kullanımı kolay ve SEO uyumlu. Destek ekibi her zaman yanımızda."</p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p4.webp" alt="Ayşe Şahin">
                        <div class="author-info">
                            <h4>Ayşe Şahin</h4>
                            <span>Pazarlama Müdürü</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="referanslar-cta">
        <div class="mis360-360-container">
            <div class="cta-box">
                <h2>Sıradaki Başarı Hikayesi Sizin Olsun</h2>
                <p>Dijital dünyada rakiplerinizin önüne geçmek ve markanızı büyütmek için profesyonel ekibimizle tanışın.</p>
                <a href="<?php echo esc_url( home_url( '/teklif/' ) ); ?>" class="cta-button">
                    <span>Hemen Teklif Alın</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>