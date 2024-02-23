@include('admin.inc_url')

@include('admin.inc_meta_def')
<?php
$pageTitle = "Maanita - Joinery & Interiors";

$meta_name = "Maanita - Joinery & Interiors";
$meta_image_url = "http://www.spearfox.xyz/incs/css/images/Spear_fox.jpg";
$meta_description = "Spear Fox Corporation is one of the fastest growing Business Leaders in Chennai, enabling its clients and customers to lead their business with our smart techniques, by providing a broad range of services and products";
$meta_theme_color = "#e86724";
$meta_site_url = "http://spearfox.xyz/";
$meta_classification = "Business, Professional Advertising Partners India, Leading with smartness";
$meta_keyphrase = "Spear Fox Corporation, Leading with Smartness, Branding, Advertising Agency, Smartness, Spear Fox, Conglomerate Company, Brand Promotors";
$meta_abstract = "One place for all solutions";

$isPlugin = true;
$ishomeHeader = true;
?>




<!DOCTYPE html>
<html>

<head>

    @include('admin.inc_headerinfo')
</head>

<body>
    <div class="page-wrapper">
        
        
    
    

          <?php //@include('admin.inc_preload')//?>
            
           @include('admin.inc_header')
           
            
            @include('admin.inc_main_slider')
            
            @include('admin.inc_archi')
            
            @include('admin.inc_portfolio')
            
            @include('admin.inc_services')
            
            @include('admin.inc_planning')
            
            @include('admin.inc_section_two')
            
            @include('admin.inc_proj_plan')
            
            @include('admin.inc_testi')
            
            @include('admin.inc_contact')
            
            @include('admin.inc_clients')
            
            @include('admin.inc_footer')
        </div>
        <!--End pagewrapper-->    
        
        @include('admin.inc_top')
        
        @include('admin.inc_script')
        
</body>

</html>