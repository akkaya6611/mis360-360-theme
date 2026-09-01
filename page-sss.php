<?php get_header(); ?>
<style>
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
    .super-faq-section { padding: 100px 0; background: var(--faq-bg); color: var(--faq-text); font-family: inherit; }
    .super-faq-container { max-width: 1000px; margin: 0 auto; padding: 0 20px; }
    .super-faq-header { text-align: center; margin-bottom: 60px; }
    .super-faq-header h1 { font-size: 3.5rem; font-weight: 800; background: var(--faq-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 20px; }
    .super-faq-header p { font-size: 1.2rem; color: var(--faq-muted); max-width: 600px; margin: 0 auto; }
    .super-faq-category-title { font-size: 2rem; font-weight: 700; margin: 50px 0 20px 0; padding-bottom: 10px; border-bottom: 2px solid var(--faq-border); display: flex; align-items: center; gap: 15px; }
    .super-faq-category-title i { color: #2563eb; }
    .super-faq-accordion { display: flex; flex-direction: column; gap: 15px; }
    .super-faq-item { background: var(--faq-card-bg); border: 1px solid var(--faq-border); border-radius: 16px; overflow: hidden; transition: all 0.3s ease; box-shadow: var(--faq-shadow); }
    .super-faq-item:hover { border-color: #2563eb; transform: translateY(-2px); }
    .super-faq-question { padding: 25px 30px; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-size: 1.25rem; font-weight: 600; transition: background 0.3s ease; }
    .super-faq-question:hover { background: var(--faq-hover); }
    .super-faq-icon | width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: var(--faq-gradient); color: white; transition: transform 0.4s ease; font-size: 0.9rem; flex-shrink: 0; }
    .super-faq-item.active .super-faq-icon { transform: rotate(180deg); }
    .super-faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease; background: var(--faq-card-bg); }
    .super-faq-answer-inner { padding: 0 30px 30px 30px; color: var(--faq-muted); line-height: 1.8; font-size: 1.1rem; }
    .super-faq-answer-inner p { margin-bottom: 15px; }
    .super-faq-answer-inner ul | margin-left: 20px; margin-bottom: 15px; }
    .super-faq-answer-inner li | margin-bottom: 8px; }
</style>

<div class="super-faq-section">
    <div class="super-faq-container">
        <div class="super-faq-header">
            <h1>Sık Sorulan Sorular</h1>
            <p>Aklınıza takılan tüm soruların detaylı yanıtlarını sizin için bir araya getirdik. Projeniz için en dnğoru kararı vermenize yardımcı olmak istiyoruz.</p>
        </div>
	        <h2 class="super-faq-category-title"><i class="fas fa-laptop-code"></i> Web & Yazılım Geliştirme</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">Özel yazılım ile hazır paket arasındaki fark nedir?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p><strong>Hazır Paketler:</strong> Daha hızlı kurulur, maliyeti uygundur. <strong>Özel Yazılım:</strong> Tamamen iş modelinize göre sıfırdan kodlanır.</p></div></div>
            </div>
            <div class="super-faq-item">
                <div class="super-faq-question">Web sitemi Google'da üst sıralara çıkarıyor musunuz?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p>Evet, tüm projelerimizi <strong>Temel SEO</strong> standartlarına uygun olarak kodluyoruz.</p></div></div>
            </div>
            <div class="super-faq-item">
                <div class="super-faq-question">Siteleriniz mobil uyumlu mu?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p>Kesinlikle. Günümüzde trafiğin %80'i mobilden geldiği için <strong>Mobile-First</strong> yaklaşımıyla tasarım yapq,^oruz.</p></div></div>
            </div>
        </div>

        <h2 class="super-faq-category-title"><i class="fas fa-project-diagram"></i> Süreç & Proje Yönetimi</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">Proje ne kadar sürede teslim ediliyor?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p>Web siteleri 1-3 hafta, E-Ticaret 3-5 hafta, Özel Yazılımlar ise 2-6 ay arası sürmektedir.</p></div></div>
            </div>
            <div class="super-faq-item">
                <div class="super-faq-question">Proje aşamasında gidişatı görebilecek miyim?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p>Evet, size özel bir <strong>Test Bağlantııı</strong> ile tüm süreci anlık takip edebilirsiniz.</p></div></div>
            </div>
        </div>

        <h2 class="super-faq-category-title"><i class="fas fa-shield-alt"></i> Destek, Güvenlik & Altyapı</h2>
        <div class="super-faq-accordion">
            <div class="super-faq-item">
                <div class="super-faq-question">Proje sonrası destek veriyor musunuz?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p>Evetücretsiz teknik desteğin yanı sıra Aylık/Yıllık bakım anlaşmalarımız da mevcuttur.</p></div></div>
            </div>
            <div class="super-faq-item">
                <div class="super-faq-question">Domain ve Hosting sağlıyor musunuz?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p>İsterseniz anahtar teslim biz sağlıyoruz, isterseniz kendi sunucunuzda çalışabiliyoruz.</p></div></div>
            </div>
            <div class="super-faq-item">
                <div class="super-faq-question">Hacklenmeye karşı önlemleriniz nelerdir?<div class="super-faq-icon"><i class="fas fa-chevron-down"></i></div></div>
                <div class="super-faq-answer"><div class="super-faq-answer-inner"><p>256-bit SSL, Güvenlik Duvarı, SQL Injection koruması ve düzenli yedeklemeler ile güvendesiniz.</p></div></div>
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