<div class='container-lg mx-auto'>
    <button class='btn btn-secondary w-auto float-start m-3' wire:click='back'>Anuluj</button>
    <form name ='postAdd' class='mx-auto w-100 m-3 p-3 border border-3 shadow rounded rounded-10' wire:submit.prevent='create'>
        <h3 class='w-25 mx-auto'>Nowy post</h3>
        <label for='title' class='form-label'>Tytuł: </label>
        <input type='text' id='title' class='form-control' wire:model.lazy='title'>
        <label for='content' class='form-label'>Treść posta: </label>
        <textarea rows='20' cols='80' id='content' class='form-control' form='postAdd' wire:model.lazy='content'></textarea><br>
        <button type='submit' class='btn btn-primary w-100'>Dodaj</button>
    </form>

</div>
