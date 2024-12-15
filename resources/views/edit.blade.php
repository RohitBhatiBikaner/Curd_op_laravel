<div>
    
    <form action="/category/{{$info['id']}}" method="POST"  >
    @csrf
    @method('put');
    <br>
    Name: <input type="text" name="name" value="{{$info['name']}}" >
    <br>
    Description: <textarea name="description" >{{$info['description']}}</textarea>
    <button>Go</button>


</form>
</div>