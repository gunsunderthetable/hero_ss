<?php

class SiteConfigExtension extends DataExtension {
    private static $db = array(
        'FooterLinks' => 'Text',
        'HeaderLinks' => 'Text',
        'TwitterLink' => 'Text',
        'FacebookLink' => 'Text',
        'GoogleAnalytics' => 'Varchar(20)',
        'SiteColour' => 'Text',
    );
    
    private static $has_one = array(
        'Favicon' => 'Image'
    );

    public function updateCMSFields(FieldList $fields)  {


        $fields->addFieldToTab('Root.Main', DropdownField::create('SiteColour', 'Site colour', array('default' => 'default', 'blue'=>'blue','green'=>'green','purple' => 'purple','silver' => 'silver')));
        $fields->addFieldToTab('Root.Main', new TextField('GoogleAnalytics', 'Google analytics ID'));

        $fields->addFieldToTab('Root.SocialMedia', new TextField('TwitterLink', 'link to Twitter (include http)'));
        $fields->addFieldToTab('Root.SocialMedia', new TextField('FacebookLink', 'link to Facebook (include http)'));
        $fields->addFieldToTab('Root.Footer', new TextareaField('FooterLinks', 'Footer links - one link per line. The format is: Page or external web address&lt;space&gt;Text to use as the link<br>For example - /about-us About our company <br>or http://www.google.co.uk Google'));
        $fields->addFieldToTab('Root.Header', new TextareaField('HeaderLinks', 'Header links - one link per line. The format is: Page or external web address&lt;space&gt;Text to use as the link<br>For example - /about-us About our company <br>or http://www.google.co.uk Google'));
        $faviconField=UploadField::create('Favicon', 'Your Favicon')->setDescription("Your Favicon is a small image that will be displayed in a user's browser tab. You can leave this blank if you don't have one.");
        $fields->addFieldToTab('Root.HeaderImages', $faviconField);
    }
    

}
