@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Agentes virtuales que llaman,</h1>
    <p class="text-lg md:text-xl text-gray-600 mb-8">califican y agendan por ti</p>
    <p class="text-base text-gray-700 max-w-2xl mx-auto mb-6">
      Integra IA conversacional por voz para escalar tus ventas, optimizar tus campañas y mejorar el rendimiento de tu inversión desde el primer día.
    </p>
    <a href="#contacto" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">Solicita tu demo gratis</a>
  </div>
</section>

<section class="bg-gray-50 py-16">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-semibold text-gray-900 mb-6">La nueva era de las ventas comienza con una llamada</h2>
    <p class="text-gray-600 max-w-3xl mx-auto">
      Amotii combina inteligencia artificial, voz natural y automatización para atraer, convertir y agendar en tiempo real. Mientras otros aún responden chats, tu negocio ya está cerrando ventas con llamadas inteligentes 24/7.
    </p>
  </div>
</section>

<section class="py-16">
  <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8 text-center">
    <div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Llamadas automatizadas</h3>
      <p class="text-gray-600">Naturales y efectivas</p>
    </div>
    <div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Calificación inteligente</h3>
      <p class="text-gray-600">De leads</p>
    </div>
    <div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Agendamiento sincronizado</h3>
      <p class="text-gray-600">Con tu calendario</p>
    </div>
  </div>
</section>

<section class="bg-gray-100 py-16">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-2xl font-bold text-center mb-12">Todo lo que necesitas para vender más, en un solo lugar</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold mb-2">TiiBot</h3>
        <p class="text-gray-600">Chatbot inteligente que responde en tiempo real, califica leads y da soporte sin pausas.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold mb-2">TiiCall</h3>
        <p class="text-gray-600">Agente de voz conversacional automatizado para ventas.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold mb-2">AmotiiTalk</h3>
        <p class="text-gray-600">Live Chat centralizado para atención simultánea.</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
    <div>
      <h2 class="text-2xl font-bold mb-4">Desarrollo a Medida</h2>
      <p class="text-gray-700 mb-2">Soluciones únicas para necesidades únicas. Creamos funcionalidades exclusivas y adaptaciones sobre nuestra plataforma base.</p>
      <ul class="list-disc list-inside text-gray-600">
        <li>Automatización personalizada</li>
        <li>Integración con tus sistemas</li>
        <li>Escalabilidad y seguridad</li>
      </ul>
    </div>
    <div class="bg-gray-100 rounded-lg p-8 shadow">
      <h3 class="text-xl font-semibold mb-4">Formulario de contacto</h3>
      @livewire('contact-form')
    </div>
  </div>
</section>

<section id="contacto" class="bg-blue-50 py-16">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <h2 class="text-2xl font-bold text-gray-900 mb-4">Déjanos tus datos</h2>
    <p class="text-gray-700 mb-6">y descubre cómo Amotii potencia tus ventas y atención a clientes</p>
    @livewire('contact-form')
  </div>
</section>

@endsection