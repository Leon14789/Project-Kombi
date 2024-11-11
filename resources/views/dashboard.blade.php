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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-aling-center">SESSÃO DAS PERGUNTAS</h1>

                    <form action="{{ route('question.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-3">
                            <label for="title">Titulo da 1° pergunta</label>
                            <!-- Adicionando a classe text-dark para o texto do input -->
                            <input type="text" name="title" id="title" class="form-control text-dark">

                            <label for="descrption">Resposta da 1° pergunta</label>
                            <input type="text" name="descrption" id="descrption" class="form-control text-dark">
                        </div>

                        <div class="p-3">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>

                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-aling-center">SESSÃO DAS PERGUNTAS</h1>

                    @if($budgets->isNotEmpty())
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($budgets as $budget)
                                <tr >
                                    <td scope="row">{{ $budget->name }}</td>
                                    <td scope="row">{{ $budget->email }}</td>
                                    <td scope="row">{{ $budget->telephone }}</td>
                                    <td scope="row">
                                        <!-- Botão para enviar mensagem no WhatsApp -->
                                        <a href="https://wa.me/{{ $budget->telephone }}?text=Ol%C3%A1%20Boa%20Tarde"
                                            target="_blank"
                                            class="btn btn-success btn-sm"
                                            title="Enviar WhatsApp">
                                            <i class="fab fa-whatsapp"></i> Enviar
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-center text-muted">Nenhum orçamento encontrado.</p>
                    @endif


                </div>
            </div>
        </div>
    </div>

</x-app-layout>