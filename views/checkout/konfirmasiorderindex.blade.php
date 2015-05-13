@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>
</div>
@endif

@if(Session::has('error'))
<div class="error" id='message' style='display:none'>             
    {{Session::get('error')}}
</div>
@endif

@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
    <p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>         
</div>
@endif

@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
    <p>Maaf, email anda tidak ditemukan.</p>          
</div>
@endif  

<section style="margin-bottom:40px">
    <div class="row">
        <div class="six columns aside">
            <form action="{{url('konfirmasiorder')}}" method="post">
                <div class="title">
                    <h4>Konfirmasi Order</h4>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight" for="email"><strong>Kode Order</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" name='kodeorder' required />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                    </div>
                    <div class="nine columns">
                        <div class="medium metro rounded btn primary" type="submit">
                            <button>Cari Kode</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="six columns">
            <div style="text-align: center">
                @foreach(vertical_banner() as $banner)
                {{HTML::image(banner_image_url($banner->gambar),'banner')}}
                @endforeach
            </div>
        </div>
    </div>
</section>