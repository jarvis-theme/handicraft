<section style="margin-bottom:40px">
    <div class="row">
        <!-- login section -->
        <div class="six columns aside">
            <form action="{{url('member/forgetpassword')}}" method="post">
                <div class="title">
                    <h4>Forget Password</h4>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight" for="email"><strong>Email</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" id="email" type="email" name="recoveryEmail" required />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                    </div>
                    <div class="nine columns">
                      <div class="medium metro rounded btn primary" type="submit"><button>Reset Password</button></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="six columns">
            <div class="title">
                <h4>New Costumer</h4>
            </div>
            <p>
                By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
                <div class="medium metro rounded btn primary">
                    <a href="{{url('member/create')}}">Register</a>
                </div>
            </p>
        </div>
    </div>
</section>