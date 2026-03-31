<h1>about</h1>
    @foreach($books as $book)
        <li>
            <h2>{{ $name->name }}</h2>
            <h2>{{ $email->email }}</h2>
            <h2>{{ $book->response }}</h2>
        </li>
    @endforeach
<a href="/books">books</a>