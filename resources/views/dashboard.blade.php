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


                    <a href=" route('personalinfo.show', $info->id)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Ver datos guardados
                    </a>


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