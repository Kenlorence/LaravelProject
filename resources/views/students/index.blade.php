@include('partials.header')
    
<header class="max-v-lg mx-auto">
    <a href="#"></a>
    <h1 class="text-4x1 font-bold text-white text-center">Student List</h1>
</header>
<section class="mt-10">
    <div class=".overflow-x-auto relative  ">
            <table class="w-full text-left text-gray-500">
                <thead class="text-xs gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                                First name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Last name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Age
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-gray-800 border-b text-white">
                        <td class="py-4 px-6">
                            {{$student->first_name}}
                        </td>
                        <td class="py-4 px-6">
                            {{$student->last_name}}
                        </td>
                        <td class="py-4 px-6">
                            {{$student->email}}
                        </td>
                        <td class="py-4 px-6">
                            {{$student->age}}
                        </td>
                     
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</section>







@include('partials.footer')

{{-- 
 <ul>
        @foreach ($students as $student)
           <li> {{$student->gender}} {{$student->gender_count}}</li>
        @endforeach
    </ul>

--}}
   