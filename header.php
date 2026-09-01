<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/webp" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>Mis360-360 &#8211; WordPress Dijital Ajans Teması</title>
<meta name='robots' content='max-image-preview:large' >




<link rel='stylesheet' id='mis360-360-main-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css?ver=1.0.0' media='all'>
<link rel='stylesheet' id='mis360-360-dark-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/dark.css?ver=1.0.0' media="print" onload="this.media='all'">
<noscript><link rel='stylesheet' id='mis360-360-dark-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/dark.css?ver=1.0.0' media='all'>
</noscript>    <?php wp_head(); ?>
</head>
<body>
        <header class="mis360-360-header">
        <div class="mis360-360-header-container">
            <div class="mis360-360-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Mis Teknoloji 360 Logo" class="mis360-360-logo-img">
                </a>
            </div>

            <nav class="mis360-360-nav">
                <ul class="mis360-360-nav-menu"><li class="mis360-360-nav-item"><a class="mis360-360-nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Ana Sayfa</a></li>
<li class="mis360-360-nav-item mis360-360-has-dropdown"><span class="mis360-360-nav-link">Kurumsal<svg class="mis360-360-dropdown-icon" width="10" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2"/></svg></span>
<ul class="mis360-360-submenu">
	<li><a class="mis360-360-nav-link" href="<?php echo esc_url( home_url( '/hakkimizda/' ) ); ?>">Hakkımızda</a></li>
	<li><a class="mis360-360-nav-link" href="<?php echo esc_url( home_url( '/banka/' ) ); ?>">Banka Bilgileri</a></li>
	<li><a class="mis360-360-nav-link" href="<?php echo esc_url( home_url( '/sss/' ) ); ?>">Sık Sorulan Sorular</a></li>
</ul>
</li>
<li class="mis360-360-nav-item"><a class="mis360-360-nav-link" href="<?php echo esc_url( home_url( '/hizmetlerimiz/' ) ); ?>">Hizmetlerimiz</a></li>
<li class="mis360-360-nav-item"><a class="mis360-360-nav-link" href="<?php echo esc_url( home_url( '/projeler/' ) ); ?>">Projeler</a></li>
</ul>            </nav>

            <div class="mis360-360-header-actions">
                                <div class="mis360-360-megamenu-trigger-wrapper">
                    <button class="mis360-360-icon-btn" id="megamenuTriggerBtn" aria-label="Menüyü Aç">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M2 5H18M2 10H18M2 15H18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                    <div class="mis360-360-megamenu-dropdown" id="megamenuPanel">
                        <div class="mis360-360-megamenu-panel-grid">
                                                        <div class="mis360-360-megamenu-panel-section">
                                <div class="mis360-360-megamenu-panel-section-header">
                                    <i class="fas fa-code"></i>
                                    <span class="mis360-360-megamenu-panel-section-title">Web Geliştirme</span>
                                </div>
                                                                <div class="mis360-360-megamenu-panel-links">
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fas fa-building"></i>
                                        <div>
                                            <span class="link-title">Kurumsal Web Sitesi</span>
                                                                                        <span class="link-desc">Profesyonel kurumsal web çözümleri</span>
                                                                                    </div>
                                    </a>
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fas fa-shopping-cart"></i>
                                        <div>
                                            <span class="link-title">E-Ticaret Çözümleri</span>
                                                                                        <span class="link-desc">Online satış platformları</span>
                                                                                    </div>
                                    </a>
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fas fa-cogs"></i>
                                        <div>
                                            <span class="link-title">Özel Yazılım</span>
                                                                                        <span class="link-desc">İhtiyacınıza özel yazılım geliştirme</span>
                                                                                    </div>
                                    </a>
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fas fa-mobile-alt"></i>
                                        <div>
                                            <span class="link-title">Mobil Uygulama</span>
                                                                                        <span class="link-desc">iOS ve Android uygulamaları</span>
                                                                                    </div>
                                    </a>
                                                                    </div>
                                                            </div>
                                                        <div class="mis360-360-megamenu-panel-section">
                                <div class="mis360-360-megamenu-panel-section-header">
                                    <i class="fas fa-chart-line"></i>
                                    <span class="mis360-360-megamenu-panel-section-title">Dijital Pazarlama</span>
                                </div>
                                                                <div class="mis360-360-megamenu-panel-links">
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fas fa-search"></i>
                                        <div>
                                            <span class="link-title">SEO Optimizasyonu</span>
                                                                                        <span class="link-desc">Arama motoru optimizasyonu</span>
                                                                                    </div>
                                    </a>
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fab fa-facebook"></i>
                                        <div>
                                            <span class="link-title">Sosyal Medya Yönetimi</span>
                                                                                        <span class="link-desc">Profesyonel sosyal medya hizmetleri</span>
                                                                                    </div>
                                    </a>
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fab fa-google"></i>
                                        <div>
                                            <span class="link-title">Google Ads</span>
                                                                                        <span class="link-desc">Reklam kampanyası yönetimi</span>
                                                                                    </div>
                                    </a>
                                                                        <a href="<?php echo esc_url( home_url( "/hizmetlerimiz/" ) ); ?>" class="mis360-360-megamenu-panel-link">
                                        <i class="fas fa-chart-bar"></i>
                                        <div>
                                            <span class="link-title">Analytics &amp; Raporlama</span>
                                                                                        <span class="link-desc">Detaylı analiz ve raporlama</span>
                                                                                    </div>
                                    </a>
                                                                    </div>
                                                            </div>
                                                        <div class="mis360-360-megamenu-panel-section mis360-360-megamenu-panel-featured">
                                <div class="mis360-360-megamenu-panel-featured-content">
                                                                        <div class="mis360-360-megamenu-panel-featured-icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                                                                                            <h3>Projenizi Başlatın</h3>
                                                                                                            <p>Hemen teklif alın ve projenizi hayata geçirin. 24 saat içinde size geri dönüş yapıyoruz.</p>
                                                                                                            <a href="<?php echo esc_url( home_url( "/teklif/" ) ); ?>" class="mis360-360-megamenu-panel-cta-btn">
                                        <span>Ücretsiz Teklif Al</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                                                                                            <div class="mis360-360-megamenu-panel-stats">
                                                                                <div class="mis360-360-megamenu-panel-stat">
                                            <div class="stat-value">500+</div>
                                            <div class="stat-label">Proje</div>
                                        </div>
                                                                                <div class="mis360-360-megamenu-panel-stat">
                                            <div class="stat-value">98%</div>
                                            <div class="stat-label">Memnuniyet</div>
                                        </div>
                                                                                <div class="mis360-360-megamenu-panel-stat">
                                            <div class="stat-value">7/24</div>
                                            <div class="stat-label">Destek</div>
                                        </div>
                                                                            </div>
                                                                    </div>
                            </div>
                                                    </div>
                    </div>
                </div>
                                
                                <a href="<?php echo esc_url( home_url( "/teklif/" ) ); ?>" class="mis360-360-text-btn mis360-360-quote-btn" aria-label="Teklif Al">
                    <i class="fas fa-star"></i>
                    <span>Teklif Al</span>
                </a>
                                
                                <a href="<?php echo esc_url( home_url( "/iletisim/" ) ); ?>" class="mis360-360-text-btn mis360-360-quote-btn" aria-label="İletişim">
                    <i class="fas fa-envelope"></i>
                    <span>İletişim</span>
                </a>
                                
                                <a href="<?php echo esc_url( home_url( '/musteri-paneli/' ) ); ?>" class="mis360-360-text-btn mis360-360-musteri-panel-btn" aria-label="Müşteri Paneli">
                    <i class="fas fa-user-circle"></i>
                    <span>Müşteri Paneli</span>
                </a>
                                
                                <button class="mis360-360-icon-btn mis360-360-notification-btn" aria-label="Bildirimler" id="notificationBtn">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M10 2C7.2 2 5 4.2 5 7V11L3 13V14H17V13L15 11V7C15 4.2 12.8 2 10 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 14V15C7 16.7 8.3 18 10 18C11.7 18 13 16.7 13 15V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="mis360-360-notification-badge" id="notificationBadge">3</span>
                </button>
                


                                <button class="mis360-360-icon-btn mis360-360-theme-toggle" aria-label="Tema Değiştir">
                    <svg class="mis360-360-sun-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="10" r="4" stroke="currentColor" stroke-width="2"/>
                        <path d="M10 1V3M10 17V19M19 10H17M3 10H1M16.5 3.5L15 5M5 15L3.5 16.5M16.5 16.5L15 15M5 5L3.5 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <svg class="mis360-360-moon-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" style="display: none;">
                        <path d="M18 10C18 14.4 14.4 18 10 18C6.5 18 3.5 15.5 2.5 12C3.5 13 5 13.5 6.5 13.5C10 13.5 13 10.5 13 7C13 5.5 12.5 4 11.5 2.5C15 3.5 18 6.5 18 10Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </button>
                                <button class="mis360-360-mobile-menu-btn" aria-label="Menü">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                

                                <div class="mis360-360-divider"></div>
                <div class="mis360-360-social-icons">
                                        <a href="https://facebook.com/Mis Teknoloji 360" class="mis360-360-social-icon" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                                        <a href="https://instagram.com/Mis Teknoloji 360" class="mis360-360-social-icon" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                                        <a href="https://linkedin.com/company/Mis Teknoloji 360" class="mis360-360-social-icon" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                                    </div>
                            </div>
        </div>
    </header>

