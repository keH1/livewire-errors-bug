<form wire:submit="create">
    @dump($sent)
    @dump($errors)
    <input wire:model="name" placeholder="Name">
    <button type="submit">Отправить</button>
</form>
