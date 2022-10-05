<x-guest-layout>
    <div class="bg-blue-400">
        <div class="bg-gradient-to-r from-sky-200">
            <section class="text-black-400 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="text-2xl font-medium title-font mb-4 text-black tracking-widest">SOBRE NÓS</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-justify">Somos alunos do Entra21©, que juntos formaram o grupo 1 da turma de PHP. Unindo conhecimento e criatividade, demos ínicio ao projeto "Balcão Brasil". Todos os integrantes contribuíram positivamente para o trabalho, dedicando tempo e concentração com a intenção de obter o melhor resultado. Agradecimentos especiais ao nosso instrutor Adriano Machado, por todo o conhecimento passado e suporte prestado; ao demais alunos da nossa turma; e também a ProWay, por nos ter dado a oportunidade de participar das aulas e viver tudo que foi vivido.
                        <p>
                    </div>
                    <div class="flex flex-wrap -m-4 justify-center">

                        @foreach($viewData['info'] as $key => $detalhes)
                        <div class="p-4 lg:w-1/2">
                            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4 shadow-2xl" src="{{ asset('assets/img/' . $detalhes['img'] )}}">
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg text-black">
                                        {{ $detalhes['name']}}
                                    </h2>
                                    <h3 class="text-black-500 mb-3">
                                        {{ $detalhes['city']}}
                                    </h3>
                                    <p class="mb-4">{{ $detalhes['desc']}}</p>
                                    <span class="inline-flex">
                                        <a class="rounded-lg text-slate-900 font-semibold transition flex items-center gap-3 text-[0.8125rem] leading-6 py-1 px-1.5 hover:bg-slate-900/[0.03] -my-1 -mx-1.5" href="{{ $detalhes['link']}}">
                                            <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-slate-900">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z"></path>
                                            </svg>GitHub</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-guest-layout>