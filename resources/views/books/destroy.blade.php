<form action="/books/{{ $singleBook->id }}/destroy" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Dzēst">
</form>

<h2>{{ title }}</h2>
<h3>{{ author }}</h3>
<p>{{ released_at }}</p>
<a href="/books">All books</a> 