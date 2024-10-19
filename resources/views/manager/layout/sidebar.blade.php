@inject('ticketService', 'App\Services\Manager\TicketService')
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="#">
                    {{--                    <div class="brand-logo"></div>--}}
                    <h2 class="brand-text mb-0 pl-5">Менеджер</h2>
                </a>
            </li>
            {{--            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>--}}
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a
                    href="{{route('manager.applications.index')}}" class="if-pb-0"><i class="feather icon-list"></i><span class="menu-title">Заявки</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{route('manager.clients.index')}}" class="if-pb-0"><i class="feather icon-list"></i><span class="menu-title">Клиенты</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{route('manager.topics.index')}}" class="if-pb-0"><i class="feather icon-list"></i><span class="menu-title">Темы заявок</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{route('manager.courts.index')}}" class="if-pb-0"><i class="feather icon-list"></i><span class="menu-title">Суды</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{route('manager.lawyers.index')}}" class="if-pb-0"><i class="feather icon-list"></i><span class="menu-title">Юристы</span></a>
            </li>
            <li class="nav-item"><a
                    href="{{route('manager.profile.index')}}" class="if-pb-0"><i class="feather icon-list"></i><span class="menu-title">Ваш профиль</span></a>
            </li>
            @php
            $unreadCount = $ticketService->getUnreadMessagesCount(auth()->id());
            @endphp
            <li class="nav-item"><a
                    href="{{route('manager.tickets.index')}}" class="if-pb-0"><i class="feather icon-list"></i><span class="menu-title">Помощь
                        @if($unreadCount)<span class="text-danger">+{{$unreadCount}}</span> @endif</span></a>
            </li>
        </ul>
    </div>
</div>
