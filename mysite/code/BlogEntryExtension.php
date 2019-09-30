<?php

class BlogEntryExtension extends DataExtension {

    public static $has_one = array(
        'BlogImage' => 'Image',
    );

    public function updateCMSFields(FieldList $fields) {
          $fields->addFieldToTab('Root.Main', new UploadField('BlogImage', 'Blog Image'),'Content');
    }    
    
    
}