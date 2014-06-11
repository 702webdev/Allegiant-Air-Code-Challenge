<?php
/**
 * Example data access object.
 *
 * Retrieves a RSS feed via webservice and loads the data into a models.
 *
 * @see http://www.kayak.com/h/rss/buzz?code=LAS&mc=USD
 * @todo Add code to retrieve data from the web service
 * @todo Add code to instantiate/populate model(s)
 */
define ("RSS_FEED", "http://www.kayak.com/h/rss/buzz?code=LAS&mc=USD");


class DealDao
{
        public $models = array(); 

    public static function getData()
    {
          
                $xml_source = simplexml_load_file(RSS_FEED);
                foreach ($xml_source->channel->item as $item) {
                        $models[] = new DealModel($item);
                }
                return $models;
        }
}