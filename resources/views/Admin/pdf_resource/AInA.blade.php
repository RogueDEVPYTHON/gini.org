<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GINI | GLOBAL INNOVATION INSTITUTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts | Roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700" rel="stylesheet">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!--  Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  Icofonts  -->
    <link rel="stylesheet" href="{{ url('assets/fonts/icofont/icofont.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>

<body>
   <div class="pdf-wrapper">
       <div class="container">
           <div class="pdf-header-top-logo">
               <img src="{{ url('assets/img/pdf-logo.png') }}" alt="" class="pdf-logo">
           </div>
           <div class="certify-text">
               <h5 class="mini-pdf-heading">
                   This is to certify that
               </h5>
           </div>
           <div class="pdf-p-text-block">
               <p>
                   having met with distinction the high standards of education,experience and demonstrated knoledge
                   established by the Global Innovation Institute (GInI), has been certified as a  
               </p>
           </div>
           <div class="pdf-main-heading">
               <h2 class="certerd-heading-block">Authorized Innovation Assessor(AInA)</h2>
           </div>
           <div class="pdf-bottom-block">
               <div class="row">
                   <div class="col-md-3">
                       <div class="left-sign-area">
                           <span>
                               Chair, Board of Directors 
                           </span>
                       </div>
                   </div> 
                   <div class="col-md-3">
                       <div class="logo-mid-left-block">
                           <img src="{{ url('assets/img/AInA.png') }}" alt="">
                       </div>
                   </div> 
                   <div class="col-md-3">
                        <div class="logo-mid-right-block">
                           <img src="{{ url('assets/img/gini-gold.png') }}" alt="">
                       </div>
                   </div> 
                   <div class="col-md-3">
                        <div class="right-sign-area">
                           <span>
                              Executive Director
                           </span>
                       </div>
                   </div> 
               </div>
           </div>
           <div class="pdf-bottom-b-block">
               <div class="single-text-writing-block">
                   <span>Certificate Number: {{ $cert_number }}</span>
               </div> 
               <div class="single-text-writing-block">
                   <span>Issue On: {{ $issue_date }}</span>
               </div>
               <div class="single-text-writing-block">
                   <span>Expires On: {{ $expiry_date }}</span>
               </div>
           </div>
           <div class="pdf-footer">
               <span>Online Varification <a href="">www.GInI.org/verification</a></span>
           </div>
       </div>    
   </div> 



















</body>

</html>

    