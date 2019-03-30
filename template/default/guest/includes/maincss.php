<style>
/*

*
* ------------------------------------------------------------------
*[Master Stylesheet]
*
* Project: AGENCYPOINT - RESPONSIVE AGENCY BUSINESS TEMPLATE
* Version: 1.2
* Created : 03/03/2018
* Updated : 25/03/2018
* Template URI: http://envato.rajuahammad.com/html/agency
* Author Name: Raju Ahammad
* Author URI: http://rajuahammad.com
* Description: This Template design for creative it company, agensy based. It's full responsive and device * friendly.
*
* -------------------------------------------------------------------
*
*/

/*===========================
*   [Table of Contents]
* ===========================
*
*   01. Body = .preloader-active
*   02. Preloader = .preloader
*   03. Header Top = .header-top-area
        3.1 - Logo Area = .logo-area
        3.2 - MainMenu Area = .main-menu
*   04. Header Area = #header-area
*       4.1 - Header Content = .hero-text
*   05. Hero Area = #hero-area
*       5.1 - Hero Text = .hero-text
*   06. About Area = #about-area
*       6.1 - About Content = .about-content
*           6.1.1 - About Text = .about-text
*           6.1.2 - About Image = .about-image
*   07. Service Area = #service-area
*       7.1 - Service Content = .service-wrapper
*           7.1.1 - Single Service = .single-service-item
*   08. Review Area = #review-area
*       8.1 - Review Item = .single-review
*   09. Portfolio Area = #portfolio-area
*       9.1 - Portfolio Menu = .portfolio-menu
*       9.2 - Portfolio Content = .portfolio-gird
*           9.2.1 - Portfolio Item = .single-portfolio
*           9.2.2 - Portfolio Hover = .portfolio-hover
*   10. Video Area = #video-area
*       10.1 - Video Area Content = .video-area-content
*   11. Team Area = #team-area
*       11.1 - Team Content = .team-content-wrapper
*            11.1.1 - Team Member = .single-team-member
*   12. Testimonial Area = #support-area
*       12.1 - Testimonial Content =.clients-content-wrapper
*            12.1.1 - Single Testimonial =.single-client-testimonial
*   13. Blog Area = #our-blog-area
*       13.1 - Single Blog = .single-blog-item
*   14. Partner Area = #partner-area
*       14.1 - Partner Content = .partner-content-wrap
*            14.1.1 - Single Partner = .single-partner
*   15. Pricing Table Area = #our-pricing-area
*       15.1 - Single Pricing Table = .single-pricing-item
*   16. Hire Area = #hire-area
*       16.1 - Hire Content = .hire-content-wrap
*            16.1.1 - Single Hire = .single-hire-item
*   17. Contact Area = #contact-area
*       17.1 - Contact Area Content = .contact-info
*       17.2 - Contact Form = .contact-area-form
*   18. Footer = #footer-area
*       17.3 - Copyright Content = .copyright-text
*
*  And all pages css incluse on "assets/css/page.css"
*
*/

/*==========================================
    Author Style Here
==========================================*/

/*== Theme Base CSS Start ==*/

.overlay {
    position: relative;
    z-index: 1;
}

.overlay:after {
    background-color: #222;
    content: "";
    left: 0;
    opacity: 0.65;
    top: 0;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: -1;
}

.theme-btn {
    border: 2px solid #0CBF86;
    border-radius: 56px;
    color: #0CBF86;
    display: inline-block;
    font-family: "Raleway", sans-serif;
    font-size: 17px;
    font-weight: 600;
    padding: 10px 35px;
    overflow: hidden;
    position: relative;
    -webkit-transition: .3s;
    transition: .3s;
}

.theme-btn:focus,
.theme-btn:hover {
    color: #fff;
    background-color: #0CBF86;
}


.section-padding {
    padding: 90px 0;
}

.section-title {
    margin-bottom: 60px;
    padding: 10px 0 10px 20px;
    position: relative;
}

.section-title::after {
    background-color: #0CBF86;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 2px;
}

