<script src="//unpkg.com/alpinejs" defer></script>
<script>
    function productSelector() {
        return {
            selected: 0,
            tools: [{
                    name: 'TiiBot',
                    type: 'Chatbot inteligente',
                    description: 'Responde en tiempo real, califica leads y da soporte sin pausas. Con IA avanzada que aprende de cada conversación.',
                    icon: '/assets/img/index/icons/bot_4711983.svg',
                    isWhite: '',
                    route: '{{ route('products.voice-virtual-agents') }}',
                },
                {
                    name: 'TiiCall',
                    type: 'Agente de voz conversacional',
                    description: 'Llama, conversa, califica y agenda citas. Voz natural y persuasiva para vender a escala.',
                    icon: '/assets/img/index/icons/bot_4711997.svg',
                    isWhite: '',
                    route: '{{ route('products.intelligent-chatbots') }}',
                },
                {
                    name: 'AmotiiTalk',
                    type: 'Live Chat centralizado',
                    description: 'Atiende desde una sola bandeja todos tus mensajes. Conversaciones ágiles con clientes desde WhatsApp, web, Instagram y más.',
                    icon: '/assets/img/index/icons/employee_6141731.svg',
                    isWhite: '',
                    route: '{{ route('products.voice-virtual-agents') }}',

                },
                {
                    name: 'AmotiiLoop',
                    type: 'Mensajería masiva',
                    description: 'Envía campañas por WhatsApp y otros canales de forma masiva y personalizada. Ideal para promociones, lanzamientos y seguimientos.',
                    icon: '/assets/img/index/icons/recopilacion-de-datos.png',
                    isWhite: 'No',
                    route: '{{ route('products.voice-virtual-agents') }}',

                },
                {
                    name: 'AmotiiMail',
                    type: 'Email marketing automatizado',
                    description: 'Crea flujos de correos inteligentes que nutren y convierten. Segmentación, análisis y resultados en un solo clic.',
                    icon: '/assets/img/index/icons/email_12574740.png',
                    isWhite: 'No',
                    route: '{{ route('products.voice-virtual-agents') }}',

                },
                {
                    name: 'AmotiiMind',
                    type: 'CRM inteligente',
                    description: 'Organiza, gestiona y automatiza tu proceso comercial. Visualiza cada oportunidad y haz seguimiento con precisión.',
                    icon: '/assets/img/index/icons/robot_1167511.svg',
                    isWhite: '',
                    route: '{{ route('products.voice-virtual-agents') }}',

                },
            ]
        }
    }
</script>
<script>
    function carouselSection() {
        return {
            selected: 0,
            autoplayInterval: null,
            slides: [{
                    title: 'Atención sin límites',
                    subtitle: 'sin esperas, sin perder oportunidades',
                    description: `Responde en segundos 24/7, captura leads y cierra ventas sin esfuerzo. TiiBot automatiza, entiende, aprende y conversa de manera natural, guiando a tus clientes desde la primera pregunta hasta la compra final.`,
                    icon: '{{ asset('assets/img/index/icons/icon.png') }}',
                    link: '#'
                },
                {
                    title: 'Conversaciones',
                    subtitle: 'en tiempo real',
                    description: `Cuando la automatización necesita un toque humano, AmotiiTalk entra en acción. Atiende clientes en vivo, personaliza cada interacción y resuelve dudas al instante`,
                    icon: '{{ asset('assets/img/index/icons/icon2.png') }}',
                    link: '#'
                },
                {
                    title: 'Todos tus Canales',
                    subtitle: 'Una sola plataforma',
                    description: `WhatsApp, Instagram, Facebook Messenger y más. Conecta todos tus canales en una sola interfaz, responde sin perder el hilo y automatiza respuestas con AmotiiLoop .`,
                    icon: '{{ asset('assets/img/index/icons/icon3.png') }}',
                    link: '#'
                },
            ],
            startAutoplay() {
                this.autoplayInterval = setInterval(() => {
                    this.selected = (this.selected + 1) % this.slides.length;
                }, 5000);
            }
        }
    }
</script>
<script>
    function tabSection() {
        return {
            selected: 0,
            tabs: [{
                    title: "Clasificación<br>de leads",
                    content: {
                        title: "Calificación de Leads",
                        text: "Detecta en segundos qué tan cerca está un prospecto de convertirse en cliente y transfiere solo oportunidades calificadas a tu equipo.",
                        image: "{{asset('assets/img/products/tiicall/phone2.png')}}" 
                    }
                },
                {
                    title: "Soporte<br>técnico",
                    content: {
                        title: "Soporte técnico",
                        text: "Resuelve consultas frecuentes y guía al usuario paso a paso sin congestionar tu equipo de atención.",
                        image: "ruta-a-tu-imagen.png"
                    }
                },
                {
                    title: "Agendamiento<br>Automatizado",
                    content: {
                        title: "Agendamiento Automatizado",
                        text: "Coordina reuniones, citas o visitas en tiempo real, con sincronización directa al calendario de tu equipo comercia.",
                        image: "ruta-a-tu-imagen.png"
                    }
                },
                {
                    title: "Ventas<br>Asistidas",
                    content: {
                        title: "Asistente de ventas",
                        text: "Lanza campañas de voz proactivas con mensajes personalizados que informan, persuaden y convierten.",
                        image: "ruta-a-tu-imagen.png"
                    }
                },
                {
                    title: "Retail<br>inteligente",
                    content: {
                        title: "Soluciones para retail",
                        text: "Automatiza confirmaciones de pedidos, encuestas de satisfacción y atención postventa con experiencia fluida y adaptada a tu negocio.",
                        image: "ruta-a-tu-imagen.png"
                    }
                },
                {
                    title: "Gestión de<br>Cobranzas",
                    content: {
                        title: "Gestión automática de cobranzas",
                        text: "Realiza recordatorios automáticos de pago con opciones para negociar, redirigir o escalar el caso según la respuesta.",
                        image: "ruta-a-tu-imagen.png"
                    }
                },
                {
                    title: "IVR<br>Inteligente",
                    content: {
                        title: "IVR que entiende y responde",
                        text: "Olvida los menús eternos. Un agente inteligente entiende la intención del usuario y lo guía sin necesidad de marcar opciones.",
                        image: "ruta-a-tu-imagen.png"
                    }
                }
            ]
        }
    }
</script>
