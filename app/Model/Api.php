<?php
/**
 * API Model
 *
 * Handles API Data Source Actions
 *
 * @package    API.Model
 * @author     
 * @copyright  
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Release: @package_version@
 * @link       
 */

class Api extends AppModel
{

    /**
     * Model name
     *
     * @var $name string
     */
    public $name = 'Api';

    /**
     * The name of the DataSource connection that this Model uses
     *
     * @var $useDbConfig string
     */
    public $useDbConfig = 'soap';

    /**
     * Custom database table name, or null/false if no table association is desired.
     *
     * @var bool
     */
    public $useTable = false;
}