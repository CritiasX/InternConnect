<div class="block mt-5 ml-5">
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="cursor-pointer mt-5 ml-5 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Logout</button>
    </form>
</div>