<?php
$form_message = '';
$form_status = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['iletisim_action'])) {
    $isim = sanitize_text_field($_POST['isim'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $telefon = sanitize_text_field($_POST['telefon'] ?? '');
    $konu = sanitize_text_field($_POST['konu'] ?? '');
    $mesaj = sanitize_textarea_field($_POST['mesaj'] ?? '');

    if (!empty($isim) && !empty($email) && is_email($email) && !empty($mesaj)) {
        $to = 's.akkaya0166@gmail.com';
        $subject = 'İletişim Formu Mesajı: ' . $konu;
        
        $body = "Web sitenizden yeni bir iletişim mesajı aldınız:\n\n";
        $body .= "Ad Soyad: $isim\n";
        $body .= "E-posta: $email\n";
        $body .= "Telefon: $telefon\n";
        $body .= "Konu: $konu\n\n";
        $body .= "Mesaj:\n$mesaj\n";
        
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8', 
            'From: Mis Teknoloji Web <wordpress@' . $_SERVER['SERVER_NAME'] . '>',
            'Reply-To: ' . $isim . ' <' . $email . '>'
        );

        if (wp_mail($to, $subject, $body, $headers)) {
            $form_status = 'success';
            $form_message = 'Mesajınız başarıyla gönderildi. En kısa sürede dönüş yapacağız.';
        } else {
            $form_status = 'error';
            $form_message = 'Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.';
        }
    } else {
        $form_status = 'error';
        $form_message = 'Lütfen zorunlu alanları doldurun.';
    }
}
?>
<?php get_header(); ?>
<main class="iletisim-page">
    <section class="iletisim-hero">
        <div class="iletisim-hero-bg">
            <div class="iletisim-hero-shape-1"></div>
            <div class="iletisim-hero-shape-2"></div>
        </div>
        <div class="mis360-360-container">
            <div class="iletisim-hero-content">
                <div class="iletisim-badge">
                    <i class="fas fa-envelope"></i>
                    <span>İletişim</span>
                </div>
                <h1 class="iletisim-title">Bizimle İletişime Geçin</h1>
                <p class="iletisim-subtitle">Projeleriniz ve dijital dönüşüm ihtiyaçlarınız için size bir mesaj kadar yakınız.</p>
            </div>
        </div>
    </section>

    <section class="iletisim-content-section">
        <div class="mis360-360-container">
            <div class="iletisim-grid">
                <!-- Info Cards -->
                <div class="iletisim-info-sidebar">
                    <div class="iletisim-info-card">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="details">
                            <h3>Adresimiz</h3>
                            <p>Kocasinan, KAYSERİ<br>Türkiye</p>
                        </div>
                    </div>
                    <div class="iletisim-info-card">
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="details">
                            <h3>Telefon</h3>
                            <p><a href="tel:+905467721666">+90 (546) 772 16 66</a></p>
                        </div>
                    </div>
                    <div class="iletisim-info-card">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="details">
                            <h3>E-Posta</h3>
                            <p><a href="mailto:info@misteknoloji360.com.tr">info@misteknoloji360.com.tr</a></p>
                        </div>
                    </div>
                    <div class="iletisim-info-card">
                        <div class="icon"><i class="fas fa-clock"></i></div>
                        <div class="details">
                            <h3>Çalışma Saatleri</h3>
                            <p>Pzt - Pz: 08:00 - 21:00</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="iletisim-form-container">
                    <div class="iletisim-form-header">
                        <h2>Mesaj Gönderin</h2>
                        <p>Aşağıdaki formu doldurarak bize hızlıca ulaşabilirsiniz. Ekibimiz en kısa sürede size dönüş yapacaktır.</p>
                    </div>
                    <form class="iletisim-form" action="" method="POST">
                        <input type="hidden" name="iletisim_action" value="1">
                        <?php if(!empty($form_message)): ?>
                            <div style="padding: 15px; margin-bottom: 20px; border-radius: 8px; color: #fff; background: <?php echo ($form_status == 'success') ? '#10b981' : '#ef4444'; ?>;">
                                <?php echo esc_html($form_message); ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Adınız Soyadınız</label>
                                <input type="text" id="name" name="name" placeholder="Adınız Soyadınız" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon Numaranız</label>
                                <input type="tel" id="phone" name="phone" placeholder="05XX XXX XX XX" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Posta Adresiniz</label>
                            <input type="email" id="email" name="email" placeholder="ornek@sirket.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Konu</label>
                            <select id="subject" name="subject">
                                <option value="Web Tasarım">Web Tasarım</option>
                                <option value="Yazılım Geliştirme">Yazılım Geliştirme</option>
                                <option value="Dijital Pazarlama">Dijital Pazarlama</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Mesajınız</label>
                            <textarea id="message" name="message" rows="5" placeholder="Projenizden veya ihtiyaçlarınızdan bahsedin..." required></textarea>
                        </div>
                        <button type="submit" class="iletisim-submit-btn">
                            <span>Mesajı Gönder</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="iletisim-map-section">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199146.46738368942!2d35.33400585671569!3d38.749503463878784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b1236beeb78d9%3A0xc028da3dc1e27a1c!2sKocasinan%2FKayseri!5e0!3m2!1str!2str!4v1700000000000!5m2!1str!2str" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
</main>
<?php get_footer(); ?>
