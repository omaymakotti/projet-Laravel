@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des cours</h1>
        
        <!-- Bouton Ajouter un cours -->
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Ajouter un cours</a>

        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->start_date }}</td>
                        <td>{{ $course->end_date }}</td>
                        <td>
                            <!-- Bouton modifier -->
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Modifier</a>
                            
                            <!-- Formulaire de suppression -->
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
