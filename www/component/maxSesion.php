<?php

?>

<div class="bg-black py-30 lg:py-[120px] overflow-hidden z-10">

    <div class="container xl:max-w-6xl mx-auto px-4">
        <header class="text-center mx-auto mb-12 lg:px-20">
            <h2 class="text-2xl leading-normal mb-2 font-bold text-white">
                Sesions de usuarios registradas
            </h2>
            <p class="text-white leading-relaxed font-light text-xl mx-auto pb-2">
                Seleccione una para eliminar!
            </p>
        </header>
    </div>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img src="https://picsum.photos/200" alt="" class="rounded-full w-24 h-24 object-cover">
                </div>
                <div class="text-center">
                    <p class="text-xl text-white font-bold mb-2">USUARIO ANDROID</p>
                    <p class="text-base text-gray-400 font-normal">________________________________________</p>
                </div>
            </div>

            <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img src="https://picsum.photos/200" alt="" class="rounded-full w-24 h-24 object-cover">
                </div>
                <div class="text-center">
                    <p class="text-xl text-white font-bold mb-2">USUARIO CHROME</p>
                    <p class="text-base text-gray-400 font-normal">________________________________________</p>
                </div>
            </div>

            <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img src="https://picsum.photos/200" alt="" class="rounded-full w-24 h-24 object-cover">
                </div>
                <div class="text-center">
                    <p class="text-xl text-white font-bold mb-2">USUARIO FIREFOX</p>
                    <p class="text-base text-gray-400 font-normal">________________________________________</p>
                </div>
            </div>
    </section>
    <section class="bg-black">
       <div
            class="max-w-lg bg-black px-4 pt-24 py-8 mx-auto text-left md:max-w-none md:text-center"
          >
            <h1
              class="text-3xl font-extrabold leading-10 tracking-tight text-left text-white text-center sm:leading-none md:text-6xl text-4xl lg:text-7xl"
            >
              <span class="inline md:block">Incrementar Sesiones?</span>
              <span
                class=" mt-2 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-emerald-400 to-green-500 md:inline-block"
              > Contactanos<span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-500 via-cyon-400 to-purple-300"> 50% Off</span> </span>
            </h1>
            <div
              class="mx-auto rounded-lg font-black mt-5 text-zinc-400 md:mt-12 md:max-w-lg text-center lg:text-lg"
            >
              <button class="bg-tkb border text-sm text-white py-3 px-7 rounded-full" onClick={Contact}>
              Contactar
              </button>
            </div>
          </div>
  </section>
  
<hr class="text-white mx-5" />

  <footer class="bg-black pb-5">
  <div class="max-w-screen-xl px-4 pt-8 mx-auto sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <div class="flex justify-center text-teal-300 sm:justify-start">
        
      </div>

      <p class="mt-4 text-sm text-center text-gray-400 lg:text-right lg:mt-0">
        A&C &nbsp; Privacy & Policy &nbsp; Developer AC
      </p>
    </div>
  </div>
</footer>
</div>