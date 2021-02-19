<form method="POST" action="/news/store">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" /><br />
    <label for="body">Text</label>
    <textarea name="body"></textarea><br />
    <input type="submit" name="submit" value="Create news item" />
</form>