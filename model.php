<?php
/**
 * Deal model class for data returned from the web service.
 *
 * @todo Build out the members & methods that should exist in this model
 */
class DealModel
{
        public $title;
        public $description;
        public $link;
        public $pubDate;
        public $originCode;

        public function __construct($item) 
        {
                $this->title = (string) $item->title;
                $this->description = (string) $item->description;
                $this->link = (string) $item->link;
                $this->pubDate =  (string) $item->pubDate;
                $this->originCode =  (string) $item['kyk']['originCode'];
        }

}
