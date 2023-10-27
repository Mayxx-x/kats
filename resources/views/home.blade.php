@extends('index')
@section('content')
{{--? Home --}}
<h1 class="text-7xl mt-32 font-extralight text-center my-10">Bem Vindo ao <em>Kats!</em></h1>
<main class="max-w-4xl mx-auto">
    <section class="w-full">
        {{--? Sessao De Criar Perfil --}}
        <article class="w-100 grid gap-4 mb-10">
            <h2 class="text-center text-2xl font-extralight"> Ja Possui Conta? </h2>
            <div id="index-account" class="flex gap-10 justify-center mb-10">
                <button id="new-acc-btn" class="bg-[#E05930] hover:bg-[#ff7045] rounded-md">Registrar</button>
                <button id="login-btn" class="bg-[#27DF89] hover:bg-[#6ffdbb] rounded-md">Login</button>
            </div>
            <button id="an-kat-send" class="bg-[#2A1A1F] hover:bg-[#492b35] mx-auto rounded-md">Enviar um Kat Anonimamente</button>
        </article>

        {{--? Profile Search --}}
        <div class="w-full grid bg-[#621f6e40] px-10 pb-10 pt-5 rounded-md shadow-xl">
            <h2 class="text-center my-4 font-extralight text-3xl text-white"> Pesquisar Perfis: </h2>
            <input class="p-4 text-xl rounded w-full mx-auto" type="text">
        </div>
    </section>
</main>
@endsection