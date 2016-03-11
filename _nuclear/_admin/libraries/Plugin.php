<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Plugin 
{
	function get_list($ci)
		{
	
	
			$map = directory_map(MODULESPATH, 1);
			foreach($map as $key=>$val)
			{
				$value= str_replace('\\','',$val);
				$map[$key]=$ci->_pluginconfig($value);
				if(empty($map[$key]))
				{
					$map[$key]['error']=$value;
				}
				$pluginas = $ci->_themeconfig('sidebar');
				if($this->_installed($pluginas->item,$value))
				{
					$map[$key]->state=1;
				}
				else{
					$map[$key]['state']=0;
				}
				
			}
			return $map;
		}
	function _exist($nodes,$tag,$value)
	{
		foreach ($nodes as $key=>$val)
		{
				
			$node_url = $val->getElementsByTagName($tag) ;
			$reponse=FALSE;
			foreach($node_url as $key2=>$val2)
			{
				if($val2->nodeValue==$value)
				{
					$reponse= TRUE;
				}
			}
			return $reponse;
		}
	}
	function _installed($items,$name)
	{	
		
			$exist=false;
			foreach($items as $key=>$val)
			{
				
				if($val->url==$name)
				{
					$exist=TRUE;
				}
				
			}
			return $exist;
	}
	
	function uninstall($plug='')
	{
		$response=false;
		$xml = new DOMDocument();
		$xml->formatOutput = true;
		$xml->preserveWhiteSpace = true;
		$xml->load(VIEWPATH.'default/config.xml');
		$nodes = $xml->getElementsByTagName('sidebar');
		if ($nodes->length > 0) {
			if($this->_exist($nodes, 'url', $plug->data['nameClass']))
			{
				foreach ($nodes as $key=>$val)
				{
				
					$node_url = $val->getElementsByTagName('url');
					
					foreach($node_url as $key2=>$val2)
					{
						
						if($val2->nodeValue==$plug->data['nameClass'])
						{
							$removit= $val2->parentNode;
							$val->removeChild($removit);
							
						}
					
					}
					
					
				}
				$text = $this->indentContent($xml->saveXML());
				if(write_file(VIEWPATH.'default/config.xml', $text))
				{
					$response=TRUE;
				}			
			}
			
		}
		return $response;
	}
	
	
	function install($plug='')
	{
		$xml = new DOMDocument();
		$xml->formatOutput = true;			
		$xml->preserveWhiteSpace = true;
		$xml->load(VIEWPATH.'default/config.xml');
		$nodes = $xml->getElementsByTagName('sidebar');			
			if ($nodes->length > 0) {				
				if(!$this->_exist($nodes, 'url', $plug->data['nameClass']))
				{					
					$xml_item = $xml->createElement("item");
					$xml_label = $xml->createElement("label");
					$xml_url = $xml->createElement("url",$plug->data['nameClass']);
					$xml_icon = $xml->createElement("icon",$plug->icon);
						foreach($plug->label as $key=>$value)
						{
							
							$xml_labelpt=$xml->createElement($key,$value);
							$xml_label->appendChild( $xml_labelpt );
						}
					$xml_item->appendChild( $xml_label );	
					$xml_item->appendChild( $xml_icon );
					$xml_item->appendChild( $xml_url );
					$nodes[0]->appendChild($xml_item);
					$text = $this->indentContent($xml->saveXML());
					write_file(VIEWPATH.'default/config.xml', $text);
				}
			}
	}
	
	
	function indentContent($content, $tab="\t")
	{
	
		// add marker linefeeds to aid the pretty-tokeniser (adds a linefeed between all tag-end boundaries)
		$content = preg_replace('/(>)(<)(\/*)/', "$1\n$2$3", $content);
	
		// now indent the tags
		$token = strtok($content, "\n");
		$result = ''; // holds formatted version as it is built
		$pad = 0; // initial indent
		$matches = array(); // returns from preg_matches()
	
		// scan each line and adjust indent based on opening/closing tags
		while ($token !== false)
		{
			$token = trim($token);
			// test for the various tag states
	
			// 1. open and closing tags on same line - no change
			if (preg_match('/.+<\/\w[^>]*>$/', $token, $matches)) $indent=0;
			// 2. closing tag - outdent now
			elseif (preg_match('/^<\/\w/', $token, $matches))
			{
				$pad--;
				if($indent>0) $indent=0;
			}
			// 3. opening tag - don't pad this one, only subsequent tags
			elseif (preg_match('/^<\w[^>]*[^\/]>.*$/', $token, $matches)) $indent=1;
			// 4. no indentation needed
			else $indent = 0;
	
			// pad the line with the required number of leading spaces
			$line = str_pad($token, strlen($token)+$pad, $tab, STR_PAD_LEFT);
			$result .= $line."\n"; // add to the cumulative result, with linefeed
			$token = strtok("\n"); // get the next token
			$pad += $indent; // update the pad size for subsequent lines
		}
		return $result;
	}
}