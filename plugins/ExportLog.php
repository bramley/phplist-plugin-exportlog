<?php
/**
 * Demo plugin for phplist.
 * 
 * This file is a part of Demo Plugin.
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @category  phplist
 * @author    Duncan Cameron
 * @copyright 2016 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 */

/**
 * Registers the plugin with phplist.
 */
class ExportLog extends phplistPlugin
{
    /*
     *  Inherited variables
     */
    public $name = 'ExportLog Plugin';
    public $authors = 'Duncan Cameron';
    public $description = 'Export the event log';

    /* pages that can be run from the command line */
    public $commandlinePluginPages = array(
        // 'page1'
    );

    /* pages to be added to phplist menus */
    public $topMenuLinks = array(
        'exportlog' => array('category' => 'system'),
    );

    /* menu captions for the pages */
    public $pageTitles = array(
        'exportlog' => 'Export the event log',
    );

    public function __construct()
    {
        $this->coderoot = dirname(__FILE__) . '/' . 'ExportLog' . '/';
        parent::__construct();
    }
}
