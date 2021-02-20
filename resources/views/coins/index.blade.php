@extends('layouts.main')

@section('content')
<h1>List of coins</h1>
<p>
    <a href="{{ route('coins.create') }}">Create a coin</a>
</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Short name</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coins as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->short_name }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('coins.edit', ['coin' => $item]) }}">
                        Update
                    </a>
                    <form action="{{ route('coins.destroy', ['coin' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
