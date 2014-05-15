<?php

/*
  CREATE TABLE gdan (
  `id` int(10) unsigned NOT NULL auto_increment,
  `width` int(10) unsigned NOT NULL default '0',
  `height` int(10) unsigned NOT NULL default '0',
  `url` varchar(128) NOT NULL default '',
  `file_hook` varchar(128) NOT NULL default '',
  PRIMARY KEY  (`id`)
  ) ENGINE = MYISAM ;
 */
include_once( 'kernel/classes/ezpersistentobject.php' );

class GroupDocsAnnotationNet extends eZPersistentObject {

    /**
     * Constructor 
     *
     * @param array $row Hash of attributes for new GroupDocsAnnotation object
     */
    public function __construct(array $row) {
        parent::eZPersistentObject($row);
    }

    /*
     * Definition of the data object structure /of the structure of the database table 
     *
     * @return array Hash with table definition for this persistent object
     */

    public static function definition() {
        return array('fields' => array('id' => array('name' => 'ID',
                    'datatype' => 'integer',
                    'default' => 0,
                    'required' => true),
                'url' => array('name' => 'URL',
                    'datatype' => 'string',
                    'default' => '',
                    'required' => true),
                'file_hook' => array('name' => 'FileHook',
                    'datatype' => 'string',
                    'default' => '',
                    'required' => true),
                'width' => array('name' => 'Width',
                    'datatype' => 'int',
                    'default' => '',
                    'required' => true),
                'height' => array('name' => 'Height',
                    'datatype' => 'int',
                    'default' => '',
                    'required' => true),
            ),
            'keys' => array('id'),
            'function_attributes' => array('url_object' => 'getUrlObject'), // accessing to attribute "user_object" will trigger getUserObject() method
            'increment_key' => 'id',
            'class_name' => 'GroupDocsAnnotationNet',
            'name' => 'gdan'
        );
    }

    /**
     * Help function will open in attribute function 
     * @param bool $asObject
     */
    public function getUrlObject($asObject = true) {
        $url = $this->attribute('url');

        //$file_id_Ob = eZUser::fetch($file_id, $asObject); 
        //return $file_id_Ob; 
        print 'Function getUrlObject() not in use :)';
    }

    /**
     * Creates a new object of type GroupDocsAnnotationNet and shows it
     * @param int $user_id
     * @param string $value
     * @return GroupDocsAnnotationNet
     */
    public static function create($url, $file_hook, $width, $height) {
        $row = array('id' => null,
            'url' => $url,
            'file_hook' => $file_hook,
            'width' => $width,
            'height' => $height,
        );
        return new self($row);
    }

    /**
     * Shows the data as GroupDocsAnnotationNet with given id
     * @param int $id of File ID
     * @param bool $asObject
     * @return GroupDocsAnnotation
     */
    public static function fetchByID($id, $asObject = true) {
        $result = eZPersistentObject::fetchObject(
                        self::definition(), null, array('id' => $id), $asObject, null, null);

        if ($result instanceof GroupDocsAnnotationNet)
            return $result;
        else
            return false;
    }

    /**
     * Shows all the objects GroupDocsAnnotationNet as object or array
     * @param int $asObject
     * @return array( GroupDocsAnnotationNet )
     */
    public static function fetchList($asObject = true) {
        $result = eZPersistentObject::fetchObjectList(
                        self::definition(), null, null, null, null, $asObject, false, null);
        return $result;
    }

    /**
     * Shows the amount of data
     * @return int 
     */
    public static function getListCount() {
        $db = eZDB::instance();
        $query = 'SELECT COUNT(id) AS count FROM gdan';
        $rows = $db->arrayQuery($query);
        return $rows[0]['count'];
    }

    public static function getMaxId() {
        $db = eZDB::instance();
        $query = 'SELECT MAX(id) AS mid FROM gdan';
        $rows = $db->arrayQuery($query);
        return $rows[0]['mid'];
    }

    // -- member variables-- 
    protected $ID;
    protected $Url;
    protected $FileHook;

}

?>