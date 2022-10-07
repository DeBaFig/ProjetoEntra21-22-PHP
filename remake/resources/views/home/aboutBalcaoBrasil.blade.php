<x-guest-layout>
<div class="bg-blue-400">
  <div class="bg-gradient-to-r from-sky-200">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="{{ asset('assets/img/work.png') }}">
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-xl title-font font-medium mb-3">Sobre o nosso Projeto!</h2>
                <p class="leading-relaxed text-base">O Balcão Brasil foi pensado e idealizado para ser uma ferramenta de comércio sofisticada e inovadora. Para se diferenciar das demais, na nossa plataforma o vendedor vai em busca do comprador, com intuito de atender as necessidades do cliente. Seguindo esse método, o conforto e a disponibilidade são as prioridades do site, garantindo que o cosumidor possa receber propostas sem perder tempo de buscar o produto, afinal, quem manda é o cliente!</p>
                <p class="leading-relaxed text-base">Nosso projeto foi desenvolvido utilizando o framework Laravel, que é baseado na arquitetura MVC (Model-View-Controller). </p>
                <a class="mt-3 text-indigo-500 inline-flex items-center hover:bg-indigo-100 rounded-full rounded-size" href="{{ route('home') }}">Volte para a página inicial
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-xl title-font font-medium mb-3">Sobre nós</h2>
                <p class="leading-relaxed text-base">Para descobrir quem são as pessoas por trás do nosso projeto e saber um pouco sobre cada um de nós!</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center hover:bg-indigo-100 rounded-full" href="{{ route('sobre') }}">Saiba mais
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
</div>
</x-guest-layout>