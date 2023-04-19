<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('home') ? 'active' : 'collapsed'}}"
               href="{{route('home')}}">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('urine-tests.create') ? 'active' : 'collapsed'}}"
               href="{{route('urine-tests.create')}}">
                <i class="bi bi-plus-circle"></i><span>Urine Tests</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('bio-chemistry-diagnostic.create') ? 'active' : 'collapsed'}}"
               href="{{route('bio-chemistry-diagnostic.create')}}">
                <i class="bi bi-plus-circle"></i><span>Bio-Chemistry Diagnostic Tests</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('rdt.create') ? 'active' : 'collapsed'}}"
               href="{{route('rdt.create')}}">
                <i class="bi bi-plus-circle"></i><span>RDT's Reports</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('complete-blood-count.create') ? 'active' : 'collapsed'}}"
               href="{{route('complete-blood-count.create')}}">
                <i class="bi bi-plus-circle"></i><span>CBC & ESR Automation</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('bilirubin-bio-chemistry.create') ? 'active' : 'collapsed'}}"
               href="{{route('bilirubin-bio-chemistry.create')}}">
                <i class="bi bi-plus-circle"></i><span>Bilirubin Bio-Chemistry Tests</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('urine-pregnancy.create') ? 'active' : 'collapsed'}}"
               href="{{route('urine-pregnancy.create')}}">
                <i class="bi bi-plus-circle"></i><span>Urine Pregnancy (UPT) Test</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('blood-cross-match.create') ? 'active' : 'collapsed'}}"
               href="{{route('blood-cross-match.create')}}">
                <i class="bi bi-plus-circle"></i><span>Blood Cross-match & Issue Slip</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('seman-analysis-post-coital.create') ? 'active' : 'collapsed'}}"
               href="{{route('seman-analysis-post-coital.create')}}">
                <i class="bi bi-plus-circle"></i><span>Semen Analysis/Post Coital Test</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('clinical-pathology.create') ? 'active' : 'collapsed'}}"
               href="{{route('clinical-pathology.create')}}">
                <i class="bi bi-plus-circle"></i><span>Clinical Pathology</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('abo-blood-group.create') ? 'active' : 'collapsed'}}"
               href="{{route('abo-blood-group.create')}}">
                <i class="bi bi-plus-circle"></i><span>ABO Blood Group</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('urine-tests.index' || 'urine-pregnancy.index' || 'rdt.index' || 'complete-blood-count.index' || 'seman-analysis-post-coital.index' || 'clinical-pathology.index' || 'bio-chemistry-diagnostic.index' || 'bilirubin-bio-chemistry.index' || 'abo-blood-group.index') ? 'collapse show' : 'collapsed'}}"
               data-bs-target="#report-details" data-bs-toggle="collapse" href="#">
                <i class="bi bi-list-columns"></i><span>Reports History</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="report-details"
                class="nav-content {{request()->routeIs('urine-tests.index' || 'urine-pregnancy.index' || 'rdt.index' || 'complete-blood-count.index' || 'seman-analysis-post-coital.index' || 'clinical-pathology.index' || 'bio-chemistry-diagnostic.index' || 'bilirubin-bio-chemistry.index' || 'abo-blood-group.index') ? 'active' : 'collapse'}}"
                data-bs-parent="#sidebar-nav">

                <li>
                    <a class="{{request()->routeIs('urine-tests.index') ? 'active' : 'collapsed'}}"
                       href="{{route('urine-tests.index')}}">
                        <i class="bi bi-circle"></i><span>Urine Tests</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('urine-pregnancy.index') ? 'active' : 'collapsed'}}"
                       href="{{route('urine-pregnancy.index')}}">
                        <i class="bi bi-circle"></i><span>Urine Pregnancy (UPT) Test</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('rdt.index') ? 'active' : 'collapsed'}}"
                       href="{{route('rdt.index')}}">
                        <i class="bi bi-circle"></i><span>RDT's Reports</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('blood-cross-match.index') ? 'active' : 'collapsed'}}"
                       href="{{route('blood-cross-match.index')}}">
                        <i class="bi bi-circle"></i><span>Blood Cross-match & Issue Slip</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('complete-blood-count.index') ? 'active' : 'collapsed'}}"
                       href="{{route('complete-blood-count.index')}}">
                        <i class="bi bi-circle"></i><span>CBC & ESR Automation</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('seman-analysis-post-coital.index') ? 'active' : 'collapsed'}}"
                       href="{{route('seman-analysis-post-coital.index')}}">
                        <i class="bi bi-circle"></i><span>Semen Analysis/Post Coital Test</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('clinical-pathology.index') ? 'active' : 'collapsed'}}"
                       href="{{route('clinical-pathology.index')}}">
                        <i class="bi bi-circle"></i><span>Clinical Pathology</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('bio-chemistry-diagnostic.index') ? 'active' : 'collapsed'}}"
                       href="{{route('bio-chemistry-diagnostic.index')}}">
                        <i class="bi bi-circle"></i><span>Bio-Chemistry Diagnostic Tests</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('bilirubin-bio-chemistry.index') ? 'active' : 'collapsed'}}"
                       href="{{route('bilirubin-bio-chemistry.index')}}">
                        <i class="bi bi-circle"></i><span>Bilirubin Bio-Chemistry Tests</span>
                    </a>
                </li>

                <li>
                    <a class="{{request()->routeIs('abo-blood-group.index') ? 'active' : 'collapsed'}}"
                       href="{{route('abo-blood-group.index')}}">
                        <i class="bi bi-circle"></i><span>ABO Blood Group</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#primary-settings-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear-fill"></i><span>Primary Settings</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="primary-settings-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{route('users.index')}}">
                        <i class="bi bi-circle"></i><span>Add Users</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('doctors.index')}}">
                        <i class="bi bi-circle"></i><span>Doctors</span>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</aside>
