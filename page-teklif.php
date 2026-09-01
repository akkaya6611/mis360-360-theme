<?php
$form_message = '';
$form_status = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['teklif_action'])) {
    $isim = sanitize_text_field($_POST['isim'] ?? '');
    $firma = sanitize_text_field($_POST['firma'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $telefon = sanitize_text_field($_POST['telefon'] ?? '');
    $hizmet = sanitize_text_field($_POST['hizmet'] ?? '');
    $butce = sanitize_text_field($_POST['butce'] ?? '');
    $detay = sanitize_textarea_field($_POST['detay'] ?? '');

    if (!empty($isim) && !empty($email) && is_email($email)) {
        $to = 's.akkaya0166@gmail.com';
        $subject = 'Yeni Teklif Talebi: ' . $isim;
        
        $body = "Yeni bir teklif talebi aldınız:\n\n";
        $body .= "Ad Soyad: $isim\n";
        $body .= "Firma: $firma\n";
        $body .= "E-posta: $email\n";
        $body .= "Telefon: $telefon\n";
        $body .= "Hizmet: $hizmet\n";
        $body .= "Bütçe: $butce\n\n";
        $body .= "Proje Detayı:\n$detay\n";
        
        $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $isim . ' <' . $email . '>');

        if (wp_mail($to, $subject, $body, $headers)) {
            $form_status = 'success';
            $form_message = 'Teklif talebiniz başarıyla alındı. Ekibimiz en kısa sürede sizinle iletişime geçecektir.';
        } else {
            $form_status = 'error';
            $form_message = 'Mesajınız gönderilirken bir hata oluştu. Lütfen doğrudan iletişim kanallarımızı kullanın.';
        }
    } else {
        $form_status = 'error';
        $form_message = 'Lütfen zorunlu alanları eksiksiz doldurun.';
    }
}
?>
<?php get_header(); ?>
<main class="teklif-page">
    <!-- Hero Section -->
    <section class="teklif-hero">
        <div class="teklif-hero-bg">
            <div class="teklif-hero-shape-1"></div>
        </div>
        <div class="teklif-hero-content">
            <div class="teklif-badge">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Ücretsiz Teklif Alın</span>
            </div>
            <h1 class="teklif-title">Projeniz İçin Teklif Alın</h1>
            <p class="teklif-subtitle">İhtiyaçlarınızı bize anlatın, size en uygun teknoloji çözümleri ve fiyatlandırma ile 24 saat içinde dönüş yapalım.</p>
        </div>
    </section>

    <!-- Layout -->
    <section class="teklif-layout">
        <!-- Form -->
        <div class="teklif-form-box">
            <form action="" method="POST" class="teklif-form">
                <input type="hidden" name="teklif_action" value="1">
                <?php if(!empty($form_message)): ?>
                    <div style="padding: 15px; margin-bottom: 20px; border-radius: 8px; color: #fff; background: <?php echo ($form_status == 'success') ? '#10b981' : '#ef4444'; ?>;">
                        <?php echo esc_html($form_message); ?>
                    </div>
                <?php endif; ?>
                <h2 class="teklif-section-title"><i class="fas fa-user"></i> İletişim Bilgileriniz</h2>
                <div class="teklif-row">
                    <div class="teklif-group">
                        <label for="isim">Ad Soyad *</label>
                        <input type="text" id="isim" name="isim" placeholder="Adınız ve Soyadınız" required>
                    </div>
                    <div class="teklif-group">
                        <label for="firma">Firma Adı</label>
                        <input type="text" id="firma" name="firma" placeholder="Varsa Şirketinizin Adı">
                    </div>
                </div>
                <div class="teklif-row">
                    <div class="teklif-group">
                        <label for="email">E-posta Adresi *</label>
                        <input type="email" id="email" name="email" placeholder="ornek@sirketiniz.com" required>
                    </div>
                    <div class="teklif-group">
                        <label for="telefon">Telefon Numarası *</label>
                        <input type="tel" id="telefon" name="telefon" placeholder="0555 123 45 67" required>
                    </div>
                </div>

                <h2 class="teklif-section-title" style="margin-top: 40px;"><i class="fas fa-project-diagram"></i> Proje Detayları</h2>
                <div class="teklif-row">
                    <div class="teklif-group">
                        <label for="hizmet">İlgilendiğiniz Hizmet *</label>
                        <select id="hizmet" name="hizmet" required>
                            <option value="" disabled selected>Lütfen bir hizmet seçin</option>
                            <option value="web">Kurumsal Web Tasarım</option>
                            <option value="eticaret">E-Ticaret Çözümleri</option>
                            <option value="yazilim">Özel Yazılım Geliştirme</option>
                            <option value="mobil">Mobil Uygulama (iOS & Android)</option>
                            <option value="dijital">Dijital Pazarlama & SEO</option>
                            <option value="diger">Diğer</option>
                        </select>
                    </div>
                    <div class="teklif-group">
                        <label for="butce">Tahmini Bütçeniz</label>
                        <select id="butce" name="butce">
                            <option value="" disabled selected>Bütçe aralığı belirleyin</option>
                            <option value="1">25.000 TL - 50.000 TL</option>
                            <option value="2">50.000 TL - 100.000 TL</option>
                            <option value="3">100.000 TL - 250.000 TL</option>
                            <option value="4">250.000 TL ve Üzeri</option>
                            <option value="5">Henüz Belirsiz</option>
                        </select>
                    </div>
                </div>
                <div class="teklif-group">
                    <label for="detay">Proje Özeti ve Eklemek İstedikleriniz *</label>
                    <textarea id="detay" name="detay" rows="5" placeholder="Projenizin amacı, hedef kitlesi ve sahip olmasını istediğiniz özellikler hakkında kısaca bilgi verin..." required></textarea>
                </div>

                <button type="submit" class="teklif-submit">
                    <span>Teklif Talebini Gönder</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>

        <!-- Sidebar -->
        <div class="teklif-sidebar">
            <div class="teklif-info-card">
                <h3>Süreç Nasıl İşliyor?</h3>
                <div class="teklif-feature">
                    <div class="icon"><i class="fas fa-clipboard-list"></i></div>
                    <div class="text">
                        <h4>1. Talep İncelemesi</h4>
                        <p>Gönderdiğiniz form ekibimiz tarafından detaylıca incelenir ve projenizin kapsamı belirlenir.</p>
                    </div>
                </div>
                <div class="teklif-feature">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="text">
                        <h4>2. İletişim & Analiz</h4>
                        <p>Sizinle iletişime geçilerek ihtiyaçlarınız daha net anlaşılır ve beklentileriniz dinlenir.</p>
                    </div>
                </div>
                <div class="teklif-feature">
                    <div class="icon"><i class="fas fa-file-contract"></i></div>
                    <div class="text">
                        <h4>3. Özel Teklif</h4>
                        <p>Projenize en uygun, bütçe dostu ve şeffaf bir teklif dosyası hazırlanarak tarafınıza iletilir.</p>
                    </div>
                </div>
            </div>

            <div class="teklif-info-card">
                <h3>Doğrudan İletişim</h3>
                <p style="color: var(--teklif-muted); margin-bottom: 20px;">Form doldurmak istemiyorsanız, bizimle doğrudan iletişime geçebilirsiniz.</p>
                <div class="teklif-feature">
                    <div class="icon" style="background: rgba(37,211,102,0.1); color: #25D366;"><i class="fab fa-whatsapp"></i></div>
                    <div class="text">
                        <h4 style="margin-top: 10px;"><a href="https://wa.me/905467721666" target="_blank" style="text-decoration:none; color:inherit;">+90 (546) 772 16 66</a></h4>
                    </div>
                </div>
                <div class="teklif-feature">
                    <div class="icon" style="background: rgba(234,67,53,0.1); color: #EA4335;"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h4 style="margin-top: 10px;"><a href="mailto:info@misteknoloji360.com.tr" style="text-decoration:none; color:inherit;">info@misteknoloji360.com.tr</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
