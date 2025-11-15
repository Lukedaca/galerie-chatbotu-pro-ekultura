
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI4NGO - Ultra-Modern AI Solutions for Non-Profits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0e27;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated Aurora Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: radial-gradient(circle at 15% 25%, rgba(59, 130, 246, 0.2), transparent 40%),
                        radial-gradient(circle at 85% 75%, rgba(139, 92, 246, 0.2), transparent 40%);
            animation: aurora 20s linear infinite alternate;
        }

        @keyframes aurora {
            0% { transform: rotate(0deg) scale(1.2); }
            100% { transform: rotate(360deg) scale(1.5); }
        }

        /* Enhanced Glassmorphism */
        .glass {
            background: rgba(10, 14, 39, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: gradient-move 8s ease infinite;
        }

        @keyframes gradient-move {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        /* Interactive Card Design */
        .feature-card-enhanced {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .feature-card-enhanced:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.2);
        }
        
        /* Gradient Border on Hover */
        .feature-card-enhanced::before {
            content: '';
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            z-index: -1;
            margin: -2px;
            border-radius: inherit;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .feature-card-enhanced:hover::before {
            opacity: 1;
        }

        /* Shine Effect on Hover */
        .feature-card-enhanced::after {
            content: '';
            position: absolute;
            top: 0;
            left: -150%;
            width: 100%;
            height: 100%;
            transform: skewX(-20deg);
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0) 100%);
            transition: left 0.6s ease;
        }
        
        .feature-card-enhanced:hover::after {
            left: 150%;
        }

        .benefit-item {
            position: relative; padding-left: 2rem;
        }
        .benefit-item::before {
            content: "✓"; position: absolute; left: 0; color: #10b981; font-weight: bold; font-size: 1.2rem;
        }
        
        .tech-tag {
            background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.3);
            padding: 0.35rem 0.85rem; border-radius: 9999px; font-size: 0.8rem;
            color: #93c5fd; transition: all 0.2s ease;
        }
        .tech-tag:hover { background-color: rgba(59, 130, 246, 0.2); color: #fff; }

        /* Glowing Button Effect */
        .glow-button {
            position: relative;
            box-shadow: 0 0 5px #3b82f6, 0 0 10px #3b82f6;
            animation: pulse-glow 3s infinite alternate;
        }
        @keyframes pulse-glow {
            from { box-shadow: 0 0 5px #3b82f6, 0 0 10px #3b82f6; }
            to { box-shadow: 0 0 20px #8b5cf6, 0 0 30px #8b5cf6; }
        }

        /* Section reveal animation */
        body.js-enabled .section-reveal,
        body.js-enabled .feature-card-enhanced,
        body.js-enabled .chatbot-card,
        body.js-enabled .gallery-card {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        body.js-enabled .section-reveal.visible,
        body.js-enabled .feature-card-enhanced.visible,
        body.js-enabled .chatbot-card.visible,
        body.js-enabled .gallery-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Chatbot showcase */
        .chatbot-card {
            position: relative;
            border-radius: 2rem;
            padding: 2.5rem;
            background: linear-gradient(160deg, rgba(59, 130, 246, 0.35), rgba(37, 99, 235, 0.05));
            border: 1px solid rgba(255, 255, 255, 0.08);
            overflow: hidden;
        }
        .chatbot-card::after {
            content: '';
            position: absolute;
            inset: -40% -20% auto auto;
            width: 55%;
            height: 55%;
            background: radial-gradient(circle at center, rgba(255,255,255,0.25) 0%, rgba(255,255,255,0) 70%);
            opacity: 0.35;
            pointer-events: none;
            transform: rotate(25deg);
        }
        .chatbot-card:nth-child(2) {
            background: linear-gradient(160deg, rgba(124, 58, 237, 0.35), rgba(147, 51, 234, 0.05));
        }
        .chatbot-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.45rem 1.1rem;
            border-radius: 9999px;
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .chatbot-image {
            height: 220px;
            border-radius: 1.5rem;
            background: linear-gradient(135deg, rgba(15, 118, 110, 0.35), rgba(14, 165, 233, 0.1));
            border: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 600;
            letter-spacing: 0.05em;
        }
        .chatbot-card:nth-child(2) .chatbot-image {
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.35), rgba(14, 116, 144, 0.15));
        }

        /* Gallery */
        .gallery-track {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            padding-bottom: 0.75rem;
            scrollbar-width: thin;
        }
        .gallery-track::-webkit-scrollbar {
            height: 8px;
        }
        .gallery-track::-webkit-scrollbar-thumb {
            background: linear-gradient(90deg, rgba(59, 130, 246, 0.6), rgba(139, 92, 246, 0.6));
            border-radius: 9999px;
        }
        .gallery-card {
            min-width: 300px;
            border-radius: 1.5rem;
            padding: 2rem;
            background: rgba(15, 23, 42, 0.65);
            border: 1px solid rgba(59, 130, 246, 0.2);
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        /* CTA panel */
        .cta-panel {
            position: relative;
            border-radius: 2rem;
            padding: 3rem;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.5), rgba(139, 92, 246, 0.35));
            overflow: hidden;
        }
        .cta-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top right, rgba(255,255,255,0.25), transparent 55%);
            opacity: 0.8;
        }
        .cta-panel-content {
            position: relative;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .chatbot-card {
                padding: 2rem;
            }
            .chatbot-image {
                height: 180px;
            }
            .gallery-card {
                min-width: 260px;
            }
        }

        /* Iframe Chat Styles */
        #ai4ngo-chat-button {
            position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px;
            background: linear-gradient(135deg, #2563eb, #7c3aed); border-radius: 50%;
            border: none; cursor: pointer; box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            z-index: 9998; display: flex; align-items: center; justify-content: center;
            transition: all 0.3s ease;
        }
        #ai4ngo-chat-button:hover { transform: scale(1.1) rotate(10deg); box-shadow: 0 12px 30px rgba(124, 58, 237, 0.5); }
        #ai4ngo-chat-iframe {
            position: fixed; bottom: 90px; right: 20px; width: 400px; height: 600px;
            border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            display: none; z-index: 9999; overflow: hidden;
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0; transform: translateY(20px); background-color: #0a0e27;
        }
        #ai4ngo-chat-iframe.open { display: block; opacity: 1; transform: translateY(0); }
        @media (max-width: 480px) {
            #ai4ngo-chat-iframe { width: calc(100vw - 40px); height: 70vh; bottom: 80px; }
            #ai4ngo-chat-button { bottom: 15px; right: 15px; }
        }
    </style>
