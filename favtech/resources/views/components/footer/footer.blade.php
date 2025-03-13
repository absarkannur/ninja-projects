<footer>
    <div class="footer-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Address</li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#building-2-shape') }}></use>
                            </svg>
                            <span>{{ $site_info->compnay_address }}</span>
                        </li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#phone-shape') }}></use>
                            </svg>
                            <span>{{ $site_info->compnay_phone }}</span>
                        </li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#envelope-shape') }}></use>
                            </svg>
                            <span>{{ $site_info->compnay_email }}</span>
                        </li>
                        {{-- <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#map-pin-thick-shape') }}></use>
                            </svg>
                            <span>G25 Dubai Airport Freezone ,Dubai , UAE</span>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Links</li>
                        <li><a href="{{ route('about-us') }}" rel="noreferrer">About Us</a></li>
                        <li><a href="{{ route( 'products', ['slug'=>'all'] ) }}" rel="noreferrer">Products</a></li>
                        <li><a href="{{ route('contact-us') }}" rel="noreferrer">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Connect with Us</li>
                        <li>
                            <a href="{{ $site_info->compnay_fb }}" rel="noreferrer">
                                <span class="social-icon">
                                    <svg width="30" height="30" class="fb">
                                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-facebook-shape') }}></use>
                                    </svg>
                                </span>
                            </a>
                            <a href="{{ $site_info->compnay_insta }}" rel="noreferrer">
                                <span class="social-icon">
                                    <svg width="30" height="30" class="insta">
                                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-instagram-shape') }}></use>
                                    </svg>
                                </span>
                            </a>
                            <a href="{{ $site_info->compnay_linkd }}" rel="noreferrer">
                                <span class="social-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                      </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a class="footer_whatsapp animate__animated animate__heartBeat" href="https://api.whatsapp.com/send?phone=971553351001&amp;text=Hello" target="_blank"><svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg"><ellipse cx="29" cy="26.5" rx="22" ry="22.5" fill="white"></ellipse><g filter="url(#filter0_d_376_897)"><path fill-rule="evenodd" clip-rule="evenodd" d="M26.6266 2.06071C18.8034 2.87422 11.947 7.1318 7.78201 13.7628C1.87666 23.1646 2.97882 35.5818 10.4448 43.7616C14.5767 48.2885 19.7442 50.9949 25.941 51.8776C27.0979 52.0424 30.9426 52.0403 32.1505 51.8743C37.8101 51.0961 42.8787 48.586 46.7337 44.6523C47.9989 43.3613 48.2684 43.0525 49.1076 41.9334C51.6083 38.598 53.2455 34.532 53.8773 30.0882C54.0409 28.9369 54.0409 25.0745 53.8772 23.9238C53.4558 20.9614 52.6895 18.4374 51.4601 15.9619C50.1575 13.3392 48.8209 11.4694 46.7402 9.35971C42.8807 5.44607 38.0483 3.01492 32.4927 2.19182C31.2932 2.01403 27.8214 1.93654 26.6266 2.06071ZM32.835 11.9686C41.5855 14.0542 46.5521 22.8942 43.7377 31.3743C43.011 33.5641 41.8639 35.3944 40.124 37.1408C37.9219 39.351 35.5415 40.6414 32.4438 41.3041C31.5957 41.4855 31.1022 41.5244 29.608 41.5277C27.1293 41.5331 25.5893 41.217 23.4036 40.2546C22.866 40.0178 22.359 39.825 22.2767 39.8261C22.1946 39.8272 20.4112 40.2821 18.3136 40.8371C16.2161 41.392 14.4893 41.8391 14.4763 41.8306C14.4632 41.8222 14.9275 40.0809 15.508 37.9611L16.5636 34.107L16.1035 33.174C15.064 31.066 14.6081 29.0616 14.6117 26.6146C14.6177 22.426 16.0964 18.871 19.0479 15.9491C21.3671 13.6532 24.2968 12.2163 27.7012 11.7051C27.8625 11.681 28.8526 11.6753 29.9014 11.6925C31.5247 11.7192 31.9609 11.7603 32.835 11.9686ZM28.4835 14.2042C23.6946 14.5469 19.3126 17.9762 17.7795 22.581C17.2838 24.07 17.1457 24.9487 17.1457 26.6146C17.1457 29.1456 17.6264 30.8388 19.053 33.3317L19.2853 33.7375L18.6743 35.9625C18.3383 37.1862 18.0818 38.2059 18.1043 38.2284C18.1268 38.2509 19.169 37.9989 20.4204 37.6682L22.6957 37.0672L23.8783 37.6583C25.8255 38.6317 27.5182 39.0396 29.6152 39.0408C34.8715 39.0437 39.6681 35.5752 41.3323 30.5681C41.8355 29.0541 41.9592 28.2746 41.9597 26.6146C41.9599 25.4178 41.9142 24.8812 41.7423 24.0705C40.682 19.0686 36.7446 15.2355 31.7558 14.3483C30.6953 14.1598 29.7101 14.1164 28.4835 14.2042ZM25.5223 19.8944C25.8315 20.2417 27.0907 23.37 27.0257 23.6293C26.9956 23.7489 26.7063 24.1923 26.3827 24.6146C26.0591 25.0369 25.7943 25.4537 25.7943 25.5408C25.7943 25.7254 26.5755 26.8847 27.1825 27.6007C27.8394 28.3756 29.0764 29.3191 30.1303 29.849C31.4498 30.5125 31.5151 30.5044 32.2697 29.5819C33.2091 28.4333 33.2961 28.3546 33.5456 28.4274C33.8454 28.5149 36.6424 29.8206 36.9309 30.0077C37.1488 30.1491 37.1606 30.2019 37.1093 30.8125C37.0792 31.172 36.9804 31.6517 36.8896 31.8786C36.6861 32.3877 35.9478 33.0679 35.2006 33.4351C34.6842 33.6888 34.5593 33.7085 33.4706 33.7067C32.3892 33.7051 32.2243 33.6791 31.3682 33.3748C29.9518 32.8716 29.0725 32.442 28.0085 31.7331C25.9477 30.3603 23.5192 27.6141 22.5186 25.5247C22.0854 24.6202 21.9492 23.9319 21.9993 22.9011C22.0465 21.9317 22.2969 21.2912 22.9428 20.4879C23.4635 19.8404 23.8144 19.6723 24.6528 19.6696C25.2292 19.6677 25.3477 19.6983 25.5223 19.8944Z" fill="#25D366"></path></g><defs><filter id="filter0_d_376_897" x="0" y="0" width="58" height="58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="2"></feOffset><feGaussianBlur stdDeviation="2"></feGaussianBlur><feComposite in2="hardAlpha" operator="out"></feComposite><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_376_897"></feBlend><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_376_897" result="shape"></feBlend></filter></defs></svg></a>

    <p class="copyright">Copyright © 2025 - favtech</p>

</footer>

