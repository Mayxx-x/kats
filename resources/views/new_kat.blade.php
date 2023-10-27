@extends('index')

@section('content')
    <section id="new_kat_form" class="max-w-xl mx-auto mt-32">
        <h1 class="text-center font-extralight text-4xl"> Crie o Perfil do Bichano: </h1>

        <form action="" class="grid px-5 pt-5 shadow-xl rounded-xl">
            <label for=""> Nome: </label>
            <input type="text" name="nome">

            <label for=""> Idade: </label>
            <input type="number" name="idade">

            <label for=""> Genero: </label>
            <Select name="sexo">
                <option value="male">Macho</option>
                <option value="female">Femea</option>
                <option value="non-b">Nao Binario</option>
            </Select>

            <label for=""> Raça: </label>
            <Select name="raca">
                <option value="frajola">Frajola</option>
                <option value="laranja">Laranja</option>
                <option value="branco">Branco</option>
                <option value="other">Outro</option>
            </Select>

            <label for=""> Resumo: </label>
            <input type="text" name="resumo" id="">

            <label for="">Foto de Perfil: </label>
            <input type="file" name="foto" id="">

            <input id="submit-btn" class="w-100 rounded-lg bg-[#31e475]" type="submit" value="Enviar">
        </form>
    </section>
@endsection