.section-title h2 {
    color: #0CBF86;
    font-size: 48px;
    font-weight: 900;
    line-height: 1;
    text-transform: capitalize;
}

.section-title p {
    font-family: "Raleway";
    font-size: 17px;
    margin-top: 10px;
}

.theme-list li {
    line-height: 2;
    padding-left: 50px;
    position: relative;
}

.theme-list li::before {
    color: #0CBF86;
    content: "\f00c";
    font-family: "FontAwesome";
    font-size: 18px;
    left: 0;
    position: absolute;
    top: -2px;
}

.owl-nav {
    margin-top: 40px;
    text-align: center;
}

.owl-nav div {
    display: inline-block;
    margin-right: 25px;
}

.owl-nav div.owl-next {
    margin: 0;
}

.owl-nav div i.fa {
    background-color: #fff;
    border: 1px solid;
    border-radius: 50%;
    color: #0CBF86;
    font-size: 15px;
    height: 40px;
    line-height: 40px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 40px;
}

.owl-nav div i.fa:hover {
    background-color: #0CBF86;
    color: #fff;
    border-color: #0CBF86;
}

.owl-nav div.owl-next i.fa {
    padding-left: 2px;
}

.scroll-top {
    background-color: #fff;
    border-radius: 2px;
    bottom: 50px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    color: #0cbf86;
    cursor: pointer;
    display: none;
    font-size: 18px;
    height: 40px;
    position: fixed;
    right: 20px;
    transition: all 0.4s ease 0s;
    width: 40px;
    z-index: 99;
}

.scroll-top i.fa {
    bottom: 0;
    left: 50%;
    position: absolute;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}

/*== Theme Base CSS End ==*/

/*== Header Top CSS Start ==*/

.header-top-area {
    background-color: #fff;
    -webkit-box-shadow: 2px 2px 40px rgba(65, 65, 65, 0.2);
    box-shadow: 2px 2px 40px rgba(65, 65, 65, 0.2);
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    z-index: 99;
}

.logo-area {
    display: inline-block;
    padding: 12px 0;
}

.logo-area img {
    max-width: 150px;
}

.main-menu {
    display: none;
}

.main-menu li {
    float: left;
    position: relative;
}

