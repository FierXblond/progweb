<style>
img:hover {
        animation: shake 0.5s;
        animation-iteration-count: infinite;
        cursor: pointer;
}


@keyframes shake {
        0% { transform: translate(1px, 1px) rotate(0deg); }
        10% { transform: translate(-1px, -2px) rotate(-1deg); }
        20% { transform: translate(-3px, 0px) rotate(1deg); }
        30% { transform: translate(3px, 2px) rotate(0deg); }
        40% { transform: translate(1px, -1px) rotate(1deg); }
        50% { transform: translate(-1px, 2px) rotate(-1deg); }
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(3px, 1px) rotate(-1deg); }
        80% { transform: translate(-1px, -1px) rotate(1deg); }
        90% { transform: translate(1px, 2px) rotate(0deg); }
        100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>

<div class="user-bg">
<div class="max-w-screen-xl px-4 mx-auto md:px-8">
    <div class="mb-10 md:mb-16">
        <h2 class="
        mb-4
        text-2xl
        font-bold
        text-center text-gray-800
        lg:text-3xl
        md:mb-6
      ">
            Selecciona tu usuario:
        </h2>

        <p class="max-w-screen-md mx-auto text-center text-gray-200 md:text-3xl	">
            Selecciona el usuario correspondiente a tu cuenta:
        </p>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <div class="p-4 shadow bg-gray-200 rounded-lg">
            <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80 ">
                <img src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166__340.jpg" alt="Image"
                    class="object-cover object-center w-full h-full" class="shaker"/>
            </div>

            <div class="flex flex-col items-center justify-center">
                <div class="font-bold text-indigo-500 md:text-lg">John Doe</div>
            </div>
        </div>
        <div class="p-4 shadow bg-gray-200 rounded-lg">
            <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80 ">
                <img src="https://cdn.pixabay.com/photo/2016/11/18/19/07/happy-1836445__340.jpg" alt="Image"
                    class="object-cover object-center w-full h-full" class="shaker"/>
            </div>

            <div class="flex flex-col items-center justify-center">
                <div class="font-bold text-indigo-500 md:text-lg">John Doe</div>
            </div>
        </div>
        <div class="p-4 shadow bg-gray-200 rounded-lg">
            <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80 ">
                <img src="https://cdn.pixabay.com/photo/2018/01/15/07/52/woman-3083401__340.jpg" alt="Image"
                    class="object-cover object-center w-full h-full" class="shaker"/>
            </div>

            <div class="flex flex-col items-center justify-center">
                <div class="font-bold text-indigo-500 md:text-lg">Scarlet</div>
            </div>
        </div>
    </div>
</div>
</div>