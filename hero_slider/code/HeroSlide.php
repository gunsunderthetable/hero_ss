<?php

	class HeroSlide extends DataObject{
		
		public static $db = array(
			'Title' => 'Varchar(200)',
			'Description' => 'Text',
            'ExternalLink' => 'Text',
            'NavigationTitle' => 'Text',
            'VideoURL' => 'Text',
            'LinkButtonText' => 'Text',
            'ButtonTwoURL' => 'Text',
            'LinkButtonTwoText' => 'Text',
            'ImagePosition' => 'Text',
            'SortOrder'=>'Int',
            'BackgroundColour' => 'Text',
            'LargeText' => 'Boolean'                   
		);
		
		public static $has_one = array(
			'SlideImage' => 'Image',
			'HeroSliderPage' => 'HeroSliderPage',
			'LinkPage' => 'SiteTree'
		);
                
        public static $default_sort='SortOrder';		
                
		public function getCMSFields(){
			return new FieldList(
				new TextField('Title', 'Slide title'),
				new CheckBoxField('LargeText', 'Super-size text'),
				new TextareaField('Description', 'Slide description'),
				new TreeDropdownField('LinkPageID', 'Select a page to link to from the image', 'SiteTree'),
        		new TextField('LinkButtonText', 'Text for link button'),
        		new TextField('ButtonTwoURL', 'Link for the second button if needed'),
        		new TextField('LinkButtonTwoText', 'Text for second link button'),
				new UploadField('SlideImage', 'Image'),
				new DropdownField('ImagePosition', 'Image position', array('Full'=>'Full width','Left' => 'On the left', 'Right' => 'On the right')),
				new DropdownField('BackgroundColour', 'Background Colour', array('black_pearl'=>'black_pearl','clinker' => 'clinker','grey' => 'grey','jagger' => 'jagger','san_juan' => 'san_juan','turtle_green' => 'turtle_green','verdigris' => 'verdigris')),
				new TextField('VideoURL', 'URL to video file')
			);
		}
		
	}

