<?php /* 4.0 version */

class stripexceptOperator
{
    function stripexceptOperator( $name = "strip_except" )
    {
	$this->Operators = array( $name );
    }

    function &operatorList()
    {
	return $this->Operators;
    }
    
    function operatorTemplateHints()
    {
	return array( $this->AttributeName =>
	       array( 'input' => true,
	              'output' => true,
                      'parameters' => 2 ) );
    }
    function namedParameterList()
    {
        return array( 'strip_except' => array(
                                           'type' => 'string',
                                           'required' => true,
                                           'default' => "<a><b><i>" 
                         ) );
    }


    function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    {
        switch ( $operatorName )
        {
            case 'strip_except': {
		$operatorValue = strip_tags($operatorValue,$namedParameters['strip_except']);
            }break;
        }
    }
}

?>