.main-menu a {
    color: #222;
    display: block;
    font-family: "Raleway";
    font-weight: 700;
    padding: 20px 15px;
    text-transform: uppercase;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.main-menu li.active a,
.main-menu li:hover a {
    background-color: #0CBF86;
    color: #fff;
}

/*DropDown Menu CSS Here*/

.main-menu .dropdown {
    background-color: #fff;
    -webkit-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
    left: 0;
    position: absolute;
    top: 80px;
    opacity: 0;
    visibility: hidden;
    width: 200px;
    -webkit-transition: 0.3s;
    transition: 0.3s
}

.main-menu li:hover ul {
    opacity: 1;
    visibility: visible;
    top: 65px;
}

.dropdown li {
    float: none;
}

.dropdown li a {
    font-size: 13px;
    padding: 8px 15px;
}

.main-menu li:hover ul a {
    background-color: #fff;
    color: #222;
}

.main-menu li ul li.active a,
.main-menu li ul li:hover a {
    background-color: #0CBF86;
    color: #fff;
}

.main-menu ul li i.fa {
    font-size: 18px;
    margin-left: 3px;
}

/*Responsive Mobile Menu*/

.slicknav_menu {
    background-color: transparent;
    font-weight: 700;
    padding: 0;
    position: fixed;
    width: 100%;
    z-index: 991;
}

.slicknav_btn {
    background-color: #0CBF86;
    border-radius: 2px;
    margin: 0;
    padding: 10px 15px;
    position: fixed;
    right: 7%;
    top: 16px;
}

.slicknav_nav {
    background-color: #fff;
    border-top: 2px solid #0CBF86;
    -webkit-box-shadow: 0 2px 8px #ddd;
    box-shadow: 0 2px 8px #ddd;
    left: 0;
    position: absolute;
    top: 66px;
    width: 100%;
}

.slicknav_nav ul {
    margin: 0;
}

.slicknav_parent ul {
    margin-left: 20px;
}

.slicknav_nav li a {
    font-family: 'Raleway';
    font-weight: 600;
    color: #222;
    padding: 8px 20px !important;
    margin: 0 !important;
    border-radius: 0px !important;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    text-transform: uppercase;
}

.slicknav_nav li a a {
    padding: 0 !important;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.slicknav_nav li a:hover {
    background-color: #0CBF86 !important;
    color: #fff !important;
}

.slicknav_nav li a:hover a {
    color: #fff !important;
}

.slicknav_arrow {
    display: none;
}

/*== Header Top CSS End ==*/

/*== Hader Area CSS Start ==*/

.hero-btn,
.scroll-bottom {
    height: auto;
}

.hero-text {
    font-size: 17px;
    color: #fff;
}

.hero-text h2 {
    color: #fff;
    font-weight: 400;
}

.hero-text h1 {
    color: #fff;
    font-weight: 900;
}

.hero-text h1,
.hero-text h2 {
    font-family: "Raleway";
    font-size: 72px;
}

.hero-text p {
    margin: 10px auto auto;
    width: 80%;
}

.hero-btn {
    margin: 50px 0 0;
}

.hero-btn .theme-btn {
    margin-right: 50px;
    border-color: #fff;
    color: #0CBF86;
}

.hero-btn .theme-btn:hover {
    background-color: #0CBF86;
    border-color: #0CBF86;
    color: #fff;
}

.hero-btn .theme-btn:last-child {
    margin-right: 0;
}

.scroll-bottom {
    border: 2px solid #fff;
    border-radius: 20px;
    bottom: 5%;
    color: #0CBF86;
    cursor: pointer;
    height: 50px;
    left: 50%;
    position: absolute;
    width: 30px;
}

.scroll-bottom:focus,
.scroll-bottom:hover {
    color: #fff;
}

.scroll-bottom i.fa {
    font-size: 20px;
    padding-left: 2px;
    position: relative;
}

/*== Header Area CSS End ==*/

/*== About Area CSS Start ==*/

.about-content {
    -webkit-box-shadow: 3px 0 22px rgba(64, 64, 64, 0.16);
    box-shadow: 3px 0 22px rgba(64, 64, 64, 0.16);
    padding: 65px 0;
    position: relative;
}

.about-text {
    font-size: 15px;
    font-weight: 300;
}

.about-text h2 {
    color: #3d3d3e;
    font-size: 30px;
    font-weight: 500;
}

.about-text > p {
    margin: 25px 0 35px;
}

.about-text .theme-btn {
    font-size: 18px;
    margin-top: 60px;
    padding: 10px 30px;
}

.about-image {
    background-color: #0CBF86;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    width: 45%;
}

.about-bg {
    background-image: url("http://localhost/di/template/default/guest/assets/img/about-bg.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 90% 80%;
}

/*== About Area CSS End ==*/

/*== Service CSS Start ==*/

#service-area {
    background-color: #f7f7f7;
}

.single-service-item {
    background-color: #fff;
    -webkit-box-shadow: 1px 1px 15px rgba(58, 58, 58, 0.25);
    box-shadow: 1px 1px 15px rgba(58, 58, 58, 0.25);
    margin-bottom: 15px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.service-icon {
    background-color: #0CBF86;
    padding: 60px 0;
}

.service-icon img {
    max-width: 75px;
    margin: auto;
}

.service-content {
    padding: 25px 30px 45px;
}

.single-service-item h4 {
    color: #0CBF86;
    font-family: "Roboto";
    font-size: 22px;
    font-weight: 400;
}

.single-service-item p {
    margin: 15px 0 25px;
}

.single-service-item .theme-btn {
    font-size: 15px;
    padding: 8px 20px;
}

/*== Service CSS End ==*/

/*== Review Area CSS Start ==*/

#review-area {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/reviews-bg.jpg);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-color: #ddd;
    line-height: 1;
}

.single-review p {
    color: #fff;
    font-size: 60px;
    font-weight: 700;
}

.single-review h5 {
    color: #eaeaea;
    font-size: 18px;
    font-weight: 500;
    margin-top: 5px;
    text-transform: capitalize;
}

/*== Review Area CSS End ==*/

/*== Portfolio CSS Start ==*/

.portfolio-menu {
    font-family: "Raleway";
    font-size: 17px;
    font-weight: 500;
    margin-bottom: 35px;
    margin-left: 20px;
    text-transform: capitalize;
}

.portfolio-menu span {
    cursor: pointer;
    margin-right: 50px;
    position: relative;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.portfolio-menu span::after {
    content: "/";
    position: absolute;
    right: -33px;
    top: -4px;
}

.portfolio-menu span:last-child::after {
    display: none;
}

.portfolio-menu span.active,
.portfolio-menu span:hover {
    color: #0CBF86;
}

.single-portfolio {
    background-color: #ddd;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 300px;
    position: relative;
    text-align: center;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}

.portfolio-gird .col-lg-6,
.portfolio-gird .col-lg-3 {
    padding: 0;
}

.portfolio-gird .col-lg-3:nth-child(4) .single-portfolio,
.portfolio-gird .col-lg-3:nth-child(5) .single-portfolio {
    height: 600px;
}

.single-portfolio.overlay::after {
    background-color: #0CBF86;
}

.portfolio-hover h4,
.portfolio-hover {
    color: #fff;
}

.single-portfolio.overlay::after,
.portfolio-hover .port-btn,
.portfolio-hover h4,
.portfolio-hover p {
    position: absolute;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    left: 0;
    right: 0;
    opacity: 0;
    visibility: hidden;
}

.portfolio-hover h4 {
    font-size: 20px;
    font-weight: 600;
    top: 10%;
}

.portfolio-hover p {
    font-size: 15px;
    line-height: 20px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.port-btn {
    background-color: #fff;
    border-radius: 50px;
    bottom: 10%;
    color: #0CBF86;
    display: inline-block;
    font-family: "Raleway";
    font-size: 13px;
    margin: auto;
    padding: 8px 20px;
    width: 130px;
}

.port-btn:hover {
    color: #0CBF86;
}

/*Porfolio Hover Function*/

.single-portfolio:hover .portfolio-hover h4 {
    top: 30%;
}

.single-portfolio:hover .portfolio-hover .port-btn {
    bottom: 25%;
}

.single-portfolio:hover.overlay::after {
    opacity: 0.75;
    visibility: visible;
}

.single-portfolio:hover .portfolio-hover .port-btn,
.single-portfolio:hover .portfolio-hover h4,
.single-portfolio:hover .portfolio-hover p {
    opacity: 1;
    visibility: visible;
}

.portfolio-gird .col-lg-3:nth-child(4) .single-portfolio:hover .portfolio-hover h4,
.portfolio-gird .col-lg-3:nth-child(5) .single-portfolio:hover .portfolio-hover h4 {
    top: 40%;
}

.portfolio-gird .col-lg-3:nth-child(4) .single-portfolio:hover .portfolio-hover .port-btn,
.portfolio-gird .col-lg-3:nth-child(5) .single-portfolio:hover .portfolio-hover .port-btn {
    bottom: 37%;
}

/*Porfolio Hover Function*/

.portfolio-img-1 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-1.jpg);
}

.portfolio-img-2 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-2.jpg);
}

