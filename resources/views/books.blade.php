@extends('layout.app')

@section('title', 'Books')

@section('navigationbar')
    @parent
@endsection

@section('content')
    <p>Books available: </p>

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
            --actions--
        </td>
    </tr>
    @endforeach

        </tbody>
    </table>

@endsection
