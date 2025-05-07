<?php
    require __DIR__ . '/vendor/autoload.php';

    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $base_url = $_ENV['BASE_URL']; // URL base do site
    $wpp = $_ENV['WPP']; // Número de telefone para o WhatsApp
    $wpp_url = $_ENV['WPP_URL']; // URL do WhatsApp
    $fone_url = $_ENV['FONE_URL']; // URL do Fone
    $email = $_ENV['EMAIL']; // Email de contato
    $endereco = $_ENV['ENDERECO']; // Endereço da empresa
    $facebook = $_ENV['FACEBOOK']; // URL do Facebook
    $instagram = $_ENV['INSTAGRAM']; // URL do Instagram
    $freeladev_link = $_ENV['FREELADEV_LINK']; // Link do criador do site
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Funilaria Ribeiro oferece calhas, colarinhos e algerosas com qualidade e tradição há mais de 20 anos em Passo Fundo. Solicite seu orçamento personalizado!">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Base Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }
        .header-scrolled {
            @apply bg-gray-800 shadow-lg py-2;
        }
        .header-transparent {
            @apply bg-transparent py-4;
        }
        @media (min-width: 1500px) {
            #inicio {
                height: 65vh;
            }
        }
    </style>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" href="<?= $base_url; ?>imagens/favicon.png" type="image/x-icon">

    <title><?= $_ENV['NOME_SITE']; ?></title>

