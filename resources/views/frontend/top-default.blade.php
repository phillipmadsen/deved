<!-- Top Bar ============================================= -->
<div id="top-bar">
 
    <div class="container clearfix">

        <div class="col_half nobottommargin clearfix">

            <!-- Top Links ============================================= -->
             <div class="top-links">
                <ul>
                    <li><a href="{!! url('/' . getLang()) !!}">Home</a></li>
                    <li><a href="{!! url('/' . getLang()) !!}/faqs">FAQs</a></li>
                    <li><a href="{!! url('/' . getLang()) !!}/contact">Contact</a></li>
                    <li><a href="/admin/login">Login</a>
                        <div class="top-link-section">
                     {!! Form::open(['route' => 'admin.login', 'method' => 'post', 'id' => 'top-login']) !!}

                        {!! Form::token() !!}           
                            <form id="top-login" class="" name="login" role="form">
                                <div class="input-group" id="top-login-email">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required="">
                                </div>
                                <div class="input-group" id="top-login-password">
                                    <span class="input-group-addon"><i class="icon-key"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                </div>
                                <label class="checkbox">
                                  <input type="checkbox" value="remember-me"> Remember me
                                </label>
                                {!! Form::submit('Sign in', array('class' => 'btn btn-danger btn-block')) !!}
                                 
                            </form>
                            {!! Form::close() !!}
                        </div>
                    </li>
                </ul>
            </div><!-- .top-links end -->

        </div>

        <div class="col_half fright col_last clearfix nobottommargin">

            <!-- Top Social ============================================= -->
            <div id="top-social">
                <ul>
                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                    <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                    <li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
                    <li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
                    <li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="tel:+18002640644" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+1.800.2640644</span></a></li>
                    <li><a href="mailto:info@graceframe.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@graceframe.com</span></a></li>
                </ul>
            </div><!-- #top-social end -->

        </div>

    </div>

</div><!-- #top-bar end -->
