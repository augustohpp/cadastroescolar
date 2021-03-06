<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                {{-- MOSTRA NOME USUARIO LOGADO  --}}

                <li class="nav-item">
                    <hr style="margin-top: 0px; margin-bottom: 0px; margin: 0px">
                    <a style="margin-top: 0px !important;">
                        <i class="fas fa-user"></i>
                        <p>@if (strlen(Auth::user()->name) > 19)
                            {{ substr(Auth::user()->name, 0, 16).'...'}}
                @else
                {{ Auth::user()->name }}
                @endif
                </p>
                </a>
                <hr style="margin-top: 0px; margin-bottom: 5px;">
                </li>

                <li class="nav-item {{ (request()->Is('/')) ? 'active' : '' }}" class="sr-only">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        <p>Menu Incial</p>
                    </a>
                </li>

                <li class="nav-item {{ (request()->routeIs('listaAluno')) || (request()->routeIs('cadastroAluno'))  ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne" href="#base">
                        <i class="far fa-address-card"></i>
                        <p>Alunos</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->routeIs('cadastroAluno')) || (request()->routeIs('listaAluno')) || (request()->routeIs('pdf')) ? 'show' : '' }}"
                        aria-controls="collapseOne" id="base">
                        <ul class="nav nav-collapse ">
                            <li class="{{ (request()->routeIs('cadastroAluno')) ? 'active' : '' }}">
                                <a href="{{ route('cadastroAluno') }}">
                                    <span class="sub-item">Cadastro</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('listaAluno')) ? 'active' : '' }}">
                                <a href="{{ route('listaAluno') }}">
                                    <span class="sub-item">Lista</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('pdf')) ? 'active' : '' }}">
                                <a href="{{ route('pdfAluno') }}">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item {{ (request()->routeIs('listaTurma')) || (request()->routeIs('cadastroTurma'))  ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-graduation-cap"></i>
                        <p>Turmas</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->routeIs('cadastroTurma')) || (request()->routeIs('listaTurma')) || (request()->routeIs('pdf')) ? 'show' : '' }}" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="{{ (request()->routeIs('cadastroTurma')) ? 'active' : '' }}">
                                <a href="{{ route('cadastroTurma') }}">
                                    <span class="sub-item ">Cadastro</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('listaTurma')) ? 'active' : '' }}">
                                <a href="{{ route('listaTurma') }}">
                                    <span class="sub-item">Lista</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('pdfTurma') }}">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item {{ (request()->routeIs('listaProfessor')) || (request()->routeIs('cadastroProf'))  ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#sidebarLayouts2">
                       <i class="fas fa-users"></i>
                        <p>Professores</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->routeIs('cadastroProf')) || (request()->routeIs('listaProfessor')) || (request()->routeIs('pdf')) ? 'show' : '' }}" id="sidebarLayouts2">
                        <ul class="nav nav-collapse">
                            <li class="{{ (request()->routeIs('cadastroProf')) ? 'active' : '' }}">
                                <a href="{{ route('cadastroProf') }}">
                                    <span class="sub-item">Cadastro</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('listaProfessor')) ? 'active' : '' }}">
                                <a href="{{ route('listaProfessor') }}">
                                    <span class="sub-item">Lista</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('pdfProfessor') }}">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                @if(Gate::denies('create-users'))
                <li class="nav-item {{ (request()->RouteIs('listaUser')) ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne" href="#base3">
                        <i class="fas fa-users-cog"></i>
                        <p>Usuários</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->routeIs('listaUser')) || (request()->routeIs('pdf')) ? 'show' : '' }}"
                        aria-controls="collapseOne" id="base3">
                        <ul class="nav nav-collapse ">
                            <li class="">
                                <a href="{{ route('register') }}">
                                    <span class="sub-item">Cadastro</span>
                                </a>
                            </li>
                                <li class="{{ (request()->routeIs('listaUser')) ? 'active' : '' }}">
                                <a href="{{ route('listaUser') }}">
                                    <span class="sub-item">Lista</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('pdf')) ? 'active' : '' }}">
                                <a href="route('pdf')">
                                    <span class="sub-item">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                <li class="nav-item">
                    <a data-toggle="collapse" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- End Sidebar -->
