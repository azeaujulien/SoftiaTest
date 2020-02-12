@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div class="title"><b>Ajouter une convention</b></div>
            <form enctype="multipart/form-data" class="w-35 center" action={{route('addConvention')}} method="POST">
                <div class="field-admin">
                    <label for="name">Nom :</label>
                    <input type="text" name="name" id="name" required>

                    <label for="nbHours">Nombre d'heure :</label>
                    <input type="number" name="nbHours" id="nbHours" required>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit">Ajouter une convention</button>
                </div>
            </form>
        </div>
    </div>
    @include('footer')
@endsection
