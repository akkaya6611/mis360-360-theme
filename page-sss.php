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
    <section class="sss-hero-section">
        <div class="mis360-360-grid-bg"></div>
        <div class="mis360-360-projects-container">
                        <nav class="proje-breadcrumb-nav" aria-label="Breadcrumb">
                <ol class="proje-breadcrumb-list">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Ana Sayfa</a>
                    </li>
                    <li class="active">
                        <span>Sık Sorulan Sorular</span>
                    </li>
                </ol>
            </nav>
            <script type="application/ld+json">
            {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Ana Sayfa",
            "item": "<?php echo esc_url( home_url( '/' ) ); ?>"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Sık Sorulan Sorular",
            "item": "<?php echo esc_url( home_url( '/' ) ); ?>"
        }
    ]
}            </script>
            
            <div class="sss-hero-content">
                <h1 class="sss-hero-title">Sık Sorulan Sorular</h1>
                <p class="sss-hero-description">
                    Merak ettiğiniz soruların yanıtlarını burada bulabilirsiniz. Aradığınızı bulamazsanız, bizimle iletişime geçmekten çekinmeyin.                </p>
                <div class="sss-search-wrapper">
                    <div class="sss-search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" id="faqSearch" placeholder="Sorularınızı arayın..." class="sss-search-input">
                        <button class="sss-search-clear" id="searchClear" style="display: none;">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="sss-categories-section">
        <div class="mis360-360-projects-container">
            <div class="sss-categories-grid" id="faqCategories">
                <button class="sss-category-btn active" data-category="all">
                    <i class="fas fa-th"></i>
                    <span>Tümü</span>
                </button>
                                <button class="sss-category-btn" data-category="hizmetler">
                    <i class="fas fa-code"></i>
                    <span>Hizmetler</span>
                </button>
                                <button class="sss-category-btn" data-category="fiyatlandirma">
                    <i class="fas fa-tag"></i>
                    <span>Fiyatlandırma</span>
                </button>
                                <button class="sss-category-btn" data-category="proje-sureci">
                    <i class="fas fa-project-diagram"></i>
                    <span>Proje Süreci</span>
                </button>
                                <button class="sss-category-btn" data-category="destek">
                    <i class="fas fa-headset"></i>
                    <span>Destek</span>
                </button>
                                <button class="sss-category-btn" data-category="teknik">
                    <i class="fas fa-cogs"></i>
                    <span>Teknik</span>
                </button>
                            </div>
        </div>
    </section>

    <section class="sss-content-section">
        <div class="mis360-360-projects-container">
            <div class="sss-faq-container">
                                <div class="sss-faq-category" data-category="hizmetler">
                    <div class="sss-category-card">
                        <div class="sss-category-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h2 class="sss-category-title">Hizmetler</h2>
                                                <p class="sss-category-description">Web tasarım, yazılım geliştirme ve dijital pazarlama hizmetlerimiz hakkında sorular</p>
                                            </div>
                                        <div class="sss-faq-list">
                                                <div class="sss-faq-item" data-keywords="web tasarım responsive mobil uyumlu">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">01</span>
                                <h3 class="sss-faq-question-text">Web siteleriniz responsive (mobil uyumlu) mu?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, tüm web sitelerimiz tamamen responsive tasarıma sahiptir. Mobil cihazlar, tabletler ve masaüstü bilgisayarlarda mükemmel görünüm ve kullanıcı deneyimi sunar. Modern web standartlarına uygun olarak geliştirilir.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="wordpress özel tema eklenti">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">02</span>
                                <h3 class="sss-faq-question-text">WordPress için özel tema ve eklenti geliştiriyor musunuz?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, WordPress için özel tema ve eklenti geliştirme hizmeti sunuyoruz. İhtiyaçlarınıza özel, güvenli ve performanslı WordPress çözümleri üretiyoruz. Ayrıca mevcut temalarınızı özelleştirme hizmeti de veriyoruz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="e-ticaret online mağaza">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">03</span>
                                <h3 class="sss-faq-question-text">E-ticaret platformu geliştiriyor musunuz?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, WooCommerce, Shopify ve özel e-ticaret çözümleri geliştiriyoruz. Ödeme entegrasyonları, stok yönetimi, kargo entegrasyonları ve kullanıcı dostu arayüzlerle tam özellikli online mağazalar oluşturuyoruz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="mobil uygulama ios android">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">04</span>
                                <h3 class="sss-faq-question-text">Mobil uygulama geliştirme hizmetiniz var mı?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, iOS ve Android platformları için native ve cross-platform mobil uygulama geliştirme hizmeti sunuyoruz. React Native, Flutter ve native teknolojiler kullanarak yüksek performanslı mobil uygulamalar geliştiriyoruz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="seo arama motoru optimizasyon">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">05</span>
                                <h3 class="sss-faq-question-text">SEO hizmeti veriyor musunuz?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, profesyonel SEO hizmeti sunuyoruz. Arama motoru optimizasyonu, teknik SEO, içerik optimizasyonu ve link building çalışmaları yapıyoruz. Web sitenizin Google ve diğer arama motorlarında üst sıralarda yer almasını sağlıyoruz.</p>                                </div>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                <div class="sss-faq-category" data-category="fiyatlandirma">
                    <div class="sss-category-card">
                        <div class="sss-category-icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <h2 class="sss-category-title">Fiyatlandırma</h2>
                                                <p class="sss-category-description">Fiyatlandırma, ödeme seçenekleri ve paketler hakkında bilgiler</p>
                                            </div>
                                        <div class="sss-faq-list">
                                                <div class="sss-faq-item" data-keywords="fiyat maliyet ücret">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">01</span>
                                <h3 class="sss-faq-question-text">Proje fiyatları nasıl belirleniyor?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Proje fiyatları, projenin kapsamı, karmaşıklığı, süresi ve özel gereksinimlerine göre belirlenir. Her proje için özel teklif hazırlıyoruz. Ücretsiz danışmanlık hizmetimizden yararlanarak detaylı bir fiyat teklifi alabilirsiniz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="ödeme taksit peşin">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">02</span>
                                <h3 class="sss-faq-question-text">Ödeme seçenekleri nelerdir?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Ödemeler genellikle proje başlangıcında %50, teslimatta %50 olmak üzere iki taksitte alınır. Büyük projelerde daha esnek ödeme planları sunuyoruz. Nakit, havale/EFT ve kredi kartı ile ödeme yapabilirsiniz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="paket hazır şablon">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">03</span>
                                <h3 class="sss-faq-question-text">Hazır paketleriniz var mı?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, küçük işletmeler için hazır web tasarım paketlerimiz mevcuttur. Ancak çoğu projede müşterilerimizin ihtiyaçlarına özel çözümler geliştirmeyi tercih ediyoruz. Her iki seçenek için de teklif alabilirsiniz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="ekstra ücret ek maliyet">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">04</span>
                                <h3 class="sss-faq-question-text">Proje sırasında ekstra ücret çıkar mı?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Proje kapsamı net bir şekilde belirlenir ve sözleşmede detaylandırılır. Kapsam dışı değişiklikler için ek ücret talep edilir, ancak bu durum önceden size bildirilir ve onayınız alınır. Şeffaf bir fiyatlandırma politikası izliyoruz.</p>                                </div>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                <div class="sss-faq-category" data-category="proje-sureci">
                    <div class="sss-category-card">
                        <div class="sss-category-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h2 class="sss-category-title">Proje Süreci</h2>
                                                <p class="sss-category-description">Proje başlangıcından teslimata kadar süreç hakkında sorular</p>
                                            </div>
                                        <div class="sss-faq-list">
                                                <div class="sss-faq-item" data-keywords="süre ne kadar zaman">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">01</span>
                                <h3 class="sss-faq-question-text">Bir proje ne kadar sürede tamamlanır?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Proje süresi, projenin kapsamına ve karmaşıklığına göre değişir. Basit bir kurumsal web sitesi 2-4 hafta, e-ticaret platformu 4-8 hafta, özel yazılım projeleri ise 8-16 hafta sürebilir. Detaylı süre planlaması teklif aşamasında belirlenir.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="başlangıç adımlar">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">02</span>
                                <h3 class="sss-faq-question-text">Proje nasıl başlar?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Proje, ücretsiz danışmanlık görüşmesi ile başlar. İhtiyaçlarınızı analiz eder, teklif hazırlarız. Onay sonrası sözleşme imzalanır ve proje planı oluşturulur. İlk ödeme alındıktan sonra tasarım ve geliştirme süreci başlar.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="revizyon değişiklik">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">03</span>
                                <h3 class="sss-faq-question-text">Revizyon hakkım var mı?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, her proje kapsamında belirli sayıda revizyon hakkı tanımlanır. Genellikle tasarım aşamasında 2-3 revizyon, geliştirme aşamasında da gerekli düzenlemeler yapılır. Revizyon sayısı sözleşmede belirtilir.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="içerik materyal">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">04</span>
                                <h3 class="sss-faq-question-text">İçerik ve materyalleri kim sağlıyor?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Genellikle metin içerikleri müşteri tarafından sağlanır. Görsel materyaller (fotoğraflar, videolar) müşteri tarafından temin edilebilir veya profesyonel fotoğraf/video çekimi hizmeti ek olarak sunulabilir. İçerik yazımı hizmeti de ayrıca talep edilebilir.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="teslimat canlıya alma">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">05</span>
                                <h3 class="sss-faq-question-text">Proje nasıl teslim edilir?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Proje tamamlandığında, test ortamında incelemeniz için sunulur. Onayınızdan sonra canlıya alınır. Hosting ve domain kurulumu, SSL sertifikası ve gerekli tüm teknik ayarlar yapılır. Teslim sonrası eğitim ve dokümantasyon sağlanır.</p>                                </div>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                <div class="sss-faq-category" data-category="destek">
                    <div class="sss-category-card">
                        <div class="sss-category-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h2 class="sss-category-title">Destek</h2>
                                                <p class="sss-category-description">Teknik destek, bakım ve güncelleme hizmetleri hakkında</p>
                                            </div>
                                        <div class="sss-faq-list">
                                                <div class="sss-faq-item" data-keywords="bakım güncelleme">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">01</span>
                                <h3 class="sss-faq-question-text">Proje sonrası bakım hizmeti var mı?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, proje tesliminden sonra bakım ve destek paketleri sunuyoruz. Güvenlik güncellemeleri, yedekleme, teknik destek ve küçük güncellemeleri içeren aylık/yıllık bakım paketlerimiz mevcuttur. Detaylar için iletişime geçebilirsiniz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="teknik destek yardım">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">02</span>
                                <h3 class="sss-faq-question-text">Teknik destek nasıl alabilirim?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>7/24 teknik destek hizmetimiz mevcuttur. E-posta, telefon, WhatsApp veya destek panelimiz üzerinden bize ulaşabilirsiniz. Acil durumlar için öncelikli destek hattımızı kullanabilirsiniz. Ortalama yanıt süremiz 2-4 saattir.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="eğitim kullanım">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">03</span>
                                <h3 class="sss-faq-question-text">Proje kullanımı için eğitim veriyor musunuz?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, proje tesliminde detaylı kullanım eğitimi veriyoruz. Video kayıtları, yazılı dokümantasyon ve canlı eğitim seansları ile projenizi nasıl yöneteceğinizi öğretiyoruz. Ayrıca online destek panelimizde video eğitimler mevcuttur.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="yedekleme güvenlik">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">04</span>
                                <h3 class="sss-faq-question-text">Yedekleme ve güvenlik hizmeti var mı?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, düzenli yedekleme ve güvenlik izleme hizmeti sunuyoruz. Günlük otomatik yedeklemeler, güvenlik taramaları, SSL sertifikası yönetimi ve güvenlik güncellemeleri bakım paketlerimizde yer alır. Verileriniz güvende tutulur.</p>                                </div>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                <div class="sss-faq-category" data-category="teknik">
                    <div class="sss-category-card">
                        <div class="sss-category-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h2 class="sss-category-title">Teknik</h2>
                                                <p class="sss-category-description">Teknik detaylar, teknolojiler ve altyapı hakkında sorular</p>
                                            </div>
                                        <div class="sss-faq-list">
                                                <div class="sss-faq-item" data-keywords="teknoloji dil framework">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">01</span>
                                <h3 class="sss-faq-question-text">Hangi teknolojileri kullanıyorsunuz?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Modern ve güncel teknolojiler kullanıyoruz. Frontend'de React, Vue.js, Next.js; backend'de Node.js, PHP, Python; veritabanlarında MySQL, PostgreSQL, MongoDB; mobilde React Native, Flutter gibi teknolojiler tercih ediyoruz. Projeye en uygun teknolojiyi seçiyoruz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="hosting sunucu">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">02</span>
                                <h3 class="sss-faq-question-text">Hosting hizmeti sunuyor musunuz?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, güvenilir hosting hizmeti sunuyoruz. SSD diskli, hızlı ve güvenli sunucular kullanıyoruz. Ayrıca mevcut hosting sağlayıcınızla da çalışabiliriz. Hosting paketlerimiz SSL sertifikası, yedekleme ve teknik destek içerir.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="performans hız optimizasyon">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">03</span>
                                <h3 class="sss-faq-question-text">Web siteleriniz hızlı mı?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, performans optimizasyonu bizim önceliğimizdir. Kod optimizasyonu, görsel sıkıştırma, CDN kullanımı, lazy loading ve caching teknikleri ile hızlı yükleme süreleri sağlıyoruz. Google PageSpeed skorlarında 90+ hedefliyoruz.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="güvenlik ssl">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">04</span>
                                <h3 class="sss-faq-question-text">Güvenlik önlemleri nelerdir?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Güvenlik bizim için kritik öneme sahiptir. SSL sertifikası, güvenli kod yazımı, düzenli güvenlik güncellemeleri, güvenlik taramaları, DDoS koruması ve veri şifreleme gibi önlemler alıyoruz. Tüm projelerimiz güvenlik standartlarına uygundur.</p>                                </div>
                            </div>
                        </div>
                                                <div class="sss-faq-item" data-keywords="entegrasyon api">
                            <div class="sss-faq-question">
                                <span class="sss-faq-number">05</span>
                                <h3 class="sss-faq-question-text">Üçüncü parti entegrasyonlar yapabiliyor musunuz?</h3>
                                <i class="fas fa-chevron-down sss-faq-icon"></i>
                            </div>
                            <div class="sss-faq-answer">
                                <div>
                                    <p>Evet, ödeme sistemleri (iyzico, PayTR, Stripe), kargo firmaları, CRM sistemleri, e-posta servisleri, sosyal medya API'leri ve diğer üçüncü parti servislerle entegrasyon yapıyoruz. API geliştirme ve entegrasyon konusunda deneyimliyiz.</p>                                </div>
                            </div>
                        </div>
                                            </div>
                                    </div>
                            </div>
            
                        <script type="application/ld+json">
            {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Web siteleriniz responsive (mobil uyumlu) mu?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, tüm web sitelerimiz tamamen responsive tasarıma sahiptir. Mobil cihazlar, tabletler ve masaüstü bilgisayarlarda mükemmel görünüm ve kullanıcı deneyimi sunar. Modern web standartlarına uygun olarak geliştirilir."
            }
        },
        {
            "@type": "Question",
            "name": "WordPress için özel tema ve eklenti geliştiriyor musunuz?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, WordPress için özel tema ve eklenti geliştirme hizmeti sunuyoruz. İhtiyaçlarınıza özel, güvenli ve performanslı WordPress çözümleri üretiyoruz. Ayrıca mevcut temalarınızı özelleştirme hizmeti de veriyoruz."
            }
        },
        {
            "@type": "Question",
            "name": "E-ticaret platformu geliştiriyor musunuz?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, WooCommerce, Shopify ve özel e-ticaret çözümleri geliştiriyoruz. Ödeme entegrasyonları, stok yönetimi, kargo entegrasyonları ve kullanıcı dostu arayüzlerle tam özellikli online mağazalar oluşturuyoruz."
            }
        },
        {
            "@type": "Question",
            "name": "Mobil uygulama geliştirme hizmetiniz var mı?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, iOS ve Android platformları için native ve cross-platform mobil uygulama geliştirme hizmeti sunuyoruz. React Native, Flutter ve native teknolojiler kullanarak yüksek performanslı mobil uygulamalar geliştiriyoruz."
            }
        },
        {
            "@type": "Question",
            "name": "SEO hizmeti veriyor musunuz?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, profesyonel SEO hizmeti sunuyoruz. Arama motoru optimizasyonu, teknik SEO, içerik optimizasyonu ve link building çalışmaları yapıyoruz. Web sitenizin Google ve diğer arama motorlarında üst sıralarda yer almasını sağlıyoruz."
            }
        },
        {
            "@type": "Question",
            "name": "Proje fiyatları nasıl belirleniyor?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Proje fiyatları, projenin kapsamı, karmaşıklığı, süresi ve özel gereksinimlerine göre belirlenir. Her proje için özel teklif hazırlıyoruz. Ücretsiz danışmanlık hizmetimizden yararlanarak detaylı bir fiyat teklifi alabilirsiniz."
            }
        },
        {
            "@type": "Question",
            "name": "Ödeme seçenekleri nelerdir?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ödemeler genellikle proje başlangıcında %50, teslimatta %50 olmak üzere iki taksitte alınır. Büyük projelerde daha esnek ödeme planları sunuyoruz. Nakit, havale/EFT ve kredi kartı ile ödeme yapabilirsiniz."
            }
        },
        {
            "@type": "Question",
            "name": "Hazır paketleriniz var mı?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, küçük işletmeler için hazır web tasarım paketlerimiz mevcuttur. Ancak çoğu projede müşterilerimizin ihtiyaçlarına özel çözümler geliştirmeyi tercih ediyoruz. Her iki seçenek için de teklif alabilirsiniz."
            }
        },
        {
            "@type": "Question",
            "name": "Proje sırasında ekstra ücret çıkar mı?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Proje kapsamı net bir şekilde belirlenir ve sözleşmede detaylandırılır. Kapsam dışı değişiklikler için ek ücret talep edilir, ancak bu durum önceden size bildirilir ve onayınız alınır. Şeffaf bir fiyatlandırma politikası izliyoruz."
            }
        },
        {
            "@type": "Question",
            "name": "Bir proje ne kadar sürede tamamlanır?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Proje süresi, projenin kapsamına ve karmaşıklığına göre değişir. Basit bir kurumsal web sitesi 2-4 hafta, e-ticaret platformu 4-8 hafta, özel yazılım projeleri ise 8-16 hafta sürebilir. Detaylı süre planlaması teklif aşamasında belirlenir."
            }
        },
        {
            "@type": "Question",
            "name": "Proje nasıl başlar?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Proje, ücretsiz danışmanlık görüşmesi ile başlar. İhtiyaçlarınızı analiz eder, teklif hazırlarız. Onay sonrası sözleşme imzalanır ve proje planı oluşturulur. İlk ödeme alındıktan sonra tasarım ve geliştirme süreci başlar."
            }
        },
        {
            "@type": "Question",
            "name": "Revizyon hakkım var mı?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, her proje kapsamında belirli sayıda revizyon hakkı tanımlanır. Genellikle tasarım aşamasında 2-3 revizyon, geliştirme aşamasında da gerekli düzenlemeler yapılır. Revizyon sayısı sözleşmede belirtilir."
            }
        },
        {
            "@type": "Question",
            "name": "İçerik ve materyalleri kim sağlıyor?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Genellikle metin içerikleri müşteri tarafından sağlanır. Görsel materyaller (fotoğraflar, videolar) müşteri tarafından temin edilebilir veya profesyonel fotoğraf/video çekimi hizmeti ek olarak sunulabilir. İçerik yazımı hizmeti de ayrıca talep edilebilir."
            }
        },
        {
            "@type": "Question",
            "name": "Proje nasıl teslim edilir?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Proje tamamlandığında, test ortamında incelemeniz için sunulur. Onayınızdan sonra canlıya alınır. Hosting ve domain kurulumu, SSL sertifikası ve gerekli tüm teknik ayarlar yapılır. Teslim sonrası eğitim ve dokümantasyon sağlanır."
            }
        },
        {
            "@type": "Question",
            "name": "Proje sonrası bakım hizmeti var mı?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, proje tesliminden sonra bakım ve destek paketleri sunuyoruz. Güvenlik güncellemeleri, yedekleme, teknik destek ve küçük güncellemeleri içeren aylık/yıllık bakım paketlerimiz mevcuttur. Detaylar için iletişime geçebilirsiniz."
            }
        },
        {
            "@type": "Question",
            "name": "Teknik destek nasıl alabilirim?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "7/24 teknik destek hizmetimiz mevcuttur. E-posta, telefon, WhatsApp veya destek panelimiz üzerinden bize ulaşabilirsiniz. Acil durumlar için öncelikli destek hattımızı kullanabilirsiniz. Ortalama yanıt süremiz 2-4 saattir."
            }
        },
        {
            "@type": "Question",
            "name": "Proje kullanımı için eğitim veriyor musunuz?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, proje tesliminde detaylı kullanım eğitimi veriyoruz. Video kayıtları, yazılı dokümantasyon ve canlı eğitim seansları ile projenizi nasıl yöneteceğinizi öğretiyoruz. Ayrıca online destek panelimizde video eğitimler mevcuttur."
            }
        },
        {
            "@type": "Question",
            "name": "Yedekleme ve güvenlik hizmeti var mı?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, düzenli yedekleme ve güvenlik izleme hizmeti sunuyoruz. Günlük otomatik yedeklemeler, güvenlik taramaları, SSL sertifikası yönetimi ve güvenlik güncellemeleri bakım paketlerimizde yer alır. Verileriniz güvende tutulur."
            }
        },
        {
            "@type": "Question",
            "name": "Hangi teknolojileri kullanıyorsunuz?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Modern ve güncel teknolojiler kullanıyoruz. Frontend'de React, Vue.js, Next.js; backend'de Node.js, PHP, Python; veritabanlarında MySQL, PostgreSQL, MongoDB; mobilde React Native, Flutter gibi teknolojiler tercih ediyoruz. Projeye en uygun teknolojiyi seçiyoruz."
            }
        },
        {
            "@type": "Question",
            "name": "Hosting hizmeti sunuyor musunuz?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, güvenilir hosting hizmeti sunuyoruz. SSD diskli, hızlı ve güvenli sunucular kullanıyoruz. Ayrıca mevcut hosting sağlayıcınızla da çalışabiliriz. Hosting paketlerimiz SSL sertifikası, yedekleme ve teknik destek içerir."
            }
        },
        {
            "@type": "Question",
            "name": "Web siteleriniz hızlı mı?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, performans optimizasyonu bizim önceliğimizdir. Kod optimizasyonu, görsel sıkıştırma, CDN kullanımı, lazy loading ve caching teknikleri ile hızlı yükleme süreleri sağlıyoruz. Google PageSpeed skorlarında 90+ hedefliyoruz."
            }
        },
        {
            "@type": "Question",
            "name": "Güvenlik önlemleri nelerdir?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Güvenlik bizim için kritik öneme sahiptir. SSL sertifikası, güvenli kod yazımı, düzenli güvenlik güncellemeleri, güvenlik taramaları, DDoS koruması ve veri şifreleme gibi önlemler alıyoruz. Tüm projelerimiz güvenlik standartlarına uygundur."
            }
        },
        {
            "@type": "Question",
            "name": "Üçüncü parti entegrasyonlar yapabiliyor musunuz?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, ödeme sistemleri (iyzico, PayTR, Stripe), kargo firmaları, CRM sistemleri, e-posta servisleri, sosyal medya API'leri ve diğer üçüncü parti servislerle entegrasyon yapıyoruz. API geliştirme ve entegrasyon konusunda deneyimliyiz."
            }
        }
    ]
}            </script>
            
            <div class="sss-no-results" id="noResults" style="display: none;">
                <div class="sss-no-results-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="sss-no-results-title">Sonuç bulunamadı</h3>
                <p class="sss-no-results-text">Aradığınız kriterlere uygun soru bulunamadı. Lütfen farklı kelimeler deneyin veya bizimle iletişime geçin.</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sss-no-results-btn">
                    <span>İletişime Geç</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
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