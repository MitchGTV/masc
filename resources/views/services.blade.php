@extends('layouts.theme')

<section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5 mb-3">
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
    </nav>
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

<section class="position-relative mt-n5 mt-lg-0">
    <div class="bg-secondary position-absolute bottom-0 start-0 w-100" style="height: calc(100% - 3rem);"></div>
    <div class="container position-relative zindex-2">
        <div class="row">
            <div class="col-lg-6 py-5 pb-lg-0 mb-sm-2 mb-md-3 mb-lg-0 mt-3 mt-sm-4 mt-md-5">
                <h2 class="h1 text-center text-lg-start pt-3 mt-3 mb-4">Become part <br class='d-none d-lg-inline'>of our team</h2>
                <div class="d-flex justify-content-between mx-auto mx-lg-0" style="max-width: 370px;">
                    <ul class="ps-4 me-3">
                        <li class="mt-2">Technicians</li>
                        <li class="mt-2">Consultants</li>
                        <li class="mt-2">Engineers</li>
                    </ul>
                    <ul class="ps-4">
                        <li class="mt-2">Project Planners</li>
                        <li class="mt-2">Pipe-fitters</li>
                        <li class="mt-2">Welding Engineers</li>
                    </ul>
                </div>
                <div class="text-center text-lg-start pt-4"><a class="btn btn-outline-dark" href="{{ route('contact') }}">Send Your CV/Resume</a></div>
                <div class="d-none d-lg-flex justify-content-end mt-n4 me-n4">
                    <div data-aos="fade-left" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                        <svg class="text-danger" width="117" height="117" viewBox="0 0 117 117" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-2.51516e-06 58.5C-3.52666e-06 70.0702 3.43096 81.3806 9.85902 91.0008C16.2871 100.621 25.4235 108.119 36.113 112.547C46.8025 116.975 58.5649 118.133 69.9128 115.876C81.2607 113.619 91.6844 108.047 99.8657 99.8657C108.047 91.6844 113.619 81.2607 115.876 69.9128C118.133 58.5649 116.975 46.8025 112.547 36.113C108.119 25.4235 100.621 16.2871 91.0009 9.85903C81.3806 3.43096 70.0702 -4.24071e-06 58.5 -5.11423e-06L58.5 58.5L-2.51516e-06 58.5Z"></path>
                        </svg>
                    </div>
                    <div data-aos="fade-right" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                        <svg class="text-info" width="117" height="117" viewBox="0 0 117 117" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="58.5" cy="58.5" r="58.5"></circle>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary d-flex flex-column align-items-center justify-content-center position-relative h-100 rounded-1 rounded-bottom-0 p-5">
                    <div class="dark-mode position-relative zindex-2 py-sm-3 py-md-4" style="max-width: 360px;">
                        <h2 class="h1">Want to discuss your project?</h2>
                        <p class="mb-0">Use the link to our contact page or email us today. </p>
                        <div class="d-flex flex-column flex-sm-row align-items-center pt-3 mt-3 mt-lg-4"><a class="btn btn-light w-100 w-sm-auto me-sm-4 mb-2 mb-sm-0" href="{{ route('contact') }}">Contact us</a><a class="d-inline-block text-white fw-medium p-2" href="mailto:mark@masc2606.co.uk">mark@masc2606.co.uk</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
