<?php
/*
 Template Name: Eventsch Template
 */
?>
<?php get_header(); ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>
    .schedule-page-banner, .calander-kim, .payment-mt,  .contact-mt{text-align: center;}
.schedule-page-banner {
    height: 470px;
    background-position: center;
    background-repeat: no-repeat !important;
    background-size: cover;
    padding-top: 71px;
}
.schedule-page-banner h2{
    color: #e40014;
    font-size: 50px;
    font-weight: 900;
    text-transform: uppercase;
}
.schedule-page-banner h4{
    color: #000;
    font-size: 27px;
}
    
.calander-kim {padding: 90px 0 100px;}
    .calander-kim h2, .calander-kim h3, .payment-mt h2, .payment-mt h3{font-family: raleway; font-weight: 700;}
    .calander-kim h2, .payment-mt h2{font-size: 44px; font-weight: 900;}
    .calander-kim h3, .payment-mt h3 {color: #e40014; font-size: 36px; font-weight: 900;}
    
.calander-kim table tr th {
    text-align: center;
    background-color: #e40014;
    color: #fff;
    font-size: 27px;
}
    
.calander-kim table tr td {
    text-align: center;
    color:#000;
    font-size: 20px;
    height: 111px;
}

tr:nth-child(2n) {
    background-color: #f7f7f7;
}
    

.payment-mt {
  background-color: #f7f7f7;
  display: inline-block;
  padding: 80px 0;
  width: 100%;
}
.payment-mt .lft {
  display: inline-block;
  vertical-align: top;
  width: 47%;
  margin: 10px 1%;
}
.payment-mt .rgt {
  display: inline-block;
  vertical-align: top;
  width: 47%;
  margin: 10px 1%;
}
    
    
    
.contact-mt{ display: inline-block; width: 100%; padding: 74px 0;}
.contact-mt p {font-size: 19px;}
.contact-mt .phone-btn {
  background-color: #e40014;
  border-radius: 5px;
  color: #fff;
  display: inline-block;
  font-family: "open sans";
  font-size: 36px;
  font-weight: 800;
  padding: 10px 35px;
  margin-top: 50px;
}
</style>

<section class="schedule-page-banner" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-web-special.jpg');">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <h4>Check out our class schedule and web special below</h4>
    </div>
</section>


<section class="calander-kim">
    <div class="container">
        <h2>Step1</h2>
        <h3>We recommend attending 1-2x per week. Check Out Our Class Schedule. </h3>
        
        <div class="">
        <table>
        <tr>
        <th width="290px" height="60px;">Classes</th>
        <th>Mon</th>
        <th>Tues</th>
        <th>Wed</th>
        <th>Thus</th>
        <th>Fri</th>
        <th>Sat</th>
        <th>Sun</th>
        </tr>
            
        <tr>
            <td>Tigers Taekwondo Ages 4-6</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>            
        </tr>
        
        <tr>
            <td>Kids Taekwondo Ages 4-6</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>
            <td>54654</td>            
        </tr>
            
        </table>
        </div>
            
        
    </div>
</section>

<section class="payment-mt">
    <div class="container">
        <h2>Step2</h2>
        <h3>Take advantage of our web special</h3>
        <div class="adv-product">
        <div class="lft">
        <h2>4 Weeks for</h2>
        <span>$450</span>
        <div class="abc">  
Plus: A FREE Uniform*
* Uniform - $49 Value! Yours FREE With Purchase
Hurry! Class Sizes are Limited!
            <a href="">Buy Now</a>
        </div>
            
        </div>
        <div class="rgt">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uniform-web.jpg" alt="uniform" />
        </div>
        </div>
        
    </div>
</section>




<section class="contact-mt">
    <div class="container">
        <h2 class="gen-heading">Have a question? Call us at</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <a href="tel:7032550202" class="phone-btn">(703) 255-0202</a>
    </div>
</section>



<?php get_footer();?>