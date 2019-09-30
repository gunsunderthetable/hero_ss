	<header class="cd-header">
		<div class="cd-header__logo"><a href="#0"><img src="$ThemeDir/assets/sbiz-logo2019-white.png" alt="Logo"></a></div>
		<nav class="cd-header__nav js-cd-header__nav">
			<ul>
                <% loop Menu(1) %>
                <li>
                    <a href="$Link" title="$Title" class="$LinkingMode">$MenuTitle</a>

                </li>
                <% end_loop %>
			</ul>
		</nav> <!-- .cd-header__nav -->
	</header>

