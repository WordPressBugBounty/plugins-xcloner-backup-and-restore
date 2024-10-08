<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaContentRatingIreland File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }

/**
* MediaContentRatingIreland class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaContentRatingIreland extends Entity
{

    /**
    * Gets the movieRating
    * Movies rating selected for Ireland. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove12, agesAbove15, agesAbove16, adults.
    *
    * @return RatingIrelandMoviesType|null The movieRating
    */
    public function getMovieRating()
    {
        if (array_key_exists("movieRating", $this->_propDict)) {
            if (is_a($this->_propDict["movieRating"], "\Beta\Microsoft\Graph\Model\RatingIrelandMoviesType") || is_null($this->_propDict["movieRating"])) {
                return $this->_propDict["movieRating"];
            } else {
                $this->_propDict["movieRating"] = new RatingIrelandMoviesType($this->_propDict["movieRating"]);
                return $this->_propDict["movieRating"];
            }
        }
        return null;
    }

    /**
    * Sets the movieRating
    * Movies rating selected for Ireland. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove12, agesAbove15, agesAbove16, adults.
    *
    * @param RatingIrelandMoviesType $val The value to assign to the movieRating
    *
    * @return MediaContentRatingIreland The MediaContentRatingIreland
    */
    public function setMovieRating($val)
    {
        $this->_propDict["movieRating"] = $val;
         return $this;
    }

    /**
    * Gets the tvRating
    * TV rating selected for Ireland. Possible values are: allAllowed, allBlocked, general, children, youngAdults, parentalSupervision, mature.
    *
    * @return RatingIrelandTelevisionType|null The tvRating
    */
    public function getTvRating()
    {
        if (array_key_exists("tvRating", $this->_propDict)) {
            if (is_a($this->_propDict["tvRating"], "\Beta\Microsoft\Graph\Model\RatingIrelandTelevisionType") || is_null($this->_propDict["tvRating"])) {
                return $this->_propDict["tvRating"];
            } else {
                $this->_propDict["tvRating"] = new RatingIrelandTelevisionType($this->_propDict["tvRating"]);
                return $this->_propDict["tvRating"];
            }
        }
        return null;
    }

    /**
    * Sets the tvRating
    * TV rating selected for Ireland. Possible values are: allAllowed, allBlocked, general, children, youngAdults, parentalSupervision, mature.
    *
    * @param RatingIrelandTelevisionType $val The value to assign to the tvRating
    *
    * @return MediaContentRatingIreland The MediaContentRatingIreland
    */
    public function setTvRating($val)
    {
        $this->_propDict["tvRating"] = $val;
         return $this;
    }
}
