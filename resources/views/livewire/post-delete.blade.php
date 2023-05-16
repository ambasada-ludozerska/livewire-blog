<div class='container-sm w-50 mx-auto shadow border border-3 rounded rounded-10 m-3 p-3'>
<h3 class='alert alert-danger w-100 mx-auto'><b>Czy na pewno chcesz usunąć ten post?</b></h3>
        <h4 class='w-25 mx-auto text-center fw-bold fst-italic'>{{$post['title']}}</h4>
        <form class='mx-auto w-25 m-2 p-2' wire:submit.prevent>
            <button class='btn btn-primary w-auto' wire:click='cancel'>NIE</button>
            <button class='btn btn-danger w-auto' wire:click='delete'>TAK</button>
        </form>
</div>
