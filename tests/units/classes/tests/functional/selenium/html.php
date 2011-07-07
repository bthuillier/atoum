<?php

namespace mageekguy\atoum\tests\units\tests\functional\selenium;

use
	\mageekguy\atoum,
	\mageekguy\atoum\tests\functional\selenium as s,
	\mageekguy\atoum\tests\functional\selenium\drivers as d
;

require_once(__DIR__ . '/../../../runner.php');

class html extends atoum\test
{
	public function testUnableToGetTitleIfWebDriverIsNotSet()
	{
		$html = new s\html('http://www.atoum.org');
		
		$this->assert
			->exception(function() use($html) {
						$html->getTitle();
					}
			)
				->isInstanceOf('\mageekguy\atoum\exceptions\logic\invalidArgument')
				->hasMessage('webDriver must be set');
		;
	}
/*		
	public function testAtoum()
	{
		$atoumHomePage = $this->getHtml('http://www.atoum.org')
							  ->with(new d\firefox());
		
		$this->assert
			->html($atoumHomePage)
				->hasTitle('www.mageekbox.net');
	}
	
	public function testGoogle()
	{
		$googleHomePage = $this->getHtml('http://www.google.com')
							  ->with(new d\firefox());
		
		$this->assert
			->html($googleHomePage)
				->hasTitle('Google');
	}
*/
}

?>