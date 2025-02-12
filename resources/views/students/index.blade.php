@include('partials.header')
    <ul>
        @foreach ($students as $student)
           <li> {{$student->gender}} {{$student->gender_count}}</li>
        @endforeach
    </ul>
@include('partials.footer')