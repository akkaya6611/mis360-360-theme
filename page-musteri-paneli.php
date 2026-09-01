<?php get_header(); ?>
<main class="musteri-paneli-page">
    <section class="mp-hero">
        <div class="mis360-360-grid-bg"></div>
        <div class="mp-hero-content">
            <h1>Müşteri Paneli</h1>
            <p>Projelerinizi takip edin, destek biletleri oluşturun ve faturalarınızı görüntüleyin.</p>
        </div>
    </section>

    <section class="mp-content-section">
        <div class="mis360-360-container">
            <?php if ( ! is_user_logged_in() ) : ?>
                <div class="mp-login-box">
                    <h2>Giriş Yap</h2>
                    <?php 
                    $args = array(
                        'echo'           => true,
                        'remember'       => true,
                        'value_remember' => true,
                        'form_id'        => 'loginform',
                        'id_username'    => 'user_login',
                        'id_password'    => 'user_pass',
                        'id_remember'    => 'rememberme',
                        'id_submit'      => 'wp-submit',
                        'label_username' => __( 'E-Posta veya Kullanıcı Adı' ),
                        'label_password' => __( 'Şifre' ),
                        'label_remember' => __( 'Beni Hatırla' ),
                        'label_log_in'   => __( 'Giriş Yap' ),
                        'value_username' => '',
                    );
                    wp_login_form( $args ); 
                    ?>
                    <div class="mp-login-footer">
                        <p>Henüz hesabınız yok mu? <a href="<?php echo esc_url( home_url( '/teklif/' ) ); ?>">Projeleriniz için teklif alın.</a></p>
                    </div>
                </div>
            <?php else : 
                $current_user = wp_get_current_user();
            ?>
                <div class="mp-dashboard">
                    <div class="mp-sidebar">
                        <div class="mp-user-info">
                            <?php echo get_avatar( $current_user->ID, 80 ); ?>
                            <h3><?php echo esc_html( $current_user->display_name ); ?></h3>
                            <span>Müşteri</span>
                        </div>
                        <ul class="mp-nav">
                            <li class="active"><a href="#"><i class="fas fa-home"></i> Özet</a></li>
                            <li><a href="#"><i class="fas fa-project-diagram"></i> Projelerim</a></li>
                            <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> Faturalar</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Destek Talepleri</a></li>
                            <li><a href="<?php echo wp_logout_url( home_url( '/musteri-paneli/' ) ); ?>" class="mp-logout"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
                        </ul>
                    </div>
                    <div class="mp-main-content">
                        <h2>Hoş Geldiniz, <?php echo esc_html( $current_user->display_name ); ?>!</h2>
                        <div class="mp-stats">
                            <div class="mp-stat-card">
                                <div class="icon"><i class="fas fa-spinner"></i></div>
                                <div>
                                    <h4>Aktif Projeler</h4>
                                    <p>1 Adet</p>
                                </div>
                            </div>
                            <div class="mp-stat-card">
                                <div class="icon"><i class="fas fa-file-invoice"></i></div>
                                <div>
                                    <h4>Ödenmemiş Fatura</h4>
                                    <p>0 TL</p>
                                </div>
                            </div>
                            <div class="mp-stat-card">
                                <div class="icon"><i class="fas fa-ticket-alt"></i></div>
                                <div>
                                    <h4>Açık Destek Talebi</h4>
                                    <p>0 Adet</p>
                                </div>
                            </div>
                        </div>
                        <div class="mp-recent-activity">
                            <h3>Son Aktiviteler</h3>
                            <div class="mp-activity-item">
                                <div class="icon"><i class="fas fa-check-circle"></i></div>
                                <div class="content">
                                    <h4>Hesap Kurulumu Tamamlandı</h4>
                                    <p>Müşteri paneli hesabınız başarıyla aktifleştirildi.</p>
                                    <span>Şimdi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
