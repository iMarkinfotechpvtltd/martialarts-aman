<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
global $post;
while ( have_posts() ) : the_post();
?>

<section class="kids-page-sec1">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-holder">
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'adult' ); ?>			
			<img src="<?php echo $src[0];?>" alt="Adult page" class="img-responsive" />
			</div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2 class="gen-heading"><?php the_title();?></h2>
            <?php echo content('200');?>
        </div>
    </div>
    </div>
    </section>
    
<section class="school-reg-form  kids-p-from1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading">Get Started Now</h2>
                <h3>Get our class schedule, prices, and web special</h3>
               <!-- <form class="form-inline" role="form">
                    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
    <input type="phone" class="form-control" placeholder="Phone">
                    </div>
  <button type="submit" class="btn">Submit</button>
</form>-->

<?php
$category_detail=get_the_terms($post->ID, 'adult_category');	
$cat= $category_detail[0]->slug;
if($cat=="centreville"){
?>

<form method="post" class="af-form-wrapper form-inline" role="form" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="1130412055" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356595" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_fc784c5d3c470fb5aca0a92bda7bc93b" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Centreville_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-1130412055" class="af-form"><div id="af-header-1130412055" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-1130412055" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211607" type="text" placeholder="Name" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" placeholder="Email" id="awf_field-84211608" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text"  placeholder="Phone" id="awf_field-84211609" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button type="submit" name="submit" id="af-submit-image-1130412055"  class="btn" alt="Submit Form" src=" " tabindex="503">Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-1130412055" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jIzMDCyMTAysrA==" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-1130412055")) {
                document.getElementById("af-form-1130412055").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-1130412055")) {
                document.getElementById("af-body-1130412055").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-1130412055")) {
                document.getElementById("af-header-1130412055").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-1130412055")) {
                document.getElementById("af-footer-1130412055").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="culpeper"){ ?>

<form method="post" class="af-form-wrapper form-inline" role="form" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="79124330" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356602" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_6a54347b2782594a3aa872804acb1ca2" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Culpeper_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-79124330" class="af-form"><div id="af-header-79124330" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-79124330" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211960" type="text" name="name" placeholder="Name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84211961" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84211962" placeholder="Phone" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-79124330" type="submit" class="btn"alt="Submit Form" src=" " tabindex="503">Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-79124330" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=7JyMTCzMzAw=" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-79124330")) {
                document.getElementById("af-form-79124330").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-79124330")) {
                document.getElementById("af-body-79124330").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-79124330")) {
                document.getElementById("af-header-79124330").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-79124330")) {
                document.getElementById("af-footer-79124330").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php }else if($cat=="frederickburg-plank"){?>

   
<form method="post" class="af-form-wrapper form-inline" role="form" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="1570880355" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4355353" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_c64e8c8052d17cd1e3aa91786ab1403d" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Fredericksburg_Rt_3_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-1570880355" class="af-form"><div id="af-header-1570880355" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-1570880355" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211303" type="text" placeholder="Name" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84211304" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84211305" placeholder="Phone" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button  name="submit" id="af-submit-image-1570880355" type="submit" class="btn" alt="Submit Form" src=" " tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-1570880355" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jKzsDBwcDMysrA==" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-1570880355")) {
                document.getElementById("af-form-1570880355").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-1570880355")) {
                document.getElementById("af-body-1570880355").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-1570880355")) {
                document.getElementById("af-header-1570880355").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-1570880355")) {
                document.getElementById("af-footer-1570880355").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>

<?php } else if($cat=="frederickburg"){ ?>
  
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl" target="_blank" >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="685129758" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4350501" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_10c29b589514a3c375d573950fcd14be" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Fredericksburg_17_web_form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-685129758" class="af-form"><div id="af-header-685129758" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-685129758" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84182182" type="text" name="name" placeholder="Name" class="text form-control" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text form-control" id="awf_field-84182183" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84182184"  placeholder="Phone" class="text form-control" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
 <button name="submit" id="af-submit-image-685129758" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-685129758" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=bBysjEyc7Kwc" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-685129758")) {
                document.getElementById("af-form-685129758").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-685129758")) {
                document.getElementById("af-body-685129758").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-685129758")) {
                document.getElementById("af-header-685129758").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-685129758")) {
                document.getElementById("af-footer-685129758").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="mclean"){?> 
           
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="215374590" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356615" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_dc44a95cde06123046f7b73330ebe742" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="McLean_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-215374590" class="af-form"><div id="af-header-215374590" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-215374590" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84212093" type="text" name="name" placeholder="Name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84212094" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84212095" placeholder="Phone" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-215374590" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-215374590" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=TIyszOwsrJwM" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-215374590")) {
                document.getElementById("af-form-215374590").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-215374590")) {
                document.getElementById("af-body-215374590").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-215374590")) {
                document.getElementById("af-header-215374590").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-215374590")) {
                document.getElementById("af-footer-215374590").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="oakton"){?>

<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="932867534" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356598" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_7832eb3d70b1d6860bcfd1897982d6af" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Oakton_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-932867534" class="af-form"><div id="af-header-932867534" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-932867534" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211747" type="text" placeholder="Name" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" placeholder="Email" id="awf_field-84211748" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" placeholder="Phone" id="awf_field-84211749" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-932867534" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-932867534" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=nMxMHGzsrMws" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-932867534")) {
                document.getElementById("af-form-932867534").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-932867534")) {
                document.getElementById("af-body-932867534").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-932867534")) {
                document.getElementById("af-header-932867534").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-932867534")) {
                document.getElementById("af-footer-932867534").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>

<?php } else if($cat=="stafford"){?>
<!--<form class="form-inline" >
                    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
    <input type="phone" class="form-control" placeholder="Phone">
                    </div>
  <button type="submit" class="btn">Submit</button>
</form>-->
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="566080935" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356620" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_91822d88b22af01489c245fdecc1b5ea" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Stafford_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-566080935" class="af-form"><div id="af-header-566080935" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-566080935" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84212226" type="text" name="name" placeholder="Name" class="text form-control" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84212227" placeholder="Email" type="text form-control" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text"  placeholder="Phone" id="awf_field-84212228" class="text form-control" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
  <button name="submit" id="af-submit-image-566080935" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-566080935" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=rGxsDBwMnMys" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-566080935")) {
                document.getElementById("af-form-566080935").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-566080935")) {
                document.getElementById("af-body-566080935").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-566080935")) {
                document.getElementById("af-header-566080935").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-566080935")) {
                document.getElementById("af-footer-566080935").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="vienna"){ ?>
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" role="form" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="1418545164" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356590" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_198860304a34652be8ff3de17b3b96ca" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Vienna_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-1418545164" class="af-form"><div id="af-header-1418545164" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-1418545164" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211446" type="text" name="name" class="text form-control" placeholder="Name" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text form-control" id="awf_field-84211447" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84211448" placeholder="Phone" class="text form-control" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-1418545164" type="submit" class="btn" tabindex="503">Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>-->
<!--<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-1418545164" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jCyMHKwsrIxsLA==" alt="" /></div>-->
</form>
<script type="text/javascript">
<!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-1418545164")) {
                document.getElementById("af-form-1418545164").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-1418545164")) {
                document.getElementById("af-body-1418545164").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-1418545164")) {
                document.getElementById("af-header-1418545164").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-1418545164")) {
                document.getElementById("af-footer-1418545164").className = "af-footer af-quirksMode";
            }
        }
    })();
	-->
