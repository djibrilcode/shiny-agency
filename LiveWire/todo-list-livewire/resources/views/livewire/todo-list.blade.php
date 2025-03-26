<div>
    <div class="row">
        <div class="form col-5">
            <form>
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" wire:model.prevent= "todo.title">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Etat</label>
                    <input type="text" class="form-control" wire:model="todo.status" id="status" placeholder="">
                </div>
                <div class="mb-3">
                    <button type="reset" wire:click.prevent="cancel" class="btn btn-secondary">Annuler</button>
                    @if ($updateMode)
                        <button type="submit" wire:click.prevent="update" class="btn btn-primary">Mettre à jour</button>
                    @else
                        <button type="submit" wire:click.prevent="store" class="btn btn-primary">Enregistrer</button>
                    @endif
                </div>
            </form>
        </div>
        <div class=" col-7">
            <h3>List des tâches</h3>
            <table class="table table-responsive table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <th scope="row">{{ $todo->id }}</th>
                            <td>{{ $todo->title }}</td>
                            <td>{{ $todo->status }}</td>
                            <td>
                                <button type="button" wire:click.prevent="edit({{ $todo->id }})" class="btn btn-warning btn-sm">Modifier</button>
                                <button type="button" wire:click.prevent="delete({{ $todo->id }})" class="btn btn-danger btn-sm">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