<script type="importmap">
{
  "imports": {
    "react": "https://aistudiocdn.com/react@^19.2.0",
    "react-dom/": "https://aistudiocdn.com/react-dom@^19.2.0/",
    "react/": "https://aistudiocdn.com/react@^19.2.0/",
    "@google/genai": "https://aistudiocdn.com/@google/genai@^1.27.0"
  }
}
</script>
</head>
<body class="text-white">
    <header class="fixed top-0 w-full z-50 glass">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-full h-10 w-10 flex flex-col justify-center items-center font-bold text-xs">
                    <span>AI</span>
                </div>
                <span class="text-lg font-semibold tracking-wider">AI4NGO</span>
            </div>
            <nav class="hidden md:flex items-center space-x-8 text-gray-300">
                <a href="#chatboti" class="hover:text-white transition">Chatboti</a>
                <a href="#galerie" class="hover:text-white transition">Galerie</a>
                <a href="#funkce" class="hover:text-white transition">Funkce</a>
                <a href="#vyhody" class="hover:text-white transition">Výhody</a>
                <a href="#technologie" class="hover:text-white transition">Technologie</a>
                <a href="#kontakt" class="hover:text-white transition">Kontakt</a>
            </nav>
        </div>
    </header>

    <main class="pt-20">
        <section class="min-h-screen flex items-center justify-center px-6 text-center relative">
            <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
                <div class="w-72 h-72 rounded-full bg-blue-500/20 blur-3xl absolute top-10 left-10 animate-pulse"></div>
                <div class="w-64 h-64 rounded-full bg-purple-500/20 blur-3xl absolute bottom-10 right-10 animate-ping"></div>
            </div>
            <div class="max-w-4xl space-y-6 relative z-10" id="hero-content">
                <span class="px-4 py-2 glass rounded-full text-xs tracking-[0.3em] uppercase text-gray-300 inline-block section-reveal">
                    Galerie AI technologií pro neziskový sektor
                </span>
                <h1 class="text-5xl md:text-7xl font-bold gradient-text section-reveal" data-parallax>
                    Chytré, levné AI řešení
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 section-reveal" data-parallax>
                    Inteligentní řešení, která zesílí poslání vaší neziskové organizace.
                </p>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto section-reveal" data-parallax>
                    Automatizujte, analyzujte a komunikujte efektivněji. Zaměřte se na to, co je skutečně důležité.
                </p>
                <div class="flex gap-4 justify-center flex-wrap section-reveal">
                    <a href="#funkce" class="glow-button bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-3 rounded-full hover:opacity-90 transition font-semibold text-white">
                        Prozkoumat Funkce
                    </a>
                    <button id="ai4ngo-open-chat-button" class="glass px-8 py-3 rounded-full hover:bg-white/10 transition font-semibold text-white border border-transparent hover:border-white/20 open-chat-button">
                        Vyzkoušet Demo
                    </button>
                </div>
            </div>
        </section>

        <section id="chatboti" class="py-24 section-reveal">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-16">
                    <div>
                        <h2 class="text-4xl font-bold gradient-text">Specializovaní AI chatboti</h2>
                        <p class="text-gray-300 mt-4 max-w-2xl">Personalizované konverzační asistenty šité na míru vašemu publiku. Rychlá implementace, bezpečné prostředí a brandová zkušenost od prvního dotyku.</p>
                    </div>
                    <div class="flex items-center gap-4 text-sm text-gray-400">
                        <span class="chatbot-badge">Reálné nasazení</span>
                        <span class="chatbot-badge">Voice &amp; Text</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <article class="chatbot-card glass">
                        <header class="space-y-4">
                            <div class="chatbot-badge text-emerald-200/90"><span class="text-emerald-400">AI4ingo</span> Chatbot</div>
                            <h3 class="text-3xl font-semibold">Empatická podpora pro jazykovou inkluzi</h3>
                            <p class="text-gray-300">AI průvodce poskytující okamžitou podporu v českém znakovém jazyce i mluvené češtině. Pomáhá organizacím propojit se s lidmi se specifickými potřebami.</p>
                        </header>
                        <ul class="space-y-3 text-gray-200/80 mt-6">
                            <li class="benefit-item">Multimodální konverzace se záznamem videí</li>
                            <li class="benefit-item">Rozpoznávání záměrů a personalizované odpovědi</li>
                            <li class="benefit-item">Integrace s komunitními kalendáři a databázemi</li>
                        </ul>
                        <div class="chatbot-image mt-8">UI náhled AI4ingo</div>
                        <div class="mt-8 flex flex-wrap gap-3">
                            <button class="glow-button px-6 py-3 rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 text-white font-semibold open-chat-button">Otevřít chat</button>
                            <a href="#kontakt" class="glass px-6 py-3 rounded-full text-sm text-white/80 hover:text-white transition">Domluvit konzultaci</a>
                        </div>
                    </article>
                    <article class="chatbot-card glass">
                        <header class="space-y-4">
                            <div class="chatbot-badge text-indigo-200/90"><span class="text-indigo-400">Div.cz</span> Chatbot</div>
                            <h3 class="text-3xl font-semibold">Kultura a vzdělávání dostupné 24/7</h3>
                            <p class="text-gray-300">Pokročilý asistent pro diváky a návštěvníky kulturních institucí. Doporučuje program, zodpovídá dotazy a doprovází uživatele na cestě k novým zážitkům.</p>
                        </header>
                        <ul class="space-y-3 text-gray-200/80 mt-6">
                            <li class="benefit-item">Personalizované doporučení představení</li>
                            <li class="benefit-item">Rychlé odpovědi na FAQ včetně ticketingu</li>
                            <li class="benefit-item">Vizuální náhledy scén a kulis</li>
                        </ul>
                        <div class="chatbot-image mt-8">UI náhled Div.cz</div>
                        <div class="mt-8 flex flex-wrap gap-3">
                            <button class="glow-button px-6 py-3 rounded-full bg-gradient-to-r from-violet-500 to-sky-500 text-white font-semibold open-chat-button">Otevřít chat</button>
                            <a href="#kontakt" class="glass px-6 py-3 rounded-full text-sm text-white/80 hover:text-white transition">Požádat o demo</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="galerie" class="py-24 section-reveal bg-white/5">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
                    <div>
                        <h2 class="text-4xl font-bold gradient-text">Galerie AI řešení</h2>
                        <p class="text-gray-300 mt-4 max-w-3xl">Prozkoumejte výběr našich nejpokročilejších implementací. Od datových platforem po kreativní studia – vše přizpůsobené potřebám neziskových a kulturních organizací.</p>
                    </div>
                    <a href="#kontakt" class="glass px-5 py-3 rounded-full text-sm text-white/80 hover:text-white transition">Naplánovat workshop</a>
                </div>
                <div class="gallery-track">
                    <article class="gallery-card glass">
                        <div class="text-sm uppercase tracking-[0.3em] text-blue-200/80">Fundraising</div>
                        <h3 class="text-2xl font-semibold">Prediktivní modely dárcovství</h3>
                        <p class="text-gray-300">AI identifikuje klíčové segmenty podporovatelů, nastavuje automatické scénáře a vyhodnocuje dopad kampaní v reálném čase.</p>
                        <div class="flex flex-wrap gap-2 text-xs text-blue-200/80">
                            <span class="tech-tag">Forecasting</span>
                            <span class="tech-tag">CRM Integrace</span>
                            <span class="tech-tag">Power BI</span>
                        </div>
                        <button class="glass px-4 py-2 rounded-full text-sm text-white/80 hover:text-white transition self-start">Zobrazit case study</button>
                    </article>
                    <article class="gallery-card glass">
                        <div class="text-sm uppercase tracking-[0.3em] text-purple-200/80">Komunita</div>
                        <h3 class="text-2xl font-semibold">Multikanálová péče o dobrovolníky</h3>
                        <p class="text-gray-300">Automatizované onboarding kampaně, personalizované doporučení aktivit a průběžná zpětná vazba díky analýze sentimentu.</p>
                        <div class="flex flex-wrap gap-2 text-xs text-purple-200/80">
                            <span class="tech-tag">Sentiment AI</span>
                            <span class="tech-tag">Email Studio</span>
                            <span class="tech-tag">Zapier</span>
                        </div>
                        <button class="glass px-4 py-2 rounded-full text-sm text-white/80 hover:text-white transition self-start">Zjistit více</button>
                    </article>
                    <article class="gallery-card glass">
                        <div class="text-sm uppercase tracking-[0.3em] text-cyan-200/80">Kreativa</div>
                        <h3 class="text-2xl font-semibold">Generativní studio pro kampaně</h3>
                        <p class="text-gray-300">Vizuální a textové šablony, které drží konzistenci značky. Generace videí, voice-overů i copywriting z jednoho panelu.</p>
                        <div class="flex flex-wrap gap-2 text-xs text-cyan-200/80">
                            <span class="tech-tag">RunwayML</span>
                            <span class="tech-tag">Stable Diffusion</span>
                            <span class="tech-tag">Brand Guardrails</span>
                        </div>
                        <button class="glass px-4 py-2 rounded-full text-sm text-white/80 hover:text-white transition self-start">Rezervovat demo</button>
                    </article>
                    <article class="gallery-card glass">
                        <div class="text-sm uppercase tracking-[0.3em] text-amber-200/80">Analytika</div>
                        <h3 class="text-2xl font-semibold">Impact dashboard pro granty</h3>
                        <p class="text-gray-300">Automatizované sběry dat, reporting pro donory a interaktivní přehledy, které zjednodušují rozhodování vedení.</p>
                        <div class="flex flex-wrap gap-2 text-xs text-amber-200/80">
                            <span class="tech-tag">Looker Studio</span>
                            <span class="tech-tag">ETL Pipelines</span>
                            <span class="tech-tag">Data Trust</span>
                        </div>
                        <button class="glass px-4 py-2 rounded-full text-sm text-white/80 hover:text-white transition self-start">Objednat audit</button>
                    </article>
                </div>
            </div>
        </section>

        <section id="funkce" class="py-24 section-reveal">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-16 text-center gradient-text">Nástroje pro Váš Růst</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="feature-card-enhanced glass rounded-3xl p-8">
                        <div class="text-5xl mb-4">🤖</div>
                        <h3 class="text-xl font-bold mb-4">AI Konzultant</h3>
                        <p class="text-gray-300">Strategické poradenství a doporučení AI nástrojů na míru vaší organizaci.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-8">
                        <div class="text-5xl mb-4">📊</div>
                        <h3 class="text-xl font-bold mb-4">Data Analyzer</h3>
                        <p class="text-gray-300">Automatická analýza dat a prediktivní modely pro fundraising a reporting.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-8">
                        <div class="text-5xl mb-4">✍️</div>
                        <h3 class="text-xl font-bold mb-4">Content Assistant</h3>
                        <p class="text-gray-300">Tvorba přesvědčivých textů, grantových žádostí a obsahu pro sociální sítě.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-8">
                        <div class="text-5xl mb-4">🧠</div>
                        <h3 class="text-xl font-bold mb-4">Chytrý Chatbot</h3>
                        <p class="text-gray-300">24/7 podpora pro vaše dárce a klienty s vícejazyčnou schopností.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-8">
                        <div class="text-5xl mb-4">🖼️</div>
                        <h3 class="text-xl font-bold mb-4">Analýza Obrázků</h3>
                        <p class="text-gray-300">Zpracování dokumentů, analýza vizuálního obsahu a rozpoznávání textu.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-8">
                        <div class="text-5xl mb-4">🎤</div>
                        <h3 class="text-xl font-bold mb-4">Hlasové Ovládání</h3>
                        <p class="text-gray-300">Hands-free ovládání a hlasové rozhraní pro maximální dostupnost.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="vyhody" class="py-24 bg-black/20 section-reveal">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-16 text-center gradient-text">Proč Zvolit AI4NGO?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="feature-card-enhanced glass rounded-3xl p-6 text-center">
                        <div class="text-4xl mb-4">⚡</div><h3 class="text-xl font-bold mb-2">Okamžitá Efektivita</h3><p class="text-gray-300">Nasazení během dnů, ne měsíců.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-6 text-center">
                        <div class="text-4xl mb-4">🔒</div><h3 class="text-xl font-bold mb-2">Maximální Bezpečnost</h3><p class="text-gray-300">Vaše data jsou v bezpečí.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-6 text-center">
                        <div class="text-4xl mb-4">📈</div><h3 class="text-xl font-bold mb-2">Neomezená Škála</h3><p class="text-gray-300">Roste s vaší organizací.</p>
                    </div>
                    <div class="feature-card-enhanced glass rounded-3xl p-6 text-center">
                        <div class="text-4xl mb-4">💡</div><h3 class="text-xl font-bold mb-2">Neustálé Inovace</h3><p class="text-gray-300">Přístup k nejnovějším AI.</p>
                    </div>
                </div>
                <div class="mt-16 feature-card-enhanced glass rounded-3xl p-8 max-w-4xl mx-auto">
                    <h3 class="text-2xl font-bold mb-6 text-center">Klíčové Výhody pro Neziskovky</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                        <div class="benefit-item">Snížení administrativní zátěže o 60%</div>
                        <div class="benefit-item">Personalizovaný přístup k podporovatelům</div>
                        <div class="benefit-item">Zefektivnění komunikace s dárci</div>
                        <div class="benefit-item">Úspora času a cenných zdrojů</div>
                        <div class="benefit-item">Automatizace reportování a grantů</div>
                        <div class="benefit-item">Snadná a rychlá implementace</div>
                        <div class="benefit-item">Lepší rozhodování na základě dat</div>
                        <div class="benefit-item">Průběžné vylepšování pomocí AI</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="technologie" class="py-24 section-reveal">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-16 text-center gradient-text">Naše Technologie</h2>
                <div class="feature-card-enhanced glass rounded-3xl p-8 max-w-4xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-bold mb-4">Backend & AI</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="tech-tag">PHP 8.x</span><span class="tech-tag">Anthropic Claude</span>
                                <span class="tech-tag">REST API</span><span class="tech-tag">WebSockets</span>
                                <span class="tech-tag">MySQL</span><span class="tech-tag">Redis</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-4">Frontend & UI/UX</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="tech-tag">JavaScript ES6+</span><span class="tech-tag">Tailwind CSS</span>
                                <span class="tech-tag">Web Speech API</span><span class="tech-tag">Responsive Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="kontakt" class="py-24 section-reveal">
            <div class="container mx-auto px-6">
                <div class="cta-panel glass">
                    <div class="cta-panel-content grid grid-cols-1 lg:grid-cols-[1.2fr_1fr] gap-10 items-center">
                        <div class="space-y-4">
                            <h2 class="text-4xl md:text-5xl font-bold text-white">Spusťte vlastní AI transformaci</h2>
                            <p class="text-gray-200/80 text-lg">Náš tým vám pomůže vybrat správné technologie, připravit datovou infrastrukturu a nastavit dlouhodobou strategii pro neziskový i kulturní sektor.</p>
                        </div>
                        <div class="glass rounded-2xl p-6 space-y-4 text-sm text-white/80">
                            <div class="flex items-start gap-3">
                                <span class="text-emerald-300 text-lg">01</span>
                                <div>
                                    <h3 class="font-semibold text-white">Discovery workshop</h3>
                                    <p class="text-white/70">Audit procesů, definice cílových metrik a rychlých výher.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-sky-300 text-lg">02</span>
                                <div>
                                    <h3 class="font-semibold text-white">Pilotní implementace</h3>
                                    <p class="text-white/70">Nasazení AI chatbotů, analýzy dat nebo generativních studií.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-violet-300 text-lg">03</span>
                                <div>
                                    <h3 class="font-semibold text-white">Škálování a podpora</h3>
                                    <p class="text-white/70">Pravidelné optimalizace, školení a rozvoj vašich týmů.</p>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-3 pt-2">
                                <button class="glow-button px-6 py-3 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold open-chat-button">Spojit se s AI konzultantem</button>
                                <a href="mailto:hello@ai4ngo.org" class="glass px-6 py-3 rounded-full text-white/80 hover:text-white transition">hello@ai4ngo.org</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="glass border-t border-white/10 py-8 mt-24">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-400 mb-2">© 2025 AI4NGO - AI řešení pro neziskové organizace</p>
            <p class="text-gray-500 text-sm">Vytvořeno s vášní pro technologie a společenský dopad.</p>
        </div>
    </footer>

    <button id="ai4ngo-chat-button" aria-label="Otevřít chat">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
    </button>
    <iframe id="ai4ngo-chat-iframe" src="chatbot.php" title="AI4NGO Chatbot"></iframe>

    <script>
        document.body.classList.add('js-enabled');

        const chatButton = document.getElementById('ai4ngo-chat-button');
        const chatIframe = document.getElementById('ai4ngo-chat-iframe');
        const openChatButtons = document.querySelectorAll('.open-chat-button');

        function toggleChat(forceOpen = null) {
            const shouldOpen = forceOpen !== null ? forceOpen : !chatIframe.classList.contains('open');
            chatIframe.classList.toggle('open', shouldOpen);
            chatButton.setAttribute('aria-expanded', shouldOpen);
        }

        chatButton.addEventListener('click', () => toggleChat());
        openChatButtons.forEach((button) => {
            button.addEventListener('click', () => toggleChat(true));
        });

        document.addEventListener('click', (event) => {
            if (chatIframe.classList.contains('open') &&
                !chatIframe.contains(event.target) &&
                !chatButton.contains(event.target) &&
                !event.target.closest('.open-chat-button')) {
                toggleChat(false);
            }
        });

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        document.querySelectorAll('.section-reveal, .feature-card-enhanced, .chatbot-card, .gallery-card').forEach((element) => {
            revealObserver.observe(element);
        });

        const parallaxItems = document.querySelectorAll('[data-parallax]');
        window.addEventListener('mousemove', (event) => {
            const centerX = window.innerWidth / 2;
            const centerY = window.innerHeight / 2;
            const offsetX = (event.clientX - centerX) / centerX;
            const offsetY = (event.clientY - centerY) / centerY;

            parallaxItems.forEach((item, index) => {
                const intensity = (index + 1) * 5;
                item.style.transform = `translate3d(${-(offsetX * intensity)}px, ${-(offsetY * intensity)}px, 0)`;
            });
        });
    </script>
</body>
</html>