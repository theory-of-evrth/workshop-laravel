@extends('layout.app')

@section('title', 'Books')

@section('navigationbar')
    @parent
@endsection

@section('content')
    <p>Books available: </p>

    <a href="createbook" class="btn btn-primary float-right mb-2">Ajouter un livre</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Pages</th>
                <th scope="col">Quantité</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>

    @foreach ($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->pages }}</td>
        <td>{{ $book->quantity }}</td>
        <td>
            <a class="btn btn-info" href="TODO route Laravel">Afficher</a>
            <a class="btn btn-primary" href="editbook">Modifier</a>
            <form action="TODO route Laravel" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

        </tbody>
    </table>

@endsection
