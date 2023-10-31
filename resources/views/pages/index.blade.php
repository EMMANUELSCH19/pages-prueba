@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Seccion de paginas</h1>

        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de la pagina</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->name }}</td>
                        <td>
                            <a href="{{ route('pages.show', $page->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
