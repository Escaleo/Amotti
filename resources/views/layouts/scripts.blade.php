<script src="//unpkg.com/alpinejs" defer></script>
<script>
    function productSelector() {
        return {
            selected: 0,
            tools: [{
                    name: 'TiiBot',
                    type: 'Chatbot inteligente',
                    description: 'Responde en tiempo real, califica leads y da soporte sin pausas. Con IA avanzada que aprende de cada conversación.',
                    icon: '/assets/img/icons/tiibot.svg',
                },
                {
                    name: 'TiiCall',
                    type: 'Agente de voz conversacional',
                    description: 'Realiza llamadas automáticas, interpreta respuestas y agenda citas con naturalidad.',
                    icon: '/assets/img/icons/tiicall.svg',
                },
                {
                    name: 'AmotiiTalk',
                    type: 'Live Chat centralizado',
                    description: 'Atiende múltiples chats desde una sola plataforma con IA que aprende de tus agentes.',
                    icon: '/assets/img/icons/amotii-talk.svg',
                },
                {
                    name: 'AmotiiLoop',
                    type: 'Mensajería masiva',
                    description: 'Envía mensajes automáticos personalizados por WhatsApp, SMS o voz en segundos.',
                    icon: '/assets/img/icons/amotii-loop.svg',
                },
                {
                    name: 'AmotiiMail',
                    type: 'Email marketing automatizado',
                    description: 'Envía campañas segmentadas por comportamiento y automatiza flujos de correo.',
                    icon: '/assets/img/icons/amotii-mail.svg',
                },
                {
                    name: 'AmotiiMind',
                    type: 'CRM inteligente',
                    description: 'Gestión de clientes con inteligencia predictiva, historial centralizado y alertas automáticas.',
                    icon: '/assets/img/icons/amotii-mind.svg',
                },
            ]
        }
    }
</script>
