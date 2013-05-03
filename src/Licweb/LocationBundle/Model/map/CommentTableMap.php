<?php

namespace Licweb\LocationBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'comment' table.
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
class CommentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Licweb.LocationBundle.Model.map.CommentTableMap';

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
        $this->setName('comment');
        $this->setPhpName('Comment');
        $this->setClassname('Licweb\\LocationBundle\\Model\\Comment');
        $this->setPackage('src.Licweb.LocationBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('author', 'Author', 'VARCHAR', true, 100, null);
        $this->getColumn('author', false)->setPrimaryString(true);
        $this->addColumn('message', 'Message', 'VARCHAR', true, 1000, null);
        $this->addForeignKey('idLocation', 'Idlocation', 'INTEGER', 'location', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Location', 'Licweb\\LocationBundle\\Model\\Location', RelationMap::MANY_TO_ONE, array('idLocation' => 'id', ), null, null);
    } // buildRelations()

} // CommentTableMap
