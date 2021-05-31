@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <h1>Employees:</h1>
        <ul>
            @foreach ($employees as $employee)
                <li class="employee">
                    {{$employee -> firstname}}
                    {{$employee -> lastname}}
                    <ul>
                        @foreach ($employee->tasks as $task )
                            <li class="tasks">
                                {{$task -> title}}
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>

    </main>
@endsection