.portfolio-img-3 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-3.jpg);
}

.portfolio-img-4 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-4.jpg);
}

.portfolio-img-5 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-5.jpg);
}

.portfolio-img-6 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-6.jpg);
}

.portfolio-img-7 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-7.jpg);
}

.portfolio-img-8 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-8.jpg);
}

.portfolio-img-9 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/portfolio/portfolio-9.jpg);
}

/*== Portfolio CSS End ==*/

/*== Video Area CSS Start ==*/

#video-area {
    background-image: url("http://localhost/di/template/default/guest/assets/img/video-area-bg.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 130px 0;
}

.video-icon {
    background-color: #fff;
    border-radius: 50%;
    color: #fff;
    display: block;
    font-size: 30px;
    height: 115px;
    line-height: 115px;
    margin: auto;
    position: relative;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 115px;
}

.video-icon i {
    color: #0CBF86;
}

.waves-block .waves {
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 100%;
    height: 250px;
    left: 50%;
    opacity: 0;
    margin-left: -125px;
    margin-top: -125px;
    position: absolute;
    top: 50%;
    width: 250px;
}

/*== Video Area CSS End ==*/

/*== Team Area CSS Start ==*/

.single-team-member {
    background-color: #f3f3f3;
    -webkit-box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.4);
    box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.4);
    margin-bottom: 15px;
    padding: 35px 25px 45px;
    position: relative;
    -webkit-transition: .4s;
    transition: .4s;
    z-index: 1;
}

