<div class='container-md w-75 mx-auto m-3 p-3 border border-3 shadow rounded rounded-10'>
    <button class='btn btn-secondary w-auto float-start' wire:click='back'>Anuluj</button>
    <form class='w-100 mx-auto p-3 m-3 rounded rounded-10' wire:submit.prevent='save'>
        <h3 class='w-50 mx-auto text-center'>Edytuj post:</h3>
        <label for='title' class='form-label'>Tytuł: </label>
        <input type='text' class='form-control' wire:model.lazy='title'>
        <label for='content' class='form-label'>Treść: </label>
        <textarea rows='20' cols='80' class='form-control' wire:model.lazy='content'></textarea>
        <button type='submit' class='btn btn-primary w-100'>Zapisz</button>
    </form>
</div>
