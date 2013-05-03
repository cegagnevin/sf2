<?php

namespace Licweb\LocationBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'location' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.Licweb.LocationBundle.Model.map
 */
class LocationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Licweb.LocationBundle.Model.map.LocationTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('location');
        $this->setPhpName('Location');
        $this->setClassname('Licweb\\LocationBundle\\Model\\Location');
        $this->setPackage('src.Licweb.LocationBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 100, null);
        $this->getColumn('name', false)->setPrimaryString(true);
        $this->addColumn('street', 'Street', 'VARCHAR', true, 100, null);
        $this->addColumn('zipcode', 'Zipcode', 'VARCHAR', true, 5, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 100, null);
        $this->addColumn('presentation', 'Presentation', 'VARCHAR', false, 1000, null);
        $this->addColumn('phoneNumber', 'Phonenumber', 'VARCHAR', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Comment', 'Licweb\\LocationBundle\\Model\\Comment', RelationMap::ONE_TO_MANY, array('id' => 'idLocation', ), null, null, 'Comments');
    } // buildRelations()

} // LocationTableMap
