@extends('layouts.auth2')
@section('title', __('lang_v1.login'))
@inject('request', 'Illuminate\Http\Request')
@section('content')
    @php
        $username = old('username');
        $password = null;
        if (config('app.env') == 'demo') {
            $username = 'admin';
            $password = '123456';

            $demo_types = [
                'all_in_one' => 'admin',
                'super_market' => 'admin',
                'pharmacy' => 'admin-pharmacy',
                'electronics' => 'admin-electronics',
                'services' => 'admin-services',
                'restaurant' => 'admin-restaurant',
                'superadmin' => 'superadmin',
                'woocommerce' => 'woocommerce_user',
                'essentials' => 'admin-essentials',
                'manufacturing' => 'manufacturer-demo',
            ];

            if (!empty($_GET['demo_type']) && array_key_exists($_GET['demo_type'], $demo_types)) {
                $username = $demo_types[$_GET['demo_type']];
            }
        }
    @endphp
    <div class="row">
        <div class="col-md-4">
            @if (config('app.env') == 'demo')
                @component('components.widget', [
                    'class' => 'box-primary pos-card',
                    'header' => '<h4 class="text-center" style="font-size: 15px;">Demo Shops <br><small style="font-size:12px; font-weight:normal; color:#64748b;">Click button to login</small></h4>',
                ])
                    <div style="display:flex; flex-direction:column; gap:8px;">
                        <a href="?demo_type=all_in_one" class="btn btn-pos-secondary demo-login" data-admin="{{ $demo_types['all_in_one'] }}" style="width:100%; text-align:left;"> <i class="fas fa-star" style="width:20px;"></i> All In One</a>
                        <a href="?demo_type=pharmacy" class="btn btn-pos-secondary demo-login" data-admin="{{ $demo_types['pharmacy'] }}" style="width:100%; text-align:left;"><i class="fas fa-medkit" style="width:20px;"></i> Pharmacy</a>
                        <a href="?demo_type=services" class="btn btn-pos-secondary demo-login" data-admin="{{ $demo_types['services'] }}" style="width:100%; text-align:left;"><i class="fas fa-wrench" style="width:20px;"></i> Services</a>
                        <a href="?demo_type=electronics" class="btn btn-pos-secondary demo-login" data-admin="{{ $demo_types['electronics'] }}" style="width:100%; text-align:left;"><i class="fas fa-laptop" style="width:20px;"></i> Electronics</a>
                        <a href="?demo_type=super_market" class="btn btn-pos-secondary demo-login" data-admin="{{ $demo_types['super_market'] }}" style="width:100%; text-align:left;"><i class="fas fa-shopping-cart" style="width:20px;"></i> Super Market</a>
                        <a href="?demo_type=restaurant" class="btn btn-pos-secondary demo-login" data-admin="{{ $demo_types['restaurant'] }}" style="width:100%; text-align:left;"><i class="fas fa-utensils" style="width:20px;"></i> Restaurant</a>
                    </div>
                @endcomponent
            @endif
        </div>
        <div class="col-md-4">
            <div class="pos-auth-card" style="margin: 0 auto;">
                
                <h1 class="pos-auth-title">
                    @lang('lang_v1.welcome_back')
                </h1>
                <h2 class="pos-auth-subtitle">
                    @lang('lang_v1.login_to_your') {{ config('app.name', 'ultimatePOS') }}
                </h2>

                <form method="POST" action="{{ route('login') }}" id="login-form">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="pos-auth-label" for="username">@lang('Username')</label>
                        <input
                            class="pos-auth-input"
                            name="username" required autofocus placeholder="@lang('lang_v1.username')"
                            id="username" type="text"
                            value="{{ $username }}" />
                        @if ($errors->has('username'))
                            <span class="help-block" style="color: #EF4444; font-size: 12px; margin-top: 4px;">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}" style="position: relative;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <label class="pos-auth-label" for="password">@lang('Password')</label>
                            @if (config('app.env') != 'demo')
                                <a href="{{ route('password.request') }}"
                                    style="font-size: 13px; font-weight: 500; color: #4F46E5; text-decoration: none; margin-bottom: 6px;"
                                    tabindex="-1">@lang('lang_v1.forgot_your_password')</a>
                            @endif
                        </div>

                        <input
                            class="pos-auth-input"
                            id="password" type="password" name="password" value="{{ $password }}" required
                            placeholder="@lang('lang_v1.password')" />
                        <button type="button" id="show_hide_icon" class="show_hide_icon"
                            style="position: absolute; top:36px; right:10px; background: none; border: none; padding: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye tw-w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#94A3B8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                        </button>
                        @if ($errors->has('password'))
                            <span class="help-block" style="color: #EF4444; font-size: 12px; margin-top: 4px;">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div style="margin-top: 12px; margin-bottom: 24px;">
                        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                                style="width: 16px; height: 16px; border-radius: 4px; border: 1px solid #CBD5E1;">
                            <span style="font-size: 13px; font-weight: 500; color: #334155;">@lang('lang_v1.remember_me')</span>
                        </label>
                    </div>
                    
                    @if(config('constants.enable_recaptcha'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{ config('constants.google_recaptcha_key') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="text-danger" style="color: #EF4444; font-size: 12px; margin-top: 4px;">{{ $errors->first('g-recaptcha-response') }}</span>
                                    @endif
                            </div>  
                        </div>
                    </div>
                    @endif
                    
                    <button type="submit" class="pos-auth-btn">
                        @lang('lang_v1.login')
                    </button>
                </form>

                <div style="text-align: center; margin-top: 24px;">
                    @if (!($request->segment(1) == 'business' && $request->segment(2) == 'register'))
                        @if (config('constants.allow_registration'))
                            <span style="font-size: 13px; color: #64748B;">{{ __('business.not_yet_registered') }}</span>
                            <a href="{{ route('business.getRegister') }}@if (!empty(request()->lang)) {{ '?lang=' . request()->lang }} @endif"
                                style="font-size: 13px; font-weight: 600; color: #4F46E5; text-decoration: none; margin-left: 4px;">
                                {{ __('business.register_now') }}
                            </a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@stop
@section('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#show_hide_icon').off('click');
            $('.change_lang').click(function() {
                window.location = "{{ route('login') }}?lang=" + $(this).attr('value');
            });
            $('a.demo-login').click(function(e) {
                e.preventDefault();
                $('#username').val($(this).data('admin'));
                $('#password').val("{{ $password }}");
                $('form#login-form').submit();
            });

            $('#show_hide_icon').on('click', function(e) {
            e.preventDefault();
            const passwordInput = $('#password');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                $('#show_hide_icon').html('<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off tw-w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#94A3B8" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828"/><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87"/><path d="M3 3l18 18"/></svg>');
            }
            else if (passwordInput.attr('type') === 'text') {
                passwordInput.attr('type', 'password');
                $('#show_hide_icon').html('<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye tw-w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#94A3B8" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/></svg>');
            }
        });
        })
    </script>
@endsection
