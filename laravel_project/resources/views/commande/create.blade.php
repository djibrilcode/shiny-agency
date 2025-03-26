
@extends('layout.App')
@section('content')
@php
    use App\Models\ModeReglement;
    use App\Models\Etat;
    use App\Models\User;
    $mode_reglements = ModeReglement::all();
    $etats = Etat::all();
    $users = User::all();
@endphp
<style>
    .center-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .form-container {
        background-color: #ffffffc6;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 600px;
    }
    .form-label {
        font-weight: bold;
    }
    .form-control, .form-select {
        margin-bottom: 15px;
    }
    .btn-primary {
        width: 100%;
    }
</style>
<div class="container center-form">
    <div class="form-container">
        <h2 class="text-center mb-4">Add New Order</h2>
        <form action="{{ route('commandes.store') }}" method="post">
            @csrf
            <div>
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
                @error('date')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="heure" class="form-label">Time</label>
                <input type="time" name="heure" id="heure" class="form-control" value="{{ old('heure') }}">
                @error('heure')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="regle" class="form-label">Paid</label>
                <select name="regle" id="regle" class="form-select">
                    <option value="1" {{ old('regle') == '1' ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('regle') == '0' ? 'selected' : '' }}>No</option>
                </select>
                @error('regle')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="mode_reglement_id" class="form-label">Payment Method</label>
                <select name="mode_reglement_id" id="mode_reglement_id" class="form-select">
                    @foreach ($mode_reglements as $mode_reglement)
                        <option value="{{ $mode_reglement->id }}" {{ old('mode_reglement_id') == $mode_reglement->id ? 'selected' : '' }}>{{ $mode_reglement->name }}</option>
                    @endforeach
                </select>
                @error('mode_reglement_id')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="etat_id" class="form-label">Status</label>
                <select name="etat_id" id="etat_id" class="form-select">
                    @foreach ($etats as $etat)
                        <option value="{{ $etat->id }}" {{ old('etat_id') == $etat->id ? 'selected' : '' }}>{{ $etat->name }}</option>
                    @endforeach
                </select>
                @error('etat_id')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="user_id" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-select">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection
