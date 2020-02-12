@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div class="title"><b>Ajouter une étudiant</b></div>
            <form enctype="multipart/form-data" class="w-35 center" action={{route('addStudent')}} method="POST">
                <div class="field-admin">
                    <label for="convention_id">Convention :</label>
                    <select name="convention_id" id="convention_id" required>
                        <option value="" disabled selected>Sélectionner une convention</option>
                        @foreach($allConventions as $convention)
                            <option value="{{$convention->id}}">{{$convention->name}}</option>
                        @endforeach
                    </select>

                    <label for="firstname">Prenom :</label>
                    <input type="text" name="firstname" id="firstname" required>

                    <label for="lastname">Nom :</label>
                    <input type="text" name="lastname" id="lastname" required>

                    <label for="mail">Mail :</label>
                    <input type="email" name="mail" id="mail" required>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit">Ajouter un étudiant</button>
                </div>
            </form>
        </div>
    </div>
    @include('footer')
@endsection
