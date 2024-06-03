@extends('layouts.base')
@section('content')
    <section class="about">
        <div class="container">
            <div class="container-wrap">
                <div class="profile-title">
                    <h1>Profile</h1>
                    <!-- <hr> -->
                </div>
                <div class="profile">
                    <div class="profile-img">
                        <img src="img/eddy.png" alt="">
                    </div>
                    <div class="profile-info">
                        <h2>Who Am i?</h2>
                        <p>An enthusiastic software developer with a positive and challenging mindset to achieve set goals. Experienced Software Engineer with a demonstrated history of working in the computer software industry. A well-seasoned software developer with a passion for developing innovative programs that help with the efficiency and effectiveness of organizational success.</p>

                        <h3>Personal Info</h3>
                        <div class="profile-details">
                            <div class="p-tags">
                                <i class="fa-solid fa-phone"></i>
                                <span>+234-7036478726</span>
                            </div>
                            <div class="p-tags">
                                <i class="fa-solid fa-location"></i>
                                <span>Lagos, Nigeria</span>
                            </div>
                            <div class="p-tags">
                                <i class="fa-solid fa-envelope"></i>
                                <span>eddyenin6@gmail.com</span>
                            </div>

                            <div class="p-tags">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>January 12</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="profile-skills">
                    <h2>What I Do?</h2>
                    <div class="skill-grid">
                        <div class="skill" id="web">
                            <h4>Web Development</h4>

                        </div>
                        <div class="skill" id="app">
                            <h4>App Development</h4>

                        </div>
                        <div class="skill" id="management">
                            <h4>Management</h4>

                        </div>
                        <div class="skill" id="business">
                            <h4>Business strategy</h4>

                        </div>
                        <div class="skill" id="business">
                            <h4>Consultation</h4>

                        </div>
                    </div>
                </div>
            </div>


            <div class="footer">
                <!-- <h3>Clients</h3>
                <div class="logo-slide">
                    <img src="" alt="logo">
                    <img src="" alt="logo">
                    <img src="" alt="logo">
                    <img src="" alt="logo">
                    <img src="" alt="logo">
                    <img src="" alt="logo">
                    <img src="" alt="logo">
                    <img src="" alt="logo">
                </div> -->

                <div class="copyright">
                    &copy;2023. All Rights Reserved.
                </div>
            </div>
        </div>
    </section>

@endsection
