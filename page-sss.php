<?php get_header(); ?>
<style>
    /* Super Stylish Custom FAQ CSS */
    :root {
        --faq-bg: #ffffff;
        --faq-text: #333333;
        --faq-muted: #666666;
        --faq-border: rgba(0,0,0,0.1);
        --faq-gradient: linear-gradient(135deg, #2563eb, #7c3aed);
        --faq-card-bg: #f8fafc;
        --faq-hover: #f1f5f9;
        --faq-shadow: 0 10px 30px -10px rgba(0,0,0,0.1);
    }
    body.dark-mode, [data-theme="dark"] {
        --faq-bg: #0f172a;
        --faq-text: #f8fafc;
        --faq-muted: #94a3b8;
        --faq-border: rgba(255,255,255,0.1);
        --faq-card-bg: #1e293b;
        --faq-hover: #334155;
        --faq-shadow: 0 10px 30px -10px rgba(0,0,0,0.5);
    }
    
    .super-faq-section {
        padding: 100px 0;
        background: var(--faq-bg);
        color: var(--faq-text);
        font-family: inherit;
    }
    .super-faq-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .super-faq-header {
        text-align: center;
        margin-bottom: 60px;
    }
    .super-faq-header h1 {
        font-size: 3.5rem;
        font-weight: 800;
        background: var(--faq-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
    }
    .super-faq-header p {
        font-size: 1.2rem;
        color: var(--faq-muted);
        max-width: 600px;
        margin: 0 auto;
    }
    
    .super-faq-category-title {
        font-size: 2rem;
        font-weight: 700;
        margin: 50px 0 20px 0;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--faq-border);
        color: var(--faq-text);
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .super-faq-category-title i {
        color: #2563eb;
    }
    
    .super-faq-accordion {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .super-faq-item {
        background: var(--faq-card-bg);
        border: 1px solid var(--faq-border);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: var(--faq-shadow);
    }
    .super-faq-item:hover {
        border-color: #2563eb;
        transform: translateY(-2px);
    }
    
    .super-faq-question {
        padding: 25px 30px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--faq-text);
        transition: background 0.3s ease;
    }
    .super-faq-question:hover {
        background: var(--faq-hover);
    }
    
    .super-faq-icon {
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--faq-gradient);
        color: white;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 0.9rem;
        flex-shrink: 0;
    }
    
    .super-faq-item.active .super-faq-icon {
        transform: rotate(180deg);
    }
    
    .super-faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: var(--faq-card-bg);
    }
    .super-faq-answer-inner {
        padding: 0 30px 30px 30px;
        color: var(--faq-muted);
        line-height: 1.8;
        font-size: 1.1rem;
    }
    .super-faq-answer-inner p {
        margin-bottom: 15px;
    }
    .super-faq-answer-inner p:last-child {
        margin-bottom: 0;
    }
    .super-faq-answer-inner ul {
        margin-left: 20px;
        margin-bottom: 15px;
    }
    .super-faq-answer-inner li {
        margin-bottom: 8px;
    }
</style>

