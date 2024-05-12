<header class="flex justify-between items-center py-5 bg-gray-50">
    <div><a href="{{ route('home') }}" class="text-lg "><strong class="text-orange-900">E BlOOD </strong></a></div>
    <nav>
        <ul class="flex flex-col md:flex-row items-center mb-3 md:mb-0">
        @guest
        <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('login') }}" class="hover:text-orange-400">Se connecter</a></li>
        <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('register') }}" class="hover:text-orange-400">S'enregistrer</a></li>
        @else
        @livewire('search')
            <a href="{{ route('user.conversation.index') }}" class="mr-5 hover:text-orange-400  ">Mes conversation</a>
            <a href="{{ route('user.donate.donors') }}" class="mr-5 hover:text-orange-400  ">liste des donneurs</a>
            <a href="{{ route('user.donate.index') }}" class="mr-5 hover:text-orange-400  ">Mes dons</a>
            <a href="{{ route('dashboard') }}" class="mr-5 hover:text-orange-400 ">Tableau de bord</a>
            <a href="{{route('centre.index')}}" class="mr-5 hover:text-orange-400 ">Banques de sang</a>
            <a href="{{ route('logout') }}" class="mr-5 hover:text-red-700 "
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Se déconnecter</a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">@csrf</form>
        @endguest
    </ul>
    </nav>
</header>
