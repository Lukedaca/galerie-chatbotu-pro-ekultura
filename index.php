
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
                <a href="#funkce" class="hover:text-white transition">Funkce</a>
                <a href="#vyhody" class="hover:text-white transition">Výhody</a>
                <a href="#technologie" class="hover:text-white transition">Technologie</a>
            </nav>
        </div>
    </header>

    <main class="pt-20">
        <section class="min-h-screen flex items-center justify-center px-6 text-center">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 gradient-text">
                    Chytré, levné AI řešení
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-4">
                    Inteligentní řešení, která zesílí poslání vaší neziskové organizace.
                </p>
                <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
                    Automatizujte, analyzujte a komunikujte efektivněji. Zaměřte se na to, co je skutečně důležité.
                </p>
                <div class="flex gap-4 justify-center flex-wrap">
                    <a href="#funkce" class="glow-button bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-3 rounded-full hover:opacity-90 transition font-semibold text-white">
                        Prozkoumat Funkce
                    </a>
                    <button id="ai4ngo-open-chat-button" class="glass px-8 py-3 rounded-full hover:bg-white/10 transition font-semibold text-white border border-transparent hover:border-white/20">
                        Vyzkoušet Demo
                    </button>
                </div>
            </div>
        </section>

        <section id="funkce" class="py-24">
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
        
        <section id="vyhody" class="py-24 bg-black/20">
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

        <section id="technologie" class="py-24">
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
        const chatButton = document.getElementById('ai4ngo-chat-button');
        const chatIframe = document.getElementById('ai4ngo-chat-iframe');
        const openChatButtonHero = document.getElementById('ai4ngo-open-chat-button');

        function toggleChat() {
            const isOpen = chatIframe.classList.toggle('open');
            chatButton.setAttribute('aria-expanded', isOpen);
        }

        chatButton.addEventListener('click', toggleChat);
        if (openChatButtonHero) {
            openChatButtonHero.addEventListener('click', () => {
                if (!chatIframe.classList.contains('open')) {
                    toggleChat();
                }
            });
        }

        document.addEventListener('click', (event) => {
            if (chatIframe.classList.contains('open') &&
                !chatIframe.contains(event.target) &&
                !chatButton.contains(event.target) &&
                (!openChatButtonHero || !openChatButtonHero.contains(event.target))) {
                toggleChat();
            }
        });
    </script>
</body>
</html>