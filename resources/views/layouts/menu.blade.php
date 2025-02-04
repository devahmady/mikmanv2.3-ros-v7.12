<div class="nav-header">
    <a href="/dashboard" class="brand-logo">
        <div class="image-bx">
            <img src="{{ asset('assets') }}/images/mikman.png" alt="" class="img-fluid" width="190">
        </div>
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu mm-show" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li class="mm-active"><a  href="/dashboard" >
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">PPP</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16.32c.843 0 1.65.257 2.345.735l-2.345 2.487-2.345-2.487c.695-.478 1.502-.735 2.345-.735zm0-1c-1.479 0-2.817.636-3.787 1.664l3.787 4.016 3.787-4.016c-.97-1.028-2.308-1.664-3.787-1.664zm0-5.116c2.387 0 4.648.876 6.461 2.485l-.969 1.028c-1.556-1.308-3.472-2.018-5.492-2.018-2.021 0-3.937.71-5.492 2.018l-.969-1.028c1.813-1.609 4.074-2.485 6.461-2.485zm0-1c-3.071 0-5.852 1.32-7.864 3.455l2.33 2.472c1.417-1.502 3.373-2.431 5.534-2.431s4.117.929 5.534 2.431l2.33-2.472c-2.012-2.135-4.793-3.455-7.864-3.455zm0-5.204c3.949 0 7.682 1.517 10.607 4.291l-1.021 1.083c-2.656-2.452-6.023-3.791-9.586-3.791s-6.93 1.339-9.586 3.791l-1.021-1.083c2.925-2.774 6.658-4.291 10.607-4.291zm0-1c-4.687 0-8.929 2.015-12 5.272l2.389 2.533c2.459-2.609 5.857-4.222 9.611-4.222s7.152 1.613 9.611 4.222l2.389-2.533c-3.071-3.257-7.313-5.272-12-5.272z"/></svg>
                    <span class="nav-text">PPPoE</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse left" style="">
                    <li><a href="{{ route('pppoe.server') }}">Server</a></li>
                    <li><a href="{{ route('pppoe.profile') }}">Profile</a></li>
                    <li><a href="{{ route('secret.pppoe') }}">Secret</a></li>
                    <li><a href="/pppoe/active">Active</a></li>
                </ul>
            </li>
            <li class="nav-label">Setting</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 8.666c-1.838 0-3.333 1.496-3.333 3.334s1.495 3.333 3.333 3.333 3.333-1.495 3.333-3.333-1.495-3.334-3.333-3.334m0 7.667c-2.39 0-4.333-1.943-4.333-4.333s1.943-4.334 4.333-4.334 4.333 1.944 4.333 4.334c0 2.39-1.943 4.333-4.333 4.333m-1.193 6.667h2.386c.379-1.104.668-2.451 2.107-3.05 1.496-.617 2.666.196 3.635.672l1.686-1.688c-.508-1.047-1.266-2.199-.669-3.641.567-1.369 1.739-1.663 3.048-2.099v-2.388c-1.235-.421-2.471-.708-3.047-2.098-.572-1.38.057-2.395.669-3.643l-1.687-1.686c-1.117.547-2.221 1.257-3.642.668-1.374-.571-1.656-1.734-2.1-3.047h-2.386c-.424 1.231-.704 2.468-2.099 3.046-.365.153-.718.226-1.077.226-.843 0-1.539-.392-2.566-.893l-1.687 1.686c.574 1.175 1.251 2.237.669 3.643-.571 1.375-1.734 1.654-3.047 2.098v2.388c1.226.418 2.468.705 3.047 2.098.581 1.403-.075 2.432-.669 3.643l1.687 1.687c1.45-.725 2.355-1.204 3.642-.669 1.378.572 1.655 1.738 2.1 3.047m3.094 1h-3.803c-.681-1.918-.785-2.713-1.773-3.123-1.005-.419-1.731.132-3.466.952l-2.689-2.689c.873-1.837 1.367-2.465.953-3.465-.412-.991-1.192-1.087-3.123-1.773v-3.804c1.906-.678 2.712-.782 3.123-1.773.411-.991-.071-1.613-.953-3.466l2.689-2.688c1.741.828 2.466 1.365 3.465.953.992-.412 1.082-1.185 1.775-3.124h3.802c.682 1.918.788 2.714 1.774 3.123 1.001.416 1.709-.119 3.467-.952l2.687 2.688c-.878 1.847-1.361 2.477-.952 3.465.411.992 1.192 1.087 3.123 1.774v3.805c-1.906.677-2.713.782-3.124 1.773-.403.975.044 1.561.954 3.464l-2.688 2.689c-1.728-.82-2.467-1.37-3.456-.955-.988.41-1.08 1.146-1.785 3.126"/></svg>
                    <span class="nav-text">Isolir Client</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse left" style="">
                    <li><a href="{{ route('isolir') }}">PPoE</a></li>
                </ul>
            </li>

           
            
        </ul>
        
    </div>
</div>
