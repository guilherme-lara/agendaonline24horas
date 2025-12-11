<?php
/* 
Template Name: Landing Page SaaS
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>AgendeOnline24Horas — Agendamentos Inteligentes</title>
  <meta name="description" content="AgendeOnline24Horas — agendador online 24/7 com lembretes automáticos, pagamento integrado e painel para gerenciar sua barbearia." />

  <!-- Tailwind (CDN for prototype) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

  <!-- Structured Data: product -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "AgendeOnline24Horas",
    "description": "Agendador online para barbearias baseado em Bookly. Subdomínio personalizado, configuração completa e lembretes automáticos.",
    "provider": {
      "@type": "Organization",
      "name": "AgendeOnline24Horas"
    }
  }
  </script>

  <style>
    /* Small custom utilities */
    .glass { background: rgba(255,255,255,0.06); backdrop-filter: blur(6px); }
    @keyframes floaty { 0% { transform: translateY(0px); } 50% { transform: translateY(-8px);} 100% { transform: translateY(0px);} }
    .floaty { animation: floaty 6s ease-in-out infinite; }
    :focus { outline: none; box-shadow: 0 0 0 4px rgba(59,130,246,0.18); border-radius: 8px; }
    .toggle-bg { background: linear-gradient(90deg,#e6f6ff,#eef2ff); }
    @media (max-width:640px) { .hero-grid { grid-template-columns: 1fr; } }
  </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

  <!-- NAVBAR -->
  <header class="fixed w-full z-50">
    <div class="backdrop-blur-md bg-white/80 border-b border-white/10">
      <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
        <a href="#" class="flex items-center gap-3" aria-label="Ir para o início">
<img src="logo.png" alt="AgendeOnline24Horas" class="h-10 w-auto" />
        </a>

        <!-- Desktop links -->
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-700" aria-label="Navegação principal">
          <a href="#beneficios" class="hover:text-sky-600 transition">Benefícios</a>
          <a href="#como-funciona" class="hover:text-sky-600 transition">Como funciona</a>
          <a href="#planos" class="hover:text-sky-600 transition">Planos</a>
          <a href="#depoimentos" class="hover:text-sky-600 transition">Depoimentos</a>
          <a href="#faq" class="hover:text-sky-600 transition">FAQ</a>
        </nav>

        <div class="flex items-center gap-3">
          <a href="#lead" class="hidden md:inline-block text-sm bg-sky-600 text-white px-4 py-2 rounded-full shadow hover:bg-sky-700 transition">Teste Grátis</a>

          <!-- LOGAR button (anchor to system login) -->
          <a href="/login" class="text-sm font-semibold px-4 py-2 rounded-full border border-slate-200 bg-white hover:shadow-md transition">Logar</a>

          <!-- Mobile menu toggle -->
          <button id="btnMenu" aria-label="Abrir menu" class="md:hidden ml-2 p-2 rounded-md hover:bg-slate-100">
            <i data-lucide="menu" class="w-6 h-6"></i>
          </button>
        </div>
      </div>

      <!-- Mobile menu -->
      <div id="mobileMenu" class="md:hidden hidden border-t border-white/10 bg-white/95" aria-hidden="true">
        <div class="px-6 py-4 flex flex-col gap-3">
          <a href="#beneficios" class="py-2 rounded-md hover:bg-slate-100">Benefícios</a>
          <a href="#como-funciona" class="py-2 rounded-md hover:bg-slate-100">Como funciona</a>
          <a href="#planos" class="py-2 rounded-md hover:bg-slate-100">Planos</a>
          <a href="#depoimentos" class="py-2 rounded-md hover:bg-slate-100">Depoimentos</a>
          <a href="#faq" class="py-2 rounded-md hover:bg-slate-100">FAQ</a>
          <div class="pt-4 border-t border-white/10">
            <a href="#lead" class="block text-center bg-sky-600 text-white px-4 py-2 rounded-full mb-3">Teste Grátis</a>
            <a href="/login" class="block text-center border px-4 py-2 rounded-full">Logar</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="pt-24">

    <!-- HERO -->
    <section class="relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-6 py-20 grid hero-grid grid-cols-2 gap-12 items-center">
        <!-- Left: copy -->
        <div class="max-w-xl">
          <p class="inline-flex items-center gap-2 text-sm font-medium bg-clip-text text-transparent bg-gradient-to-r from-sky-500 to-indigo-500 px-3 py-1 rounded-full glass shadow-sm">
            <i data-lucide="zap" class="w-4 h-4"></i> Automatize e venda mais
          </p>

          <h1 class="mt-6 text-4xl sm:text-5xl font-extrabold leading-tight text-slate-900">
            Agendador Online para Barbearias — pronto e funcionando em minutos
          </h1>

          <p class="mt-4 text-lg text-slate-600">
            Receba um <strong>subdomínio exclusivo</strong> (ex: <em>sua-barbearia.agendeonline24horas.com.br</em>), página com o widget
            Bookly e configuração completa feita por nossa equipe.
          </p>

          <div class="mt-8 flex flex-wrap gap-4">
            <a href="#planos" class="inline-flex items-center gap-3 bg-sky-600 text-white px-6 py-3 rounded-full shadow-lg hover:scale-105 transition" aria-label="Começar agora">
              <i data-lucide="rocket" class="w-5 h-5"></i> Começar agora
            </a>

            <a href="#lead" class="inline-flex items-center gap-3 px-5 py-3 rounded-full border border-slate-200 bg-white hover:shadow-md transition" aria-label="Testar 7 dias grátis">
              <i data-lucide="gift" class="w-5 h-5 text-slate-700"></i> Testar 7 dias grátis
            </a>
          </div>

          <!-- Trust logos -->
          <div class="mt-8 flex items-center gap-6 flex-wrap">
            <span class="text-xs text-slate-500">Confiado por</span>
            <div class="flex items-center gap-4">
              <!-- placeholder logos (substitua por imagens reais) -->
              <div class="h-8 w-24 flex items-center justify-center bg-white rounded-md shadow-sm text-xs text-slate-500">BarberX</div>
              <div class="h-8 w-24 flex items-center justify-center bg-white rounded-md shadow-sm text-xs text-slate-500">StudioM</div>
              <div class="h-8 w-24 flex items-center justify-center bg-white rounded-md shadow-sm text-xs text-slate-500">Clinica+</div>
            </div>
          </div>
        </div>

        <!-- Right: Illustration / cards -->
        <div class="relative">
          <div class="absolute -right-8 -top-8 w-[420px] rounded-2xl bg-gradient-to-br from-indigo-50 to-white p-6 shadow-2xl transform rotate-2 floaty hidden lg:block">
            <!-- Mock dashboard card -->
            <div class="flex items-center justify-between mb-4">
              <div>
                <h4 class="text-slate-800 font-bold">Agenda — Hoje</h4>
                <p class="text-xs text-slate-500">10:00 — 18:00</p>
              </div>
              <div class="text-sm text-slate-500">Status</div>
            </div>

            <div class="space-y-3">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="h-10 w-10 rounded-md bg-sky-100 flex items-center justify-center text-sky-700">
                    <i data-lucide="scissors" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <div class="text-sm font-semibold">Corte - Lucas</div>
                    <div class="text-xs text-slate-500">10:30 — Confirmado</div>
                  </div>
                </div>
                <div class="text-sm text-slate-600">R$ 50</div>
              </div>

              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="h-10 w-10 rounded-md bg-rose-100 flex items-center justify-center text-rose-700">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <div class="text-sm font-semibold">Spa - Marina</div>
                    <div class="text-xs text-slate-500">12:00 — Lembrete enviado</div>
                  </div>
                </div>
                <div class="text-sm text-slate-600">R$ 120</div>
              </div>

              <div class="mt-2 text-center text-xs text-slate-500">Veja mais no painel</div>
            </div>
          </div>

          <!-- Hero subtle illustration for small screens -->
          <div class="bg-white rounded-2xl p-8 shadow-lg lg:hidden">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=800&auto=format&fit=crop&crop=faces" alt="Dashboard" class="w-full h-48 object-cover rounded-md" />
          </div>
        </div>
      </div>
    </section>

    <!-- BENEFÍCIOS (FEATURES) -->
    <section id="beneficios" class="max-w-7xl mx-auto px-6 py-16">
      <h2 class="text-3xl font-bold text-slate-900 text-center">Recursos projetados para barbearias</h2>
      <p class="mt-3 text-center text-slate-600 max-w-2xl mx-auto">O que está incluído quando você contrata o agendador baseado em Bookly.</p>

      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <article class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <div class="p-3 rounded-lg bg-sky-50 text-sky-600"><i data-lucide="calendar" class="w-6 h-6"></i></div>
            <div>
              <h3 class="font-semibold">Página de agendamento (Bookly)</h3>
              <p class="text-sm text-slate-500">Shortcode Bookly em página dedicada no subdomínio — pronta para agendar.</p>
            </div>
          </div>
        </article>

        <article class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <div class="p-3 rounded-lg bg-emerald-50 text-emerald-600"><i data-lucide="message-square" class="w-6 h-6"></i></div>
            <div>
              <h3 class="font-semibold">Lembretes automáticos</h3>
              <p class="text-sm text-slate-500">Email e — conforme plano — WhatsApp/SMS para reduzir faltas.</p>
            </div>
          </div>
        </article>

        <article class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <div class="p-3 rounded-lg bg-violet-50 text-violet-600"><i data-lucide="credit-card" class="w-6 h-6"></i></div>
            <div>
              <h3 class="font-semibold">Pagamentos e depósitos</h3>
              <p class="text-sm text-slate-500">Integração de pagamentos para cobrança antecipada ou depósitos (opcional).</p>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- COMO FUNCIONA -->
    <section id="como-funciona" class="bg-gradient-to-b from-white to-slate-50 py-16">
      <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center">Como funciona</h2>
        <p class="text-center mt-2 text-slate-600 max-w-2xl mx-auto">Nós fazemos a configuração — você só compartilha o link.</p>

        <div class="mt-10 grid md:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded-2xl shadow text-center">
            <div class="flex items-center justify-center mb-4">
              <div class="p-3 rounded-full bg-sky-50 text-sky-600"><i data-lucide="globe" class="w-6 h-6"></i></div>
            </div>
            <h4 class="font-semibold">1. Subdomínio exclusivo</h4>
            <p class="text-sm text-slate-500 mt-2">Ex: <em>sua-barbearia.agendeonline24horas.com.br</em>.</p>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow text-center">
            <div class="flex items-center justify-center mb-4">
              <div class="p-3 rounded-full bg-emerald-50 text-emerald-600"><i data-lucide="settings" class="w-6 h-6"></i></div>
            </div>
            <h4 class="font-semibold">2. Configuramos Bookly</h4>
            <p class="text-sm text-slate-500 mt-2">Serviços, barbeiros, horários, lembretes e opções de pagamento.</p>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow text-center">
            <div class="flex items-center justify-center mb-4">
              <div class="p-3 rounded-full bg-amber-50 text-amber-600"><i data-lucide="calendar-check" class="w-6 h-6"></i></div>
            </div>
            <h4 class="font-semibold">3. Comece a receber agendamentos</h4>
            <p class="text-sm text-slate-500 mt-2">Compartilhe o link, coloque no Instagram ou integre ao seu site.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- PRICING / PLANOS -->
    <section id="planos" class="max-w-7xl mx-auto px-6 py-16">
      <div class="flex items-center justify-between gap-6">
        <div>
          <h2 class="text-3xl font-bold">Planos simples, sem surpresas</h2>
          <p class="text-slate-600 mt-1">Comece com 7 dias grátis. Mude de plano quando quiser.</p>
        </div>

        <!-- Billing toggle -->
        <div class="ml-auto flex items-center gap-3 text-sm">
          <span class="text-slate-500">Mensal</span>
          <button id="toggleBilling" aria-pressed="false" class="relative inline-flex items-center h-6 w-12 rounded-full toggle-bg p-0.5">
            <span id="toggleDot" class="bg-white w-5 h-5 rounded-full shadow transform transition"></span>
          </button>
          <span class="text-slate-500">Anual <span class="text-xs text-slate-400"> (2 meses grátis)</span></span>
        </div>
      </div>

      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <!-- Basic -->
        <div class="bg-white p-6 rounded-2xl shadow border">
          <h3 class="font-semibold">Básico</h3>
          <p class="mt-3 text-slate-500">Ideal para uma cadeira</p>
          <div class="mt-6">
            <div class="text-3xl font-extrabold text-slate-900" data-price-month="29" data-price-year="290">R$ 29<span class="text-base font-medium">/mês</span></div>
            <ul class="mt-4 text-sm space-y-2 text-slate-600">
              <li>✔ Subdomínio exclusivo</li>
              <li>✔ Página com shortcode Bookly</li>
              <li>✔ 1 barbeiro</li>
              <li>✔ Lembretes por email</li>
            </ul>
            <a href="#lead" class="mt-6 inline-block w-full text-center bg-white text-sky-700 border border-sky-700 px-4 py-3 rounded-full font-semibold hover:bg-sky-50 transition">Assinar</a>
          </div>
        </div>

        <!-- Professional (highlight) -->
        <div class="relative bg-gradient-to-br from-sky-600 to-indigo-600 text-white p-6 rounded-2xl shadow-2xl scale-102 transform">
          <div class="absolute -top-4 left-4 bg-white/10 px-3 py-1 rounded-full text-xs">Mais contratado</div>
          <h3 class="font-semibold">Profissional</h3>
          <p class="mt-3 opacity-90">Pequenas barbearias</p>
          <div class="mt-6">
            <div class="text-3xl font-extrabold">R$ <span data-price-month="59" data-price-year="590">59</span><span class="text-base font-medium">/mês</span></div>
            <ul class="mt-4 text-sm space-y-2">
              <li>✔ Até 5 barbeiros</li>
              <li>✔ Lembretes por WhatsApp (via integração)</li>
              <li>✔ Personalização de cores & logo</li>
              <li>✔ Integração com pagamentos</li>
              <li>✔ Suporte prioritário</li>
            </ul>
            <a href="#lead" class="mt-6 inline-block w-full text-center bg-white text-sky-700 px-4 py-3 rounded-full font-semibold hover:opacity-95 transition">Assinar</a>
          </div>
        </div>

        <!-- Enterprise -->
        <div class="bg-white p-6 rounded-2xl shadow border">
          <h3 class="font-semibold">Empresarial</h3>
          <p class="mt-3 text-slate-500">Clínicas e redes</p>
          <div class="mt-6">
            <div class="text-3xl font-extrabold text-slate-900" data-price-month="99" data-price-year="990">R$ 99<span class="text-base font-medium">/mês</span></div>
            <ul class="mt-4 text-sm space-y-2 text-slate-600">
              <li>✔ Barbeiros ilimitados</li>
              <li>✔ Treinamento e consultoria</li>
              <li>✔ Relatórios avançados</li>
              <li>✔ Integrações personalizadas</li>
            </ul>
            <a href="#lead" class="mt-6 inline-block w-full text-center bg-sky-600 text-white px-4 py-3 rounded-full font-semibold hover:bg-sky-700 transition">Assinar</a>
          </div>
        </div>
      </div>
    </section>

    <!-- DEPOIMENTOS -->
    <section id="depoimentos" class="max-w-6xl mx-auto px-6 py-16">
      <h2 class="text-3xl font-bold text-center">O que nossos clientes dizem</h2>

      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <figure class="bg-white p-6 rounded-2xl shadow">
          <blockquote class="text-slate-700 italic">“Triplicamos agendamentos em 60 dias. O suporte configurou tudo e hoje a agenda roda sozinha.”</blockquote>
          <figcaption class="mt-4 text-sm font-semibold text-slate-800">— Rodrigo, Barbearia Prime</figcaption>
        </figure>

        <figure class="bg-white p-6 rounded-2xl shadow">
          <blockquote class="text-slate-700 italic">“Cobrança antecipada e menos faltas — integração com pagamentos funciona bem.”</blockquote>
          <figcaption class="mt-4 text-sm font-semibold text-slate-800">— Camila, Estúdio Beleza</figcaption>
        </figure>

        <figure class="bg-white p-6 rounded-2xl shadow">
          <blockquote class="text-slate-700 italic">“Fácil de usar e com uma página limpa — meus clientes elogiam.”</blockquote>
          <figcaption class="mt-4 text-sm font-semibold text-slate-800">— Henrique, Clínica Saúde+</figcaption>
        </figure>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="bg-white/50 py-16">
      <div class="max-w-4xl mx-auto px-6">
        <h3 class="text-2xl font-bold text-center">Perguntas frequentes</h3>
        <div class="mt-6 space-y-4">
          <details class="p-4 bg-white rounded-xl shadow">
            <summary class="font-semibold cursor-pointer">Preciso de cartão para o teste gratuito?</summary>
            <p class="mt-2 text-sm text-slate-600">Não. Teste por 7 dias sem cartão. Você decide depois.</p>
          </details>

          <details class="p-4 bg-white rounded-xl shadow">
            <summary class="font-semibold cursor-pointer">Como funciona o subdomínio?</summary>
            <p class="mt-2 text-sm text-slate-600">Criamos um subdomínio no nosso domínio (ex: sua-barbearia.agendeonline24horas.com.br) e publicamos a página com o shortcode Bookly.</p>
          </details>

          <details class="p-4 bg-white rounded-xl shadow">
            <summary class="font-semibold cursor-pointer">Posso alterar horários e serviços?</summary>
            <p class="mt-2 text-sm text-slate-600">Sim — alteramos para você conforme o plano. Em planos superiores o cliente também recebe permissões para editar.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- LEAD FORM (com preview de subdomínio) -->
    <section id="lead" class="max-w-3xl mx-auto px-6 py-16">
      <div class="bg-gradient-to-r from-sky-600 to-indigo-600 text-white p-8 rounded-2xl shadow-lg">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
          <div>
            <h4 class="text-2xl font-bold">Pronto para aumentar seus agendamentos?</h4>
            <p class="mt-1 text-sky-100">Teste grátis de 7 dias — sem cartão. Criamos seu subdomínio e enviamos o link.</p>
          </div>

          <!-- Form with subdomain preview -->
          <form id="leadForm" class="w-full md:w-auto mt-4 md:mt-0 grid grid-cols-1 sm:grid-cols-3 gap-3" onsubmit="handleSubmit(event)">
            <input required type="text" id="bizName" name="name" placeholder="Nome da barbearia (ex: barbearia-xyz)" class="px-4 py-3 rounded-md text-slate-800" aria-label="Nome da barbearia" />
            <input required type="email" name="email" placeholder="Seu email" class="px-4 py-3 rounded-md text-slate-800" aria-label="Email" />
            <button type="submit" class="bg-white text-sky-700 font-semibold px-4 py-3 rounded-md hover:opacity-95">Quero Testar</button>

            <!-- Subdomain preview (full width under inputs on small screens) -->
            <div id="subdomainPreview" class="sm:col-span-3 mt-2 text-sm text-sky-100 opacity-90 hidden" aria-live="polite"></div>
          </form>
        </div>
      </div>
      <p class="mt-3 text-xs text-center text-slate-500">Ao enviar, criaremos provisoriamente o subdomínio e retornaremos com o link.</p>
    </section>

  </main>

  <!-- FOOTER -->
  <footer class="bg-slate-900 text-slate-300 py-10">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-6">
      <div>
        <a href="#" class="flex items-center gap-3">
          <img src="logo.png" alt="logo" class="w-8 h-8 rounded-md" />
          <span class="font-semibold text-white">AgendeOnline24Horas</span>
        </a>
        <p class="mt-3 text-sm">Solução completa de agendamento para barbearias — Bookly + configuração e suporte.</p>
      </div>

      <div class="text-sm">
        <h4 class="font-semibold text-white">Links</h4>
        <ul class="mt-3 space-y-2">
          <li><a href="#planos" class="hover:text-white">Planos</a></li>
          <li><a href="#como-funciona" class="hover:text-white">Como funciona</a></li>
          <li><a href="/login" class="hover:text-white">Logar</a></li>
        </ul>
      </div>

      <div class="text-sm">
        <h4 class="font-semibold text-white">Contato</h4>
        <p class="mt-3">contato@agendeonline.com • (11) 9XXXX-XXXX</p>
        <p class="mt-3 text-xs text-slate-500">© <span id="year"></span> AgendeOnline24Horas — Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script>
    // init lucide
    lucide.createIcons();

    // mobile menu toggle
    const btn = document.getElementById('btnMenu');
    const menu = document.getElementById('mobileMenu');
    btn?.addEventListener('click', () => {
      menu.classList.toggle('hidden');
      const hidden = menu.classList.contains('hidden');
      menu.setAttribute('aria-hidden', hidden ? 'true' : 'false');
    });

    // billing toggle logic (monthly/year)
    const toggle = document.getElementById('toggleBilling');
    const dot = document.getElementById('toggleDot');
    let annual = false;
    toggle?.addEventListener('click', () => {
      annual = !annual;
      toggle.setAttribute('aria-pressed', annual);
      dot.style.transform = annual ? 'translateX(20px)' : 'translateX(0)';
      document.querySelectorAll('[data-price-month]').forEach(el => {
        const month = el.getAttribute('data-price-month');
        const year = el.getAttribute('data-price-year');
        if (annual) {
          el.textContent = year;
        } else {
          el.textContent = month;
        }
      });
    });

    // Set year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Lead form: preview subdomain and basic submit handler
    const bizNameInput = document.getElementById('bizName');
    const preview = document.getElementById('subdomainPreview');

    function sanitizeForSubdomain(value) {
      return value.trim().toLowerCase()
        .replace(/\s+/g, '-')          // spaces to dash
        .replace(/[^a-z0-9\-]/g, '')   // remove invalid chars
        .replace(/\-+/g, '-')          // collapse multiple dashes
        .replace(/^\-+|\-+$/g, '');    // trim dashes
    }

    bizNameInput?.addEventListener('input', () => {
      const sanitized = sanitizeForSubdomain(bizNameInput.value);
      if (sanitized.length > 0) {
        preview.classList.remove('hidden');
        preview.textContent = `Subdomínio sugerido: ${sanitized}.agendeonline24horas.com.br`;
      } else {
        preview.classList.add('hidden');
        preview.textContent = '';
      }
    });

    // Replace this with your real endpoint. For now we show a friendly message.
    function handleSubmit(e) {
      e.preventDefault();
      const name = (e.target.querySelector('[name="name"]') || {}).value || '';
      const email = (e.target.querySelector('[name="email"]') || {}).value || '';
      const sanitized = sanitizeForSubdomain(bizNameInput.value || name);
      // Basic UX: show success message and intended payload
      const payload = { name, email, subdomain: sanitized ? `${sanitized}.agendeonline24horas.com.br` : null };
      // TODO: replace fetch URL with your API endpoint (e.g. /api/leads)
      console.log('Lead payload:', payload);
      alert('Recebemos sua solicitação. Vamos criar seu subdomínio e enviar o link por email em breve.');
      e.target.reset();
      preview.classList.add('hidden');
    }
  </script>
</body>
</html>
