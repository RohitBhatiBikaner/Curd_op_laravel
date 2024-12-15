

  <title>Basic HTML Table</title>



<h2>Basic HTML Table</h2>
<div style="text-align: center" >
<table border="2px" style="text-align: center" >
  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Description</th>
    <th>Action</th>
    
  </tr>
  @foreach ($data as $info )
      
  <tr>
    <td>{{$loop->iteration}}</td>
    <td><a href="/category/{{$info['id']}}/edit"> {{$info['name']}}</a></td>
    <td>{{$info['description']}}</td>
    <td><form action="{{ route('category.destroy', $info->id) }}" method="POST">
    @csrf
    @method('delete')
    <button>Delete</button>    
    
    </form></td>
  </tr>
  @endforeach
</table>
</div>
