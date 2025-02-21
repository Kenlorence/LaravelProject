@include('partials.header')
   <header class="max-v-lg mx-auto">
        <a href="#"></a>
        <h1 class="text-4x1 font-bold text-white text-center">Admin Login</h1>
   </header>
   <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1 ">
        <section>
            <h1 class="font-bold text-2x-1">Welcome to Student System</h1>
            <p class="text-gray-600 pt-2">Sign in </p>
        </section>
        <section class="mt-10">
                <form action="" class="flex flex-col">
                        <div class=".mb-6.pt-3.rounded bg-gray-200">
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2 ml-3 mt-2">Email</label>
                            <input type="Email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3 ">
                         </div>
                         <div class=".mb-6.pt-3.rounded bg-gray-200">
                            <label for="Password" class="block text-gray-700 text-sm font-bold mb-2 ml-3 mt-2 ">Password</label>
                            <input type="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                         </div>
                         <button class="bg-purple-600 hover-bg-purple-700 mt-2 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1 transition duration-200" type="submit">Login</button>  
                </form>
        </section>
   </main>
@include('partials.footer')