.single-team-member::after {
    background-color: #0CBF86;
    content: "";
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    -webkit-transition: .4s;
    transition: .4s;
    visibility: hidden;
    width: 100%;
    z-index: -1;
}

.team-member-thubm img {
    background-color: #fff;
    border: 2px solid #0CBF86;
    border-radius: 50%;
    margin: auto;
    max-height: 135px;
    max-width: 135px;
    padding: 7px;
    -webkit-transition: .4s;
    transition: .4s;
}

.single-team-member h3 {
    font-family: "Roboto";
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 4px;
    margin-top: 17px;
    text-transform: uppercase;
    -webkit-transition: .4s;
    transition: .4s;
}

.member-tagline {
    color: #0CBF86;
    font-style: italic;
    font-weight: 500;
    -webkit-transition: .4s;
    transition: .4s;
}

.single-team-member p {
    color: #9c9c9c;
    font-size: 13px;
    margin-top: 15px;
    -webkit-transition: .4s;
    transition: .4s;
}

.team-icons a {
    border: 1px solid;
    border-radius: 50%;
    color: #0CBF86;
    display: inline-block;
    font-size: 17px;
    height: 40px;
    line-height: 40px;
    margin-right: 5px;
    width: 40px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.team-icons {
    margin-top: 15px;
}

.team-icons a:last-child {
    margin-right: 0;
}

/*Team Hover Function CSS*/

.single-team-member:hover img {
    background-color: #0CBF86;
    -webkit-transition: .4s;
    transition: .4s;
}

.single-team-member:hover:after {
    opacity: 1;
    visibility: visible;
    -webkit-transition: .5s;
    transition: .5s;
}

.single-team-member:hover img {
    border-color: #fff;
    -webkit-transition: .4s;
    transition: .4s;
}

.single-team-member:hover p,
.single-team-member:hover h3 {
    color: #fff;
    -webkit-transition: .4s;
    transition: .4s;
}

.single-team-member:hover .member-tagline {
    color: #f7f7f7;
    -webkit-transition: .4s;
    transition: .4s;
}

.single-team-member:hover .team-icons a {
    background-color: #fff;
    border-color: #fff;
}

/*== Team Area CSS End ==*/

/*== Testimonial CSS Start ==*/

#testimonial-area {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/client-bg.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: left top;
    background-repeat: no-repeat;
}

#testimonial-area.overlay:after {
    opacity: 0.85;
    background-color: #f3f3f3;
}

.single-client-testimonial {
    background-color: #fff;
    -webkit-box-shadow: 3px 2px 10px rgba(53, 53, 53, 0.25);
    box-shadow: 3px 2px 10px rgba(53, 53, 53, 0.25);
    padding: 30px;
    position: relative;
}

.single-client-testimonial::before,
.single-client-testimonial::after {
    background-color: #0CBF86;
    bottom: 0;
    content: "";
    height: 3px;
    left: 0;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    position: absolute;
    width: 130px;
}

.single-client-testimonial:hover:before,
.single-client-testimonial:hover:after {
    width: 100%;
}

.single-client-testimonial::before {
    left: auto;
    right: 0;
    bottom: auto;
    top: 0;
}

.owl-carousel .client-thum img {
    border: 2px solid #ccc;
    border-radius: 50%;
    height: 150px;
    padding: 7px;
    max-width: 150px !important;
    width: 150px;
}

