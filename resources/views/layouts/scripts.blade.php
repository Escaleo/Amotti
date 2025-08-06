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
