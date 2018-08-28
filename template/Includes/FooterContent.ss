<div class="container">
<div class="align-items-start">
<% if $SiteConfig.ContentOption == "0" && $SiteConfig.SocialOptions =="0" && $SiteConfig.PaymentOptions =="0" && $SiteConfig.ContactOptions == "0" %>
<div class="col-md-12">
	$SiteConfig.FooterContent
</div>
<% else %>
<div class="footer row ">
<div class="col-xs-12 col-sm-4">
	<% if $SiteConfig.ContactOptions == "1" %>
			<% include FooterContact %>
	<% end_if %>
	<% if $SiteConfig.ContactMapList == "1" %>
		<div class="embed-responsive embed-responsive-4by3">
  			<iframe class="embed-responsive-item" src="$SiteConfig.ContactMap"></iframe>
		</div>
	<% end_if %>
	<% if $SiteConfig.SocialOptions == "1" %>
		<% include FooterSocial %>
	<% end_if %>
	<% if $SiteConfig.ContentOption == "1" %>
		$SiteConfig.FooterContent
	<% end_if %>
	<% if $SiteConfig.PaymentOptions == "1" %>
		<% include FooterPayment %>
	<% end_if %>	
</div>
<div class="col-xs-12 col-sm-4">
	<% if $SiteConfig.ContactOptions == "2" %>
			<% include FooterContact %>
	<% end_if %>
	<% if $SiteConfig.ContactMapList == "2" %>
		<div class="embed-responsive embed-responsive-4by3">
  			<iframe class="embed-responsive-item" src="$SiteConfig.ContactMap"></iframe>
		</div>
	<% end_if %>
	<% if $SiteConfig.SocialOptions == "2" %>
		<% include FooterSocial %>
	<% end_if %>
	<% if $SiteConfig.ContentOption == "2" %>
		$SiteConfig.FooterContent
	<% end_if %>
	<% if $SiteConfig.PaymentOptions == "2" %>
		<% include FooterPayment %>
	<% end_if %>
</div>
<div class="col-xs-12 col-sm-4">
	<% if $SiteConfig.ContactOptions == "3" %>
			<% include FooterContact %>
	<% end_if %>
	<% if $SiteConfig.ContactMapList == "3" %>
		<div class="embed-responsive embed-responsive-4by3">
  			<iframe class="embed-responsive-item" src="$SiteConfig.ContactMap"></iframe>
		</div>
	<% end_if %>
	<% if $SiteConfig.SocialOptions == "3" %>
		<% include FooterSocial %>
	<% end_if %>
	<% if $SiteConfig.ContentOption == "3" %>
		$SiteConfig.FooterContent
	<% end_if %>
	<% if $SiteConfig.PaymentOptions == "3" %>
		<% include FooterPayment %>
	<% end_if %>
</div>
<% end_if %>
</div>
<% if $SiteConfig.FooterSub == "1" %>
	<div class="container footer-content">
		<div class="col-md-12">
			$SiteConfig.FooterSubContent
		</div>
	</div>
<% end_if %>
</div>
</div>
<style>
	
	.footer a{color: #$SiteConfig.LinkColor !important;}	
	.footer a:hover{color: #$SiteConfig.LinkHoverColor !important;}
	.footer p{color: #$SiteConfig.TextColor !important;}
	.footer h1{color: #$SiteConfig.HeaderColor !important;}
	.footer h2{color: #$SiteConfig.HeaderColor !important;}
	.footer h3{color: #$SiteConfig.HeaderColor !important;}
	.footer h4{color: #$SiteConfig.HeaderColor !important;}

	
</style>
<br>
