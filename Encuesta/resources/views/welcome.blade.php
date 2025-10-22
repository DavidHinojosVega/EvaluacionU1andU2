<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeviceManager Pro - Administración de Dispositivos Empresariales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            box-sizing: border-box;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="h-full bg-gray-50">
    <!-- Header con Login/Registro -->
    <header class="bg-white shadow-sm border-b">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h1 class="text-xl font-bold text-gray-900">DeviceManager Pro</h1>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button id="loginBtn" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                       <a href="/login">Iniciar Sesión</a> 
    </button>
                    <button id="registerBtn" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                       <a href="">Registrarse</a> 
    </button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="gradient-bg text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    Administra los Dispositivos de tu Empresa
                </h2>
                <p class="text-xl md:text-2xl mb-8 text-indigo-100 max-w-3xl mx-auto">
                    Controla, monitorea y gestiona todos los dispositivos de tus empleados desde una plataforma centralizada y segura
                </p>
                <button id="demoBtn" class="bg-white text-indigo-600 hover:bg-gray-100 px-8 py-3 rounded-lg text-lg font-semibold transition-colors shadow-lg">
                    Ver Demo Gratuito
                </button>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">¿Por qué elegir DeviceManager Pro?</h3>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Simplifica la gestión de dispositivos empresariales con herramientas avanzadas y seguridad de nivel empresarial
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="card-hover bg-gray-50 p-8 rounded-xl text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">Seguridad Avanzada</h4>
                        <p class="text-gray-600">
                            Protege los datos empresariales con cifrado de extremo a extremo y políticas de seguridad personalizables
                        </p>
                    </div>

                    <div class="card-hover bg-gray-50 p-8 rounded-xl text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">Monitoreo en Tiempo Real</h4>
                        <p class="text-gray-600">
                            Supervisa el estado, ubicación y uso de todos los dispositivos desde un dashboard intuitivo
                        </p>
                    </div>

                    <div class="card-hover bg-gray-50 p-8 rounded-xl text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">Gestión Automatizada</h4>
                        <p class="text-gray-600">
                            Automatiza actualizaciones, instalaciones y configuraciones para ahorrar tiempo y recursos
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-indigo-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-3xl font-bold text-indigo-600 mb-2">500+</div>
                        <div class="text-gray-600">Empresas Confían en Nosotros</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-indigo-600 mb-2">50K+</div>
                        <div class="text-gray-600">Dispositivos Gestionados</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-indigo-600 mb-2">99.9%</div>
                        <div class="text-gray-600">Tiempo de Actividad</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-indigo-600 mb-2">24/7</div>
                        <div class="text-gray-600">Soporte Técnico</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gray-900 text-white">
            <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                <h3 class="text-3xl font-bold mb-6">¿Listo para Transformar la Gestión de Dispositivos?</h3>
                <p class="text-xl text-gray-300 mb-8">
                    Únete a cientos de empresas que ya optimizaron su gestión de dispositivos con DeviceManager Pro
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button id="startTrialBtn" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-colors">
                        Comenzar Prueba Gratuita
                    </button>
                    <button id="contactBtn" class="border border-gray-300 hover:bg-white hover:text-gray-900 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-colors">
                        Contactar Ventas
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="text-lg font-bold text-gray-900">DeviceManager Pro</span>
                    </div>
                    <p class="text-gray-600">
                        La solución líder en gestión de dispositivos empresariales
                    </p>
                </div>
                
                <div>
                    <h5 class="font-semibold text-gray-900 mb-4">Producto</h5>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Características</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Precios</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Integraciones</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-semibold text-gray-900 mb-4">Soporte</h5>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Centro de Ayuda</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Documentación</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Contacto</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-semibold text-gray-900 mb-4">Empresa</h5>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Acerca de</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition-colors">Carreras</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t mt-8 pt-8 text-center text-gray-600">
                <p>&copy; 2024 DeviceManager Pro. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    </body>
</html>