.client-say-content p {
    color: #5f5f5f;
    font-style: italic;
    line-height: 2;
    position: relative;
    z-index: 1;
}

.client-say-content p::before {
    color: #cdcdcd;
    content: "\f10d";
    font-family: FontAwesome;
    font-size: 72px;
    font-style: normal;
    position: absolute;
    top: -65px;
    z-index: -1;
}

.client-say-content h2 {
    display: inline-block;
    font-size: 25px;
    font-weight: 600;
    margin-top: 25px;
    text-align: center;
    text-transform: uppercase;
}

.client-say-content h2 span {
    color: #0CBF86;
    display: block;
    font-family: "Roboto";
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
    line-height: 1.6;
    text-align: left;
    text-transform: capitalize;
}

.client-thum,
.client-say-content {
    display: table-cell;
    vertical-align: top;
}

/*== Testimonial CSS End ==*/

/*== Blog CSS Start ==*/

#our-blog-area {
    background-color: #f3f3f3;
}

.single-blog-item {
    -webkit-box-shadow: 2px 2px 20px rgba(53, 53, 53, 0.3);
    box-shadow: 2px 2px 20px rgba(53, 53, 53, 0.3);
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.blog-thumbnail {
    background-color: #ddd;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 240px;
}

.blog-content {
    padding: 30px 20px;
}

.blog-content h2 {
    font-family: "Roboto";
    font-size: 22px;
}

.blog-content p {
    margin: 10px 0 20px;
    font-size: 14px;
}

.single-blog-item,
.blog-meta a {
    color: #9e9e9e;
    font-size: 13px;
}

.blog-meta {
    display: block;
    font-weight: 500;
    margin-bottom: 20px !important;
    margin-top: 0 !important;
}

.blog-meta a {
    margin-right: 12px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.blog-meta a:hover {
    color: #0CBF86;
}

.blog-meta a:last-child {
    margin-right: 0;
}

.blog-meta i.fa {
    margin-right: 5px;
}

.theme-btn.blog-btn {
    font-size: 13px;
    padding: 8px 18px;
}

.blog-loadmore-btn.theme-btn {
    font-size: 18px;
    margin-top: 60px;
    padding: 10px 40px;
}

.single-service-item .theme-btn:after,
.blog-btn.theme-btn:after {
    -webkit-transition: 1s;
    transition: 1s;
}

.blog-thumb-bg-1 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/blog/blog-thum-1.jpg);
}

.blog-thumb-bg-2 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/blog/blog-thum-2.jpg);
}

.blog-thumb-bg-3 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/blog/blog-thum-3.jpg);
}

/*== Blog CSS End ==*/

/*== Partner Area CSS Start ==*/

#partner-area {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/partner/partner-bg.jpg);
    background-attachment: fixed;
    background-color: #ddd;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

#partner-area .owl-nav {
    margin-top: 0;
}

.single-partner {
    background-color: #fff;
    border-radius: 3px;
    height: 105px;
    text-align: center;
}

.partner-content-wrap.owl-carousel img {
    margin: auto;
    width: auto;
}

/*== Partner Area CSS End ==*/

/*== Pricing Table CSS Start ==*/

#our-pricing-area {
    background-color: #f3f3f3;
}

#our-pricing-area .section-title {
    margin-bottom: 80px;
}

