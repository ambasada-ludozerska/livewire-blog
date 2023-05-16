<div>
<div class='container-xl mx-auto w-75 border border-3 rounded rounded-10 shadow'>
    <br>
<h6 class='w-25 mx-auto'>Wyszukaj po nazwie: <input type='text' wire:model.debounce.150='search'></h6><br>
<div class='w-75 mx-auto'><h1 class='w-25 mx-auto'>Posty</h1> <button class='w-25 btn btn btn-secondary m-2 float-end' wire:click='add'>Dodaj post</button></div>
<table class='table table-bordered table-striped table-hover w-100 mx-auto border border-3 rounded rounded-10 shadow'>
    <tr>
    <th class='w-25'>Data utworzenia</th><th class='w-50'>Tytuł</th><th class='w-25' colspan='2'></th>
    </tr>
    @foreach($posts as $post)
    <tr>
    <td>{{$post['created_at']}}</td>
        <td><a href="/{{$post['id']}}">{{$post['title']}}</a></td>
        <td><button class='btn btn-small w-75 mx-auto' wire:click='edit({{$post["id"]}})'>Edytuj</button></td>
        <td><button class='btn btn-small btn-danger w-75 mx-auto' wire:click='delete({{$post["id"]}})'>Usuń</button></td>
    </tr>
    @endforeach
</table>
    <br>
    <div class='w-25 mx-auto'>{{ $posts->links() }}</div>
</div>
</div>
