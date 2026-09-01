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
            <h1>S�k Sorulan Sorular</h1>
            <p>Akl�n�za tak�lan t�m sorular�n detayl� yan�tlar�n� sizin i�in bir araya getirdik. Projeniz i�in en do�ru karar� vermenize yard�mc� olmak istiyoruz.</p>
        </div>

        <!-- YAZILIM VE WEB GEL��T�RME -->
        <h2 class="super-faq-category-title"><i class="fas fa-laptop-code"></i> Web & Yaz�l�m Geli�tirme</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">
                    �zel yaz�l�m ile haz�r paket (WordPress vb.) aras�ndaki fark nedir?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p><strong>Haz�r Paketler (WordPress, Shopify vb.):</strong> Daha h�zl� kurulur, maliyeti daha uygundur ve standart ihtiya�lar� (blog, kurumsal tan�t�m, temel e-ticaret) kusursuz kar��lar. Binlerce eklenti ile desteklenebilir.</p>
                        <p><strong>�zel Yaz�l�m (Custom Development):</strong> Tamamen sizin i� modelinize, i� ak��lar�n�za ve �zel s�re�lerinize g�re s�f�rdan kodlan�r. S�n�r yoktur, performans ve g�venlik tamamen size �zel optimize edilir ancak maliyet ve s�re daha y�ksektir.</p>
                    </div>
                </div>
            </div>
            
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Web sitemi Googleda (SEO) �st s�ralara ��kar�yor musunuz?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Evet, t�m projelerimizi <strong>Temel SEO (On-Page SEO)</strong> standartlar�na uygun olarak kodluyoruz. Bu kapsamda:</p>
                        <ul>
                            <li>Do�ru HTML etiketleme (H1, H2, Title, Meta Description)</li>
                            <li>G�rsel optimizasyonu (WebP format� ve lazy loading)</li>
                            <li>Mobil uyumluluk (Responsive) ve PageSpeed performans ayarlar� standart olarak sunulur.</li>
                        </ul>
                        <p>Geli�mi� ve s�rekli SEO y�netimi (��erik �retimi, backlink vb.) i�in ayr�nt�l� Dijital Pazarlama paketlerimiz bulunmaktad�r.</p>
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
                        <p>Kesinlikle. G�n�m�zde internet trafi�inin %80inden fazlas� mobil cihazlardan gelmektedir. Bu nedenle geli�tirdi�imiz t�m web siteleri ve web uygulamalar� <strong>Mobile-First (�nce Mobil)</strong> yakla��m�yla tasarlan�r.</p>
                        <p>Telefon, tablet ve masa�st� bilgisayarlar�n t�m ekran ��z�n�rl�klerinde kusursuz bir kullan�c� deneyimi (UX) sunmay� garanti ediyoruz.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- S�RE� VE PROJE Y�NET�M� -->
        <h2 class="super-faq-category-title"><i class="fas fa-project-diagram"></i> S�re� & Proje Y�netimi</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Bir web sitesi veya yaz�l�m projesi ne kadar s�rede teslim ediliyor?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Teslimat s�resi tamamen projenin kapsam�na ba�l�d�r:</p>
                        <ul>
                            <li><strong>Kurumsal Web Siteleri:</strong> Ortalama 1 ile 3 hafta.</li>
                            <li><strong>E-Ticaret Siteleri:</strong> �r�n yelpazesi ve entegrasyonlara ba�l� olarak 3 ile 5 hafta.</li>
                            <li><strong>�zel Yaz�l�m Projeleri:</strong> Kapsaml� analiz sonras� belirlenir, genellikle 2 ay ile 6 ay aras�nda de�i�ebilir.</li>
                        </ul>
                        <p>S�zle�me a�amas�nda size kesin bir teslim tarihi (Deadline) sunuyor ve projelendirme takvimine sad�k kal�yoruz.</p>
                    </div>
                </div>
            </div>
            
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Proje yap�m a�amas�nda gidi�at� g�rebilecek miyim?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Evet, s�re� boyunca tamamen �effaf ilerliyoruz. Projeniz i�in size �zel bir <strong>Test (Staging) Ba�lant�s�</strong> olu�turuyoruz.</p>
                        <p>Bu ba�lant� �zerinden tasar�m ve kodlama a�amalar�n� anl�k olarak takip edebilir, revize (d�zeltme) taleplerinizi projeniz hen�z yay�na girmeden bize iletebilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- DESTEK, G�VENL�K VE ALTYAPI -->
        <h2 class="super-faq-category-title"><i class="fas fa-shield-alt"></i> Destek, G�venlik & Altyap�</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Proje teslim edildikten sonra destek veriyor musunuz?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>Evet, bizim i�in proje teslimi bir son de�il, uzun soluklu bir i� ortakl���n�n ba�lang�c�d�r.</p>
                        <p>T�m projelerimizde standart olarak <strong>�cretsiz teknik destek ve hata giderme s�resi (Garanti)</strong> sunuyoruz. Garanti s�resi bittikten sonra ise sunucu bak�m�, yedekleme, siber g�venlik ve i�erik g�ncellemelerini kapsayan <strong>Ayl�k/Y�ll�k Bak�m Anla�malar� (SLA)</strong> ile yan�n�zda olmaya devam ediyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="super-faq-item">
                <div class="super-faq-question">
                    Domain (Alan ad�) ve Hosting hizmetlerini siz mi sa�l�yorsunuz?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>�sterseniz t�m altyap�y� (Domain, y�ksek performansl� NVMe SSD Hosting, SSL Sertifikas�, Kurumsal E-posta) <strong>anahtar teslim</strong> olarak biz sa�l�yoruz.</p>
                        <p>E�er hali haz�rda kendi sunucunuz veya hosting hizmetiniz varsa, sistem gereksinimlerini kar��lamas� durumunda kurulumu do�rudan sizin sunucular�n�za da ger�ekle�tirebiliriz.</p>
                    </div>
                </div>
            </div>
            
            <div class="super-faq-item">
                <div class="super-faq-question">
                    Siber g�venlik ve hacklenmeye kar�� �nlemleriniz nelerdir?
                    <div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="super-faq-answer">
                    <div class="super-faq-answer-inner">
                        <p>G�venlik birinci �nceli�imizdir. Sitelerinizde �u standart g�venlik protokollerini uyguluyoruz:</p>
                        <ul>
                            <li>T�m veri ak���n� �ifreleyen <strong>�cretsiz 256-bit SSL Sertifikas�</strong>.</li>
                            <li>Zararl� yaz�l�m taramalar� ve SQL Injection korumalar� (G�venlik Duvar� - WAF).</li>
                            <li>�zinsiz giri� denemelerine kar�� Brute-Force sald�r� korumas� ve gizli admin paneli yollar�.</li>
                            <li>Felaket kurtarma senaryolar� i�in otomatik <strong>G�nl�k veya Haftal�k Yedekleme (Backup)</strong>.</li>
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