.single-pricing-item {
    background-color: #fff;
    -webkit-box-shadow: 2px 2px 10px rgba(53, 53, 53, 0.3);
    box-shadow: 2px 2px 10px rgba(53, 53, 53, 0.3);
    padding: 35px 5px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.price-rate {
    font-family: "Roboto";
}

.price-rate span {
    display: block;
    font-size: 14px;
    font-weight: 400;
    margin-top: 10px;
    text-transform: capitalize;
}

.package-name {
    border-bottom: 1px solid #dbdbdb;
    border-top: 1px solid #dbdbdb;
    font-family: "Roboto";
    font-size: 20px;
    margin: 20px 0 30px;
    padding: 12px 0;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.package-feature {
    color: #9b9a9a;
    font-size: 15px;
    text-transform: capitalize;
}

.package-feature li {
    margin-bottom: 20px;
}

.price-btn {
    background-color: #0CBF86;
    border-radius: 50px;
    -webkit-box-shadow: 2px 7px 20px rgba(53, 53, 53, 0.3);
    box-shadow: 2px 7px 20px rgba(53, 53, 53, 0.3);
    color: #fff;
    display: inline-block;
    font-family: "Raleway";
    font-size: 13px;
    margin-top: 10px;
    padding: 10px 40px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.price-btn:focus,
.price-btn:hover {
    color: #fff;
}

/*pricing tabel hover function*/

.single-pricing-item:hover .package-name {
    color: #0CBF86;
    border-color: #0CBF86;
}

/*== Pricing Table CSS End ==*/

/*== Hire Me CSS Start ==*/

#hire-area {
    background-attachment: fixed;
    background-color: #ddd;
    background-image: url("http://localhost/di/template/default/guest/assets/img/hire-area-bg.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.single-hire-item h2 {
    font-size: 45px;
    font-weight: 900;
    color: #fff;
}

.single-hire-item p {
    color: #fff;
    font-family: "Raleway";
    font-size: 24px;
    font-style: italic;
    font-weight: 400;
    margin: 15px 0 25px;
}

.single-hire-item .theme-btn {
    color: #fff;
    border-color: #fff;
    font-size: 20px;
}

.single-hire-item .theme-btn:hover {
    color: #0CBF86;
    background-color: #eaeaea;
}

/*== Hire Me CSS End ==*/

/*== Contact CSS Start ==*/

#contact-area {
    background-color: #f3f3f3;
}

.contact-info,
.contact-area-form {
    background-color: #fff;
    -webkit-box-shadow: 2px 2px 10px rgba(53, 53, 53, 0.3);
    box-shadow: 2px 2px 10px rgba(53, 53, 53, 0.3);
    padding: 50px 40px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.contact-info h2,
.contact-area-form h2 {
    color: #0cbf86;
    font-size: 30px;
}

.contact-info h2 {
    margin-bottom: 30px;
}

.con-info-item {
    margin-bottom: 15px;
    padding-left: 35px;
    position: relative;
}

.con-info-item i.fa,
.con-info-item span {
    color: #0CBF86;
}

.con-info-item i.fa {
    font-size: 20px;
    left: 0;
    position: absolute;
    top: 2px;
}

.con-info-item span {
    font-weight: 700;
}

.map-area iframe {
    border: 0 none;
    border-radius: 2px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    height: 100%;
    width: 100%;
}

.map-area {
    height: 250px;
    margin-top: 30px;
}

.contact-area-form p {
    font-size: 15px;
    font-weight: 300;
    margin-top: 10px;
}

.contact-area-form form {
    margin-top: 35px;
}

.contact-area-form form .form-group {
    margin-bottom: 40px;
}

.contact-area-form form input,
.contact-area-form form textarea {
    border: 0 none;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #919192;
    font-family: "Roboto";
    font-size: 13px;
    font-weight: 300 !important;
    padding-left: 0;
}

.contact-area-form form input,
.contact-area-form form textarea {
    border-bottom: 1px solid #908d8d;
}

.contact-area-form form textarea {
    height: 81px;
    resize: none;
}

.contact-area-form form input:focus,
.contact-area-form form textarea:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0px;
    border-bottom-color: #0CBF86;

}

.contact-area-form .theme-btn {
    font-size: 14px;
    padding: 10px 20px;
    background-color: transparent;
}

.contact-area-form .theme-btn:focus,
.contact-area-form .theme-btn:hover {
    cursor: pointer;
    background-color: #0CBF86;
    color: #fff;
}

#contactForm label {
    position: absolute;
}

#contact-area .help-block {
    color: #0CBF86 !important;
}

#contact-area .alert {
    background-color: #0CBF86;
    border: 0 none;
    color: #fff;
    font-family: "Roboto";
    font-size: 13px;
    font-weight: 300;
}

/*== Contact CSS End ==*/

/*== Footer Area Start ==*/

