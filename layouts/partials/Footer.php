<div class="flex-footer-container">
    <div class="footer-txt"><a href="/web/layouts/pages/about-us.php" target="_self">about us</a></div>
    <div class="footer-txt"><a  href="/web/layouts/pages/privacy-policy.php" target="_self">privaci policy</a></div>
    <div class="footer-txt"><a onclick="document.getElementById('idReportError').style.display='block'" style="width:auto;">report error</a></div>
    <div class="footer-txt"><a onclick="document.getElementById('idCoockies').style.display='block'" style="width:auto;">cookie details</a></div>
    <div style="margin-bottom:0px;margin-top:60px;flex:100%">Follow</div>    
    <div style="width:20px;"><a href="facebook"><img src="<?= $assets ; ?>/images-home-library/facebooklogo.png"></a></div>
    <div style="width:20px;"><a href="insta"><img src="<?= $assets ; ?>/images-home-library/instagramlogo-removebg-preview.png"></a></div>
    <div style="width:20px;"><a href="tiktok"><img src="<?= $assets ; ?>/images-home-library/tiktoklogo-removebg-preview.png"></a></div>
  </div>
    <div class="flex-bottom-container">
      <div><img src="<?= $assets ; ?>/images-home-library/applepay.png"></div>
      <div><img src="<?= $assets ; ?>/images-home-library/visapay.jpg"></div>
      <div style="width:30px;"><img src="<?= $assets ; ?>/images-home-library/googlepay.png"></div>
      <div><img src="<?= $assets ; ?>/images-home-library/mastercardpay.jpg"></div>
      <div><img src="<?= $assets ; ?>/images-home-library/paypalpay.png"></div>
      <div style="flex:100%">@2023 HappyMindset</div>
  </div>
  <div id="idCoockies" class="modal-for-cookies">
    <div class="modal-content-for-cookies animate-for-cookies" action="/action_page.php" method="post">
   <div class="flex-coockies-container-for-cookies" >
     <div class="flex-header-for-cookies"><img src="<?= $assets ; ?>/images-home-library/weblogo.PNG" style="width:80px;"></div>    
    <div class="flex-collom-for-cookies">
   <div><a onclick="showText('<h3>Your Privacy</h3><p><br>This page provides an overview of our use of cookies and similar technologies &#40;from here we will refer to all those as <q>Cookies</q>&#41; and how to manage them. For more information please visit our Privacy Policy.</p><p>When you visit our properties and use our products and services &#40;<q>Services</q> &#41;, we use Cookies to analyse and measure our performance, customize content and serve personalized advertisements. We may place our own Cookies &#40;First-party Cookies&#41; or allow our service providers to place Cookies &#40;Third-party Cookies&#41; on your device and collect information such as your device ID, browser type and IP address so they can help us better understand your interaction with our Services. Advertisers and other advertising technology partners may also use their own third-party Cookies to collect information about your visits, deliver advertisements tailored to your interests, keep track of the number of views of a specific advertisement, analyses the effectiveness of advertisements, or provide auditing, research and reporting for advertisers. Such third parties may also match you to an existing interest category <q>e.g. automobiles</q> that they&rsquo;ve developed and provide you with more relevant advertising over time and across different websites.</p><br><p>When you click on save settings below, your preferences will be saved. You can change your settings at any time by using the consent settings module. Note that saving settings is linked to the particular browser and/or device you use to visit our Services. Saving your settings within one particular Service will not affect your choices on other Paramount Services, or if you visit this Service with another device or from a different browser. In addition, it won&rsquo;t affect any of your activities on third-party services. You have other choices to manage cookies and other tracking technologies on the internet such as using industry choice programs or managing your preferences within your browsers or devices. For more Information refer to our Privacy Policy.</p>')" class="full-width-link">Your Privacy</a></div>
    <div> <a onclick="showText('<h3>Essential</h3><br><p>These cookies are essential for the proper functioning of our Services. Essential cookies cannot be switched off in our systems. You can set your device to block or alert you about these cookies, but some parts of the Service will not work.</p>')" class="full-width-link">Essential</a>
   </div>
    <div><a onclick="showText('<h3>Analytic & Performance</h3><br><p>These Cookies allow us to collect information about how visitors use our properties. Some examples include counting visits and traffic sources, so we can measure and improve the performance of our services. If you do not allow these Cookies we will not know when users have visited our properties and will not be able to monitor performance.</p>')" class="full-width-link">Analytic & Performance</a></div>
    <div><a onclick="showText('<h3>Functional</h3><br><p>These Cookies enable the services to provide enhanced functionality and personalization. They may be set by us or by third party providers whose services we have added to our services. If you do not allow these Cookies then some or all of these services may not function properly.</p>')" class="full-width-link">Functional</a></div>
    <div><a onclick="showText('<h3>Marketing and Advertising</h3><br><p>These Cookies may be set by us or through our services by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant advertising on this and on other properties. If you do not allow these Cookies, you will still see ads, but you will experience less relevant advertising.</p>')" class="full-width-link">Marketing and Advertising</a></div>
    <div><a onclick="showText('<h3>Social Media</h3><br><p>These Cookies are set by a range of social media services that we have added to the services to enable you to share our content with your friends and networks. They are capable of tracking your browser across other sites, building up a profile of your interests to show you relevant content and advertisements on the relevant social networks. If you do not allow these Cookies you may not be able to use or see these sharing tools.</p>')" class="full-width-link">Social Media</a></div>
   </div>
   <div class="flex-info-container-for-cookies">
   <div id='result' class="content-for-cookies"> </div>
   </div>
   <div class="flex-footer-for-cookies"><button type="button" onclick="document.getElementById('idCoockies').style.display='none'">Close</button></div> 
   </div>
   </div>
   </div>

   <!--report error block dislay-->
 <div id="idReportError" class="modal-for-cookies">
  <div class="modal-content-for-report-error animate-for-cookies" action="/action_page.php" method="post">
 <div class="flex-coockies-container-for-cookies" >
   <div class="flex-header-for-cookies"><img src="<?= $assets ; ?>/images-home-library/weblogo.PNG" style="width:80px;"></div>    
 <div class="flex-write-report-error">
 <div class="textarea"><form action="../pages/report-erorr.php" method="post">
       <textarea id="w3review" name="username" rows="1" cols="50" placeholder=" "></textarea>
       <label class="label">Username</label>
       <textarea id="w3review" name="reportError" rows="8" cols="50" placeholder=" " style="margin-top:1vw;"></textarea>
       <label class="label" style="padding: 77px 0 0 15px;">Report error</label>
     <button type="submit" style="font-size:13px;margin-top:0.5vw;">Send report</button>
   </form> </div>
    <div class="flex-footer-for-cookies"><button type="button" onclick="document.getElementById('idReportError').style.display='none'" >Cancel</button></div> 
  </div>
</div>
</div> 

<!--Footer JAVA SCRIPT file-link is HERE!-->
<?php $assets = '/web/assets'; ?>
  <script src="<?= $assets ; ?>/javascript/functions-for-footer.js?v=<?php echo time(); ?>"></script>
  <script src="<?= $assets ; ?>/javascript/functions-for-home-page.js?v=<?php echo time(); ?>"></script>
  <script src="<?= $assets ; ?>/javascript/function-for-library.js?v=<?php echo time(); ?>"></script>
</body>
</html>