<div id="breadBox">
    <% if $Level(1).ClassName == 'HomePage' %>
    
    <% if $Pages %>
	<% loop $Pages %>
		<% if $Last %>$MenuTitle.XML<% else %><a href="$Link" class="breadcrumb-$Pos">$MenuTitle.XML</a> > <% end_if %>
	<% end_loop %>
    <% end_if %>
    <% else %>
    <a href="/">Home</a> > 
    <% if $Pages %>
	<% loop $Pages %>
		<% if $Last %>$MenuTitle.XML<% else %><a href="$Link" class="breadcrumb-$Pos">$MenuTitle.XML</a> > <% end_if %>
	<% end_loop %>
    <% end_if %>    
    <% end_if %>

</div>

