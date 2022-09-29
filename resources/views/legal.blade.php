<?php
function pageName($subsec) {
    if ($subsec === 'tos'){
        return 'Terms of service';
    }
    else{
        return 'Privacy Policy';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{pageName($subsection)}}</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<x-nav />
<div class="container-fluid">
<h1>Legal: {{pageName($subsection)}}</h1>
        @if ($subsection ==='tos')
        <p>The term 'CoolTech' or 'us' or 'we' refers to the owner of the website whose registered office is Johannesburg. Our company registration number is 123456789. The term 'you' refers to the user or viewer of our website.</P>

<p>The use of this website is subject to the following terms of use:</P>

<ul>
<li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
<li>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: ip address.</li>
<li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
<li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
<li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
<li>All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</li>
<li>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li>
<li>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li>
<li>Your use of this website and any dispute arising out of such use of the website is subject to the laws of Repbulic of South Africa.</li>
</ul>
        
        @else 
        <h3>Information that is gathered from visitors</h3>
<p>In common with other websites, log files are stored on the web server saving details such as the visitor's IP address, browser type, referring page and time of visit.
    Cookies may be used to remember visitor preferences when interacting with the website.
    Where registration is required, the visitor's email and a username will be stored on the server.</p>
<h3>How the Information is used</h3>
<p>The information is used to enhance the vistor's experience when using the website to display personalised content and possibly advertising.
    E-mail addresses will not be sold, rented or leased to 3rd parties.
    E-mail may be sent to inform you of news of our services or offers by us or our affiliates.</p>

 <h3>Visitor Options</h3>   
 <p>If you have subscribed to one of our services, you may unsubscribe by following the instructions which are included in e-mail that you receive.
    You may be able to block cookies via your browser settings but this may prevent you from access to certain features of the website.</p>

<h3>Cookies</h3>
<p>Cookies are small digital signature files that are stored by your web browser that allow your preferences to be recorded when visiting the website. Also they may be used to track your return visits to the website.
    3rd party advertising companies may also use cookies for tracking purposes</p>

<h3>Google Ads</h3>
<p>Google, as a third party vendor, uses cookies to serve ads.
    Google's use of the DART cookie enables it to serve ads to visitors based on their visit to sites they visit on the Internet.
    Website visitors may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.</p>
        
        @endif
<x-cookie-notice />
</div>

</body>
<footer>
        <x-footer />
    </footer>
</html>