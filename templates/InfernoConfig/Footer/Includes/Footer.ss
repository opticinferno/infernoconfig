<div class="footer " <% if $SiteConfig.SocialOptions == 0 && $SiteConfig.PaymentOptions == 0  %><% if SiteConfig.ContentOption == 1 || SiteConfig.ContentOption == 2 || SiteConfig.ContentOption == 3 || $SiteConfig.Bitcoin == 0 || $SiteConfig.Mobicred == 0 || $SiteConfig.Payfast == 0 || $SiteConfig.Bitcoin == 1 || $SiteConfig.Mobicred == 1 || $SiteConfig.Payfast == 1 || $SiteConfig.Facebook == 0 || $SiteConfig.Twitter == 0 || $SiteConfig.Google == 0 || $SiteConfig.Linked == 0 || $SiteConfig.Instagram == 0 || $SiteConfig.Pinterest == 0 || $SiteConfig.RSS == 0 || $SiteConfig.Youtube == 0 || $SiteConfig.Tripadviser == 0 %> style="
        width:100%;
        " <% end_if %><% end_if %>>


   <div class="$SiteConfig.FooterWidth footer-holder" style="padding:15px;"  >

    <div class="footer-content ">

          <% include InfernoConfig/Footer/FooterContent %>


    </div>
</div>

</div>

<style>
	.footer-holder{background-color: #$SiteConfig.BackgroundColor !important;}
</style>
