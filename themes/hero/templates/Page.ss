<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <% base_tag %>
        <title>$Title</title>
        <meta name="description" content="SilverStripe Hero slider demo">
        <meta name="agency" content="SuffolkCloud">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Exo+2:700,900|Open+Sans:400,700|Arbutus+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="$ThemeDir/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="$ThemeDir/css/hero.css"> <!-- Resource style -->

        <% if $SiteConfig.Favicon %>
        <link rel="shortcut icon" href="$SiteConfig.Favicon.URL" />        
        <% end_if %>

        <% include GoogleAnalytics %>
        
        <% include CookieButton %>
               
    </head>
    <body class="$ClassName $BackgroundColour">

        <% include Header %>
        <a name="maincontent" id="maincontent"></a>
        <h1>$BackgroundColour</h1>
            $Layout

        <% include Footer %>

    </body>
    <script src="$ThemeDir/JavaScript/main.js"></script> <!-- Resource JavaScrip -->
</html>