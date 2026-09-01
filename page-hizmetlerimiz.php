<?php get_header(); ?>


    <div class="mis360-360-mobile-sidebar" id="mobileSidebar">
        <div class="mis360-360-mobile-sidebar-header">
            <div class="mis360-360-mobile-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.webp" alt="Mis Teknoloji 360 Logo" class="mis360-360-mobile-logo-img">
                </a>
            </div>
            <button class="mis360-360-mobile-close-btn" id="mobileCloseBtn" aria-label="Menüyü kapat">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                    <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        
        <nav class="mobile-nav" aria-label="Ana menü">
                        <div class="mobile-nav-musteri-panel">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-nav-musteri-panel-btn">
                    <i class="fas fa-user-circle"></i>
                    <span>Müşteri Paneli</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
                        
            <ul class="mobile-nav-list"><li><a class="mobile-nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-expanded="false"><i class="fas fa-home"></i><span class="mobile-nav-text">Ana Sayfa</span></a></li>
<li class="mobile-nav-item-has-submenu"><a class="mobile-nav-link mobile-submenu-toggle" href="javascript:void(0);" aria-expanded="false" onclick="return false;"><i class="fas fa-home"></i><span class="mobile-nav-text">Kurumsal</span><i class="fas fa-chevron-down mobile-submenu-arrow"></i></a>
<ul class="mobile-submenu">
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="mobile-submenu-dot"></span><span>Hakkımızda</span></a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="mobile-submenu-dot"></span><span>Banka Bilgileri</span></a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="mobile-submenu-dot"></span><span>Sık Sorulan Sorular</span></a></li>
</ul>
</li>
<li><a class="mobile-nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-expanded="false"><i class="fas fa-home"></i><span class="mobile-nav-text">Hizmetlerimiz</span></a></li>
<li><a class="mobile-nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-expanded="false"><i class="fas fa-home"></i><span class="mobile-nav-text">Projeler</span></a></li>
</ul>            
                        <div class="mobile-nav-cards">
                                <a href="javascript:void(0);" class="mobile-nav-card">
                    <div class="mobile-nav-card-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="mobile-nav-card-content">
                        <span class="mobile-nav-card-title">Ücretsiz Teklif Al</span>
                                                <p class="mobile-nav-card-desc">Projeniz için özel fiyat teklifi</p>
                                            </div>
                    <i class="fas fa-chevron-right mobile-nav-card-arrow"></i>
                </a>
                                <a href="javascript:void(0);" class="mobile-nav-card">
                    <div class="mobile-nav-card-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="mobile-nav-card-content">
                        <span class="mobile-nav-card-title">7/24 Destek</span>
                                                <p class="mobile-nav-card-desc">Hemen iletişime geçin</p>
                                            </div>
                    <i class="fas fa-chevron-right mobile-nav-card-arrow"></i>
                </a>
                                <a href="javascript:void(0);" class="mobile-nav-card">
                    <div class="mobile-nav-card-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="mobile-nav-card-content">
                        <span class="mobile-nav-card-title">Portföyümüz</span>
                                                <p class="mobile-nav-card-desc">Tamamlanan projelerimizi görün</p>
                                            </div>
                    <i class="fas fa-chevron-right mobile-nav-card-arrow"></i>
                </a>
                            </div>
                        
                        <div class="mobile-nav-social">
                <div class="mobile-nav-social-icons">
                                        <a href="https://facebook.com/Mis Teknoloji 360" class="mobile-nav-social-icon" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                                        <a href="https://instagram.com/Mis Teknoloji 360" class="mobile-nav-social-icon" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                                        <a href="https://linkedin.com/company/Mis Teknoloji 360" class="mobile-nav-social-icon" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                                    </div>
            </div>
                    </nav>
        
                <div class="mis360-360-mobile-actions">
                        <a href="javascript:void(0);" class="mis360-360-mobile-action-btn mis360-360-mobile-quote-btn">
                <i class="fas fa-star"></i>
                <span>Teklif Al</span>
            </a>
                        
                        <a href="javascript:void(0);" class="mis360-360-mobile-action-btn mis360-360-mobile-contact-btn">
                <i class="fas fa-envelope"></i>
                <span>İletişim</span>
            </a>
                        
                        <button class="mis360-360-mobile-action-btn mis360-360-mobile-theme-toggle mis360-360-theme-toggle" aria-label="Tema Değiştir">
                <svg class="mis360-360-sun-icon" width="16" height="16" viewBox="0 0 20 20" fill="none">
                    <circle cx="10" cy="10" r="4" stroke="currentColor" stroke-width="2"/>
                    <path d="M10 1V3M10 17V19M19 10H17M3 10H1M16.5 3.5L15 5M5 15L3.5 16.5M16.5 16.5L15 15M5 5L3.5 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <svg class="mis360-360-moon-icon" width="16" height="16" viewBox="0 0 20 20" fill="none" style="display: none;">
                    <path d="M18 10C18 14.4 14.4 18 10 18C6.5 18 3.5 15.5 2.5 12C3.5 13 5 13.5 6.5 13.5C10 13.5 13 10.5 13 7C13 5.5 12.5 4 11.5 2.5C15 3.5 18 6.5 18 10Z" stroke="currentColor" stroke-width="2"/>
                </svg>
            </button>
                    </div>
            </div>

    <div class="mis360-360-mobile-overlay" id="mobileOverlay"></div>

        <div class="mis360-360-notification-panel" id="notificationPanel">
        <div class="mis360-360-notification-header">
            <h3 class="mis360-360-notification-title">Bildirimler</h3>
            <button class="mis360-360-notification-close" id="notificationClose" aria-label="Kapat">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        <div class="mis360-360-notification-content" id="notificationContent">
                                            <div class="mis360-360-notification-item unread" data-notification-id="notification_0">
                    <div class="mis360-360-notification-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="mis360-360-notification-body">
                        <div class="mis360-360-notification-title-text">Hoş Geldiniz!</div>
                        <div class="mis360-360-notification-text">Mis360-360 temasına hoş geldiniz. Tema ayarlarından bildirimlerinizi yönetebilirsiniz.</div>
                        <div class="mis360-360-notification-time">24 Mart 2026</div>
                    </div>
                </div>
                                <div class="mis360-360-notification-item unread" data-notification-id="notification_1">
                    <div class="mis360-360-notification-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="mis360-360-notification-body">
                        <div class="mis360-360-notification-title-text">Tema Güncellemesi</div>
                        <div class="mis360-360-notification-text">Yeni özellikler ve iyileştirmeler için tema ayarlarını kontrol edin.</div>
                        <div class="mis360-360-notification-time">24 Mart 2026</div>
                    </div>
                </div>
                                <div class="mis360-360-notification-item unread" data-notification-id="notification_2">
                    <div class="mis360-360-notification-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="mis360-360-notification-body">
                        <div class="mis360-360-notification-title-text">Önemli Duyuru</div>
                        <div class="mis360-360-notification-text">Tema ile ilgili önemli bilgiler ve ipuçları için bildirimlerinizi takip edin.</div>
                        <div class="mis360-360-notification-time">24 Mart 2026</div>
                    </div>
                </div>
                                    </div>
                <div class="mis360-360-notification-footer">
            <button class="mis360-360-notification-clear" id="notificationClear">Tümünü Okundu İşaretle</button>
        </div>
            </div>
    <main>
