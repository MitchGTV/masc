@extends('layouts.theme')
<!-- Hero section -->
<section class="jarallax min-vh-100 py-lg-3 py-xl-4 py-xxl-5" data-jarallax data-speed="0.65">
    <div class="jarallax-img" style="background-image: url({{ asset('assets/img/front-bg-regency-paralax.jpg') }});"></div>
    <div class="container-fluid position-relative zindex-2 py-5 my-md-3 my-lg-5">
        <div class="row pb-3 pt-4 pt-sm-5">
            <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-5 offset-lg-1 pt-5">
                <div class="card dark-mode border-0 bg-primary rounded-1 py-2 py-sm-3 py-md-4">
                    <div class="card-body">
                        <div class="mx-auto pt-2" style="max-width: 535px;">
                            <h1 class="display-5 mb-4">Construction & Engineering Energy Consultants</h1>
                            <p class="fs-lg pb-4 pb-lg-5 mb-2" style="max-width: 410px;">Leading experts in energy consultancy, we pride ourselves in being the best in the construction, energy, piping and engineering sector. </p>
                            <div class="d-flex flex-column flex-sm-row align-items-center pb-lg-2">
                                <a class="btn btn-lg btn-light w-100 w-sm-auto me-sm-3 mb-3 mb-sm-0" href="{{ route('contact') }}">Contact Us</a>
                            </div>
                            <ul class="list-unstyled d-sm-flex mb-0 pt-4 pt-sm-5 mt-lg-2 mt-xl-4">
                                <li class="d-flex mb-2 mb-sm-0 pe-sm-1 me-sm-3"><i class="ai-check-alt text-white fs-4 mt-n1 me-2"></i>Oil &amp; Gas</li>
                                <li class="d-flex"><i class="ai-check-alt text-white fs-4 mt-n1 me-2"></i>Energy &amp; Engineering</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5 mb-3">
    <h2 class="h1 text-center pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2 mt-xl-1 pb-3">Our services</h2>
{{--    <p class="text-center pb-3 mb-3 mb-lg-4">With the support of independent referents, you can solve many challenges</p>--}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        <!-- Item-->
        <div class="col">
            <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden" href="#">
                <div class="card-body pb-3">
                    <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <g class="text-info">
                            <path d="M26.307 23.1116C26.307 28.3136 22.09 32.5307 16.888 32.5307C11.6859 32.5307 7.46891 28.3136 7.46891 23.1116C7.46891 17.9096 11.6859 13.6925 16.888 13.6925C17.1467 13.6925 17.4028 13.7038 17.6562 13.7243V6.24121C17.4016 6.22973 17.1455 6.22363 16.888 6.22363C7.56102 6.22363 0 13.7846 0 23.1116C0 32.4386 7.56102 39.9996 16.888 39.9996C26.2149 39.9996 33.7759 32.4386 33.7759 23.1116C33.7759 22.8541 33.7698 22.598 33.7584 22.3433H26.2753C26.2958 22.5968 26.307 22.8529 26.307 23.1116Z" fill="currentColor"></path>
                        </g>
                        <g class="text-primary">
                            <path d="M40 20C40 8.9543 31.0457 0 20 0V20H40Z" fill="currentColor"></path>
                        </g>
                    </svg>
                    <h3 class="h4">Workforce Planning &amp; Consultancy and Planning Services</h3>
                    <p class="mb-0">Providing and vetting workforce teams to develop further opportunities with clients to provide senior project and construction management and their respective teams. </p>
                </div>
            </a>
        </div>
        <!-- Item-->
        <div class="col">
            <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden" href="#">
                <div class="card-body pb-3">
                    <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <g class="text-info">
                            <path d="M25,25h15v15H25V25z" fill="currentColor"></path>
                        </g>
                        <g class="text-primary">
                            <path d="M10,20c0-5.5,4.5-10,10-10s10,4.5,10,10h10C40,9,31,0,20,0S0,9,0,20s9,20,20,20V30C14.5,30,10,25.5,10,20z" fill="currentColor"></path>
                        </g>
                    </svg>
                    <h3 class="h4">Providing Skilled & Semi-Skilled Personnel</h3>
                    <p class="mb-0">We continue to deliver a broad and extensive range of professional and technical personnel to clients and projects in the nuclear and regulated industries both in the UK and further afield.</p>
                </div>
            </a>
        </div>
        <!-- Item-->
        <div class="col">
            <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden" href="#">
                <div class="card-body pb-3">
                    <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <g class="text-primary">
                            <path d="M25.2791 12.7502C28.1954 9.83389 28.1954 5.10556 25.2791 2.18921C22.3627 -0.727136 17.6344 -0.727137 14.718 2.18921C11.8017 5.10556 11.8017 9.83389 14.718 12.7502C17.6344 15.6666 22.3627 15.6666 25.2791 12.7502Z" fill="currentColor"></path>
                        </g>
                        <g class="text-info">
                            <path d="M14.6859 29.3056C15.6559 27.0123 16.9202 24.8838 18.4577 22.9467C13.8666 17.9802 7.29664 14.8701 0 14.8701V40.0004H12.5259C12.5259 36.2925 13.2527 32.6942 14.6859 29.3056Z" fill="currentColor"></path>
                        </g>
                        <g class="text-primary">
                            <path d="M40.0014 40.0004V14.8701C26.1223 14.8701 14.8711 26.1214 14.8711 40.0004H40.0014Z" fill="currentColor"></path>
                        </g>
                    </svg>
                    <h3 class="h4">Strategy Development for Major Projects &amp; Sites</h3>
                    <p class="mb-0">Our senior management team are from the engineering construction industry, we understand what is required to add value to our clients, which is why we pride ourselves on having opportunities of being their resource partner. </p>
                </div>
            </a>
        </div>
        <!-- Item-->
        <div class="col">
            <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden" href="#">
                <div class="card-body pb-3">
                    <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <g class="text-info">
                            <path d="M34.9811 16.2655C34.3635 26.3194 26.3194 34.3634 16.2656 34.981V40H40V16.2655H34.9811Z" fill="currentColor"></path>
                        </g>
                        <g class="text-info">
                            <path d="M15.0195 30.0413C23.3152 30.0413 30.0403 23.3163 30.0403 15.0205H15.0195V30.0413Z" fill="currentColor"></path>
                        </g>
                        <g class="text-primary">
                            <path d="M29.1953 10.0415C27.141 4.19328 21.571 0 15.0208 0C6.725 0 0 6.725 0 15.0208C0 21.571 4.19328 27.141 10.0415 29.1953V10.0415H29.1953Z" fill="currentColor"></path>
                        </g>
                    </svg>
                    <h3 class="h4">Skilled &amp; Semi Skilled Workforce Personnel</h3>
                    <p class="mb-0">We provide the full breadth of skilled and semi-skilled personnel for engineering construction and civil construction industries covering mechanical, electrical, industrial services, civil construction, and groundworks.</p>
                </div>
            </a>
        </div>
        <!-- Item-->
        <div class="col">
            <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden" href="#">
                <div class="card-body pb-3">
                    <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <g class="text-primary">
                            <path d="M19.9999 0C11.1313 0 3.61211 5.77313 0.992188 13.7659H39.0077C36.3877 5.77313 28.8686 0 19.9999 0Z" fill="currentColor"></path>
                        </g>
                        <g class="text-info">
                            <path d="M7.29328 16.1094H0.379453C0.131328 17.368 0 18.6684 0 19.9998C0 26.9291 3.52437 33.0348 8.87797 36.6237L18.3427 27.1589L7.29328 16.1094Z" fill="currentColor"></path>
                        </g>
                        <g class="text-primary">
                            <path d="M10.9688 37.848C13.6819 39.2238 16.7505 39.9998 20.0007 39.9998C31.0464 39.9998 40.0007 31.0455 40.0007 19.9998C40.0007 18.6684 39.8694 17.3679 39.6213 16.1094H32.7074L10.9688 37.848Z" fill="currentColor"></path>
                        </g>
                    </svg>
                    <h3 class="h4">Vetting &amp; Compliance Management Services </h3>
                    <p class="mb-0">Our in-house security vetting team has been providing a full-vetting service to the nuclear industry for over 15 years covering new build, generating, decommissioning, processing, and re-processing sectors.</p>
                </div>
            </a>
        </div>
        <!-- Item-->
        <div class="col">
            <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden" href="#">
                <div class="card-body pb-3">
                    <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <g class="text-info">
                            <path d="M20.0004 36.0226L10.982 21.3535C9.42594 23.3156 8.49609 25.7968 8.49609 28.4955C8.49609 34.8492 13.6467 39.9998 20.0004 39.9998C26.3541 39.9998 31.5047 34.8492 31.5047 28.4955C31.5047 25.7969 30.5749 23.3156 29.0188 21.3535L20.0004 36.0226Z" fill="currentColor"></path>
                        </g>
                        <g class="text-primary">
                            <path d="M39.3962 0H0.605469L20.0009 31.5477L39.3962 0ZM25.7601 7.62359L20.0009 16.9914L14.2416 7.62359H25.7601Z" fill="currentColor"></path>
                        </g>
                    </svg>
                    <h3 class="h4">Recruitment &amp; Onboarding </h3>
                    <p class="mb-0">We develop teams that can deliver the level of service required, ensuring deadlines are met, compliance &amp; procedures are followed correctly.</p>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Features-->
<section class="bg-secondary">
    <div class="container py-md-2 py-lg-4 my-xl-2 my-xxl-3">
        <!-- Item-->
        <div class="row align-items-center py-3 py-sm-4 py-lg-5 mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
            <div class="col-md-6 col-xxl-5 offset-lg-1 offset-xl-2 offset-xxl-3 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
                <div class="position-relative"><img class="d-block rounded-1" src="assets/img/landing/corporate/features/01.jpg" alt="Image">
                    <div class="d-none d-lg-block position-absolute top-0 end-0 translate-middle-y w-auto pe-1 me-4">
                        <div data-aos="fade-up" data-aos-duration="950" data-aos-offset="280">
                            <svg class="text-info" width="107" height="107" viewBox="0 0 107 107" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M106.192 53.0468C106.225 63.5385 103.146 73.8042 97.3443 82.5459C91.5426 91.2875 83.279 98.1125 73.5985 102.158C63.918 106.203 53.2553 107.287 42.9589 105.272C32.6624 103.257 23.1946 98.2343 15.7528 90.8387C8.31094 83.4431 3.22928 74.0068 1.15039 63.7231C-0.92849 53.4394 0.0887821 42.7702 4.07357 33.0647C8.05836 23.3591 14.8317 15.0531 23.537 9.19711C32.2424 3.34107 42.4887 0.197979 52.9804 0.16529L53.1457 53.2121L106.192 53.0468Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 order-md-1" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180" data-disable-parallax-down="md">
                <div class="pe-md-4 pe-lg-0">
                    <h2 class="h1 pb-sm-2 pb-lg-3">Let us help get your project over the line</h2>
                    <p class="fs-xl pb-3 mb-1 mb-sm-2 mb-md-3 mb-lg-4">We think, advise, and provide a service aligned to that of a contractor as we are led by a senior management team with a wealth of experience having previously worked for major engineering, mechanical services, and Oil & Gas companies.<br><br>
                        Operating since 1986, we believe our openness, honesty, diligence, and hard work contribute to achieving long-term sustainable relationships with our customers based on mutual respect and shared beneficial working arrangements.</p>
                    <a class="d-inline-flex align-items-center fw-semibold text-decoration-none" href="{{ route('services') }}">Our services<i class="ai-arrow-right fs-4 ms-2"></i></a>
                </div>
            </div>
        </div>
        <!-- Item-->
        <div class="row align-items-center py-3 py-sm-4 py-lg-5 mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
            <div class="col-md-6 col-xxl-5 offset-xl-1 offset-xxl-2 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
                <div class="position-relative"><img class="d-block rounded-1 position-relative zindex-2" src="assets/img/landing/corporate/features/02.jpg" alt="Image">
                    <div class="d-none d-lg-block position-absolute top-0 start-0 translate-middle-x w-auto pt-3 mt-5">
                        <div data-aos="fade-up" data-aos-duration="950" data-aos-offset="280">
                            <svg class="text-primary" width="160" height="160" viewBox="0 0 160 160" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="80" cy="80" r="80"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5 order-md-1" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180" data-disable-parallax-down="md">
                <div class="pe-md-4 pe-lg-0">
                    <h2 class="h1 pb-3 mb-2 mb-lg-3 mb-xl-4">What we do and what we believe</h2>
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col">
                            <div class="text-muted mb-2">01</div>
                            <h3 class="h5">What we do</h3>
                            <p class="mb-0">We are specialist suppliers of sub-contract personnel and services for Construction, Engineering and Non-Destructive Testing (NDT) inspection services to the energy sector. We focus extensively on Nuclear, Oil, Gas, Power, Renewables, Marine and Offshore.</p>
                        </div>
                        <div class="col">
                            <div class="text-muted mb-2">02</div>
                            <h3 class="h5">What we believe</h3>
                            <p class="mb-0">We believe openness, honesty, diligence and hard work contribute to achieving long-term sustainable relationships based on mutual respect and shared beneficial working arrangements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
