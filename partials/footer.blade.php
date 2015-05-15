        <aside class="first">
            <div class="row">
                <div class="three columns">
                    <h4 class="title">{{short_description(Theme::place('title'),23)}}</h4>
                    <div class="social">
                        @if(!empty($kontak->fb))
                        <a href="{{url($kontak->fb)}}">
                            <i class="icon-facebook"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->tw))
                        <a href="{{url($kontak->tw)}}">
                            <i class="icon-twitter"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->pt))
                        <a href="{{url($kontak->pt)}}">
                            <i class="icon-pinterest"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->ig))
                        <a href="{{url($kontak->ig)}}">
                            <i class="icon-instagram"></i>
                        </a>
                        @endif
                    </div>
                    <p>{{--short_description($aboutUs[1]->isi,230)--}}</p>
                </div>
                <div class="five columns">
                    <h4>Subscribe</h4>
                    <form action="{{@$mailing->action}}" method="post" target="_blank">
                        <div class="append field">
                            <input class="wide email input" type="email" placeholder="Enter your email" {{ @$mailing->action==''?'disabled="disabled"':'' }} />
                            <div class="medium primary btn">
                                <button type="submit" {{ @$mailing->action==''?'disabled style="cursor:default"':'' }}>Subscribe</button>
                            </div>
                        </div>
                        <p>Get special promo and product to your email.</p>
                    </form>
                </div>
                <div class="four columns">
                    <h4>Get In Touch</h4>
                    <ul>
                        <li>
                            <i class="icon-home"></i>
                            {{$kontak->alamat}}
                        </li>
                        <li>
                            <i class="icon-phone"></i>@if(empty($kontak->telepon) && empty($kontak->hp))
                            -
                            @elseif(!empty($kontak->telepon) && empty($kontak->hp))
                            {{$kontak->telepon}}
                            @elseif(empty($kontak->telepon) && !empty($kontak->hp))
                            {{$kontak->hp}}
                            @else
                            {{$kontak->telepon.' - '.$kontak->hp}}
                            @endif
                        </li>
                        <li>
                           <i class="icon-mobile"></i> {{$kontak->bb}} <small>(BBM)</small>
                        </li>
                        <li>
                           <i class="icon-mail"></i> {{$kontak->email}}
                        </li>
                        <li>
                            <i class="icon-a"></i> {{ymyahoo($kontak->ym)}}
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <aside class="last">
            <div class="row">
                @foreach($tautan as $group)
                <div class="three columns">
                    <h4>{{$group->nama}}</h4>
                    <ul>
                    @foreach($quickLink as $link)
                        @if($group->id == $link->tautanId)
                        <li>
                            @if($link->halaman=='1')
                                @if($link->linkTo == 'halaman/about-us')
                                <a href="{{url(strtolower($link->linkTo))}}">{{$link->nama}}</a>
                                @else
                                <a href='{{url("halaman/".strtolower($link->linkTo))}}'>{{$link->nama}}</a>
                                @endif
                            @elseif($link->halaman=='2')
                                <a href='{{url("blog/".strtolower($link->linkTo))}}'>{{$link->nama}}</a>
                            @elseif($link->url=='1')
                                <a href="http://{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
                            @else
                                <a href='{{url(strtolower($link->linkTo))}}'>{{$link->nama}}</a>
                            @endif
                        </li>
                        @endif
                    @endforeach
                    </ul>
                </div>
                @endforeach
                <div class="three columns">
                    @foreach(list_banks() as $bank)
                    {{HTML::image(bank_logo($bank))}}
                    @endforeach
                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                    <img src="{{url('img/bank/doku.jpg')}}" alt="Doku Payment">
                    @endif
                </div>
            </div>
        </aside>
        <footer>
            <div class="row">
                <div class="twelve columns">
                    &copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com"> Jarvis Store</a>
                    <div class="skiplink small oval btn default"><a href="#" gumby-goto="[data-target='header-position']"><i class="icon-up-open"></i></a></div>
                </div>
            </div>
        </footer>