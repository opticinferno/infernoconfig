<h2>Contact Information</h2>
		<p>
			<% if $SiteConfig.ContactName != "" %>
					Name: $SiteConfig.ContactName<br>
			<% end_if %>
			<% if $SiteConfig.ContactPhone !="" %>
				Phone: <a href="tel:$SiteConfig.ContactPhone">$SiteConfig.ContactPhone</a><br>
			<% end_if %>
			<% if $SiteConfig.ContactEmail != "" %>
				Email: <a href="mailto:$SiteConfig.ContactEmail">$SiteConfig.ContactEmail</a><br>
			<% end_if %>
			<% if $SiteConfig.ContactAddress !="" %>
				$SiteConfig.ContactAddress
			<% end_if %></p>