<?php
 include_once( 'extension/groupdocsannotationnet/classes/groupdocsannotationnet.php' );
/*
class GroupdocsAnnotationNetFunctionCollection
{

function GroupdocsAnnotationNetFunctionCollection()
{
}

function &fetchList( $offset, $limit )
{
$parameters = array( 'offset' => $offset,
'limit' => $limit );
$lista =& Groupdocsannotationnet( $parameters );

return array( 'result' => &$lista );
}

}
*/
class eZModul3FunctionCollection
{ 
    public function __construct() 
    {
        // ...
    }
 
    /*
     * Is opened by('modul1', 'list', hash('as_object', $bool ) ) fetch
     * @param bool $asObject
     */ 
    public static function fetchList( $asObject ) 
    { 
        return array( 'result' => GroupDocsAnnotationNet::fetchList( $asObject ) ); 
    }
 
    /*
     * Is opened by('modul1', 'count', hash() ) fetch
     */
    public static function fetchJacExtensionDataListCount()
    { 
        return array( 'result' => GroupDocsAnnotationNet::getListCount() ); 
    } 
} 
?>