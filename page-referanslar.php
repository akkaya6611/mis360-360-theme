<?php get_header(); ?>
<main class="referanslar-page">
    <!-- Hero Section -->
    <section class="referanslar-hero">
        <div class="referanslar-hero-bg">
            <div class="referanslar-hero-shape-1"></div>
            <div class="referanslar-hero-shape-2"></div>
        </div>
        <div class="mis360-360-container">
            <div class="referanslar-hero-content">
                <div class="referanslar-badge">
                    <i class="fas fa-handshake"></i>
                    <span>Referanslarımız</span>
                </div>
                <h1 class="referanslar-title">Güçlü İş Birlikleri</h1>
                <p class="referanslar-subtitle">Bize güvenen, dijital dönüşüm yolculuklarında birlikte yürüdüğümüz değerli iş ortaklarımız.</p>
            </div>
        </div>
    </section>

    <!-- Logos Section -->
    <section class="referanslar-logos-section">
        <div class="mis360-360-container">
            <div class="referanslar-section-header">
                <h2>Markalar</h2>
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
