

<section style="margin-bottom:40px">
	<div class="row">
		<h3 class="title">Testimonial</h3>
	</div>
	<div class="row">
        @foreach(list_testimonial() as $testi)
		<article class="col-lg-12" style="margin-bottom:10px">
            <h4><strong>{{$testi->nama}}</strong></h4>
            <p>
                <i class="icon-calendar"></i> {{date("d M Y", strtotime($testi->updated_at))}}
            </p>
            {{short_description($testi->isi,400)}}
            <br><hr>
        </article>
        @endforeach
        {{list_testimonial()->links()}}
        <div class="row section" style="margin-top: 40px;">
            <div class="col-lg-12">
                <div class="respond">
                    <form class="" action="{{url('testimoni')}}" method="post">
                        <h3>Kirim Testimonial</h3>
                        <ul>
                            <li class="field">
                                <label for="name">Nama</label>
                                <input class="text input" id="name" type="text" name="nama" required/>
                            </li>
                            <li class="field">
                                <label for="message">Pesan</label>
                                <textarea class="input textarea" id="message" rows="3" name="testimonial" required></textarea>
                            </li>
                        </ul>
                        <div class="medium metro rounded btn primary">
                            <button type="submit">Submit</button>
                        </div>
                        <div class="pretty medium default btn">
                            <button type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>