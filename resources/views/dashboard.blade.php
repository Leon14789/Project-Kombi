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
                <h1 class="text-aling-center">SESSÃO DOS BANNERS</h1>

                    <form action="{{ route('carrossel.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-3">
                            <label for="image1">Imagem 1:</label>
                            <input type="file" name="image1" id="image1">
                        </div>
                        <div class="p-3">
                            <label for="image2">Imagem 2:</label>
                            <input type="file" name="image2" id="image2">
                        </div>
                        <div class="p-3">
                            <label for="image3">Imagem 3:</label>
                            <input type="file" name="image3" id="image3">
                        </div class="p-3">
                        <div class="p-3">
                            <button type="submit">Salvar Carrossel</button>
                        </div>
                    </form>

                    @if(session('status'))
                    <p>{{ session('status') }}</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>