<!-- MOBILE MENU BLOCK -->
<div class="mis360-360-mobile-sidebar" id="mobileSidebar">
        <div class="mis360-360-mobile-sidebar-header">
            <div class="mis360-360-mobile-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Mis Teknoloji 360 Logo" class="mis360-360-mobile-logo-img">
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
                                <a href="<?php echo esc_url( home_url( "/teklif/" ) ); ?>" class="mobile-nav-card">
                    <div class="mobile-nav-card-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="mobile-nav-card-content">
                        <span class="mobile-nav-card-title">Ücretsiz Teklif Al</span>
                                                <p class="mobile-nav-card-desc">Projeniz için özel fiyat teklifi</p>
                                            </div>
                    <i class="fas fa-chevron-right mobile-nav-card-arrow"></i>
                </a>
                                <a href="<?php echo esc_url( home_url( "/iletisim/" ) ); ?>" class="mobile-nav-card">
                    <div class="mobile-nav-card-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="mobile-nav-card-content">
                        <span class="mobile-nav-card-title">7/24 Destek</span>
                                                <p class="mobile-nav-card-desc">Hemen iletişime geçin</p>
                                            </div>
                    <i class="fas fa-chevron-right mobile-nav-card-arrow"></i>
                </a>
                                <a href="<?php echo esc_url( home_url( "/teklif/" ) ); ?>" class="mobile-nav-card">
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
                        <a href="<?php echo esc_url( home_url( "/teklif/" ) ); ?>" class="mis360-360-mobile-action-btn mis360-360-mobile-quote-btn">
                <i class="fas fa-star"></i>
                <span>Teklif Al</span>
            </a>
                        
                        <a href="<?php echo esc_url( home_url( "/iletisim/" ) ); ?>" class="mis360-360-mobile-action-btn mis360-360-mobile-contact-btn">
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
<!-- END MOBILE MENU BLOCK -->

