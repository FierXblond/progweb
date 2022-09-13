<?php

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">
    <title>Sistema de Gestion de videos. </title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../css/user.css" rel="stylesheet">
    <script src="../js/user.js"></script>
</head>

<body class="bg-gray-200">
    <div class="fixed bottom-0 left-0 right-0 z-40 px-4 py-3 text-center text-white bg-gray-800">
        Sistema de gestion de videos UY 2022.
    </div>
    <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-end bg-gray-700 px-4 sm:justify-between">
        <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
            <li class="inline">
                <a href="#">Inicio</a>
            </li>
            <li class="inline">
                <span>Videos</span>
            </li>
        </ul>
        <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
            <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="hidden h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>
    <div id="containerSidebar" class="z-40">
        <div class="navbar-menu relative z-40">
            <nav id="sidebar"
                class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-gray-700 pt-6 pb-8 sm:max-w-xs lg:w-80">
                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Inicio
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#">
                                <span class="select-none">Video</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#">
                                <span class="select-none">Musica</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Usuario
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#">
                                <span class="select-none">Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#">
                                <span class="select-none">Sesiones</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#">
                                <span class="select-none">Editar</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#">
                                <span class="select-none">Salir</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Empresa
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#">
                                <span class="select-none">Contacto</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" href="#">
                                <span class="select-none">Sucursales</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="mx-auto lg:ml-80"></div>
    </div>
    <div>
        <div class="h-screen flex bg-gray-900 items-center justify-center">
            <div class="grid grid-cols-12 gap-2 gap-y-4 max-w-6xl">
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>

                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>
                        </div>
                    </card>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>
                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>
                        </div>
                    </card>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>
                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>
                        </div>
                    </card>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>
                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>

                        </div>
                    </card>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>
                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>
                        </div>
                    </card>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>
                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>

                        </div>
                    </card>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>
                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>
                        </div>
                    </card>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <card class="w-full flex flex-col">
                        <div class="relative">
                            <a href="#">
                                <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                            </a>
                            <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                        </div>
                        <div class="flex flex-row mt-2 gap-2">
                            <a href="#">
                                <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                            </a>
                            <div clas="flex flex-col">
                                <a href="#">
                                    <p class="text-gray-100 text-sm font-semibold">Aprender css en 3 minutos</p>
                                </a>
                                <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Prueba de texto </a>
                                <p class="text-gray-400 text-xs mt-1">241K visitas .</p>
                            </div>
                        </div>
                    </card>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>

</html>