</script>
<?php } ?> 
            
            </div> 
        </div>
    </div>
</section>
    

<section class="adult-testimonials contrast-bg">
    <div class="container">
    <div class="testimonials-adult lost-20-p">
       <?php the_field('testimonial1_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial1_name',$post->ID);?></span>
    </div>
        
    <div class="testimonials-adult">
       <?php the_field('testimonial2_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial2_name',$post->ID);?></span>
    </div>    
        
    <div class="testimonials-adult last">
       <?php the_field('testimonial3_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial3_name',$post->ID);?></span>
    </div>
    </div>
</section> 
    
    
    

    
<section class="adult-p-sections">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <?php the_field('training_with_us_content',$post->ID);?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="pos wht-u-get">
			<?php 						
					$image_id=get_post_meta($post->ID,"training_with_us_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'train' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="training_with_us" />
			</div>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections contrast-bg">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="pos slf-defense">
			<?php 						
					$image_id=get_post_meta($post->ID,"self_defense_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'self' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="self"/>
			</div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <?php the_field('self_defense_content',$post->ID);?>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
             <?php the_field('mental_strength_content',$post->ID);?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="pos mental-strgth">
			<?php 						
					$image_id=get_post_meta($post->ID,"mental_strength_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'mental' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="mental strength" class="" />
			</div>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections contrast-bg">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="pos make-frnds">
			<?php 						
					$image_id=get_post_meta($post->ID,"new_friends_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'new' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="new friends" class="img-responsive" />
			</div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <?php the_field('new_friends_content',$post->ID);?>
        </div>
    </div>
    </div>
</section>
    
    
    
<section class="adult-p-sections">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
           <?php the_field('professional_instructors_content',$post->ID);?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="pos prof-instructor">
			<?php 						
					$image_id=get_post_meta($post->ID,"professional_instructors_image",true);	
					$thumb = wp_get_attachment_image_src($image_id, 'proff' );
			?>	
			<img src="<?php echo $thumb['0'];?>" alt="Professional" class="img-responsive" />
			</div>
        </div>
    </div>    
    </div>
</section>
    
    

<section class="adult-testimonials contrast-bg">
    <div class="container">
    <div class="testimonials-adult">
        <?php the_field('testimonial4_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial4_name',$post->ID);?></span>
    </div>    
        
    <div class="testimonials-adult last">
        <?php the_field('testimonial5_content',$post->ID);?>
        <span class="adult-name"><?php the_field('testimonial5_name',$post->ID);?></span>
    </div>
    </div>
</section> 
    
    
    
<section class="school-reg-form get-startd">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="gen-heading">Let’s Get Started!</h2>
                <p>Enter your info to get access to our class schedule, prices, and web special.</p>
                <!--<form class="form-inline" role="form">
                    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
    <input type="phone" class="form-control" placeholder="Phone">
                    </div>
  <button type="submit" class="btn">Submit</button>
</form>-->

<?php
$category_detail=get_the_terms($post->ID, 'adult_category');	
$cat= $category_detail[0]->slug;
if($cat=="centreville"){
?>

<form method="post" class="af-form-wrapper form-inline" role="form" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="1130412055" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356595" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_fc784c5d3c470fb5aca0a92bda7bc93b" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Centreville_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-1130412055" class="af-form"><div id="af-header-1130412055" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-1130412055" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211607" type="text" placeholder="Name" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" placeholder="Email" id="awf_field-84211608" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text"  placeholder="Phone" id="awf_field-84211609" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button type="submit" name="submit" id="af-submit-image-1130412055"  class="btn" alt="Submit Form" src=" " tabindex="503">Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-1130412055" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jIzMDCyMTAysrA==" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-1130412055")) {
                document.getElementById("af-form-1130412055").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-1130412055")) {
                document.getElementById("af-body-1130412055").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-1130412055")) {
                document.getElementById("af-header-1130412055").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-1130412055")) {
                document.getElementById("af-footer-1130412055").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="culpeper"){ ?>

<form method="post" class="af-form-wrapper form-inline" role="form" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="79124330" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356602" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_6a54347b2782594a3aa872804acb1ca2" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Culpeper_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-79124330" class="af-form"><div id="af-header-79124330" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-79124330" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211960" type="text" name="name" placeholder="Name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84211961" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84211962" placeholder="Phone" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-79124330" type="submit" class="btn"alt="Submit Form" src=" " tabindex="503">Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-79124330" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=7JyMTCzMzAw=" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-79124330")) {
                document.getElementById("af-form-79124330").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-79124330")) {
                document.getElementById("af-body-79124330").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-79124330")) {
                document.getElementById("af-header-79124330").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-79124330")) {
                document.getElementById("af-footer-79124330").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php }else if($cat=="frederickburg-plank"){?>

   
<form method="post" class="af-form-wrapper form-inline" role="form" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="1570880355" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4355353" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_c64e8c8052d17cd1e3aa91786ab1403d" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Fredericksburg_Rt_3_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-1570880355" class="af-form"><div id="af-header-1570880355" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-1570880355" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211303" type="text" placeholder="Name" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84211304" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84211305" placeholder="Phone" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button  name="submit" id="af-submit-image-1570880355" type="submit" class="btn" alt="Submit Form" src=" " tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-1570880355" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jKzsDBwcDMysrA==" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-1570880355")) {
                document.getElementById("af-form-1570880355").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-1570880355")) {
                document.getElementById("af-body-1570880355").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-1570880355")) {
                document.getElementById("af-header-1570880355").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-1570880355")) {
                document.getElementById("af-footer-1570880355").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>

<?php } else if($cat=="frederickburg"){ ?>
  
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl" target="_blank" >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="685129758" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4350501" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_10c29b589514a3c375d573950fcd14be" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Fredericksburg_17_web_form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-685129758" class="af-form"><div id="af-header-685129758" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-685129758" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84182182" type="text" name="name" placeholder="Name" class="text form-control" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text form-control" id="awf_field-84182183" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84182184"  placeholder="Phone" class="text form-control" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
 <button name="submit" id="af-submit-image-685129758" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-685129758" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=bBysjEyc7Kwc" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-685129758")) {
                document.getElementById("af-form-685129758").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-685129758")) {
                document.getElementById("af-body-685129758").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-685129758")) {
                document.getElementById("af-header-685129758").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-685129758")) {
                document.getElementById("af-footer-685129758").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="mclean"){?> 
           
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="215374590" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356615" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_dc44a95cde06123046f7b73330ebe742" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="McLean_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-215374590" class="af-form"><div id="af-header-215374590" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-215374590" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84212093" type="text" name="name" placeholder="Name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84212094" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84212095" placeholder="Phone" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-215374590" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-215374590" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=TIyszOwsrJwM" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-215374590")) {
                document.getElementById("af-form-215374590").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-215374590")) {
                document.getElementById("af-body-215374590").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-215374590")) {
                document.getElementById("af-header-215374590").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-215374590")) {
                document.getElementById("af-footer-215374590").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="oakton"){?>

<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="932867534" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356598" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_7832eb3d70b1d6860bcfd1897982d6af" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Oakton_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-932867534" class="af-form"><div id="af-header-932867534" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-932867534" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211747" type="text" placeholder="Name" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" placeholder="Email" id="awf_field-84211748" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" placeholder="Phone" id="awf_field-84211749" class="text" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-932867534" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-932867534" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=nMxMHGzsrMws" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-932867534")) {
                document.getElementById("af-form-932867534").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-932867534")) {
                document.getElementById("af-body-932867534").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-932867534")) {
                document.getElementById("af-header-932867534").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-932867534")) {
                document.getElementById("af-footer-932867534").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>

<?php } else if($cat=="stafford"){?>
<!--<form class="form-inline" >
                    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
    <input type="phone" class="form-control" placeholder="Phone">
                    </div>
  <button type="submit" class="btn">Submit</button>
</form>-->
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="566080935" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356620" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_91822d88b22af01489c245fdecc1b5ea" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Stafford_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-566080935" class="af-form"><div id="af-header-566080935" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-566080935" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84212226" type="text" name="name" placeholder="Name" class="text form-control" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text" id="awf_field-84212227" placeholder="Email" type="text form-control" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text"  placeholder="Phone" id="awf_field-84212228" class="text form-control" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
  <button name="submit" id="af-submit-image-566080935" type="submit" class="btn" alt="Submit Form" tabindex="503" >Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>
<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-566080935" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=rGxsDBwMnMys" alt="" /></div>-->
</form>
<script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-566080935")) {
                document.getElementById("af-form-566080935").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-566080935")) {
                document.getElementById("af-body-566080935").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-566080935")) {
                document.getElementById("af-header-566080935").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-566080935")) {
                document.getElementById("af-footer-566080935").className = "af-footer af-quirksMode";
            }
        }
    })();
    -->