<section class="hizmetler-hero-section">
    <div class="mis360-360-grid-bg"></div>
    <div class="mis360-360-projects-container">
                <nav class="proje-breadcrumb-nav" aria-label="Breadcrumb">
            <ol class="proje-breadcrumb-list">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Ana Sayfa</a></li>
                <li class="active">Hizmetlerimiz</li>
            </ol>
        </nav>
        
        <div class="hizmetler-hero-content">
            <h1 class="hizmetler-hero-title">Hizmetlerimiz</h1>
            <p class="hizmetler-hero-description">
                Dijital dünyada başarılı olmanız için ihtiyacınız olan tüm hizmetleri tek çatı altında sunuyoruz. Profesyonel ekibimizle projelerinizi hayata geçirin.            </p>
            <div class="hizmetler-hero-actions">
                <a href="#servicesGrid" class="hizmetler-hero-btn">
                    <span>Hizmetleri Keşfet</span>
                    <i class="fas fa-arrow-down"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mis360-360-projects-section">
    <div class="mis360-360-projects-container">
        <div class="hizmetler-grid" id="servicesGrid">
                                            <div class="hizmetler-card">
                    <div class="hizmetler-card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="hizmetler-card-title">Web Tasarım Hizmetleri</h3>
                    <p class="hizmetler-card-description">
                        Modern, responsive ve kullanıcı dostu web siteleri tasarlıyoruz. Kurumsal kimliğinize uygun, SEO uyumlu ve yüksek performanslı web çözümleri sunuyoruz.                    </p>
                                        <ul class="hizmetler-card-features">
                                                <li><i class="fas fa-check"></i> Responsive Tasarım</li>
                                                <li><i class="fas fa-check"></i> SEO Optimizasyonu</li>
                                                <li><i class="fas fa-check"></i> Hızlı Yükleme</li>
                                                <li><i class="fas fa-check"></i> Modern UI/UX</li>
                                            </ul>
                                        <div class="hizmetler-card-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-primary">
                            <span>Teklif Al</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-secondary">
                            <span>Detay</span>
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </div>
                </div>
                                <div class="hizmetler-card">
                    <div class="hizmetler-card-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="hizmetler-card-title">Yazılım Geliştirme</h3>
                    <p class="hizmetler-card-description">
                        İhtiyacınıza özel yazılım çözümleri geliştiriyoruz. Web uygulamaları, masaüstü yazılımları ve özel sistemler ile iş süreçlerinizi dijitalleştirin.                    </p>
                                        <ul class="hizmetler-card-features">
                                                <li><i class="fas fa-check"></i> Özel Yazılım Çözümleri</li>
                                                <li><i class="fas fa-check"></i> Web Uygulamaları</li>
                                                <li><i class="fas fa-check"></i> API Geliştirme</li>
                                                <li><i class="fas fa-check"></i> Sistem Entegrasyonu</li>
                                            </ul>
                                        <div class="hizmetler-card-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-primary">
                            <span>Teklif Al</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-secondary">
                            <span>Detay</span>
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </div>
                </div>
                                <div class="hizmetler-card">
                    <div class="hizmetler-card-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <h3 class="hizmetler-card-title">WordPress Çözümleri</h3>
                    <p class="hizmetler-card-description">
                        WordPress tabanlı web siteleri ve e-ticaret platformları geliştiriyoruz. Özel temalar, eklentiler ve tam özelleştirme ile ihtiyacınıza uygun çözümler sunuyoruz.                    </p>
                                        <ul class="hizmetler-card-features">
                                                <li><i class="fas fa-check"></i> Özel Tema Tasarımı</li>
                                                <li><i class="fas fa-check"></i> Eklenti Geliştirme</li>
                                                <li><i class="fas fa-check"></i> WooCommerce Entegrasyonu</li>
                                                <li><i class="fas fa-check"></i> Bakım ve Destek</li>
                                            </ul>
                                        <div class="hizmetler-card-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-primary">
                            <span>Teklif Al</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-secondary">
                            <span>Detay</span>
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </div>
                </div>
                                <div class="hizmetler-card">
                    <div class="hizmetler-card-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="hizmetler-card-title">Grafik Tasarım Hizmetleri</h3>
                    <p class="hizmetler-card-description">
                        Marka kimliğinizi güçlendiren, yaratıcı ve profesyonel grafik tasarım hizmetleri sunuyoruz. Logo, kurumsal kimlik, broşür ve dijital tasarımlar ile markanızı öne çıkarın.                    </p>
                                        <ul class="hizmetler-card-features">
                                                <li><i class="fas fa-check"></i> Logo Tasarımı</li>
                                                <li><i class="fas fa-check"></i> Kurumsal Kimlik</li>
                                                <li><i class="fas fa-check"></i> Broşür ve Katalog</li>
                                                <li><i class="fas fa-check"></i> Dijital Tasarım</li>
                                            </ul>
                                        <div class="hizmetler-card-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-primary">
                            <span>Teklif Al</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-secondary">
                            <span>Detay</span>
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </div>
                </div>
                                <div class="hizmetler-card">
                    <div class="hizmetler-card-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="hizmetler-card-title">Mobil Uygulama Geliştirme</h3>
                    <p class="hizmetler-card-description">
                        iOS ve Android platformları için native ve cross-platform mobil uygulamalar geliştiriyoruz. Kullanıcı dostu arayüzler ve yüksek performanslı çözümler ile mobil deneyiminizi güçlendirin.                    </p>
                                        <ul class="hizmetler-card-features">
                                                <li><i class="fas fa-check"></i> iOS Uygulamaları</li>
                                                <li><i class="fas fa-check"></i> Android Uygulamaları</li>
                                                <li><i class="fas fa-check"></i> Cross-Platform</li>
                                                <li><i class="fas fa-check"></i> App Store Optimizasyonu</li>
                                            </ul>
                                        <div class="hizmetler-card-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-primary">
                            <span>Teklif Al</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-secondary">
                            <span>Detay</span>
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </div>
                </div>
                                <div class="hizmetler-card">
                    <div class="hizmetler-card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="hizmetler-card-title">Dijital Pazarlama Çözümleri</h3>
                    <p class="hizmetler-card-description">
                        Dijital pazarlama stratejileri ile markanızı online dünyada görünür kılın. SEO, sosyal medya yönetimi, Google Ads ve içerik pazarlama ile hedef kitlenize ulaşın.                    </p>
                                        <ul class="hizmetler-card-features">
                                                <li><i class="fas fa-check"></i> SEO Optimizasyonu</li>
                                                <li><i class="fas fa-check"></i> Sosyal Medya Yönetimi</li>
                                                <li><i class="fas fa-check"></i> Google Ads Yönetimi</li>
                                                <li><i class="fas fa-check"></i> İçerik Pazarlama</li>
                                            </ul>
                                        <div class="hizmetler-card-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-primary">
                            <span>Teklif Al</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hizmetler-card-btn hizmetler-card-btn-secondary">
                            <span>Detay</span>
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </div>
                </div>
                                    </div>
    </div>
</section>

</main>
        <div class="mis360-360-floating-buttons">
                <button class="mis360-360-scroll-top" id="scrollTopBtn" aria-label="Yukarı Çık">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M12 19V5M12 5L5 12M12 5L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
                
                <a href="https://wa.me/905551234567" target="_blank" class="mis360-360-whatsapp-btn" aria-label="WhatsApp ile İletişime Geç">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            <span class="mis360-360-whatsapp-text">WhatsApp ile İletişime Geç</span>
        </a>
            </div>
    
    
<?php get_footer(); ?>