<div class="super-faq-section">
    <div class="super-faq-container">
        <div class="super-faq-header">
            <h1>Sık Sorulan Sorular</h1>
            <p>Aklınıza takılan tüm soruların detaylı yanıtlarını sizin için bir araya getirdik. Projeniz için en doğru kararı vermenize yardımcı olmak istiyoruz.</p>
        </div>

        <!-- YAZILIM VE WEB GELİŞTİRME -->
        <h2 class="super-faq-category-title"><i class="fas fa-laptop-code"></i> Web & Yazılım Geliştirme</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Özel yazılım ile hazır paket (WordPress vb.) arasındaki fark nedir?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p><strong>Hazır Paketler (WordPress, Shopify vb.):</strong> Daha hızlı kurulur, maliyeti daha uygundur ve standart ihtiyaçları (blog, kurumsal tanıtım, temel e-ticaret) kusursuz karşılar. Binlerce eklenti ile desteklenebilir.</p>
                        <p><strong>Özel Yazılım (Custom Development):</strong> Tamamen sizin iş modelinize, iş akışlarınıza ve özel süreçlerinize göre sıfırdan kodlanır. Sınır yoktur, performans ve güvenlik tamamen size özel optimize edilir ancak maliyet ve süre daha yüksektir.</p>
                    </div>
                </div>
            </div>
            
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Web sitemi Google'da (SEO) üst sıralara çıkarıyor musunuz?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Evet, tüm projelerimizi <strong>Temel SEO (On-Page SEO)</strong> standartlarına uygun olarak kodluyoruz. Bu kapsamda:</p>
                        <ul>
                            <li>Doğru HTML etiketleme (H1, H2, Title, Meta Description)</li>
                            <li>Görsel optimizasyonu (WebP formatı ve lazy loading)</li>
                            <li>Mobil uyumluluk (Responsive) ve PageSpeed performans ayarları standart olarak sunulur.</li>
                        </ul>
                        <p>Gelişmiş ve sürekli SEO yönetimi (İçerik üretimi, backlink vb.) için ayrıntılı Dijital Pazarlama paketlerimiz bulunmaktadır.</p>
                    </div>
                </div>
            </div>
            
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Siteleriniz mobil cihazlarla tam uyumlu mu? (Responsive)
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Kesinlikle. Günümüzde internet trafiğinin %80'inden fazlası mobil cihazlardan gelmektedir. Bu nedenle geliştirdiğimiz tüm web siteleri ve web uygulamaları <strong>Mobile-First (Önce Mobil)</strong> yaklaşımıyla tasarlanır.</p>
                        <p>Telefon, tablet ve masaüstü bilgisayarların tüm ekran çözünürlüklerinde kusursuz bir kullanıcı deneyimi (UX) sunmayı garanti ediyoruz.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SÜREÇ VE PROJE YÖNETİMİ -->
        <h2 class="super-faq-category-title"><i class="fas fa-project-diagram"></i> Süreç & Proje Yönetimi</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Bir web sitesi veya yazılım projesi ne kadar sürede teslim ediliyor?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Teslimat süresi tamamen projenin kapsamına bağlıdır:</p>
                        <ul>
                            <li><strong>Kurumsal Web Siteleri:</strong> Ortalama 1 ile 3 hafta.</li>
                            <li><strong>E-Ticaret Siteleri:</strong> Ürün yelpazesi ve entegrasyonlara bağlı olarak 3 ile 5 hafta.</li>
                            <li><strong>Özel Yazılım Projeleri:</strong> Kapsamlı analiz sonrası belirlenir, genellikle 2 ay ile 6 ay arasında değişebilir.</li>
                        </ul>
                        <p>Sözleşme aşamasında size kesin bir teslim tarihi (Deadline) sunuyor ve projelendirme takvimine sadık kalıyoruz.</p>
                    </div>
                </div>
            </div>
            
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Proje yapım aşamasında gidişatı görebilecek miyim?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Evet, süreç boyunca tamamen şeffaf ilerliyoruz. Projeniz için size özel bir <strong>Test (Staging) Bağlantısı</strong> oluşturuyoruz.</p>
                        <p>Bu bağlantı üzerinden tasarım ve kodlama aşamalarını anlık olarak takip edebilir, revize (düzeltme) taleplerinizi projeniz henüz yayına girmeden bize iletebilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- DESTEK, GÜVENLİK VE ALTYAPI -->
        <h2 class="super-faq-category-title"><i class="fas fa-shield-alt"></i> Destek, Güvenlik & Altyapı</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Proje teslim edildikten sonra destek veriyor musunuz?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Evet, bizim için proje teslimi bir son değil, uzun soluklu bir iş ortaklığının başlangıcıdır.</p>
                        <p>Tüm projelerimizde standart olarak <strong>ücretsiz teknik destek ve hata giderme süresi (Garanti)</strong> sunuyoruz. Garanti süresi bittikten sonra ise sunucu bakımı, yedekleme, siber güvenlik ve içerik güncellemelerini kapsayan <strong>Aylık/Yıllık Bakım Anlaşmaları (SLA)</strong> ile yanınızda olmaya devam ediyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="super-faq-item">
                <div class="super-faq-question">
                    Domain (Alan adı) ve Hosting hizmetlerini siz mi sağlıyorsunuz?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>İsterseniz tüm altyapıyı (Domain, yüksek performanslı NVMe SSD Hosting, SSL Sertifikası, Kurumsal E-posta) <strong>anahtar teslim</strong> olarak biz sağlıyoruz.</p>
                        <p>Eğer hali hazırda kendi sunucunuz veya hosting hizmetiniz varsa, sistem gereksinimlerini karşılaması durumunda kurulumu doğrudan sizin sunucularınıza da gerçekleştirebiliriz.</p>
                    </div>
                </div>
            </div>
            
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Siber güvenlik ve hacklenmeye karşı önlemleriniz nelerdir?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Güvenlik birinci önceliğimizdir. Sitelerinizde şu standart güvenlik protokollerini uyguluyoruz:</p>
                        <ul>
                            <li>Tüm veri akışını şifreleyen <strong>Ücretsiz 256-bit SSL Sertifikası</strong>.</li>
                            <li>Zararlı yazılım taramaları ve SQL Injection korumaları (Güvenlik Duvarı - WAF).</li>
                            <li>İzinsiz giriş denemelerine karşı Brute-Force saldırı koruması ve gizli admin paneli yolları.</li>
                            <li>Felaket kurtarma senaryoları için otomatik <strong>Günlük veya Haftalık Yedekleme (Backup)</strong>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const faqItems = document.querySelectorAll(".super-faq-item");
    
    faqItems.forEach(item => {
        const question = item.querySelector(".super-faq-question");
        const answer = item.querySelector(".super-faq-answer");
        
        question.addEventListener("click", () => {
            const isActive = item.classList.contains("active");
            
            // Close all others
            faqItems.forEach(otherItem => {
                otherItem.classList.remove("active");
                otherItem.querySelector(".super-faq-answer").style.maxHeight = null;
            });
            
            if (!isActive) {
                item.classList.add("active");
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });
});
</script>
<?php get_footer(); ?>
