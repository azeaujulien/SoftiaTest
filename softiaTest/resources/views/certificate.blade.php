@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div class="title"><b>Ajouter une attestation</b></div>
            <form enctype="multipart/form-data" class="w-35 center" action={{route('addCertificate')}} method="POST">
                <div class="field-admin">
                    <label for="student_id">Etudiant</label>
                    <select name="student_id" id="student_id" onchange="studentVal()" required>
                        <option value="" disabled selected>Sélectionner un étudiant</option>
                        @foreach($allStudents as $student)
                            <option value="{{$student->id}}">{{$student->firstname}} {{$student->lastname}}</option>
                        @endforeach
                    </select>

                    <label for="convention_id"></label>
                    <input type="number" name="convention_id" id="convention_id" hidden>

                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="65" rows="7">
                        Choissisez un étudiant ...
                    </textarea>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit">Ajouter une attestation</button>
                </div>
            </form>
        </div>
    </div>
    @include('footer')

    <script>
        function studentVal()
        {
            let conventionInput = document.getElementById('convention_id');

            let studentMessage = document.getElementById('message');
            let studentSelect = document.getElementById('student_id');
            let studentSelectVal = studentSelect.value;

            let student = allStudents[studentSelectVal - 1];
            let convention = allConventions[student['convention_id'] - 1];

            let message = "Bonjour " + student['firstname'] + " " + student['lastname'] + "," + "\n\n" +
                "Vous avez suivi " + convention['nbHours'] +
                " de formation chez FormationPlus. \nPouvez-vous nous retourner ce mail avec la pièce jointe signée.\n\n"
                + "Cordialement, \nFormationPlus";

            studentMessage.textContent = message;
            studentMessage.value = message;

            conventionInput.value = student['convention_id'];
        }
    </script>
@endsection
