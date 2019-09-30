    <main>
        <section class="cd-hero js-cd-hero js-cd-autoplay">
        $MyHeroSlides

        <div class="cd-hero__nav js-cd-nav">
            <nav>
                <span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>
                <ul>
                    <% loop $MyHeroNavigation %>
                    <li<% if $Pos==1%> class="cd-selected"<% end_if %>><a href="#0" alt="title">$Title</a></li>
                    <% end_loop %>
                </ul>
            </nav> 
        </div> <!-- .cd-hero__nav -->

    </section> <!-- .cd-hero -->
    <div class="cd-main-content">
        $Content
        $Form
    </div> 
    
    </main> <!-- .cd-main-content -->



