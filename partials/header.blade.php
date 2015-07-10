        <header data-target="header-position">
            <div class="row">
                <div class="four columns">
                    @if(@getimagesize(url( logo_image_url() )))
                    <div id="logo">
                        <a href="{{url('home')}}">
                            {{HTML::image(logo_image_url(), 'Logo', array('style'=>'max-width:290px;height:auto;max-height:140px;'))}}
                        </a>
                    </div>
                    @else
                    <div id="logo" style="margin-top:25px">
                        <a style="text-decoration:none" href="{{url('home')}}">
                            {{ short_description(Theme::place('title'),30,array('style'=>'margin-top:10px;')) }}
                        </a>
                    </div>
                    @endif
                </div>
                <div class="four columns">
                    <!-- form pencarian -->
                    <form action="{{url('search')}}" class="append field" style="padding:20px 0;" method="post" role="search">  
                        <input class="wide input" type="text" placeholder="Search" name="search" required />
                        <button class="adjoined icon-left icon-search" type="submit">Cari</button>                 
                    </form>
                </div>

                <div class="four columns " style="padding:20px 0;">
                    <div class="metro rounded btn default fright" id="shoppingcartplace">
                        <a href="{{url('checkout')}}">{{shopping_cart()}}</a>
                    </div>

                    @if(!is_login())
                    <div class="metro rounded btn default fright" style="margin:0 5px 5px 0px;">
                        <a href="{{url('member')}}">Login</a>
                    </div>

                    <div class="metro rounded btn default fright" style="margin:0 5px 5px 5px;">
                        <a href="{{url('register')}}">Daftar</a>
                    </div>
                    @else
                    <div class="metro rounded btn default fright" style="margin:0 5px 5px 5px;">
                        <a href="{{url('logout')}}">Logout</a>
                    </div>
                    <div class="metro rounded btn default fright">
                        <a href="{{url('member')}}">My Account</a>
                    </div>
                    @endif
                    
                </div>
            </div>
        </header>
        <div class="navbar" id="topmenu">
            <div class="row">
                <a href="#" class="toggle" style="left:20px">Menu</a>
                <a class="toggle" gumby-trigger="#topmenu > .row > nav > ul" href="#"><i class="icon-menu"></i></a>
                <nav class="twelve columns">
                    <ul class="nav">
                    @if(count(category_menu()) > 0)
                    {{-- */ $counts = 0; /* --}}
                    @foreach(category_menu() as $menu)  
                        @if($counts < 5)
                            @if($menu->parent == '0') 
                            <li>
                                <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                                @if(count($menu->anak) > 0)
                                <div class="dropdown">
                                    <ul>
                                    @foreach($menu->anak as $submenu)   
                                        @if($submenu->parent == $menu->id)  
                                        <li>
                                            <a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
                                            @foreach($submenu->anak as $submenu2)  
                                                @if($submenu2->parent == $submenu->id)  
                                                <div class="dropdown">
                                                    <ul>
                                                        <li>
                                                            <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                @endif  
                                            @endforeach 
                                        </li>
                                        @endif  
                                    @endforeach 
                                    </ul>
                                </div>
                                @endif
                            @endif
                            {{-- */ $counts+=1; /* --}}
                        </li>
                        @endif
                    @endforeach 
                    @endif
                    </ul>
                </nav> 
            </div>
        </div>