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
<section class="banka-hero-section">
        <div class="mis360-360-grid-bg"></div>
        <div class="mis360-360-projects-container">
                        <nav class="proje-breadcrumb-nav" aria-label="Breadcrumb">
                <ol class="proje-breadcrumb-list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Ana Sayfa</a></li>
                    <li class="active">Banka Bilgileri</li>
                </ol>
            </nav>
            
            <div class="banka-hero-content">
                <h1 class="banka-hero-title">Banka Bilgileri</h1>
                <p class="banka-hero-description">
                    Projeleriniz için ödeme yapmak üzere kullanabileceğiniz banka hesap bilgilerimiz. Ödeme sonrası dekontu bize iletmeyi unutmayın.                </p>
            </div>
        </div>
    </section>

        <section class="banka-accounts-section">
        <div class="mis360-360-projects-container">
            <div class="banka-main-grid">
                                <div class="banka-accounts-column">
                    <div class="banka-accounts-list">
                                                <div class="banka-account-card">
                            <div class="banka-logo-wrapper">
                                <div class="banka-logo-text">AKBANK</div>
                            </div>
                            <div class="banka-card-content">
                                <div class="banka-company-name banka-copyable" data-copy="Dijital Çözümler Teknoloji A.Ş.">
                                    <span>Dijital Çözümler Teknoloji A.Ş.</span>
                                    <button class="banka-copy-btn" title="Kopyala">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>
                                <div class="banka-info-row">
                                    <span class="banka-info-label">IBAN:</span>
                                    <span class="banka-info-value banka-copyable" data-copy="TR47 0004 6001 2345 6789 0123 45">
                                        <span>TR47 0004 6001 2345 6789 0123 45</span>
                                        <button class="banka-copy-btn" title="Kopyala">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </span>
                                </div>
                                                                <div class="banka-info-row">
                                    <span class="banka-info-label">HESAP NO:</span>
                                    <span class="banka-info-value">
                                        <span>567890123</span>
                                    </span>
                                </div>
                                                                                                <div class="banka-info-row">
                                    <span class="banka-info-label">ŞUBE:</span>
                                    <span class="banka-info-value">
                                        <span>1247</span>
                                    </span>
                                </div>
                                                            </div>
                        </div>
                                                <div class="banka-account-card">
                            <div class="banka-logo-wrapper">
                                <div class="banka-logo-text">GARANTİ</div>
                            </div>
                            <div class="banka-card-content">
                                <div class="banka-company-name banka-copyable" data-copy="Yazılım Geliştirme Hizmetleri Ltd.">
                                    <span>Yazılım Geliştirme Hizmetleri Ltd.</span>
                                    <button class="banka-copy-btn" title="Kopyala">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>
                                <div class="banka-info-row">
                                    <span class="banka-info-label">IBAN:</span>
                                    <span class="banka-info-value banka-copyable" data-copy="TR33 0006 2009 8765 4321 0987 65">
                                        <span>TR33 0006 2009 8765 4321 0987 65</span>
                                        <button class="banka-copy-btn" title="Kopyala">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </span>
                                </div>
                                                                <div class="banka-info-row">
                                    <span class="banka-info-label">HESAP NO:</span>
                                    <span class="banka-info-value">
                                        <span>987654321</span>
                                    </span>
                                </div>
                                                                                                <div class="banka-info-row">
                                    <span class="banka-info-label">ŞUBE:</span>
                                    <span class="banka-info-value">
                                        <span>892</span>
                                    </span>
                                </div>
                                                            </div>
                        </div>
                                                <div class="banka-account-card">
                            <div class="banka-logo-wrapper">
                                <div class="banka-logo-text">T. İŞ BANKASI</div>
                            </div>
                            <div class="banka-card-content">
                                <div class="banka-company-name banka-copyable" data-copy="Web Tasarım ve Dijital Ajans A.Ş.">
                                    <span>Web Tasarım ve Dijital Ajans A.Ş.</span>
                                    <button class="banka-copy-btn" title="Kopyala">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>
                                <div class="banka-info-row">
                                    <span class="banka-info-label">IBAN:</span>
                                    <span class="banka-info-value banka-copyable" data-copy="TR12 0006 4000 1122 3344 5566 77">
                                        <span>TR12 0006 4000 1122 3344 5566 77</span>
                                        <button class="banka-copy-btn" title="Kopyala">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </span>
                                </div>
                                                                <div class="banka-info-row">
                                    <span class="banka-info-label">HESAP NO:</span>
                                    <span class="banka-info-value">
                                        <span>112233445</span>
                                    </span>
                                </div>
                                                                                                <div class="banka-info-row">
                                    <span class="banka-info-label">ŞUBE:</span>
                                    <span class="banka-info-value">
                                        <span>2156</span>
                                    </span>
                                </div>
                                                            </div>
                        </div>
                                            </div>
                </div>
                
                                <div class="banka-payment-column">
                    <div class="banka-payment-header">
                        <h2 class="banka-payment-title">Kabul Ettiğimiz Ödeme Yöntemleri</h2>
                    </div>
                    <div class="banka-payment-content">
                        <div class="banka-payment-cards">
                                                        <div class="banka-payment-card">
                                <div class="banka-payment-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <div class="banka-payment-content-wrapper">
                                    <h3 class="banka-payment-card-title">Banka Havalesi / EFT</h3>
                                                                        <p class="banka-payment-card-description">
                                        Yukarıdaki banka hesaplarımıza havale veya EFT ile ödeme yapabilirsiniz. Ödeme sonrası dekontu bize iletmeniz gerekmektedir.                                    </p>
                                                                                                            <ul class="banka-payment-features">
                                                                                <li><i class="fas fa-check"></i> Anında işlem</li>
                                                                                <li><i class="fas fa-check"></i> Komisyon ücretsiz</li>
                                                                                <li><i class="fas fa-check"></i> Güvenli ödeme</li>
                                                                            </ul>
                                                                    </div>
                            </div>
                                                        <div class="banka-payment-card">
                                <div class="banka-payment-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="banka-payment-content-wrapper">
                                    <h3 class="banka-payment-card-title">Mobil Ödeme</h3>
                                                                        <p class="banka-payment-card-description">
                                        Mobil bankacılık uygulamaları üzerinden kolayca ödeme yapabilirsiniz. IBAN bilgilerini kopyalayarak hızlıca işlem gerçekleştirebilirsiniz.                                    </p>
                                                                                                            <ul class="banka-payment-features">
                                                                                <li><i class="fas fa-check"></i> Hızlı işlem</li>
                                                                                <li><i class="fas fa-check"></i> 7/24 erişim</li>
                                                                                <li><i class="fas fa-check"></i> Kolay kullanım</li>
                                                                            </ul>
                                                                    </div>
                            </div>
                                                        <div class="banka-payment-card">
                                <div class="banka-payment-icon">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <div class="banka-payment-content-wrapper">
                                    <h3 class="banka-payment-card-title">Kredi Kartı</h3>
                                                                        <p class="banka-payment-card-description">
                                        Online ödeme sistemimiz üzerinden kredi kartı ile güvenli ödeme yapabilirsiniz. Tüm kartlar kabul edilmektedir.                                    </p>
                                                                                                            <ul class="banka-payment-features">
                                                                                <li><i class="fas fa-check"></i> Taksit imkanı</li>
                                                                                <li><i class="fas fa-check"></i> SSL güvenli</li>
                                                                                <li><i class="fas fa-check"></i> Anında onay</li>
                                                                            </ul>
                                                                    </div>
                            </div>
                                                    </div>
                    </div>
                </div>
                            </div>
        </div>
    </section>
    
        <section class="banka-notes-section">
        <div class="mis360-360-projects-container">
            <div class="banka-notes-grid">
                                <div class="banka-note-card banka-note-warning">
                    <div class="banka-note-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3 class="banka-note-title">Önemli Uyarılar</h3>
                    <ul class="banka-note-list">
                                                <li>Ödeme yapmadan önce mutlaka faturalandırma bilgilerinizi kontrol edin.</li>
                                                <li>Ödeme sonrası dekontu e-posta ile göndermeniz gerekmektedir.</li>
                                                <li>IBAN bilgilerini doğru kopyaladığınızdan emin olun.</li>
                                                <li>Ödeme açıklamasına proje numarası veya referans kodunu ekleyin.</li>
                                            </ul>
                </div>
                
                                <div class="banka-note-card banka-note-info">
                    <div class="banka-note-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <h3 class="banka-note-title">Ödeme Sonrası</h3>
                    <ul class="banka-note-list">
                                                <li>Ödeme dekontunuzu <strong>info@Mis Teknoloji 360.com</strong> adresine gönderin.</li>
                                                <li>Dekontu gönderdikten sonra 24 saat içinde onay alırsınız.</li>
                                                <li>Ödeme onayı sonrası proje süreci başlar.</li>
                                                <li>Herhangi bir sorunuz için bizimle iletişime geçebilirsiniz.</li>
                                            </ul>
                </div>
                
                                <div class="banka-note-card banka-note-success">
                    <div class="banka-note-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="banka-note-title">Güvenlik</h3>
                    <ul class="banka-note-list">
                                                <li>Tüm ödemeler güvenli banka sistemleri üzerinden gerçekleşir.</li>
                                                <li>Hesap bilgilerimiz resmi ve günceldir.</li>
                                                <li>Şüpheli durumlarda mutlaka bizimle iletişime geçin.</li>
                                                <li>Asla üçüncü kişilere ödeme yapmayın.</li>
                                            </ul>
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