<form action="/category/" method="POST">
    @csrf
    <br>
    Name: <input type="text" name="name">
    <br>
    Description: <textarea name="description"></textarea>
    <button>Go</button>


</form>