</head>
<body class="font-sans">

    <!-- Mobile Menu -->
    <div id="mobile-menu" style="z-index: 1000 !important; height: 100vh; width: 100%; position: fixed !important;" class="md:hidden bg-gray-800 hidden">
        <button id="close-mobile-menu" class="absolute top-4 right-4 text-white">
            <i data-lucide="x" class="w-8 h-8"></i>
        </button>
        <nav class="mt-24 container mx-auto px-8 py-4">
            <ul class="flex flex-col space-y-4">
                <li>
                    <a href="#inicio" class="text-[22px] text-white hover:text-gray-300 transition-colors duration-300 block py-2 flex items-center">
                        <i data-lucide="home" class="w-6 h-6 mr-2"></i> Início
                    </a>
                </li>
                <li>
                    <a href="#servicos" class="text-[22px] text-white hover:text-gray-300 transition-colors duration-300 block py-2 flex items-center">
                        <i data-lucide="briefcase" class="w-6 h-6 mr-2"></i> Serviços
                    </a>
                </li>
                <li>
                    <a href="#sobre" class="text-[22px] text-white hover:text-gray-300 transition-colors duration-300 block py-2 flex items-center">
                        <i data-lucide="info" class="w-6 h-6 mr-2"></i> Sobre
                    </a>
                </li>
                <li>
                    <a href="#portfolio" class="text-[22px] text-white hover:text-gray-300 transition-colors duration-300 block py-2 flex items-center">
                        <i data-lucide="image" class="w-6 h-6 mr-2"></i> Portfólio
                    </a>
                </li>
                <li>
                    <a href="#contato" class="text-[22px] text-white hover:text-gray-300 transition-colors duration-300 block py-2 flex items-center">
                        <i data-lucide="mail" class="w-6 h-6 mr-2"></i> Contato
                    </a>
                </li>
            </ul>
            
            <div class="mt-6 space-y-2 text-white/80 text-sm border-t border-white/20 pt-4">
                <div class="flex items-center mb-4 mt-4">
                    <i data-lucide="phone" class="w-6 h-6 mr-2"></i>
                    <a href="<?= $wpp_url; ?>" target="_blank"><span class="text-[18px]"><?= $wpp; ?></span></a>
                </div>
                <div class="flex items-center mb-4">
                    <i data-lucide="clock" class="w-6 h-6 mr-2"></i>
                    <span class="text-[18px]">Seg-Sex: 8:30h-17:30h</span>
                </div>
            </div>
        </nav>
    </div>
    <!-- Mobile Menu -->


    <!-- Header Section -->
    <header id="header" class="absolute w-full z-50 transition-all duration-300">
        <div class="container mx-auto lg:px-16 px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <div class="text-white font-bold text-xl mr-4">Funilaria Ribeiro</div>
                    <div class="hidden md:flex space-x-6 text-white/80 text-sm">
                        <div class="flex items-center">
                            <i data-lucide="phone" class="w-4 h-4 mr-2"></i>
                            <a href="<?= $wpp_url; ?>" target="_blank"><span><?= $wpp; ?></span></a>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="clock" class="w-4 h-4 mr-2"></i>
                            <span>Seg-Sex: 8:30h-17:30h</span>
                        </div>
                    </div>
                </div>

                <nav class="hidden md:block">
                    <ul class="flex space-x-8">
                        <li><a href="#inicio" class="text-white hover:text-gray-300 transition-colors duration-300 font-medium">Início</a></li>
                        <li><a href="#servicos" class="text-white hover:text-gray-300 transition-colors duration-300 font-medium">Serviços</a></li>
                        <li><a href="#sobre" class="text-white hover:text-gray-300 transition-colors duration-300 font-medium">Sobre</a></li>
                        <li><a href="#portfolio" class="text-white hover:text-gray-300 transition-colors duration-300 font-medium">Portfólio</a></li>
                        <li><a href="#contato" class="text-white hover:text-gray-300 transition-colors duration-300 font-medium">Contato</a></li>
                    </ul>
                </nav>

                <button id="mobile-menu-button" class="md:hidden text-white">
                    <i data-lucide="menu" class="w-10 h-10"></i>
                </button>
            </div>
        </div>
    </header>
    <!-- Header Section -->


    <!-- Hero Section -->
    <section id="inicio" class="relative h-screen flex items-center" data-aos="fade-up" data-aos-once="true">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('<?= $base_url; ?>imagens/banner.jpeg')">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-gray-400/20"></div>
        </div>
        
        <div class="container mx-auto lg:px-16 px-4 relative z-10">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    Qualidade e Confiança em <span class="text-gray-300">Calhas e Algerosas</span>
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-8">
                    Há mais de 15 anos oferecendo soluções em Calhas e Algerosas com excelência para residências e empresas.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#servicos" class="inline-flex items-center justify-center bg-gray-700 hover:bg-gray-600 text-white font-medium py-3 px-6 rounded-md transition-colors duration-300">
                        Nossos Serviços
                        <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                    </a>
                    <a href="#contato" class="inline-flex items-center justify-center bg-transparent border-2 border-white text-white hover:bg-white/10 font-medium py-3 px-6 rounded-md transition-colors duration-300">
                        Solicitar Orçamento
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section -->


    <!-- Serviços Section -->
    <section id="servicos" class="py-20 bg-gray-100" data-aos="fade-up" data-aos-once="true">
        <div class="container mx-auto lg:px-16 px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800">Nossos Serviços</h2>
                <p class="text-lg text-gray-600">Conheça as soluções que oferecemos</p>
                <div class="w-24 h-1 bg-gray-700 mx-auto mt-4"></div>
            </div>
            
            <div id="services-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- VEM DO JS-->
            </div>
        </div>
    </section>
    <!-- Serviços Section -->


    <!-- About Section -->
    <section id="sobre" class="py-20" data-aos="fade-up" data-aos-once="true">
        <div class="container mx-auto lg:px-16 px-4">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/2">
                    <div class="text-center lg:text-left mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800">Sobre Nossa Empresa</h2>
                        <p class="text-lg text-gray-600">Conheça nossa história e valores</p>
                        <div class="w-24 h-1 bg-gray-700 mx-auto lg:mx-0 mt-4"></div>
                    </div>
                    
                    <p class="text-gray-600 my-6">
                        Com mais de 20 anos de experiência, a Funilaria Ribeiro é referência em soluções de calhas, colarinhas e algerosas em Passo Fundo – RS. Atuamos com profissionalismo, materiais de alta qualidade e um atendimento que prioriza a confiança e a satisfação dos nossos clientes. Nosso compromisso é proteger e valorizar o seu imóvel com serviços sob medida.
                    </p>
                    
                    <div id="features-grid" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                        <!-- Features will be dynamically inserted here by JavaScript -->
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <div class="relative z-10 rounded-lg overflow-hidden shadow-xl">
                        <img 
                            src="<?= $base_url; ?>imagens/sobre.jpg" 
                            alt="Trabalho" 
                            class="w-full h-auto"
                        />
                    </div>
                    <div class="absolute -top-4 -right-4 w-full h-full bg-gray-700 rounded-lg -z-10"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gray-800" data-aos="fade-up" data-aos-once="true">
        <div class="container mx-auto lg:px-16 px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white">Nosso Portfólio</h2>
                <p class="text-lg text-white/80">Conheça alguns de nossos projetos realizados</p>
                <div class="w-24 h-1 bg-gray-500 mx-auto mt-4"></div>
            </div>
            
            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Portfolio items will be dynamically inserted here by JavaScript -->
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50" data-aos="fade-up" data-aos-once="true">
        <div class="container mx-auto lg:px-16 px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800">Depoimentos</h2>
                <p class="text-lg text-gray-600">O que nossos clientes dizem sobre nós</p>
                <div class="w-24 h-1 bg-gray-700 mx-auto mt-4"></div>
            </div>
            
            <div id="testimonials-grid" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonials will be dynamically inserted here by JavaScript -->
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->

    <!-- CTA Section -->
    <section class="py-16 bg-gray-700" data-aos="fade-up" data-aos-once="true">
        <div class="container mx-auto lg:px-16 px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Pronto para transformar seu projeto em realidade?
            </h2>
            <p class="text-white/90 text-lg max-w-2xl mx-auto mb-8">
                Entre em contato conosco hoje mesmo e solicite um orçamento sem compromisso.
                Nossa equipe está pronta para atendê-lo.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contato" class="inline-flex items-center justify-center bg-white text-gray-700 hover:bg-gray-100 font-medium py-3 px-6 rounded-md transition-colors duration-300">
                    Solicitar Orçamento
                </a>
                <a href="<?= $fone_url; ?>" class="inline-flex items-center justify-center bg-transparent border-2 border-white text-white hover:bg-white/10 font-medium py-3 px-6 rounded-md transition-colors duration-300">
                    <i data-lucide="phone" class="w-5 h-5 mr-2"></i>
                    <?= $wpp; ?>
                </a>
            </div>
        </div>
    </section>
    <!-- CTA Section -->

    <!-- Contact Section -->
    <section id="contato" class="py-20" data-aos="fade-up" data-aos-once="true">
        <div class="container mx-auto lg:px-16 px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800">Entre em Contato</h2>
                <p class="text-lg text-gray-600">Estamos prontos para atender você</p>
                <div class="w-24 h-1 bg-gray-700 mx-auto mt-4"></div>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Envie sua mensagem</h3>
                    
                    <form action="<?= $base_url; ?>php/enviar-email.php" class="space-y-4" method="post">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                                <input
                                    type="text"
                                    id="nome"
                                    name="nome"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                                    placeholder="Seu nome"
                                    required
                                />
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                                    placeholder="Seu email"
                                    required
                                />
                            </div>
                        </div>
                        
                        <div>
                            <label for="numero" class="block text-sm font-medium text-gray-700 mb-1">Número</label>
                            <input
                                type="tel"
                                id="numero"
                                name="numero"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                                placeholder="Seu número"
                                required
                                maxlength="15" 
                                inputmode="tel"
                            />
                        </div>
                        
                        <div>
                            <label for="mensagem" class="block text-sm font-medium text-gray-700 mb-1">Mensagem</label>
                            <textarea
                                id="mensagem"
                                name="mensagem"
                                rows="5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                                placeholder="Sua mensagem"
                                required
                            ></textarea>
                        </div>
                        
                        <button
                            type="submit"
                            class="bg-gray-700 hover:bg-gray-600 text-white font-medium py-2 px-6 rounded-md transition-colors duration-300"
                        >
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
                
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Informações de Contato</h3>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <i data-lucide="map-pin" class="w-6 h-6 text-gray-700 mr-4 mt-1"></i>
                            <div>
                                <h4 class="font-medium text-gray-800">Endereço</h4>
                                <p class="text-gray-600"><?= $endereco; ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <i data-lucide="phone" class="w-6 h-6 text-gray-700 mr-4 mt-1"></i>
                            <div>
                                <h4 class="font-medium text-gray-800">Telefone</h4>
                                <p class="text-gray-600"><?= $wpp; ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <i data-lucide="mail" class="w-6 h-6 text-gray-700 mr-4 mt-1"></i>
                            <div>
                                <h4 class="font-medium text-gray-800">Email</h4>
                                <p class="text-gray-600"><?= $email; ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <i data-lucide="clock" class="w-6 h-6 text-gray-700 mr-4 mt-1"></i>
                            <div>
                                <h4 class="font-medium text-gray-800">Horário de Funcionamento</h4>
                                <p class="text-gray-600">Segunda a Sexta: 8:30h - 17:30h</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3514.988623222425!2d-52.4412918411574!3d-28.238024986552237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sfunilaria%20ribeiro!5e0!3m2!1spt-BR!2sbr!4v1746643264764!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto lg:px-16 px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Funilaria Ribeiro</h3>
                    <p class="text-gray-400 mb-4">
                        Soluções completas em calhas e algerosas para projetos residenciais e comerciais.
                    </p>
                    <div class="flex space-x-4">
                        <a href="<?= $facebook; ?>" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="<?= $instagram; ?>" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#inicio" class="text-gray-400 hover:text-white transition-colors duration-300">Início</a></li>
                        <li><a href="#servicos" class="text-gray-400 hover:text-white transition-colors duration-300">Serviços</a></li>
                        <li><a href="#sobre" class="text-gray-400 hover:text-white transition-colors duration-300">Sobre</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors duration-300">Portfólio</a></li>
                        <li><a href="#contato" class="text-gray-400 hover:text-white transition-colors duration-300">Contato</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Serviços</h4>
                    <ul class="space-y-2">
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors duration-300">Calhas interna</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors duration-300">Calhas externa</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors duration-300">Algerosas</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors duration-300">Algerosas (capeamento)</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors duration-300">Colarinho</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contato</h4>
                    <address class="not-italic text-gray-400">
                        <p><?= $endereco; ?></p>
                        <p class="my-4"><?= $email; ?></p>
                        <a href="<?= $wpp_url; ?>" target="_blank">
                            <p><?= $wpp; ?></p>
                        </a>
                    </address>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm text-center md:text-left">
                    &copy; <span id="current-year"></span> Funilaria Ribeiro. Todos os direitos reservados.
                </p>
                <div class="mt-4 md:mt-0">
                    <ul class="flex space-x-6 text-sm">
                        <li><a href="<?= $freeladev_link; ?>" class="text-gray-400 hover:text-white transition-colors duration-300">Criado por - <span class="text-orange-500">Freeladev sites</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();

        // Initialize Lucide icons
        lucide.createIcons();

        // Header scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('header-scrolled');
                header.classList.remove('header-transparent');
            } else {
                header.classList.remove('header-scrolled');
                header.classList.add('header-transparent');
            }
        });

        // Mobile menu 
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuIcon = mobileMenuButton.querySelector('i');

        mobileMenuButton.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden');
            mobileMenuIcon.setAttribute('data-lucide', isOpen ? 'x' : 'menu');
            lucide.createIcons();
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenuIcon.setAttribute('data-lucide', 'menu');
                lucide.createIcons();
            });
        });

        // Close mobile menu functionality
        const closeMobileMenuButton = document.getElementById('close-mobile-menu');
        closeMobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileMenuIcon.setAttribute('data-lucide', 'menu');
            lucide.createIcons();
        });

        // Services data
        const services = [
            {
                title: 'Calhas',
                description: 'Fabricação e instalação de calhas interna e externa.',
                image: '<?= $base_url; ?>imagens/calha.jpg',
            },
            {
                title: 'Algerosas',
                description: 'Fabricação e instalação de algerosas sob medida.',
                image: '<?= $base_url; ?>imagens/algerosa.jpeg',
            },
            {
                title: 'Colarinhos',
                description: 'Confecção de Colarinhos para churasqueiras.',
                image: '<?= $base_url; ?>imagens/colarinho.jpeg',
            }
        ];

        // Render services
        const servicesGrid = document.getElementById('services-grid');
        services.forEach(service => {
            const serviceCard = document.createElement('div');
            serviceCard.className = 'bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 group';
            serviceCard.innerHTML = `
                <div class="h-48 overflow-hidden">
                    <img src="${service.image}" alt="${service.title}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">${service.title}</h3>
                    <p class="text-gray-600 mb-4">${service.description}</p>
                    <a href="#contato" class="inline-flex items-center text-gray-700 hover:text-gray-600 font-medium transition-colors duration-300">
                        Saiba mais
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            `;
            servicesGrid.appendChild(serviceCard);
        });

        // Features data
        const features = [
            {
                icon: 'pen-tool',
                title: 'Expertise Técnica',
                description: 'Equipe altamente qualificada com anos de experiência no mercado'
            },
            {
                icon: 'shield',
                title: 'Garantia de Qualidade',
                description: 'Compromisso com materiais de primeira linha e acabamento impecável'
            },
            {
                icon: 'clock',
                title: 'Pontualidade',
                description: 'Respeito aos prazos acordados do início ao fim do projeto'
            },
            {
                icon: 'users',
                title: 'Atendimento Personalizado',
                description: 'Soluções customizadas para atender às necessidades específicas de cada cliente'
            }
        ];

        // Render features
        const featuresGrid = document.getElementById('features-grid');
        features.forEach(feature => {
            const featureCard = document.createElement('div');
            featureCard.className = 'flex';
            featureCard.innerHTML = `
                <div class="mr-4">
                    <i data-lucide="${feature.icon}" class="w-9 h-9 text-gray-700"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">${feature.title}</h3>
                    <p class="text-gray-600">${feature.description}</p>
                </div>
            `;
            featuresGrid.appendChild(featureCard);
        });

        // Portfolio data
        const portfolioItems = [
            {
                title: "Algerosa",
                description: "Serviço de instalação de algerosa em residência",
                image: "<?= $base_url; ?>imagens/port-1.png"
            },
            {
                title: "Calha de beiral",
                description: "Instalação de calha de beiral em telhado residencial",
                image: "<?= $base_url; ?>imagens/port-2.png"
            },
            {
                title: "Algerosa",
                description: "Serviço de instalação de algerosa em estabelecimento comercial",
                image: "<?= $base_url; ?>imagens/port-3.png"
            },
            {
                title: "Algerosa (capeamento)",
                description: "Serviço de capeamento de algerosa em residência",
                image: "<?= $base_url; ?>imagens/port-4.png"
            },
            {
                title: "Colarinho",
                description: "Confecção de colarinho para churrasqueira",
                image: "<?= $base_url; ?>imagens/port-5.png"
            },
            {
                title: "Calha de beiral",
                description: "Instalação de calha de beiral em telhado residencial",
                image: "<?= $base_url; ?>imagens/port-6.png"
            },
            {
                title: "Algerosa + Colarinho",
                description: "Serviço de instalação de algerosa e colarinho em residência",
                image: "<?= $base_url; ?>imagens/port-7.png"
            },
            {
                title: "Algerosa",
                description: "Serviço de instalação de algerosa em residência",
                image: "<?= $base_url; ?>imagens/port-8.png"
            },
        ];

        // Render portfolio
        const portfolioGrid = document.getElementById('portfolio-grid');
        portfolioItems.forEach(item => {
            const portfolioCard = document.createElement('div');
            portfolioCard.className = 'relative overflow-hidden rounded-lg group cursor-pointer';
            portfolioCard.innerHTML = `
                <img src="${item.image}" alt="${item.title}" class="w-full h-64 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <h3 class="text-xl font-semibold text-white mb-2">${item.title}</h3>
                    <p class="text-white/80">${item.description}</p>
                </div>
            `;
            portfolioGrid.appendChild(portfolioCard);
        });

        // Testimonials data
        const testimonials = [
            {
                name: "Carlos Silva",
                role: "Proprietário de Residência",
                content: "Contratei para instalação de calhas na minha casa e fiquei impressionado com a qualidade do trabalho. Equipe profissional e atenciosa. Recomendo!",
                rating: 5
            },
            {
                name: "Márcia Oliveira",
                role: "Gerente de Restaurante",
                content: "O sistema de exaustão instalado em nosso restaurante foi perfeito. Trabalho limpo, rápido e eficiente. Já estamos planejando outros projetos com eles.",
                rating: 5
            },
            {
                name: "Roberto Almeida",
                role: "Proprietário de Estabelecimento Comercial",
                content: "A Funilaria Ribeiro fez um excelente trabalho na instalação de algerosas em nosso prédio. O atendimento foi excepcional e o resultado final superou nossas expectativas.",
                rating: 4
            }
        ];

        // Render testimonials
        const testimonialsGrid = document.getElementById('testimonials-grid');
        testimonials.forEach(testimonial => {
            const testimonialCard = document.createElement('div');
            testimonialCard.className = 'bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300';
            
            const stars = Array(5).fill('').map((_, i) => `
                <i data-lucide="star" class="w-4 h-4 ${i < testimonial.rating ? 'text-yellow-500 fill-current' : 'text-gray-300'}"></i>
            `).join('');
            
            testimonialCard.innerHTML = `
                <div class="flex items-center mb-4">
                    <div class="mr-4">
                        <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                            <span class="text-2xl font-semibold text-gray-500">${testimonial.name.charAt(0)}</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">${testimonial.name}</h3>
                        <p class="text-gray-600 text-sm">${testimonial.role}</p>
                        <div class="flex mt-1">
                            ${stars}
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">${testimonial.content}</p>
            `;
            testimonialsGrid.appendChild(testimonialCard);
        });

        
        document.getElementById('numero').addEventListener('keyup', (e) => {
            let input = e.target;
            input.value = phoneMask(input.value);
        });
        
        const phoneMask = (value) => {
            if (!value) return "";
            value = value.replace(/\D/g, '');
            if (value.length <= 2) {
                return `${value}`;
            } else if (value.length <= 6) {
                return `(${value.slice(0, 2)}) ${value.slice(2)}`;
            } else if (value.length <= 10) {
                return `(${value.slice(0, 2)}) ${value.slice(2, 6)}-${value.slice(6)}`;
            } else {
                return `(${value.slice(0, 2)}) ${value.slice(2, 6)}-${value.slice(6, 10)}${value.slice(10, 15)}`;
            }
        };

        // Update current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Initialize all Lucide icons after dynamic content is added
        lucide.createIcons();

        <?php
            // Check if the email was sent successfully
            if (isset($_GET['success']) && $_GET['success'] == 'true') {
                echo "alert('E-mail enviado com sucesso!');";
                // removendo paramentro da URL
                echo "window.history.replaceState({}, document.title, window.location.pathname);";
            } elseif (isset($_GET['success']) && $_GET['success'] == 'false') {
                echo "alert('Erro ao enviar o e-mail. Tente novamente mais tarde.');";
                // removendo paramentro da URL
                echo "window.history.replaceState({}, document.title, window.location.pathname);";
            }
        ?>
    </script>
</body>
</html>