#footer-area {
    background-color: #0CBF86;
    color: #fff;
}

.widget-title h5 {
    color: #fff;
    display: inline-block;
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 35px;
    padding-bottom: 10px;
    position: relative;
    text-transform: uppercase;
}

.widget-title h5::after {
    border-bottom: 2px solid #fff;
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    width: 50%;
}

.widget-body {
    font-size: 15px;
    line-height: 1.8;
}

.widget-body img {
    margin-bottom: 15px;
    width: 200px;
}

.footer-icons a {
    border: 1px solid #fff;
    border-radius: 2px;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
    margin-right: 10px;
    text-align: center;
    -webkit-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
    width: 40px;
}

.footer-icons a:hover {
    background-color: #fff;
    color: #0CBF86;
}

.footer-icons {
    margin-top: 20px;
}

.footer-list {
    overflow: hidden;
}

.footer-list a {
    color: #fff;
    display: inline;
    line-height: 3;
    padding-left: 20px;
    position: relative;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

.footer-list a:hover {
    padding-left: 25px;
}

.footer-list a::after {
    content: "\f192";
    font-family: FontAwesome;
    left: 0;
    position: absolute;
    top: -12px;
}

.footer-list li {
    float: left;
    width: 50%;
}

.footer-form input {
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 2px;
    color: #fff;
    display: block;
    margin-bottom: 20px;
    padding: 8px 15px;
    width: 100%;
}

.footer-form input::-webkit-input-placeholder {
    color: #fff;
}

.footer-form input:-ms-input-placeholder {
    color: #fff;
}

.footer-form input::placeholder {
    color: #fff;
}

.footer-form input::-moz-placeholder {
    color: #fff;
}

.footer-form button {
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-weight: 500;
    padding: 7px 40px;
    -webkit-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}

.footer-form button:hover {
    background-color: #fff;
    color: #0CBF86;
}

.footer-bottom {
    border-top: 1px solid #fff;
    padding: 30px 0;
}

.copyright-text {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
}

/*== Fotter CSS End ==*/

/*== Preloader CSS Start ==*/

body.preloader-active {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 99999;
    overflow: hidden;
}

.preloader {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-color: #fff;
    z-index: 99999;
}

.preloader-spinner {
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    position: absolute;
}

.preloader .waves-block .waves {
    background-color: #0CBF86;
    height: 100px;
    margin-left: -50px;
    margin-top: -50px;
    width: 100px;
}

.preloader .waves-block .waves-1 {
    -webkit-animation-delay: 0.2s;
    animation-delay: 0.2s;
}

.preloader .waves-block .waves-2 {
    -webkit-animation-delay: 0.3s;
    animation-delay: 0.3s;
}

.preloader .waves-block .waves-3 {
    -webkit-animation-delay: 0.3s;
    animation-delay: 0.3s;
}

/*== Preloader CSS End ==*/

/*==========================================
   Home 2(index2) CSS Here
==========================================*/

.slider-item-wrap {
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.slider-bg-1 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/slider-img/slider-img-1.jpg);
}

.slider-bg-2 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/slider-img/slider-img-2.jpg);
}

.slider-bg-3 {
    background-image: url(ahttp://localhost/di/template/default/guest/ssets/img/hero-area-bg.jpg);
}

header#home-slider .owl-controls,
header#home-slider .owl-controls div {
    height: auto;
}

header#home-slider .owl-nav div {
    left: 100px;
    opacity: 0;
    position: absolute;
    top: 50%;
    visibility: hidden;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

header#home-slider .owl-nav div.owl-next {
    left: auto;
    right: 100px;
}

header#home-slider:hover .owl-nav div {
    opacity: 1;
    visibility: visible;
    left: 20px;
}

header#home-slider:hover .owl-nav div.owl-next {
    right: 20px;
    left: auto;
}

/*==========================================
   Home 3(index3) CSS Here
==========================================*/

#header-area {
    background-image: url('http://localhost/di/template/default/guest/assets/img/hero-area-bg.jpg');
    background-position: center center;
    background-size: cover;
}

</style>