</script>
<?php } else if($cat=="vienna"){ ?>
<form method="post" class="af-form-wrapper form-inline" accept-charset="UTF-8" role="form" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="1418545164" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist4356590" />
<input type="hidden" name="redirect" value="http://www.mtkim.com/thank-you" id="redirect_198860304a34652be8ff3de17b3b96ca" />
<input type="hidden" name="meta_redirect_onlist" value="http://www.mtkim.com/thank-you" />
<input type="hidden" name="meta_adtracking" value="Vienna_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-1418545164" class="af-form"><div id="af-header-1418545164" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-1418545164" class="af-body af-standards">
<div class="af-element form-group">
<div class="af-textWrap">
<input id="awf_field-84211446" type="text" name="name" class="text form-control" placeholder="Name" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element form-group">
<div class="af-textWrap"><input class="text form-control" id="awf_field-84211447" placeholder="Email" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " />
</div><div class="af-clear"></div>
</div>
<div class="af-element form-group">
<div class="af-textWrap"><input type="text" id="awf_field-84211448" placeholder="Phone" class="text form-control" name="custom Phone" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="502" /></div>
<div class="af-clear"></div></div><div class="af-element buttonContainer form-group">
<button name="submit" id="af-submit-image-1418545164" type="submit" class="btn" tabindex="503">Submit</button>
<div class="af-clear"></div>
</div>
<!--<div class="af-element privacyPolicy" style="text-align: center"><p>We respect your <a title="Privacy Policy" href="https://www.aweber.com/permission.htm" target="_blank" rel="nofollow">email privacy</a></p>
<div class="af-clear"></div>
</div>-->
<!--<div class="af-element poweredBy" style="text-align: center; font-size: 9px;"><p><a href="https://www.aweber.com" title="AWeber Email Marketing" target="_blank" rel="nofollow">Powered by AWeber Email Marketing</a></p>
<div class="af-clear"></div>
</div>-->
</div>
<div id="af-footer-1418545164" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<!--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jCyMHKwsrIxsLA==" alt="" /></div>-->
</form>
<script type="text/javascript">
<!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-1418545164")) {
                document.getElementById("af-form-1418545164").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-1418545164")) {
                document.getElementById("af-body-1418545164").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-1418545164")) {
                document.getElementById("af-header-1418545164").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-1418545164")) {
                document.getElementById("af-footer-1418545164").className = "af-footer af-quirksMode";
            }
        }
    })();
	-->
</script>
<?php } ?> 
                <?php
					$category_detail=get_the_terms($post->ID, 'adult_category');	
				?>
                <ul class="c-info-frm">
                <li><span><i class="fa fa-home" aria-hidden="true"></i>Address:</span><?php the_field('address',$category_detail[0]);?></li>
                <li><span><i class="fa fa-phone" aria-hidden="true"></i>Phone:</span><?php the_field('phone',$category_detail[0]);?></li>
            </ul>
            
            </div> 
        </div>
    </div>
</section>   
<?php 
endwhile;
		?>  
<?php get_footer(); ?>
