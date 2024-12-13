<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Generador CV") }}
                    <br></br>
                    <button type="button" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Agregar nuevo
                    </button>

                    <!-- <form action="" class="">
                        <div class="flex gap-x-6 mb-6">
                            <div class="w-full relative">
                                <label class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Nombre <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z" fill="#EF4444" />
                                    </svg>
                                </label>
                                <input type="text" id="default-search" class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none " placeholder="" required="">
                            </div>
                            <div class="w-full relative">
                                <label class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Apellidos <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z" fill="#EF4444" />
                                    </svg>
                                </label>
                                <input type="text" id="default-search" class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none " placeholder="" required="">
                            </div>
                        </div>
                        <div class="relative mb-6">
                            <label class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Correo electrónico <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z" fill="#EF4444" />
                                </svg>
                            </label>
                            <input type="text" id="default-search" class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none " placeholder="" required="">
                        </div>
                        <div class="relative mb-6">
                            <label class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Ciudad <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z" fill="#EF4444" />
                                </svg>
                            </label>
                            <input type="text" id="default-search" class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none " placeholder="" required="">
                        </div> -->
                        <!-- <div class="flex gap-x-6 mb-6">

                            <div class="w-full relative">

                            </div>
                        </div>
                        <div class="relative mb-6">
                            <label class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Phone Number <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z" fill="#EF4444" />
                                </svg>
                            </label>
                            <input type="text" id="default-search" class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none " placeholder="" required="">
                        </div>

                        <button class="w-full h-12 shadow-sm rounded-full bg-green-600 hover:bg-green-800 transition-all duration-700 text-white text-base font-semibold leading-7 border border-gray-400">
                            Enviar
                        </button>

                    </form> -->

                    <div class="max-w-md mx-auto mt-10">
    <form class="bg-white dark:bg-gray-800 p-6 rounded shadow-md">
        <div class="mb-6">
            <label for="nombre" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
                Nombre
            </label>
            <input type="text" id="nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tu nombre">
        </div>
        <div class="mb-6">
            <label for="apellidos" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
                Apellidos
            </label>
            <input type="text" id="apellidos" name="apellidos" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tus apellidos">
        </div>
        <div class="mb-6">
            <label for="email" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
                Correo Electrónico
            </label>
            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tu correo electrónico">
        </div>
        <div class="mb-6">
            <label for="telefono" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
                Teléfono
            </label>
            <input type="tel" id="telefono" name="telefono" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tu número de teléfono">
        </div>
        <div class="mb-6">
            <label for="ciudad" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
                Ciudad
            </label>
            <input type="text" id="ciudad" name="ciudad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tu ciudad">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Guardar
        </button>
    </form>
</div>


                    <div class="max-w-md mx-auto mt-10">
    <form class="bg-white dark:bg-gray-800 p-6 rounded shadow-md">
        <div class="mb-6">
            <label for="formacionAcademica" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">
                Formación Académica
            </label>
            <input type="text" id="formacionAcademica" name="formacionAcademica" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline" placeholder="Introduce tu formación académica">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Guardar
        </button>
    </form>
</div>

                </div>
            </div>
        </div>
</x-app-layout>