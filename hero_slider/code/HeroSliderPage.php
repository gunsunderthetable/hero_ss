<?php
class HeroSliderPage extends Page {

    public static $db = array(
    );

    public static $has_many = array(
        "HeroSlides" => "HeroSlide"
    );  

    public function getCMSFields() {
      $fields = parent::getCMSFields();
      
        $gridFieldConfig = GridFieldConfig::create()->addComponents(
          new GridFieldSortableRows('SortOrder'),                         
          new GridFieldToolbarHeader(),
          new GridFieldAddNewButton('toolbar-header-right'),
          new GridFieldSortableHeader(),
          new GridFieldDataColumns(),
          new GridFieldPaginator(30),
          new GridFieldEditButton(),
          new GridFieldDeleteAction(),
          new GridFieldDetailForm()
        );

        $gridField = new GridField("HeroSlides", "HeroSlides", $this->HeroSlides(), $gridFieldConfig);
        $fields->addFieldToTab("Root.HeroSlides", $gridField);

        return $fields;
        
    }

    public function getMyHeroNavigation() {
        if ($slides = HeroSlide::get()->filter(array('HeroSliderPageID' => $this->ID))->sort('SortOrder','ASC')) {
          return $slides;
        } 
    }

    public function getMyHeroSlides() {
        if ($slides = HeroSlide::get()->filter(array('HeroSliderPageID' => $this->ID))->sort('SortOrder','ASC')) {
        // var_dump($slides);
        $records = "";
        $records = '<ul class="cd-hero__slider">';
        // echo count($slides);
        $counter=0;
        foreach ($slides as $slide) {
                $counter++;

                $title=$slide->Title;
                $largeText=$slide->LargeText;
                $description=$slide->Description;
                $sortOrder=$slide->SortOrder;
                $backgroundColour=$slide->BackgroundColour;
                $imageURL=$slide->SlideImage()->URL;
                $imageID=$slide->SlideImage()->ID;
                $position=$slide->ImagePosition;
                $videoURL=$slide->VideoURL;
                $linkURL=$slide->LinkPage()->URLSegment;
                $linkID=$slide->LinkPage()->ID;
                $linkButtonText=$slide->LinkButtonText;
                $buttonTwoURL=$slide->ButtonTwoURL;
                $linkButtonTwoText=$slide->LinkButtonTwoText;
                if(!$backgroundColour=$slide->BackgroundColour) {
                  $backgroundColour='grey';
                }

                if ($counter==1) {
                  $slideLiClass="cd-hero__slide cd-hero__slide--selected js-cd-slide";
                } else {
                  $slideLiClass="cd-hero__slide js-cd-slide";
                }
                // check for video file and add the necessary class to the <li> element...
                // check for full width and add the necessary inline style to the <li> element...

                $records .= '<li class="'.$slideLiClass.' '.$backgroundColour.'">';


                // echo '<br><p> the link url?</p>'.$linkURL.'<br><br>';

                // sort out the width class for image and content divs
                if ($position=='Left' || $position=='Right') {
                    $widthClass='cd-hero__content--half-width';
                } else {
                    $widthClass='cd-hero__content--full-width';
                }

                if ($position=='Left' || $position=="Full"){

                  // the image div comes first...
                  if ($imageID) {
                    $records .= '<div class="cd-hero__content '.$widthClass.' cd-hero__content--img">';
                    $records .= '<img src ="'.$imageURL.'"alt ="'.$title.'"/>'; 
                    $records .= '</div> <!-- .cd-hero__content -->';
                  }
                }

                // build the content wrapper div...

                $contentDivClass='cd-hero__content '.$widthClass;
                if ($largeText) {
                  $textSizeClass=' class="superSizeText" ';
                } else {
                  $textSizeClass='';
                }

                $records .= '<div class="'.$contentDivClass.'"">';
                $records .= '<h1'.$textSizeClass.'>'.$title.'</h1>';
                $records .= '<p>'.$description.'</p>';

                // conditional buttons...
                if ($linkID) {
                  $records .= '<a href="'.$linkURL.'" class="cd-hero__btn">'.$linkButtonText.'</a>';
                }

                // $records .= '<a href="#0" class="cd-hero__btn">Bongo</a>';
                if ($buttonTwoURL) {
                  $records .= '<a href="'.$buttonTwoURL.'" class="cd-hero__btn cd-hero__btn--secondary">'.$linkButtonTwoText.'</a>';
                }

                $records .= '</div> <!-- .cd-hero__content -->'; // closes the content div...

                if ($videoURL) {
                  $records .= '<div class="cd-hero__content cd-hero__content--bg-video js-cd-bg-video" data-video="'.$videoURL.'">';
                  //   <!-- video element will be loaded using JavaScript -->
                  $records .= '</div> <!-- .cd-hero__content -->';
                }

                if ($position=='Right'){

                  if ($imageID) {
                    // the image div comes last...
                    $records .= '<div class="cd-hero__content '.$widthClass.' cd-hero__content--img">';
                    $records .= '<img src ="'.$imageURL.'"alt ="'.$title.'"/>'; 
                    $records .= '</div> <!-- .cd-hero__content -->';                    
                  }

                } 
                
                $records .= "</li>";

        }
        $records .= "</ul>";
        return $records;
      } else {
      
      }
    }

}

class HeroSliderPage_Controller extends Page_Controller {
	
}
