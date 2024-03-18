@extends('layout.basic')
@section('title', 'articles')

@section('content')
    <h1>Lista articulos</h1>
    <table>
        <thead>
            <tr>
                <th>Articulo</th>
                <th>Descripcion</th>
                <th>P.compra</th>
                <th>P. venta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>
                        <a href = "{{ route('article.show', ['article'=>$articulo])}}">
                            {{$articulo->name}}
                        </a>
                    </td>
                    <td>{{$articulo->description}}</td>
                    <td>{{$articulo->sell_price}}</td>
                    <td>{{$articulo->shop_price}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection