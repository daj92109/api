<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Api;

use Tmdb\Exception\NotImplementedException;

class Lists
    extends AbstractApi
{
    /**
     * Get a list by id.
     *
     * @param $list_id
     * @param array $parameters
     * @param array $headers
     * @return mixed
     */
    public function getList($list_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('list/' . $list_id, $parameters, $headers);
    }

    /**
     * This method lets users create a new list. A valid session id is required.
     *
     * @throws NotImplementedException
     * @return mixed
     */
    public function createList()
    {
        throw new NotImplementedException(__METHOD__ . ' has not been implemented yet.');
    }

    /**
     * Check to see if a movie ID is already added to a list.
     *
     * @param $list_id
     * @param array $parameters
     * @param array $headers
     * @return mixed
     */
    public function getItemStatus($list_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('list/' . $list_id . '/item_status', $parameters, $headers);
    }

    /**
     * Get the cast information for a specific list id.
     *
     * @throws NotImplementedException
     * @return mixed
     */
    public function addMediaToList()
    {
        throw new NotImplementedException(__METHOD__ . ' has not been implemented yet.');
    }

    /**
     * Get the images (posters and backdrops) for a specific list id.
     *
     * @throws NotImplementedException
     * @return mixed
     */
    public function removeMediaFromList()
    {
        throw new NotImplementedException(__METHOD__ . ' has not been implemented yet.');
    }

    /**
     * Get the plot keywords for a specific list id.
     *
     * @throws NotImplementedException
     * @return mixed
     */
    public function deleteList()
    {
        throw new NotImplementedException(__METHOD__ . ' has not been implemented yet.');
    }
}
