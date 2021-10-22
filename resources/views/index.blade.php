@extends('templates.template')

@section('content')
    <h1 class = "text-center">Crud Funcionários<h1>

    <div class = "text-center mt-3 mb-4">
        <a href = "">
            <button class = "btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salário</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($func as $funcs)
                    @php
                        $cargo = $funcs -> find($funcs -> id) -> relCargo;
                    @endphp
                    <tr>
                        <th scope="row">{{$funcs -> id}}</th>
                        <td>{{$funcs -> nome}}</td>
                        <td>{{$funcs -> sobrenome}}</td>
                        <td>{{$cargo -> descricao}}</td>
                        <td>{{$funcs -> salario}}</td>
                        <td>
                            <a href="">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>

                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>

                            <a href="">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection