<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaContentRatingUnitedKingdom File
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
* MediaContentRatingUnitedKingdom class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaContentRatingUnitedKingdom extends Entity
{

    /**
    * Gets the movieRating
    * Movies rating selected for United Kingdom. Possible values are: allAllowed, allBlocked, general, universalChildren, parentalGuidance, agesAbove12Video, agesAbove12Cinema, agesAbove15, adults.
    *
    * @return RatingUnitedKingdomMoviesType|null The movieRating
    */
    public function getMovieRating()
    {
        if (array_key_exists("movieRating", $this->_propDict)) {
            if (is_a($this->_propDict["movieRating"], "\Beta\Microsoft\Graph\Model\RatingUnitedKingdomMoviesType") || is_null($this->_propDict["movieRating"])) {
                return $this->_propDict["movieRating"];
            } else {
                $this->_propDict["movieRating"] = new RatingUnitedKingdomMoviesType($this->_propDict["movieRating"]);
                return $this->_propDict["movieRating"];
            }
        }
        return null;
    }

    /**
    * Sets the movieRating
    * Movies rating selected for United Kingdom. Possible values are: allAllowed, allBlocked, general, universalChildren, parentalGuidance, agesAbove12Video, agesAbove12Cinema, agesAbove15, adults.
    *
    * @param RatingUnitedKingdomMoviesType $val The value to assign to the movieRating
    *
    * @return MediaContentRatingUnitedKingdom The MediaContentRatingUnitedKingdom
    */
    public function setMovieRating($val)
    {
        $this->_propDict["movieRating"] = $val;
         return $this;
    }

    /**
    * Gets the tvRating
    * TV rating selected for United Kingdom. Possible values are: allAllowed, allBlocked, caution.
    *
    * @return RatingUnitedKingdomTelevisionType|null The tvRating
    */
    public function getTvRating()
    {
        if (array_key_exists("tvRating", $this->_propDict)) {
            if (is_a($this->_propDict["tvRating"], "\Beta\Microsoft\Graph\Model\RatingUnitedKingdomTelevisionType") || is_null($this->_propDict["tvRating"])) {
                return $this->_propDict["tvRating"];
            } else {
                $this->_propDict["tvRating"] = new RatingUnitedKingdomTelevisionType($this->_propDict["tvRating"]);
                return $this->_propDict["tvRating"];
            }
        }
        return null;
    }

    /**
    * Sets the tvRating
    * TV rating selected for United Kingdom. Possible values are: allAllowed, allBlocked, caution.
    *
    * @param RatingUnitedKingdomTelevisionType $val The value to assign to the tvRating
    *
    * @return MediaContentRatingUnitedKingdom The MediaContentRatingUnitedKingdom
    */
    public function setTvRating($val)
    {
        $this->_propDict["tvRating"] = $val;
         return $this;
    }
}
